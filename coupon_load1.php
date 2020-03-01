<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_SESSION['pw_logged_user'])){
    header("Location:login.php");
}

//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();

require_once __DIR__ . '/parser_restricted/vendor/autoload.php';

require 'parser_restricted/vendor/autoload.php';

use PHPHtmlParser\Dom;

include('parser_restricted/includes/ganon.php');
include('db_connect.php');

$url = 'https://ww3.365planetwinall.net/Sport/default.aspx';
$fields = array(
    'h$w$PC$cCoupon$txtCouponCodiceAnonimo' => $_POST['codecoupon'],
    '__EVENTTARGET' => 'h$w$PC$cCoupon$lnkCaricaCouponCodiceAnonimo',

);

$cookies = "ISBets_CurrentCulture=11";

$fields_string = "";

foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

$ch = curl_init();

$agent = "Mozilla/5.0 (X11; U; Linux i686; en-US)
            AppleWebKit/532.4 (KHTML, like Gecko)
            Chrome/4.0.233.0 Safari/532.4";
$referer = "http://www.google.com/";

curl_setopt($ch,CURLOPT_URL, $url);

curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_COOKIE, $cookies);
curl_setopt($ch, CURLOPT_REFERER, $referer);

curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_AUTOREFERER, true );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt( $ch, CURLOPT_COOKIEJAR,  'cookies.txt' );
curl_setopt( $ch, CURLOPT_COOKIEFILE, 'cookies.txt' );

$result = curl_exec($ch);
curl_close($ch);




preg_match('`<div id="h_w_PC_cCoupon_atlasCoupon">(.*?)</div>`Uis', $result, $match);

$pos = strpos($match[0], "h_w_PC_cCoupon_btnStampaSco");

if($pos == false){
    $coupon_html = $match[0];

    preg_match('`<div id="h_w_PC_cCoupon_divTipoSco" class="divCpnTipi">(.*?)</div>`Uis', $coupon_html, $coupon_form);

    $doc = new DOMDocument();
    @$doc->loadHTML('<?xml encoding="utf-8" ?>' .$coupon_html);

    $divs = $doc->getElementsByTagName('div');
    $coupon_events = array();

    $couponDataArr = array();
    $rowId = 1;

    foreach ($divs as $div) {
        $classes = $div->getAttribute('class');
        if (strpos($classes, 'CItem te1') !== false) {

            $childs = $div->getElementsByTagName('div');

            foreach ($childs as $child) {
                $childClasses = $child->getAttribute('class');
                if (strpos($childClasses, 'CCodPub') !== false) {
                    $codepub = $child->nodeValue;
                }
            }

            foreach ($childs as $child) {
                $childClasses = $child->getAttribute('class');
                if (strpos($childClasses, 'CSubEv') !== false) {
                    $codePlayers = $child->nodeValue;
                }
            }

            foreach ($childs as $child) {
                $childClasses = $child->getAttribute('class');
                if (strpos($childClasses, 'CEvento') !== false) {
                    $codeEvent = $child->nodeValue;
                }
            }

            $coteArr = array();
            foreach ($childs as $child) {
                $childClasses = $child->getAttribute('class');
                if (strpos($childClasses, 'COdds') !== false) {

                    $oneCote = array();
                    $docTmp = new DOMDocument();
                    @$docTmp->loadHTML('<?xml encoding="utf-8" ?>' .$child->C14N());
                    $coteDivs = $docTmp->getElementsByTagName('div');

                    foreach ($coteDivs as $coteDiv) {
                        $childClasses = $coteDiv->getAttribute('class');
                        if (strpos($childClasses, 'CSegno') !== false) {
                            $oneCote['signe'] = $coteDiv->nodeValue;
                        }
                    }

                    foreach ($coteDivs as $coteDiv) {
                        $childClasses = $coteDiv->getAttribute('class');
                        if (strpos($childClasses, 'valQuota_1') !== false) {
                            $oneCote['cote'] = $coteDiv->nodeValue;
                        }
                        if (strpos($childClasses, 'valQuota_2') !== false) {
                            $oneCote['cote'] = $coteDiv->nodeValue;
                        }
                        if (strpos($childClasses, 'valQuota_3') !== false) {
                            $oneCote['cote'] = $coteDiv->nodeValue;
                        }
                        if (strpos($childClasses, 'valQuota_4') !== false) {
                            $oneCote['cote'] = $coteDiv->nodeValue;
                        }
                        if (strpos($childClasses, 'valQuota_5') !== false) {
                            $oneCote['cote'] = $coteDiv->nodeValue;
                        }
                    }

                    $oneCote['id'] = $rowId;

                    $coteArr[] = $oneCote;
                    $rowId++;

                }
            }

            $sql = "SELECT * FROM sub_events WHERE codepub = '".$codepub."' AND SUBSTRING( players, 1, 4 ) = '".substr($codePlayers, 0, 4)."'";
            $res = mysqli_query($dbhandle, $sql);
            $row = mysqli_fetch_assoc($res);

            if(mysqli_num_rows ($res) > 0) {
                if(time() /* + 3600*/ > $row['timestamp']){
                    $div->setAttribute ("data","wrong");
                }

            }else{
                $div->setAttribute ("data","wrong");
            }

            $tmpArr = array();
            $tmpArr['codepub'] = $codepub;
            $tmpArr['players'] = $codePlayers;
            $tmpArr['event'] = $codeEvent;
            $tmpArr['cote'] = $coteArr;
            $tmpArr['data'] = "true";

            if($doc->getElementById('s_w_PC_cCoupon_txtImportoDI')){
                $amount = $doc->getElementById('s_w_PC_cCoupon_txtImportoDI')->getAttribute('value');
            }
            if($doc->getElementById('h_w_PC_cCoupon_txtImportoDI')){
                $amount = $doc->getElementById('h_w_PC_cCoupon_txtImportoDI')->getAttribute('value');
            }
            if($doc->getElementById('s_w_PC_cCoupon_txtImporto')){
                $amount = $doc->getElementById('s_w_PC_cCoupon_txtImporto')->getAttribute('value');
            }
            if($doc->getElementById('h_w_PC_cCoupon_txtImporto')){
                $amount = $doc->getElementById('h_w_PC_cCoupon_txtImporto')->getAttribute('value');
            }

            $couponDataArr['rows'][] = $tmpArr;

            $coupon_events[] = $div->C14N();

        }
    }

    if(!isset($amount) ){
        header('Location: index.php?coupn-not-found');
        die();
    }


    $couponDataArr['amount'] = $amount;
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

    foreach($couponDataArr['rows'] as $key => $rowC){

        $codepub = $rowC['codepub'];
        $codePlayers = $rowC['players'];

        $sql = "SELECT * FROM sub_events WHERE codepub = '".$codepub."' AND SUBSTRING( players, 1, 4 ) = '".substr($codePlayers, 0, 4)."'";
        $res = mysqli_query($dbhandle, $sql);
        $row = mysqli_fetch_assoc($res);

        if(mysqli_num_rows ($res) > 0) {
            if(time() /* + 3600 */ > $row['timestamp']){
                $couponDataArr['rows'][$key]['data'] = "wrong";
            }

        }else{
            $couponDataArr['rows'][$key]['data'] = "wrong";
        }
    }

    $_SESSION['couponDataArr'] = $couponDataArr;



    $amoutForm = $doc->getElementById('h_w_PC_cCoupon_divTipoSco')->C14N();

    if($doc->getElementById('h_w_PC_cCoupon_txtTotaleDI')){

        $_SESSION['type'] = "integrale";

        $_SESSION['amount'] = $couponDataArr['amount'];
        $_SESSION['gain_pot_min'] = $couponDataArr['gain_min'];
        $_SESSION['comb_gain_pot_max'] = $couponDataArr['comb_gain_max'];
        $_SESSION['gain_pot_max'] = $couponDataArr['gain_max'];
        $_SESSION['bonus_min'] = $couponDataArr['bonus_min'];
        $_SESSION['bonus_max'] = $couponDataArr['bonus_max'];
        $_SESSION['comb_bonus_max'] = $couponDataArr['comb_bonus_max'];
        $_SESSION['multiplicateur'] = $couponDataArr['multiplicateur'];
        $_SESSION['cote_min'] = $couponDataArr['cote_min'];
        $_SESSION['comb_cote_max'] = $couponDataArr['comb_cote_max'];
        $_SESSION['cote_max'] = $couponDataArr['cote_max'];


    }else{

        $_SESSION['type'] = "multiple";

        $_SESSION['amount'] = $couponDataArr['amount'];
        $_SESSION['gain_pot'] = $couponDataArr['gain_max'];
        $_SESSION['bonus'] = $couponDataArr['bonus_max'];
        $_SESSION['cote_tot'] = $couponDataArr['cote_max'];

    }
//
//    $_SESSION['coupon_content'] = $coupon_html;
//    $_SESSION['amount_form'] = $amoutForm;
    $_SESSION['coupon_events'] = $coupon_events;
    header('Location: index.php');
}
else{
    header('Location: index.php?coupn-not-found');
}


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
        if($row['cote']){
            foreach($row['cote'] as $coteRow){
                if($coteRow['cote']){
                    $tmpCoteVal[] = str_replace(',','.',$coteRow['cote']);
                }
            }
            if(count($tmpCoteVal) > 0){
                $coteTotMin *= min($tmpCoteVal);
            }
        }

    }
    return number_format($coteTotMin, 2, '.', '');;
}
function getCoteTotMax($dataArray){
    $coteTotMax= 1;
    foreach($dataArray['rows'] as $row){
        $tmpCoteVal = array();
        if($row['cote']){
            foreach($row['cote'] as $coteRow){
                $tmpCoteVal[] = str_replace(',','.',$coteRow['cote']);
            }
            $coteTotMax *= array_sum($tmpCoteVal);
        }

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
        if(count($row['cote']) > 0){
            $multiplicateur = intval($multiplicateur) * intval(count($row['cote']));
        }
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


?>
