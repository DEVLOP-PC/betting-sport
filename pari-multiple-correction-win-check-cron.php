#!/usr/bin/php
<?php
require_once('db_connect.php');

//Multiple
$parisRes = mysqli_query($dbhandle, "SELECT * FROM coupon WHERE etat_pari= 'win' AND type_pari = 'multiple' AND DATE > ( NOW() - INTERVAL 10 DAY )");

while($rowCoupon = mysqli_fetch_assoc($parisRes)){

    $couponDbId = $rowCoupon['id'];
    $usager = $rowCoupon['usager'];
    $codeCoupon = $rowCoupon['code_coupon'];

    $sqlFalseEvents = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
						AND status = 2";
    $resFalseEvents = mysqli_query($dbhandle, $sqlFalseEvents);


    if( mysqli_num_rows ($resFalseEvents) > 0 ){


        $gidCoupon = mysqli_query($dbhandle, "SELECT * FROM coupon WHERE id = '$couponDbId'");
        $rowCoupon = mysqli_fetch_assoc($gidCoupon);
        $montant_gagne = $rowCoupon['montant_gagne'];

        $identificateur = $rowCoupon['usager'];
        $gidUsager = mysqli_query($dbhandle, "SELECT * FROM usager WHERE identificateur = '$usager'");
        $rowUsager = mysqli_fetch_assoc($gidUsager);

        mysqli_query($dbhandle, "UPDATE usager SET solde = solde - '$montant_gagne' WHERE identificateur = '$usager'");

        $deleteWrongTrSql = "DELETE from transaction WHERE type = 'gain pari' and coupon = '$codeCoupon' ";
        mysqli_query($dbhandle, $deleteWrongTrSql) or die(mysqli_error($dbhandle));

        mysqli_query($dbhandle, "UPDATE coupon SET etat_pari = 'lost' WHERE id = '$couponDbId'");
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