#!/usr/local/bin/php
<?php
require_once('db_connect.php');

//Multiple
$parisRes = mysqli_query($dbhandle, "SELECT * FROM coupon WHERE etat_pari= 'lost' AND type_pari = 'integrale' AND DATE > ( NOW() - INTERVAL 1 DAY ) ");
//$parisRes = mysqli_query($dbhandle, "SELECT * FROM coupon WHERE id='36932'");

while($rowCoupon = mysqli_fetch_assoc($parisRes)){

    $lost = false;

    $couponDbId = $rowCoupon['id'];
    $usager = $rowCoupon['usager'];

    $resNbEv = mysqli_query($dbhandle, "SELECT distinct codepub FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'");
    $rowNbEv = mysqli_num_rows($resNbEv);

    if($rowNbEv < 1){
        $lost = true;
        mysqli_query($dbhandle, "UPDATE coupon SET etat_pari = 'lost' WHERE id = '$couponDbId'");
    }

    $sqlIntgOcEvents = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
                                  GROUP BY e.codepub HAVING count(*) = 1";
    $resIntgOcEvents = mysqli_query($dbhandle, $sqlIntgOcEvents) or die(mysqli_error($dbhandle));

    $wronBet = 0;
    while($rowIntgOcEvents = mysqli_fetch_assoc($resIntgOcEvents)){
        if($rowIntgOcEvents['status'] == 2){
            $wronBet++;
        }
    }

    if($wronBet > 0){
        $lost = true;
        mysqli_query($dbhandle, "UPDATE coupon SET etat_pari = 'lost' WHERE id = '$couponDbId'");
    }

    $sqlIntgEvents = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
                                  GROUP BY codepub HAVING count(*) >1";
    $resIntgEvents = mysqli_query($dbhandle, $sqlIntgEvents) or die(mysqli_error($dbhandle));

    $allInt = array();

    while($rowIntgEvents = mysqli_fetch_assoc($resIntgEvents)){
        $codePubInt = $rowIntgEvents['codepub'];

        $sqlIntgCotes = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
                                    AND codepub='$codePubInt'";
        $resIntgCotes = mysqli_query($dbhandle, $sqlIntgCotes) or die(mysqli_error($dbhandle));

        $sameCodePub = array();
        $countEventSameCodePub = 0;
        $countFalseEventSameCodePub = 0;

        while($rowIntgCotes = mysqli_fetch_assoc($resIntgCotes)){
            $countEventSameCodePub++;
            if($rowIntgCotes['status'] == 2){
                $countFalseEventSameCodePub++;
            }
        }

        if($countEventSameCodePub == $countFalseEventSameCodePub){
            $lost = true;
            mysqli_query($dbhandle, "UPDATE coupon SET etat_pari = 'lost' WHERE id = '$couponDbId'");
        }
    }


    if($lost == false){

        $notYet = false;
        $coteTotArr = array();

        $sqlIntgEvents = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
                                  GROUP BY e.codepub HAVING count(*) >1";
        $resIntgEvents = mysqli_query($dbhandle, $sqlIntgEvents) or die(mysqli_error($dbhandle));

        while($rowIntgEvents = mysqli_fetch_assoc($resIntgEvents)){
            $codePubInt = $rowIntgEvents['codepub'];
            $sqlIntgCotes = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
                                    AND codepub='$codePubInt'";
            $resIntgCotes = mysqli_query($dbhandle, $sqlIntgCotes) or die(mysqli_error($dbhandle));

            $tmpCote = 0;
            while($rowIntgCotes = mysqli_fetch_assoc($resIntgCotes)){
                if($rowIntgCotes['status'] == 0){
                    $notYet = true;
                }else{
                    if($rowIntgCotes['status'] == 1){
                        $tmpCote += str_replace(",", ".", $rowIntgCotes['cote']);
                    }
                }
            }

            $coteTotArr[] = $tmpCote;
        }

        $sqlIntgOcEvents = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
                                  GROUP BY codepub HAVING count(*) =1";
        $resIntgOcEvents = mysqli_query($dbhandle, $sqlIntgOcEvents) or die(mysqli_error($dbhandle));
        if(mysqli_num_rows ($resIntgOcEvents) > 0) {
            while ($rowIntgOcEvents = mysqli_fetch_assoc($resIntgOcEvents)) {
                if($rowIntgOcEvents['status'] == 0){
                    $notYet = true;
                }else{
                    if($rowIntgOcEvents['status'] == 1){
                        $coteTotArr[] = str_replace(",", ".", $rowIntgOcEvents['cote']);
                    }
                }
            }
        }

        if($notYet == false){

            $bonusPerc = intval(calculBonusPerc($rowNbEv));

            //Won
            $resUsager = mysqli_query($dbhandle, "SELECT * FROM usager WHERE identificateur = '$usager'");
            $rowUsager = mysqli_fetch_assoc($resUsager);
            $winnerId = $rowUsager['id'];

            $codeCoupon = $rowCoupon['code_coupon'];

            $coteTot = 1;
            foreach($coteTotArr as $cote){
                if($cote > 0){
                    $coteTot *= $cote;
                }
            }

            $coteTot = number_format($coteTot, 2, ',', '');
            $montantJoue = number_format($rowCoupon['amount']/$rowCoupon['multiplicateur'], 2, '.', '');
            $gainSansBonus = number_format($coteTot * $montantJoue, 2, '.', '');

            $bonusPerc = intval(calculBonusPerc($rowNbEv));

            $gain = ( $gainSansBonus * (100 + $bonusPerc) ) / 100;
            $gain = number_format($gain, 2, '.', '');

            date_default_timezone_set('Africa/Tunis');
            $currentDateTime = date('Y-m-d H:i:s') ;

            $newAmount = $rowUsager['solde'] + $gain;
            mysqli_query($dbhandle, "UPDATE usager SET solde = '$newAmount' WHERE id = '$winnerId'");

            mysqli_query($dbhandle, "UPDATE coupon SET etat_pari = 'win' WHERE id = '$couponDbId'");
            mysqli_query($dbhandle, "UPDATE coupon SET montant_gagne = '$gain' WHERE id = '$couponDbId'");

            //Transaction
            $sql = "INSERT INTO transaction (date, type, coupon, avoir, solde, id_usager, id_coupon)
                    VALUES ('$currentDateTime', 'gain pari', '$codeCoupon', '$gain', '$newAmount', '$winnerId', '$couponDbId')";
            mysqli_query($dbhandle, $sql) or die(mysqli_error($dbhandle));
        }

    }

}

function calculBonusPerc($nbEvent){
    $perc = 0;
    switch($nbEvent){
        case 4:
            $perc = 2;
            break;
        case 5:
            $perc = 6;
            break;
        case 6:
            $perc = 10;
            break;
        case 7:
            $perc = 15;
            break;
        case 8:
            $perc = 20;
            break;
        case 9:
            $perc = 25;
            break;
        case 10:
            $perc = 30;
            break;
        case 11:
            $perc = 35;
            break;
        case 12:
            $perc = 40;
            break;
        case 13:
            $perc = 45;
            break;
        case 14:
            $perc = 50;
            break;
        case 15:
            $perc = 55;
            break;
        case 16:
            $perc = 60;
            break;
        case 17:
            $perc = 65;
            break;
        case 18:
            $perc = 70;
            break;
        case 19:
            $perc = 75;
            break;
        case 20:
            $perc = 80;
            break;
        case 21:
            $perc = 85;
            break;
        case 22:
            $perc = 90;
            break;
        case 23:
            $perc = 95;
            break;
        case 24:
            $perc = 100;
            break;
        case 25:
            $perc = 110;
            break;
        case 26:
            $perc = 120;
            break;
        case 27:
            $perc = 130;
            break;
        case 28:
            $perc = 140;
            break;
        case 29:
            $perc = 150;
            break;
        case 30:
            $perc = 160;
            break;
    }

    return $perc;
}
?>