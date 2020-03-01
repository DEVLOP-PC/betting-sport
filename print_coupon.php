<?php
session_start();

if(!isset($_SESSION['pw_logged_user'])){
    header("Location:login.php");
}
require_once('db_connect.php');
require_once('includes/functions.php');

function datos($date){


  $da = explode(' ',$date);
  $newdate = explode('-',$da[0]);
  $newd = $newdate[2].'/'.$newdate[1].'/'.$newdate[0];

  $time = explode(':',$da[1]);
  $newtime = $time[0].':'.$time[1];

  $final = $newd.' '.$newtime; 
  
return $final;

}



$idCoupon = $_GET['IDCoupon'];
$idCouponArr = explode('-', $idCoupon);

$usager = $idCouponArr[1];
$codeCoupon = $idCouponArr[0];

$sqlCoupon = "SELECT * FROM coupon WHERE code_coupon='$idCoupon' LIMIT 1";
$resCoupon = mysqli_query($dbhandle, $sqlCoupon) or die(mysqli_error($dbhandle));
$rowCoupon = mysqli_fetch_assoc($resCoupon);

$couponDbId = $rowCoupon['id'];
$couponStatus = $rowCoupon['etat_pari'];

if($couponStatus != 'running'){
    die("you don\'t have permission to do this operation");
}

$sqlEvents = "SELECT e.*, ce1.sorting FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId' order by ce1.sorting";
$resEvents = mysqli_query($dbhandle, $sqlEvents) or die(mysqli_error($dbhandle));


$identificateur = $_SESSION['pw_logged_user'];

$gidUsager = mysqli_query($dbhandle, "SELECT * FROM usager WHERE identificateur = '$identificateur'");
$rowUsager = mysqli_fetch_assoc($gidUsager);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0079)http://127.0.0.1//account/print_coupon.php?IDCoupon=P70PAKV7JNLW-1296640 -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <title>Coupon</title>
    <link type="text/css" rel="stylesheet" href="./print_coupon_files/coupon_print.css" />
    <script src="./print_coupon_files/jquery-x.x.x.min.js" type="text/javascript"></script>
    <script src="./print_coupon_files/Coupon.js" type="text/javascript"></script>
</head>
<body class="PrintCoupon">
<script type="text/javascript">
    //<![CDATA[
    Sys.WebForms.PageRequestManager._initialize('ctl00$PC$SM', document.getElementById('aspnetForm'));
    Sys.WebForms.PageRequestManager.getInstance()._updateControls([], [], [], 90);
    //]]>
</script>
<script type="text/javascript">
    function isPostBack() {
        if (!document.getElementById('ctl00_PC_clientSideIsPostBack'))
            return false;
        if (document.getElementById('ctl00_PC_clientSideIsPostBack').value == 'Y')
            return true;
        else
            return false;
    }

    var bStampaCoupon = false;
    var intval = "";
    var promozione = '0';

    $(window).load(function () {
        if ((intval == "") && (!isPostBack()) && (promozione != '0')) {
            $('#ctl00_PC_divPrint').hide();
            intval = setInterval("checkCouponPromozione(587245797)", '500');
        } else {
            $('#ctl00_PC_divWait').hide();

             window.print();
            setTimeout(function () { window.close(); }, 1000);
            window.close();

        }
    });
</script>
<script language="javascript" type="text/javascript">
    function checkCouponPromozione(idCoupon) {
        //Chiamata al webservice che popola i dettagli del saldo
        ISBets.WebPages.Controls.CouponWS.CouponPromozioneOK(idCoupon, OnCouponPromozioneOKComplete);
    }

    //Viene chiamata al termine della chiamata asincrona al webservice che restituisce i dati
    function OnCouponPromozioneOKComplete(results) {
        if (results == true) {
            bStampaCoupon = true;
            __doPostBack();
            window.clearInterval(intval);
        } else {
            bStampaCoupon = false;
            $('#ctl00_PC_divPrint').hide();
            $('#ctl00_PC_divWait').show();
        }
    }

</script>
<input name="ctl00$PC$clientSideIsPostBack" type="hidden" id="ctl00_PC_clientSideIsPostBack" value="N">
<span id="ctl00_PC_lblSession"></span>
<div id="ctl00_PC_divPrint" class="PrintCouponMainDiv">
    <?php if(isset($_GET['c'])){?>
        <img id="ctl00_PC_imgSfondoCopia" class="imgSfondoStampaCopia" src="http://static.planetwin365.com/App_Themes/PlanetWin365/Images/sfondoStampaCopia_fr-FR.png" style="border-width:0px;" />
    <?php }?>
    <!--**** LOGO BOOKMAKER ****-->
    <div class="PCLogo"><img id="ctl00_PC_imgLogo" src="./print_coupon_files/PrintLogoCoupon.jpg" style="border-width:0px;"></div>
    <!--**** COPIA ****-->
    <!--**** COMMON DATA ****-->
    <div class="PCDatiSchedina">
        <div class="PCDatiItem">
            <div class="PCItemSX">Date</div>
            <div class="PCItemDX">

                <?php
      //              $sqlDate = $rowCoupon['date'];
       //             $sqlDateConv= "SELECT UNIX_TIMESTAMP( '$sqlDate' )";
       //             $resDateConv = mysqli_query($dbhandle, $sqlDateConv) or die(mysqli_error($dbhandle));
       //             $rowDateConv = mysqli_fetch_array($resDateConv);

        //            $date = new DateTime();
         //           $date->setTimestamp($rowDateConv[0]);
        //            echo $date->format('d/m/Y H:i:s');


                   $timestamp = strtotime($rowCoupon['date']);
                    $date = new DateTime();
                   $date->setTimestamp($timestamp);
                   echo $date->format('d/m/Y H:i:s');

                ?>
            </div>
        </div>

    </div>
    <!--**** DATI UTENTE ****-->
    <div class="PCDatiSchedina">
        <div class="PCDatiItem">
            <div class="PCItemSX">CK</div>
            <div class="PCItemDX"><?php echo $idCoupon; ?></div>
        </div>
        <div id="ctl00_PC_pnlUser" class="PCDatiItem">
            <div class="PCItemSX"> </div>
            <div class="PCItemDX"><?php echo $rowUsager['identificateur']."-".$rowUsager['prenom']." ".$rowUsager['nom'];?></div>
        </div>
    </div>
    <!--**** EVENTI ****-->
    <div class="PCDatiEventi">
        <div class="PCTitleTipoSco">
            <div><?php echo $rowCoupon['type_pari']; ?></div>
        </div>
        <div class="PCDatiEventiCnt">
            <?php
            if($rowCoupon['type_pari'] == 'multiple'){
                $coteTot = 1;
            while($rowEvent = mysqli_fetch_assoc($resEvents)){
     //           $coteTot = str_replace(',', '.', $rowEvent['cote']) * $coteTot;
            ?>


<div class="PCEventsItem">
                                    <div class="PCEvento"><?php echo trim($rowEvent['event']); ?></div>
<div class="PCData"><?php echo datos($rowEvent['date']); ?></div>
<div class="PCSEvento"><div class="PCCodPub"><?php echo trim($rowEvent['codepub']); ?></div><?php echo trim($rowEvent['players']); ?></div>

                
                
                <div class="PCItemsOdds">
                    <div class="PCSegno">
                        <span class="PCSegnoCap">Signe:</span>
                        
                           <?php echo $rowEvent['signe']; ?>
                                                                </div>
                    <div class="PCQuota">
                        <span class="PCSegnoCap">Cote:</span>
                        
                         <?php echo $rowEvent['cote']; ?>
                                                                </div>
                </div>
            </div>


            <div class="PCItemSep"></div>
            <?php }?>
            <?php }?>

            <?php if($rowCoupon['type_pari'] == 'intégrale'){

                $sqlIntgEvents = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
                                  GROUP BY e.codepub HAVING count(*) >1";
                $resIntgEvents = mysqli_query($dbhandle, $sqlIntgEvents) or die(mysqli_error($dbhandle));

                while($rowIntgEvents = mysqli_fetch_assoc($resIntgEvents)){

            ?>
                <div class="PCEventsItem">
                    <div class="PCEvento"><?php echo $rowIntgEvents['event']; ?></div>
                    <div class="PCCodPub"><?php echo $rowIntgEvents['codepub']; ?></div>
                    <div class="PCSEvento"><?php echo $rowIntgEvents['players']; ?></div>
                   <div class="PCData">
                        <?php
                        $timestamp = strtotime($rowCoupon['date']);
																	$date = new DateTime();
																	 $date->setTimestamp($timestamp);
																	echo $date->format('d/m/Y H:i:s');
                        ?>
                    </div>

                    <?php
                    $codePubInt = $rowIntgEvents['codepub'];
                    $sqlIntgCotes = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
                                    AND codepub='$codePubInt'";
                     $resIntgCotes = mysqli_query($dbhandle, $sqlIntgCotes) or die(mysqli_error($dbhandle));

                    while($rowIntgCotes = mysqli_fetch_assoc($resIntgCotes)){
                    ?>
                    <div class="PCItemsOdds">
                        <div class="PCSegno">
                            <span class="PCSegnoCap">Signe:</span>
                            <?php echo $rowIntgCotes['signe'];?>
                        </div>
                        <div class="PCQuota">
                            <span class="PCSegnoCap">Cote:</span>
                            <?php echo $rowIntgCotes['cote'];?>
                        </div>
                    </div>
                    <?php }?>

                </div>
                <div class="PCItemSep"></div>

            <?php }?>

            <?php
            $sqlIntgOcEvents = "SELECT e.* FROM events e INNER JOIN coupon_events ce1 on e.id = ce1.id_foreign where ce1.id_local='$couponDbId'
                                  GROUP BY codepub HAVING count(*) =1";
            $resIntgOcEvents = mysqli_query($dbhandle, $sqlIntgOcEvents) or die(mysqli_error($dbhandle));
            if(mysqli_num_rows ($resIntgOcEvents) > 0){
                while($rowIntgOcEvents = mysqli_fetch_assoc($resIntgOcEvents)){
            ?>
                <div class="PCEventsItem">
                    <div class="PCEvento"><?php echo $rowIntgOcEvents['event']; ?></div>
                    <div class="PCCodPub"><?php echo $rowIntgOcEvents['codepub']; ?></div>
                    <div class="PCSEvento"><?php echo $rowIntgOcEvents['players']; ?></div>
                      <div class="PCData">
                        <?php
                        $timestamp = strtotime($rowCoupon['date']);
																	$date = new DateTime();
																	 $date->setTimestamp($timestamp);
																	echo $date->format('d/m/Y H:i:s');
                        ?>
                    </div>
                    <div class="PCItemsOdds">
                        <div class="PCSegno">
                            <span class="PCSegnoCap">Signe:</span>
                            <?php echo $rowIntgOcEvents['signe']; ?>
                        </div>
                        <div class="PCQuota">
                            <span class="PCSegnoCap">Cote:</span>
                            <?php echo $rowIntgOcEvents['cote']; ?>
                        </div>
                    </div>
                </div>
                <div class="PCItemSep"></div>
            <?php
                }
            }
                ?>

            <?php } //fin if integrale?>

        </div>
    </div>
    <!--**** RAGGRUPPAMEMTI ****-->
    <!--**** DATI SCOMMESSA ****-->
    <div class="PCDatiPuntata">
        <!--CAMBIO-->

        <?php if($rowCoupon['type_pari'] == 'multiple'){     ?>
        <div class="PCDatiItemLast">
            <table cellpadding="0" cellspacing="0" width="100%">
                <tbody><tr>
                    <td><div class="PCItemIGSX">Mise</div></td>
                    <td class="PCItemIGCN"><div></div></td>
                    <td><div class="PCItemIGDX">
                            <?php
                                echo str_replace('.',',',number_format(str_replace(',','.',$rowCoupon['amount']), 2, '.', ''));
                            ?>
                            &nbsp;&euro;</div></td>
                </tr>
                </tbody>
            </table>
        </div>
        <?php }?>
        <?php if($rowCoupon['type_pari'] == 'intégrale'){?>
            <div class="PCDatiItemLast">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                    <tr>
                        <td>
                            <div class="PCItemIGSX">Mise</div>
                        </td>
                        <td class="PCItemIGCN">
                            <div></div>
                        </td>
                        <td>
                            <div class="PCItemIGDX"><?php echo number_format($rowCoupon['amount']/$rowCoupon['multiplicateur'], 2, ',', '');?> x <?php echo $rowCoupon['multiplicateur'];?> = <?php echo str_replace('.',',',number_format(str_replace(',','.',$rowCoupon['amount']), 2, '.', ''));?>&nbsp;&euro;</div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        <?php }?>
        <!--CAMBIO-->
    </div>
    <!--**** VINCITA/BONUS ****-->
    <?php if($rowCoupon['type_pari'] == 'multiple'){     ?>
    <div class="PCBonusVincita">
        <div id="ctl00_PC_pnlQuotaTotale" class="PCBonusVincitaItem">
            <div class="PCItemSX">Cote Totale </div>
			<div class="PCItemDX"><?php echo $rowCoupon['cote_tot'];?></div>
            
        </div>
        <div class="PCTItileVin">
            <div>Bonus</div>
        </div>
        <div id="ctl00_PC_pnlBonusDettaglio" class="PCBonusDett">
            EVENTS NUMBER: <b><?php echo mysqli_num_rows ($resEvents);?></b>  <br>PERCENTAGE: <b>+<?php echo calculBonusPerc(mysqli_num_rows ($resEvents));?>%</b>
        </div>
        <div id="ctl00_PC_pnlBonusNormale" class="ItemSingolo">
            <div class="ItemSingoloVal"><span>IIII&nbsp;&euro;&nbsp;<?php echo numberToString($rowCoupon['bonus']);?>&nbsp;IIII</span></div>
        </div>
        <!--CAMBIO-->
        <div class="SepImporti"></div>
        <div class="PCTItileVin"><div>Gain Potentiel</div></div>
        <div class="ItemSingolo">
            <div class="ItemSingoloVal">
                <span>IIII&nbsp;&euro;&nbsp;<?php echo numberToString($rowCoupon['gain_pot']);?>&nbsp;IIII</span>
            </div>
        </div>

        <!--CAMBIO-->
    </div>
    <?php }?>

    <?php if($rowCoupon['type_pari'] == 'intégrale'){?>
        <div class="PCBonusVincita">
            <div id="ctl00_PC_pnlQuotaTotale" class="PCBonusVincitaItem">
                <div class="PCItemSX">Cote Totale </div>
                <div class="PCItemDX"><?php echo $rowCoupon['cote_min'];?>/<?php echo $rowCoupon['comb_cote_max'];?>/<?php echo $rowCoupon['cote_max'];?></div>
            </div>
            <div class="PCTItileVin">
                <div>Bonus</div>
            </div>
            <div id="ctl00_PC_pnlBonusIntegrali" class="ItemDoppioColumns">

                <div class="ItemDoppioValColumn">
                    <span id="ctl00_PC_litBonusMinCaptionIntegrali">COMB. MIN. </span>&nbsp;<span id="ctl00_PC_litBonusMinIntegrali"><?php echo numberToString($rowCoupon['bonus_min']);?></span>&nbsp;€
                </div>
                <div class="ItemDoppioValColumn">
                    <span id="ctl00_PC_litBonusMaxCaptionIntegrali">COMB. MAX.</span>&nbsp;<span id="ctl00_PC_litBonusMaxIntegrali"><?php echo numberToString($rowCoupon['comb_bonus_max']);?></span>&nbsp;€
                </div>
                <div class="ItemDoppioValColumn">
                    <span id="ctl00_PC_litBonusAllCaptionIntegrali">TOUTES COMB.</span>&nbsp;<span id="ctl00_PC_litBonusAllIntegrali"><?php echo numberToString($rowCoupon['bonus_max']);?></span>&nbsp;€
                </div>

            </div>
            <!--CAMBIO-->
            <div class="SepImporti"></div>
            <div id="ctl00_PC_pnlVincitaMinima">
                <div class="PCTItileVin">
                    <div>GAIN POT. COMB. MIN.</div>
                </div>
                <div class="ItemSingolo">
                    <div class="ItemSingoloVal">
                        <span>IIII&nbsp;&euro;&nbsp;<?php echo numberToString($rowCoupon['gain_pot_min']);?>&nbsp;IIII</span>
                    </div>
                </div>
                <!--CAMBIO-->
                <div class="SepImporti"></div>
            </div>
            <div id="ctl00_PC_pnlVincitaMaxComb">

                <div class="PCTItileVin"><div>Gain Pot. Comb. Max. </div></div>
                <div class="ItemSingolo">
                    <div class="ItemSingoloVal">
                        <span>IIII&nbsp;&euro;&nbsp;<?php echo numberToString($rowCoupon['comb_gain_pot_max']);?>&nbsp;IIII</span>
                    </div>
                </div>

                <!--CAMBIO-->


                <div class="SepImporti"></div>

            </div>
            <div class="PCTItileVin">
                <div>GAIN POT. TOUTES COMB.</div>
            </div>
            <div class="ItemSingolo">
                <div class="ItemSingoloVal">
                    <span>IIII&nbsp;&euro;&nbsp;<?php echo numberToString($rowCoupon['gain_pot_max']);?>&nbsp;IIII</span>
                </div>
            </div>
            <!--CAMBIO-->
        </div>
    <?php }?>
    <!--**** DISCLAIMER BONUS ****-->
    <!--**** PROMOZIONE ****-->
    <!--**** PIN ****-->
    <!--**** BANNER ****-->
    <!--**** DISCLAIMER ****-->
    <div class="PCDisclaimer">
        <p>Ce re&#xE7;u de transmission donn&#xE9;es est valide seulement si le processus qui a apport&#xE9; &#xE0; son &#xE9;mission a eu lieu selon le r&#xE8;glement g&#xE9;n&#xE9;ral (expos&#xE9; et consultable sur le site) auquel le re&#xE7;u, et le sous-jacent rapport Joueur/Bookmaker sont en tous cas soumis. Le joueur d&#xE9;clare, en acceptant ce re&#xE7;u, qu&#x2019;il a une connaissance appropri&#xE9;e du r&#xE8;glement, dont confirme l&#x2019;acceptation. Les gains potentiels qui sont indiqu&#xE9;s sur ce coupon peuvent &#xEA;tre consid&#xE9;r&#xE9;s seulement comme le guide, le calcul final peut &#xEA;tre diff&#xE9;rent.</p>
        <div class="PCBarcode"><img id="ctl00_PC_imgBarCode" src="./print_coupon_files/barcode.png" style="border-width:0px;"></div>
    </div>
</div>
<script type="text/javascript">
    //<![CDATA[
    Sys.Application.initialize();
    //]]>
</script>
</body>
</html>

<?php
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