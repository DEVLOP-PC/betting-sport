<?php

if(!isset($_SESSION['pw_logged_user'])){
    header("Location:login.php");
}

require_once('db_connect.php');
require_once('includes/functions.php');

$crawltsite=1;
//require_once("/var/www/planet/public_html/crawltrack/crawltrack.php");

//require_once("/var/www/planet/public_html/crawlprotect/include/cppf.php");

$identificateur = $_SESSION['pw_logged_user'];

$gid = mysqli_query($dbhandle, "SELECT * FROM usager WHERE identificateur = '$identificateur'");
$row = mysqli_fetch_assoc($gid);


?>
<script src="resources/jquery.min.js"></script>
    <script src="resources/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
    <script src="resources/Flash.js" type="text/javascript"></script>
    <script src="https://ww3.365planetwinall.net/Scripts/Coupon.js" type="text/javascript"></script>
    <script src="resources/Common.js" type="text/javascript"></script>
    <script src="resources/ClickBet.js" type="text/javascript"></script>
    <script src="resources/odds.js" type="text/javascript"></script>
    <script src="resources/jquery.cookie.js" type="text/javascript"></script>
    <script src="resources/jquery.scrollable.min.js" type="text/javascript"></script>
    <script src="resources/jquery.cycle.js" type="text/javascript"></script>
    <script src="resources/jquery.scrollTo-min.js" type="text/javascript"></script>
    <script src="resources/jquery.serialScroll-min.js" type="text/javascript"></script>
    <script src="resources/jquery.innerfade.js" type="text/javascript"></script>
    <script src="resources/jcarousellite_1.0.1.min.js" type="text/javascript"></script>
    <script src="resources/swfobject.js" type="text/javascript"></script>
    <script src="resources/Session.js" type="text/javascript"></script>
    <script src="resources/js.js" type="text/javascript"></script>
    <script src="resources/CouponWS.js" type="text/javascript"></script>
    <script src="resources/scoriservaws.js" type="text/javascript"></script>

<div id="divHeader">
    <div class="Top">
        <div class="Content">
            <div class="Logo fr-FR">
                <a href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/index.php" id="h_w_lnkHP" class="active"><img src="http://static.planetwin365.com/App_Themes/PlanetWin365/Images/header_logo.png" style="border-width:0px;"></a>
            </div>
            <div class="AreaRiservata">


                ﻿<div id="hl_w_cLogin_phLogged" class="divLoginLogged">


                    <script type="text/javascript">
                        //Inizializzo il pannello del saldo
                        $(document).ready(function() {

                            var showTop = $.cookie('VisibilityDivSaldo');

                            if(typeof(visualizzaSaldoOn) == 'undefined')
                            { $("#divSaldo").hide(); }
                            else { if(showTop == null ){ExpandInfo();}}

                            if (showTop == 'collapsed') {
                                $("#divSaldo").show()
                                $("#btnSaldoVis").addClass('btnSaldoVis');
                                $("#btnSaldoVis").attr("title", "Cacher détails compte");
                            }
                            else {
                                //if(typeof(visualizzaSaldoOn) != 'undefined') {  ExpandInfo(); }
                                $("#btnSaldoVis").attr("title", "Voir détails compte");
                            }
                        });
                        //Visualizza/Nasconde il pannello del saldo (salva stato nei cookie)
                        function ExpandInfo() {
                            if ($("#divSaldo").is(":hidden")) {
                                $("#divSaldo").slideDown("slow");
                                $("#btnSaldoVis").addClass('btnSaldoVis');
                                $("#btnSaldoVis").attr("title", "Cacher détails compte");
                                $.cookie('VisibilityDivSaldo', 'collapsed', { path: '/' });
                            } else {
                                $("#divSaldo").slideUp("slow");
                                $("#btnSaldoVis").removeClass('btnSaldoVis');
                                $("#btnSaldoVis").attr("title", "Voir détails compte");
                                $.cookie('VisibilityDivSaldo', 'expanded', { path: '/' });
                            }
                        }
                    </script>

                    <table class="tblLoginLogged" cellpadding="0" cellspacing="3" width="100%">
                        <tbody><tr>
                            <td class="emptyTD"></td>
                            <td class="cashierBtn">

                                <a href="javascript:window.open('../TPAutologin.aspx?Destinazione=CassaTrasferimenti', 'Cashier', 'width=700,height=700,scrollbars=Yes');void(0);">

                                </a>
                            </td>
                            <td id="hl_w_cLogin_tdCheckSaldo" class="tdChackSaldo">
                                <a title="Cacher détails compte" class="btnSaldoVisHid btnSaldoVis" id="btnSaldoVis" onclick="ExpandInfo();"></a>
                            </td>

                            <td class="tdUser">
                                <div id="hl_w_cLogin_UpPanelLogin">

                                    <?php echo $row['prenom'];?> <?php echo $row['nom'];?>&nbsp;

                                </div>
                            </td>
                            

                            <td>
                                <a id="hl_w_cLogin_lnkBtnLogout" class="btnLogout active" href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/logout.php">Log out</a>
                            </td>
                        </tr>
                        </tbody></table>
                    <div style="display: block;" id="divSaldo">
        <span id="hl_w_cLogin_panelSaldo">

                <div class="TitoloValuta">
                    <span id="hl_w_cLogin_lblValutaCaption">Valuta</span>:
                    <span id="hl_w_cLogin_lblValuta">EUR</span>
                </div>
                <div class="TitoloSaldo">
                    <span id="hl_w_cLogin_lblDisponibilitaCaption">Disponibilité</span>:
                    <span id="hl_w_cLogin_lblDisponibilita"><?php echo numberToString(number_format($row['solde'], 2, '.', ''));?>&nbsp;€</span>
                    <input name="hl$w$cLogin$btnSaldo" id="hl_w_cLogin_btnSaldo" src="http://static.planetwin365.com/App_Themes/PlanetWin365/Images/icons/Refresh_ico.png" alt="Mettre à jour solde" style="border-width:0px;" align="absmiddle" type="image">
                </div>
                <div class="divSaldoUtente">
                    <span id="hl_w_cLogin_lblSaldoCaption">Solde</span>:
                    <span id="hl_w_cLogin_lblSaldo"><?php echo numberToString(number_format($row['solde'], 2, '.', ''));?>&nbsp;€</span>


                </div>

                </span>
                    </div>


                    <script type="text/javascript">
                        $(document).ready(function() {

                            $("#hl_w_cLogin_panelSaldo").on("click", "input", function() {
                                $("#h_w_ctl18_UpdateProgress").show();
                                $.ajax({
                                    type: "GET",
                                    url: "http://localhost/includes/getsolde.php",
                                    dataType: "html",
                                    contentType: "text/html",
                                    success: function (data)
                                    {
                                        $("#hl_w_cLogin_panelSaldo").html(data);
                                        $("#divSaldo").slideUp().slideDown();
                                        $("#h_w_ctl18_UpdateProgress").hide();
                                    },
                                    error: function (data)
                                    {
                                        //Errore durante il get del dato aggiuntivo
                                        alert('Erreur...');
                                        $("#h_w_ctl18_UpdateProgress").hide();
                                    }
                                });
                            });
                        });
                    </script>

                </div>
            </div>
            <div class="SessionExp">
                <span id="h_w_lblSessionTimeoutWarning">Votre session va se terminer dans une minute faute d'activité</span>
            </div>
        </div>
    </div>
    <div class="topMenu">
        <div class="tblMenu">

            ﻿<ul style="margin-top: -12px;"><li><a 
                title="Home" href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>" class="active">Home</a></li>
                <li><a 
                    title="Cotes" class="active" href="index.php">Cotes</a></li><li><a 
                    title="Qui sommes nous" onclick="javascript:miniSitePopup('https://www.facebook.com/PlanetWins365/')">Qui sommes nous</a></li><li><a 
                    title="Contact" onclick="javascript:miniSitePopup('https://www.facebook.com/PlanetWins365/')">Contact Us</a></li><li><a 
                    title="Règlement" onclick="javascript:miniSitePopup('http://info.planet2014win.net/index.php?lang=3')">Règlement</a></li><li><a 
                    title="statistiques et résultats" onclick="javascript:window.open('http://www.stats.betradar.com/s4/?clientid=63&language=fr')">statistiques et résultats</a><ul><li><a 
                    title="Statistiche" onclick="javascript:window.open('http://www.stats.betradar.com/s4/?clientid=63&language=fr')">Statistiques</a></li><li><a 
                     title="Résultats" onclick="javascript:window.open('http://www.myscore365.com/')">Livescore</a></li></ul></li><li><a 
                        title="Live Chat" onclick="javascript:window.open('http://planetwins365.chatovod.com')">Chat</a></li><li><a  
                            title="Promotions"onclick="javascript:miniSitePopup('http://onlinepoker.codes/planetwin365/')">Promotions</a></li><li><a 
                                title="Documents" href="/Sport/Default.aspx">Documents</a><ul><li><a title="Documents" href="/Sport/Documents.aspx?Filter=1">Documents</a></li></ul></li>
                <li><a title="Compte" href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/account/account.php" class="">Compte</a><ul>
                        <li><a title="Données usager" href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/account/account.php" class="active">Données usager</a></li>
                        <li><a title="Liste accès " href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/account/list_access.php" class="active">Liste accès </a></li>
                        <li><a title="Liste paris" href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/account/betlist.php" class="active">Liste paris</a></li>
                        <li><a title="Liste paris" href="<?php echo "http://".$_SERVER['HTTP_HOST']; ?>/account/list_transactions.php" class="active">Liste transactions</a></li>
                        <li><a href="#">NewS</a> </li>
                       
                    </ul></li><li><a title="Casino Main" href="#">Casino</a><ul><li><a title="Caisse" href="/TPAutologin.aspx?Destinazione=cassatrasferimenti" target="_blank">Caisse</a></li><li><a title="Casino" href="/TPAutologin.aspx?Destinazione=V365starlive" target="_blank">Casino</a></li><li><a title="Casino VIP" href="/TPAutologin.aspx?Destinazione=V365casinovip" target="_blank">Casino VIP</a></li><li><a title="Casino 3D" href="/TPAutologin.aspx?Destinazione=V365casino" target="_blank">Casino 3D</a></li><li><a title="Live Dealer" href="/TPAutologin.aspx?Destinazione=V365live" target="_blank">Live Dealer</a></li><li><a title="Live Casino" href="/TPAutologin.aspx?Destinazione=V365liveCasino" target="_blank">Live Casino</a></li><li><a title="" href="/TPAutologin.aspx?Destinazione=V365poker" target="_blank"></a></li><li><a title="Virtual Games" href="/TPAutologin.aspx?Destinazione=Vgames" target="_blank">Virtual Games</a></li></ul></li>
                <li style="background-image: none;"><a class="topMenuMobile" title="Mobile" href="/Sport/ContentPage.aspx?TipoStringa=MobilePromo.html">Mobile</a></li><li><a title="" href="javascript:window.open('http://affiliates.365planetwinall.com/index.php?lang=en','_blank','height=700,width=1000');void(0)"></a></li></ul>
        </div>
        <div class="divMenuSceltaLingua">


            <script type="text/javascript">
                $(document).ready(function() {
                    $("#btnLangList_link").click(function() {
                        if ($(".Lang_content_wrapper").hasClass("big")) {
                            $(".Lang_content_wrapper div.languageFlags div:not(.Sel)").hide("fast");
                            $(".Lang_content_wrapper").removeClass("big");
                            $("#btnLangList").css("z-index", "3");
                        }else{
                            $(".Lang_content_wrapper").addClass("big");
                            $(".Lang_content_wrapper div.languageFlags div:not(.Sel)").show("fast");
                            $("#btnLangList").css("z-index", "0");
                        }
                    });
                });
            </script>

            <div class="Lang_content_wrapper">

                <div class="languageFlags">

                    <div class="en-GB">
                        <a href="../ChooseLanguage.aspx?ID=2&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="English">English</a>
                    </div>

                    <div class="de-DE">
                        <a href="../ChooseLanguage.aspx?ID=3&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Deutsch">Deutsch</a>
                    </div>

                    <div class="it-IT">
                        <a href="../ChooseLanguage.aspx?ID=1&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Italiano">Italiano</a>
                    </div>

                    <div class="es-ES">
                        <a href="../ChooseLanguage.aspx?ID=4&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Argentina">Argentina</a>
                    </div>

                    <div class="fr-FR Sel">
                        <a href="../ChooseLanguage.aspx?ID=11&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Français">Français</a>
                    </div>

                    <div class="sr-Latn-CS">
                        <a href="../ChooseLanguage.aspx?ID=5&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Balkans">Balkans</a>
                    </div>

                    <div class="bg-BG">
                        <a href="../ChooseLanguage.aspx?ID=7&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Български">Български</a>
                    </div>

                    <div class="pl-PL">
                        <a href="../ChooseLanguage.aspx?ID=6&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Polski">Polski</a>
                    </div>

                    <div class="tr-TR">
                        <a href="../ChooseLanguage.aspx?ID=9&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Turkish">Turkish</a>
                    </div>

                    <div class="sq-AL">
                        <a href="../ChooseLanguage.aspx?ID=10&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Shqip">Shqip</a>
                    </div>

                    <div class="ro-RO">
                        <a href="../ChooseLanguage.aspx?ID=16&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Română">Română</a>
                    </div>

                    <div class="de-AT">
                        <a href="http://www.planetwin365.at" class="lnkLangBtn" title="Österreich">Österreich</a>
                    </div>

                    <div class="zh-CN">
                        <a href="../ChooseLanguage.aspx?ID=12&amp;url=/Sport/Default.aspx" class="lnkLangBtn" title="Chinese">Chinese</a>
                    </div>

                </div>

                <div id="btnLangList">
                    <a id="btnLangList_link"></a>
                </div>
            </div>

        </div>

        <script type="text/javascript">
            var sUpdateProgress = 'h_w_ctl18_UpdateProgress';
        </script>
        <div class="MenuUpdate">

            <div id="h_w_ctl18_UpdateProgress" style="display:none;">

                &nbsp;<img id="h_w_ctl18_imgWait" src="http://static.planetwin365.com/App_Themes/PlanetWin365/Images/icons/wait_top.gif" align="absmiddle" style="border-width:0px;">

            </div>


        </div>
    </div>
</div>