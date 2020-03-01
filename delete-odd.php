<?php
session_start();

if(!isset($_SESSION['pw_logged_user'])){
    header("Location:login.php");
}

if(!isset($_GET['id'])){
    header("Location:index.php");
}

$id = intval($_GET['id']);
$couponDataArr = $_SESSION['couponDataArr'];

//echo '<pre>' . var_export($dataArray, true) . '</pre>';


foreach($couponDataArr['rows'] as $k => $row){
    foreach($row['cote'] as $key => $coteRow){
        if(intval($coteRow['id']) == $id){
            $x = $k;
            $y = $key;
        }
    }
}
unset($couponDataArr['rows'][$x]['cote'][$y]);

$z = -1;

foreach($couponDataArr['rows'] as $kk => $row){
    if(empty($row['cote'])){
        $z = $kk;
    }
}

if($z > -1){
    unset($couponDataArr['rows'][$z]);
}

//echo '<pre>' . var_export($couponDataArr, true) . '</pre>';

$amount = $couponDataArr['amount'];
$couponDataArr['cote_min'] = getCoteTotMin($couponDataArr);
$couponDataArr['cote_max'] = getCoteTotMax($couponDataArr);
$couponDataArr['comb_cote_max'] = getCombCoteMax($couponDataArr);
$couponDataArr['multiplicateur'] = getMultiplicateur($couponDataArr);
$couponDataArr['nb_events'] = getNbEvents($couponDataArr);
$couponDataArr['bonus_perc'] = calculBonusPerc($couponDataArr['nb_events']);
$bonus_min = str_replace(',','.',$amount) * $couponDataArr['cote_min'] * $couponDataArr['bonus_perc'] / 100;
$couponDataArr['bonus_min'] = number_format($bonus_min, 2, '.', '');
$bonus_max = str_replace(',','.',$amount) * $couponDataArr['cote_max'] * $couponDataArr['bonus_perc'] / 100;
$couponDataArr['bonus_max'] = number_format($bonus_max, 2, '.', '');
$comb_bonus_max = str_replace(',','.',$amount) * $couponDataArr['comb_cote_max'] * $couponDataArr['bonus_perc'] / 100;
$couponDataArr['comb_bonus_max'] = number_format($comb_bonus_max, 2, '.', '');
$gain_min = str_replace(',','.',$amount) * $couponDataArr['cote_min'] + $bonus_min;
$couponDataArr['gain_min'] = number_format($gain_min, 2, '.', '');
$gain_max = str_replace(',','.',$amount) * $couponDataArr['cote_max'] + $bonus_max;
$couponDataArr['gain_max'] = number_format($gain_max, 2, '.', '');
$comb_gain_max = str_replace(',','.',$amount) * $couponDataArr['comb_cote_max'] + $comb_bonus_max;
$couponDataArr['comb_gain_max'] = number_format($comb_gain_max, 2, '.', '');

$couponDataArr['type'] = getCouponType($couponDataArr);

$_SESSION['couponDataArr'] = $couponDataArr;


header('Location: index.php');



function getCouponType($dataArray){
    $type = "multiple";
    foreach($dataArray['rows'] as $row){
        if(count($row['cote']) > 1){
            $type = "integrale";
            return $type;
        }
    }
    return $type;
}

function getCoteTotMin($dataArray){
    $coteTotMin = 1;
    foreach($dataArray['rows'] as $row){
        $tmpCoteVal = array();
        foreach($row['cote'] as $coteRow){
            $tmpCoteVal[] = str_replace(',','.',$coteRow['cote']);
        }
        $coteTotMin *= min($tmpCoteVal);
    }
    return number_format($coteTotMin, 2, '.', '');;
}
function getCoteTotMax($dataArray){
    $coteTotMax= 1;
    foreach($dataArray['rows'] as $row){
        $tmpCoteVal = array();
        foreach($row['cote'] as $coteRow){
            $tmpCoteVal[] = str_replace(',','.',$coteRow['cote']);
        }
        $coteTotMax *= array_sum($tmpCoteVal);
    }
    return number_format($coteTotMax, 2, '.', '');
}
function getCombCoteMax($dataArray){
    $coteTotMax= 1;
    foreach($dataArray['rows'] as $row){
        $tmpCoteVal = array();
        if($row['cote']){
            foreach($row['cote'] as $coteRow){
                $tmpCoteVal[] = str_replace(',','.',$coteRow['cote']);
            }
            $coteTotMax *= max($tmpCoteVal);
        }

    }
    return number_format($coteTotMax, 2, '.', '');
}

function getMultiplicateur($dataArray){
    $multiplicateur = 1;
    foreach($dataArray['rows'] as $row){
        $multiplicateur *= count($row['cote']);
    }
    return $multiplicateur;
}

function getNbEvents($dataArray){
    return count($dataArray['rows']);
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