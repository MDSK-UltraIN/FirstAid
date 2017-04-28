

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head><title>
	新北市消防局救護紀錄表
</title><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" /><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9" /><link href="css/main.css" rel="stylesheet" type="text/css" />
        <script src="Scripts/jquery/jquery-1.10.0.min.js" type="text/javascript"></script>
        <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
        <script type="text/javascript">
            function MM_preloadImages() { //v3.0
                var d = document; if (d.images) {
                    if (!d.MM_p) d.MM_p = new Array();
                    var i, j = d.MM_p.length, a = MM_preloadImages.arguments; for (i = 0; i < a.length; i++)
                        if (a[i].indexOf("#") != 0) { d.MM_p[j] = new Image; d.MM_p[j++].src = a[i]; }
                }
            }
            function MM_swapImgRestore() { //v3.0
                var i, x, a = document.MM_sr; for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
            }

            function MM_findObj(n, d) { //v4.01
                var p, i, x; if (!d) d = document; if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                    d = parent.frames[n.substring(p + 1)].document; n = n.substring(0, p);
                }
                if (!(x = d[n]) && d.all) x = d.all[n]; for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
                for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
                if (!x && d.getElementById) x = d.getElementById(n); return x;
            }

            function MM_swapImage() { //v3.0
                var i, j = 0, x, a = MM_swapImage.arguments; document.MM_sr = new Array; for (i = 0; i < (a.length - 2); i += 3)
                    if ((x = MM_findObj(a[i])) != null) { document.MM_sr[j++] = x; if (!x.oSrc) x.oSrc = x.src; x.src = a[i + 2]; }
            }
            function MM_goToURL() { //v3.0
                var i, args = MM_goToURL.arguments; document.MM_returnValue = false;
                for (i = 0; i < (args.length - 1); i += 2) eval(args[i] + ".location='" + args[i + 1] + "'");
            }

            function openDiv(divno) {
                $("#imgGeneral").attr("src", "images/sidemenu_8_1.png");
                $("#imgSpecial").attr("src", "images/sidemenu_9_1.png");

                switch (divno) {
                    case 1:
                        $("#imgGeneral").attr("src", "images/sidemenu_8_2.png");
                        break;
                    case 2:
                        $("#imgSpecial").attr("src", "images/sidemenu_9_2.png");
                        break;
                }
            }
            function MM_callJS(jsStr) { //v2.0
                return eval(jsStr)
            }

            //http://www.csscody.com/
            //http://www.dotblogs.com.tw/shadow/archive/2011/12/18/62516.aspx
            /*
            function deleteConfirm(lnkUniqueID) {
            csscody.confirm('Delete.Are you sure you want to delete this?',
            {
	
            onComplete: function (arg) {
            //arg is the value of true or false
            if (arg) {//Or arguments[0] is also ok 
            __doPostBack(lnkUniqueID, '');
            }
	
            } //End onComplete
            }); //End csscody.confirm
	
            //無條件return false，讓onComplete此callback function執行完成
            return false;
            }
            */

            function confirmDelete(delUrl) {
                if (confirm("您確定要刪除?")) {
                    document.location = delUrl;
                }
            }
        </script>
        
    <script src="Scripts/jquery/jquery-1.9.1.js" type="text/javascript"></script>
    <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/themes/base/jquery.ui.all.css" />
    <script src="Scripts/jquery/ui/jquery.ui.core.js" type="text/javascript"></script>
    <script src="Scripts/jquery/ui/jquery.ui.widget.js" type="text/javascript"></script>
    <script src="Scripts/jquery/ui/jquery.ui.tabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        function MM_preloadImages() { //v3.0
            var d = document; if (d.images) {
                if (!d.MM_p) d.MM_p = new Array();
                var i, j = d.MM_p.length, a = MM_preloadImages.arguments; for (i = 0; i < a.length; i++)
                    if (a[i].indexOf("#") != 0) { d.MM_p[j] = new Image; d.MM_p[j++].src = a[i]; }
        }
    }
    function MM_swapImgRestore() { //v3.0
        var i, x, a = document.MM_sr; for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
    }

    function MM_findObj(n, d) { //v4.01
        var p, i, x; if (!d) d = document; if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
            d = parent.frames[n.substring(p + 1)].document; n = n.substring(0, p);
        }
        if (!(x = d[n]) && d.all) x = d.all[n]; for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
        for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
        if (!x && d.getElementById) x = d.getElementById(n); return x;
    }

    function MM_swapImage() { //v3.0
        var i, j = 0, x, a = MM_swapImage.arguments; document.MM_sr = new Array; for (i = 0; i < (a.length - 2); i += 3)
            if ((x = MM_findObj(a[i])) != null) { document.MM_sr[j++] = x; if (!x.oSrc) x.oSrc = x.src; x.src = a[i + 2]; }
}
function MM_goToURL() { //v3.0
    var i, args = MM_goToURL.arguments; document.MM_returnValue = false;
    for (i = 0; i < (args.length - 1); i += 2) eval(args[i] + ".location='" + args[i + 1] + "'");
}

$(document).ready(function () {
    $("#step1").css("display", "block");
    $("#step2").css("display", "none");
    $("#step3").css("display", "none");
    $("#step4").css("display", "none");

    $("#tabs").tabs();
    $("#tabs2").tabs();
    $("#tabs3").tabs();
    $("#tabs4").tabs();
    $("#tabs5").tabs();
    $("#tabs6").tabs();
});

function openDiv(divno) {
    $("#step1").css("display", "none");
    $("#step2").css("display", "none");
    $("#step3").css("display", "none");
    $("#step4").css("display", "none");
    $("#imgStep1").attr("src", "images/sidemenu_1_1.png");
    $("#imgStep2").attr("src", "images/sidemenu_5_1.png");
    $("#imgStep3").attr("src", "images/sidemenu_6_1.png");
    $("#imgStep4").attr("src", "images/sidemenu_7_1.png");

    switch (divno) {
        case 1:
            $("#step1").css("display", "block");
            $("#imgStep1").attr("src", "images/sidemenu_1_2.png");
            $("#imgStep1").attr("onmouseout","MM_swapImage('imgStep1','','images/sidemenu_1_2.png',1)");
            break;
        case 2:
            $("#step2").css("display", "block");
            $("#imgStep2").attr("src", "images/sidemenu_5_2.png");
            $("#imgStep2").attr("onmouseout", "MM_swapImage('imgStep2','','images/sidemenu_5_2.png',1)");
            break;
        case 3:
            $("#step3").css("display", "block");
            $("#imgStep3").attr("src", "images/sidemenu_6_2.png");
            $("#imgStep3").attr("onmouseout", "MM_swapImage('imgStep3','','images/sidemenu_6_2.png',1)");			
            break;
        case 4:
            $("#step4").css("display", "block");
            $("#imgStep4").attr("src", "images/sidemenu_7_2.png");
            $("#imgStep4").attr("onmouseout", "MM_swapImage('imgStep4','','images/sidemenu_7_2.png',1)");
            break;
    }
}
function MM_callJS(jsStr) { //v2.0
    return eval(jsStr)
}

function chgBtnDownBg() {
    var tbObj = event.srcElement;
    $(tbObj).addClass("btndown").removeClass("btn");
    //$("#btn1").addClass("btndown").removeClass("btn");
}

function chgBtnUpBg() {
    var tbObj = event.srcElement;
    $(tbObj).addClass("btn").removeClass("btndown");
    //$("#btn1").addClass("btn").removeClass("btndown");
}

function chgBtnNumDownBg() {
    var tbObj = event.srcElement;
    $(tbObj).addClass("btnnumdown").removeClass("btnnum");
}

function chgBtnNumUpBg() {
    var tbObj = event.srcElement;
    $(tbObj).addClass("btnnum").removeClass("btnnumdown");
}

function spannum(vTxt, vNum, vLen) {
    //var tbObj = event.srcElement;
    //$(eval("'#"+vSpan+"'")).html($("#span2").html() + vNum);

    $(eval("'#" + vTxt + "'")).val($(eval("'#" + vTxt + "'")).val() + vNum);
    //alert($(eval("'#"+vTxt+"'")).val($(eval("'#"+vTxt+"'")).val().substr(0, 3)).val());
    $(eval("'#" + vTxt + "'")).val($(eval("'#" + vTxt + "'")).val().substr(0, 3, vLen)).val();
}

function getSysTime(vSpan) {
    today = new Date();
    today_year = today.getFullYear() - 1911;
    today_month = lpad(today.getMonth() + 1, 2);
    today_date = lpad(today.getDate(), 2);
    today_day = lpad(today.getDay(), 2);
    today_hour = lpad(today.getHours(), 2);
    today_minute = lpad(today.getMinutes(), 2);

    $(eval("'#" + vSpan + "'")).html(today_year + "/" + today_month + "/" + today_date + " " + today_hour + ":" + today_minute);
}

function getXY() {
}

function showTxt(vObj, vTxt) {
    if (vTxt != null) {
        var arr = vTxt.split(';');

        if (document.getElementById(vObj).checked == true) {
            for (var i = 0; i < arr.length; i++) {
                $(eval("'#" + arr[i] + "'")).attr("style", "display:block");
            }
        }
        else {
            for (var i = 0; i < arr.length; i++) {
                $(eval("'#" + arr[i] + "'")).attr("style", "display:none");
            }
        }
    }
}

function txtKeyNumber(vStr, vEnd) {
    var str = parseInt(vStr) + 48;
    var end = parseInt(vEnd) + 48;

    if (!(window.event.keyCode >= str && window.event.keyCode <= end)) {
        event.returnValue = false;
    }
}

var lpad = function (value, padding) {
    var zeroes = "0";
    for (var i = 0; i < padding; i++) { zeroes += "0"; }
    return (zeroes + value).slice(padding * -1);
}
    </script>
</head>
    <body onload="MM_preloadImages('images/btn_qry_2.png','images/btn_add_2.png','images/sidemenu_8_2.png','images/sidemenu_9_2.png','images/head_menu_2_2.png')">
        <form method="post" action="./special_edit.aspx" id="form1" enctype="multipart/form-data">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTQ4MTIyMzAwNQ9kFgJmD2QWAgIDDxYCHgdlbmN0eXBlBRNtdWx0aXBhcnQvZm9ybS1kYXRhZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18W3wEFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzEFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzEFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzIFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzIFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzMFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzMFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzQFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzQFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzUFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzUFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzYFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzYFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzcFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzcFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzgFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzgFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzkFLmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzkFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzEwBS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlBhdGllbnRGYWxQbGFjZV8xMAUvY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsUGxhY2VfMTEFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzExBS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlBhdGllbnRGYWxQbGFjZV8xMgUvY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsUGxhY2VfMTIFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzEzBS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlBhdGllbnRGYWxQbGFjZV8xMwUvY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsUGxhY2VfMTQFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzE0BS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlBhdGllbnRGYWxQbGFjZV8xNQUvY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsUGxhY2VfMTUFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzE2BS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlBhdGllbnRGYWxQbGFjZV8xNgUvY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsUGxhY2VfMTcFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzE3BS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlBhdGllbnRGYWxQbGFjZV8xOAUvY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsUGxhY2VfMTgFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUGF0aWVudEZhbFBsYWNlXzE5BS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlBhdGllbnRGYWxQbGFjZV8xOQUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfMQUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfMQUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfMgUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfMgUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfMwUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfMwUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfNAUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfNAUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfNQUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfNQUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfNgUuY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJQYXRpZW50RmFsbFRpbWVfNgUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBc3Npc3RhbnQxXzEFKWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQXNzaXN0YW50MV8xBSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFzc2lzdGFudDFfMgUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBc3Npc3RhbnQxXzIFJ2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkQ2hBc3Npc3RhbnQkMAUnY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRDaEFzc2lzdGFudCQxBSdjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJENoQXNzaXN0YW50JDIFJ2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkQ2hBc3Npc3RhbnQkMgUmY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRDaEFzc2lzdGFudDIFKWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQXNzaXN0YW50Ml8xBSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFzc2lzdGFudDJfMQUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBc3Npc3RhbnQyXzIFKWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQXNzaXN0YW50Ml8yBSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFzc2lzdGFudDJfMwUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBc3Npc3RhbnQyXzMFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnRSaHl0aG1fMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydFJoeXRobV8xBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0Umh5dGhtXzIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnRSaHl0aG1fMgUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydFJoeXRobV8zBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0Umh5dGhtXzMFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnRSaHl0aG1fNAUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydFJoeXRobV80BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlJlc3RvcmVUaW1lXzEFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUmVzdG9yZVRpbWVfMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJSZXN0b3JlVGltZV8yBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlJlc3RvcmVUaW1lXzIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUmVzdG9yZVRpbWVfMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJSZXN0b3JlVGltZV8zBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlJlc3RvcmVUaW1lXzQFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUmVzdG9yZVRpbWVfNAUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJSZXN0b3JlVGltZV81BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlJlc3RvcmVUaW1lXzUFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiUmVzdG9yZVRpbWVfNgUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJSZXN0b3JlVGltZV82BSRjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMxXzEFJGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQUNMUzFfMQUkY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBQ0xTMV8yBSRjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMxXzIFJGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQUNMUzFfMwUkY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBQ0xTMV8zBSRjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMyXzEFJGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQUNMUzJfMQUkY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBQ0xTMl8yBSRjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMyXzIFJGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQUNMUzNfMQUkY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBQ0xTM18xBSRjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMzXzIFJGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQUNMUzNfMgUkY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBQ0xTNF8xBSRjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFM0XzEFJGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQUNMUzRfMgUkY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBQ0xTNF8yBSRjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFM0XzMFJGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQUNMUzRfMwUkY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBQ0xTNV8xBSRjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFM1XzEFJGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQUNMUzVfMgUkY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJBQ0xTNV8yBSVjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMyMV8xBSVjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMyMV8xBSVjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMyMV8yBSVjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMyMV8yBSVjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMyMV8zBSVjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkFDTFMyMV8zBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2UyXzEFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTJfMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlMl8yBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2UyXzIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTJfMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlMl8zBStjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2UyXzExBStjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2UyXzExBStjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2UyXzEyBStjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2UyXzEyBStjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2UyXzEzBStjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2UyXzEzBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2UzXzEFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTNfMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlM18yBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2UzXzIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTNfMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlM18zBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2U0XzEFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTRfMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlNF8yBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2U0XzIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTRfMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlNF8zBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2U1XzEFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTVfMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlNV8yBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2U1XzIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTVfMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlNV8zBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2U2XzEFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTZfMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlNl8yBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2U2XzIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTZfMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlNl8zBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2U3XzEFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTdfMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlN18yBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYlVyZ2VudENhc2U3XzIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiVXJnZW50Q2FzZTdfMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJVcmdlbnRDYXNlN18zBSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNoVXJnZW50Q2FzZTgkMAUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRjaFVyZ2VudENhc2U4JDEFKWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2hVcmdlbnRDYXNlOCQyBSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNoVXJnZW50Q2FzZTgkMwUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRjaFVyZ2VudENhc2U4JDMFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQnJlYXRoZUhhcmRfMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJCcmVhdGhlSGFyZF8xBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkJyZWF0aGVIYXJkXzIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQnJlYXRoZUhhcmRfMgUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJCcmVhdGhlSGFyZF8zBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkJyZWF0aGVIYXJkXzMFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQnJlYXRoZUhhcmRfNAUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJCcmVhdGhlSGFyZF80BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkJyZWF0aGVIYXJkXzUFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiQnJlYXRoZUhhcmRfNQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJCcmVhdGhlSGFyZF82BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkJyZWF0aGVIYXJkXzYFKGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2hCcmVhdGhlSGFyZDEFKGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2hCcmVhdGhlSGFyZDIFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl8xBSxjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fMQUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzIFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl8yBSxjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fMwUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzMFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl80BSxjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fNAUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzUFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl81BSxjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fNgUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzYFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl83BSxjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fNwUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzgFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl84BSxjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fOQUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzkFLWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl8xMAUtY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzEwBS1jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fMTEFLWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl8xMQUtY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzEyBS1jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fMTIFLWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl8xMwUtY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzEzBS1jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fMTQFLWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl8xNAUtY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzE1BS1jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fMTUFLWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl8xNgUtY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzE2BS1jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fMTcFLWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl8xNwUtY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzE4BS1jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fMTgFLWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl8xOQUtY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydERlY2lzaW9uXzE5BS1jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0RGVjaXNpb25fMjAFLWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnREZWNpc2lvbl8yMAUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydE1lZGljaW5lXzEFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnRNZWRpY2luZV8xBSxjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0TWVkaWNpbmVfMgUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJIZWFydE1lZGljaW5lXzIFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSGVhcnRNZWRpY2luZV8zBSxjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkhlYXJ0TWVkaWNpbmVfMwUiY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRpYnRuU2F2ZaC2ORm5PIypsmgiDM/VMbDSIZbL4UEOmDl9qohb9zrh" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="/WebResource.axd?d=prkwPsh0NG0chXnOKFou33p6pR-37Rx_g3oYKrv-mAyoVR5XZPbiYbtEsM7W9YXAhaNQAPFhR5K_vzLPtIys-O2k15rq31w09Rcj0nRJ4TM1&amp;t=636264909799068146" type="text/javascript"></script>


<script src="/ScriptResource.axd?d=KCfhcOjuHlkEajGbYaA8imFZDVWZQdhJH2eYI-mFCfSpgiSahUAw7Np1pGVJBi1EfVWjsozqj1PNs3QtsB-jPs7V3BoOjV7B11EGZHannI69AK1b49ssU1QY6OUzvTW_jVqAO9d_vpTYcMV9UvkvLDSA9ZSg6z7hnjTY9tAfova0_zzzD-uavRe-tIpdrFhr0&amp;t=7e14f9a4" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax 用戶端架構無法載入。');
//]]>
</script>

<script src="/ScriptResource.axd?d=2Ifp5NV6SEVZskLssKevTMGJ-puETATERKG7OIBRTa6QA45kEtCSivDvfVUoQlFAVcY_bM10ObosjA1GtTXL3PUBhGwth3kg9gQXjdTNQsTrCAthLVSo8r-HzniHl9w5ob5Ci1lT3NW7_2HK8M7NzUd7jjJqBjVLiF2uFfx2MfUSmYwkyc-loO-cHuCoQl_-0&amp;t=7e14f9a4" type="text/javascript"></script>
            <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'form1', [], [], [], 90, 'ctl00');
//]]>
</script>

            <div id="wrapper">
                
 <input type="hidden" name="ctl00$ContentPlaceHolder1$hidBtnFunction" id="ContentPlaceHolder1_hidBtnFunction" value="A" />
    <div id="header">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="744">
                    &nbsp;
                </td>
                <td width="226">
                    <a href="special_list.aspx">回列表</a>
                </td>
            </tr>
        </table>
        <div id="header-Menu">
            <img src="images/head_menu_1_1.png" alt="一般表" width="116" height="37" id="Image1"
                onclick="MM_goToURL('parent','general_edit.php');return document.MM_returnValue"
                onmouseover="MM_swapImage('Image1','','images/head_menu_1_2.png',1)" onmouseout="MM_swapImgRestore()" /><img
                    src="images/head_menu_2_2.png" alt="特殊表" width="96" height="37" id="Image2" onmouseover="MM_swapImage('Image2','','images/head_menu_2_2.png',1)"
                    onmouseout="MM_swapImgRestore()" />
        </div>
    </div>
    <div id="container">
        <div id="sidebar">
            <ul>
                <li>
                    <img src="images/sidemenu_1_2.png" alt="基本資料" width="157" height="74" id="imgStep1"
                        onclick="openDiv(1)" onmouseover="MM_swapImage('imgStep1','','images/sidemenu_1_2.png',1)"
                        onmouseout="MM_swapImgRestore()" />
                </li>
                <li>
                    <img src="images/sidemenu_5_1.png" alt="OHCA個案紀錄" width="157" height="74" id="imgStep2"
                        onclick="openDiv(2)" onmouseover="MM_swapImage('imgStep2','','images/sidemenu_5_2.png',1)"
                        onmouseout="MM_swapImgRestore()" />
                </li>
                <li>
                    <img src="images/sidemenu_6_1.png" alt="處置與危急個案紀錄" width="157" height="75" id="imgStep3"
                        onclick="openDiv(3)" onmouseover="MM_swapImage('imgStep3','','images/sidemenu_6_2.png',1)"
                        onmouseout="MM_swapImgRestore()" />
                </li>
                <li>
                    <img src="images/sidemenu_7_1.png" alt="心律臆斷構及簽名" width="157" height="75" id="imgStep4"
                        onclick="openDiv(4)" onmouseover="MM_swapImage('imgStep4','','images/sidemenu_7_2.png',1)"
                        onmouseout="MM_swapImgRestore()" />
                </li>
            </ul>
        </div>
        <div id="content">
            <div id="path">
                <p>
                    首頁>特殊表編輯</p>
                <p>
                &nbsp;</div>
            <div id="formno">
                第<span id="ContentPlaceHolder1_lblDutyOrg"></span>分隊 表單編號：<span id="ContentPlaceHolder1_lblFormNo"></span>
                <br />
            </div>
            <div id="step1">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <table width="94%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <div id="tabs">
                                            <ul>
                                                <li><a href="#tabs-1">出勤通知時間</a></li>
                                                <li><a href="#tabs-2">患者姓名</a></li>
                                                <li><a href="#tabs-3">身分證字號</a></li>
                                                <li><a href="#tabs-4">年齡</a></li>
                                                <li><a href="#tabs-5">患者倒地所在場所</a></li>
                                            </ul>
                                            <div id="tabs-1">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <th class="edit">
                                                            出勤通知時間：<span id="ContentPlaceHolder1_lblDutyTime"></span>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                        <input type="submit" name="ctl00$ContentPlaceHolder1$btnDutyTime" value="取得時間" id="ContentPlaceHolder1_btnDutyTime" class="btn" onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                           
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-2">
                                                患者姓名：<input name="ctl00$ContentPlaceHolder1$txtPatientName" type="text" id="ContentPlaceHolder1_txtPatientName" />
                                            </div>
                                            <div id="tabs-3">
                                                身分證字號：<input name="ctl00$ContentPlaceHolder1$txtUID" type="text" id="ContentPlaceHolder1_txtUID" />
                                            </div>
                                            <div id="tabs-4">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <th class="edit">
                                                            年齡：<input name="ctl00$ContentPlaceHolder1$txtAge" type="text" maxlength="3" id="ContentPlaceHolder1_txtAge" OnKeyPress="txtKeyNumber(&#39;0&#39;,&#39;9&#39;)" />
                                                        </th>
                                                    </tr>
                                                    
                                                </table>
                                            </div>
                                            <div id="tabs-5">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_1" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_1">住家、浴室(住宅內)</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_2" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_2">旅館等住宿場所</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_3" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_3">工作場所：室內辦公室等</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_4" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_4" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_4">工作場所：工廠及倉庫等</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_5" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_5" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_5">工作場所：室外場所、工地、農田等</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_6" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_6" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_6">休閒場所：電影院、KTV、酒吧等</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_7" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_7" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_7">室內運動場所：運動中心、游泳池等</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_8" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_8" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_8">室外運動場所：運動場、戶外球場等</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_9" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_9" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_9">餐廳、飲食店</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_10" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_10" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_10">三溫暖、溫泉、公共浴室</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_11" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_11" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_11">療養院、教養機構</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_12" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_12" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_12">公共建築物：車站、航廈、景點等</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_13" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_13" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_13">教育場所：學校、補習班、圖書館等</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_14" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_14" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_14">宗教場所：寺廟、教堂等</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_15" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_15" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_15">醫院、診所</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_16" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_16" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_16">街道、公路</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_17" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_17" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_17">運輸工具：汽車、公車、火車、船等</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_18" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_18" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_18">救護車</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="edit">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFalPlace_19" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFalPlace" value="rdbPatientFalPlace_19" onclick="showTxt(&#39;ContentPlaceHolder1_rdbPatientFalPlace_19&#39;,&#39;spanOther1&#39;);" /><label for="ContentPlaceHolder1_rdbPatientFalPlace_19">不清楚或其他</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther1" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtPatientFalPlace_19" type="text" maxlength="90" id="ContentPlaceHolder1_txtPatientFalPlace_19" class="text" /></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="editbtn">
                                        <img src="images/button_1_2.png" alt="上一頁" width="83" height="89" id="ibtnLeft1"
                                            onmouseover="MM_swapImage('ibtnLeft1','','images/button_1_2.png',1)" onmouseout="MM_swapImgRestore()" />
                                        <img src="images/button_2_1.png" alt="下一頁" width="85" height="89" id="ibtnRight1"
                                            onclick="MM_callJS('openDiv(2)')" onmouseover="MM_swapImage('ibtnRight1','','images/button_2_2.png',1)"
                                            onmouseout="MM_swapImgRestore()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="step2">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <table width="94%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <div id="tabs3">
                                            <ul>
                                                <li><a href="#tabs-1">OHCA個案紀錄</a></li>
                                            </ul>
                                            <div id="tabs-1">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <th class="edit" colspan="2">
                                                            患者倒地時間(救護員接手CPR前)
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFallTime_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFallTime" value="rdbPatientFallTime_1" /><label for="ContentPlaceHolder1_rdbPatientFallTime_1"><1分鐘</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFallTime_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFallTime" value="rdbPatientFallTime_2" /><label for="ContentPlaceHolder1_rdbPatientFallTime_2">1至5分鐘</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFallTime_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFallTime" value="rdbPatientFallTime_3" /><label for="ContentPlaceHolder1_rdbPatientFallTime_3">6至10分鐘</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFallTime_4" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFallTime" value="rdbPatientFallTime_4" /><label for="ContentPlaceHolder1_rdbPatientFallTime_4">11至15分鐘</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFallTime_5" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFallTime" value="rdbPatientFallTime_5" /><label for="ContentPlaceHolder1_rdbPatientFallTime_5">>=15分鐘</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbPatientFallTime_6" type="radio" name="ctl00$ContentPlaceHolder1$rdbPatientFallTime" value="rdbPatientFallTime_6" /><label for="ContentPlaceHolder1_rdbPatientFallTime_6">不清楚</label></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <th class="edit" colspan="5">
                                                            救護員接手CPR前是否已有人員施行CPR
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbAssistant1_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbAssistant1" value="rdbAssistant1_1" /><label for="ContentPlaceHolder1_rdbAssistant1_1">無</label></span>
                                                        </td>
                                                        <td class="edit">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbAssistant1_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbAssistant1" value="rdbAssistant1_2" /><label for="ContentPlaceHolder1_rdbAssistant1_2">有</label></span>
                                                            ：
                                                        </td>
                                                        <td class="edit">
                                                            &nbsp;
                                                        </td>
                                                        <td class="edit">
                                                            &nbsp;
                                                        </td>
                                                        <td class="edit">
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit" colspan="2">
                                                            <span id="ContentPlaceHolder1_ChAssistant"><input id="ContentPlaceHolder1_ChAssistant_0" type="checkbox" name="ctl00$ContentPlaceHolder1$ChAssistant$0" value="家屬" /><label for="ContentPlaceHolder1_ChAssistant_0">家屬  </label><input id="ContentPlaceHolder1_ChAssistant_1" type="checkbox" name="ctl00$ContentPlaceHolder1$ChAssistant$1" value="民眾" /><label for="ContentPlaceHolder1_ChAssistant_1">民眾  </label><input id="ContentPlaceHolder1_ChAssistant_2" type="checkbox" name="ctl00$ContentPlaceHolder1$ChAssistant$2" value="救護醫療人員" /><label for="ContentPlaceHolder1_ChAssistant_2">救護醫療人員</label></span>
                                                           </td>
                                                           <td class="edit" colspan="3">  
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ChAssistant2" type="checkbox" name="ctl00$ContentPlaceHolder1$ChAssistant2" onclick="showTxt(&#39;ContentPlaceHolder1_ChAssistant2&#39;,&#39;spanOther2&#39;);" /><label for="ContentPlaceHolder1_ChAssistant2">其他</label></span>
                                                                 <span id="spanOther2" style="display: none">
                                                                  <input name="ctl00$ContentPlaceHolder1$txtAssistant" type="text" id="ContentPlaceHolder1_txtAssistant" class="text" />
                                                                </span>
                                                        </td>
                                                        </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            實施CPR內容：
                                                        </td>
                                                        <td class="edit">
                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbAssistant2_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbAssistant2" value="rdbAssistant2_1" /><label for="ContentPlaceHolder1_rdbAssistant2_1">只有人工呼吸</label></span>
                                                        </td>
                                                        <td class="edit">
                                                         <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbAssistant2_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbAssistant2" value="rdbAssistant2_2" /><label for="ContentPlaceHolder1_rdbAssistant2_2">只有胸外按摩</label></span>                                                           
                                                        </td>
                                                        <td colspan="2" class="edit">
                                                         <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbAssistant2_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbAssistant2" value="rdbAssistant2_3" /><label for="ContentPlaceHolder1_rdbAssistant2_3">完整CPR</label></span>    
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td valign="top">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <th class="edit" colspan="2">
                                                                        到院前患者心律
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="edit">
                                                                      <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartRhythm_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartRhythm" value="rdbHeartRhythm_1" /><label for="ContentPlaceHolder1_rdbHeartRhythm_1">不可電擊心律</label></span>  
                                                                       
                                                                    </td>
                                                                    <td class="edit">
                                                                     <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartRhythm_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartRhythm" value="rdbHeartRhythm_2" /><label for="ContentPlaceHolder1_rdbHeartRhythm_2">可電擊心律VF</label></span>  
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="edit">
                                                                     <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartRhythm_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartRhythm" value="rdbHeartRhythm_3" /><label for="ContentPlaceHolder1_rdbHeartRhythm_3">可電擊心律VT</label></span>  
                                                                        
                                                                    </td>
                                                                    <td class="edit">
                                                                     <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartRhythm_4" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartRhythm" value="rdbHeartRhythm_4" /><label for="ContentPlaceHolder1_rdbHeartRhythm_4">無使用AED</label></span>
                                                                        
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <th class="edit" colspan="2">
                                                                        到院前患者恢復心跳時間
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="edit">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbRestoreTime_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbRestoreTime" value="rdbRestoreTime_1" /><label for="ContentPlaceHolder1_rdbRestoreTime_1">無恢復心跳</label></span>
                                                                       
                                                                    </td>
                                                                    <td class="edit">
                                                                     <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbRestoreTime_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbRestoreTime" value="rdbRestoreTime_2" /><label for="ContentPlaceHolder1_rdbRestoreTime_2"><5分鐘</label></span>
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="edit">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbRestoreTime_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbRestoreTime" value="rdbRestoreTime_3" /><label for="ContentPlaceHolder1_rdbRestoreTime_3">5至10分鐘</label></span>
                                                                       
                                                                    </td>
                                                                    <td class="edit">
                                                                     <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbRestoreTime_4" type="radio" name="ctl00$ContentPlaceHolder1$rdbRestoreTime" value="rdbRestoreTime_4" /><label for="ContentPlaceHolder1_rdbRestoreTime_4">11至15分鐘</label></span>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="edit">
                                                                     <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbRestoreTime_5" type="radio" name="ctl00$ContentPlaceHolder1$rdbRestoreTime" value="rdbRestoreTime_5" /><label for="ContentPlaceHolder1_rdbRestoreTime_5">>15分鐘</label></span>
                                                                       
                                                                    </td>
                                                                    <td class="edit">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbRestoreTime_6" type="radio" name="ctl00$ContentPlaceHolder1$rdbRestoreTime" value="rdbRestoreTime_6" /><label for="ContentPlaceHolder1_rdbRestoreTime_6">有恢復但時間不清楚</label></span>
                                                                        
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="editbtn">
                                        <img src="images/button_1_1.png" alt="上一頁" width="83" height="89" id="ibtnLeft2"
                                            onclick="MM_callJS('openDiv(1)')" onmouseover="MM_swapImage('ibtnLeft2','','images/button_1_2.png',1)"
                                            onmouseout="MM_swapImgRestore()" />
                                        <img src="images/button_2_1.png" alt="下一頁" width="85" height="89" id="ibtnRight2"
                                            onclick="MM_callJS('openDiv(3)')" onmouseover="MM_swapImage('ibtnRight2','','images/button_2_2.png',1)"
                                            onmouseout="MM_swapImgRestore()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="step3">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <table width="94%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <div id="tabs4">
                                            <ul>
                                                <li><a href="#tabs-1">氣道處置</a></li>
                                                <li><a href="#tabs-2">藥物處置</a></li>
                                                <li><a href="#tabs-3">其他..</a></li>
                                                <li><a href="#tabs-4">無意識..</a></li>
                                                <li><a href="#tabs-5">疑似腦血..</a></li>
                                                <li><a href="#tabs-6">其他異常..</a></li>
                                                <li><a href="#tabs-7">呼吸困難</a></li>
                                            </ul>
                                            <div id="tabs-1">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td colspan="2" class="edit">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                     <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS1_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS1" value="rdbACLS1_1" /><label for="ContentPlaceHolder1_rdbACLS1_1">LMA</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <table border="0" cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                                <td>
                                                                                 <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS1_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS1" value="rdbACLS1_2" onclick="showTxt(&#39;ContentPlaceHolder1_rdbACLS1_2&#39;,&#39;spanOther3&#39;);" /><label for="ContentPlaceHolder1_rdbACLS1_2">未執行ACLS進階呼吸道處置</label></span>
                                                                                    
                                                                                </td>
                                                                                <td>
                                                                                    <span id="spanOther3" style="display: none">，原因：
                                                                                     <input name="ctl00$ContentPlaceHolder1$txtACLS1_1" type="text" id="ContentPlaceHolder1_txtACLS1_1" class="text" />
                                                                                       </span>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <table border="0" cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                                <td>
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS1_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS1" value="rdbACLS1_3" onclick="showTxt(&#39;ContentPlaceHolder1_rdbACLS1_3&#39;,&#39;spanOther4&#39;);" /><label for="ContentPlaceHolder1_rdbACLS1_3">氣管內管插管</label></span>
                                                                                    
                                                                                </td>
                                                                                <td>
                                                                                    <span id="spanOther4" style="display: none">，尺寸
                                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS1_2" type="text" id="ContentPlaceHolder1_txtACLS1_2" class="text" />
                                                                                        號，固定
                                                                                        <input name="ctl00$ContentPlaceHolder1$txtACLS1_3" type="text" id="ContentPlaceHolder1_txtACLS1_3" class="text" />
                                                                                        cm</span>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            EDD：
                                                        </td>
                                                        <td class="edit">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                     <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS2_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS2" value="rdbACLS2_1" /><label for="ContentPlaceHolder1_rdbACLS2_1">膨脹</label></span>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS2_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS2" value="rdbACLS2_2" /><label for="ContentPlaceHolder1_rdbACLS2_2">壓扁</label></span>
                                                                      
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            呼吸聲：
                                                        </td>
                                                        <td class="edit">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        上腹
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS3_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS3" value="rdbACLS3_1" /><label for="ContentPlaceHolder1_rdbACLS3_1">有</label></span>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS3_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS3" value="rdbACLS3_2" /><label for="ContentPlaceHolder1_rdbACLS3_2">無</label></span>
                                                                      
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            二側胸部
                                                        </td>
                                                        <td class="edit">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS4_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS4" value="rdbACLS4_1" /><label for="ContentPlaceHolder1_rdbACLS4_1">皆有且對稱</label></span>
                                                                       
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS4_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS4" value="rdbACLS4_2" /><label for="ContentPlaceHolder1_rdbACLS4_2">單側不對稱</label></span>
                                                                       
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS4_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS4" value="rdbACLS4_3" /><label for="ContentPlaceHolder1_rdbACLS4_3">皆無</label></span>
                                                                      
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            ETCO2：
                                                        </td>
                                                        <td class="edit">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS5_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS5" value="rdbACLS5_1" /><label for="ContentPlaceHolder1_rdbACLS5_1">有波形或變色</label></span>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS5_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS5" value="rdbACLS5_2" /><label for="ContentPlaceHolder1_rdbACLS5_2">無使用或未有波形、變色</label></span>
                                                                      
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-2">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td class="edit">
                                                                        <table border="0" cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                                <td>
                                                                                 <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS21_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS21" value="rdbACLS21_1" onclick="showTxt(&#39;ContentPlaceHolder1_rdbACLS21_1&#39;,&#39;spanOther5&#39;);" /><label for="ContentPlaceHolder1_rdbACLS21_1">Epinephrine</label></span>
                                                                                   
                                                                                </td>
                                                                                <td>
                                                                                    <span id="spanOther5" style="display: none">：<input name="ctl00$ContentPlaceHolder1$txtACLS21_1" type="text" id="ContentPlaceHolder1_txtACLS21_1" class="text" />支</span>
                                                                                </td>
                                                                                <td>
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS21_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS21" value="rdbACLS21_2" onclick="showTxt(&#39;ContentPlaceHolder1_rdbACLS21_2&#39;,&#39;spanOther6&#39;);" /><label for="ContentPlaceHolder1_rdbACLS21_2">Amiodarone</label></span>
                                                                                   
                                                                                </td>
                                                                                <td>
                                                                                    <span id="spanOther6" style="display: none">：<input name="ctl00$ContentPlaceHolder1$txtACLS21_2" type="text" id="ContentPlaceHolder1_txtACLS21_2" class="text" />支</span>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td class="edit">
                                                                        <table border="0" cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                                <td>
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbACLS21_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbACLS21" value="rdbACLS21_3" onclick="showTxt(&#39;ContentPlaceHolder1_rdbACLS21_3&#39;,&#39;spanOther7&#39;);" /><label for="ContentPlaceHolder1_rdbACLS21_3">未執行ACLS給藥處置</label></span>
                                                                                   
                                                                                </td>
                                                                                <td>
                                                                                    <span id="spanOther7" style="display: none">，原因：
                                                                                        <input name="ctl00$ContentPlaceHolder1$txtACLS21_3" type="text" id="ContentPlaceHolder1_txtACLS21_3" class="text" /></span>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table width="87%" border="0" cellspacing="0" cellpadding="0" class="littletable">
                                                                <tr>
                                                                    <td>
                                                                        &nbsp;
                                                                    </td>
                                                                    <td>
                                                                        時間
                                                                    </td>
                                                                    <td>
                                                                        藥名
                                                                    </td>
                                                                    <td>
                                                                        劑量
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        第一次
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_1" type="text" id="ContentPlaceHolder1_txtACLS31_1" class="text" />
                                                                        
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_2" type="text" id="ContentPlaceHolder1_txtACLS31_2" class="text" />
                                                                        
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_3" type="text" id="ContentPlaceHolder1_txtACLS31_3" class="text" />
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        第二次
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_4" type="text" id="ContentPlaceHolder1_txtACLS31_4" class="text" />
                                                                       
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_5" type="text" id="ContentPlaceHolder1_txtACLS31_5" class="text" />
                                                                       
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_6" type="text" id="ContentPlaceHolder1_txtACLS31_6" class="text" />
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        第三次
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_7" type="text" id="ContentPlaceHolder1_txtACLS31_7" class="text" />
                                                                        
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_8" type="text" id="ContentPlaceHolder1_txtACLS31_8" class="text" />
                                                                       
                                                                    </td>
                                                                    <td>
                                                                     <input name="ctl00$ContentPlaceHolder1$txtACLS31_9" type="text" id="ContentPlaceHolder1_txtACLS31_9" class="text" />
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        第四次
                                                                    </td>
                                                                    <td>
                                                                     <input name="ctl00$ContentPlaceHolder1$txtACLS31_10" type="text" id="ContentPlaceHolder1_txtACLS31_10" class="text" />
                                                                       
                                                                    </td>
                                                                    <td>
                                                                     <input name="ctl00$ContentPlaceHolder1$txtACLS31_11" type="text" id="ContentPlaceHolder1_txtACLS31_11" class="text" />
                                                                      
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_12" type="text" id="ContentPlaceHolder1_txtACLS31_12" class="text" />
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        第五次
                                                                    </td>
                                                                    <td>
                                                                     <input name="ctl00$ContentPlaceHolder1$txtACLS31_13" type="text" id="ContentPlaceHolder1_txtACLS31_13" class="text" />
                                                                        
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_14" type="text" id="ContentPlaceHolder1_txtACLS31_14" class="text" />
                                                                       
                                                                    </td>
                                                                    <td>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtACLS31_15" type="text" id="ContentPlaceHolder1_txtACLS31_15" class="text" />
                                                                       
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-3">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <th class="edit">
                                                            其他給藥或線上醫療指導紀錄
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                         <textarea name="ctl00$ContentPlaceHolder1$txtACLS41" rows="6" cols="40" id="ContentPlaceHolder1_txtACLS41" class="text">
</textarea>
                                                           
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-4">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <th colspan="2" class="edit">
                                                                        呼吸
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td width="50%">
                                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase2_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase21" value="rdbUrgentCase2_1" /><label for="ContentPlaceHolder1_rdbUrgentCase2_1">呼吸次數過快(>30次/min)</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase2_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase21" value="rdbUrgentCase2_2" /><label for="ContentPlaceHolder1_rdbUrgentCase2_2">呼吸次數過慢(<10次/min)</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase2_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase21" value="rdbUrgentCase2_3" /><label for="ContentPlaceHolder1_rdbUrgentCase2_3">呼吸次數適中</label></span>
                                                                                   
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td width="50%">
                                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase2_11" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase211" value="rdbUrgentCase2_11" /><label for="ContentPlaceHolder1_rdbUrgentCase2_11">血氧濃度不正常(<95%)</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase2_12" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase211" value="rdbUrgentCase2_12" /><label for="ContentPlaceHolder1_rdbUrgentCase2_12">血氧濃度不正常(無法量測)</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase2_13" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase211" value="rdbUrgentCase2_13" /><label for="ContentPlaceHolder1_rdbUrgentCase2_13">血氧濃度正常(>=95%)</label></span>
                                                                                   
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                            <tr>
                                                                                <th class="edit">
                                                                                    心跳
                                                                                </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase3_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase31" value="rdbUrgentCase3_1" /><label for="ContentPlaceHolder1_rdbUrgentCase3_1">心跳過快(>140次/min)</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase3_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase31" value="rdbUrgentCase3_2" /><label for="ContentPlaceHolder1_rdbUrgentCase3_2">心跳過慢(<50次/min)</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase3_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase31" value="rdbUrgentCase3_3" /><label for="ContentPlaceHolder1_rdbUrgentCase3_3">心跳適中</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td>
                                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                            <tr>
                                                                                <th class="edit">
                                                                                    血壓
                                                                                </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase4_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase41" value="rdbUrgentCase4_1" /><label for="ContentPlaceHolder1_rdbUrgentCase4_1">血壓過高(收縮壓>=160mmHg)</label></span>
                                                                                   
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase4_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase41" value="rdbUrgentCase4_2" /><label for="ContentPlaceHolder1_rdbUrgentCase4_2">血壓過低(收縮壓<=90mmHg)</label></span>
                                                                                   
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase4_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase41" value="rdbUrgentCase4_3" /><label for="ContentPlaceHolder1_rdbUrgentCase4_3">血壓適中</label></span>
                                                                                   
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                            <tr>
                                                                                <th class="edit">
                                                                                    瞳孔
                                                                                </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase5_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase51" value="rdbUrgentCase5_1" /><label for="ContentPlaceHolder1_rdbUrgentCase5_1">瞳孔左右不等大小</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase5_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase51" value="rdbUrgentCase5_2" /><label for="ContentPlaceHolder1_rdbUrgentCase5_2">瞳孔對光無反應</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase5_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase51" value="rdbUrgentCase5_3" /><label for="ContentPlaceHolder1_rdbUrgentCase5_3">瞳孔對光有反應</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td>
                                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                            <tr>
                                                                                <th class="edit">
                                                                                    體溫
                                                                                </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase6_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase61" value="rdbUrgentCase6_1" /><label for="ContentPlaceHolder1_rdbUrgentCase6_1">體溫過高(>=38。C)</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase6_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase61" value="rdbUrgentCase6_2" /><label for="ContentPlaceHolder1_rdbUrgentCase6_2">體溫過低(<=35。C)</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase6_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase61" value="rdbUrgentCase6_3" /><label for="ContentPlaceHolder1_rdbUrgentCase6_3">體溫適中</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                            <tr>
                                                                                <th class="edit">
                                                                                    血糖
                                                                                </th>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase7_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase71" value="rdbUrgentCase7_1" /><label for="ContentPlaceHolder1_rdbUrgentCase7_1">血糖過高(>=200mg/dl)</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase7_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase71" value="rdbUrgentCase7_2" /><label for="ContentPlaceHolder1_rdbUrgentCase7_2">血糖過低(<=60mg/dl)</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="edit">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbUrgentCase7_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbUrgentCase71" value="rdbUrgentCase7_3" /><label for="ContentPlaceHolder1_rdbUrgentCase7_3">血糖適中</label></span>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-5">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <th colspan="4" class="edit">
                                                            疑似腦血管疾病測試
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                        <span id="ContentPlaceHolder1_chUrgentCase8"><input id="ContentPlaceHolder1_chUrgentCase8_0" type="checkbox" name="ctl00$ContentPlaceHolder1$chUrgentCase8$0" value="舉手測試不正常" /><label for="ContentPlaceHolder1_chUrgentCase8_0">舉手測試不正常  </label><input id="ContentPlaceHolder1_chUrgentCase8_1" type="checkbox" name="ctl00$ContentPlaceHolder1$chUrgentCase8$1" value="微笑測試不正常" /><label for="ContentPlaceHolder1_chUrgentCase8_1">微笑測試不正常  </label><input id="ContentPlaceHolder1_chUrgentCase8_2" type="checkbox" name="ctl00$ContentPlaceHolder1$chUrgentCase8$2" value="說話測試不正常" /><label for="ContentPlaceHolder1_chUrgentCase8_2">說話測試不正常  </label><input id="ContentPlaceHolder1_chUrgentCase8_3" type="checkbox" name="ctl00$ContentPlaceHolder1$chUrgentCase8$3" value="左列測試皆正常" /><label for="ContentPlaceHolder1_chUrgentCase8_3">左列測試皆正常</label></span>
                                                            
                                                        </td>
                                                        
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-6">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <th class="edit">
                                                            其他異常事項
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                         <textarea name="ctl00$ContentPlaceHolder1$txtUrgentCase9" rows="6" cols="40" id="ContentPlaceHolder1_txtUrgentCase9" class="text">
</textarea>
                                                           
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-7">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <td class="edit">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbBreatheHard_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbBreatheHard" value="rdbBreatheHard_1" onclick="showTxt(&#39;ContentPlaceHolder1_rdbBreatheHard_1&#39;,&#39;spanOther8&#39;);" /><label for="ContentPlaceHolder1_rdbBreatheHard_1">輔助呼吸道</label></span>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther8" style="display: none">：置入前 SPO2=
                                                                         <input name="ctl00$ContentPlaceHolder1$txtBreatheHard1" type="text" id="ContentPlaceHolder1_txtBreatheHard1" class="text" />
                                                                           
                                                                            %，置入後 SPO2=
                                                                             <input name="ctl00$ContentPlaceHolder1$txtBreatheHard2" type="text" id="ContentPlaceHolder1_txtBreatheHard2" class="text" />
                                                                            
                                                                            %</span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <table border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbBreatheHard_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbBreatheHard" value="rdbBreatheHard_2" onclick="showTxt(&#39;ContentPlaceHolder1_rdbBreatheHard_2&#39;,&#39;spanOther9&#39;);" /><label for="ContentPlaceHolder1_rdbBreatheHard_2">無置入輔助呼吸道</label></span>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther9" style="display: none">，原因
                                                                         <input name="ctl00$ContentPlaceHolder1$txtBreatheHard3" type="text" id="ContentPlaceHolder1_txtBreatheHard3" class="text" />
                                                                            </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <table>
                                                                <tr>
                                                                    <td class="edit">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbBreatheHard_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbBreatheHard" value="rdbBreatheHard_3" /><label for="ContentPlaceHolder1_rdbBreatheHard_3">正壓給氧無改善</label></span>
                                                                        
                                                                    </td>
                                                                    <td class="edit">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbBreatheHard_4" type="radio" name="ctl00$ContentPlaceHolder1$rdbBreatheHard" value="rdbBreatheHard_4" /><label for="ContentPlaceHolder1_rdbBreatheHard_4">正壓給氧有改善</label></span>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="edit">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbBreatheHard_5" type="radio" name="ctl00$ContentPlaceHolder1$rdbBreatheHard" value="rdbBreatheHard_5" /><label for="ContentPlaceHolder1_rdbBreatheHard_5">使用NRM有改善</label></span>
                                                                        
                                                                    </td>
                                                                    <td class="edit">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbBreatheHard_6" type="radio" name="ctl00$ContentPlaceHolder1$rdbBreatheHard" value="rdbBreatheHard_6" /><label for="ContentPlaceHolder1_rdbBreatheHard_6">使用氧氣面罩或鼻管有改善</label></span>
                                                                       
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_chBreatheHard1" type="checkbox" name="ctl00$ContentPlaceHolder1$chBreatheHard1" /><label for="ContentPlaceHolder1_chBreatheHard1">有明顯哮喘聲(wheezing)</label></span>
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                <tr>
                                                                    <td valign="top">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_chBreatheHard2" type="checkbox" name="ctl00$ContentPlaceHolder1$chBreatheHard2" onclick="showTxt(&#39;ContentPlaceHolder1_chBreatheHard2&#39;,&#39;spanOther10&#39;);" /><label for="ContentPlaceHolder1_chBreatheHard2">給予短效支氣管擴張</label></span>
                                                                       
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther10" style="display: none">
                                                                        <input name="ctl00$ContentPlaceHolder1$txtBreatheHard4" type="text" id="ContentPlaceHolder1_txtBreatheHard4" class="text" />
                                                                            dose，<br />
                                                                            第一次時間
                                                                            <input name="ctl00$ContentPlaceHolder1$txtBreatheHard5" type="text" id="ContentPlaceHolder1_txtBreatheHard5" class="text" />
                                                                            
                                                                            、第二次時間
                                                                            <input name="ctl00$ContentPlaceHolder1$txtBreatheHard6" type="text" id="ContentPlaceHolder1_txtBreatheHard6" class="text" />
                                                                            </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="editbtn">
                                        <img src="images/button_1_1.png" alt="上一頁" width="83" height="89" id="ibtnLeft3"
                                            onclick="MM_callJS('openDiv(2)')" onmouseover="MM_swapImage('ibtnLeft3','','images/button_1_2.png',1)"
                                            onmouseout="MM_swapImgRestore()" />
                                        <img src="images/button_2_1.png" alt="下一頁" width="85" height="89" id="ibtnRight3"
                                            onclick="MM_callJS('openDiv(4)')" onmouseover="MM_swapImage('ibtnRight3','','images/button_2_2.png',1)"
                                            onmouseout="MM_swapImgRestore()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="step4">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <table width="94%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <div id="tabs6">
                                            <ul>
                                                <li><a href="#tabs-1">胸痛/胸悶....</a></li>
                                                <li><a href="#tabs-2">上傳心電圖或補述事項</a></li>
                                                <!--<li><a href="#tabs-3">救護人員簽名</a></li>-->
                                                <li><a href="#tabs-4">醫護人員簽名</a></li>
                                            </ul>
                                            <div id="tabs-1">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <th class="edit">
                                                            心律臆斷
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <table width="100%">
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_1" /><label for="ContentPlaceHolder1_rdbHeartDecision_1">Normal Sinus Rhythm</label></span>
                                                                       
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_2" /><label for="ContentPlaceHolder1_rdbHeartDecision_2">ST段上升</label></span>
                                                                        
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_3" /><label for="ContentPlaceHolder1_rdbHeartDecision_3">ST段下降</label></span>
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_4" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_4" /><label for="ContentPlaceHolder1_rdbHeartDecision_4">Sinus Tachycardia</label></span>
                                                                       
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_5" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_5" /><label for="ContentPlaceHolder1_rdbHeartDecision_5">PSVT</label></span>
                                                                      
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_6" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_6" /><label for="ContentPlaceHolder1_rdbHeartDecision_6">單型性VT</label></span>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_7" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_7" /><label for="ContentPlaceHolder1_rdbHeartDecision_7">Atrial Flutter</label></span>
                                                                      
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_8" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_8" /><label for="ContentPlaceHolder1_rdbHeartDecision_8">Atrial fibrillation</label></span>
                                                                       
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_9" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_9" /><label for="ContentPlaceHolder1_rdbHeartDecision_9">多型性VT/VF</label></span>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_10" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_10" /><label for="ContentPlaceHolder1_rdbHeartDecision_10">Torsades de pointes</label></span>
                                                                        
                                                                    </td>
                                                                    <td colspan="2">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_11" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_11" /><label for="ContentPlaceHolder1_rdbHeartDecision_11">不確定窄QRS波形Tachycardia</label></span>
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_12" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_12" /><label for="ContentPlaceHolder1_rdbHeartDecision_12">不確定寬QRS波形Tachycardia</label></span>
                                                                       
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_13" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_13" /><label for="ContentPlaceHolder1_rdbHeartDecision_13"> Sinus Bradycardia</label></span>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_14" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_14" /><label for="ContentPlaceHolder1_rdbHeartDecision_14">1。AV Block</label></span>
                                                                      
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_15" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_15" /><label for="ContentPlaceHolder1_rdbHeartDecision_15">2。AV Block</label></span>
                                                                      
                                                                    </td>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_16" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_16" /><label for="ContentPlaceHolder1_rdbHeartDecision_16">2。2 AV Block</label></span>
                                                                     
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_17" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_17" /><label for="ContentPlaceHolder1_rdbHeartDecision_17">3。AV Block</label></span>
                                                                       
                                                                    </td>
                                                                    <td colspan="2">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_18" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_18" /><label for="ContentPlaceHolder1_rdbHeartDecision_18">不確定波形Bradycardia</label></span>
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_19" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_19" /><label for="ContentPlaceHolder1_rdbHeartDecision_19">其他波形</label></span>
                                                                      
                                                                    </td>
                                                                    <td colspan="2">
                                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td valign="top">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartDecision_20" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartDecision" value="rdbHeartDecision_20" onclick="showTxt(&#39;ContentPlaceHolder1_rdbHeartDecision_20&#39;,&#39;spanOther11&#39;);" /><label for="ContentPlaceHolder1_rdbHeartDecision_20">無使用心律監視器</label></span>
                                                                                 
                                                                                </td>
                                                                                <td>
                                                                                    <span id="spanOther11" style="display: none">
                                                                                     <input name="ctl00$ContentPlaceHolder1$txtHeartDecision" type="text" id="ContentPlaceHolder1_txtHeartDecision" class="text" />
                                                                                        </span>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="edit">
                                                            胸痛患者藥物處置
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <td class="edit">
                                                                        患者有無口服錠劑血小皮凝集抑制劑禁忌症：
                                                                    </td>
                                                                    <td class="edit">
                                                                    <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartMedicine_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartMedicine" value="rdbHeartMedicine_1" /><label for="ContentPlaceHolder1_rdbHeartMedicine_1">有禁忌症</label></span>
                                                                       
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartMedicine_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartMedicine" value="rdbHeartMedicine_2" /><label for="ContentPlaceHolder1_rdbHeartMedicine_2">無禁忌症</label></span>
                                                                       
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2" class="edit">
                                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                                            <tr>
                                                                                <td valign="top">
                                                                                <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbHeartMedicine_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbHeartMedicine" value="rdbHeartMedicine_3" onclick="showTxt(&#39;ContentPlaceHolder1_rdbHeartMedicine_3&#39;,&#39;spanOther12&#39;);" /><label for="ContentPlaceHolder1_rdbHeartMedicine_3">給予Asprin</label></span>
                                                                                
                                                                                </td>
                                                                                <td>
                                                                                    <span id="spanOther12" style="display: none">：300 mg，時間
                                                                                     <input name="ctl00$ContentPlaceHolder1$txtHeartMedicine" type="text" id="ContentPlaceHolder1_txtHeartMedicine" class="text" />
                                                                                       </span>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-2">
                                                <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                    <tr>
                                                        <th>
                                                            上傳心電圖：
                                                        </th>
                                                        <td class="edit">
                                                             <input type="file" name="ctl00$ContentPlaceHolder1$file1" id="ContentPlaceHolder1_file1" />
                                                              <a id="ContentPlaceHolder1_Hyk1"></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            補述事項：
                                                        </th>
                                                        <td class="edit">
                                                        <textarea name="ctl00$ContentPlaceHolder1$txtMEMO" rows="4" cols="40" id="ContentPlaceHolder1_txtMEMO" class="text">
</textarea>
                                                            
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <!--<div id="tabs-3">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <th class="edit">救護人員簽名</th>
                                                    </tr>
                                                    <tr><td><p>&nbsp;</p></td></tr>
                                                    <tr>
                                                        <td class="littletable">
                                    	<table width="87%" border="1" cellspacing="0" cellpadding="0">
                                          <tr>
                                            <td>簽名</td>
                                            <td>EMT</td>
                                          </tr>
                                          <tr>
                                            <td><input name="" type="text" size="40" /></td>
                                            <td><select name="">
                                             	<option value="0">P</option>
                                    			<option value="1">2</option>
                                    			<option value="1">1</option>
                                            </select></td>
                                          </tr>
                                          <tr>
                                            <td><input name="" type="text" size="40" /></td>
                                            <td><select name="">
                                             	<option value="0">P</option>
                                    			<option value="1">2</option>
                                    			<option value="1">1</option>
                                            </select></td>
                                          </tr>
                                          <tr>
                                            <td><input name="" type="text" size="40" /></td>
                                            <td><select name="">
                                             	<option value="0">P</option>
                                    			<option value="1">2</option>
                                    			<option value="1">1</option>
                                            </select></td>
                                          </tr>
                                          <tr>
                                            <td><input name="" type="text" size="40" /></td>
                                            <td><select name="">
                                             	<option value="0">P</option>
                                    			<option value="1">2</option>
                                    			<option value="1">1</option>
                                            </select></td>
                                          </tr>
                                        </table><p>&nbsp;</p>
                                    </td>
                                                    </tr>
                                                </table>
                                            </div>-->
                                            <div id="tabs-4">
                                                <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                    <tr>
                                                        <th>
                                                            送達醫院醫護人員簽名：
                                                        </th>
                                                        <td class="edit">
                                                        <input name="ctl00$ContentPlaceHolder1$txtSign1" type="text" id="ContentPlaceHolder1_txtSign1" class="text" />
                                                            
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>
                                                            醫療指導醫師簽名：
                                                        </th>
                                                        <td class="edit">
                                                        <input name="ctl00$ContentPlaceHolder1$txtSign2" type="text" id="ContentPlaceHolder1_txtSign2" class="text" />
                                                            
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="editbtn">
                                       <input type="image" name="ctl00$ContentPlaceHolder1$ibtnSave" id="ContentPlaceHolder1_ibtnSave" onmouseover="MM_swapImage(&#39;ContentPlaceHolder1_ibtnSave&#39;,&#39;&#39;,&#39;images/btn_save_2.png&#39;,1)" onmouseout="MM_swapImgRestore()" src="images/btn_save_1.png" style="height:64px;width:100px;" />
                                          <img src="images/btn_cancel_1.png" alt="取消" width="99" height="64" id="ibtnCancel"
                                            onclick="MM_goToURL('parent','special_list.html');return document.MM_returnValue"
                                            onmouseover="MM_swapImage('ibtnCancel','','images/btn_cancel_2.png',1)" onmouseout="MM_swapImgRestore()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="editbtn">
                                        <img src="images/button_1_1.png" alt="上一頁" width="83" height="89" id="ibtnLeft4"
                                            onclick="MM_callJS('openDiv(3)')" onmouseover="MM_swapImage('ibtnLeft4','','images/button_1_2.png',1)"
                                            onmouseout="MM_swapImgRestore()" />
                                        <img src="images/button_2_2.png" alt="下一頁" width="85" height="89" id="ibtnRight4"
                                            onmouseover="MM_swapImage('ibtnRight4','','images/button_2_2.png',1)" onmouseout="MM_swapImgRestore()" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    
 
                <div id="footer">
                    <p>
                        本局地址：(22060)新北市板橋區南雅南路二段15號 電話：02-89519119 傳真：02-22514761 廉政熱線：02-89535870<br />
                        本網站為新北市政府消防局版權所有，未經允許，不得以任何形式複製和採用 &copy; 2013 | All Rights Reserved改作
                    </p>
                </div>
            </div>
        
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="E7590527" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAJ4B/3Vqe4tK4hQxikOHq+u2xPXXtJ/AyYJHgbKtDfBIpN1oVcS7ke0ooT5dv2LQ3UoXg6cty9MN9X4Ut7M/Mgoqb0Ljn35R+AljRJqXUXRys07TBYSjw7a2nNg6avee2Wx1PPp6IsF1WkcZz5R17h0Vz/ZIXqEkxuf1tK/OgEgpXWRzgjj1yPGEj7r4DYVHtYgNB1WGgKxDQk6p1Zw6IE9X/uGfH0G8EK0BD6WUoWoJnonxrPOEgvRvxyLtuWT0zPpvaU8xxCjY72mL6nVbixfVW9x5sVWxLZBGGWdjWmkhLvU7iDtqH34X5XR8AGDRFbbi7w4ovD0bljS0xhFwAJbp8znqGp5ym84NvzR+NrelKjYJg1GrNXa6sp2W05UFUVg9Oz5t79wVox4nxR5S5siH4gh/Tx6Stwuf28UG0PrRgFbtbj3YeOT1PerbxHoTq8J2fJWtkDwoxQSNxSvfzWAgr0cGfUCgidmqbef5Rbb70Lo/CtmW9JtNLsmFVYR/NGDEHREpHGbSY5Ds6PMpA91rauVfeCAYJNPGjGubiLcmC7HDaiZdEzsDe+iPL9poA7E00fDcl/7RchYeZK6BDF2pKVcogJfDUxKQrTL7a5EZGYtKBv9ouolOqTf5Mb2omAmCbVzXrKk7gc94tmBoONfsS4cE+monK8KmDCXaPoQPDtNprP55GSsmd5Ks7aLEuaxXvfAxYvqRfggi2tW3wvr4Tx6N/i7mc6GR4Qs1ploTSnvTY4KtXxmE7tvfMMKoX99yJzfdx022yh2rq/FWry+GOrSVpy/KNUR2KLouQ7o7xGUVzr5GVzdsOwf6325iVjrmEM4OBPEK7gNOA3WKtXaMJKcB0ge60zULj1l2PzhR0r5Ryq/lvToc8uBDq3yQvZp5L1r+v5Hzi+tOBBElTG9jAMAMg7HV2DR/rIWoHp6uiOV/NQnBnm49xk9Jeg3doPjmIh9KDUA9/eZn9ZRy6+SmF8jEokGpuyR3juxNEX3O3NK1PDHD1rO+XojNVJyH8bBb5yaZKMzcCgPuSGaZSVDxG2m0F/AI1t4ex0xMcF9mI6ORy+JP8Wfl2ZVoyV1ofxCPIGERk3NPiMfdiV6QX0Tgc1rhHRrbGyNcQ4vEsJa7HG9CiKPhuD1XX7Hb0pKCVTVYN1U4rdVpUPCFfiaSntj59bg+xJ4GOQkHfc8lqTcO4O6s5PdX2jEU8YXtBVzPww8S+4rOOmbH5lqPiIvxZ4iYHrkfKvX08oFWgT0YlUYsUWWN5atpZUy36+sO0RlB/QAyHQHaQLZvh7V24ZuWV/65QCqZ8PfcZmyCEvVGr4zL+XbH3SbGpq6afE2HNTzMr80jFgbAKwM/0jwMuTxkzR674itNyi+YkAiRH/oFtxuIgLQwuSmlUGmBbLQ6ISVBa6KMgf8U4CpV6z+aqYOhqUfijhfRLBaRCAs6XcpVe62ij68/MMwjjIuvO1av2zYvxyPUxKVmFVxEklx+TUdy2JFAp6vOACqoIDCWG6JJK/lTmdyqozuBkzvssKupr+DRiN3bthfBumLgApVVMzz5qVql5QFcB1nRd7LOLkgkhhn34/PN2Flin5GBu9M2B6Kik1IXQEkmvvQpCcKr+SRPptUaCn8TdDO2MutjdAW9DytQVvDpBR8t6mDdr8cdr2xgEaMKrcZCycDHu8jk1Y2uCFddCSMz53MB0ex5Z+6VReKqVT34NoJMfR2XihAIG9UkaoGRm7jzWRV3j+Uuy6H/J+0CwI2lG3FacANrKlIa75e44EdANxmnL3w3LbrPlgIRXzWPrzGURILYgSL3Anzie08U4CnPMY36NoXS7ZwEdllrmTlgT9wwSk/gioVk51frqKzQvsqY0G9eO9jthGnHEN/zu7dx/WoM77hxnJb1BSVgpiOiV1i1Ta7WjGM/p7N4GZHPOvS5NTh+/MDq01wo4JwELWLeRtNEUlxJFVxysQHHS/qMmsEK7ITUbzz+UIws6+s58VVaE3pxribdRw8az+lVmgMKgbHJb0+tSfdMX6pOj5mSYOmQplEAP2GtwyLQM/qDA8jtkBwx6a+D4pCAnnOyuYUArsAE1HNNWIhyLGo+A35a2yjuS92L1TvLTAfepW3ePI3Crgl1S5yQurC7W68beDTSxSxfVtY/9xQJyASTLvRi7Ql2ISFSTn10mPUDy9ND7Kuy4lOCxRoGVoIVfemjFA+Z7sFrnwMT/0IcjBVFPxbf95v+4LwnBdLdptvJ9b7RlKwJGEm/b3UWet+m7ILmmyDY9icCu+zn5W6AVUVy02cPuO812SqmipN9FIDvfun0I8K0wQkGuTxJ5UrBqtC/52/OW6pk9UqtcDeaj58Ut3UiFZt0gb56LpsFcyHE9obqkfzUqBfBSG69lYvhM8AWRu8Q79gTs0A/EN58+SK/U5J0RkGCViV6mQ/PO8k2kgowKrBUYMyg9s24vt5d7o6Nr66WwuzHGhBoTwFlgzROfKdXC50hdiWBslBHtJdlclqOTvcXOj3NzUBarVbJ38keYjbd9wbPQLIka7dw9MG2y54EJrbOoubN5TXBL64WCZK6P4bTzT/6bfulE7E99NUl3GqzTaeeqPNnLHf7T5X2CoH53mKCeW5iRpBQ2cBpXgnavh75ZvlBjkqj0HrV+M7Bsxrjk+RJh/XApgnAN1rz7l9UGvn/3jC8NnEtl4JqIvRKUyB1bv2SybRgkvQZGWl6eXmK0TqNEd2Ro/XbdtLOsocZU3lAsxAJbrbFZ7A0BfDgpybvTd22dSWfmsvagT/T7X7JUKaf4/1QWS5qAdfu1Vs5OfCS0p5le3CCcu6+vS4qAYYFXs+KkvDcRzsz4/h7BZZTcmzvW7q7QMaZGa4mfLyjtLTi5Na1EXQjM/eBdAkqx42Lo1Ywl7u+0dxdY9g+u5YdjRZAeWff1uvmzWZ7F4JcqLY75GVwlRztlEWOET+Lmfhk3EtlOxkGpSCwplsXU91qC/Bz5KsUh9D4igFu/n3YdHUr/RjdEodk2Ul05pgh4/oga7yPrlKY4YmdD9XZuakhw0GkGT5RQSsaqLdm40TMXIF7+kwSG7RIMF3KlFW6j2f7P/1LyauIXcrWMoy6ZFruwv2LcivjfmokvcRi5eoyTEmHfNIdl6MVseOloej6YGmcd/lebmO6TmCh0PLqMQhzaUSvkO8Hz3F7mUbCvMGBlGIREqV/PfYovs8ePK/nmwl4MfQ+kMLmUNf6KUa2UGOyniXq988meGJcMgjOMP8Chrtdgpr9HZm4bwAo5QsCYWzFcoxgUivGXcR7ZsWIf+fzBJEfhnRRONcztWfNpTM7sogxp7CQ9ZSVMvpJQDeV89GCMuBr39a5OFeI3YiUE9Y971V+sQXEOhid0b2nLvST2fvc4LbcEsjWc7cgGG+vDV/bcAxOBQQCHQelwrn68w==" />
</div></form>
    
<!-- Visual Studio Browser Link -->
<script type="application/json" id="__browserLink_initializationData">
    {"appName":"Microsoft Edge","requestId":"94e792d5a3c3498882c01be9af2fca07"}
</script>
<script type="text/javascript" src="http://localhost:49963/117e1a67180c44bd91c37733a9a2d106/browserLink" async="async"></script>
<!-- End Browser Link -->

</body>
</html>