<?php session_start();

if (!isset($_SESSION['pw_logged_user'])) {
    header("Location:login.php");
}

//Expire the session if user is inactive for 30
//minutes or more.
$expireAfter = 1;

//Check to see if our "last action" session
//variable has been set.
if (isset($_SESSION['last_action'])) {

    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];

    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;

    //Check to see if they have been inactive for too long.
    if ($secondsInactive >= $expireAfterSeconds) {
        //User has been inactive for too long.
        //Kill their session.
        unset($_SESSION['coupon_content']);
        unset($_SESSION['coupon_events']);
        unset($_SESSION['last_action']);

    }

}


?>
<!doctype html>
<html>
<head id="h_w_h">
    <title>planetwin365</title>

    <meta http-equiv="refresh" content="600">

    <link rel="SHORTCUT ICON" href="http://planetwin365.com/App_Themes/PlanetWin365/Images/Icons/favicon.ico"
          type="text/css"></link>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link type="text/css" rel="stylesheet" href="http://static.planetwin365.com/App_Themes/PlanetWin365/layout.css"/>
    <link type="text/css" rel="stylesheet" href="http://static.planetwin365.com/App_Themes/PlanetWin365/calendar.css"/>
    <link type="text/css" rel="stylesheet" href="http://static.planetwin365.com/App_Themes/PlanetWin365/coupon.css"/>
    <link type="text/css" rel="stylesheet"
          href="http://static.planetwin365.com/App_Themes/PlanetWin365/download_card.css"/>
    <link type="text/css" rel="stylesheet" href="http://static.planetwin365.com/App_Themes/PlanetWin365/quote.css"/>
    <link type="text/css" rel="stylesheet" href="http://static.planetwin365.com/App_Themes/PlanetWin365/WebRadio.css"/>

    <style>
        .divMainHome {
            position: relative;
        }

        #google {
            position: absolute;
            left: -180px;
            width: 160px;
            top: 170px;
            border: 1px solid black;
            padding: 1px;
        }
    </style>


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

  

    <script language="javascript" type="text/javascript">
        // variabili specifihe per bookmaker
        var divCouponTopPosition = 0; //Posizione top del coupon, se <=0 disabilita scroll
        var heightFooter = 206 //Altezza footer per far in modo che il coupon non ci vada sopra
        var hideAgentSummary = 1; //1 nasconde inizialmente il riassunto nella defaultlogged
        var themeUrl = 'http://static.planetwin365.com/App_Themes/PlanetWin365//';
        var TVClientID = null;
        var TVClientLimiteCampionati = null;
        var TVClientLimiteCampionatiErr = null;
        var sepDec = ',';
        var ExpandSubEvent = 1;
        var isAnonymous = 'False';
        var bestsellerQT = false;
        var qtaDeleted = false;

        function OpenLiveChat() {
            window.open('http://planetwin365.kayako.com/visitor/index.php?/Default/LiveChat/Chat/Request/_sessionID=/_promptType=chat/_proactive=0/_filterDepartmentID=/_randomNumber=pnhztq28h38t2qtzkatgnrluxde2vsdn/_fullName=/_email=/', 'livechatwin', 'toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=0,resizable=1,width=600,height=680');
        }

        function OpenWebRadio(url, widthDiv, heightDiv) {
            window.open(url, 'webradio', 'width=' + widthDiv + ',height=' + heightDiv + ',status=0,toolbar=0,location=0,menubar=0,resizable=0');
        }

        function scrollToCoupon() {
            setTimeout(function () {
                $('html, body').animate({
                    scrollTop: $("#divCoupon").offset().top
                }, 250);
                setTimeout(function () {
                    $(".CItems").effect("pulsate", {times: 1}, 2000);
                }, 250);
            }, 250);
        }

        function pulsateCoupon() {
            setTimeout(function () {
                $(".CItems").effect("pulsate", {times: 1}, 2000);
            }, 250);
        }

        $(document).ready(function () {

            $("a").on('click', function (e) {
                if ($(this).hasClass("active")) {
                }
                else {
                    e.preventDefault;
                    return false;
                }
            });


        })
    </script>

    <style>
        #h_w_PC_cCoupon_txtImporto, #h_w_PC_cCoupon_txtImportoDI, #h_w_PC_cCoupon_txtTotaleDI {
            width: 53px !important;
        }

        .CpnPuls .btnCoupon.mx {
            z-index: 9999999999999;
            cursor: pointer;
        }
    </style>

</head>
<body class="bodyMain Anonymous fr-FR"
      style="background-image: url(/1/1.jpg);">
<div>
    <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
    <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
           value="/wEPDwULLTIxMzUzNDY1MDMPZBYCZg9kFgJmD2QWAgIBD2QWBAIGD2QWBGYPDxYCHgdWaXNpYmxlaGQWAgIBD2QWAmYPZBYCAgEPZBYCZg9kFgICAQ9kFgICCw8PFgIeC1Bvc3RCYWNrVXJsZWRkAgEPZBYGZg8WAh8AaGQCAg9kFgJmD2QWAgIBDxYCHgRUZXh0BRdrYWZmZWwmbmJzcDthbWluZSZuYnNwO2QCBQ9kFgJmD2QWCmYPFgIfAGhkAgIPDxYCHwIFA0VVUmRkAgQPDxYCHwIFDTAsMDAmbmJzcDvigqxkZAIHDw8WAh8CBQ0wLDAwJm5ic3A74oKsZGQCCA8PFgIfAGhkZAIMD2QWFAIBD2QWAmYPZBYCZg9kFgICAQ9kFgICAw8PFgIfAGhkZAIDD2QWAgIDD2QWAmYPZBYOAgMPDxYCHwBoZGQCBA8WAh8AZ2QCCQ8WAh8AZ2QCCg8WAh8AZ2QCDA8WAh8AZ2QCDQ8WAh8AZ2QCDg8WAh8AZ2QCBQ9kFgJmDxYCHwIFCUxvdHRvIFdpbmQCGQ9kFgJmDxYCHgtfIUl0ZW1Db3VudAIDFgZmD2QWBmYPFQEAZAIBDxYCHgNzcmMFUGh0dHA6Ly9zdGF0aWMucGxhbmV0d2luMzY1LmNvbS9+L0ltZ05ld3MuYXNoeD9UaXBvPTEmVGVtYT1QbGFuZXRXaW4zNjUmSUQ9Mzg2MTImZAIFD2QWBGYPFQQQMDEvMDEvMTkwMCAwMDowMBVTb3V0aGFtcHRvbiAtIEFyc2VuYWwVU291dGhhbXB0b24gLSBBcnNlbmFsI1RyaXBsZSB0ZXMgY2hhbmNlcyBhdmVjIDNDaGFuY2VNaXghZAIBD2QWBgIBDxYCHwIFGEVuZ2xhbmQgLSBQcmVtaWVyIExlYWd1ZWQCAw8PFgQfAgUVU291dGhhbXB0b24gLSBBcnNlbmFsHgtOYXZpZ2F0ZVVybAUqLi4vU3BvcnQvU3ViRXZlbnQuYXNweD9TdWJFdmVudElEPTEzODg2NzMyZGQCBQ8WAh8DAgMWBgIBD2QWBmYPFQIBOEBBZGRDb3Vwb24oc0NvdXBvbkJ1dHRvbkNsaWVudElELHNDb3Vwb25RdW90YUNsaWVudElELDM2MjQyNjc3NDQpZAIBDxYCHwIFCDFvcjJvcjMrZAIDDxYCHwIFBDEsMjBkAgIPZBYGZg8VAgE3QEFkZENvdXBvbihzQ291cG9uQnV0dG9uQ2xpZW50SUQsc0NvdXBvblF1b3RhQ2xpZW50SUQsMzYyMzc4MzcwMClkAgEPFgIfAgUIMW9yWG9yMytkAgMPFgIfAgUEMSwxN2QCAw9kFgZmDxUCAjExQEFkZENvdXBvbihzQ291cG9uQnV0dG9uQ2xpZW50SUQsc0NvdXBvblF1b3RhQ2xpZW50SUQsMzYyNzIzNTQxNClkAgEPFgIfAgUIWG9yMm9yNCtkAgMPFgIfAgUEMSwxOWQCAQ9kFghmDxUBLmh0dHA6Ly9wb2tlci4zNjVwbGFuZXQzNjUuY29tL25ldy1tb2JpbGUtcG9rZXJkAgEPFgIfBAVQaHR0cDovL3N0YXRpYy5wbGFuZXR3aW4zNjUuY29tL34vSW1nTmV3cy5hc2h4P1RpcG89MSZUZW1hPVBsYW5ldFdpbjM2NSZJRD0xNjQzMyZkAgMPDxYCHwBnFgIeB29uY2xpY2sFEE9wZW5CYW5uZXJQYWdlKClkAgUPDxYCHwBoZBYEZg8VBBAwMS8wMS8xOTAwIDAwOjAwDFBva2VyIE1vYmlsZQxQb2tlciBNb2JpbGUAZAIBDw8WAh8AaGQWAgIFDxYCHwMC/////w9kAgIPZBYIZg8VASQvU3BvcnQvUHJvbW90aW9ucy5hc3B4P0lEUHJvbW89MjY1NzBkAgEPFgIfBAVQaHR0cDovL3N0YXRpYy5wbGFuZXR3aW4zNjUuY29tL34vSW1nTmV3cy5hc2h4P1RpcG89MSZUZW1hPVBsYW5ldFdpbjM2NSZJRD0yNjcxNCZkAgMPDxYCHwBnFgIfBgUQT3BlbkJhbm5lclBhZ2UoKWQCBQ8PFgIfAGhkFgRmDxUEEDAxLzAxLzE5MDAgMDA6MDAUTWVnYSBCb251cyBDaHJpc3RtYXMUTWVnYSBCb251cyBDaHJpc3RtYXMAZAIBDw8WAh8AaGQWAgIFDxYCHwMC/////w9kAhoPZBYCZg8WAh8DAgEWAmYPZBYGZg8VAQk2NDI2OTQzOTdkAgMPFgIfAgUFSy4gSy5kAgUPFgIfAgURMTjCoDAwMywxNiAmIzEyODtkAhsPZBYCZg8WAh8DAgEWAmYPZBYGZg8VAQk2NDAwNjg0MTNkAgMPFgIfAgUFVi4gQy5kAgUPFgIfAgURNTDCoDAwNiw2NCAmIzEyODtkAhwPZBYCZg9kFgICAw9kFgpmDxYCHwBoZAICDw8WAh8CBQxrYWZmZWwgYW1pbmVkZAIDDxYCHwBoZAIGDxYCHwBoZAIID2QWAgIBDzwrAA0CAA8WBh4KU2hvd0Zvb3RlcmgeC18hRGF0YUJvdW5kZx8DAgFkARAWAgIBAgIWAjwrAAUBABYCHgpIZWFkZXJUZXh0BQ5EaXNwb25pYmlsaXTDqTwrAAUBABYCHwkFB0Nyw6lkaXQWAmZmFgJmD2QWBAIBDw8WBB4IQ3NzQ2xhc3MFEGRnRmlyc3RJdGVtU3R5bGUeBF8hU0ICAmQWCGYPDxYCHwIFBkNvbXB0ZWRkAgEPDxYCHwIFBDAsMDBkZAICDw8WAh8CBQQwLDAwZGQCBA8PFgIfAgUEMCwwMGRkAgIPDxYCHwBoZBYGAgEPDxYCHwIFBDAsMDBkZAICDw8WAh8CBQQwLDAwZGQCBA8PFgIfAgUEMCwwMGRkAiEPZBYCAgIPZBYCZg9kFhICAQ8WAh8AaGQCAg8WAh8AaGQCAw8PFgIfAGhkZAIEDw8WAh8AaGRkAhcPD2QWAh4Hb25LZXlVcAVFdHJhcE5leHRCZXQoZXZlbnQsICdobF93X1BDX2NDb3Vwb25fYnRuU2NvQW5jb3JhQXN5bmMnKTtyZXR1cm4gZmFsc2U7ZAIaDxYCHwBoFgpmDxYCHwMC/////w9kAgIPZBYCAgcPEGRkFgBkAgMPZBYGAgEPZBYCAgMPZBYCAgIPEGRkFgBkAgMPZBYCAgQPEGRkFgBkAgUPZBYCAgIPZBYCAgIPEGRkFgBkAgYPDxYEHwoFEmJ0bkNvdXBvbiBzeCB0aHJlZR8LAgJkZAIIDw8WBB8KBRJidG5Db3Vwb24gZHggdGhyZWUfCwICZGQCGw8WAh8AaBYCAgMPZBYCAgEPZBYEAggPFgIfBgWgA29wZW5BbmFncmFmaWNhUG9wVXAoJy9Db250cm9scy9XZWJTaXRlL0FuYWdyYWZpY2FQb3BVcC5hc3B4JywnaGxfd19QQ19jQ291cG9uX2N0cmxBbmFncmFmaWNhU2VsZWN0X3R4dElEQW5hZ3JhZmljYScsJ2hsX3dfUENfY0NvdXBvbl9jdHJsQW5hZ3JhZmljYVNlbGVjdF90eHRBbmFncmFmaWNhJywnaGxfd19QQ19jQ291cG9uX2N0cmxBbmFncmFmaWNhU2VsZWN0X2hpZElEQW5hZ3JhZmljYScsJ2hsX3dfUENfY0NvdXBvbl9jdHJsQW5hZ3JhZmljYVNlbGVjdF9oaWRBbmFncmFmaWNhQ29nbm9tZScsJ2hsX3dfUENfY0NvdXBvbl9jdHJsQW5hZ3JhZmljYVNlbGVjdF9oaWRBbmFncmFmaWNhTm9tZScsJycsJzAnLCdobF93X1BDX2NDb3Vwb25fY3RybEFuYWdyYWZpY2FTZWxlY3RfaGlkSURVdGVudGUnLCdGYWxzZScpO3ZvaWQoMCk7ZAIJDxYCHwYFmwFzdGFtcGFBbmFncmFmaWNhKCcvQWNjb3VudC9QcmludFBlcnNvbmFsRGV0YWlscy5hc3B4Jyxkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnaGxfd19QQ19jQ291cG9uX2N0cmxBbmFncmFmaWNhU2VsZWN0X2hpZElEQW5hZ3JhZmljYScpLnZhbHVlLCAnLTEnKTt2b2lkKDApO2QCHA8WAh8AaBYEAgIPD2QWAh8MBUB0cmFwTmV4dEJldChldmVudCwgJ2hsX3dfUENfY0NvdXBvbl9idG5TY29BbmNvcmEnKTtyZXR1cm4gZmFsc2U7ZAIDDw9kFgIfDAVAdHJhcE5leHRCZXQoZXZlbnQsICdobF93X1BDX2NDb3Vwb25fYnRuU2NvQW5jb3JhJyk7cmV0dXJuIGZhbHNlO2QCMw8WAh8AaGQCIg9kFgYCAg9kFgJmD2QWAgIBDw8WAh8AaGQWAgIDDxYEHgxEYXRhU291cmNlSUQFEmRzU2NvUmlzZXJ2YVV0ZW50ZR8DZmQCBQ8PZA8QFgFmFgEWAh4OUGFyYW1ldGVyVmFsdWUCmbBYFgECBmRkAgYPD2QPEBYBZhYBFgIfDgKZsFgWAQIGZGQCJQ9kFhACAQ8WAh8CBStIYXBvZWwgUmlzaG9uIExlemlvbiAtIE1hY2NhYmkgQWhpIE5hemFyZXRoZAICDxYCHwIFCjI1LzEyLzIwMTVkAgMPFgIfAgUFMTQ6MDBkAgQPFgIfAgUIT3ZlciAxLjVkAgUPFgIfAgUEMCwwMGQCBg8WAh8CBQlVbmRlciAxLjVkAgkPFgQeBGhyZWYFS2phdmFzY3JpcHQ6QWRkQ291cG9uKHNDb3Vwb25CdXR0b25DbGllbnRJRCxzQ291cG9uUXVvdGFDbGllbnRJRCwzNjIzOTc1NTU5KR4JaW5uZXJodG1sBQQxLDIzZAIKDxYEHw8FS2phdmFzY3JpcHQ6QWRkQ291cG9uKHNDb3Vwb25CdXR0b25DbGllbnRJRCxzQ291cG9uUXVvdGFDbGllbnRJRCwzNjIzOTc1NTYwKR8QBQQzLDQwZBgFBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WAQUUaGwkdyRjTG9naW4kYnRuU2FsZG8FMmhsJHckUEMkTGFzdFRyYW5zYWN0aW9uc1VzZXJzJGdyaWRMYXN0VHJhbnNhY3Rpb25zDzwrAAoBCGZkBTNobCR3JFBDJExhc3RUcmFuc2FjdGlvbnNBZ2VudHMkZ3JpZExhc3RUcmFuc2FjdGlvbnMPPCsACgEIZmQFIGhsJHckUEMkX2N0cmxfMCRncmlkTGFzdE1lc3NhZ2VzDzwrAAoBCAIBZAUZaGwkdyRQQyRQQyRndlRvdGFsaUFnZW50ZQ88KwAKAQgCAWT78t420wi4J1hwOyA3tSwoIZs2Nw==">
</div>

<script type="text/javascript">
    //<![CDATA[
    function WebForm_OnSubmit() {
        if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
        return true;
    }
    //]]>
</script>

<script type="text/javascript">
    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };

    $(document).ready(function () {
        if (getUrlParameter('verif_coupon')) {
            if (!$('#s_w_PC_cCoupon_pnlMsgIns').length) {
                $("#h_w_PC_cCoupon_divCouponIns").attr("class", "CouponMainConf");
                $(".CDelete").hide();
            }
        }
    });
</script>

<div>

</div>
<div style="position:absolute; top:0; left:0; width:5px; height:5px;" title="SRVM-WEB16"></div>
<script type="text/javascript">
    //<![CDATA[
    Sys.WebForms.PageRequestManager._initialize('hl$w$SM', document.getElementById('aspnetForm'));
    Sys.WebForms.PageRequestManager.getInstance()._updateControls(['thl$w$cLogin$UpPanelLogin', 'thl$w$cLogin$panelSaldo', 'thl$w$PC$ctl00$ctl00', 'thl$w$PC$cSport$ctl01', 'thl$w$PC$HotWin1$pnlHotWin', 'thl$w$PC$CouponCheck1$upCheckCoupon', 'thl$w$PC$ctl05$ctl00', 'thl$w$PC$cCoupon$atlasCoupon', 'thl$w$PC$ScoRis$pnlScoRiserva', 'thl$w$PC$ctrlLW$pnlUpdate'], ['hl$w$PC$HotWin1$lbtnVai', 'hl$w$PC$CouponCheck1$lnkCheckCoupon', 'hl$w$PC$ScoRis$btnRefresh'], [], 90);
    //]]>
</script>

<script type="text/javascript">
    $('.bodyMain').css('background-image', '1/1.jpg)');


</script>


<script type="text/javascript">
    function showPopupMessaggi() {
        centerPopup("popupMEX", "backgroundPopupMEX");
        loadPopup("popupMEX", "backgroundPopupMEX");
    }

    function MexDaLeggere(arg) {
        //Aggiorno il numero di messaggi da leggere
        var n = arg.split("|");

        if (n.length == 2) {
            $(".txtNMexHP").html(n[0]);
            $(".txtNMex").html(n[1]);
        }

        if (n[0] == 0) {
            $("#" + 'hl_w_ctrlMessaggiHP_btnClosePopUpMEX').show();
        }
    }

    function OnComplete(arg) {
        IDUtente = 1447961;
        ISBets.WebPages.MessaggioHP.NMexHPDaLeggere(IDUtente, MexDaLeggere);
    }

    function OnRead(arg) {
        IDMessaggio = arg;
        IDUtente = 1447961;
        $('#leggiMess' + IDMessaggio).hide();
        ISBets.WebPages.MessaggioHP.NMexHPDaLeggere(IDUtente, MexDaLeggere);
    }

    function OnTimeOut(arg) {
        alert("timeOut has occured");
    }
    function OnError(arg) {
        alert("error has occured: " + arg._message);
    }

    function leggiMessaggio(arg) {
        IDUtente = 1447961;
        ISBets.WebPages.MessaggioHP.LeggiMessaggio(arg, IDUtente, OnRead, OnError, OnTimeOut);
    }


    function initModalPopup(closebtn, IDPopup, IDBackground) {
        $("#" + closebtn).click(function () {


            disablePopup(IDPopup, IDBackground);
        });
    }

    function getCurrentIDMex() {
        var ulElement = $("#divMessaggio").children("ul");
        var liWidth = ulElement.children("li").width();
        var ulLeft = ulElement.position().left;
        var pos = Math.abs(ulLeft) / liWidth;
        var IDMex = ulElement.children("li").eq(pos).children('.MexID').val();
        return IDMex;
    }
    ;

    $(document).ready(function () {
        var sourcePage;
        var srnd = String(Math.random());
        srnd = srnd.replace(".", "").replace(",", "");

        if ('True' == 'True') {
            sourcePage = '../Account/MessaggiHP.aspx?EnableCarousel=True&ShowSummary=True&rnd=' + srnd;
        } else {
            sourcePage = '../Account/MessaggiHP.aspx?NMessVisible=1&EnableCarousel=True&ShowSummary=True&rnd=' + srnd;
        }
        $.get(sourcePage, function (data) {
            $("#" + 'hl_w_ctrlMessaggiHP_btnClosePopUpMEX').hide();
            $('#divMessaggi').html(data);
            if ('True' == 'True') {
                $("#divMessaggio").jCarouselLite({
                    speed: 800,
                    orizontal: 'True',
                    visible: 1,
                    btnNext: ".next",
                    btnPrev: ".prev",
                    beforeStart: function (a) {
                        //look into the object and find the IDs of the list items
                        IDMex = $(a[0]).find('.MexID').val();
                        IDUtente = 1447961;
                        ISBets.WebPages.MessaggioHP.LeggiMessaggio(IDMex, IDUtente, OnComplete, OnError, OnTimeOut);
                    }
                });
            }
        });
        $("#" + 'hl_w_ctrlMessaggiHP_btnClosePopUpMEX').click(function () {
            disablePopup('popupMEX', 'backgroundPopupMEX');
            return false;
        });
    });
</script>

<div id="sessionEndWarning"> Votre session de jeu va expirer dans 1 minute.</div>
<div class="divMainHome">

    <div id="google">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- 1x2.ovh -->
        <ins class="adsbygoogle"
             style="display:inline-block;width:300px;height:600px"
             data-ad-client="ca-pub-5448911238212953"
             data-ad-slot="9867353220"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>

    </div>
    <!--HEADER-->
    <?php include("header.php"); ?>
    <!--MAIN-->
    <div id="divMain">
        <div id="divContent">

            <table cellpadding="0" cellspacing="0" id="tblMainContent">
                <tbody>
                <tr>
                    <td colspan="3">
                        <div class="spacer5"></div>
                    </td>
                </tr>
                <tr>
                    <td class="tdSX">

                        <script language="javascript" type="text/javascript">

                            $(document).ready(function () {
                                setInterval("FadeBanner('NewsBannerSX')", 5000);
                            });

                            $(".LandingBanner.BannerBase > a").attr('onclick', '');
                            $(".LandingBanner.BannerBase > a").attr('href', "../Account/NewUser.aspx");

                            $(".menuBannerSports.BannerBase > a").attr('onclick', '');
                            $(".menuBannerSports.BannerBase > a").attr('href', "../Sport/Default.aspx");
                        </script>
                        <div id="hl_w_PC_NewsBannerSX_pnlImage">

                            <div class="NewsBannerSX BannerBase">
                                <a onclick="return jurisdiction()" href="http://poker.365planet365.com/"><img
                                        src="planetwin365_files/ImgNews.ashx" border="0" alt="Play Poker"></a>
                            </div>

                        </div>

                        <script type="text/javascript">
                            var sFavouriteIDEvento = 'hl_w_PC_ctl00_hidIDEvento';
                            var sFavouriteBtnAdd = 'hl_w_PC_ctl00_btnAddPreferito';
                            var sFavouriteBtnDelete = 'hl_w_PC_ctl00_btnDeletaPreferito';
                            var sFavouriteAllEvents = 'hl_w_PC_ctl00_hidAllEvents';
                            var numMaxPreferiti = 8;

                            function MsgFavourite(objClicked) {
                                $(objClicked).append('<div class="infoMsg" tabindex="100">"Login to administer the Favorites window"</div>');
                                $(objClicked).find('div').focus();
                                $(objClicked).find('div').blur(function () {
                                    $(this).remove();
                                })
                            }

                            function RefreshPreferitiSelection() {
                                if (typeof (sTxtEventi) != "undefined") {
                                    var txtVal = $('#' + sTxtEventi).val()
                                    if (txtVal != "") {
                                        var IDs = new Array();
                                        IDs = txtVal.split(",");
                                        for (i = 0; i < IDs.length; i++) {

                                            $(".divMainFavourites #pref_" + IDs[i]).addClass("sel");
                                        }

                                    }
                                }
                            }

                            //Aggiunge Evento ai preferiti
                            function AddFavourite(IDEvento, objClicked) {


                                if ($('#' + sFavouriteAllEvents).length == 0) {
                                    return
                                }
                                var arrPreferiti = $('#' + sFavouriteAllEvents).val().split(",");

                                $('#' + sFavouriteIDEvento).val(IDEvento);

                                if ($.inArray(IDEvento, arrPreferiti) == -1) {
                                    if (arrPreferiti.length <= numMaxPreferiti) {
                                        $('#' + sFavouriteBtnAdd).click();
                                    }
                                } else {
                                    $('#' + sFavouriteBtnDelete).click();
                                }
                            }

                            function selectFavourite(divClicked, IDEvento) {
                                ShowEventAsync(sTxtEventi, IDEvento);
                                $.event.trigger('PreferitiSelected', IDEvento);
                            }

                            function OpenAllFavorites() {
                                location.href = 'OddsAsync.aspx?EventID=' + $('#' + sFavouriteAllEvents).val().slice(0, -1)
                            }

                            $(document).ready(function () {
                                $(".divMainFavourites").bind("oddsAsyncAdded", function (e, IDEvento) {
                                    var objLink = $(".divMainFavourites #pref_" + IDEvento);
                                    if ($(objLink).hasClass('sel')) {
                                        return;
                                    }
                                    (objLink).addClass('sel');
                                });

                                $(".divMainFavourites").bind("oddsAsyncRemoved", function (e, IDEvento) {
                                    var objLink = $(".divMainFavourites #pref_" + IDEvento);
                                    (objLink).removeClass('sel');
                                });
                            });


                            $(window).load(function () {
                                $.event.trigger('PreferitiChangedElement');
                            });
                        </script>


                        <div id="hl_w_PC_oddsSearch_panelSearch" class="SXCercaContent"
                             onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;hl_w_PC_oddsSearch_btnCerca&#39;)">
                            <div class="TitleCerca"><span id="hl_w_PC_oddsSearch_lblTitle">Chercher</span></div>
                            <div><input name="hl$w$PC$oddsSearch$txtSearch" type="text" maxlength="50"
                                        id="hl_w_PC_oddsSearch_txtSearch" class="TxtCerca"></div>
                            <div><a id="hl_w_PC_oddsSearch_btnCerca" title="Démarrer la recherche" class="BtnCerca"
                                    href="javascript:__doPostBack('hl$w$PC$oddsSearch$btnCerca','')"></a></div>
                        </div>
                        <div id="hl_w_PC_cSport_pnlSelectors" class="SportSelector">

                            <script language="javascript" type="text/javascript">
                                var sTimeValuesSteps = ["10", "30", "2", "720", "1"]
                                var sTimeHdrSteps = ["1hr", "3 hrs", "Aujourd'hui", "3 days", "ALL"]

                                function initSportTimeSlider() {
                                    //inite header slider tempo
                                    $.each(sTimeHdrSteps, function (index, value) {
                                        $('#sportTimeSliderHdr').append('<div class="s' + index + '">' + value + '</div>');
                                    });

                                    //init slider tempo
                                    $("#sportTimeSlider").slider({
                                        max: sTimeValuesSteps.length - 1,
                                        min: 0,
                                        value: $.inArray('1', sTimeValuesSteps),
                                        range: "min",
                                        animate: true,
                                        step: 1,
                                        stop: function (event, ui) {
                                            $("#sportTimeSlider").mouseup();
                                            $.event.trigger("oddsTimeSliderChanged", sTimeValuesSteps[ui.value]);
                                        }
                                    });
                                }

                                $(document).ready(function () {
                                    initSportTimeSlider();

                                    $('#divMenuSportGSX').bind("oddsTimeSliderChanged", function (e, timeValue) {
                                        $("#hl_w_PC_cSport_hidSportTime").val(timeValue);
                                        $("#hl_w_PC_cSport_btnChangeTime").click();
                                    });
                                });

                            </script>
                            <div class="Title">A venir dans:</div>
                            <div id="sportTimeSlider"
                                 class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"></div>
                            <div id="sportTimeSliderHdr"></div>
                        </div>
                        <div id="hl_w_PC_cSport_ctl01">
                            <input type="hidden" name="hl$w$PC$cSport$hidSportTime" id="hl_w_PC_cSport_hidSportTime">
                            <input type="button" name="hl$w$PC$cSport$btnChangeTime" value=""
                                   onclick="javascript:__doPostBack(&#39;hl$w$PC$cSport$btnChangeTime&#39;,&#39;&#39;)"
                                   id="hl_w_PC_cSport_btnChangeTime" style="display:none">

                            <div id="divMenuSportGSX">


                                <div class="Top"><h3>Choisir Sport</h3></div>


                                <div class="Cnt">


                                    <div class="divSportList">
                                        <div id="hl_w_PC_cSport_trLiveBetting">
                                            <div class="VociMenuFisseSportG LiveBetting"><a class="VMFSLive"
                                                                                            href="/index.php">Paris
                                                    en Direct</a></div>
                                        </div>
                                        <div class="VociMenuFisseSportG"><a id="hl_w_PC_cSport_lnkTutti"
                                                                            class="VMFSTutti"
                                                                            href="/index.php">Toutes</a>
                                        </div>
                                        <div class="VociMenuFisseSportG"><a id="hl_w_PC_cSport_lnkOggi" class="VMFSOggi"
                                                                            href="/index.php">Evénements
                                                du jour</a></div>
                                        <div id="hl_w_PC_cSport_trLastMinute">
                                            <div class="VociMenuFisseSportG"><a class="VMFSLastMin"
                                                                                href="/index.php">Dernière
                                                    minute</a></div>
                                        </div>

                                        <div id="hl_w_PC_cSport_trOddsLessThan">
                                            <div class="VociMenuFisseSportG"><a class="VMFSOddsLessThan"
                                                                                href="/index.php">Cotes
                                                    inférieure à</a></div>
                                        </div>
                                        <div id="hl_w_PC_cSport_trMarketMovers">
                                            <div class="VociMenuFisseSportG"><a class="VMFSMarketMover"
                                                                                href="/index.php">Market
                                                    Movers</a></div>
                                        </div>

                                        <div id="hl_w_PC_cSport_trVirtualGames">
                                            <div class="VociMenuFisseSportG"><a class="VMFSVirtualGames"
                                                                                href="/index.php">Virtual
                                                    Sports</a></div>
                                        </div>
                                        <div id="hl_w_PC_cSport_trVirtualFootball">
                                            <div class="VociMenuFisseSportG"><a class="VMFSVirtualFootball"
                                                                                href="#">VSoccer365</a>
                                            </div>
                                        </div>
                                        <div id="divMenuSportGSXSports">
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=342&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl00_lnkSport"
                                                                          href="#"><span
                                                            title="Football">Football</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=351&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl01_lnkSport"
                                                                          href="#"><span
                                                            title="Football Spéciaux">Football Spéciaux</span></a></div>

                                            </div>


                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=343&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl02_lnkSport"
                                                                          href="#"><span
                                                            title="Tennis">Tennis</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=348&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl03_lnkSport"
                                                                          href="#"><span
                                                            title="Basket-ball">Basket-ball</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=344&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl04_lnkSport"
                                                                          href="#"><span
                                                            title="Volley-ball">Volley-ball</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=350&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl05_lnkSport"
                                                                          href="#"><span
                                                            title="Football Américain">Football Américain</span></a>
                                                </div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=345&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl06_lnkSport"
                                                                          href="#"><span
                                                            title="Rugby à XV">Rugby à XV</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=372&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl07_lnkSport"
                                                                          href="#"><span
                                                            title="Rugby à XIII">Rugby à XIII</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=347&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl08_lnkSport"
                                                                          href="#"><span
                                                            title="Hockey sur Glace">Hockey sur Glace</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=356&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl09_lnkSport"
                                                                          href="#"><span
                                                            title="Futsal">Futsal</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=357&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl10_lnkSport"
                                                                          href="#"><span
                                                            title="Handball">Handball</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=360&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl11_lnkSport"
                                                                          href="#"><span
                                                            title="Snooker">Snooker</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=358&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl12_lnkSport"
                                                                          href="#"><span
                                                            title="Ski">Ski</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=365&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl13_lnkSport"
                                                                          href="#"><span
                                                            title="Sports de Combat">Sports de Combat</span></a></div>

                                            </div>
                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=386&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl14_lnkSport"
                                                                          href="#"><span
                                                            title="Cricket">Cricket</span></a></div>

                                            </div>


                                            <div class="VociMenuSportG">

                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=373&amp;Antepost=0&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"></div>

                                                <div class="NomeSport"><a id="hl_w_PC_cSport_repSport_ctl15_lnkSport"
                                                                          href="#"><span
                                                            title="Fléchettes">Fléchettes</span></a></div>

                                            </div>
                                        </div>
                                        <div id="divMenuSportGSXAntepost">

                                            <div class="VociMenuTitleAntepost">Choisir Antepost</div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=342&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl01_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl01_lnkSport"
                                                        href="#"><span
                                                            title="Football">Football</span></a></div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=343&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl02_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl02_lnkSport"
                                                        href="#"><span
                                                            title="Tennis">Tennis</span></a></div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=348&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl03_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl03_lnkSport"
                                                        href="#"><span
                                                            title="Basket-ball">Basket-ball</span></a></div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=362&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl04_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl04_lnkSport"
                                                        href="#"><span
                                                            title="Formule 1">Formule 1</span></a></div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=350&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl05_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl05_lnkSport"
                                                        href="#"><span
                                                            title="Football Américain">Football Américain</span></a>
                                                </div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=345&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl06_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl06_lnkSport"
                                                        href="#"><span
                                                            title="Rugby à XV">Rugby à XV</span></a></div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=372&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl07_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl07_lnkSport"
                                                        href="#"><span
                                                            title="Rugby à XIII">Rugby à XIII</span></a></div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=347&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl08_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl08_lnkSport"
                                                        href="#"><span
                                                            title="Hockey sur Glace">Hockey sur Glace</span></a></div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=366&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl09_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl09_lnkSport"
                                                        href="#"><span
                                                            title="Baseball">Baseball</span></a></div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=357&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl10_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl10_lnkSport"
                                                        href="#"><span
                                                            title="Handball">Handball</span></a></div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=360&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl11_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl11_lnkSport"
                                                        href="#"><span
                                                            title="Snooker">Snooker</span></a></div>

                                            </div>

                                            <div class="VociMenuSportG">
                                                <div class="ImgSport"
                                                     style="background-image:url(http://static.planetwin365.com/ImgSport.ashx?IDBook=5&amp;IDSport=373&amp;Antepost=1&amp;Tema=PlanetWin365)">
                                                    <img src="planetwin365_files/buttons_void.png"
                                                         id="hl_w_PC_cSport_repSportAnt_ctl12_Img1"></div>
                                                <div class="NomeSportA"><a
                                                        id="hl_w_PC_cSport_repSportAnt_ctl12_lnkSport"
                                                        href="#"><span
                                                            title="Fléchettes">Fléchettes</span></a></div>

                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="Btm"></div>
                            </div>

                        </div>


                       
                        <div class="SXTitleMarket"><a
                                href="http://ww3.365planetwinall.net/Content/MarketMoversList.aspx">Market Movers</a>
                        </div>
                        
                        <div id="popupMM">
                            <div class="RiquadroPopRiserva">
                                <div class="TopSX">
                                    <div class="TopDX"></div>
                                </div>
                                <div class="Cnt">
                                    <div id="hl_w_PC_ctl01_PanelRound1">

                                        <div class="divTitle"><h3>Marche cotes</h3><a id="popupMMClose"><img
                                                    src="planetwin365_files/close_black_ico.gif"
                                                    id="hl_w_PC_ctl01_imgClose"></a></div>
                                        <iframe style=" width:100%" height="285" id="iframeMM" scrolling="auto"
                                                frameborder="0" border="0" marginwidth="0" marginheight="0"></iframe>

                                    </div>
                                </div>
                                <div class="BtmSX">
                                    <div class="BtmDX"></div>
                                </div>
                            </div>
                        </div>
                        <div id="backgroundPopupMM"></div>


                        <script language="javascript" type="text/javascript">
                            function checkQuotaDaRaggiungere(oSrc, args) {
                                var oTxtVincita = $get("hl_w_PC_HotWin1_txtVincita");
                                if (oTxtVincita == null) return;
                                var oTxtGiocata = $get("hl_w_PC_HotWin1_txtGiocata");
                                if (oTxtGiocata == null) return;
                                var vincita = parseFloat(oTxtVincita.value.replace(",", "."));
                                var giocato = parseFloat(oTxtGiocata.value.replace(",", "."));
                                if ((!isNaN(parseFloat(oTxtGiocata.value.replace(",", ".")))) && (!isNaN(parseFloat(oTxtVincita.value.replace(",", "."))))) {
                                    if (((vincita / giocato) >= 10) && ((vincita / giocato) <= 20000))
                                        args.IsValid = true;
                                    else
                                        args.IsValid = false;
                                }
                            }

                            function scrollLottoWin() {
                                if (Page_IsValid) {
                                    var bestsellerTemp = bestsellerQT;
                                    var qtaDeletedTemp = qtaDeleted;
                                    bestsellerQT = false;
                                    setTimeout(function () {
                                        $('html, body').animate({
                                            scrollTop: $("#divCoupon").offset().top
                                        }, 750);
                                        setTimeout(function () {
                                            $(".CItems").effect("pulsate", {times: 1}, 3000);
                                        }, 750);
                                    }, 600);
                                    bestsellerQT = bestsellerTemp;
                                    qtaDeleted = qtaDeletedTemp;
                                }
                            }
                        </script>

                        <div class="SXTitleHotWin">Lotto Win</div>
                        <div class="SXContentHotWin">
    <div id="hl_w_PC_HotWin1_vgHotWin" class="ValidationSummary" style="color:Red;display:none;">

</div> 
    <span id="hl_w_PC_HotWin1_checkQuotaDaRaggiungere" title="Le multiplieur peut être seulement entre 10 et 20,000." class="validation-error" style="color:Red;margin-top:5px;display:none;">Le multiplieur peut être seulement entre 10 et 20,000.</span>
    <div id="hl_w_PC_HotWin1_pnlHotWin">
	            
            <div class="HWLblWin">Combien vous voulez gagner?</div>
            
            <div class="HWTxtWin">  
                <input name="hl$w$PC$HotWin1$txtVincita" type="text" id="hl_w_PC_HotWin1_txtVincita">
            </div>
                <span id="hl_w_PC_HotWin1_reqVincita" title="Erreur dans l'insertion du gain!" class="validation-error" style="color:Red;margin-left:15px;margin-top:-5px;display:none;">Erreur dans l'insertion du gain!</span>                
                <span id="hl_w_PC_HotWin1_cmpVincita" title="Erreur dans l'insertion du gain!" class="validation-error" style="color:Red;margin-left:15px;margin-top:-5px;display:none;">Erreur dans l'insertion du gain!</span>
            <div class="HWLblPlay">Combien vous pari?</div>
            <div class="HWTxtPlay"> 
                <input name="hl$w$PC$HotWin1$txtGiocata" type="text" id="hl_w_PC_HotWin1_txtGiocata">
            </div>
                <span id="hl_w_PC_HotWin1_reqGiocata" title="Erreur dans l'insertion du pari! " class="validation-error" style="color:Red;margin-left:15px;margin-top:-5px;display:none;">Erreur dans l'insertion du pari! </span>
                <span id="hl_w_PC_HotWin1_cmpGiocata" title="Erreur dans l'insertion du pari! " class="validation-error" style="color:Red;margin-left:15px;margin-top:-5px;display:none;">Erreur dans l'insertion du pari! </span>
        
</div>
    <div class="HWBtn">        
        <a onclick="window.setTimeout(scrollLottoWin,200);" id="hl_w_PC_HotWin1_lbtnVai" title="Parier!" href='javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions("hl$w$PC$HotWin1$lbtnVai", "", true, "vHotWin", "", false, true))'>Générer le ticket</a>
    </div>
</div>
                        
<div class="SXTitleCheck"><a id="hl_w_PC_CouponCheck1_A1">Vérifiez coupon</a></div>
<div class="SXContent">

        <div id="hl_w_PC_CouponCheck1_upCheckCoupon">
	
                <div class="CheckCouponMain">
                    <div class="CheckCpnTxt">
                        Insérez le code coupon que vous voulez vérifier
                    </div>

                    <input name="hl$w$PC$CouponCheck1$txtCodiceCoupon" type="text" id="hl_w_PC_CouponCheck1_txtCodiceCoupon" class="textbox" style="width:125px;">
                    <a id="hl_w_PC_CouponCheck1_lnkCheckCoupon" class="btnCheckCoupon" title="Contrôler" href="javascript:__doPostBack('hl$w$PC$CouponCheck1$lnkCheckCoupon','')"></a>
                </div>
            
</div>

</div>
                        
                    </td>
                    <td class="tdCN">
                        <div id="MainContent">
                            <div class="divSliderRel">


                                <script type="text/javascript">
                                    function onBefore() {
                                    }
                                    ;

                                    function OpenBannerPage() {
                                        $('.sl #HNImages>DIV').each(function (index) {
                                            if ($(this).css('display') == 'block') {
                                                var url = $(this).attr("url")
                                                if (url != undefined && url != '') {
                                                    window.location = url
                                                }
                                            }
                                        });

                                    }

                                    $(document).ready(function () {
                                        $('.sl #HNImages').before('<div id="HNNav">').cycle({
                                            delay: 5000,
                                            timeout: 10000,
                                            speed: 1200,
                                            after: onBefore,
                                            prev: '.sl #HNPrev',
                                            next: '.sl #HNNext',
                                            pager: '.sl #HNNav',
                                            cleartype: false

                                        });

                                        $('.sl #HNPause').click(function () {
                                            $('.sl #HNImages').cycle('pause');
                                            $('.sl #HNPause').hide();
                                            $('.sl #HNPlay').show();
                                        });

                                        $('.sl #HNPlay').click(function () {
                                            $('.sl #HNImages').cycle('resume', true);
                                            $('.sl #HNPlay').hide();
                                            $('.sl #HNPause').show();
                                        });

                                    });

                               </script>

<div class="sl MainHomeNews">
    <div id="HNImagesCover"  onclick="OpenBannerPage()"></div>
    
    <div id="HNImages">
          
                   <div url=''>
                        <img src="1/s3.jpg" border="0" />
                        
                        <div id="h_w_PC_ctl06_RepBanner_ctl00_pnlContent" class="HNContent">
    
                            <div id="HNData">01/01/1900 00:00</div>
                            <div id="HNTitle" title="Barcelona - Celta Vigo">Barcelona - Celta Vigo</div>
                            <div id="HNTesto">Qui marquera le 1er en 2e mi-temps ?</div>
                            
                            <div id="h_w_PC_ctl06_RepBanner_ctl00_pnlOdds" class="HNOdds">
        
                                <div class="HNEvento">Espagne - Copa del Rey</div>
                                
                                <div class="HNSottoEvento">
                                    <a id="h_w_PC_ctl06_RepBanner_ctl00_lnkSE" href="Sport/SubEvent.aspx?SubEventID=30991662">Barcelona - Celta Vigo</a>
                                </div>
                            
                                <div class="HNOddsCnt">
                                        <div class="HNOdd o1" onclick="AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,5905375439)">
                                            <div class="HNTQ">1 1G-2H</div>
                                            <div class="HNQ">1,31</div>
                                        </div>
                                    
                                        <div class="HNOdd o2" onclick="AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,5897563906)">
                                            <div class="HNTQ">X 1G-2H</div>
                                            <div class="HNQ">7,82</div>
                                        </div>
                                    
                                        <div class="HNOdd o3" onclick="AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,5905375440)">
                                            <div class="HNTQ">2 1G-2H</div>
                                            <div class="HNQ">4,76</div>
                                        </div>
                                    </div>
                            
    </div>
                        
</div>
                   </div>
                
                   <div url=''>
                        <img src="1/s4.jpg" border="0" />
                        <div id="h_w_PC_ctl06_RepBanner_ctl01_pnlLink" class="pnlLink" onclick="OpenBannerPage()">

</div>
                        
                   </div>
                
                   <div url=''>
                        <img src="1/s1.jpg" border="0" />
                        <div id="h_w_PC_ctl06_RepBanner_ctl02_pnlLink" class="pnlLink" onclick="OpenBannerPage()">

</div>
                        
                   </div>
                
    </div>
    
    <div id="HNBtn">        
        <div id="HNNext"></div>
        <div id="HNPause"></div>
        <div id="HNPlay"></div>
        <div id="HNPrev"></div>
    </div>
    
</div>
                    <div class="divSliderFrame">
                </div>
                <div class="divMainWin">
                    

<script language="javascript" type="text/javascript">
    function showPopupWinOfTheDay(Winner) {
        centerPopup("popupLWotd", "backgroundPopupLWotd");
        loadPopup("popupLWotd", "backgroundPopupLWotd");
        document.getElementById("iframeLWotd").src = '1/win.php ?>' ;
    }

    //CONTROLLING EVENTS IN jQuery
    $(document).ready(function () {
        initializePopup("popupLWotdClose", "popupLWotd", "backgroundPopupLWotd");
    });

</script>


        <div class="winOfDay" onclick="showPopupWinOfTheDay('2-4-4');">
            <span class="title">VICTOIRE DE LA JOURNÉE:</span>
            <span class="user">K. K.</span>
            <span class="importo">3&nbsp;330,00 €</span>
        </div>
    

<div id="popupLWotd">
    <div class="RiquadroPopRiserva"><div class="TopSX"><div class="TopDX"></div></div><div class="Cnt"><div id="h_w_PC_ctl07_pnl">
    
        <div class="divTitle"><h3>VICTOIRE DE LA JOURNÉE</h3><a id="popupLWotdClose"><img src="//static.planetwin365.com/App_Themes/PlanetWin365/images/icons/close_black_ico.gif" id="h_w_PC_ctl07_imgClose"></a></div>
        <div class="img"></div>
        <iframe style=" width:100%" height="452" id="iframeLWotd" scrolling="auto" frameborder="0" border="0" marginwidth="0" marginheight="0" allowtransparency="true"></iframe>
    
</div></div><div class="BtmSX"><div class="BtmDX"></div></div></div>
</div>
<div id="backgroundPopupLWotd"></div>

                    

<script language="javascript" type="text/javascript">
    function showPopupWinOfTheWeek(Winner) {
        centerPopup("popupLWotw", "backgroundPopupLWotw");
        loadPopup("popupLWotw", "backgroundPopupLWotw");
        document.getElementById("iframeLWotw").src = '1/win.php' ;
    }

    //CONTROLLING EVENTS IN jQuery
    $(document).ready(function () {
        initializePopup("popupLWotwClose", "popupLWotw", "backgroundPopupLWotw");
    });

</script>


        <div class="winOfWeek" onclick="showPopupWinOfTheWeek('2-43-4');">
            <span class="title">VICTOIRE DE LA SEMAINE:</span>
            <span class="user">K. K.</span>
            <span class="importo">17&nbsp;550,00 €</span>
        </div>
    

<div id="popupLWotw">
    <div class="RiquadroPopRiserva"><div class="TopSX"><div class="TopDX"></div></div><div class="Cnt"><div id="h_w_PC_ctl08_pnl">
    
        <div class="divTitle"><h3>VICTOIRE DE LA SEMAINE</h3><a id="popupLWotwClose"><img src="//static.planetwin365.com/App_Themes/PlanetWin365/images/icons/close_black_ico.gif" id="h_w_PC_ctl08_imgClose"></a></div>
        <div class="img"></div>
        <iframe style=" width:100%" height="452" id="iframeLWotw" scrolling="auto" frameborder="0" border="0" marginwidth="0" marginheight="0" allowtransparency="true"></iframe>
    
</div></div><div class="BtmSX"><div class="BtmDX"></div></div></div>
</div>
<div id="backgroundPopupLWotw"></div>

                </div>

                            </div>
                            <div class="RiquadroHome Reg">
                                <div class="TopSX">
                                    <div class="TopDX"></div>
                                </div>
                                <div class="Cnt">
                                    <div id="hl_w_PC_PanelRound1">


                                        <div class="RiquadroHomeUsr">
                                            <div class="TopSX">
                                                <div class="TopDX"></div>
                                            </div>
                                            <div class="Cnt">
                                                <div>


                                                    <script type="text/javascript">
                                                        //Inizializzo il pannello del saldo
                                                        $(document).ready(function () {
                                                            if (hideAgentSummary == 1) {
                                                                $("#divAgente").hide();
                                                                var showTop = $.cookie('VisibilityDivAgente');
                                                                if (showTop == 'collapsed') {
                                                                    $("#divAgente").show()
                                                                    $("#btnRiepilogoVis").addClass('btnRiepilogoVis');
                                                                }
                                                            }
                                                        });
                                                        //Visualizza/Nasconde il pannello del saldo (salva stato nei cookie)
                                                        function ExpandAgenteInfo() {
                                                            if ($("#divAgente").is(":hidden")) {
                                                                $("#divAgente").slideDown("slow");
                                                                $("#btnRiepilogoVis").addClass('btnRiepilogoVis');
                                                                $.cookie('VisibilityDivAgente', 'collapsed', {path: '/'});
                                                            } else {
                                                                $("#divAgente").slideUp("slow");
                                                                $("#btnRiepilogoVis").removeClass('btnRiepilogoVis');
                                                                $.cookie('VisibilityDivAgente', 'expanded', {path: '/'});
                                                            }
                                                        }

                                                        function showPopupListaGirocontiPending() {
                                                            centerPopup("popupLGP", "backgroundPopupLGP");
                                                            loadPopup("popupLGP", "backgroundPopupLGP");
                                                        }

                                                    </script>

                                                    <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <table cellpadding="&#39;0" cellspacing="0"
                                                                       width="100%">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="welcomeUser">

                                                                            <span
                                                                                id="hl_w_PC_PC_lblBentornato">Bienvenu</span>&nbsp;<b><span
                                                                                    id="hl_w_PC_PC_lblUtente"
                                                                                    class="userLabel"><?php echo $row['prenom']; ?><?php echo $row['nom']; ?></span></b>
                                                                        </td>
                                                                        <td class="pulsantiLogged">

                                                                            <span><a
                                                                                    href="#"
                                                                                    id="hl_w_PC_PC_A1"><img
                                                                                        src="planetwin365_files/login.png"
                                                                                        id="hl_w_PC_PC_Img1" border="0"
                                                                                        alt="Liste accès "></a></span>
                                                                            <span id="divDatiUtente"><a id="A2"
                                                                                                        href="#"><img
                                                                                        src="planetwin365_files/config.png"
                                                                                        id="hl_w_PC_PC_Img2" border="0"
                                                                                        alt="Données usager"></a></span>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div id="divAgente" class="divTblAgente"
                                                                     style="display: none;">
                                                                    <div id="hl_w_PC_PC_divRiepilogoAgente">
                                                                        <div>
                                                                            <table class="dgDefaultLoggedStyle"
                                                                                   cellspacing="0" border="0"
                                                                                   id="hl_w_PC_PC_gvTotaliAgente"
                                                                                   style="border-collapse:collapse;">
                                                                                <tbody>
                                                                                <tr class="dgHdrDefaultLoggedStyle">
                                                                                    <th scope="col">&nbsp;</th>
                                                                                    <th align="center" scope="col">
                                                                                        Disponibilité
                                                                                    </th>
                                                                                    <th align="center" scope="col">
                                                                                        Crédit
                                                                                    </th>
                                                                                    <th align="center" scope="col">
                                                                                        Solde
                                                                                    </th>
                                                                                </tr>
                                                                                <tr class="dgFirstItemStyle">
                                                                                    <td>Compte</td>
                                                                                    <td align="right">0,00</td>
                                                                                    <td align="right">0,00</td>
                                                                                    <td align="right">0,00</td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="BtmSX">
                                                <div class="BtmDX"></div>
                                            </div>
                                        </div>

                                        <input type="submit" name="hl$w$PC$PC$BtnTransfer" value=""
                                               id="hl_w_PC_PC_BtnTransfer" style="display:none">


                                        <table cellpadding="0" cellspacing="0" width="100%">
                                            <tbody>
                                            <tr>
                                                <td width="50%">
                                                    <div class="CassaStats">
                                                        <div class="CassaStatsTitle">CAISSE</div>
                                                        <table cellpadding="0" cellspacing="0" width="100%">


                                                            <tbody>
                                                            <tr class="CassaStatsItem">
                                                                <td>SportsBetting</td>
                                                                <td align="right">1240,33</td>
                                                            </tr>
                                                            <tr class="CassaStatsTotals">
                                                                <td>BilanTotal</td>
                                                                <td align="right">1240,33</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </td>
                                                <td width="50%">
                                                    <div class="LastMess">
                                                        <div class="LastMessTitle">
                                                            <a id="hl_w_PC__ctrl_0_hyperLinkMessaggi"
                                                               title="Voir tous les messages"
                                                               href="#">DERNIERS
                                                                MESSAGES</a></div>
                                                        <div class="LastMessDivCnt">
                                                            <div>
                                                                <table cellspacing="0" cellpadding="0" border="0"
                                                                       id="hl_w_PC__ctrl_0_gridLastMessages"
                                                                       style="border-width:0px;width:100%;border-collapse:collapse;">
                                                                    <tbody>
                                                                    <tr class="LastMessItem">
                                                                        <td>
                                                                            <a href="#">Gagnez
                                                                                des spins gra ...</a></td>
                                                                        <td>17:37</td>
                                                                        <td>08/03/2018</td>
                                                                    </tr>
                                                                    <tr class="LastMessAItem">
                                                                        <td>
                                                                            <a href="#">Halloween
                                                                                arrive à g ...</a></td>
                                                                        <td>14:54</td>
                                                                        <td>08/03/2018</td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="BtmSX">
                                    <div class="BtmDX"></div>
                                </div>
                            </div>
                            
                            <!--EDITED-->
                            <div class="LastTransTitle"><a id="hl_w_PC_LastTransactionsUsers_hyperLinkTransazioni" title="Voir toutes les transactions" href="/Account/list_transactions.php">Dernières Transactions</a></div>
                            <div class="LastTransDivCnt"><div>

</div></div>

 

                            <!--MAIN LIVEBETTING-->
                            <div id="hl_w_PC_ctl05_ctl00">

                                <div id="hl_w_PC_ctl05_pnlNoFlash" class="LiveBettingSportMain">
                                    <div class="lastUpdate"><span id="hl_w_PC_ctl05_lblNow"></span></div>
                                    <div class="title">
                                        <a href="#"
                                           id="hl_w_PC_ctl05_lnkTitle" style="display:block;"
                                           title="Aller à Live betting">PARIS EN DIRECT</a>
                                    </div>
                                    <ul>
                                        <li>
                                            <a id="hl_w_PC_ctl05_rS_ctl01_lnk" class="sel"
                                               href="javascript:__doPostBack('hl$w$PC$ctl05$rS$ctl01$lnk','')">
                                                <span>Football</span>
                                                <div class="icon"
                                                     style="background-image:url(http://livesvc.365planetwinall.net/handler/ImgLive.ashx?IdTipoSport=1&amp;IDBook=5&amp;IDTipoImm=3&amp;code=BannerLive)"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="hl_w_PC_ctl05_rS_ctl02_lnk" class=""
                                               href="javascript:__doPostBack('hl$w$PC$ctl05$rS$ctl02$lnk','')">
                                                <span>Basket-ball</span>
                                                <div class="icon"
                                                     style="background-image:url(http://livesvc.365planetwinall.net/handler/ImgLive.ashx?IdTipoSport=2&amp;IDBook=5&amp;IDTipoImm=3&amp;code=BannerLive)"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="hl_w_PC_ctl05_rS_ctl03_lnk" class=""
                                               href="javascript:__doPostBack('hl$w$PC$ctl05$rS$ctl03$lnk','')">
                                                <span>Tennis</span>
                                                <div class="icon"
                                                     style="background-image:url(http://livesvc.365planetwinall.net/handler/ImgLive.ashx?IdTipoSport=4&amp;IDBook=5&amp;IDTipoImm=3&amp;code=BannerLive)"></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a id="hl_w_PC_ctl05_rS_ctl04_lnk" class=""
                                               href="javascript:__doPostBack('hl$w$PC$ctl05$rS$ctl04$lnk','')">
                                                <span>Volley-ball</span>
                                                <div class="icon"
                                                     style="background-image:url(http://livesvc.365planetwinall.net/handler/ImgLive.ashx?IdTipoSport=5&amp;IDBook=5&amp;IDTipoImm=3&amp;code=BannerLive)"></div>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="LiveBettingSportCnt">
                                        <div class="item s1 t2 a ">
                                            <a id="hl_w_PC_ctl05_rE_ctl01_lnkEvento1" title="Bnei Yzalel Rehovot"
                                               class="evento1"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259846">Bnei
                                                Yzalel Rehovot</a>
                                            <a id="hl_w_PC_ctl05_rE_ctl01_lnkEvento2" title="Ironi Beit Shemesh"
                                               class="evento2"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259846">Ironi
                                                Beit Shemesh</a>
                                            <span id="hl_w_PC_ctl05_rE_ctl01_lblMinuto" class="ora">'74</span>
                                            <div class="LBFase">Seconde Mi-temps</div>
                                            <div class="LBImg"></div>
                                            <div class="LBRisultato">0 - 0</div>
                                            <img id="hl_w_PC_ctl05_rE_ctl01_imgSport" class="icon"
                                                 src="planetwin365_files/ImgLive.ashx" style="border-width:0px;">

                                            <div class="oddsType">
                                                <div class="oddType c3 o1 ">1</div>

                                                <div class="oddType c3 o2 ">X</div>

                                                <div class="oddType c3 o3 ">2</div>
                                            </div>
                                            <div class="odds">
                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259846"
                                                   id="hl_w_PC_ctl05_rE_ctl01_rQ_ctl01_A2"
                                                   class="odd a2 c3 o1 ">2,89</a>

                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259846"
                                                   id="hl_w_PC_ctl05_rE_ctl01_rQ_ctl02_A2"
                                                   class="odd a4 c3 o2 ">1,72</a>

                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259846"
                                                   id="hl_w_PC_ctl05_rE_ctl01_rQ_ctl03_A2"
                                                   class="odd a2 c3 o3 ">5,79</a>
                                            </div>
                                        </div>

                                        <div class="item s1 t2  ">
                                            <a id="hl_w_PC_ctl05_rE_ctl02_lnkEvento1" title="Beitar Ironi Maale Adumim"
                                               class="evento1"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=260267">Beitar
                                                Ironi Maale Adumim</a>
                                            <a id="hl_w_PC_ctl05_rE_ctl02_lnkEvento2"
                                               title="Maccabi Ironi Kiryat Malakhi" class="evento2"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=260267">Maccabi
                                                Ironi Kiryat Malakhi</a>
                                            <span id="hl_w_PC_ctl05_rE_ctl02_lblMinuto" class="ora">'78</span>
                                            <div class="LBFase">Seconde Mi-temps</div>
                                            <div class="LBImg"></div>
                                            <div class="LBRisultato">1 - 0</div>
                                            <img id="hl_w_PC_ctl05_rE_ctl02_imgSport" class="icon"
                                                 src="planetwin365_files/ImgLive.ashx" style="border-width:0px;">

                                            <div class="oddsType">
                                                <div class="oddType c3 o1 ">1</div>

                                                <div class="oddType c3 o2 ">X</div>

                                                <div class="oddType c3 o3 ">2</div>
                                            </div>
                                            <div class="odds">
                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=260267"
                                                   id="hl_w_PC_ctl05_rE_ctl02_rQ_ctl01_A2"
                                                   class="odd a4 c3 o1 ">1,17</a>

                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=260267"
                                                   id="hl_w_PC_ctl05_rE_ctl02_rQ_ctl02_A2"
                                                   class="odd a2 c3 o2 ">4,71</a>

                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=260267"
                                                   id="hl_w_PC_ctl05_rE_ctl02_rQ_ctl03_A2"
                                                   class="odd a2 c3 o3 ">29,36</a>
                                            </div>
                                        </div>

                                        <div class="item s1 t2 a noOdds">
                                            <a id="hl_w_PC_ctl05_rE_ctl03_lnkEvento1" title="Beitar Givat Zeev"
                                               class="evento1"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=260272">Beitar
                                                Givat Zeev</a>
                                            <a id="hl_w_PC_ctl05_rE_ctl03_lnkEvento2" title="Maccabi Ironi Netivot"
                                               class="evento2"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=260272">Maccabi
                                                Ironi Netivot</a>
                                            <span id="hl_w_PC_ctl05_rE_ctl03_lblMinuto" class="ora">'78</span>
                                            <div class="LBFase">Seconde Mi-temps</div>
                                            <div class="LBImg"></div>
                                            <div class="LBRisultato">2 - 1</div>
                                            <img id="hl_w_PC_ctl05_rE_ctl03_imgSport" class="icon"
                                                 src="planetwin365_files/ImgLive.ashx" style="border-width:0px;">

                                            <div class="oddsType"></div>
                                            <div class="odds"></div>
                                        </div>
                                        <div class="item s1 t2  ">
                                            <a id="hl_w_PC_ctl05_rE_ctl04_lnkEvento1" title="Hapoel Hod Hasharon"
                                               class="evento1"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259843">Hapoel
                                                Hod Hasharon</a>
                                            <a id="hl_w_PC_ctl05_rE_ctl04_lnkEvento2" title="Bney Eilat" class="evento2"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259843">Bney
                                                Eilat</a>
                                            <span id="hl_w_PC_ctl05_rE_ctl04_lblMinuto" class="ora">'64</span>
                                            <div class="LBFase">Seconde Mi-temps</div>
                                            <div class="LBImg"></div>
                                            <div class="LBRisultato">0 - 0</div>
                                            <img id="hl_w_PC_ctl05_rE_ctl04_imgSport" class="icon"
                                                 src="planetwin365_files/ImgLive.ashx" style="border-width:0px;">

                                            <div class="oddsType">
                                                <div class="oddType c3 o1 ">1</div>

                                                <div class="oddType c3 o2 ">X</div>

                                                <div class="oddType c3 o3 ">2</div>
                                            </div>
                                            <div class="odds">
                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259843"
                                                   id="hl_w_PC_ctl05_rE_ctl04_rQ_ctl01_A2"
                                                   class="odd a2 c3 o1 ">2,06</a>

                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259843"
                                                   id="hl_w_PC_ctl05_rE_ctl04_rQ_ctl02_A2"
                                                   class="odd a4 c3 o2 ">2,15</a>

                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259843"
                                                   id="hl_w_PC_ctl05_rE_ctl04_rQ_ctl03_A2"
                                                   class="odd a2 c3 o3 ">6,75</a>
                                            </div>
                                        </div>

                                        <div class="item s1 t2 a ">
                                            <a id="hl_w_PC_ctl05_rE_ctl05_lnkEvento1" title="Hapoel Nahalat Yehuda"
                                               class="evento1"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259838">Hapoel
                                                Nahalat Yehuda</a>
                                            <a id="hl_w_PC_ctl05_rE_ctl05_lnkEvento2" title="Tzafririm Holon"
                                               class="evento2"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259838">Tzafririm
                                                Holon</a>
                                            <span id="hl_w_PC_ctl05_rE_ctl05_lblMinuto" class="ora">'47</span>
                                            <div class="LBFase">Seconde Mi-temps</div>
                                            <div class="LBImg"></div>
                                            <div class="LBRisultato">0 - 1</div>
                                            <img id="hl_w_PC_ctl05_rE_ctl05_imgSport" class="icon"
                                                 src="planetwin365_files/ImgLive.ashx" style="border-width:0px;">

                                            <div class="oddsType">
                                                <div class="oddType c3 o1 ">1</div>

                                                <div class="oddType c3 o2 ">X</div>

                                                <div class="oddType c3 o3 ">2</div>
                                            </div>
                                            <div class="odds">
                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259838"
                                                   id="hl_w_PC_ctl05_rE_ctl05_rQ_ctl01_A2"
                                                   class="odd a2 c3 o1 ">7,47</a>

                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259838"
                                                   id="hl_w_PC_ctl05_rE_ctl05_rQ_ctl02_A2"
                                                   class="odd a4 c3 o2 ">4,15</a>

                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259838"
                                                   id="hl_w_PC_ctl05_rE_ctl05_rQ_ctl03_A2"
                                                   class="odd a4 c3 o3 ">1,38</a>
                                            </div>
                                        </div>

                                        <div class="item s1 t3  ">
                                            <a id="hl_w_PC_ctl05_rE_ctl06_lnkEvento1" title="Ironi Modiin"
                                               class="evento1"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259847">Ironi
                                                Modiin</a>
                                            <a id="hl_w_PC_ctl05_rE_ctl06_lnkEvento2" title="Maccabi Beer Sheva"
                                               class="evento2"
                                               href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259847">Maccabi
                                                Beer Sheva</a>
                                            <span id="hl_w_PC_ctl05_rE_ctl06_lblMinuto" class="ora">'44</span>
                                            <div class="LBFase">Mi-temps</div>
                                            <div class="LBImg"></div>
                                            <div class="LBRisultato">2 - 2</div>
                                            <img id="hl_w_PC_ctl05_rE_ctl06_imgSport" class="icon"
                                                 src="planetwin365_files/ImgLive.ashx" style="border-width:0px;">

                                            <div class="oddsType">
                                                <div class="oddType c3 o1 ">1</div>

                                                <div class="oddType c3 o2 ">X</div>

                                                <div class="oddType c3 o3 ">2</div>
                                            </div>
                                            <div class="odds">
                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259847"
                                                   id="hl_w_PC_ctl05_rE_ctl06_rQ_ctl01_A2"
                                                   class="odd a4 c3 o1 ">1,79</a>

                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259847"
                                                   id="hl_w_PC_ctl05_rE_ctl06_rQ_ctl02_A2"
                                                   class="odd a2 c3 o2 ">3,26</a>

                                                <a href="http://ww3.365planetwinall.net/Live/LiveDefault.aspx?IDEvento=259847"
                                                   id="hl_w_PC_ctl05_rE_ctl06_rQ_ctl03_A2"
                                                   class="odd a4 c3 o3 ">4,27</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span id="hl_w_PC_ctl05_tmrUpdateLive" style="visibility:hidden;display:none;"></span>

                            </div>

                            <!--MARKET MOVERS-->
                            <script type="text/javascript" language="javascript">
                                function changeMarketMovers(IDSottoevento, divClicked) {
                                    var path = 'http://static.planetwin365.com/MarketMoversChart.ashx';

                                    $("#pnlImgMarketMovers").fadeOut("slow", function () {
                                        $('#listMarketMovers LI').removeClass("sel");
                                        $('#pnlImgMarketMovers').html('<img src="' + path + '?IDSottoevento=' + IDSottoevento + '"/>');
                                        $('#pnlDescMarketMovers').html($('#listMarketMovers li[idSE="' + IDSottoevento + '"] .mmDesc').html());
                                        $('#pnlOtherOdds').html($('#listMarketMovers li[idSE="' + IDSottoevento + '"] .mmOtherOdds').html());
                                        $(divClicked).addClass("sel");
                                        $("#pnlImgMarketMovers").fadeIn("slow");
                                    });
                                }
                                function NextMarketMover() {
                                    var objNext = $('#listMarketMovers li.sel').next();
                                    var IDSottoevento;

                                    if (objNext.length == 0) {
                                        objNext = $('#listMarketMovers li').first()
                                    }
                                    IDSottoevento = objNext.attr('idSE')
                                    changeMarketMovers(IDSottoevento, objNext)
                                }


                                $(document).ready(function () {
                                    NextMarketMover();
                                    setInterval("NextMarketMover();", 10000);
                                });

                            </script>

                            <div class="MarkerMoversTitle">
                                MARKET MOVERS
                            </div>
                            <div class="divMainMarkerMovers">

                                <div class="MarketMoversInfo">Les plus recherchées cotes sur market movers par nos
                                    clients
                                </div>

                                <ul id="listMarketMovers">
                                    <li idse="13886726" onclick="changeMarketMovers(&#39;13886726&#39;, $(this));"
                                        title="Chelsea - Watford" class="">Chelsea.. - Watfor..
                                        <span id="hl_w_PC_ctrlMarketMovers_repMM_ctl01_lblDesc" class="mmDesc">La cote plus variée (<span
                                                style="color:red">Watford</span>) a été jouée par 22% de nos usagers.</span>

                                        <div class="mmOtherOdds">
                                            <div class="odd t1 n1">
                                                <div>1</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl01_repOdds_ctl01_lnkOdds">1,43</a>
                                                </div>
                                            </div>

                                            <div class="odd t1 n12">
                                                <div>1</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627557906);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl01_repOdds_ctl02_lnkOdds"
                                                       class="up">1,49</a></div>
                                            </div>

                                            <div class="odd t2 n1">
                                                <div>X</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl01_repOdds_ctl03_lnkOdds">4,30</a>
                                                </div>
                                            </div>

                                            <div class="odd t2 n9">
                                                <div>X</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627557908);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl01_repOdds_ctl04_lnkOdds"
                                                       class="down">4,25</a></div>
                                            </div>

                                            <div class="odd t3 n1">
                                                <div>2</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl01_repOdds_ctl05_lnkOdds">8,10</a>
                                                </div>
                                            </div>

                                            <div class="odd t3 n11">
                                                <div>2</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627557910);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl01_repOdds_ctl06_lnkOdds"
                                                       class="down">7,20</a></div>
                                            </div>
                                        </div>

                                    </li>

                                    <li idse="14005803" onclick="changeMarketMovers(&#39;14005803&#39;, $(this));"
                                        title="Chorley - AFC Fylde" class="">Chorley.. - AFC Fy..
                                        <span id="hl_w_PC_ctrlMarketMovers_repMM_ctl02_lblDesc" class="mmDesc">La cote plus variée (<span
                                                style="color:red">X</span>) a été jouée par 16% de nos usagers.</span>

                                        <div class="mmOtherOdds">
                                            <div class="odd t1 n1">
                                                <div>1</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl02_repOdds_ctl01_lnkOdds">3,30</a>
                                                </div>
                                            </div>

                                            <div class="odd t1 n13">
                                                <div>1</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627273244);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl02_repOdds_ctl02_lnkOdds"
                                                       class="up">3,65</a></div>
                                            </div>

                                            <div class="odd t2 n1">
                                                <div>X</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl02_repOdds_ctl03_lnkOdds">3,65</a>
                                                </div>
                                            </div>

                                            <div class="odd t2 n5">
                                                <div>X</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627244263);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl02_repOdds_ctl04_lnkOdds"
                                                       class="down">3,45</a></div>
                                            </div>

                                            <div class="odd t3 n1">
                                                <div>2</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl02_repOdds_ctl05_lnkOdds">1,95</a>
                                                </div>
                                            </div>

                                            <div class="odd t3 n13">
                                                <div>2</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627273245);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl02_repOdds_ctl06_lnkOdds"
                                                       class="down">1,90</a></div>
                                            </div>
                                        </div>

                                    </li>

                                    <li idse="13886720" onclick="changeMarketMovers(&#39;13886720&#39;, $(this));"
                                        title="Stoke City - Manchester Utd" class="sel">Stoke C.. - Manche..
                                        <span id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_lblDesc" class="mmDesc">La cote plus variée (<span
                                                style="color:red">Manchester Utd</span>) a été jouée par 73% de nos usagers.</span>

                                        <div class="mmOtherOdds">
                                            <div class="odd t1 n1">
                                                <div>1</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl01_lnkOdds">3,25</a>
                                                </div>
                                            </div>

                                            <div class="odd t1 n12">
                                                <div>1</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627557699);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl02_lnkOdds"
                                                       class="up">3,40</a></div>
                                            </div>

                                            <div class="odd t2 n1">
                                                <div>X</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl03_lnkOdds">3,05</a>
                                                </div>
                                            </div>

                                            <div class="odd t2 n5">
                                                <div>X</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627442128);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl04_lnkOdds"
                                                       class="up">3,12</a></div>
                                            </div>

                                            <div class="odd t3 n1">
                                                <div>2</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl05_lnkOdds">2,38</a>
                                                </div>
                                            </div>

                                            <div class="odd t3 n12">
                                                <div>2</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627557703);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl06_lnkOdds"
                                                       class="down">2,32</a></div>
                                            </div>
                                        </div>

                                    </li>

                                    <li idse="14021284" onclick="changeMarketMovers(&#39;14021284&#39;, $(this));"
                                        title="Kawkab Marrakech - Ittihad Tanger">Kawkab .. - Ittiha..
                                        <span id="hl_w_PC_ctrlMarketMovers_repMM_ctl04_lblDesc" class="mmDesc">La cote plus variée (<span
                                                style="color:red">Kawkab Marrakech</span>) a été jouée par 86% de nos usagers.</span>

                                        <div class="mmOtherOdds">
                                            <div class="odd t1 n1">
                                                <div>1</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl04_repOdds_ctl01_lnkOdds">2,68</a>
                                                </div>
                                            </div>

                                            <div class="odd t1 n9">
                                                <div>1</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627535056);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl04_repOdds_ctl02_lnkOdds"
                                                       class="down">2,27</a></div>
                                            </div>

                                            <div class="odd t2 n1">
                                                <div>X</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl04_repOdds_ctl03_lnkOdds">2,55</a>
                                                </div>
                                            </div>

                                            <div class="odd t2 n8">
                                                <div>X</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627535057);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl04_repOdds_ctl04_lnkOdds"
                                                       class="up">2,65</a></div>
                                            </div>

                                            <div class="odd t3 n1">
                                                <div>2</div>
                                                <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl04_repOdds_ctl05_lnkOdds">3,08</a>
                                                </div>
                                            </div>

                                            <div class="odd t3 n8">
                                                <div>2</div>
                                                <div>
                                                    <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627535058);"
                                                       id="hl_w_PC_ctrlMarketMovers_repMM_ctl04_repOdds_ctl06_lnkOdds"
                                                       class="up">3,54</a></div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>

                                <div id="pnlImgMarketMovers" style="display: block;"><img
                                        src="planetwin365_files/MarketMoversChart.ashx"></div>

                                <div id="pnlOtherOdds">
                                    <div class="odd t1 n1">
                                        <div>1</div>
                                        <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl01_lnkOdds">3,25</a>
                                        </div>
                                    </div>

                                    <div class="odd t1 n12">
                                        <div>1</div>
                                        <div>
                                            <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627557699);"
                                               id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl02_lnkOdds"
                                               class="up">3,40</a></div>
                                    </div>

                                    <div class="odd t2 n1">
                                        <div>X</div>
                                        <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl03_lnkOdds">3,05</a>
                                        </div>
                                    </div>

                                    <div class="odd t2 n5">
                                        <div>X</div>
                                        <div>
                                            <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627442128);"
                                               id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl04_lnkOdds"
                                               class="up">3,12</a></div>
                                    </div>

                                    <div class="odd t3 n1">
                                        <div>2</div>
                                        <div><a id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl05_lnkOdds">2,38</a>
                                        </div>
                                    </div>

                                    <div class="odd t3 n12">
                                        <div>2</div>
                                        <div>
                                            <a href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627557703);"
                                               id="hl_w_PC_ctrlMarketMovers_repMM_ctl03_repOdds_ctl06_lnkOdds"
                                               class="down">2,32</a></div>
                                    </div>
                                </div>

                                <div class="MarketMoversStart">Les cotes de départ</div>
                                <div class="MarketMoversCurrent">Les cotes actuelles</div>

                                <div id="pnlDescMarketMovers">La cote plus variée (<span style="color:red">Manchester Utd</span>)
                                    a été jouée par 73% de nos usagers.
                                </div>

                                <div class="MarketMoversLegend"></div>

                            </div>

                            <!--MOST PLAYED1X2-->


                            <div class="Best1X2Title">
                                Match du jour
                            </div>

                            <div class="Best1X2Cnt">

                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        var per1 = 0;
                                        var per2 = 100;
                                        var perX = 0;

                                        ouLoadGraph(per1, per2, perX);
                                    });

                                    function ouLoadGraph(per1, per2, perX) {
                                        var h1 = 0;
                                        var h2 = 0;
                                        var hX = 0;

                                        var tmp1 = 1500;
                                        var tmp2 = 1500;
                                        var tmpX = 1500;

                                        var max = Math.max(per1, per2, perX);
                                        var min = Math.min(per1, per2, perX);

                                        //più giocato in rosso e animato più lentamente
                                        switch (max) {
                                            case per1:
                                                $(".chart1").addClass("max");
                                                tmp1 = 2000;
                                                break;
                                            case perX:
                                                $(".chartX").addClass("max");
                                                tmpX = 2000;
                                                break;
                                            case per2:
                                                $(".chart2").addClass("max");
                                                tmp2 = 2000;
                                                break;
                                            default:
                                                break;
                                        }

                                        //meno giocato in verde
                                        switch (min) {
                                            case per2:
                                                $(".chart2").addClass("min");
                                                tmp2 = 1000;
                                                break;
                                            case per1:
                                                $(".chart1").addClass("min");
                                                tmp1 = 1000;
                                                break;
                                            case perX:
                                                $(".chartX").addClass("min");
                                                tmpX = 1000;
                                                break;
                                            default:
                                                break;
                                        }

                                        //prendo la massima altezza disponibile per il grafico

                                        var maxHeight = $(".chart").width();

                                        //


                                        //considero l'altezza minima della label

                                        var minHeight1 = $(".chart1 > div").innerWidth();
                                        var minHeightX = $(".chartX > div").innerWidth();
                                        var minHeight2 = $(".chart2 > div").innerWidth();


                                        h1 = (maxHeight / 100) * per1
                                        hX = (maxHeight / 100) * perX
                                        h2 = (maxHeight / 100) * per2

                                        //l'altezza minima dei grafici
                                        if (h1 == 0) {
                                            h1 = 20;
                                        }
                                        ;
                                        if (hX == 0) {
                                            hX = 20;
                                        }
                                        ;
                                        if (h2 == 0) {
                                            h2 = 20;
                                        }
                                        ;


                                        //imposto l'animazione

                                        $(".chart1").animate({"width": h1}, tmp1);
                                        $(".chartX").animate({"width": hX}, tmpX);
                                        $(".chart2").animate({"width": h2}, tmp2);


                                    }
                                </script>
                                <div class="MPS1X2Info">Nos clients pensent que:</div>
                                <div class="MPS1X2Evento">
                                    <span>Emirates Club </span>
                                    <span> Al Ain</span>
                                </div>
                                <div class="MPS1X2 q1"><a id="hl_w_PC_PiuGiocata1X1_lnkQuota1"
                                                          href="javascript: AddCoupon(sCouponButtonClientID, sCouponQuotaClientID, '3627374497');">6,55</a>
                                </div>
                                <div class="MPS1X2 qX"><a id="hl_w_PC_PiuGiocata1X1_lnkQuotaX"
                                                          href="javascript: AddCoupon(sCouponButtonClientID, sCouponQuotaClientID, '3627374499');">4,70</a>
                                </div>
                                <div class="MPS1X2 q2"><a id="hl_w_PC_PiuGiocata1X1_lnkQuota2"
                                                          href="javascript: AddCoupon(sCouponButtonClientID, sCouponQuotaClientID, '3627374500');">1,36</a>
                                </div>

                                <div class="chart">
                                    <div class="chart1 min" style="width: 20px;">
                                        <div></div>
                                    </div>
                                    <div class="chartX" style="width: 20px;">
                                        <div></div>
                                    </div>
                                    <div class="chart2 max" style="width: 290px;">
                                        <div></div>
                                    </div>
                                </div>


                                <div class="perc">
                                    <span>0 %</span>
                                    <span>0 %</span>
                                    <span>100 %</span>
                                </div>
                                <div id="hl_w_PC_PiuGiocata1X1_pnlOtherOdds" class="MPS1X2OtherOdds">
                                    <div class="item">
                                        <div>
                                            <span class="cq">O/U 2.5 FT</span><span class="desc">Over 2.5</span><a
                                                href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627212545);">1,42</a>
                                        </div>
                                        <div>
                                            <span class="cq">O/U 2.5 FT</span><span class="desc">Under 2.5</span><a
                                                href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627212546);">2,52</a>
                                        </div>
                                        <div class="percs">
                                            <div>
                                                <div class="perc" style="width:63%"></div>
                                                <div class="value">64%</div>
                                            </div>
                                            <div>
                                                <div class="perc min" style="width:36%"></div>
                                                <div class="value">36%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div>
                                            <span class="cq">GG/NG</span><span class="desc">GG</span><a
                                                href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627221272);">1,67</a>
                                        </div>
                                        <div>
                                            <span class="cq">GG/NG</span><span class="desc">NG</span><a
                                                href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627221273);">1,99</a>
                                        </div>
                                        <div class="percs">
                                            <div>
                                                <div class="perc" style="width:54%"></div>
                                                <div class="value">54%</div>
                                            </div>
                                            <div>
                                                <div class="perc min" style="width:45%"></div>
                                                <div class="value">46%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div>
                                            <span class="cq">Combo</span><span class="desc">GG&amp;3+</span><a
                                                href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627374664);">1,96</a>
                                        </div>
                                        <div>
                                            <span class="cq">Combo</span><span class="desc">NG&amp;2-</span><a
                                                href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3627374665);">3,25</a>
                                        </div>
                                        <div class="percs">
                                            <div>
                                                <div class="perc" style="width:62%"></div>
                                                <div class="value">62%</div>
                                            </div>
                                            <div>
                                                <div class="perc min" style="width:37%"></div>
                                                <div class="value">38%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--MOST PLAYED-->

                            <div class="HomeContent" id="PGContent1X2">

                                <script language="javascript" type="text/javascript">
                                    function GiocaQuotePiuGiocate() {

                                        var btn = document.getElementById(sMultiIDQuotaClientID);
                                        //var btn2 = document.getElementById(sCouponButtonCancellaID);
                                        var txt = document.getElementById(sCouponQuotaClientID);
                                        var txtImporto = document.getElementById(sCouponImportoClientID);

                                        var hid = document.getElementById("hl_w_PC_ctrlPiuGiocate_hidQuoteCoupon");
                                        //var id = $(btn2).attr("ID");
                                        txt.value = hid.value;
                                        btn.click();

                                    }


                                </script>


                                <div class="MP1X2HdrMain">
                                    <div class="MP1X2Title">Bestseller</div>

                                    <div class="MP1X2Text">
                                        <div class="MP1X2Date">DATE &amp; TIME</div>
                                        <div class="MP1X2Match">MATCH</div>
                                    </div>

                                    <div class="MP1X2Hdr1"></div>
                                    <div class="MP1X2HdrX"></div>
                                    <div class="MP1X2Hdr2"></div>
                                </div>

                                <div class="MP1X2Item">

                                    <div class="MP1X2Data">06/01/2016 15:00</div>
                                    <div class="MP1X2Evento"><span title="Juventus - Verona">Juventus - Verona</span>
                                    </div>
                                    <div class="MP1X2selected r2 q1">1,17</div>
                                    <div class="MP1X2Unselected qx">7,50</div>
                                    <div class="MP1X2Unselected q2">19,00</div>


                                </div>

                                <div class="MP1X2AItem">

                                    <div class="MP1X2Data">30/12/2015 20:30</div>
                                    <div class="MP1X2Evento"><span
                                            title="Barcelona - Real Betis">Barcelona - Real Betis</span></div>
                                    <div class="MP1X2selected r4 q1">1,05</div>
                                    <div class="MP1X2Unselected qx">15,55</div>
                                    <div class="MP1X2Unselected q2">35,00</div>


                                </div>

                                <div class="MP1X2Item">

                                    <div class="MP1X2Data">30/12/2015 16:00</div>
                                    <div class="MP1X2Evento"><span title="Real Madrid - Real Sociedad">Real Madrid - Real Sociedad</span>
                                    </div>
                                    <div class="MP1X2selected r3 q1">1,11</div>
                                    <div class="MP1X2Unselected qx">10,00</div>
                                    <div class="MP1X2Unselected q2">22,50</div>


                                </div>

                                <div class="MP1X2AItem">

                                    <div class="MP1X2Data">26/12/2015 16:00</div>
                                    <div class="MP1X2Evento"><span
                                            title="Tottenham - Norwich">Tottenham - Norwich</span></div>
                                    <div class="MP1X2selected r3 q1">1,42</div>
                                    <div class="MP1X2Unselected qx">4,65</div>
                                    <div class="MP1X2Unselected q2">7,95</div>


                                </div>

                                <div class="MP1X2Item">

                                    <div class="MP1X2Data">26/12/2015 16:00</div>
                                    <div class="MP1X2Evento"><span title="Manchester City - Sunderland">Manchester City - Sunderland</span>
                                    </div>
                                    <div class="MP1X2selected r4 q1">1,20</div>
                                    <div class="MP1X2Unselected qx">7,10</div>
                                    <div class="MP1X2Unselected q2">14,20</div>


                                </div>


                                <div class="MP1X2Riepilogo">
                                    <div class="MP1X2RiepDati">
                                        Montant:<span class="MP1X2Imp">&nbsp;10,00 € </span>
                                        Cote totale:<span class="MP1X2Imp">&nbsp;2,32</span>
                                        Gain Total :<span class="MP1X2Imp">&nbsp;23,24 €</span>
                                    </div>
                                    <div class="MP1X2Legend">
                                        <ul>
                                            <li>fixe du jour</li>
                                            <li>coffre-fort</li>
                                            <li>favorie</li>
                                            <li>best bet</li>
                                        </ul>
                                    </div>
                                    <a class="MP1X2Play" onclick="GiocaQuotePiuGiocate(),scrollToCoupon()">Parier</a>

                                </div>

                                <input type="hidden" name="hl$w$PC$ctrlPiuGiocate$hidQuoteCoupon"
                                       id="hl_w_PC_ctrlPiuGiocate_hidQuoteCoupon"
                                       value="3622278018§3622944055§3609774386§3622673713§3623663171§">

                            </div>

                        </div>
                    </td>
                    <td class="tdDX">

                        <iframe src="planetwin365_files/Unavailable.html" id="FrameBannerVG" name="FrameBannerVG"
                                class="fr-FR BannerVGHide" allowtransparency="true" scrolling="no" frameborder="0"
                                border="0" marginwidth="0" marginheight="0"></iframe>


                        <div id="divCoupon" class="divCouponHome">

                            <!--[if gte IE 9]>
                            <style type="text/css">
                                .gradient {
                                    filter: none;
                                }
                            </style>
                            <![endif]-->


                            <?php

                            if (isset($_SESSION['coupon_to_print']) && !isset($_GET['coupon_ajoute'])) {
                                unset($_SESSION['coupon_to_print']);
                            }

                            if (isset($_SESSION['coupon_events'])) {
                                ?>

                                <div id="h_w_PC_cCoupon_atlasCoupon">


                                    <script language="javascript" type="text/javascript">
                                        /* Variabili aggiornate durante postback */
                                        //Valuta dell'utente, può essere la default o la sua
                                        var IDValutaUtente = '1';
                                        //Parametro che indica se è abilitata la valuta cassa
                                        var valCassa = 0;
                                    </script>

                                    <div class="Top">
                                        <h3>Bulletin</h3>
                                        <span>N. événements:<?php echo $_SESSION['couponDataArr']['nb_events']; ?></span>


                                    </div>

                                    <div class="Cnt" id="divContentCoupon">
                                        <input name="h$w$PC$cCoupon$hidRiserva" id="h_w_PC_cCoupon_hidRiserva" value="0"
                                               type="hidden">
                                        <input name="h$w$PC$cCoupon$hidAttesa" id="h_w_PC_cCoupon_hidAttesa" value="0"
                                               type="hidden">
                                        <input name="h$w$PC$cCoupon$hidCouponAsincrono"
                                               id="h_w_PC_cCoupon_hidCouponAsincrono" value="0"
                                               type="hidden">
                                        <input name="h$w$PC$cCoupon$hidIsTemporaryCoupon"
                                               id="h_w_PC_cCoupon_hidIsTemporaryCoupon"
                                               type="hidden">
                                        <input name="h$w$PC$cCoupon$hidTipoCoupon" id="h_w_PC_cCoupon_hidTipoCoupon"
                                               value="2" type="hidden">
                                        <input name="h$w$PC$cCoupon$hidStatoCoupon" id="h_w_PC_cCoupon_hidStatoCoupon"
                                               value="10" type="hidden">
                                        <input name="h$w$PC$cCoupon$hidBonusNumScommesse"
                                               id="h_w_PC_cCoupon_hidBonusNumScommesse"
                                               value="1.0400" type="hidden">
                                        <input name="h$w$PC$cCoupon$hidQuotaTotaleDIMax"
                                               id="h_w_PC_cCoupon_hidQuotaTotaleDIMax" type="hidden">
                                        <input name="h$w$PC$cCoupon$hidQuotaTotaleDIMin"
                                               id="h_w_PC_cCoupon_hidQuotaTotaleDIMin" value="1,32"
                                               type="hidden">
                                        <input name="h$w$PC$cCoupon$hidQuotaTotale" id="h_w_PC_cCoupon_hidQuotaTotale"
                                               type="hidden">
                                        <?php
                                        if (isset($_SESSION['hidIDQuote'])) {
                                            echo $_SESSION['hidIDQuote'];
                                        }
                                        ?>

                                        <input name="h$w$PC$cCoupon$hidModificatoQuote"
                                               id="h_w_PC_cCoupon_hidModificatoQuote" value="1"
                                               type="hidden">
                                        <input name="h$w$PC$cCoupon$hidBonusQuotaMinimaAttivo"
                                               id="h_w_PC_cCoupon_hidBonusQuotaMinimaAttivo"
                                               value="0" type="hidden">
                                        <input name="h$w$PC$cCoupon$hidBonusRaggruppamentoMinimo"
                                               id="h_w_PC_cCoupon_hidBonusRaggruppamentoMinimo" value="1" type="hidden">
                                        <input name="h$w$PC$cCoupon$hidNumItemCoupon"
                                               id="h_w_PC_cCoupon_hidNumItemCoupon" value="2"
                                               type="hidden">
                                        <input name="h$w$PC$cCoupon$hidIDCoupon" id="h_w_PC_cCoupon_hidIDCoupon"
                                               type="hidden">
                                        <input name="h$w$PC$cCoupon$hidPrintAsincronoDisabled"
                                               id="h_w_PC_cCoupon_hidPrintAsincronoDisabled"
                                               value="0" type="hidden">

                                        <div id="divAttesa" style="display:none" class="cpnDivAttesa">

                                            <div class="spinningloader"></div>
                                            <div class="divAnimazioneLiveHTML"></div>
                                            <div id="countdowntimer" class="cpn"></div>

                                        </div>

                                        <div id="divCouponAsync" style="display:none;" class="divCouponAsync">
                                            Pari accepté avec réserve, vérifiez le résultat dans votre liste paris.
                                            <div><input name="h$w$PC$cCoupon$btnScoAncoraAsync"
                                                        value="Parier encore (+)" onclick="NewBet();"
                                                        id="h_w_PC_cCoupon_btnScoAncoraAsync" class="button"
                                                        type="submit"></div>
                                        </div>

                                        <div id="divInserimentoScommesse">
                                            <!-- **0** COUPON VUOTO-->
                                            <!--SEZIONE ERRORE GENERICO-->
                                            <!-- **1** INSERIMENTO -->
                                            <div id="h_w_PC_cCoupon_divCouponIns" class="CouponMainIns">
                                                <!--SEZIONE DATI SCOMMESSA-->
                                                <div class="CItems">
                                                    <?php

                                                    foreach ($_SESSION['couponDataArr']['rows'] as $rowC) {
                                                        ?>
                                                        <div
                                                            class="CItem te1" <?php if ($rowC['data'] == 'wrong') echo 'data="worng"'; ?>>
                                                            <div class="CInfo"
                                                                 title="<?php echo $rowC['event']; ?>"></div>
                                                            <div class="CCodPub"><?php echo $rowC['codepub']; ?></div>
                                                            <div class="CEvento"><?php echo $rowC['event']; ?></div>
                                                            <div class="CSubEv"><span
                                                                    id="h_w_PC_cCoupon_repCoupon_ctl01_SE"
                                                                    title="<?php echo $rowC['players']; ?>"><?php echo $rowC['players']; ?></span>
                                                            </div>
                                                            <?php
                                                            foreach ($rowC['cote'] as $item) {
                                                                $signe = explode(':', $item['signe']);
                                                                $correct_score = "";
                                                                if (count($signe) == 3) {
                                                                    $correct_score = ":" . $signe[2];
                                                                }
                                                                echo "<div class=\"COdds False\">

                                            <a class=\"CDelete active\"
                                               href=\"delete-odd.php?id=" . $item['id'] . "\"
                                               id=\"h_w_PC_cCoupon_repCoupon_ctl01_repCouponDetails_ctl00_LinkButton1\"
                                               title=\"Lever du bulletin.\"></a>

                                            <div class=\"CSegno\" title=\"1\"><span class=\"ClblSegno\"
                                                                                id=\"h_w_PC_cCoupon_repCoupon_ctl01_repCouponDetails_ctl00_Label1\">Segno:</span>" . $signe[1] . $correct_score . "
                                            </div>
                                            <div class=\"valQuota_1\">" . $item['cote'] . "</div>
                                            <div class=\"DIQ\" id=\"\"></div>

                                        </div>";
                                                                ?>


                                                                <?php
                                                            }
                                                            ?>

                                                        </div>
                                                        <?php
                                                    }

                                                    ?>
                                                </div>
                                                <!--SEZIONE ERRORE-->


                                                <!--SEZIONE DATI UTENTE-->

                                                <?php


                                                $coteValide = 0;
                                                if (isset($_SESSION['couponDataArr']['cote_max'])) {

                                                    if (str_replace(',', '.', $_SESSION['couponDataArr']['cote_max']) > 2) {
                                                        $coteValide = 1;
                                                    }
                                                }

                                                //                            if(isset($_SESSION['cote_tot'])){
                                                //                                if( str_replace(',', '.', $_SESSION['cote_tot']) > 5 ) {
                                                //                                    $coteValide = 1;
                                                //                                }
                                                //                            }


                                                $checkSolde = "";
                                                if (isset($_POST['amount'])) {
                                                    $checkSolde = 0;
                                                    $montantValide = 0;

                                                    if ($row['solde'] >= str_replace(',', '.', $_POST['amount'])) {
                                                        $checkSolde = 1;
                                                    }
                                                    if (str_replace(',', '.', $_POST['amount']) >= 0.5) {
                                                        $montantValide = 1;
                                                    }
                                                }

                                                $checkMiseMin = 1;
                                                if (isset($_POST['amount']) && isset($_POST['multiplicateur'])) {
                                                    $checkMiseMin = 0;

                                                    if ((str_replace(',', '.', $_POST['amount']) / $_POST['multiplicateur']) > 0.01) {
                                                        $checkMiseMin = 1;
                                                    }
                                                }
                                                ?>

                                                <!--SEZIONE IMPORTI-->
                                                <?php if (isset($_GET['verif_coupon']) && $checkSolde == 1 && $montantValide == 1 && $coteValide == 1 && $checkMiseMin == 1) { ?>

                                                    <?php if ($_SESSION['couponDataArr']['type'] == "integrale") {
                                                        $_SESSION['amount'] = $_POST['amount'];
                                                        $_SESSION['gain_pot_min'] = $_POST['gain_pot_min'];
                                                        $_SESSION['gain_pot_max'] = $_POST['gain_pot_max'];
                                                        $_SESSION['comb_gain_pot_max'] = $_POST['gain_pot_comb_min'];
                                                        $_SESSION['bonus_min'] = $_POST['bonus_min'];
                                                        $_SESSION['comb_bonus_max'] = $_POST['bonus_max_comb'];
                                                        $_SESSION['bonus_max'] = $_POST['bonus_max'];
                                                        $_SESSION['multiplicateur'] = $_POST['multiplicateur'];
                                                        $_SESSION['cote_min'] = $_POST['cote_min'];
                                                        $_SESSION['cote_max'] = $_POST['cote_max'];
                                                        $_SESSION['comb_cote_max'] = $_POST['cote_max_com'];

                                                        ?>
                                                        <div id="h_w_PC_cCoupon_tblConferma" class="divCpnTipi">
                                                            <div class="CpnTipoRiep HighImp">
                                                                <div class="RiepSX">Montant</div>
                                                                <div class="RiepDX"><span
                                                                        id="h_w_PC_cCoupon_lblImportoConferma"><?php echo $_SESSION['amount']; ?></span>&nbsp;€
                                                                </div>
                                                            </div>

                                                            <div id="h_w_PC_cCoupon_trVincitaPotMinConferma"
                                                                 class="CpnTipoRiep High">
                                                                <div class="RiepSX">Gain Pot. Comb. Min.</div>
                                                                <div class="RiepDX"><span
                                                                        id="h_w_PC_cCoupon_lblVincitaPotMinConferma"><?php echo $_SESSION['gain_pot_min']; ?></span>&nbsp;€
                                                                </div>
                                                            </div>
                                                            <div id="s_w_PC_cCoupon_trVincitaPotMaxCombConferma"
                                                                 class="CpnTipoRiep High">
                                                                <div class="RiepSX">Gain Pot. Comb. Max.</div>
                                                                <div class="RiepDX"><span
                                                                        id="s_w_PC_cCoupon_lblVincitaPotMaxCombConferma">&nbsp;<?php echo $_SESSION['comb_gain_pot_max']; ?></span>&nbsp;€
                                                                </div>
                                                            </div>
                                                            <div class="CpnTipoRiep High">
                                                                <div class="RiepSX"><span
                                                                        id="h_w_PC_cCoupon_lblVincitaPotCaptionConferma">Gain Pot. Toutes Comb.</span>
                                                                </div>
                                                                <div class="RiepDX"><span
                                                                        id="h_w_PC_cCoupon_lblVincitaPotConferma"><?php echo $_SESSION['gain_pot_max']; ?></span>&nbsp;€
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                    <?php if ($_SESSION['couponDataArr']['type'] == "multiple") {
                                                        $_SESSION['amount'] = $_POST['amount'];
//                                $_SESSION['couponDataArr']['amount'] = $_POST['amount'];
                                                        $_SESSION['gain_pot'] = $_POST['gain_pot'];
//                                $_SESSION['couponDataArr']['gain_max'] = $_POST['gain_pot'];
                                                        $_SESSION['bonus'] = $_POST['bonus'];
//                                $_SESSION['couponDataArr']['bonus_max'] = $_POST['bonus'];
                                                        $_SESSION['cote_tot'] = $_POST['cote_tot'];
//                                $_SESSION['couponDataArr']['cote_max'] = $_POST['cote_tot'];
                                                        ?>
                                                        <div id="h_w_PC_cCoupon_tblConferma" class="divCpnTipi">
                                                            <div class="CpnTipoRiep HighImp">
                                                                <div class="RiepSX">Montant</div>
                                                                <div class="RiepDX"><span
                                                                        id="h_w_PC_cCoupon_lblImportoConferma"><?php echo $_SESSION['amount']; ?></span>&nbsp;€
                                                                </div>
                                                            </div>

                                                            <div class="CpnTipoRiep High">
                                                                <div class="RiepSX"><span
                                                                        id="h_w_PC_cCoupon_lblVincitaPotCaptionConferma">Gain Possible</span>
                                                                </div>
                                                                <div class="RiepDX"><span
                                                                        id="h_w_PC_cCoupon_lblVincitaPotConferma"><?php echo $_SESSION['gain_pot']; ?></span>&nbsp;€
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>

                                                    <!--SEZIONE PULSANTI-->
                                                    <div class="CpnPuls">
                                                        <form id="submitcoupon" method="POST"
                                                              action="coupon_submit.php">
                                                            <a id="hl_w_PC_cCoupon_lnkIndietro"
                                                               class="btnCoupon sx back two"
                                                               href="javascript:__doPostBack('hl$w$PC$cCoupon$lnkIndietro','')"><img
                                                                    id="hl_w_PC_cCoupon_imgBack" class="imgButtonCoupon"
                                                                    src="http://static.planetwin365.com/App_Themes/PlanetWin365/images/back.png"
                                                                    style="border-width:0px;">
                                                                <div>
                                                                    En arrière
                                                                </div>
                                                            </a>
                                                            <input name="hl$w$PC$cCoupon$btnFakeConferma" value=""
                                                                   id="hl_w_PC_cCoupon_btnFakeConferma"
                                                                   style="display: none; visibility: hidden;"
                                                                   type="submit">
                                                            <span id="spanConferma">
                                                                <a id="hl_w_PC_cCoupon_lnkConferma" class="btnCoupon dx two"
                                                                   href="javascript:__doPostBack('hl$w$PC$cCoupon$lnkConferma','')"><img
                                                                        id="hl_w_PC_cCoupon_imgConfirm" class="imgButtonCoupon"
                                                                        src="http://static.planetwin365.com/App_Themes/PlanetWin365/images/continue.png"
                                                                        style="border-width:0px;">
                                                                    <div>
                                                                        OK
                                                                    </div>
                                                                </a>
                                                            </span>
                                                        </form>
                                                    </div>


                                                <?php } else { ?>
                                                    <form id="submitcoupon" method="POST"
                                                          action="index.php?verif_coupon=1">
                                                        <?php if ($_SESSION['couponDataArr']['type'] == "integrale") { ?>
                                                            <input type="hidden" name="amount" id="amountint"/>
                                                            <input type="hidden" name="gain_pot_min" id="gain_pot_min"/>
                                                            <input type="hidden" name="gain_pot_comb_min"
                                                                   id="gain_pot_comb_min"/>
                                                            <input type="hidden" name="gain_pot_max" id="gain_pot_max"/>
                                                            <input type="hidden" name="bonus_min" id="bonus_min"/>
                                                            <input type="hidden" name="bonus_max" id="bonus_max"/>
                                                            <input type="hidden" name="bonus_max_comb" id="bonus_max_comb"/>
                                                            <input type="hidden" name="multiplicateur"
                                                                   id="multiplicateur"/>
                                                            <input type="hidden" name="cote_min" id="cote_min"/>
                                                            <input type="hidden" name="cote_max_com" id="cote_max_com"/>
                                                            <input type="hidden" name="cote_max" id="cote_max"/>

                                                        <?php } ?>

                                                        <?php if ($_SESSION['couponDataArr']['type'] == "multiple") { ?>
                                                            <input type="hidden" name="amount" id="amountmult"/>
                                                            <input type="hidden" name="gain_pot" id="gain_pot"/>
                                                            <input type="hidden" name="bonus" id="bonus"/>
                                                            <input type="hidden" name="cote_tot" id="cote_tot"/>
                                                        <?php } ?>

                                                        <?php if (isset($_GET['verif_coupon']) && $checkSolde == 0) { ?>
                                                            <div id="s_w_PC_cCoupon_pnlMsgIns" class="divCouponError"
                                                                 style="background-image:url(//static.planetwin365.com/App_Themes/PlanetWin365/Images/ErrorTypes/Errors.png);">
                                                                <span id="s_w_PC_cCoupon_errMsgIns"><span>Solde insuffisant !</span><br></span>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if (isset($_GET['verif_coupon']) && $montantValide == 0) { ?>
                                                            <div id="s_w_PC_cCoupon_pnlMsgIns" class="divCouponError"
                                                                 style="background-image:url(//static.planetwin365.com/App_Themes/PlanetWin365/Images/ErrorTypes/Errors.png);">
                                                                <span>Des mises inférieures à 0,50 Euro ne sont pas consenties.</span>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if (isset($_GET['verif_coupon']) && $coteValide == 0) { ?>
                                                            <div id="s_w_PC_cCoupon_pnlMsgIns" class="divCouponError"
                                                                 style="background-image:url(//static.planetwin365.com/App_Themes/PlanetWin365/Images/ErrorTypes/Errors.png);">
                                                                <span>Le total des cotes doit etre supérieur à 5</span>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if (isset($_GET['verif_coupon']) && $checkMiseMin == 0) { ?>
                                                            <div id="s_w_PC_cCoupon_pnlMsgIns" class="divCouponError"
                                                                 style="background-image:url(//static.planetwin365.com/App_Themes/PlanetWin365/Images/ErrorTypes/Errors.png);">
                                                                <span>Des mises inférieures à 0,01 Euro ne sont pas consenties.</span>
                                                            </div>
                                                        <?php } ?>

                                                        <div id="s_w_PC_cCoupon_pnlMsgInsMise" style="display: none;"
                                                             class="divCouponError"
                                                             style="background-image:url(http://static.planetwin365.com/App_Themes/PlanetWin365/Images/ErrorTypes/Errors.png);">
                                                            <span id="s_w_PC_cCoupon_errMsgIns"><span>Des mises inférieures à 0,01 Euro ne sont pas consenties.</span><br></span>
                                                        </div>

                                                        <?php if ($_SESSION['couponDataArr']['type'] == "integrale") { ?>
                                                            <!-- /**********************************************/-->
                                                            <div id="h_w_PC_cCoupon_divTipoSco" class="divCpnTipi">
                                                                <!--MULTIPLE/SINGOLE-->

                                                                <!--DOPPIA INTEGRALE-->
                                                                <div id="h_w_PC_cCoupon_tdDoppiaIntegrale" class="sel">
                                                                    <div class="divCpnTipo DI">

                                                                        Intégral
                                                                    </div>
                                                                    <div class="CpnTipoRiep" style="display:none">
                                                                        <div class="RiepSX">Valuta</div>
                                                                        <div class="RiepDX"><span class="spanCambio"
                                                                                                  onmouseover="showCambio()"><img
                                                                                    id="h_w_PC_cCoupon_imgvalutaDI"
                                                                                    src="//static.planetwin365.com/App_Themes/PlanetWin365/images/Icons/cambioValuta.png"
                                                                                    style="border-width:0px;"></span><select
                                                                                name="h$w$PC$cCoupon$ddlValutaDI"
                                                                                id="h_w_PC_cCoupon_ddlValutaDI"
                                                                                class="dropdown cambioValuta"
                                                                                onchange="selValutaDI()">

                                                                            </select></div>
                                                                    </div>
                                                                    <div id="h_w_PC_cCoupon_tblCoupon_DI"
                                                                         class="divCpnTipoCnt">
                                                                        <span id="spanBonusMin"><input type="hidden"
                                                                                                       name="h$w$PC$cCoupon$hidBonusMinDI"
                                                                                                       id="h_w_PC_cCoupon_hidBonusMinDI"></span>
                                                                        <span id="spanBonusMax"><input type="hidden"
                                                                                                       name="h$w$PC$cCoupon$hidBonusMaxDI"
                                                                                                       id="h_w_PC_cCoupon_hidBonusMaxDI"></span>
                                                                        <div class="CpnTipoRiep">
                                                                            <div class="RiepSX">Min. Comb. Cote</div>
                                                                            <div class="RiepDX"><span
                                                                                    id="h_w_PC_cCoupon_lblQuotaTotaleDIMin"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['cote_min']); ?></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="CpnTipoRiep">
                                                                            <div class="RiepSX">Max. Comb. Cote</div>
                                                                            <div class="RiepDX"><span
                                                                                    id="h_w_PC_cCoupon_lblQuotaTotaleDIMaxComb"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['comb_cote_max']); ?></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="CpnTipoRiep">
                                                                            <div class="RiepSX">Toutes Comb. Cote</div>
                                                                            <div class="RiepDX"><span
                                                                                    id="h_w_PC_cCoupon_lblQuotaTotaleDIMax"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['cote_max']); ?></span>
                                                                            </div>
                                                                        </div>

                                                                        <div id="h_w_PC_cCoupon_trImportoDI"
                                                                             class="CpnTipoRiep"
                                                                             onkeypress="javascript:return WebForm_FireDefaultButton(event, 'h_w_PC_cCoupon_btnFakeAvanti')">

                                                                            <div class="RiepSX">Montant</div>
                                                                            <div class="RiepDX">
                                                                                <span
                                                                                    id="h_w_PC_cCoupon_lblImportoDICombinazioni"><?php echo $_SESSION['couponDataArr']['multiplicateur']; ?></span>&nbsp;x&nbsp;
                                                                                <span><input
                                                                                        name="h$w$PC$cCoupon$txtImportoDI"
                                                                                        type="text"
                                                                                        value="<?php echo $_SESSION['couponDataArr']['amount']; ?>"
                                                                                        maxlength="9"
                                                                                        id="h_w_PC_cCoupon_txtImportoDI"
                                                                                        class="TextBox"
                                                                                        onkeyup="calcVpDI(<?php echo $_SESSION['couponDataArr']['cote_max']; ?>, <?php echo $_SESSION['couponDataArr']['comb_cote_max']; ?>, <?php echo $_SESSION['couponDataArr']['cote_min']; ?>, 'h_w_PC_cCoupon_txtImportoDI', 'h_w_PC_cCoupon_litVincitaPotDI', 'h_w_PC_cCoupon_txtTotaleDI', 'h_w_PC_cCoupon_lblImportoDICombinazioni', <?php echo ($_SESSION['couponDataArr']['bonus_perc'] / 100) + 1; ?>,<?php echo ($_SESSION['couponDataArr']['bonus_perc'] / 100) + 1; ?>);"
                                                                                        style="width:35px;">&nbsp;€</span>
                                                                                <span id="spanCautionDI"><img
                                                                                        src="//static.planetwin365.com/App_Themes/PlanetWin365/images/Error_small.png"
                                                                                        id="h_w_PC_cCoupon_imgtxtImportoDI"
                                                                                        align="middle"
                                                                                        style="display:none;"></span>
                                                                            </div>

                                                                        </div>
                                                                        <div id="h_w_PC_cCoupon_trImportoTotaleDI"
                                                                             class="CpnTipoRiep"
                                                                             onkeypress="javascript:return WebForm_FireDefaultButton(event, 'h_w_PC_cCoupon_btnFakeAvanti')">

                                                                            <div class="RiepSX">Montant Total</div>
                                                                            <div class="RiepDX">=&nbsp;<span
                                                                                    style="display:none"><input
                                                                                        name="h$w$PC$cCoupon$txtTotaleDIValuta"
                                                                                        type="text" maxlength="9"
                                                                                        id="h_w_PC_cCoupon_txtTotaleDIValuta"
                                                                                        class="TextBoxValuta"
                                                                                        style="width:35px;"></span><input
                                                                                    name="h$w$PC$cCoupon$txtTotaleDI"
                                                                                    type="text"
                                                                                    value="<?php echo str_replace(',', '.', $_SESSION['couponDataArr']['amount']) * $_SESSION['couponDataArr']['multiplicateur']; ?>"
                                                                                    maxlength="9"
                                                                                    id="h_w_PC_cCoupon_txtTotaleDI"
                                                                                    class="TextBox"
                                                                                    onkeyup="splitImportoDI();"
                                                                                    style="width:35px;">&nbsp;€
                                                                            </div>

                                                                        </div>

                                                                        <div id="h_w_PC_cCoupon_trBonusDIMin"
                                                                             class="CpnTipoRiep">

                                                                            <div class="RiepSX">Bonus Min. Comb.</div>
                                                                            <div class="RiepDX"><span
                                                                                    id="spanBonusMinDI"><span
                                                                                        id="h_w_PC_cCoupon_lblBonusMinDI"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['bonus_min']); ?></span></span>&nbsp;€
                                                                            </div>

                                                                        </div>
                                                                        <div id="h_w_PC_cCoupon_trBonusDIMax"
                                                                             class="CpnTipoRiep">

                                                                            <div class="RiepSX">Bonus Max. Comb.</div>
                                                                            <div class="RiepDX"><span
                                                                                    id="spanBonusMaxDI"><span
                                                                                        id="h_w_PC_cCoupon_lblBonusMaxDI"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['comb_bonus_max']);; ?></span></span>&nbsp;€
                                                                            </div>

                                                                        </div>
                                                                        <div id="h_w_PC_cCoupon_trBonusDIAll"
                                                                             class="CpnTipoRiep">

                                                                            <div class="RiepSX">Bonus Toutes Comb.</div>
                                                                            <div class="RiepDX"><span
                                                                                    id="spanBonusAllDI"><span
                                                                                        id="h_w_PC_cCoupon_lblBonusAllDI"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['bonus_max']); ?></span></span>&nbsp;€
                                                                            </div>

                                                                        </div>
                                                                        <div id="h_w_PC_cCoupon_trVincitaPotMin"
                                                                             class="CpnTipoRiep High">

                                                                            <div class="RiepSX">Gain Pot. Comb. Min.
                                                                            </div>
                                                                            <div class="RiepDX"><span
                                                                                    id="spanVincitaPotMin"><span
                                                                                        id="h_w_PC_cCoupon_lblVincitaPotMin"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['gain_min']); ?></span></span>&nbsp;€
                                                                            </div>

                                                                        </div>
                                                                        <div id="h_w_PC_cCoupon_trVincitaPotMax"
                                                                             class="CpnTipoRiep High">

                                                                            <div class="RiepSX">Gain Pot. Comb. Max.
                                                                            </div>
                                                                            <div class="RiepDX"><span
                                                                                    id="spanVincitaPotMaxComb"><span
                                                                                        id="h_w_PC_cCoupon_lblVincitaPotMaxComb"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['comb_gain_max']); ?></span></span>&nbsp;€
                                                                            </div>

                                                                        </div>
                                                                        <div id="h_w_PC_cCoupon_trVincitaPot"
                                                                             class="CpnTipoRiep High">

                                                                            <div class="RiepSX">Gain Pot. Toutes Comb.
                                                                            </div>
                                                                            <div class="RiepDX"><span
                                                                                    id="h_w_PC_cCoupon_litVincitaPotDI"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['gain_max']); ?></span>&nbsp;€
                                                                            </div>
                                                                            <a id="h_w_PC_cCoupon_btnCalcolaVincitaDI"
                                                                               title="Mettre à jour" class="lnkRefresh"
                                                                               href="javascript:__doPostBack('h$w$PC$cCoupon$btnCalcolaVincitaDI','')"></a>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--SISTEMA-->

                                                            </div>
                                                            <!-- /**********************************************/-->
                                                        <?php } ?>

                                                        <?php if ($_SESSION['couponDataArr']['type'] == "multiple") { ?>


                                                            <!-- /**********************************************/-->
                                                            <div id="s_w_PC_cCoupon_divTipoSco" class="divCpnTipi">
                                                                <!--MULTIPLE/SINGOLE-->
                                                                <div id="s_w_PC_cCoupon_tdMultipla" class="sel">
                                                                    <div class="divCpnTipo Mul">
                                                                        <a href="javascript: __doPostBack('s$w$PC$cCoupon$lnkMultipla','')"><img
                                                                                src="//static.planetwin365.com/App_Themes/PlanetWin365/Images/ArrowDownWhite.gif"
                                                                                id="s_w_PC_cCoupon_imgExpandBetSystemMultipla"
                                                                                border="0"></a>
                                                                        <a id="s_w_PC_cCoupon_lnkMultipla"
                                                                           class="tdTabLink"
                                                                           href="javascript:__doPostBack('s$w$PC$cCoupon$lnkMultipla','')">Multiple</a>

                                                                    </div>
                                                                    <div id="s_w_PC_cCoupon_tblCoupon_Singola"
                                                                         class="divCpnTipoCnt">
                                                                        <div class="CpnTipoRiep" style="display:none">
                                                                            <div class="RiepSX">Valuta</div>
                                                                            <div class="RiepDX"><span class="spanCambio"
                                                                                                      onmouseover="showCambio()"><img
                                                                                        id="s_w_PC_cCoupon_imgValutaS"
                                                                                        src="//static.planetwin365.com/App_Themes/PlanetWin365/images/Icons/cambioValuta.png"
                                                                                        style="border-width:0px;"></span><select
                                                                                    name="s$w$PC$cCoupon$ddlValuta"
                                                                                    id="s_w_PC_cCoupon_ddlValuta"
                                                                                    class="dropdown cambioValuta"
                                                                                    onchange="selValutaS()">

                                                                                </select></div>
                                                                        </div>
                                                                        <div class="CpnTipoRiep">
                                                                            <div class="RiepSX">Cote</div>
                                                                            <div class="RiepDX"><span
                                                                                    id="s_w_PC_cCoupon_lblQuotaTotale"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['cote_max']); ?></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="CpnTipoRiep">
                                                                            <div class="RiepSX">Montant</div>

                                                                            <div id="s_w_PC_cCoupon_trTxtImportoValuta"
                                                                                 onkeypress="javascript:return WebForm_FireDefaultButton(event, 's_w_PC_cCoupon_btnFakeAvanti')">

                                                                                <div class="RiepDX">
                                                                                    <img
                                                                                        src="//static.planetwin365.com/App_Themes/PlanetWin365/images/Error_small.png"
                                                                                        id="s_w_PC_cCoupon_imgtxtImporto"
                                                                                        align="middle"
                                                                                        style="visibility: hidden;">
                                                            <span style="display:none">
                                                                <input name="s$w$PC$cCoupon$txtImportoValuta"
                                                                       type="text" maxlength="9"
                                                                       id="h_w_PC_cCoupon_txtImportoValuta"
                                                                       class="TextBoxValuta" style="width:45px;"></span><span
                                                                                        id="spanImporto">
                                                                <input name="s$w$PC$cCoupon$txtImporto" type="text"
                                                                       maxlength="9" id="h_w_PC_cCoupon_txtImporto"
                                                                       value="<?php echo str_replace('.', ',', $_SESSION['couponDataArr']['amount']); ?>"
                                                                       class="TextBox"
                                                                       onkeyup="calcVpSingolaMultipla(<?php echo $_SESSION['couponDataArr']['cote_max']; ?>, <?php echo ($_SESSION['couponDataArr']['bonus_perc'] / 100) + 1; ?>, 'h_w_PC_cCoupon_txtImporto', 's_w_PC_cCoupon_litVincitaPot','s_w_PC_cCoupon_imgtxtImporto', 's_w_PC_cCoupon_litBonusNumScommesse');"
                                                                       style="width:45px;">&nbsp;€</span>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <div id="s_w_PC_cCoupon_trBonus"
                                                                             class="CpnTipoRiep">

                                                                            <div class="RiepSX">Bonus</div>
                                                                            <div class="RiepDX"><span
                                                                                    id="s_w_PC_cCoupon_litBonusNumScommesse"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['bonus_max']); ?></span>&nbsp;€
                                                                            </div>

                                                                        </div>
                                                                        <div class="CpnTipoRiep High">
                                                                            <div class="RiepSX">Gain Pot.</div>
                                                                            <div class="RiepDX"><span
                                                                                    id="s_w_PC_cCoupon_litVincitaPot"><?php echo str_replace('.', ',', $_SESSION['couponDataArr']['gain_max']); ?></span>&nbsp;€
                                                                            </div>
                                                                            <a id="s_w_PC_cCoupon_btnCalcolaVincitaSingola"
                                                                               title="Mettre à jour" class="lnkRefresh"
                                                                               href="javascript:__doPostBack('s$w$PC$cCoupon$btnCalcolaVincitaSingola','')"></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!--DOPPIA INTEGRALE-->

                                                                <!--SISTEMA-->
                                                                <div id="s_w_PC_cCoupon_tdSistema">
                                                                    <div class="divCpnTipo Sis">
                                                                        <a href="javascript: __doPostBack('s$w$PC$cCoupon$lnkSistema','')">
                                                                            <img
                                                                                src="//static.planetwin365.com/App_Themes/PlanetWin365/Images/ArrowRightWhite.gif"
                                                                                id="s_w_PC_cCoupon_imgExpandBetSystemSistema"
                                                                                border="0">
                                                                        </a><a id="s_w_PC_cCoupon_lnkSistema"
                                                                               class="tdTabLink"
                                                                               href="javascript:__doPostBack('s$w$PC$cCoupon$lnkSistema','')">Système</a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <!-- /**********************************************/-->
                                                        <?php } ?>

                                                        <!--                                --><?php //echo $_SESSION['amount_form']; ?>
                                                    </form>

                                                    <!--SEZIONE PULSANTI-->

                                                    <div class="CpnPuls">
                                                        <a onclick="resetActiveCssClass();"
                                                           id="h_w_PC_cCoupon_lnkCancella"
                                                           class="btnCoupon sx three"
                                                           href="javascript:__doPostBack('h$w$PC$cCoupon$lnkCancella','')"><img
                                                                id="h_w_PC_cCoupon_imgCancel" class="imgButtonCoupon"
                                                                src="http://static.planetwin365.com/App_Themes/PlanetWin365/images/cancel.png"
                                                                border="0">
                                                            <div>
                                                                ANNULER
                                                            </div>
                                                        </a><a id="h_w_PC_cCoupon_lnkAvantiAnonimo"
                                                               title="Clique ici pour enregistrer les cotes et la mise choisies pour pouvoir les utiliser après. Le pari ne sera pas enregistré!"
                                                               class="btnCoupon mx three btn imgButtonCouponSave"
                                                               href="javascript:__doPostBack('h$w$PC$cCoupon$lnkAvantiAnonimo','')"><img
                                                                id="h_w_PC_cCoupon_imgSave" class="imgButtonCoupon"
                                                                src="http://static.planetwin365.com/App_Themes/PlanetWin365/images/save.png"
                                                                border="0">
                                                            <div>
                                                                ENREGISTR.
                                                            </div>
                                </a><a id="h_w_PC_cCoupon_lnkAvanti" title="Continuer" class="btnCoupon dx three"
                                       href="javascript:__doPostBack('h$w$PC$cCoupon$lnkAvanti','')"><img
                                        id="h_w_PC_cCoupon_imgContinue" class="imgButtonCoupon"
                                        src="http://static.planetwin365.com/App_Themes/PlanetWin365/images/continue.png"
                                        border="0">
                                    <div>
                                        CONTINUER
                                                            </div>
                                                        </a><input name="h$w$PC$cCoupon$btnFakeAvanti" value=""
                                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnFakeAvanti','')"
                                                                   id="h_w_PC_cCoupon_btnFakeAvanti"
                                                                   style="display: none; visibility: hidden"
                                                                   type="button">
                                                        <input name="h$w$PC$cCoupon$btnFakeCancella" value=""
                                                               onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnFakeCancella','')"
                                                               id="h_w_PC_cCoupon_btnFakeCancella"
                                                               style="display: none; visibility: hidden"
                                                               type="button">
                                                    </div>

                                                <?php } ?>


                                            </div>
                                            <!-- **2** CONFERMA -->


                                            <!-- **3** ACCETTATA --->


                                            <!-- Inserimento asincrono di una quota -->
                                            <input name="h$w$PC$cCoupon$btnAddCoupon" value="Add"
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnAddCoupon','')"
                                                   id="h_w_PC_cCoupon_btnAddCoupon" style="display:none;" type="button">
                                            <input name="h$w$PC$cCoupon$btnAddQuota" value="Add"
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnAddQuota','')"
                                                   id="h_w_PC_cCoupon_btnAddQuota" style="display:none;" type="button">
                                            <input name="h$w$PC$cCoupon$btnAddMultiIDQuota" value="Add"
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnAddMultiIDQuota','')"
                                                   id="h_w_PC_cCoupon_btnAddMultiIDQuota" style="display:none;"
                                                   type="button">
                                            <input name="h$w$PC$cCoupon$txtIDQuota" id="h_w_PC_cCoupon_txtIDQuota"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtSottoEventName"
                                                   id="h_w_PC_cCoupon_txtSottoEventName" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtQuota" id="h_w_PC_cCoupon_txtQuota"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtCodPubblicazione"
                                                   id="h_w_PC_cCoupon_txtCodPubblicazione"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtIDEvento" id="h_w_PC_cCoupon_txtIDEvento"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtEventName" id="h_w_PC_cCoupon_txtEventName"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtIDSottoEvento"
                                                   id="h_w_PC_cCoupon_txtIDSottoEvento" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtGiocabilita"
                                                   id="h_w_PC_cCoupon_txtGiocabilita" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtTipoQuota" id="h_w_PC_cCoupon_txtTipoQuota"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtIDTipoEvento"
                                                   id="h_w_PC_cCoupon_txtIDTipoEvento" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtIDTipoQuota"
                                                   id="h_w_PC_cCoupon_txtIDTipoQuota" type="hidden">
                                            <input name="h$w$PC$cCoupon$btnAddCouponQB" value="AddQB"
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnAddCouponQB','')"
                                                   id="h_w_PC_cCoupon_btnAddCouponQB" style="display:none"
                                                   type="button">
                                            <input name="h$w$PC$cCoupon$btnRefreshAttesa" value=""
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnRefreshAttesa','')"
                                                   id="h_w_PC_cCoupon_btnRefreshAttesa" style="display:none"
                                                   type="button">
                                            <input name="h$w$PC$cCoupon$btnRefreshAsincrono" value=""
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnRefreshAsincrono','')"
                                                   id="h_w_PC_cCoupon_btnRefreshAsincrono" style="display:none"
                                                   type="button">
                                            <input name="h$w$PC$cCoupon$txtQB" id="h_w_PC_cCoupon_txtQB" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtAddImporto" id="h_w_PC_cCoupon_txtAddImporto"
                                                   type="hidden">

                                            <!-- Inserimento asincrono di un Coupon precompilato -->
                                            <input name="h$w$PC$cCoupon$btnAddCouponPrecompilato" value=""
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnAddCouponPrecompilato','')"
                                                   id="h_w_PC_cCoupon_btnAddCouponPrecompilato" style="display:none"
                                                   type="button">
                                            <input name="h$w$PC$cCoupon$txtIDCouponPrecompilato"
                                                   id="h_w_PC_cCoupon_txtIDCouponPrecompilato"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtImportoCouponPrecompilato"
                                                   id="h_w_PC_cCoupon_txtImportoCouponPrecompilato" type="hidden">
                                        </div>
                                        <!--RICARICA COUPON-->

                                    </div>
                                    <div class="Btm"></div>

                                    <script type="text/javascript">
                                        $(document).ready(function () {

                                            $("#hl_w_PC_cCoupon_lnkConferma").on('click', function (e) {
                                                $("#h_w_ctl18_UpdateProgress").show();
                                                $("#submitcoupon").submit();
                                            });

                                            $("#hl_w_PC_cCoupon_lnkIndietro").on('click', function (e) {
                                                $("#h_w_ctl18_UpdateProgress").show();
                                                window.location.replace("index.php");
                                            });

                                        });
                                    </script>

                                </div>

                                <?php
                            }
                            if (isset($_SESSION['coupon_to_print']) && isset($_GET['coupon_ajoute'])) {
                                ?>
                                <div id="hl_w_PC_cCoupon_atlasCoupon">

                                    <script language="javascript" type="text/javascript">
                                        /* Variabili aggiornate durante postback */
                                        //Valuta dell'utente, pu� essere la default o la sua
                                        var IDValutaUtente = '1';
                                        //Parametro che indica se � abilitata la valuta cassa
                                        var valCassa = 0;
                                    </script>

                                    <div class="Top">
                                        <h3>Bulletin</h3>
                                        <span></span>


                                    </div>

                                    <div class="Cnt" id="divContentCoupon">
                                        <input name="hl$w$PC$cCoupon$hidRiserva" id="hl_w_PC_cCoupon_hidRiserva"
                                               value="0" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidAttesa" id="hl_w_PC_cCoupon_hidAttesa" value="0"
                                               type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidCouponAsincrono"
                                               id="hl_w_PC_cCoupon_hidCouponAsincrono" value="0" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidIsTemporaryCoupon"
                                               id="hl_w_PC_cCoupon_hidIsTemporaryCoupon" value="0" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidTipoCoupon" id="hl_w_PC_cCoupon_hidTipoCoupon"
                                               value="2" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidStatoCoupon" id="hl_w_PC_cCoupon_hidStatoCoupon"
                                               value="30" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidBonusNumScommesse"
                                               id="hl_w_PC_cCoupon_hidBonusNumScommesse" value="1" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidQuotaTotaleDIMax"
                                               id="hl_w_PC_cCoupon_hidQuotaTotaleDIMax" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidQuotaTotaleDIMin"
                                               id="hl_w_PC_cCoupon_hidQuotaTotaleDIMin" value="2,71" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidQuotaTotale" id="hl_w_PC_cCoupon_hidQuotaTotale"
                                               type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidIDQuote" id="hl_w_PC_cCoupon_hidIDQuote"
                                               type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidModificatoQuote"
                                               id="hl_w_PC_cCoupon_hidModificatoQuote" value="1" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidBonusQuotaMinimaAttivo"
                                               id="hl_w_PC_cCoupon_hidBonusQuotaMinimaAttivo" value="0" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidBonusRaggruppamentoMinimo"
                                               id="hl_w_PC_cCoupon_hidBonusRaggruppamentoMinimo" value="0"
                                               type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidNumItemCoupon"
                                               id="hl_w_PC_cCoupon_hidNumItemCoupon" value="0" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidIDCoupon" id="hl_w_PC_cCoupon_hidIDCoupon"
                                               value="587361071" type="hidden">
                                        <input name="hl$w$PC$cCoupon$hidPrintAsincronoDisabled"
                                               id="hl_w_PC_cCoupon_hidPrintAsincronoDisabled" value="0" type="hidden">

                                        <div id="divAttesa" style="display:none" class="cpnDivAttesa">

                                            <img
                                                src="http://static.planetwin365.com/App_Themes/PlanetWin365/swf/Attendi.gif"
                                                height="90" width="100%">


                                        </div>

                                        <div id="divCouponAsync" style="display:none;" class="divCouponAsync">
                                            Pari accepté avec réserve, vérifiez le résultat dans votre liste paris.
                                            <div><input name="hl$w$PC$cCoupon$btnScoAncoraAsync"
                                                        value="Parier encore (+)" onclick="NewBet();"
                                                        id="hl_w_PC_cCoupon_btnScoAncoraAsync" class="button"
                                                        onkeyup="trapNextBet(event, 'hl_w_PC_cCoupon_btnScoAncoraAsync');return false;"
                                                        style="width:150px;" type="submit"></div>
                                        </div>

                                        <div style="display: block;" id="divInserimentoScommesse">
                                            <!-- **0** COUPON VUOTO-->


                                            <!--SEZIONE ERRORE GENERICO-->


                                            <!-- **1** INSERIMENTO -->

                                            <!-- **2** CONFERMA -->


                                            <!-- **3** ACCETTATA --->
                                            <div id="hl_w_PC_cCoupon_divAccettata" class="CouponMainAccepted">

                        <span id="hl_w_PC_cCoupon_lblMsgScoAccettata">Pari inséré correctement.
						<br>Code attribué:<br><b><?php echo $_SESSION['coupon_to_print']; ?></b></span>
                                                <input name="hl$w$PC$cCoupon$btnScoAncora" value="Parier encore (+)"
                                                       onclick="javascript: window.location = '<?php echo "http://" . $_SERVER['HTTP_HOST']; ?>';"
                                                       id="hl_w_PC_cCoupon_btnScoAncora" class="button"
                                                       style="width:150px;" type="submit">
                                                <input name="hl$w$PC$cCoupon$btnStampaSco" value="Imprimer reçu"
                                                       onclick="printCoupon('<?php echo $_SESSION['coupon_to_print']; ?>','force');"
                                                       id="hl_w_PC_cCoupon_btnStampaSco" class="button"
                                                       onkeyup="trapNextBet(event, 'hl_w_PC_cCoupon_btnScoAncora');return false;"
                                                       style="width:150px;" type="submit"><input id="hidConferma"
                                                                                                 value="0"
                                                                                                 type="hidden">

                                            </div>

                                        </div>
                                        <!--RICARICA COUPON-->


                                    </div>
                                    <div class="Btm"></div>
                                </div>
                            <?php }

                            if (isset($_SESSION['coupon_events']) || isset($_GET['coupon_ajoute'])) {

                            } else {
                                ?>

                                <div id="hl_w_PC_cCoupon_atlasCoupon">


                                    <script language="javascript" type="text/javascript">
                                        /* Variabili aggiornate durante postback */
                                        //Valuta dell'utente, può essere la default o la sua
                                        var IDValutaUtente = '1';
                                        //Parametro che indica se è abilitata la valuta cassa
                                        var valCassa = 0;
                                    </script>

                                    <div class="Top">
                                        <h3>Bulletin</h3>
                                        <span></span>


                                    </div>

                                    <div class="Cnt" id="divContentCoupon">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidRiserva"
                                               id="hl_w_PC_cCoupon_hidRiserva" value="0">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidAttesa"
                                               id="hl_w_PC_cCoupon_hidAttesa" value="0">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidCouponAsincrono"
                                               id="hl_w_PC_cCoupon_hidCouponAsincrono" value="0">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidIsTemporaryCoupon"
                                               id="hl_w_PC_cCoupon_hidIsTemporaryCoupon">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidTipoCoupon"
                                               id="hl_w_PC_cCoupon_hidTipoCoupon">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidStatoCoupon"
                                               id="hl_w_PC_cCoupon_hidStatoCoupon" value="0">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidBonusNumScommesse"
                                               id="hl_w_PC_cCoupon_hidBonusNumScommesse">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidQuotaTotaleDIMax"
                                               id="hl_w_PC_cCoupon_hidQuotaTotaleDIMax">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidQuotaTotaleDIMin"
                                               id="hl_w_PC_cCoupon_hidQuotaTotaleDIMin">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidQuotaTotale"
                                               id="hl_w_PC_cCoupon_hidQuotaTotale">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidIDQuote"
                                               id="hl_w_PC_cCoupon_hidIDQuote">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidModificatoQuote"
                                               id="hl_w_PC_cCoupon_hidModificatoQuote" value="1">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidBonusQuotaMinimaAttivo"
                                               id="hl_w_PC_cCoupon_hidBonusQuotaMinimaAttivo" value="0">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidBonusRaggruppamentoMinimo"
                                               id="hl_w_PC_cCoupon_hidBonusRaggruppamentoMinimo" value="0">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidNumItemCoupon"
                                               id="hl_w_PC_cCoupon_hidNumItemCoupon" value="0">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidIDCoupon"
                                               id="hl_w_PC_cCoupon_hidIDCoupon">
                                        <input type="hidden" name="hl$w$PC$cCoupon$hidPrintAsincronoDisabled"
                                               id="hl_w_PC_cCoupon_hidPrintAsincronoDisabled" value="0">

                                        <div id="divAttesa" style="display:none" class="cpnDivAttesa">

                                            <div class="spinningloader"></div>
                                            <div class="divAnimazioneLiveHTML"></div>
                                            <div id="countdowntimer" class="cpn"></div>

                                        </div>

                                        <div id="divCouponAsync" style="display:none;" class="divCouponAsync">
                                            Pari accepté avec réserve, vérifiez le résultat dans votre liste paris.
                                            <div><input type="submit" name="hl$w$PC$cCoupon$btnScoAncoraAsync"
                                                        value="Parier encore (+)" onclick="NewBet();"
                                                        id="hl_w_PC_cCoupon_btnScoAncoraAsync" class="button"
                                                        onkeyup="trapNextBet(event, &#39;hl_w_PC_cCoupon_btnScoAncoraAsync&#39;);return false;"
                                                        style="width:150px;"></div>
                                        </div>

                                        <div id="divInserimentoScommesse">
                                            <!-- **0** COUPON VUOTO-->
                                            <div id="h_w_PC_cCoupon_divCouponVuoto" class="couponempty"
                                                 onkeypress="javascript:return WebForm_FireDefaultButton(event, 'h_w_PC_cCoupon_btnFakeLoad')">


                       Cliquez sur les côtes afin de les ajouter sur le coupon
                       ou entrez un code à charger
                       <div class="CpnPuls">
                           <form id="loadcoupon" action="coupon_load.php" method="POST">
                               <input id="codecoupon" name="codecoupon" maxlength="6" class="TxtBox" size="4" type="text">
                               <a title="Charge les cotes et la mise en utilisant le code du pari que vous avez enregistré précédemment." class="btnCoupon mx" id="btnEntrerCoupon">
                                   <img id="h_w_PC_cCoupon_imgLoad" class="imgButtonCoupon" src="http://static.planetwin365.com/App_Themes/PlanetWin365/images/load.png" style="border-width:0px;">CHARGER</a>
                           </form>


                                                </div>

                                            </div>

                                            <?php if (isset($_GET['coupn-not-found'])) { ?>
                                                <div id="h_w_PC_cCoupon_pnlMsgGen" class="divCouponErrorGen"
                                                     style="background-image:url(http://static.planetwin365.com/App_Themes/PlanetWin365/Images/ErrorTypes/Errors.png);">

                                                    <span
                                                        id="h_w_PC_cCoupon_errMsgGen"><span> Coupon introuvable:  </span><br></span>

                                                </div>
                                            <?php } ?>
                                            <!--SEZIONE ERRORE GENERICO-->
                                            <!-- **1** INSERIMENTO -->

                                            <!-- **2** CONFERMA -->


                                            <!-- **3** ACCETTATA --->


                                            <!-- Inserimento asincrono di una quota -->
                                            <input name="h$w$PC$cCoupon$btnAddCoupon" value="Add"
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnAddCoupon','')"
                                                   id="h_w_PC_cCoupon_btnAddCoupon" style="display:none;" type="button">
                                            <input name="h$w$PC$cCoupon$btnAddQuota" value="Add"
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnAddQuota','')"
                                                   id="h_w_PC_cCoupon_btnAddQuota" style="display:none;" type="button">
                                            <input name="h$w$PC$cCoupon$btnAddMultiIDQuota" value="Add"
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnAddMultiIDQuota','')"
                                                   id="h_w_PC_cCoupon_btnAddMultiIDQuota" style="display:none;"
                                                   type="button">
                                            <input name="h$w$PC$cCoupon$txtIDQuota" id="h_w_PC_cCoupon_txtIDQuota"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtSottoEventName"
                                                   id="h_w_PC_cCoupon_txtSottoEventName" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtQuota" id="h_w_PC_cCoupon_txtQuota"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtCodPubblicazione"
                                                   id="h_w_PC_cCoupon_txtCodPubblicazione" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtIDEvento" id="h_w_PC_cCoupon_txtIDEvento"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtEventName" id="h_w_PC_cCoupon_txtEventName"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$txtIDSottoEvento"
                                                   id="h_w_PC_cCoupon_txtIDSottoEvento" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtGiocabilita"
                                                   id="h_w_PC_cCoupon_txtGiocabilita" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtTipoQuota" id="h_w_PC_cCoupon_txtTipoQuota"
                                                   type="hidden">
                                            <input name="h$w$PC$cCoupon$btnAddCouponQB" value="AddQB"
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnAddCouponQB','')"
                                                   id="h_w_PC_cCoupon_btnAddCouponQB" style="display:none"
                                                   type="button">
                                            <input name="h$w$PC$cCoupon$btnRefreshAttesa" value=""
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnRefreshAttesa','')"
                                                   id="h_w_PC_cCoupon_btnRefreshAttesa" style="display:none"
                                                   type="button">
                                            <input name="h$w$PC$cCoupon$btnRefreshAsincrono" value=""
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnRefreshAsincrono','')"
                                                   id="h_w_PC_cCoupon_btnRefreshAsincrono" style="display:none"
                                                   type="button">
                                            <input name="h$w$PC$cCoupon$txtQB" id="h_w_PC_cCoupon_txtQB" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtAddImporto" id="h_w_PC_cCoupon_txtAddImporto"
                                                   type="hidden">

                                            <!-- Inserimento asincrono di un Coupon precompilato -->
                                            <input name="h$w$PC$cCoupon$btnAddCouponPrecompilato" value=""
                                                   onclick="javascript:__doPostBack('h$w$PC$cCoupon$btnAddCouponPrecompilato','')"
                                                   id="h_w_PC_cCoupon_btnAddCouponPrecompilato" style="display:none"
                                                   type="button">
                                            <input name="h$w$PC$cCoupon$txtIDCouponPrecompilato"
                                                   id="h_w_PC_cCoupon_txtIDCouponPrecompilato" type="hidden">
                                            <input name="h$w$PC$cCoupon$txtImportoCouponPrecompilato"
                                                   id="h_w_PC_cCoupon_txtImportoCouponPrecompilato" type="hidden">
                                        </div>
                                        <!--RICARICA COUPON-->

                                    </div>
                                    <div class="Btm"></div>

                                </div>

                            <?php } ?>
                            <script type="text/javascript">
                                $(document).ready(function () {

                                    $("#btnEntrerCoupon").on('click', function (e) {
                                        if ($("#codecoupon").val() == '') {
                                            alert("Veuillez saisir un code coupon...");
                                        }
                                        else {
                                            $("#h_w_ctl18_UpdateProgress").show();
                                            //$("#loadcoupon").submit();
                                            $("#codecoupon").closest("form").submit();
                                        }
                                    });

                                    var noendedevent = true;

                                    $(".CItem").each(function () {
                                        if ($(this).attr('data') == 'wrong') {
                                            $(this).find('.COdds').attr('class', 'COdds True');
                                            noendedevent = false;
                                        }
                                    });


                                    $("#h_w_PC_cCoupon_lnkAvanti").on('click', function (e) {

                                        if ($('#h_w_PC_cCoupon_txtImporto').length) {
                                            var amount3 = $('#h_w_PC_cCoupon_txtImporto').val();
                                        }
                                        if ($('#hl_w_PC_cCoupon_txtImporto').length) {
                                            var amount3 = $('#hl_w_PC_cCoupon_txtImporto').val();
                                        }
                                        if ($('#s_w_PC_cCoupon_txtImporto').length) {
                                            var amount3 = $('#s_w_PC_cCoupon_txtImporto').val();
                                        }


                                        if ($('#h_w_PC_cCoupon_litVincitaPot').length) {
                                            var gain_pot = $('#h_w_PC_cCoupon_litVincitaPot').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_litVincitaPot').length) {
                                            var gain_pot = $('#hl_w_PC_cCoupon_litVincitaPot').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_litVincitaPot').length) {
                                            var gain_pot = $('#s_w_PC_cCoupon_litVincitaPot').text();
                                        }


                                        if ($('#h_w_PC_cCoupon_litBonusNumScommesse').length) {
                                            var bonus = $('#h_w_PC_cCoupon_litBonusNumScommesse').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_litBonusNumScommesse').length) {
                                            var bonus = $('#hl_w_PC_cCoupon_litBonusNumScommesse').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_litBonusNumScommesse').length) {
                                            var bonus = $('#s_w_PC_cCoupon_litBonusNumScommesse').text();
                                        }

                                        if ($('#h_w_PC_cCoupon_lblQuotaTotale').length) {
                                            var cote_tot = $('#h_w_PC_cCoupon_lblQuotaTotale').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_lblQuotaTotale').length) {
                                            var cote_tot = $('#hl_w_PC_cCoupon_lblQuotaTotale').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_lblQuotaTotale').length) {
                                            var cote_tot = $('#s_w_PC_cCoupon_lblQuotaTotale').text();
                                        }

                                        $('#amountmult').val(amount3);
                                        $('#gain_pot').val(gain_pot);
                                        $('#bonus').val(bonus);
                                        $('#cote_tot').val(cote_tot);


                                        if ($('#h_w_PC_cCoupon_txtTotaleDI').length) {
                                            var amount2 = $('#h_w_PC_cCoupon_txtTotaleDI').val();
                                        }
                                        if ($('#hl_w_PC_cCoupon_txtTotaleDI').length) {
                                            var amount2 = $('#hl_w_PC_cCoupon_txtTotaleDI').val();
                                        }
                                        if ($('#s_w_PC_cCoupon_txtTotaleDI').length) {
                                            var amount2 = $('#s_w_PC_cCoupon_txtTotaleDI').val();
                                        }

                                        if ($('#h_w_PC_cCoupon_lblVincitaPotMin').length) {
                                            var gain_pot_min = $('#h_w_PC_cCoupon_lblVincitaPotMin').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_lblVincitaPotMin').length) {
                                            var gain_pot_min = $('#hl_w_PC_cCoupon_lblVincitaPotMin').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_lblVincitaPotMin').length) {
                                            var gain_pot_min = $('#s_w_PC_cCoupon_lblVincitaPotMin').text();
                                        }


                                        if ($('#h_w_PC_cCoupon_lblVincitaPotMaxComb').length) {
                                            var gain_pot_comb_min = $('#h_w_PC_cCoupon_lblVincitaPotMaxComb').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_lblVincitaPotMaxComb').length) {
                                            var gain_pot_comb_min = $('#hl_w_PC_cCoupon_lblVincitaPotMaxComb').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_lblVincitaPotMaxComb').length) {
                                            var gain_pot_comb_min = $('#s_w_PC_cCoupon_lblVincitaPotMaxComb').text();
                                        }


                                        if ($('#h_w_PC_cCoupon_litVincitaPotDI').length) {
                                            var gain_pot_max = $('#h_w_PC_cCoupon_litVincitaPotDI').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_litVincitaPotDI').length) {
                                            var gain_pot_max = $('#hl_w_PC_cCoupon_litVincitaPotDI').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_litVincitaPotDI').length) {
                                            var gain_pot_max = $('#s_w_PC_cCoupon_litVincitaPotDI').text();
                                        }

                                        if ($('#h_w_PC_cCoupon_lblBonusMinDI').length) {
                                            var bonus_min = $('#h_w_PC_cCoupon_lblBonusMinDI').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_lblBonusMinDI').length) {
                                            var bonus_min = $('#hl_w_PC_cCoupon_lblBonusMinDI').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_lblBonusMinDI').length) {
                                            var bonus_min = $('#s_w_PC_cCoupon_lblBonusMinDI').text();
                                        }

                                        if ($('#h_w_PC_cCoupon_lblBonusMaxDI').length) {
                                            var bonus_max_comb = $('#h_w_PC_cCoupon_lblBonusMaxDI').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_lblBonusMaxDI').length) {
                                            var bonus_max_comb = $('#hl_w_PC_cCoupon_lblBonusMaxDI').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_lblBonusMaxDI').length) {
                                            var bonus_max_comb = $('#s_w_PC_cCoupon_lblBonusMaxDI').text();
                                        }

                                        if ($('#h_w_PC_cCoupon_lblBonusAllDI').length) {
                                            var bonus_max = $('#h_w_PC_cCoupon_lblBonusAllDI').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_lblBonusAllDI').length) {
                                            var bonus_max = $('#hl_w_PC_cCoupon_lblBonusAllDI').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_lblBonusAllDI').length) {
                                            var bonus_max = $('#s_w_PC_cCoupon_lblBonusAllDI').text();
                                        }

                                        if ($('#h_w_PC_cCoupon_lblImportoDICombinazioni').length) {
                                            var multiplicateur = $('#h_w_PC_cCoupon_lblImportoDICombinazioni').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_lblImportoDICombinazioni').length) {
                                            var multiplicateur = $('#hl_w_PC_cCoupon_lblImportoDICombinazioni').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_lblImportoDICombinazioni').length) {
                                            var multiplicateur = $('#s_w_PC_cCoupon_lblImportoDICombinazioni').text();
                                        }

                                        if ($('#h_w_PC_cCoupon_lblQuotaTotaleDIMin').length) {
                                            var cote_min = $('#h_w_PC_cCoupon_lblQuotaTotaleDIMin').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_lblQuotaTotaleDIMin').length) {
                                            var cote_min = $('#hl_w_PC_cCoupon_lblQuotaTotaleDIMin').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_lblQuotaTotaleDIMin').length) {
                                            var cote_min = $('#s_w_PC_cCoupon_lblQuotaTotaleDIMin').text();
                                        }

                                        if ($('#h_w_PC_cCoupon_lblQuotaTotaleDIMaxComb').length) {
                                            var cote_max_com = $('#h_w_PC_cCoupon_lblQuotaTotaleDIMaxComb').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_lblQuotaTotaleDIMaxComb').length) {
                                            var cote_max_com = $('#hl_w_PC_cCoupon_lblQuotaTotaleDIMaxComb').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_lblQuotaTotaleDIMaxComb').length) {
                                            var cote_max_com = $('#s_w_PC_cCoupon_lblQuotaTotaleDIMaxComb').text();
                                        }

                                        if ($('#h_w_PC_cCoupon_lblQuotaTotaleDIMax').length) {
                                            var cote_max = $('#h_w_PC_cCoupon_lblQuotaTotaleDIMax').text();
                                        }
                                        if ($('#hl_w_PC_cCoupon_lblQuotaTotaleDIMax').length) {
                                            var cote_max = $('#hl_w_PC_cCoupon_lblQuotaTotaleDIMax').text();
                                        }
                                        if ($('#s_w_PC_cCoupon_lblQuotaTotaleDIMax').length) {
                                            var cote_max = $('#s_w_PC_cCoupon_lblQuotaTotaleDIMax').text();
                                        }

                                        $('#amountint').val(amount2);
                                        $('#gain_pot_min').val(gain_pot_min);
                                        $('#gain_pot_comb_min').val(gain_pot_comb_min);
                                        $('#gain_pot_max').val(gain_pot_max);
                                        $('#bonus_min').val(bonus_min);
                                        $('#bonus_max').val(bonus_max);
                                        $('#bonus_max_comb').val(bonus_max_comb);
                                        $('#multiplicateur').val(multiplicateur);
                                        $('#cote_min').val(cote_min);
                                        $('#cote_max_com').val(cote_max_com);
                                        $('#cote_max').val(cote_max);


                                        if ($('#h_w_PC_cCoupon_txtImportoDI').length) {
                                            var mise = $('#h_w_PC_cCoupon_txtImportoDI').val();
                                        }
                                        if ($('#hl_w_PC_cCoupon_txtImportoDI').length) {
                                            var mise = $('#hl_w_PC_cCoupon_txtImportoDI').val();
                                        }
                                        if ($('#s_w_PC_cCoupon_txtImportoDI').length) {
                                            var mise = $('#s_w_PC_cCoupon_txtImportoDI').val();
                                        }


                                        var block_c = false;
//                                var amount = parseFloat($(".h_w_PC_mCoupon_txtAm").val().replace(/\s/g, "").replace(",", "."));
//                                console.log(amount);
                                        var amount = 2;
                                        $("#hl_w_PC_cCoupon_pnlMsgIns").hide();
                                        $("#hl_w_PC_cCoupon_pnlMsgInss").hide();
                                        $("#hl_w_PC_cCoupon_pnlMsgInsss").hide();
                                        if (block_c) return false;
                                        else if (isNaN(amount)) {
                                            $("#hl_w_PC_cCoupon_pnlMsgInsss").show();
                                        }
                                        else if (amount < 0.5) {
                                            $("#hl_w_PC_cCoupon_pnlMsgIns").show();
                                        }
                                        else if (amount > 10.00) {
                                            $("#hl_w_PC_cCoupon_pnlMsgInss").show();
                                        }
                                        else if (noendedevent) {
                                            $("#h_w_ctl18_UpdateProgress").show();
                                            $("#submitcoupon").submit();
                                        }
                                    });

                                    $("#h_w_PC_cCoupon_lnkCancella").on('click', function (e) {
                                        $("#h_w_ctl18_UpdateProgress").show();
                                        window.location.replace("coupon_cancel.php");

                                    });


                                });
                            </script>


                            <script language="javascript" type="text/javascript">
                                var numScoRiserva = 0;
                                var jsRiservaLogged = 'False'


                                //Viene chiamata al termine della chiamata asincrona al webservice che restituisce i dati
                                function OnScoRiservaRequestComplete(results) {
                                    if (results != null) {
                                        if (numScoRiserva != results) {
                                            numScoRiserva = results;
                                            document.getElementById('hl_w_PC_ScoRis_btnRefresh').click();
                                        } else {
                                            numScoRiserva = results;
                                        }
                                    }
                                }


                                //CONTROLLING EVENTS IN jQuery
                                $(document).ready(function () {
                                    initializePopup("popupContactDettCloseS", "popupContactSR", "backgroundPopupSR");
                                });

                                function showPopupSR(IDCoupon, IDCouponAsincrono, IDRisultatoSalvataggioCoupon) {
                                    centerPopup("popupContactSR", "backgroundPopupSR");
                                    loadPopup("popupContactSR", "backgroundPopupSR");

                                    if (IDCouponAsincrono != -1 && IDRisultatoSalvataggioCoupon != 0) {
                                        document.getElementById("iframeSR").src = '/Sport/BetDetailAsyncPopup.aspx?IDCoupon=' + IDCouponAsincrono;
                                    } else {
                                        document.getElementById("iframeSR").src = '/Sport/BetDetailPopup.aspx?IDCoupon=' + IDCoupon;
                                    }

                                    /*  if(IDCouponAsincrono != -1){
                                     $('.RiquadroPopRiserva .divTitle H3').html('');
                                     }else{
                                     $('.RiquadroPopRiserva .divTitle H3').html('PARI ACCEPTE AVEC RESERVE');
                                     }*/
                                }


                            </script>




<span id="hl_w_PC_ScoRis_pnlScoRiserva">

    </span>
                            <div id="popupContactSR">
                                <div class="RiquadroPopRiserva">
                                    <div class="TopSX">
                                        <div class="TopDX"></div>
                                    </div>
                                    <div class="Cnt">
                                        <div>

                                            <div class="divTitle"><h3>PARI ACCEPTE AVEC RESERVE</h3><a
                                                    id="popupContactDettCloseS"><img
                                                        src="planetwin365_files/close_black_ico.gif"
                                                        id="hl_w_PC_ScoRis_imgClose"></a></div>
                                            <iframe style=" width:100%" height="420" id="iframeSR" scrolling="auto"
                                                    frameborder="0" border="0" marginwidth="0"
                                                    marginheight="0"></iframe>

                                        </div>
                                    </div>
                                    <div class="BtmSX">
                                        <div class="BtmDX"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="backgroundPopupSR"></div>
                            <input type="submit" name="hl$w$PC$ScoRis$btnRefresh" value=""
                                   id="hl_w_PC_ScoRis_btnRefresh" style="visibility: hidden; display: none;">


                            <script type="text/javascript">
                                var lbBoxfirstload = true;
                                var numEventVis = 0;

                                function checkClosedEvents(events, isRun) {
                                    var IDEvents = new Array();
                                    var IDContent = "content"
                                    var EventCollection = "EventoBanner"

                                    if (isRun != true) {
                                        IDContent = "contentNext"
                                        EventCollection = "ProssimoEventoBanner"
                                    }

                                    $(events).find(EventCollection).each(function () {
                                        IDEvents.push($(this).find("IDEvento").text());
                                    });

                                    $(".LiveBettingBox #" + IDContent + " [id*=lb_]").each(function (index) {
                                        var IDEventoVis = $(this).attr("ID").substring(3)
                                        if ($.inArray(IDEventoVis, IDEvents) == -1) {
                                            $(".LiveBettingBox #" + IDContent + " #lb_" + IDEventoVis).effect('drop', 'slow', function () {
                                                numEventVis--;
                                                $(this).remove();
                                            });
                                        }
                                    });

                                    initGraph()
                                }

                                function initGraph() {
                                    $(".LiveBettingBox [id*=lb_] .sep").removeClass("last")
                                    $(".LiveBettingBox [id*=lb_]").eq(numEventVis - 1).addClass("last")
                                }

                                function loadLiveBettingXML() {
                                    //$(".LiveBettingBox").fadeTo('slow', 0.5);
                                    var srnd = String(Math.random())
                                    srnd = srnd.replace(".", "").replace(",", "");

                                    $.ajax({
                                        type: "GET",
                                        url: "../ControlsSkin/LivebettingWS.aspx?idLang=11&idbook=5&idpal=1&primin=3&Multisport=False&r=" + srnd,
                                        dataType: "xml",
                                        complete: function () {
                                            if (!lbBoxfirstload) {
                                                $(".LiveBettingBox .item").each(function (index) {
                                                    $(this).fadeTo((index + 1) * 500, 0.5).fadeTo(500, 1);
                                                });
                                            }
                                            lbBoxfirstload = false
                                        },
                                        success: function (xml) {
                                            //eventi online
                                            var EventiBanner = $(xml).find("EventiBanner").find("EventoBanner");
                                            var ProssimiEventiBanner = $(xml).find("ProssimiEventiBanner").find("ProssimoEventoBanner");

                                            $(EventiBanner).each(function (indexe) {
                                                //$(this).find("EventoBanner").each(function (indexe) {

                                                var IDSport = $(this).find("IDTipoSport").text();
                                                var statusClass = "";
                                                var strOut = '';
                                                var EventID = $(this).find("IDEvento").text();
                                                var Status = $(this).find("Timer").attr("Codice");
                                                var StatusClass = "run";
                                                var EventName = "<span class='c1'>" + $(this).find("Competitor1").text() + "</span><span class='s'> - </span><span class='c2'>" + $(this).find("Competitor2").text() + "</span>";
                                                var EventNameTooltip = $(this).find("Competitor1").text() + " - " + $(this).find("Competitor2").text()
                                                var PhaseName = $(this).find("Fase").text();

                                                if ($(".LiveBettingBox #content #lb_" + EventID + "[version='" + $(this).attr("Version") + "']").length > 0 && $(".LiveBettingBox #content #lb_" + EventID + "[oddVersion='" + $(this).attr("OddsVersion") + "']").length > 0) {
                                                    return true;
                                                }

                                                switch (Status) {
                                                    case "RUNNING":
                                                        statusClass = "run"
                                                        break;
                                                    case "STOPPED":
                                                        statusClass = "stop"
                                                        break;
                                                    default:
                                                        statusClass = ""
                                                }

                                                strOut += "<div class='item " + statusClass + "' id='lb_" + EventID + "' version='" + $(this).attr("Version") + "' oddVersion='" + $(this).attr("OddsVersion") + "'>";
                                                strOut += "<div class='icon'></div>";
                                                strOut += "<div class='Event'><a title='" + EventNameTooltip + "' href='../Live/LiveDefault.aspx?IDEvento=" + EventID + "'>" + EventName + "</a></div>";
                                                strOut += "<div class='Result'>" + $(this).find("Risultato").text().replace(/ /g, "") + "</div>";
                                                strOut += "<div class='Phase'>" + PhaseName + "</div>";

                                                if (Status == "RUNNING") {
                                                    strOut += "<div class='Timer'>" + $(this).find("Timer").attr("Minuto") + " min</div>";
                                                }

                                                $(this).find("ScommessaBanner").first().each(function () {
                                                    if ($(this).attr("Stato") == "1") {
                                                        strOut += "<div class='Odds'>";
                                                        strOut += "<div class='BetType' title='" + $(this).attr("Nome") + "'>" + $(this).attr("Nome") + "</div>";

                                                        $(this).find("Quota").each(function (index) {
                                                            strOut += "<div class='Odd'><span class='" + $(this).attr("Andamento") + "'>" + $(this).attr("Tipo") + "</span><a href='javascript:AddCoupon(sCPbtn, sCPqt, " + $(this).attr("ID") + ")'>" + $(this).attr("Quota") + "</a></div>";
                                                        });

                                                        strOut += "</div>";
                                                    } else {
                                                        strOut += "<div class='hold'>on-hold</div>"
                                                    }
                                                });


                                                strOut += "<div class='sep'></div></div>";


                                                if ($(".LiveBettingBox #content #lb_" + EventID).length > 0) {
                                                    $(".LiveBettingBox #content #lb_" + EventID).replaceWith(strOut);
                                                    $(".LiveBettingBox #content #lb_" + EventID).show()
                                                    if (Status == "RUNNING") {
                                                        $(".LiveBettingBox #content #lb_" + EventID).effect("bounce", 500);
                                                    }
                                                } else {
                                                    $(strOut).appendTo(".LiveBettingBox #content").effect("slide", indexe * 500);
                                                    numEventVis++;
                                                }

                                                $(".LiveBettingBox #content #lb_" + EventID + " .Odd SPAN").removeClass("new", 4000);
                                                $(".LiveBettingBox #content #lb_" + EventID + " .Odd SPAN").removeClass("up", 4000);
                                                $(".LiveBettingBox #content #lb_" + EventID + " .Odd SPAN").removeClass("down", 4000);

                                                //});
                                            });

                                            //prossimi eventi
                                            $(ProssimiEventiBanner).each(function (indexe) {
                                                // $(this).find("ProssimoEventoBanner").each(function (indexe) {
                                                var IDSport = $(this).find("IDTipoSport").text();
                                                var statusClass = "";
                                                var strOut = '';
                                                var EventID = $(this).find("IDEvento").text();
                                                var EventName = $(this).find("Titolo").text().split("-")
                                                var EventNameTooltip = $(this).find("Titolo").text()

                                                strOut += "<div class='item' id='lb_" + EventID + "'>";
                                                strOut += "<div class='Event' title='" + EventNameTooltip + "'><span class='c1'>" + EventName[0] + "</span><span class='s'>-</span><span class='c2'>" + EventName[1] + "</span></div>";
                                                strOut += "<div class='icon'></div>";

                                                if ($(this).find("DataInizio").length > 0) {
                                                    strOut += "<div class='Start'>" + $(this).find("DataInizio").text() + " " + $(this).find("OraInizio").text() + "</div>";
                                                }

                                                strOut += "<div class='coming'>COMING UP</div>"

                                                strOut += "<div class='sep'></div></div>";

                                                if ($(".LiveBettingBox #contentNext #lb_" + EventID).length > 0) {
                                                    $(".LiveBettingBox #contentNext #lb_" + EventID).replaceWith(strOut);
                                                    $(".LiveBettingBox #contentNext #lb_" + EventID).show()
                                                } else {
                                                    $(strOut).appendTo(".LiveBettingBox #contentNext").effect("slide", indexe * 500);
                                                    numEventVis++
                                                }
                                                //  });
                                            });

                                            checkClosedEvents($(xml).find("EventiBanner"), true)
                                            checkClosedEvents($(xml).find("ProssimiEventiBanner"), false)
                                            initGraph();
                                        },
                                        failure: function (data) {
                                            alert("Problem getting XML");
                                        }
                                    });

                                }

                                $(document).ready(function () {
                                    loadLiveBettingXML();
                                    setInterval(loadLiveBettingXML, 20000);
                                });
                            </script>


                            <script language="javascript" type="text/javascript">
                                function GiocaQuota(idQuota) {

                                    var btn = document.getElementById(sMultiIDQuotaClientID);
                                    var txt = document.getElementById(sCouponQuotaClientID);
                                    var txtImporto = document.getElementById(sCouponImportoClientID);

                                    txtImporto.value = '10,00';
                                    txt.value = idQuota;
                                    btn.click();
                                }

                            </script>
                            <div class="HomeDXTitleCombinate">Combinées:</div>
                            <div class="HomeDXContent">
                                <div class="CombinatePuntata">
                                    Mise:&nbsp;<font class="CombinateImp">10,00 €</font>
                                    <span>Gain</span>
                                </div>
                                <div class="CombinateItem Fav">
                                    <div class="CombinateSco">Favorie</div>
                                    <div class="CombinateQuota">2,72</div>
                                    <div class="CombinateVincita"><a id="hl_w_PC_ctrlCombinate_urlQuotaFavorita"
                                                                     href="javascript:GiocaQuota('3627374500§3622673713§3616590011§'); pulsateCoupon();">27,23</a>
                                    </div>
                                </div>
                                <div class="CombinateItem Thr">
                                    <div class="CombinateSco">Thriller</div>
                                    <div class="CombinateQuota">40,33</div>
                                    <div class="CombinateVincita"><a id="hl_w_PC_ctrlCombinate_urlQuotaThriller"
                                                                     href="javascript:GiocaQuota('3627317400§3626615954§3622673714§'); pulsateCoupon();">403,29</a>
                                    </div>
                                </div>
                                <div class="CombinateItem Cas">
                                    <div class="CombinateSco">Coffre-fort</div>
                                    <div class="CombinateQuota">1,47</div>
                                    <div class="CombinateVincita"><a id="hl_w_PC_ctrlCombinate_urlQuotaCassaforte"
                                                                     href="javascript:GiocaQuota('3622673716§3627249458§3627373576§'); pulsateCoupon();">14,66</a>
                                    </div>
                                </div>

                            </div>


                            <div class="HomeDXTitleOverUnder">OV./UN. du moment</div>
                            <div class="HomeDXContent">

                                <script type="text/javascript">
                                    $(document).ready(function () {
                                        var over = 99;
                                        var under = 1;
                                        ouLoadGraphOU(over, under);
                                    });

                                    function ouLoadGraphOU(percOver, percUnder) {
                                        var hOver = 0
                                        var hUnder = 0

                                        //prendo la massima altezza disponibile per il grafico
                                        var maxHeight = $(".OUofTheDay .chart").height() - 5;

                                        //considero l'altezza minima della label
                                        var minHeightOver = $(".OUofTheDay .ovChart > div").innerHeight();
                                        var minHeightUnder = $(".OUofTheDay .unChart > div").innerHeight();

                                        //calcolo le altezze delle barre del grafico
                                        if (percOver >= percUnder) {
                                            hOver = maxHeight
                                            hUnder = (maxHeight * percUnder) / percOver
                                            if (hUnder < minHeightUnder && hUnder != 0) {
                                                hUnder = minHeightUnder
                                            }

                                        } else {
                                            hUnder = maxHeight
                                            hOver = (maxHeight * percOver) / percUnder
                                            if (hOver < minHeightOver && hOver != 0) {
                                                hOver = minHeightOver
                                            }
                                        }

                                        //imposto l'animazione
                                        $(".OUofTheDay .ovChart").animate({"height": hOver}, 1000);
                                        $(".OUofTheDay .unChart").animate({"height": hUnder}, 1000);

                                        //visualizzo la percentuale
                                        $(".OUofTheDay .ovChart .p1").html(percOver + '%')
                                        $(".OUofTheDay .unChart .p2").html(percUnder + '%')
                                    }
                                </script>


                                <div class="OUofTheDay">
                                    <div class="Match">Hapoel Rishon Lezion - Maccabi Ahi Nazareth</div>
                                    <div class="Date">
                                        <div class="Day">05/01/2018</div>
                                        <div class="Time">14:00</div>
                                    </div>
                                    <div class="TipoQuota">
                                        <div class="tipo1">Over 1.5</div>
                                        <div class="hnd">0,00</div>
                                        <div class="tipo2">Under 1.5</div>
                                    </div>
                                    <div class="chart">
                                        <div class="ovChart" style="height: 95px;">
                                            <div>Signe préféré par les usagers au
                                                <div class="p1">99%</div>
                                            </div>
                                        </div>
                                        <div class="unChart" style="height: 46px;">
                                            <div>Signe préféré par les usagers au
                                                <div class="p2">1%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Odds">
                                        <div class="odds1"><a
                                                href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3623975559)"
                                                id="hl_w_PC_ctl07_lnkOver">1,23</a></div>
                                        <div class="odds2"><a
                                                href="javascript:AddCoupon(sCouponButtonClientID,sCouponQuotaClientID,3623975560)"
                                                id="hl_w_PC_ctl07_lnkUnder">3,40</a></div>
                                    </div>

                                </div>


                            </div>


                            <script language="javascript" type="text/javascript">
                                function showPopupLastWinnings(IDCoupon) {
                                    centerPopup("popupLW", "backgroundPopupLW");
                                    loadPopup("popupLW", "backgroundPopupLW");
                                    document.getElementById("iframeLW").src = '/Sport/LastWinningsDetailsPopUp.aspx?IDCoupon=' + IDCoupon;
                                }

                                //CONTROLLING EVENTS IN jQuery
                                $(document).ready(function () {
                                    initializePopup("popupLWClose", "popupLW", "backgroundPopupLW");
                                });


                            </script>

                            <div id="hl_w_PC_ctrlLW_pnlUpdate">

                                <div class="HomeDXTitleLastWin">Derniers gains</div>
                                <div id="LWMainItems" class="HomeDXContent">


                                    <div class="LWItem">
                                        <div class="LWUser"><a title="Voir détail pari" href="javascript: void(0)"
                                                               onclick="showPopupLastWinnings(642835816);">C. A.</a>
                                        </div>
                                        <div class="LWPlay"><span class="LWPlayTxt">Joué:</span>475,00 €</div>
                                        <div class="LWData"><a title="Voir détail pari" href="javascript: void(0)"
                                                               onclick="showPopupLastWinnings(642835816);">05/01/2018</a>
                                        </div>
                                        <div class="LWImporto"><a title="Voir détail pari" href="javascript: void(0)"
                                                                  onclick="showPopupLastWinnings(642835816);"><span
                                                    class="LWImportoTxt">gagné:</span>1&nbsp;148,27 €</a></div>
                                    </div>

                                    <div class="LWAItem">
                                        <div class="LWUser"><a title="Voir détail pari" href="javascript: void(0)"
                                                               onclick="showPopupLastWinnings(642826449);">M. G.</a>
                                        </div>
                                        <div class="LWPlay"><span class="LWPlayTxt">Joué:</span>1&nbsp;000,00 €</div>
                                        <div class="LWData"><a title="Voir détail pari" href="javascript: void(0)"
                                                               onclick="showPopupLastWinnings(642826449);">06/01/2018</a>
                                        </div>
                                        <div class="LWImporto"><a title="Voir détail pari" href="javascript: void(0)"
                                                                  onclick="showPopupLastWinnings(642826449);"><span
                                                    class="LWImportoTxt">gagné:</span>1&nbsp;734,00 €</a></div>
                                    </div>

                                    <div class="LWItem">
                                        <div class="LWUser"><a title="Voir détail pari" href="javascript: void(0)"
                                                               onclick="showPopupLastWinnings(642823707);">C. A.</a>
                                        </div>
                                        <div class="LWPlay"><span class="LWPlayTxt">Joué:</span>2&nbsp;311,00 €</div>
                                        <div class="LWData"><a title="Voir détail pari" href="javascript: void(0)"
                                                               onclick="showPopupLastWinnings(642823707);">05/01/2018</a>
                                        </div>
                                        <div class="LWImporto"><a title="Voir détail pari" href="javascript: void(0)"
                                                                  onclick="showPopupLastWinnings(642823707);"><span
                                                    class="LWImportoTxt">gagné:</span>2&nbsp;475,08 €</a></div>
                                    </div>

                                    <div class="LWAItem">
                                        <div class="LWUser"><a title="Voir détail pari" href="javascript: void(0)"
                                                               onclick="showPopupLastWinnings(642821319);">C. A.</a>
                                        </div>
                                        <div class="LWPlay"><span class="LWPlayTxt">Joué:</span>2&nbsp;041,00 €</div>
                                        <div class="LWData"><a title="Voir détail pari" href="javascript: void(0)"
                                                               onclick="showPopupLastWinnings(642821319);">05/01/2018</a>
                                        </div>
                                        <div class="LWImporto"><a title="Voir détail pari" href="javascript: void(0)"
                                                                  onclick="showPopupLastWinnings(642821319);"><span
                                                    class="LWImportoTxt">gagné:</span>2&nbsp;310,82 €</a></div>
                                    </div>

                                    <div class="LWItem">
                                        <div class="LWUser"><a title="Voir détail pari" href="javascript: void(0)"
                                                               onclick="showPopupLastWinnings(642816033);">E. T.</a>
                                        </div>
                                        <div class="LWPlay"><span class="LWPlayTxt">Joué:</span>300,00 €</div>
                                        <div class="LWData"><a title="Voir détail pari" href="javascript: void(0)"
                                                               onclick="showPopupLastWinnings(642816033);">05/01/2018</a>
                                        </div>
                                        <div class="LWImporto"><a title="Voir détail pari" href="javascript: void(0)"
                                                                  onclick="showPopupLastWinnings(642816033);"><span
                                                    class="LWImportoTxt">gagné:</span>862,92 €</a></div>
                                    </div>


                                </div>

                            </div>

                            <div id="popupLW">
                                <div class="RiquadroPopRiserva">
                                    <div class="TopSX">
                                        <div class="TopDX"></div>
                                    </div>
                                    <div class="Cnt">
                                        <div id="hl_w_PC_ctrlLW_pnl">

                                            <div class="divTitle"><h3>Derniers gains</h3><a id="popupLWClose"><img
                                                        src="planetwin365_files/close_black_ico.gif"
                                                        id="hl_w_PC_ctrlLW_imgClose"></a></div>
                                            <div class="img"></div>
                                            <iframe style=" width:100%" height="452" id="iframeLW" scrolling="auto"
                                                    frameborder="0" border="0" marginwidth="0" marginheight="0"
                                                    allowtransparency="true"></iframe>

                                        </div>
                                    </div>
                                    <div class="BtmSX">
                                        <div class="BtmDX"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="backgroundPopupLW"></div>


                            <div class="HomeDXTitleLastRes">
                                Derniers résultats Football

                            </div>


                            <div class="HomeDXContent">

                                <div class="LRItem">
                                    <div class="LRSubEvent">
                                        <a href="http://ww3.365planetwinall.net/Sport/results.aspx"
                                           id="hl_w_PC_LastResults1_repResults_ctl00_A1"><span
                                                id="hl_w_PC_LastResults1_repResults_ctl00_lblSottoEvento"
                                                title="Bursaspor - Eskisehirspor">Bursaspor - Eskisehirspor</span></a>


                                    </div>
                                    <div class="LRData"><span><span id="hl_w_PC_LastResults1_repResults_ctl00_lblData">24/12/2015</span></span>
                                        <span class="LROra"><span id="hl_w_PC_LastResults1_repResults_ctl00_lblOra"
                                                                  class="GridNextEventOra">19:00</span></span></div>
                                    <div class="LRResult"><span
                                            id="hl_w_PC_LastResults1_repResults_ctl00_labelRisultato1" title="Rés.Fin.">4 - 1</span><span
                                            id="hl_w_PC_LastResults1_repResults_ctl00_labelRisultato2"></span><span
                                            id="hl_w_PC_LastResults1_repResults_ctl00_labelRisultato3"></span></div>
                                    <div class="LROdds">

                                        <div class="LROdd sel n0"><span class="LROddType">1</span>1,50</div>

                                        <div class="LROdd  n1"><span class="LROddType">X</span>4,10</div>

                                        <div class="LROdd  n2"><span class="LROddType">2</span>5,90</div>

                                    </div>
                                </div>

                                <div class="LRAItem">
                                    <div class="LRSubEvent">
                                        <a href="http://ww3.365planetwinall.net/Sport/results.aspx"
                                           id="hl_w_PC_LastResults1_repResults_ctl01_A1"><span
                                                id="hl_w_PC_LastResults1_repResults_ctl01_lblSottoEvento"
                                                title="Adanaspor - Nazilli Belediyespor">Adanaspor - Nazilli Belediyesp...</span></a>


                                    </div>
                                    <div class="LRData"><span><span id="hl_w_PC_LastResults1_repResults_ctl01_lblData">24/12/2015</span></span>
                                        <span class="LROra"><span id="hl_w_PC_LastResults1_repResults_ctl01_lblOra"
                                                                  class="GridNextEventOra">17:00</span></span></div>
                                    <div class="LRResult"><span
                                            id="hl_w_PC_LastResults1_repResults_ctl01_labelRisultato1" title="Rés.Fin.">2 - 1</span><span
                                            id="hl_w_PC_LastResults1_repResults_ctl01_labelRisultato2"></span><span
                                            id="hl_w_PC_LastResults1_repResults_ctl01_labelRisultato3"></span></div>
                                    <div class="LROdds">

                                        <div class="LROdd sel n0"><span class="LROddType">1</span>1,70</div>

                                        <div class="LROdd  n1"><span class="LROddType">X</span>3,55</div>

                                        <div class="LROdd  n2"><span class="LROddType">2</span>4,76</div>

                                    </div>
                                </div>

                                <div class="LRItem">
                                    <div class="LRSubEvent">
                                        <a href="http://ww3.365planetwinall.net/Sport/results.aspx"
                                           id="hl_w_PC_LastResults1_repResults_ctl02_A1"><span
                                                id="hl_w_PC_LastResults1_repResults_ctl02_lblSottoEvento"
                                                title="Giresunspor - Tuzlaspor">Giresunspor - Tuzlaspor</span></a>


                                    </div>
                                    <div class="LRData"><span><span id="hl_w_PC_LastResults1_repResults_ctl02_lblData">24/12/2015</span></span>
                                        <span class="LROra"><span id="hl_w_PC_LastResults1_repResults_ctl02_lblOra"
                                                                  class="GridNextEventOra">15:00</span></span></div>
                                    <div class="LRResult"><span
                                            id="hl_w_PC_LastResults1_repResults_ctl02_labelRisultato1" title="Rés.Fin.">0 - 1</span><span
                                            id="hl_w_PC_LastResults1_repResults_ctl02_labelRisultato2"></span><span
                                            id="hl_w_PC_LastResults1_repResults_ctl02_labelRisultato3"></span></div>
                                    <div class="LROdds">

                                        <div class="LROdd  n0"><span class="LROddType">1</span>1,81</div>

                                        <div class="LROdd  n1"><span class="LROddType">X</span>3,40</div>

                                        <div class="LROdd sel n2"><span class="LROddType">2</span>4,27</div>

                                    </div>
                                </div>

                                <div class="LRAItem">
                                    <div class="LRSubEvent">
                                        <a href="http://ww3.365planetwinall.net/Sport/results.aspx"
                                           id="hl_w_PC_LastResults1_repResults_ctl03_A1"><span
                                                id="hl_w_PC_LastResults1_repResults_ctl03_lblSottoEvento"
                                                title="Al Nasr Riyadh - Al Hilal Riyadh">Al Nasr Riyadh - Al Hilal Riya...</span></a>


                                    </div>
                                    <div class="LRData"><span><span id="hl_w_PC_LastResults1_repResults_ctl03_lblData">24/12/2015</span></span>
                                        <span class="LROra"><span id="hl_w_PC_LastResults1_repResults_ctl03_lblOra"
                                                                  class="GridNextEventOra">18:00</span></span></div>
                                    <div class="LRResult"><span
                                            id="hl_w_PC_LastResults1_repResults_ctl03_labelRisultato1" title="Rés.Fin.">1 - 2</span><span
                                            id="hl_w_PC_LastResults1_repResults_ctl03_labelRisultato2"></span><span
                                            id="hl_w_PC_LastResults1_repResults_ctl03_labelRisultato3"></span></div>
                                    <div class="LROdds">

                                        <div class="LROdd  n0"><span class="LROddType">1</span>3,26</div>

                                        <div class="LROdd  n1"><span class="LROddType">X</span>3,40</div>

                                        <div class="LROdd sel n2"><span class="LROddType">2</span>2,00</div>

                                    </div>
                                </div>

                                <div class="LRItem">
                                    <div class="LRSubEvent">
                                        <a href="http://ww3.365planetwinall.net/Sport/results.aspx"
                                           id="hl_w_PC_LastResults1_repResults_ctl04_A1"><span
                                                id="hl_w_PC_LastResults1_repResults_ctl04_lblSottoEvento"
                                                title="Al Ahli Jeddah - Al Qadisiya">Al Ahli Jeddah - Al Qadisiya</span></a>


                                    </div>
                                    <div class="LRData"><span><span id="hl_w_PC_LastResults1_repResults_ctl04_lblData">24/12/2015</span></span>
                                        <span class="LROra"><span id="hl_w_PC_LastResults1_repResults_ctl04_lblOra"
                                                                  class="GridNextEventOra">18:00</span></span></div>
                                    <div class="LRResult"><span
                                            id="hl_w_PC_LastResults1_repResults_ctl04_labelRisultato1" title="Rés.Fin.">2 - 0</span><span
                                            id="hl_w_PC_LastResults1_repResults_ctl04_labelRisultato2"></span><span
                                            id="hl_w_PC_LastResults1_repResults_ctl04_labelRisultato3"></span></div>
                                    <div class="LROdds">

                                        <div class="LROdd sel n0"><span class="LROddType">1</span>1,15</div>

                                        <div class="LROdd  n1"><span class="LROddType">X</span>6,20</div>

                                        <div class="LROdd  n2"><span class="LROddType">2</span>11,10</div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <div class="spacer30"></div>
        </div>
    </div>
</div>
<!--FOOTER-->
<div id="divFooter">
    <div class="spacer13"></div>
    <div class="Main">
        <div class="Promo">
            <div style="margin: 0px; padding: 0px; width: 165px; height: 72px; position: relative;"><img border="0"
                                                                                                         height="95"
                                                                                                         src="planetwin365_files/dilivio_new.png"
                                                                                                         style="left: -228px; top: -23px; position: absolute;"
                                                                                                         width="393">
            </div>
        </div>
        <div class="Txt">
            <div class="Terms">
                <ul>
                    <li><a title=""
                           onclick="javascript:miniSitePopup(&#39;&amp;sid=166&#39;)">Termes
                            et Conditions</a></li>
                    <li><a title=""
                           onclick="javascript:miniSitePopup(&#39;&amp;sid=284&#39;)">Conditions
                            d'Utilisation</a></li>
                    <li><a title=""
                           onclick="javascript:miniSitePopup(&#39;3&#39;)">Règlement</a>
                    </li>
                    <li><a title=""
                           onclick="javascript:miniSitePopup(&#39;&amp;sid=163&#39;)">Jeu
                            Responsable</a></li>
                    <li><a title=""
                           onclick="javascript:miniSitePopup(&#39;&amp;sid=164&#39;)">Privacy</a>
                    </li>
                    <li><a title="" href="http://info.365planetwinall.com/index.php?lang=3" target="_blank">Qui nous
                            sommes</a></li>
                    <li><a title="" href="#"
                           target="_blank"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    //<![CDATA[
    var Page_ValidationSummaries = new Array(document.getElementById("hl_w_PC_HotWin1_vgHotWin"));
    var Page_Validators = new Array(document.getElementById("hl_w_PC_HotWin1_checkQuotaDaRaggiungere"), document.getElementById("hl_w_PC_HotWin1_reqVincita"), document.getElementById("hl_w_PC_HotWin1_cmpVincita"), document.getElementById("hl_w_PC_HotWin1_reqGiocata"), document.getElementById("hl_w_PC_HotWin1_cmpGiocata"));
    //]]>
</script>

<script type="text/javascript">
    //<![CDATA[
    var hl_w_PC_HotWin1_vgHotWin = document.all ? document.all["hl_w_PC_HotWin1_vgHotWin"] : document.getElementById("hl_w_PC_HotWin1_vgHotWin");
    hl_w_PC_HotWin1_vgHotWin.showmessagebox = "True";
    hl_w_PC_HotWin1_vgHotWin.showsummary = "False";
    hl_w_PC_HotWin1_vgHotWin.validationGroup = "vHotWin";
    var hl_w_PC_HotWin1_checkQuotaDaRaggiungere = document.all ? document.all["hl_w_PC_HotWin1_checkQuotaDaRaggiungere"] : document.getElementById("hl_w_PC_HotWin1_checkQuotaDaRaggiungere");
    hl_w_PC_HotWin1_checkQuotaDaRaggiungere.controltovalidate = "hl_w_PC_HotWin1_txtVincita";
    hl_w_PC_HotWin1_checkQuotaDaRaggiungere.errormessage = "Le multiplieur peut être seulement entre 10 et 20,000.";
    hl_w_PC_HotWin1_checkQuotaDaRaggiungere.display = "Dynamic";
    hl_w_PC_HotWin1_checkQuotaDaRaggiungere.validationGroup = "vHotWin";
    hl_w_PC_HotWin1_checkQuotaDaRaggiungere.evaluationfunction = "CustomValidatorEvaluateIsValid";
    hl_w_PC_HotWin1_checkQuotaDaRaggiungere.clientvalidationfunction = "checkQuotaDaRaggiungere";
    var hl_w_PC_HotWin1_reqVincita = document.all ? document.all["hl_w_PC_HotWin1_reqVincita"] : document.getElementById("hl_w_PC_HotWin1_reqVincita");
    hl_w_PC_HotWin1_reqVincita.controltovalidate = "hl_w_PC_HotWin1_txtVincita";
    hl_w_PC_HotWin1_reqVincita.errormessage = "Erreur dans l\'insertion du gain!";
    hl_w_PC_HotWin1_reqVincita.display = "Dynamic";
    hl_w_PC_HotWin1_reqVincita.validationGroup = "vHotWin";
    hl_w_PC_HotWin1_reqVincita.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
    hl_w_PC_HotWin1_reqVincita.initialvalue = "";
    var hl_w_PC_HotWin1_cmpVincita = document.all ? document.all["hl_w_PC_HotWin1_cmpVincita"] : document.getElementById("hl_w_PC_HotWin1_cmpVincita");
    hl_w_PC_HotWin1_cmpVincita.controltovalidate = "hl_w_PC_HotWin1_txtVincita";
    hl_w_PC_HotWin1_cmpVincita.errormessage = "Erreur dans l\'insertion du gain!";
    hl_w_PC_HotWin1_cmpVincita.display = "Dynamic";
    hl_w_PC_HotWin1_cmpVincita.validationGroup = "vHotWin";
    hl_w_PC_HotWin1_cmpVincita.type = "Double";
    hl_w_PC_HotWin1_cmpVincita.decimalchar = ",";
    hl_w_PC_HotWin1_cmpVincita.evaluationfunction = "CompareValidatorEvaluateIsValid";
    hl_w_PC_HotWin1_cmpVincita.operator = "DataTypeCheck";
    var hl_w_PC_HotWin1_reqGiocata = document.all ? document.all["hl_w_PC_HotWin1_reqGiocata"] : document.getElementById("hl_w_PC_HotWin1_reqGiocata");
    hl_w_PC_HotWin1_reqGiocata.controltovalidate = "hl_w_PC_HotWin1_txtGiocata";
    hl_w_PC_HotWin1_reqGiocata.errormessage = "Erreur dans l\'insertion du pari! ";
    hl_w_PC_HotWin1_reqGiocata.display = "Dynamic";
    hl_w_PC_HotWin1_reqGiocata.validationGroup = "vHotWin";
    hl_w_PC_HotWin1_reqGiocata.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
    hl_w_PC_HotWin1_reqGiocata.initialvalue = "";
    var hl_w_PC_HotWin1_cmpGiocata = document.all ? document.all["hl_w_PC_HotWin1_cmpGiocata"] : document.getElementById("hl_w_PC_HotWin1_cmpGiocata");
    hl_w_PC_HotWin1_cmpGiocata.controltovalidate = "hl_w_PC_HotWin1_txtGiocata";
    hl_w_PC_HotWin1_cmpGiocata.errormessage = "Erreur dans l\'insertion du pari! ";
    hl_w_PC_HotWin1_cmpGiocata.display = "Dynamic";
    hl_w_PC_HotWin1_cmpGiocata.validationGroup = "vHotWin";
    hl_w_PC_HotWin1_cmpGiocata.type = "Double";
    hl_w_PC_HotWin1_cmpGiocata.decimalchar = ",";
    hl_w_PC_HotWin1_cmpGiocata.evaluationfunction = "CompareValidatorEvaluateIsValid";
    hl_w_PC_HotWin1_cmpGiocata.operator = "DataTypeCheck";
    //]]>
</script>


<script type="text/javascript">
    //<![CDATA[
    checkLocation();
    $.event.trigger('PreferitiChangedElement');
    RefreshPreferitiSelection();
    $.event.trigger('CouponRefreshed');
    $(document).ready(function () {
        $.event.trigger('CouponChanged');
    });
    document.getElementById('hl_w_PC_HotWin1_vgHotWin').dispose = function () {
        Array.remove(Page_ValidationSummaries, document.getElementById('hl_w_PC_HotWin1_vgHotWin'));
    }

    var Page_ValidationActive = false;
    if (typeof(ValidatorOnLoad) == "function") {
        ValidatorOnLoad();
    }

    function ValidatorOnSubmit() {
        if (Page_ValidationActive) {
            return ValidatorCommonOnSubmit();
        }
        else {
            return true;
        }
    }
    Sys.Application.initialize();
    Sys.Application.add_init(function () {
        $create(Sys.UI._UpdateProgress, {
            "associatedUpdatePanelId": null,
            "displayAfter": 100,
            "dynamicLayout": true
        }, null, null, $get("hl_w_ctl18_UpdateProgress"));
    });

    document.getElementById('hl_w_PC_HotWin1_checkQuotaDaRaggiungere').dispose = function () {
        Array.remove(Page_Validators, document.getElementById('hl_w_PC_HotWin1_checkQuotaDaRaggiungere'));
    }

    document.getElementById('hl_w_PC_HotWin1_reqVincita').dispose = function () {
        Array.remove(Page_Validators, document.getElementById('hl_w_PC_HotWin1_reqVincita'));
    }

    document.getElementById('hl_w_PC_HotWin1_cmpVincita').dispose = function () {
        Array.remove(Page_Validators, document.getElementById('hl_w_PC_HotWin1_cmpVincita'));
    }

    document.getElementById('hl_w_PC_HotWin1_reqGiocata').dispose = function () {
        Array.remove(Page_Validators, document.getElementById('hl_w_PC_HotWin1_reqGiocata'));
    }

    document.getElementById('hl_w_PC_HotWin1_cmpGiocata').dispose = function () {
        Array.remove(Page_Validators, document.getElementById('hl_w_PC_HotWin1_cmpGiocata'));
    }
    Sys.Application.add_init(function () {
        $create(Sys.UI._Timer, {
            "enabled": false,
            "interval": 60000,
            "uniqueID": "hl$w$PC$ctl05$tmrUpdateLive"
        }, null, null, $get("hl_w_PC_ctl05_tmrUpdateLive"));
    });
    //]]>
</script>
</form>

<script language="javascript" type="text/javascript">
    //Numero massimo di raggruppamenti, usato nel coupon.js
    var maxNumRaggruppamenti = 25.000;

    //ClientID degli oggetti usati in coupon.js
    var sHidModificatoQuote = 'h_w_PC_cCoupon_hidModificatoQuote';
    var sHidAttesa = 'h_w_PC_cCoupon_hidAttesa';
    var sHidCouponAsincrono = 'h_w_PC_cCoupon_hidCouponAsincrono'
    var sHidRiserva = 'h_w_PC_cCoupon_hidRiserva';
    var sHidIDQuote = 'h_w_PC_cCoupon_hidIDQuote';
    var sHidStatoCoupon = 'h_w_PC_cCoupon_hidStatoCoupon';
    var sLnkConferma = 'h_w_PC_cCoupon_lnkConferma';
    var sBtnFakeAvanti = 'h_w_PC_cCoupon_btnFakeAvanti'
    var sBtnFakeCancella = 'h_w_PC_cCoupon_btnFakeCancella'
    var sBtnScoAncora = 'h_w_PC_cCoupon_btnScoAncora';
    var sBtnStampaAnagrafica = 'h_w_PC_cCoupon_btnStampaAnagrafica';
    var sCboUtente = 'h_w_PC_cCoupon_cboUtente';
    var sTxtUtente = 'h_w_PC_cCoupon_txtUtente';
    var sTxtCouponCode = 'h_w_PC_cCoupon_txtCouponCodiceAnonimo'
    var sHidTipoCoupon = 'h_w_PC_cCoupon_hidTipoCoupon';
    var sHidQuotaTotale = 'h_w_PC_cCoupon_hidQuotaTotale';
    var sHidQuotaMinDI = 'h_w_PC_cCoupon_hidQuotaTotaleDIMin';
    var sHidIDCoupon = 'h_w_PC_cCoupon_hidIDCoupon'
    var sTxtImporto = 'h_w_PC_cCoupon_txtImporto';
    var sTxtImportoSis = 'h_w_PC_cCoupon_txtImportoSis';
    var sTxtImportoDI = 'h_w_PC_cCoupon_txtImportoDI';
    var sTxtTotaleDIValuta = 'h_w_PC_cCoupon_txtTotaleDIValuta';
    var sLblOnlySaldo = 'h_w_PC_cCoupon_lblOnlySaldo';
    var sLblSaldo = 'h_w_PC_cCoupon_lblSaldo';
    var sLblRicAutoSaldo = 'h_w_PC_cCoupon_lblRicAutoSaldo';
    var sAsyncQBButtonAddClientID = 'h_w_PC_cCoupon_btnAddCouponQB';
    var sAsyncQBTextClientID = 'h_w_PC_cCoupon_txtQB';
    var sTxtRicarica = 'h_w_PC_cCoupon_txtRicarica';
    var sChkRicarica = 'h_w_PC_cCoupon_chkRicAuto'
    var sCouponButtonClientID = 'h_w_PC_cCoupon_btnAddCoupon';
    var sMultiIDQuotaClientID = 'h_w_PC_cCoupon_btnAddMultiIDQuota';
    var sCouponQuotaClientID = 'h_w_PC_cCoupon_txtIDQuota';
    var sCPqt = sCouponQuotaClientID;
    var sCPbtn = sCouponButtonClientID;
    var sCouponImportoClientID = 'h_w_PC_cCoupon_txtAddImporto';
    var sTxtTotaleDI = 'h_w_PC_cCoupon_txtTotaleDI';
    var sHidBonusNumScommesse = 'h_w_PC_cCoupon_hidBonusNumScommesse';
    var sHidBonusQuotaMinimaAttivo = 'h_w_PC_cCoupon_hidBonusQuotaMinimaAttivo';
    var sHidBonusRaggruppamentoMinimo = 'h_w_PC_cCoupon_hidBonusRaggruppamentoMinimo'
    var sHidNumItemCoupon = 'h_w_PC_cCoupon_hidNumItemCoupon'
    var sCouponPrecompilatoButtonClientID = 'h_w_PC_cCoupon_btnAddCouponPrecompilato';
    var sCouponPrecompilatoIDClientID = 'h_w_PC_cCoupon_txtIDCouponPrecompilato';
    var sCouponPrecompilatoIDClientImporto = 'h_w_PC_cCoupon_txtImportoCouponPrecompilato';
    var sDivRicMan = 'h_w_PC_cCoupon_divRicMan';
    var sDivRicAuto = 'h_w_PC_cCoupon_divRicAuto';
    var sTxtImportoValuta = 'h_w_PC_cCoupon_txtImportoValuta';
    var sTxtImportoCassaDI = 'h_w_PC_cCoupon_txtImportoDIValuta';
    var sDdlValuta = 'h_w_PC_cCoupon_ddlValuta';
    var sDdlValutaDI = 'h_w_PC_cCoupon_ddlValutaDI';
    var sDdlValutaSis = 'h_w_PC_cCoupon_ddlValutaSis';
    var sLblImportoDICombinazioni = 'h_w_PC_cCoupon_lblImportoDICombinazioni'
    var sImgOpen = '//static.planetwin365.com/App_Themes/PlanetWin365/images/couponbtn_open.png'
    var sImgClose = '//static.planetwin365.com/App_Themes/PlanetWin365/images/couponbtn_close.png'
    var sTooltipSblocca = 'Débloquer Coupon '
    var sTooltipBlocca = 'Bloquer Coupon'
    var sCmbSpecials = ''
    var sLnkBlocca = 'h_w_PC_cCoupon_lnkBlocca'
    var sUrlPrintCoupon = '/print_coupon.php?IDCoupon='
    var sBtnRefreshAttesa = 'h_w_PC_cCoupon_btnRefreshAttesa'
    var sBtnRefreshAsincrono = 'h_w_PC_cCoupon_btnRefreshAsincrono'
    var sHidPrintAsincrono = 'h_w_PC_cCoupon_hidPrintAsincronoDisabled'
    var sHidSottoEventName = 'h_w_PC_cCoupon_txtSottoEventName'
    var sHidQuota = 'h_w_PC_cCoupon_txtQuota'
    var sHidCodPubblicazione = 'h_w_PC_cCoupon_txtCodPubblicazione'
    var sHidEventName = 'h_w_PC_cCoupon_txtEventName'
    var sHidIDEvento = 'h_w_PC_cCoupon_txtIDEvento'
    var sHidIDSottoEvento = 'h_w_PC_cCoupon_txtIDSottoEvento'
    var sHidGiocabilita = 'h_w_PC_cCoupon_txtGiocabilita'
    var sHidTipoQuota = 'h_w_PC_cCoupon_txtTipoQuota'
    var sHidIDTipoEvento = 'h_w_PC_cCoupon_txtIDTipoEvento'
    var sHidIDTipoQuota = 'h_w_PC_cCoupon_txtIDTipoQuota'
    var sHidAddQuota = 'h_w_PC_cCoupon_btnAddQuota'
    var couponQuote = [];
    var countdownTime = '8'

    var loginPopup;
    var sTxtGiocaSuTutte = 'h_w_PC_cCoupon_txtGiocaSuTutte'

    Sys.WebForms.PageRequestManager.getInstance().add_endRequest(CouponEndRequestHandler);
    Sys.WebForms.PageRequestManager.getInstance().add_pageLoaded(selezionaQuote);

    /************COUPON DRAGGABILE E RICHIUDIBILE SCROLLABILE **********************/
    /****************************************************************************/
    var numItemVis = 0;
    var numItemVisConf = 0;
    var varResize = 0;
    var numItemOrig = 0;
    /****************************************************************************/
    /************ FINE COUPON DRAGGABILE E RICHIUDIBILE SCROLLABILE *****************/

    var heightItems = 0
    var heightItemsMax = 0
    var couponExpanded = 0
    var tooltipExpanded = 0

    $(document).ready(function () {
        //Aggiungo lo script per il sistema importo cassa
        importoCassa();

        $(".CouponUserData .dropdown").mouseover(function () {
            $(this).addClass("Expanded");
        })
        $(".CouponUserData .dropdown").change(function () {
                $(this).removeClass("Expanded");
            })
            .blur(function () {
                $(this).removeClass("Expanded");
            });
        replaceSepTxt();

        //Script per visualizzare solo N quote inserite
        //tramite scrollbar o pulsanti espandi/collassa

        SwitchSelectUnselect();
    });

    //Script per visualizzare la tooltuip con il cambio
    function showCambio() {
        $(".spanCambio").attr("title", "1 € = " + arrotonda(getCambio(), 4).toString().replace(".", sepDec) + getSimboloValSel());
    }
</script>


<?php if (isset($_SESSION['coupon_html_prefix']) && $_SESSION['coupon_html_prefix'] == "s_w_PC") { ?>
    <script language="javascript" type="text/javascript">
        //Numero massimo di raggruppamenti, usato nel coupon.js
        var maxNumRaggruppamenti = 25.000;

        //ClientID degli oggetti usati in coupon.js
        var sHidModificatoQuote = 's_w_PC_cCoupon_hidModificatoQuote';
        var sHidAttesa = 's_w_PC_cCoupon_hidAttesa';
        var sHidCouponAsincrono = 's_w_PC_cCoupon_hidCouponAsincrono'
        var sHidRiserva = 's_w_PC_cCoupon_hidRiserva';
        var sHidIDQuote = 's_w_PC_cCoupon_hidIDQuote';
        var sHidStatoCoupon = 's_w_PC_cCoupon_hidStatoCoupon';
        var sLnkConferma = 's_w_PC_cCoupon_lnkConferma';
        var sBtnFakeAvanti = 's_w_PC_cCoupon_btnFakeAvanti'
        var sBtnFakeCancella = 's_w_PC_cCoupon_btnFakeCancella'
        var sBtnScoAncora = 's_w_PC_cCoupon_btnScoAncora';
        var sBtnStampaAnagrafica = 's_w_PC_cCoupon_btnStampaAnagrafica';
        var sCboUtente = 's_w_PC_cCoupon_cboUtente';
        var sTxtUtente = 's_w_PC_cCoupon_txtUtente';
        var sTxtCouponCode = 's_w_PC_cCoupon_txtCouponCodiceAnonimo'
        var sHidTipoCoupon = 's_w_PC_cCoupon_hidTipoCoupon';
        var sHidQuotaTotale = 's_w_PC_cCoupon_hidQuotaTotale';
        var sHidQuotaMinDI = 's_w_PC_cCoupon_hidQuotaTotaleDIMin';
        var sHidIDCoupon = 's_w_PC_cCoupon_hidIDCoupon'
        var sTxtImporto = 's_w_PC_cCoupon_txtImporto';
        var sTxtImportoSis = 's_w_PC_cCoupon_txtImportoSis';
        var sTxtImportoDI = 's_w_PC_cCoupon_txtImportoDI';
        var sTxtTotaleDIValuta = 's_w_PC_cCoupon_txtTotaleDIValuta';
        var sLblOnlySaldo = 's_w_PC_cCoupon_lblOnlySaldo';
        var sLblSaldo = 's_w_PC_cCoupon_lblSaldo';
        var sLblRicAutoSaldo = 's_w_PC_cCoupon_lblRicAutoSaldo';
        var sAsyncQBButtonAddClientID = 's_w_PC_cCoupon_btnAddCouponQB';
        var sAsyncQBTextClientID = 's_w_PC_cCoupon_txtQB';
        var sTxtRicarica = 's_w_PC_cCoupon_txtRicarica';
        var sChkRicarica = 's_w_PC_cCoupon_chkRicAuto'
        var sCouponButtonClientID = 's_w_PC_cCoupon_btnAddCoupon';
        var sMultiIDQuotaClientID = 's_w_PC_cCoupon_btnAddMultiIDQuota';
        var sCouponQuotaClientID = 's_w_PC_cCoupon_txtIDQuota';
        var sCPqt = sCouponQuotaClientID;
        var sCPbtn = sCouponButtonClientID;
        var sCouponImportoClientID = 's_w_PC_cCoupon_txtAddImporto';
        var sTxtTotaleDI = 's_w_PC_cCoupon_txtTotaleDI';
        var sHidBonusNumScommesse = 's_w_PC_cCoupon_hidBonusNumScommesse';
        var sHidBonusQuotaMinimaAttivo = 's_w_PC_cCoupon_hidBonusQuotaMinimaAttivo';
        var sHidBonusRaggruppamentoMinimo = 's_w_PC_cCoupon_hidBonusRaggruppamentoMinimo'
        var sHidNumItemCoupon = 's_w_PC_cCoupon_hidNumItemCoupon'
        var sCouponPrecompilatoButtonClientID = 's_w_PC_cCoupon_btnAddCouponPrecompilato';
        var sCouponPrecompilatoIDClientID = 's_w_PC_cCoupon_txtIDCouponPrecompilato';
        var sCouponPrecompilatoIDClientImporto = 's_w_PC_cCoupon_txtImportoCouponPrecompilato';
        var sDivRicMan = 's_w_PC_cCoupon_divRicMan';
        var sDivRicAuto = 's_w_PC_cCoupon_divRicAuto';
        var sTxtImportoValuta = 's_w_PC_cCoupon_txtImportoValuta';
        var sTxtImportoCassaDI = 's_w_PC_cCoupon_txtImportoDIValuta';
        var sDdlValuta = 's_w_PC_cCoupon_ddlValuta';
        var sDdlValutaDI = 's_w_PC_cCoupon_ddlValutaDI';
        var sDdlValutaSis = 's_w_PC_cCoupon_ddlValutaSis';
        var sLblImportoDICombinazioni = 's_w_PC_cCoupon_lblImportoDICombinazioni'
        var sImgOpen = '//static.planetwin365.com/App_Themes/PlanetWin365/images/couponbtn_open.png'
        var sImgClose = '//static.planetwin365.com/App_Themes/PlanetWin365/images/couponbtn_close.png'
        var sTooltipSblocca = 'Débloquer Coupon '
        var sTooltipBlocca = 'Bloquer Coupon'
        var sCmbSpecials = ''
        var sLnkBlocca = 's_w_PC_cCoupon_lnkBlocca'
        var sUrlPrintCoupon = '/print_coupon.php?IDCoupon='
        var sBtnRefreshAttesa = 's_w_PC_cCoupon_btnRefreshAttesa'
        var sBtnRefreshAsincrono = 's_w_PC_cCoupon_btnRefreshAsincrono'
        var sHidPrintAsincrono = 's_w_PC_cCoupon_hidPrintAsincronoDisabled'
        var sHidSottoEventName = 's_w_PC_cCoupon_txtSottoEventName'
        var sHidQuota = 's_w_PC_cCoupon_txtQuota'
        var sHidCodPubblicazione = 's_w_PC_cCoupon_txtCodPubblicazione'
        var sHidEventName = 's_w_PC_cCoupon_txtEventName'
        var sHidIDEvento = 's_w_PC_cCoupon_txtIDEvento'
        var sHidIDSottoEvento = 's_w_PC_cCoupon_txtIDSottoEvento'
        var sHidGiocabilita = 's_w_PC_cCoupon_txtGiocabilita'
        var sHidTipoQuota = 's_w_PC_cCoupon_txtTipoQuota'
        var sHidIDTipoEvento = 's_w_PC_cCoupon_txtIDTipoEvento'
        var sHidIDTipoQuota = 's_w_PC_cCoupon_txtIDTipoQuota'
        var sHidAddQuota = 's_w_PC_cCoupon_btnAddQuota'
        var couponQuote = [];
        var countdownTime = '8'

        var loginPopup;
        var sTxtGiocaSuTutte = 's_w_PC_cCoupon_txtGiocaSuTutte'

        Sys.WebForms.PageRequestManager.getInstance().add_endRequest(CouponEndRequestHandler);
        Sys.WebForms.PageRequestManager.getInstance().add_pageLoaded(selezionaQuote);

        /************COUPON DRAGGABILE E RICHIUDIBILE SCROLLABILE **********************/
        /****************************************************************************/
        var numItemVis = 0;
        var numItemVisConf = 0;
        var varResize = 0;
        var numItemOrig = 0;
        /****************************************************************************/
        /************ FINE COUPON DRAGGABILE E RICHIUDIBILE SCROLLABILE *****************/

        var heightItems = 0
        var heightItemsMax = 0
        var couponExpanded = 0
        var tooltipExpanded = 0

        $(document).ready(function () {
            //Aggiungo lo script per il sistema importo cassa
            importoCassa();

            $(".CouponUserData .dropdown").mouseover(function () {
                $(this).addClass("Expanded");
            })
            $(".CouponUserData .dropdown").change(function () {
                    $(this).removeClass("Expanded");
                })
                .blur(function () {
                    $(this).removeClass("Expanded");
                });
            replaceSepTxt();

            //Script per visualizzare solo N quote inserite
            //tramite scrollbar o pulsanti espandi/collassa

            SwitchSelectUnselect();
        });

        //Script per visualizzare la tooltuip con il cambio
        function showCambio() {
            $(".spanCambio").attr("title", "1 € = " + arrotonda(getCambio(), 4).toString().replace(".", sepDec) + getSimboloValSel());
        }
    </script>
<?php } ?>
<?php if (isset($_SESSION['coupon_html_prefix']) && $_SESSION['coupon_html_prefix'] == "hl_w_PC") { ?>
    <script language="javascript" type="text/javascript">
        //Numero massimo di raggruppamenti, usato nel coupon.js
        var maxNumRaggruppamenti = 25.000;

        //ClientID degli oggetti usati in coupon.js
        var sHidModificatoQuote = 'hl_w_PC_cCoupon_hidModificatoQuote';
        var sHidAttesa = 'hl_w_PC_cCoupon_hidAttesa';
        var sHidCouponAsincrono = 'hl_w_PC_cCoupon_hidCouponAsincrono'
        var sHidRiserva = 'hl_w_PC_cCoupon_hidRiserva';
        var sHidIDQuote = 'hl_w_PC_cCoupon_hidIDQuote';
        var sHidStatoCoupon = 'hl_w_PC_cCoupon_hidStatoCoupon';
        var sLnkConferma = 'hl_w_PC_cCoupon_lnkConferma';
        var sBtnFakeAvanti = 'hl_w_PC_cCoupon_btnFakeAvanti'
        var sBtnFakeCancella = 'hl_w_PC_cCoupon_btnFakeCancella'
        var sBtnScoAncora = 'hl_w_PC_cCoupon_btnScoAncora';
        var sBtnStampaAnagrafica = 'hl_w_PC_cCoupon_btnStampaAnagrafica';
        var sCboUtente = 'hl_w_PC_cCoupon_cboUtente';
        var sTxtUtente = 'hl_w_PC_cCoupon_txtUtente';
        var sTxtCouponCode = 'hl_w_PC_cCoupon_txtCouponCodiceAnonimo'
        var sHidTipoCoupon = 'hl_w_PC_cCoupon_hidTipoCoupon';
        var sHidQuotaTotale = 'hl_w_PC_cCoupon_hidQuotaTotale';
        var sHidQuotaMinDI = 'hl_w_PC_cCoupon_hidQuotaTotaleDIMin';
        var sHidIDCoupon = 'hl_w_PC_cCoupon_hidIDCoupon'
        var sTxtImporto = 'hl_w_PC_cCoupon_txtImporto';
        var sTxtImportoSis = 'hl_w_PC_cCoupon_txtImportoSis';
        var sTxtImportoDI = 'hl_w_PC_cCoupon_txtImportoDI';
        var sTxtTotaleDIValuta = 'hl_w_PC_cCoupon_txtTotaleDIValuta';
        var sLblOnlySaldo = 'hl_w_PC_cCoupon_lblOnlySaldo';
        var sLblSaldo = 'hl_w_PC_cCoupon_lblSaldo';
        var sLblRicAutoSaldo = 'hl_w_PC_cCoupon_lblRicAutoSaldo';
        var sAsyncQBButtonAddClientID = 'hl_w_PC_cCoupon_btnAddCouponQB';
        var sAsyncQBTextClientID = 'hl_w_PC_cCoupon_txtQB';
        var sTxtRicarica = 'hl_w_PC_cCoupon_txtRicarica';
        var sChkRicarica = 'hl_w_PC_cCoupon_chkRicAuto'
        var sCouponButtonClientID = 'hl_w_PC_cCoupon_btnAddCoupon';
        var sMultiIDQuotaClientID = 'hl_w_PC_cCoupon_btnAddMultiIDQuota';
        var sCouponQuotaClientID = 'hl_w_PC_cCoupon_txtIDQuota';
        var sCPqt = sCouponQuotaClientID;
        var sCPbtn = sCouponButtonClientID;
        var sCouponImportoClientID = 'hl_w_PC_cCoupon_txtAddImporto';
        var sTxtTotaleDI = 'hl_w_PC_cCoupon_txtTotaleDI';
        var sHidBonusNumScommesse = 'hl_w_PC_cCoupon_hidBonusNumScommesse';
        var sHidBonusQuotaMinimaAttivo = 'hl_w_PC_cCoupon_hidBonusQuotaMinimaAttivo';
        var sHidBonusRaggruppamentoMinimo = 'hl_w_PC_cCoupon_hidBonusRaggruppamentoMinimo'
        var sHidNumItemCoupon = 'hl_w_PC_cCoupon_hidNumItemCoupon'
        var sCouponPrecompilatoButtonClientID = 'hl_w_PC_cCoupon_btnAddCouponPrecompilato';
        var sCouponPrecompilatoIDClientID = 'hl_w_PC_cCoupon_txtIDCouponPrecompilato';
        var sCouponPrecompilatoIDClientImporto = 'hl_w_PC_cCoupon_txtImportoCouponPrecompilato';
        var sDivRicMan = 'hl_w_PC_cCoupon_divRicMan';
        var sDivRicAuto = 'hl_w_PC_cCoupon_divRicAuto';
        var sTxtImportoValuta = 'hl_w_PC_cCoupon_txtImportoValuta';
        var sTxtImportoCassaDI = 'hl_w_PC_cCoupon_txtImportoDIValuta';
        var sDdlValuta = 'hl_w_PC_cCoupon_ddlValuta';
        var sDdlValutaDI = 'hl_w_PC_cCoupon_ddlValutaDI';
        var sDdlValutaSis = 'hl_w_PC_cCoupon_ddlValutaSis';
        var sLblImportoDICombinazioni = 'hl_w_PC_cCoupon_lblImportoDICombinazioni'
        var sImgOpen = '//static.planetwin365.com/App_Themes/PlanetWin365/images/couponbtn_open.png'
        var sImgClose = '//static.planetwin365.com/App_Themes/PlanetWin365/images/couponbtn_close.png'
        var sTooltipSblocca = 'Débloquer Coupon '
        var sTooltipBlocca = 'Bloquer Coupon'
        var sCmbSpecials = ''
        var sLnkBlocca = 'hl_w_PC_cCoupon_lnkBlocca'
        var sUrlPrintCoupon = '/print_coupon.php?IDCoupon='
        var sBtnRefreshAttesa = 'hl_w_PC_cCoupon_btnRefreshAttesa'
        var sBtnRefreshAsincrono = 'hl_w_PC_cCoupon_btnRefreshAsincrono'
        var sHidPrintAsincrono = 'hl_w_PC_cCoupon_hidPrintAsincronoDisabled'
        var sHidSottoEventName = 'hl_w_PC_cCoupon_txtSottoEventName'
        var sHidQuota = 'hl_w_PC_cCoupon_txtQuota'
        var sHidCodPubblicazione = 'hl_w_PC_cCoupon_txtCodPubblicazione'
        var sHidEventName = 'hl_w_PC_cCoupon_txtEventName'
        var sHidIDEvento = 'hl_w_PC_cCoupon_txtIDEvento'
        var sHidIDSottoEvento = 'hl_w_PC_cCoupon_txtIDSottoEvento'
        var sHidGiocabilita = 'hl_w_PC_cCoupon_txtGiocabilita'
        var sHidTipoQuota = 'hl_w_PC_cCoupon_txtTipoQuota'
        var sHidIDTipoEvento = 'hl_w_PC_cCoupon_txtIDTipoEvento'
        var sHidIDTipoQuota = 'hl_w_PC_cCoupon_txtIDTipoQuota'
        var sHidAddQuota = 'hl_w_PC_cCoupon_btnAddQuota'
        var couponQuote = [];
        var countdownTime = '8'

        var loginPopup;
        var sTxtGiocaSuTutte = 'hl_w_PC_cCoupon_txtGiocaSuTutte'

        Sys.WebForms.PageRequestManager.getInstance().add_endRequest(CouponEndRequestHandler);
        Sys.WebForms.PageRequestManager.getInstance().add_pageLoaded(selezionaQuote);

        /************COUPON DRAGGABILE E RICHIUDIBILE SCROLLABILE **********************/
        /****************************************************************************/
        var numItemVis = 0;
        var numItemVisConf = 0;
        var varResize = 0;
        var numItemOrig = 0;
        /****************************************************************************/
        /************ FINE COUPON DRAGGABILE E RICHIUDIBILE SCROLLABILE *****************/

        var heightItems = 0
        var heightItemsMax = 0
        var couponExpanded = 0
        var tooltipExpanded = 0

        $(document).ready(function () {
            //Aggiungo lo script per il sistema importo cassa
            importoCassa();

            $(".CouponUserData .dropdown").mouseover(function () {
                $(this).addClass("Expanded");
            })
            $(".CouponUserData .dropdown").change(function () {
                    $(this).removeClass("Expanded");
                })
                .blur(function () {
                    $(this).removeClass("Expanded");
                });
            replaceSepTxt();

            //Script per visualizzare solo N quote inserite
            //tramite scrollbar o pulsanti espandi/collassa

            SwitchSelectUnselect();
        });

        //Script per visualizzare la tooltuip con il cambio
        function showCambio() {
            $(".spanCambio").attr("title", "1 € = " + arrotonda(getCambio(), 4).toString().replace(".", sepDec) + getSimboloValSel());
        }
    </script>
<?php } ?>

<script type="text/javascript" src="http://planetwins365.tk/livechat/php/app.php?widget-init.js"></script>


<style>
img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
    display: none;
}
</style>
</body>
</html>