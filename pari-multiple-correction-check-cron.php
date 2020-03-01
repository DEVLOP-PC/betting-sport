#!/usr/bin/php
<?php
require_once('db_connect.php');

//Multiple
$parisRes = mysqli_query($dbhandle, "SELECT * FROM coupon WHERE etat_pari= 'lost' AND type_pari = 'multiple' AND DATE > ( NOW() - INTERVAL 1 DAY )");

while($rowCoupon = mysqli_fetch_assoc($parisRes)){

    $couponDbId = $rowCoupon['id'];
    $usager = $rowCoupon['usager'];

    $resNbEv = mysqli_query($dbhandle, "SELECT distinct codepub FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'");
    $rowNbEv = mysqli_num_rows($resNbEv);

    $sqlAllEvents = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'";
    $resAllEvents = mysqli_query($dbhandle, $sqlAllEvents);

    $sqlTrueEvents = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
						AND status = 1";
    $resTrueEvents = mysqli_query($dbhandle, $sqlTrueEvents);

    $sqlFalseEvents = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
						AND status = 2";
    $resFalseEvents = mysqli_query($dbhandle, $sqlFalseEvents);

    if($resTrueEvents){

        if( mysqli_num_rows ($resFalseEvents) == 0 && mysqli_num_rows ($resAllEvents) != 0 && mysqli_num_rows ($resTrueEvents) > 0 ){

            $notYet = false;
            $coteTotArr = array();

            while($rowAllEvents = mysqli_fetch_assoc($resAllEvents)){
                if($rowAllEvents['status'] == 0){
                    $notYet = true;
                }else{
                    if($rowAllEvents['status'] == 1){
                        $coteTotArr[] = str_replace(",", ".", $rowAllEvents['cote']);
                    }

                }
            }

            if($notYet == false){

                $bonusPerc = intval(calculBonusPerc($rowNbEv));

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
                $montantJoue = number_format($rowCoupon['amount'], 2, '.', '');
                $gainSansBonus = number_format($coteTot * $montantJoue, 2, '.', '');

                $bonusPerc = intval(calculBonusPerc($rowNbEv));

                if(mysqli_num_rows ($resAllEvents) == mysqli_num_rows ($resTrueEvents)){
                    $gain = $rowCoupon['gain_pot'];
                }else{
                    $gain = ( $gainSansBonus * (100 + $bonusPerc) ) / 100;
                    $gain = number_format($gain, 2, '.', '');
                }

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

        if( mysqli_num_rows ($resFalseEvents) > 0 ){
            mysqli_query($dbhandle, "UPDATE coupon SET etat_pari = 'lost' WHERE id = '$couponDbId'");
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