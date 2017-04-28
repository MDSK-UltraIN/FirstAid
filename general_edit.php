

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
    <link rel="stylesheet" href="css/themes/base/jquery.ui.all.css" type="text/css" />
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
            $("#imgStep2").attr("src", "images/sidemenu_2_1.png");
            $("#imgStep3").attr("src", "images/sidemenu_3_1.png");
            $("#imgStep4").attr("src", "images/sidemenu_4_1.png");

            switch (divno) {
                case 1:
                    $("#step1").css("display", "block");
                    $("#imgStep1").attr("src", "images/sidemenu_1_2.png");
                    $("#imgStep1").attr("onmouseout", "MM_swapImage('imgStep1','','images/sidemenu_1_2.png',1)");
                    break;
                case 2:
                    $("#step2").css("display", "block");
                    $("#imgStep2").attr("src", "images/sidemenu_2_2.png");
                    $("#imgStep2").attr("onmouseout", "MM_swapImage('imgStep2','','images/sidemenu_2_2.png',1)");
                    break;
                case 3:
                    $("#step3").css("display", "block");
                    $("#imgStep3").attr("src", "images/sidemenu_3_2.png");
                    $("#imgStep3").attr("onmouseout", "MM_swapImage('imgStep3','','images/sidemenu_3_2.png',1)");
                    break;
                case 4:
                    $("#step4").css("display", "block");
                    $("#imgStep4").attr("src", "images/sidemenu_4_2.png");
                    $("#imgStep4").attr("onmouseout", "MM_swapImage('imgStep4','','images/sidemenu_4_2.png',1)");
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

        function getSysTime(vSpan, vHid, vLib) {
            today = new Date();
            today_year = today.getFullYear() - 1911;
            today_month = lpad(today.getMonth() + 1, 2);
            today_date = lpad(today.getDate(), 2);
            today_day = lpad(today.getDay(), 2);
            today_hour = lpad(today.getHours(), 2);
            today_minute = lpad(today.getMinutes(), 2);

            $(eval("'#" + vSpan + "'")).html(today_hour + ":" + today_minute);
            //$("#span2").html(today_hour + ":" + today_minute);
            document.getElementById(vHid).value = today_hour + ":" + today_minute;
            document.getElementById(vLib).innerText = "";
        }

        function getSysDate(vSpan, vHid, vLib) {
            today = new Date();
            today_year = today.getFullYear() - 1911;
            today_month = lpad(today.getMonth() + 1, 2);
            today_date = lpad(today.getDate(), 2);
            today_day = lpad(today.getDay(), 2);
            today_hour = lpad(today.getHours(), 2);
            today_minute = lpad(today.getMinutes(), 2);

            $(eval("'#" + vSpan + "'")).html(today_year + "/" + today_month + "/" + today_date);
            document.getElementById(vHid).value = today_year + "/" + today_month + "/" + today_date;
            document.getElementById(vLib).innerText = "";
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

		function jsGetTextFromFlash(str) {
            var divElement = document.getElementById("ContentPlaceHolder1_txtInjuredArea");

            if (divElement.value == "") {
                divElement.value = str;
            } else {
                divElement.value = divElement.value + "、" + str;
            }
        } 
    </script>
</head>
    <body onload="MM_preloadImages('images/btn_qry_2.png','images/btn_add_2.png','images/sidemenu_8_2.png','images/sidemenu_9_2.png','images/head_menu_2_2.png')">
        <form method="post" action="./general_edit.aspx" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTYyNDIwOTU0MQ9kFgJmD2QWAgIDD2QWAgIDD2QWAgIVD2QWAmYPZBYCAgcPEGRkFgBkGAEFHl9fQ29udHJvbHNSZXF1aXJlUG9zdEJhY2tLZXlfXxbQAQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JEaXNwYXRjaFJlYXNvbgUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbERlc2NyaWJlXzEFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsRGVzY3JpYmVfMgUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbERlc2NyaWJlXzMFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsRGVzY3JpYmVfMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV80BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbERlc2NyaWJlXzQFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsRGVzY3JpYmVfNQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV81BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbERlc2NyaWJlXzYFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsRGVzY3JpYmVfNgUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV83BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbERlc2NyaWJlXzcFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsRGVzY3JpYmVfOAUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV84BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbERlc2NyaWJlXzkFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsRGVzY3JpYmVfOQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xMAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xMAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xMQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xMQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xMgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xMgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xMwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xMwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xNAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xNAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xNQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xNQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xNgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xNgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xNwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xNwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xOAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xOAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xOQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8xOQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yMAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yMAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yMQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yMQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yMgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yMgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yMwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yMwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yNAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yNAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yNQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yNQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yNgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yNgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yNwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yNwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yOAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yOAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yOQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8yOQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zMAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zMAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zMQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zMQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zMgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zMgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zMwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zMwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zNAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zNAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zNQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zNQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zNgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zNgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zNwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zNwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zOAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxEZXNjcmliZV8zOAUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzEFKWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsUmVsYXRlZF8xBSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfMgUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzIFKWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsUmVsYXRlZF8zBSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfMwUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzQFKWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsUmVsYXRlZF80BSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfNQUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzUFKWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsUmVsYXRlZF82BSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfNgUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzcFKWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsUmVsYXRlZF83BSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfOAUpY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzgFKWN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsUmVsYXRlZF85BSljdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfOQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzEwBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfMTAFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsUmVsYXRlZF8xMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzExBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfMTIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsUmVsYXRlZF8xMgUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzEzBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfMTMFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsUmVsYXRlZF8xNAUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzE0BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfMTUFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkcmRiSWxsUmVsYXRlZF8xNQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRyZGJJbGxSZWxhdGVkXzE2BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYklsbFJlbGF0ZWRfMTYFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiTm9UcmFmZmljUmVsYXRlZF80BS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYk5vVHJhZmZpY1JlbGF0ZWRfNQUvY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JOb1RyYWZmaWNSZWxhdGVkXzYFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiTm9UcmFmZmljUmVsYXRlZF83BS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYk5vVHJhZmZpY1JlbGF0ZWRfOAUvY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JOb1RyYWZmaWNSZWxhdGVkXzkFMGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiTm9UcmFmZmljUmVsYXRlZF8xMAUwY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JOb1RyYWZmaWNSZWxhdGVkXzExBTBjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYk5vVHJhZmZpY1JlbGF0ZWRfMTIFMGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiTm9UcmFmZmljUmVsYXRlZF8xMwUwY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JOb1RyYWZmaWNSZWxhdGVkXzE0BTBjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYk5vVHJhZmZpY1JlbGF0ZWRfMTUFMGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiTm9UcmFmZmljUmVsYXRlZF8xNgUvY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JJcnJpdGFibGVIaXN0b3J5XzMFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiSXJyaXRhYmxlSGlzdG9yeV80BS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYklycml0YWJsZUhpc3RvcnlfNQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JTaWNrSGlzdG9yeV8xBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYlNpY2tIaXN0b3J5XzIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiU2lja0hpc3RvcnlfMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JTaWNrSGlzdG9yeV80BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYlNpY2tIaXN0b3J5XzUFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiU2lja0hpc3RvcnlfNgUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JTaWNrSGlzdG9yeV83BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYlNpY2tIaXN0b3J5XzgFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiU2lja0hpc3RvcnlfOQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JTaWNrSGlzdG9yeV8xMAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JTaWNrSGlzdG9yeV8xMQUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JTaWNrSGlzdG9yeV8xMgUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JTaWNrSGlzdG9yeV8xMwUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JTaWNrSGlzdG9yeV8xNAUrY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JTaWNrSGlzdG9yeV8xNQUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JJbnRlbnNpdmVDYXJlXzEFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiSW50ZW5zaXZlQ2FyZV8yBSxjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkludGVuc2l2ZUNhcmVfMwUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JJbnRlbnNpdmVDYXJlXzQFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiSW50ZW5zaXZlQ2FyZV81BSxjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkludGVuc2l2ZUNhcmVfNgUsY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JJbnRlbnNpdmVDYXJlXzcFLGN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiSW50ZW5zaXZlQ2FyZV84BS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkludGVuc2l2ZUNhcmVfOV8xBS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkludGVuc2l2ZUNhcmVfOV8xBS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkludGVuc2l2ZUNhcmVfOV8yBS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJHJkYkludGVuc2l2ZUNhcmVfOV8yBSZjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkJyZWF0aGVfMQUmY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JCcmVhdGhlXzIFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiQnJlYXRoZV8zBSZjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkJyZWF0aGVfNAUmY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JCcmVhdGhlXzUFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiQnJlYXRoZV82BSZjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkJyZWF0aGVfNwUmY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JCcmVhdGhlXzgFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiQnJlYXRoZV85BSJjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibElsbCQwBSJjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibElsbCQxBSJjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibElsbCQyBSJjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibElsbCQzBSJjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibElsbCQ0BSJjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibElsbCQ1BSJjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibElsbCQ1BSZjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibEdlbmVyYWwkMAUmY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRjYmxHZW5lcmFsJDEFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JsR2VuZXJhbCQyBSZjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibEdlbmVyYWwkMwUmY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRjYmxHZW5lcmFsJDQFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JsR2VuZXJhbCQ1BSZjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibEdlbmVyYWwkNgUmY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRjYmxHZW5lcmFsJDcFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JsR2VuZXJhbCQ3BSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibENvbmRpdGlvbl8xJDAFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JsQ29uZGl0aW9uXzEkMQUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRjYmxDb25kaXRpb25fMSQyBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibENvbmRpdGlvbl8xJDMFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JsQ29uZGl0aW9uXzEkMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRjYmxDb25kaXRpb25fMiQwBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibENvbmRpdGlvbl8yJDEFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JsQ29uZGl0aW9uXzIkMgUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRjYmxDb25kaXRpb25fMiQzBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibENvbmRpdGlvbl8yJDMFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JsQ29uZGl0aW9uXzMkMAUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRjYmxDb25kaXRpb25fMyQxBSpjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNibENvbmRpdGlvbl8zJDIFKmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JsQ29uZGl0aW9uXzMkMwUqY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRjYmxDb25kaXRpb25fMyQzBShjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYlNraW5Db2xvcl83BShjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYlNraW5Db2xvcl84BSJjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkFncmVlBS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkNvbnN1bU1hdGVyaWFsc18xBS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkNvbnN1bU1hdGVyaWFsc18yBS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkNvbnN1bU1hdGVyaWFsc18zBS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkNvbnN1bU1hdGVyaWFsc180BS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkNvbnN1bU1hdGVyaWFsc181BS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkNvbnN1bU1hdGVyaWFsc182BS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkNvbnN1bU1hdGVyaWFsc183BS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkNvbnN1bU1hdGVyaWFsc184BS5jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkNvbnN1bU1hdGVyaWFsc185BS9jdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGNrYkNvbnN1bU1hdGVyaWFsc18xMAUvY3RsMDAkQ29udGVudFBsYWNlSG9sZGVyMSRja2JDb25zdW1NYXRlcmlhbHNfMTEFL2N0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2tiQ29uc3VtTWF0ZXJpYWxzXzEyBSJjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJGlidG5TYXZlnrfst2CJGF8jbxlMgM5pLz8x5aGDg9DtEVo0+A7Nm90=" />
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
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'form1', ['fctl00$ContentPlaceHolder1$UpdatePanel1','ContentPlaceHolder1_UpdatePanel1','fctl00$ContentPlaceHolder1$UpdatePanel2','ContentPlaceHolder1_UpdatePanel2','fctl00$ContentPlaceHolder1$UpdatePanel3','ContentPlaceHolder1_UpdatePanel3'], ['ctl00$ContentPlaceHolder1$btnDutyTime','ContentPlaceHolder1_btnDutyTime','ctl00$ContentPlaceHolder1$btnArriveTime','ContentPlaceHolder1_btnArriveTime','ctl00$ContentPlaceHolder1$btnExitTime','ContentPlaceHolder1_btnExitTime','ctl00$ContentPlaceHolder1$btnArriveTime2','ContentPlaceHolder1_btnArriveTime2','ctl00$ContentPlaceHolder1$btnExitTime2','ContentPlaceHolder1_btnExitTime2','ctl00$ContentPlaceHolder1$btnReturnTime','ContentPlaceHolder1_btnReturnTime','ctl00$ContentPlaceHolder1$btnOccurTime','ContentPlaceHolder1_btnOccurTime','ctl00$ContentPlaceHolder1$rblPatientAddr','ContentPlaceHolder1_rblPatientAddr','ctl00$ContentPlaceHolder1$btnFollowUpTime','ContentPlaceHolder1_btnFollowUpTime'], [], 90, 'ctl00');
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
                                <a href="general_list.php">回列表</a>
                            </td>
                        </tr>
                    </table>
                    <div id="header-Menu">
                        <img src="images/head_menu_1_2.png" alt="一般表" width="116" height="37" id="imgMenuGeneral" 
                        onclick="MM_goToURL('parent','general_edit.aspx');return document.MM_returnValue" 
                        onmouseover="MM_swapImage('imgMenuGeneral','','images/head_menu_1_2.png',1)" 
                        onmouseout="MM_swapImgRestore()" /><img
                            src="images/head_menu_2_1.png" alt="特殊表" width="96" height="37" id="imgMenuSpecial"
                            onclick="MM_goToURL('parent','special_edit.php');return document.MM_returnValue"
                            onmouseover="MM_swapImage('imgMenuSpecial','','images/head_menu_2_2.png',1)"
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
                    <img src="images/sidemenu_2_1.png" alt="病人主訴與病史" width="157" height="74" id="imgStep2"
                        onclick="openDiv(2)" onmouseover="MM_swapImage('imgStep2','','images/sidemenu_2_2.png',1)"
                        onmouseout="MM_swapImgRestore()" />
                </li>
                <li>
                    <img src="images/sidemenu_3_1.png" alt="生命徵象" width="157" height="75" id="imgStep3"
                        onclick="openDiv(3)" onmouseover="MM_swapImage('imgStep3','','images/sidemenu_3_2.png',1)"
                        onmouseout="MM_swapImgRestore()" />
                </li>
                <li>
                    <img src="images/sidemenu_4_1.png" alt="醫療機構及簽名" width="157" height="75" id="imgStep4"
                        onclick="openDiv(4)" onmouseover="MM_swapImage('imgStep4','','images/sidemenu_4_2.png',1)"
                        onmouseout="MM_swapImgRestore()" />
                </li>
            </ul>
        </div>
        <div id="content">
            <div id="path">
                <p>
                    首頁>一般表編輯</p>
                &nbsp;
            </div>
            <div id="formno">
                第
                <span id="ContentPlaceHolder1_lblDutyOrg"></span>
                分隊 表單編號：<span id="ContentPlaceHolder1_lblFormNo"></span>
                <br />
            </div>
            <div id="step1">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <table width="94%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td>
                                        <div id="tabs5">
                                            <ul>
                                                <li><a href="#tabs-1">出勤資料</a></li>
                                                <li><a href="#tabs-2">相關時間</a></li>
                                                <li><a href="#tabs-3">發生時間</a></li>
                                                <li><a href="#tabs-4">患者資料</a></li>
                                            </ul>
                                            <div id="tabs-1">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <th colspan="2" class="edit">
                                                            派遣原因：
                                                        </th>
                                                        <th class="edit">
                                                            發生地區：<span id="span1"></span>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="edit">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td colspan="5">
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbDispatchReason" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbDispatchReason" /><label for="ContentPlaceHolder1_ckbDispatchReason">支援派遣</label></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table id="ContentPlaceHolder1_rblDispatchReason" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_rblDispatchReason_0" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchReason" value="急病" /><label for="ContentPlaceHolder1_rblDispatchReason_0">急病</label></td><td><input id="ContentPlaceHolder1_rblDispatchReason_1" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchReason" value="OHCA" /><label for="ContentPlaceHolder1_rblDispatchReason_1">OHCA</label></td><td><input id="ContentPlaceHolder1_rblDispatchReason_2" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchReason" value="交通" /><label for="ContentPlaceHolder1_rblDispatchReason_2">交通</label></td><td><input id="ContentPlaceHolder1_rblDispatchReason_3" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchReason" value="創傷" /><label for="ContentPlaceHolder1_rblDispatchReason_3">創傷</label></td><td><input id="ContentPlaceHolder1_rblDispatchReason_4" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchReason" value="急產" /><label for="ContentPlaceHolder1_rblDispatchReason_4">急產</label></td>
	</tr><tr>
		<td><input id="ContentPlaceHolder1_rblDispatchReason_5" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchReason" value="行為" /><label for="ContentPlaceHolder1_rblDispatchReason_5">行為</label></td><td><input id="ContentPlaceHolder1_rblDispatchReason_6" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchReason" value="路倒" /><label for="ContentPlaceHolder1_rblDispatchReason_6">路倒</label></td><td><input id="ContentPlaceHolder1_rblDispatchReason_7" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchReason" value="火警" /><label for="ContentPlaceHolder1_rblDispatchReason_7">火警</label></td><td><input id="ContentPlaceHolder1_rblDispatchReason_8" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchReason" value="轉院" /><label for="ContentPlaceHolder1_rblDispatchReason_8">轉院</label></td><td><input id="ContentPlaceHolder1_rblDispatchReason_9" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchReason" value="其他" /><label for="ContentPlaceHolder1_rblDispatchReason_9">其他</label></td>
	</tr>
</table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td class="edit">
                                                            <span id="ContentPlaceHolder1_lblOccurCode"></span>
                                                            <input id="btn1_1_0" name="btn1_1_1" type="button" value="定位" class="btn" onclick="getXY()" onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="edit">
                                                            出勤梯次：
                                                            <input name="ctl00$ContentPlaceHolder1$txtDutyEchelon" type="text" maxlength="3" id="ContentPlaceHolder1_txtDutyEchelon" size="10" OnKeyPress="txtKeyNumber(&#39;1&#39;,&#39;3&#39;)" />
                                                        </th>
                                                        <th class="edit">
                                                            派遣分類：
                                                        </th>
                                                        <th class="edit">
                                                            受案單位：
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <input id="btn1_1_01" name="btn1_1_01" type="button" value="1" class="btnnum" onclick="spannum('ContentPlaceHolder1_txtDutyEchelon','1',3)" onmousedown="chgBtnNumDownBg()" onmouseup="chgBtnNumUpBg()" />
                                                            <input id="btn1_1_02" name="btn1_1_02" type="button" value="2" class="btnnum" onclick="spannum('ContentPlaceHolder1_txtDutyEchelon','2',3)" onmousedown="chgBtnNumDownBg()" onmouseup="chgBtnNumUpBg()" />
                                                            <input id="btn1_1_03" name="btn1_1_03" type="button" value="3" class="btnnum" onclick="spannum('ContentPlaceHolder1_txtDutyEchelon','3',3)" onmousedown="chgBtnNumDownBg()" onmouseup="chgBtnNumUpBg()" />
                                                        </td>
                                                        <td class="edit">
                                                            <table id="ContentPlaceHolder1_rblDispatchKind" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_rblDispatchKind_0" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchKind" value="ALS" /><label for="ContentPlaceHolder1_rblDispatchKind_0">ALS</label></td><td><input id="ContentPlaceHolder1_rblDispatchKind_1" type="radio" name="ctl00$ContentPlaceHolder1$rblDispatchKind" value="BLS" /><label for="ContentPlaceHolder1_rblDispatchKind_1">BLS</label></td>
	</tr>
</table>
                                                        </td>
                                                        <td class="edit">
                                                            <table id="ContentPlaceHolder1_rblAppellateOrg" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_rblAppellateOrg_0" type="radio" name="ctl00$ContentPlaceHolder1$rblAppellateOrg" value="指揮中心" /><label for="ContentPlaceHolder1_rblAppellateOrg_0">指揮中心</label></td><td><input id="ContentPlaceHolder1_rblAppellateOrg_1" type="radio" name="ctl00$ContentPlaceHolder1$rblAppellateOrg" value="分隊受理" /><label for="ContentPlaceHolder1_rblAppellateOrg_1">分隊受理</label></td>
	</tr>
</table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-2">
                                                <div id="ContentPlaceHolder1_UpdatePanel1">
	
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <tr>
                                                                <th class="edit">
                                                                    出勤通知時間：</span><span id="ContentPlaceHolder1_lblDutyTime"></span>
                                                                </th>
                                                                <th class="edit">
                                                                    到達現場時間：</span><span id="ContentPlaceHolder1_lblArriveTime"></span>
                                                                </th>
                                                                <th class="edit">
                                                                    離開現場時間：</span><span id="ContentPlaceHolder1_lblExitTime"></span>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td class="edit">
                                                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnDutyTime" value="取得時間" id="ContentPlaceHolder1_btnDutyTime" class="btn" onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                                </td>
                                                                <td class="edit">
                                                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnArriveTime" value="取得時間" id="ContentPlaceHolder1_btnArriveTime" class="btn" onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                                </td>
                                                                <td class="edit">
                                                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnExitTime" value="取得時間" id="ContentPlaceHolder1_btnExitTime" class="btn" onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="edit">
                                                                    送達醫院時間：</span><span id="ContentPlaceHolder1_lblArriveTime2"></span>
                                                                </th>
                                                                <th class="edit">
                                                                    離開醫院時間：</span><span id="ContentPlaceHolder1_lblExitTime2"></span>
                                                                </th>
                                                                <th class="edit">
                                                                    返隊待命時間：</span><span id="ContentPlaceHolder1_lblReturnTime"></span>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td class="edit">
                                                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnArriveTime2" value="取得時間" id="ContentPlaceHolder1_btnArriveTime2" class="btn" onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                                </td>
                                                                <td class="edit">
                                                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnExitTime2" value="取得時間" id="ContentPlaceHolder1_btnExitTime2" class="btn" onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                                </td>
                                                                <td class="edit">
                                                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnReturnTime" value="取得時間" id="ContentPlaceHolder1_btnReturnTime" class="btn" onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    
</div>
                                            </div>
                                            <div id="tabs-3">
                                                <div id="ContentPlaceHolder1_UpdatePanel2">
	
                                                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                            <tr>
                                                                <th class="edit">
                                                                    發生地點：
                                                                </th>
                                                                <th class="edit">
                                                                    日期：<span id="ContentPlaceHolder1_lblOccurTime"></span>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td class="edit">
                                                                    <input name="ctl00$ContentPlaceHolder1$txtOccurPlace" type="text" maxlength="100" id="ContentPlaceHolder1_txtOccurPlace" class="text" />
                                                                </td>
                                                                <td class="edit">
                                                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnOccurTime" value="取得日期" id="ContentPlaceHolder1_btnOccurTime" class="btn" onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th class="edit">
                                                                    患者住址：
                                                                </th>
                                                                <th class="edit">
                                                                    未送醫原因：
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td class="edit">
                                                                    <table border="0" cellspacing="0" cellpadding="0">
                                                                        <tr>
                                                                            <td>
                                                                                <table id="ContentPlaceHolder1_rblPatientAddr" class="bigchkrdobox">
		<tr>
			<td><input id="ContentPlaceHolder1_rblPatientAddr_0" type="radio" name="ctl00$ContentPlaceHolder1$rblPatientAddr" value="同發生地點" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rblPatientAddr$0\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="ContentPlaceHolder1_rblPatientAddr_0">同發生地點</label></td><td><input id="ContentPlaceHolder1_rblPatientAddr_1" type="radio" name="ctl00$ContentPlaceHolder1$rblPatientAddr" value="不詳" onclick="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$rblPatientAddr$1\&#39;,\&#39;\&#39;)&#39;, 0)" /><label for="ContentPlaceHolder1_rblPatientAddr_1">不詳</label></td>
		</tr>
	</table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                    <input name="ctl00$ContentPlaceHolder1$txtPatientAddr2" type="text" maxlength="50" id="ContentPlaceHolder1_txtPatientAddr2" class="text" />
                                                                </td>
                                                                <td class="edit">
                                                                    <table border="0" cellspacing="0" cellpadding="0">
                                                                        <tr>
                                                                            <td>
                                                                                <table id="ContentPlaceHolder1_rblNoHospitalReason" class="bigchkrdobox">
		<tr>
			<td><input id="ContentPlaceHolder1_rblNoHospitalReason_0" type="radio" name="ctl00$ContentPlaceHolder1$rblNoHospitalReason" value="拒絕送醫" /><label for="ContentPlaceHolder1_rblNoHospitalReason_0">拒絕送醫</label></td><td><input id="ContentPlaceHolder1_rblNoHospitalReason_1" type="radio" name="ctl00$ContentPlaceHolder1$rblNoHospitalReason" value="他轄救護車載走" /><label for="ContentPlaceHolder1_rblNoHospitalReason_1">他轄救護車載走</label></td>
		</tr><tr>
			<td><input id="ContentPlaceHolder1_rblNoHospitalReason_2" type="radio" name="ctl00$ContentPlaceHolder1$rblNoHospitalReason" value="勤區處理" /><label for="ContentPlaceHolder1_rblNoHospitalReason_2">勤區處理</label></td><td><input id="ContentPlaceHolder1_rblNoHospitalReason_3" type="radio" name="ctl00$ContentPlaceHolder1$rblNoHospitalReason" value="現場未發現" /><label for="ContentPlaceHolder1_rblNoHospitalReason_3">現場未發現</label></td>
		</tr><tr>
			<td><input id="ContentPlaceHolder1_rblNoHospitalReason_4" type="radio" name="ctl00$ContentPlaceHolder1$rblNoHospitalReason" value="中途取消" /><label for="ContentPlaceHolder1_rblNoHospitalReason_4">中途取消</label></td><td><input id="ContentPlaceHolder1_rblNoHospitalReason_5" type="radio" name="ctl00$ContentPlaceHolder1$rblNoHospitalReason" value="明顯死亡" /><label for="ContentPlaceHolder1_rblNoHospitalReason_5">明顯死亡</label></td>
		</tr><tr>
			<td><input id="ContentPlaceHolder1_rblNoHospitalReason_6" type="radio" name="ctl00$ContentPlaceHolder1$rblNoHospitalReason" value="其他" /><label for="ContentPlaceHolder1_rblNoHospitalReason_6">其他</label></td><td></td>
		</tr>
	</table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    
</div>
                                            </div>
                                            <div id="tabs-4">
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tr>
                                                        <th class="edit">患者姓名：</th>
                                                        <th class="edit">身分證字號：</th>
                                                        <th class="edit">性別：</th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <input name="ctl00$ContentPlaceHolder1$txtPatientName" type="text" maxlength="20" id="ContentPlaceHolder1_txtPatientName" class="text" />
                                                        </td>
                                                        <td class="edit">
                                                            <input name="ctl00$ContentPlaceHolder1$txtUID" type="text" maxlength="10" id="ContentPlaceHolder1_txtUID" class="text" />
                                                        </td>
                                                        <td class="edit">
                                                            <table id="ContentPlaceHolder1_rblSex" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_rblSex_0" type="radio" name="ctl00$ContentPlaceHolder1$rblSex" value="M" /><label for="ContentPlaceHolder1_rblSex_0">男</label></td><td><input id="ContentPlaceHolder1_rblSex_1" type="radio" name="ctl00$ContentPlaceHolder1$rblSex" value="F" /><label for="ContentPlaceHolder1_rblSex_1">女</label></td>
	</tr>
</table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3" class="edit">
                                                            年齡：
                                                            <input name="ctl00$ContentPlaceHolder1$txtAge" type="text" maxlength="3" id="ContentPlaceHolder1_txtAge" class="text" OnKeyPress="txtKeyNumber(&#39;0&#39;,&#39;9&#39;)" />
                                                        </th>
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
                                        <img src="images/button_1_2.png" alt="上一頁" width="83" height="89" id="ibtnLeft1" onmouseover="MM_swapImage('ibtnLeft1','','images/button_1_2.png',1)" onmouseout="MM_swapImgRestore()" />
                                        <img src="images/button_2_1.png" alt="下一頁" width="85" height="89" id="ibtnRight1" onclick="MM_callJS('openDiv(2)')" onmouseover="MM_swapImage('ibtnRight1','','images/button_2_2.png',1)" onmouseout="MM_swapImgRestore()" />
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
                                        <div id="tabs">
                                            <ul>
                                                <li><a href="#tabs-1">傷病主訴群</a></li>
                                                <li><a href="#tabs-2">創傷機轉(交通機轉)</a></li>
                                                <li><a href="#tabs-3">非交通機轉</a></li>
                                                <li><a href="#tabs-4">過敏史</a></li>
                                                <li><a href="#tabs-5">過去病史</a></li>
                                            </ul>
                                            <div id="tabs-1">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_1" /><label for="ContentPlaceHolder1_rdbIllDescribe_1">OHCA</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_2" /><label for="ContentPlaceHolder1_rdbIllDescribe_2">無意識/意識不清</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_3" /><label for="ContentPlaceHolder1_rdbIllDescribe_3">癲癇/抽搐</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_4" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_4" /><label for="ContentPlaceHolder1_rdbIllDescribe_4">昏厥</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_5" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_5" /><label for="ContentPlaceHolder1_rdbIllDescribe_5">行為神智異常</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_6" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_6" /><label for="ContentPlaceHolder1_rdbIllDescribe_6">呼吸道哽塞</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_7" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_7" /><label for="ContentPlaceHolder1_rdbIllDescribe_7">呼吸困難</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_8" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_8" /><label for="ContentPlaceHolder1_rdbIllDescribe_8">過敏</label></span>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_9" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_9" onclick="showTxt(&#39;ContentPlaceHolder1_rdbIllDescribe_9&#39;,&#39;spanOther1&#39;);" /><label for="ContentPlaceHolder1_rdbIllDescribe_9">其他</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther1" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIllDescribe_9" type="text" id="ContentPlaceHolder1_txtIllDescribe_9" class="text" size="10" />
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_10" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_10" /><label for="ContentPlaceHolder1_rdbIllDescribe_10">頭痛</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_11" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_11" /><label for="ContentPlaceHolder1_rdbIllDescribe_11">肢體痲痺</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_12" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_12" /><label for="ContentPlaceHolder1_rdbIllDescribe_12">胸痛/胸悶</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_13" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_13" /><label for="ContentPlaceHolder1_rdbIllDescribe_13">腹痛</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_14" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_14" /><label for="ContentPlaceHolder1_rdbIllDescribe_14">背痛/肩痛</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_15" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_15" /><label for="ContentPlaceHolder1_rdbIllDescribe_15">心臓不適</label></span>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_16" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_16" onclick="showTxt(&#39;ContentPlaceHolder1_rdbIllDescribe_16&#39;,&#39;spanOther2&#39;);" /><label for="ContentPlaceHolder1_rdbIllDescribe_16">疑似毒物/氣中毒</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther2" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIllDescribe_16" type="text" id="ContentPlaceHolder1_txtIllDescribe_16" class="text" size="10" />
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_17" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_17" onclick="showTxt(&#39;ContentPlaceHolder1_rdbIllDescribe_17&#39;,&#39;spanOther3&#39;);" /><label for="ContentPlaceHolder1_rdbIllDescribe_17">疑似藥物過量</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther3" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIllDescribe_17" type="text" id="ContentPlaceHolder1_txtIllDescribe_17" class="text" size="10" />
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_18" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_18" /><label for="ContentPlaceHolder1_rdbIllDescribe_18">頭暈</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_19" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_19" /><label for="ContentPlaceHolder1_rdbIllDescribe_19">肢體無力</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_20" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_20" /><label for="ContentPlaceHolder1_rdbIllDescribe_20">嘔吐/噁心</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_21" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_21" /><label for="ContentPlaceHolder1_rdbIllDescribe_21">腹瀉</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_22" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_22" /><label for="ContentPlaceHolder1_rdbIllDescribe_22">發燒/發冷</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_23" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_23" /><label for="ContentPlaceHolder1_rdbIllDescribe_23">非外傷性出血</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_24" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_24" /><label for="ContentPlaceHolder1_rdbIllDescribe_24">吐血/咳血</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_25" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_25" /><label for="ContentPlaceHolder1_rdbIllDescribe_25">血便/血尿</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_26" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_26" /><label for="ContentPlaceHolder1_rdbIllDescribe_26">溺水</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_27" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_27" /><label for="ContentPlaceHolder1_rdbIllDescribe_27">急產/新生兒</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_28" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_28" /><label for="ContentPlaceHolder1_rdbIllDescribe_28">血腫</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_29" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_29" /><label for="ContentPlaceHolder1_rdbIllDescribe_29">肢體疼痛</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_30" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_30" /><label for="ContentPlaceHolder1_rdbIllDescribe_30">骨折/脫位</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_31" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_31" /><label for="ContentPlaceHolder1_rdbIllDescribe_31">挫傷</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_32" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_32" /><label for="ContentPlaceHolder1_rdbIllDescribe_32">擦傷</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_33" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_33" /><label for="ContentPlaceHolder1_rdbIllDescribe_33">撕裂傷</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_34" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_34" /><label for="ContentPlaceHolder1_rdbIllDescribe_34">切割傷</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_35" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_35" /><label for="ContentPlaceHolder1_rdbIllDescribe_35">穿刺傷</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_36" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_36" /><label for="ContentPlaceHolder1_rdbIllDescribe_36">碎裂傷</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_37" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_37" /><label for="ContentPlaceHolder1_rdbIllDescribe_37">斷肢</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllDescribe_38" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllDescribe" value="rdbIllDescribe_38" onclick="showTxt(&#39;ContentPlaceHolder1_rdbIllDescribe_38&#39;,&#39;spanOther4;spanOther5&#39;);" /><label for="ContentPlaceHolder1_rdbIllDescribe_38">燒燙傷</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther4" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIllDescribe_38_1" type="text" id="ContentPlaceHolder1_txtIllDescribe_38_1" class="text" size="10" />
                                                                            度
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther5" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIllDescribe_38_2" type="text" id="ContentPlaceHolder1_txtIllDescribe_38_2" class="text" size="10" />
                                                                            %
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-2">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            事故患者：
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_1" /><label for="ContentPlaceHolder1_rdbIllRelated_1">駕駛</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_2" /><label for="ContentPlaceHolder1_rdbIllRelated_2">乘客</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_3" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_3" /><label for="ContentPlaceHolder1_rdbIllRelated_3">行人</label></span>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_4" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_4" /><label for="ContentPlaceHolder1_rdbIllRelated_4">汽←→汽</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_5" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_5" /><label for="ContentPlaceHolder1_rdbIllRelated_5">汽←→機腳</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_6" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_6" /><label for="ContentPlaceHolder1_rdbIllRelated_6">機腳←→機腳</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_7" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_7" /><label for="ContentPlaceHolder1_rdbIllRelated_7">汽←→人</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_8" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_8" /><label for="ContentPlaceHolder1_rdbIllRelated_8">機腳←→人</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_9" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_9" onclick="showTxt(&#39;ContentPlaceHolder1_rdbIllRelated_9&#39;,&#39;spanOther6&#39;);" /><label for="ContentPlaceHolder1_rdbIllRelated_9">其他</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther6" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIllRelated_9" type="text" maxlength="90" id="ContentPlaceHolder1_txtIllRelated_9" class="text" />
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            繫戴安全帽安全帶：
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_10" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_10" /><label for="ContentPlaceHolder1_rdbIllRelated_10">有</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_11" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_11" /><label for="ContentPlaceHolder1_rdbIllRelated_11">無</label></span>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            頸椎固定：
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_12" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_12" /><label for="ContentPlaceHolder1_rdbIllRelated_12">頸椎瘀青疼痛</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_13" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_13" /><label for="ContentPlaceHolder1_rdbIllRelated_13">轉向困難</label></span>
                                                        </td>
                                                        <td colspan="2">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_14" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_14" /><label for="ContentPlaceHolder1_rdbIllRelated_14">肢體運動感覺異常</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_15" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_15" /><label for="ContentPlaceHolder1_rdbIllRelated_15">高能量傷害</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIllRelated_16" type="radio" name="ctl00$ContentPlaceHolder1$rdbIllRelated" value="rdbIllRelated_16" /><label for="ContentPlaceHolder1_rdbIllRelated_16">GCS<15</label></span>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-3">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            墜落高度：
                                                        </td>
                                                        <td>
                                                            <table id="ContentPlaceHolder1_rblNoTrafficRelated" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_rblNoTrafficRelated_0" type="radio" name="ctl00$ContentPlaceHolder1$rblNoTrafficRelated" value="&lt;2m" /><label for="ContentPlaceHolder1_rblNoTrafficRelated_0"><2m</label></td><td><input id="ContentPlaceHolder1_rblNoTrafficRelated_1" type="radio" name="ctl00$ContentPlaceHolder1$rblNoTrafficRelated" value="2-6m" /><label for="ContentPlaceHolder1_rblNoTrafficRelated_1">2-6m</label></td><td><input id="ContentPlaceHolder1_rblNoTrafficRelated_2" type="radio" name="ctl00$ContentPlaceHolder1$rblNoTrafficRelated" value="6m" /><label for="ContentPlaceHolder1_rblNoTrafficRelated_2">6m</label></td>
	</tr>
</table>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_4" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_4" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_4">跌摔</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_5" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_5" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_5">鈍毆</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_6" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_6" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_6">切割</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_7" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_7" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_7">機械性</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_8" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_8" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_8">撞擊</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_9" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_9" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_9">壓夾</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_10" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_10" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_10">電擊</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_11" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_11" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_11">煙嗆</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_12" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_12" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_12">槍擊</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_13" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_13" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_13">爆炸</label></span>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_14" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_14" onclick="showTxt(&#39;ContentPlaceHolder1_ckbNoTrafficRelated_14&#39;,&#39;spanOther7&#39;);" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_14">生物咬螫</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther7" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtNoTrafficRelated_14" type="text" id="ContentPlaceHolder1_txtNoTrafficRelated_14" class="text" size="10" />
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_15" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_15" onclick="showTxt(&#39;ContentPlaceHolder1_ckbNoTrafficRelated_15&#39;,&#39;spanOther8&#39;);" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_15">化學物質接觸</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther8" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtNoTrafficRelated_15" type="text" id="ContentPlaceHolder1_txtNoTrafficRelated_15" class="text" size="10" />
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbNoTrafficRelated_16" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbNoTrafficRelated_16" onclick="showTxt(&#39;ContentPlaceHolder1_ckbNoTrafficRelated_16&#39;,&#39;spanOther9&#39;);" /><label for="ContentPlaceHolder1_ckbNoTrafficRelated_16">其他</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther9" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtNoTrafficRelated_16" type="text" id="ContentPlaceHolder1_txtNoTrafficRelated_16" class="text" size="10" />
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-4">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            <table id="ContentPlaceHolder1_rblIrritableHistory" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_rblIrritableHistory_0" type="radio" name="ctl00$ContentPlaceHolder1$rblIrritableHistory" value="無" /><label for="ContentPlaceHolder1_rblIrritableHistory_0">無</label></td><td><input id="ContentPlaceHolder1_rblIrritableHistory_1" type="radio" name="ctl00$ContentPlaceHolder1$rblIrritableHistory" value="不清楚" /><label for="ContentPlaceHolder1_rblIrritableHistory_1">不清楚</label></td>
	</tr>
</table>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIrritableHistory_3" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIrritableHistory_3" onclick="showTxt(&#39;ContentPlaceHolder1_ckbIrritableHistory_3&#39;,&#39;spanOther10&#39;);" /><label for="ContentPlaceHolder1_ckbIrritableHistory_3">食物</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther10" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIrritableHistory_3" type="text" id="ContentPlaceHolder1_txtIrritableHistory_3" class="text" size="10" />
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIrritableHistory_4" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIrritableHistory_4" onclick="showTxt(&#39;ContentPlaceHolder1_ckbIrritableHistory_4&#39;,&#39;spanOther11&#39;);" /><label for="ContentPlaceHolder1_ckbIrritableHistory_4">藥物</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther11" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIrritableHistory_4" type="text" id="ContentPlaceHolder1_txtIrritableHistory_4" class="text" size="10" />
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIrritableHistory_5" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIrritableHistory_5" onclick="showTxt(&#39;ContentPlaceHolder1_ckbIrritableHistory_5&#39;,&#39;spanOther12&#39;);" /><label for="ContentPlaceHolder1_ckbIrritableHistory_5">其他</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther12" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIrritableHistory_5" type="text" id="ContentPlaceHolder1_txtIrritableHistory_5" class="text" size="10" />
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-5">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_1" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_1" /><label for="ContentPlaceHolder1_ckbSickHistory_1">腦血管疾病</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_2" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_2" /><label for="ContentPlaceHolder1_ckbSickHistory_2">心臟疾病</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_3" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_3" /><label for="ContentPlaceHolder1_ckbSickHistory_3">肺臟疾病</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_4" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_4" /><label for="ContentPlaceHolder1_ckbSickHistory_4">糖尿病</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_5" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_5" /><label for="ContentPlaceHolder1_ckbSickHistory_5">高血壓</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_6" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_6" /><label for="ContentPlaceHolder1_ckbSickHistory_6">肝臟疾病</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_7" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_7" /><label for="ContentPlaceHolder1_ckbSickHistory_7">腎臟疾病</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_8" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_8" /><label for="ContentPlaceHolder1_ckbSickHistory_8">惡性腫瘤</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_9" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_9" /><label for="ContentPlaceHolder1_ckbSickHistory_9">癲癇</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_10" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_10" /><label for="ContentPlaceHolder1_ckbSickHistory_10">氣喘</label></span>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_11" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_11" onclick="showTxt(&#39;ContentPlaceHolder1_ckbSickHistory_11&#39;,&#39;spanOther13&#39;);" /><label for="ContentPlaceHolder1_ckbSickHistory_11">其他</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther13" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtSickHistory_11" type="text" id="ContentPlaceHolder1_txtSickHistory_11" class="text" size="10" />
                                                                    </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_12" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_12" /><label for="ContentPlaceHolder1_ckbSickHistory_12">精神疾病</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_13" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_13" /><label for="ContentPlaceHolder1_ckbSickHistory_13">HIV(+)</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_14" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_14" /><label for="ContentPlaceHolder1_ckbSickHistory_14">肺結核</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSickHistory_15" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSickHistory_15" /><label for="ContentPlaceHolder1_ckbSickHistory_15">無</label></span>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
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
                                        <div id="tabs2">
                                            <ul>
                                                <li><a href="#tabs-1">加護處置</a></li>
                                                <li><a href="#tabs-2">呼吸處置</a></li>
                                                <li><a href="#tabs-3">創傷處置</a></li>
                                                <li><a href="#tabs-4">一般處置</a></li>
                                                <li><a href="#tabs-5">生命徵象</a></li>
                                                <li><a href="#tabs-6">膚色</a></li>
                                                <li><a href="#tabs-7">標示說明..</a></li>
                                            </ul>
                                            <div id="tabs-1">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIntensiveCare_1" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIntensiveCare_1" /><label for="ContentPlaceHolder1_ckbIntensiveCare_1">糖粉(水)</label></span>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIntensiveCare_2" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIntensiveCare_2" onclick="showTxt(&#39;ContentPlaceHolder1_ckbIntensiveCare_2&#39;,&#39;spanOther14&#39;);" /><label for="ContentPlaceHolder1_ckbIntensiveCare_2">協助使用 NTG</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther14" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIntensiveCare_2" type="text" id="ContentPlaceHolder1_txtIntensiveCare_2" class="text" size="3" />
                                                                            片
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIntensiveCare_3" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIntensiveCare_3" onclick="showTxt(&#39;ContentPlaceHolder1_ckbIntensiveCare_3&#39;,&#39;spanOther15&#39;);" /><label for="ContentPlaceHolder1_ckbIntensiveCare_3">支氣管擴張劑</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther15" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIntensiveCare_3" type="text" id="ContentPlaceHolder1_txtIntensiveCare_3" class="text" size="3" />
                                                                            次
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIntensiveCare_4" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIntensiveCare_4" onclick="showTxt(&#39;ContentPlaceHolder1_ckbIntensiveCare_4&#39;,&#39;spanOther16&#39;);" /><label for="ContentPlaceHolder1_ckbIntensiveCare_4">50%GW</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther16" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIntensiveCare_4" type="text" id="ContentPlaceHolder1_txtIntensiveCare_4" class="text" size="3" />
                                                                            支
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIntensiveCare_5" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIntensiveCare_5" /><label for="ContentPlaceHolder1_ckbIntensiveCare_5">5%GW</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIntensiveCare_6" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIntensiveCare_6" /><label for="ContentPlaceHolder1_ckbIntensiveCare_6">0.9%NS</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIntensiveCare_7" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIntensiveCare_7" /><label for="ContentPlaceHolder1_ckbIntensiveCare_7">乳酸林格氏液</label></span>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbIntensiveCare_8" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbIntensiveCare_8" onclick="showTxt(&#39;ContentPlaceHolder1_ckbIntensiveCare_8&#39;,&#39;spanOther17&#39;);" /><label for="ContentPlaceHolder1_ckbIntensiveCare_8">CPR</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther17" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIntensiveCare_8" type="text" id="ContentPlaceHolder1_txtIntensiveCare_8" class="text" size="3" />
                                                                            分鐘
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        ，AED
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIntensiveCare_9_1" type="radio" name="ctl00$ContentPlaceHolder1$rdbIntensiveCare" value="rdbIntensiveCare_9_1" /><label for="ContentPlaceHolder1_rdbIntensiveCare_9_1">不建議電擊</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_rdbIntensiveCare_9_2" type="radio" name="ctl00$ContentPlaceHolder1$rdbIntensiveCare" value="rdbIntensiveCare_9_2" onclick="showTxt(&#39;ContentPlaceHolder1_rdbIntensiveCare_9_2&#39;,&#39;spanOther18&#39;);" /><label for="ContentPlaceHolder1_rdbIntensiveCare_9_2">建議電擊</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther18" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtIntensiveCare_9" type="text" id="ContentPlaceHolder1_txtIntensiveCare_9" class="text" size="3" />
                                                                            次
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-2">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbBreathe_1" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbBreathe_1" /><label for="ContentPlaceHolder1_ckbBreathe_1">鼻咽呼吸道</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbBreathe_2" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbBreathe_2" /><label for="ContentPlaceHolder1_ckbBreathe_2">口咽呼吸道</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbBreathe_3" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbBreathe_3" /><label for="ContentPlaceHolder1_ckbBreathe_3">抽吸</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbBreathe_4" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbBreathe_4" /><label for="ContentPlaceHolder1_ckbBreathe_4">哈姆立克</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbBreathe_5" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbBreathe_5" /><label for="ContentPlaceHolder1_ckbBreathe_5">氧氣鼻管</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbBreathe_6" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbBreathe_6" /><label for="ContentPlaceHolder1_ckbBreathe_6">氧氣面罩</label></span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbBreathe_7" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbBreathe_7" /><label for="ContentPlaceHolder1_ckbBreathe_7">NRM</label></span>
                                                        </td>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbBreathe_8" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbBreathe_8" onclick="showTxt(&#39;ContentPlaceHolder1_ckbBreathe_8&#39;,&#39;spanOther19&#39;);" /><label for="ContentPlaceHolder1_ckbBreathe_8">正壓給氧</label></span>
                                                                        &nbsp;&nbsp;
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther19" style="display: none">氧氣流量：
                                                                            <input name="ctl00$ContentPlaceHolder1$txtBreathe_8" type="text" id="ContentPlaceHolder1_txtBreathe_8" class="text" size="3" />
                                                                            L/min
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbBreathe_9" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbBreathe_9" onclick="showTxt(&#39;ContentPlaceHolder1_ckbBreathe_9&#39;,&#39;spanOther20&#39;);" /><label for="ContentPlaceHolder1_ckbBreathe_9">LMA</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther20" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtBreathe_9" type="text" id="ContentPlaceHolder1_txtBreathe_9" class="text" size="3" />
                                                                            號
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                        <td>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-3">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            <table id="ContentPlaceHolder1_cblIll" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_cblIll_0" type="checkbox" name="ctl00$ContentPlaceHolder1$cblIll$0" value="清洗傷口" /><label for="ContentPlaceHolder1_cblIll_0">清洗傷口</label></td><td><input id="ContentPlaceHolder1_cblIll_1" type="checkbox" name="ctl00$ContentPlaceHolder1$cblIll$1" value="包紮止血" /><label for="ContentPlaceHolder1_cblIll_1">包紮止血</label></td><td><input id="ContentPlaceHolder1_cblIll_2" type="checkbox" name="ctl00$ContentPlaceHolder1$cblIll$2" value="頸圈" /><label for="ContentPlaceHolder1_cblIll_2">頸圈</label></td>
	</tr><tr>
		<td><input id="ContentPlaceHolder1_cblIll_3" type="checkbox" name="ctl00$ContentPlaceHolder1$cblIll$3" value="長背板/頭部固定" /><label for="ContentPlaceHolder1_cblIll_3">長背板/頭部固定</label></td><td><input id="ContentPlaceHolder1_cblIll_4" type="checkbox" name="ctl00$ContentPlaceHolder1$cblIll$4" value="KED固定" /><label for="ContentPlaceHolder1_cblIll_4">KED固定</label></td><td><input id="ContentPlaceHolder1_cblIll_5" type="checkbox" name="ctl00$ContentPlaceHolder1$cblIll$5" value="夾板/三角巾固定" /><label for="ContentPlaceHolder1_cblIll_5">夾板/三角巾固定</label></td>
	</tr>
</table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-4">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            <table id="ContentPlaceHolder1_cblGeneral" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_cblGeneral_0" type="checkbox" name="ctl00$ContentPlaceHolder1$cblGeneral$0" value="生命徵象監測" /><label for="ContentPlaceHolder1_cblGeneral_0">生命徵象監測</label></td><td><input id="ContentPlaceHolder1_cblGeneral_1" type="checkbox" name="ctl00$ContentPlaceHolder1$cblGeneral$1" value="心理支持" /><label for="ContentPlaceHolder1_cblGeneral_1">心理支持</label></td><td><input id="ContentPlaceHolder1_cblGeneral_2" type="checkbox" name="ctl00$ContentPlaceHolder1$cblGeneral$2" value="協助生產" /><label for="ContentPlaceHolder1_cblGeneral_2">協助生產</label></td><td><input id="ContentPlaceHolder1_cblGeneral_3" type="checkbox" name="ctl00$ContentPlaceHolder1$cblGeneral$3" value="心律監視" /><label for="ContentPlaceHolder1_cblGeneral_3">心律監視</label></td><td><input id="ContentPlaceHolder1_cblGeneral_4" type="checkbox" name="ctl00$ContentPlaceHolder1$cblGeneral$4" value="保暖" /><label for="ContentPlaceHolder1_cblGeneral_4">保暖</label></td>
	</tr><tr>
		<td><input id="ContentPlaceHolder1_cblGeneral_5" type="checkbox" name="ctl00$ContentPlaceHolder1$cblGeneral$5" value="下肢抬高" /><label for="ContentPlaceHolder1_cblGeneral_5">下肢抬高</label></td><td><input id="ContentPlaceHolder1_cblGeneral_6" type="checkbox" name="ctl00$ContentPlaceHolder1$cblGeneral$6" value="半坐臥" /><label for="ContentPlaceHolder1_cblGeneral_6">半坐臥</label></td><td><input id="ContentPlaceHolder1_cblGeneral_7" type="checkbox" name="ctl00$ContentPlaceHolder1$cblGeneral$7" value="其他" /><label for="ContentPlaceHolder1_cblGeneral_7">其他</label></td><td></td><td></td>
	</tr>
</table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-5">
                                                <table border="1" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            時間
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtSymTime_1_hh" type="text" id="ContentPlaceHolder1_txtSymTime_1_hh" class="text" size="2" />
                                                            ：
                                                            <input name="ctl00$ContentPlaceHolder1$txtSymTime_1_mm" type="text" id="ContentPlaceHolder1_txtSymTime_1_mm" class="text" size="2" />
                                                            ：
                                                            <input name="ctl00$ContentPlaceHolder1$txtSymTime_1_ss" type="text" id="ContentPlaceHolder1_txtSymTime_1_ss" class="text" size="2" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtSymTime_2_hh" type="text" id="ContentPlaceHolder1_txtSymTime_2_hh" class="text" size="2" />
                                                            ：
                                                            <input name="ctl00$ContentPlaceHolder1$txtSymTime_2_mm" type="text" id="ContentPlaceHolder1_txtSymTime_2_mm" class="text" size="2" />
                                                            ：
                                                            <input name="ctl00$ContentPlaceHolder1$txtSymTime_2_ss" type="text" id="ContentPlaceHolder1_txtSymTime_2_ss" class="text" size="2" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtSymTime_3_hh" type="text" id="ContentPlaceHolder1_txtSymTime_3_hh" class="text" size="2" />
                                                            ：
                                                            <input name="ctl00$ContentPlaceHolder1$txtSymTime_3_mm" type="text" id="ContentPlaceHolder1_txtSymTime_3_mm" class="text" size="2" />
                                                            ：
                                                            <input name="ctl00$ContentPlaceHolder1$txtSymTime_3_ss" type="text" id="ContentPlaceHolder1_txtSymTime_3_ss" class="text" size="2" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            意識狀況
                                                        </td>
                                                        <td>
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td>
                                                                        <table id="ContentPlaceHolder1_cblCondition_1" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_cblCondition_1_0" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_1$0" value="清" /><label for="ContentPlaceHolder1_cblCondition_1_0">清</label></td><td><input id="ContentPlaceHolder1_cblCondition_1_1" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_1$1" value="聲" /><label for="ContentPlaceHolder1_cblCondition_1_1">聲</label></td>
	</tr><tr>
		<td><input id="ContentPlaceHolder1_cblCondition_1_2" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_1$2" value="痛" /><label for="ContentPlaceHolder1_cblCondition_1_2">痛</label></td><td><input id="ContentPlaceHolder1_cblCondition_1_3" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_1$3" value="否" /><label for="ContentPlaceHolder1_cblCondition_1_3">否</label></td>
	</tr>
</table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td>
                                                                        <table id="ContentPlaceHolder1_cblCondition_2" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_cblCondition_2_0" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_2$0" value="清" /><label for="ContentPlaceHolder1_cblCondition_2_0">清</label></td><td><input id="ContentPlaceHolder1_cblCondition_2_1" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_2$1" value="聲" /><label for="ContentPlaceHolder1_cblCondition_2_1">聲</label></td>
	</tr><tr>
		<td><input id="ContentPlaceHolder1_cblCondition_2_2" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_2$2" value="痛" /><label for="ContentPlaceHolder1_cblCondition_2_2">痛</label></td><td><input id="ContentPlaceHolder1_cblCondition_2_3" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_2$3" value="否" /><label for="ContentPlaceHolder1_cblCondition_2_3">否</label></td>
	</tr>
</table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td>
                                                                        <table id="ContentPlaceHolder1_cblCondition_3" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_cblCondition_3_0" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_3$0" value="清" /><label for="ContentPlaceHolder1_cblCondition_3_0">清</label></td><td><input id="ContentPlaceHolder1_cblCondition_3_1" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_3$1" value="聲" /><label for="ContentPlaceHolder1_cblCondition_3_1">聲</label></td>
	</tr><tr>
		<td><input id="ContentPlaceHolder1_cblCondition_3_2" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_3$2" value="痛" /><label for="ContentPlaceHolder1_cblCondition_3_2">痛</label></td><td><input id="ContentPlaceHolder1_cblCondition_3_3" type="checkbox" name="ctl00$ContentPlaceHolder1$cblCondition_3$3" value="否" /><label for="ContentPlaceHolder1_cblCondition_3_3">否</label></td>
	</tr>
</table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            呼吸(次/分)
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtBreathe_1" type="text" id="ContentPlaceHolder1_txtBreathe_1" class="text" size="4" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtBreathe_2" type="text" id="ContentPlaceHolder1_txtBreathe_2" class="text" size="4" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtBreathe_3" type="text" id="ContentPlaceHolder1_txtBreathe_3" class="text" size="4" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            脈膊(次/分)
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtPulse_1" type="text" id="ContentPlaceHolder1_txtPulse_1" class="text" size="4" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtPulse_2" type="text" id="ContentPlaceHolder1_txtPulse_2" class="text" size="4" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtPulse_3" type="text" id="ContentPlaceHolder1_txtPulse_3" class="text" size="4" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            血壓(mmHg)
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtBloodPressure_1" type="text" id="ContentPlaceHolder1_txtBloodPressure_1" class="text" size="4" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtBloodPressure_2" type="text" id="ContentPlaceHolder1_txtBloodPressure_2" class="text" size="4" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtBloodPressure_3" type="text" id="ContentPlaceHolder1_txtBloodPressure_3" class="text" size="4" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            體溫。C
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtBodytemperature_1" type="text" id="ContentPlaceHolder1_txtBodytemperature_1" class="text" size="4" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtBodytemperature_2" type="text" id="ContentPlaceHolder1_txtBodytemperature_2" class="text" size="4" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtBodytemperature_3" type="text" id="ContentPlaceHolder1_txtBodytemperature_3" class="text" size="4" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            SPO2%
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtSPO2_1" type="text" id="ContentPlaceHolder1_txtSPO2_1" class="text" size="4" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtSPO2_2" type="text" id="ContentPlaceHolder1_txtSPO2_2" class="text" size="4" />
                                                        </td>
                                                        <td>
                                                            <input name="ctl00$ContentPlaceHolder1$txtSPO2_3" type="text" id="ContentPlaceHolder1_txtSPO2_3" class="text" size="4" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2">
                                                            GCS
                                                        </td>
                                                        <td>
                                                            EVM
                                                        </td>
                                                        <td>
                                                            EVM
                                                        </td>
                                                        <td>
                                                            EVM
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <select name="ctl00$ContentPlaceHolder1$ddlEVM_1" id="ContentPlaceHolder1_ddlEVM_1">
	<option value="3">3</option>
	<option value="8">8</option>
	<option value="13">13</option>
	<option value="15">15</option>

</select>
                                                        </td>
                                                        <td>
                                                            <select name="ctl00$ContentPlaceHolder1$ddlEVM_2" id="ContentPlaceHolder1_ddlEVM_2">
	<option value="3">3</option>
	<option value="8">8</option>
	<option value="13">13</option>
	<option value="15">15</option>

</select>
                                                        </td>
                                                        <td>
                                                            <select name="ctl00$ContentPlaceHolder1$ddlEVM_3" id="ContentPlaceHolder1_ddlEVM_3">
	<option value="3">3</option>
	<option value="8">8</option>
	<option value="13">13</option>
	<option value="15">15</option>

</select>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-6">
                                                <table id="ContentPlaceHolder1_rblSkinColor" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_rblSkinColor_0" type="radio" name="ctl00$ContentPlaceHolder1$rblSkinColor" value="正常" /><label for="ContentPlaceHolder1_rblSkinColor_0">正常</label></td><td><input id="ContentPlaceHolder1_rblSkinColor_1" type="radio" name="ctl00$ContentPlaceHolder1$rblSkinColor" value="蒼白" /><label for="ContentPlaceHolder1_rblSkinColor_1">蒼白</label></td><td><input id="ContentPlaceHolder1_rblSkinColor_2" type="radio" name="ctl00$ContentPlaceHolder1$rblSkinColor" value="潮紅" /><label for="ContentPlaceHolder1_rblSkinColor_2">潮紅</label></td><td><input id="ContentPlaceHolder1_rblSkinColor_3" type="radio" name="ctl00$ContentPlaceHolder1$rblSkinColor" value="發紺" /><label for="ContentPlaceHolder1_rblSkinColor_3">發紺</label></td><td><input id="ContentPlaceHolder1_rblSkinColor_4" type="radio" name="ctl00$ContentPlaceHolder1$rblSkinColor" value="黃疸" /><label for="ContentPlaceHolder1_rblSkinColor_4">黃疸</label></td><td><input id="ContentPlaceHolder1_rblSkinColor_5" type="radio" name="ctl00$ContentPlaceHolder1$rblSkinColor" value="濕冷" /><label for="ContentPlaceHolder1_rblSkinColor_5">濕冷</label></td>
	</tr>
</table>
                                                <br />
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox" onchange="showTxt(&#39;ContentPlaceHolder1_ckbSkinColor_7&#39;,&#39;spanOther21&#39;)"><input id="ContentPlaceHolder1_ckbSkinColor_7" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSkinColor_7" /><label for="ContentPlaceHolder1_ckbSkinColor_7">瞳孔</label></span>
                                                        </td>
                                                        <td>
                                                            <span id="spanOther21" style="display: none">
                                                                ：左+/-
                                                                <input name="ctl00$ContentPlaceHolder1$txtSkinColor_7_1" type="text" id="ContentPlaceHolder1_txtSkinColor_7_1" class="text" size="3" />
                                                                mm，右+/-
                                                                <input name="ctl00$ContentPlaceHolder1$txtSkinColor_7_2" type="text" id="ContentPlaceHolder1_txtSkinColor_7_2" class="text" size="3" />
                                                                mm；
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbSkinColor_8" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbSkinColor_8" onclick="showTxt(&#39;ContentPlaceHolder1_ckbSkinColor_8&#39;,&#39;spanOther22&#39;);" /><label for="ContentPlaceHolder1_ckbSkinColor_8">血糖</label></span>
                                                        </td>
                                                        <td>
                                                            <span id="spanOther22" style="display: none">
                                                                <input name="ctl00$ContentPlaceHolder1$txtSkinColor_8" type="text" id="ContentPlaceHolder1_txtSkinColor_8" class="text" size="3" />
                                                                mg/dl
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-7">
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tr>
                                                        <td>
                                                            請在圖上標示說明疼痛或受傷部位及其尺寸：
															<br />
                                                            <textarea name="ctl00$ContentPlaceHolder1$txtInjuredArea" rows="5" cols="30" id="ContentPlaceHolder1_txtInjuredArea" class="text" style="width:80%;">
</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="600" height="593"
                                                                id="FlashID" title="疼痛/受傷部位">
                                                                <param name="movie" value="swf/front-12.swf" />
                                                                <param name="quality" value="high" />
                                                                <param name="wmode" value="opaque" />
                                                                <param name="swfversion" value="6.0.65.0" />
                                                                <!-- 此 param 標籤會提示使用 Flash Player 6.0 r65 和更新版本的使用者下載最新版本的 Flash Player。如果您不想讓使用者看到這項提示，請將其刪除。 -->
                                                                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                                                                <!-- 下一個物件標籤僅供非 IE 瀏覽器使用。因此，請使用 IECC 將其自 IE 隱藏。 -->
                                                                <!--[if !IE]>-->
                                                                <object type="application/x-shockwave-flash" data="swf/front-12.swf" width="600" height="593">
                                                                    <!--<![endif]-->
                                                                    <param name="quality" value="high" />
                                                                    <param name="wmode" value="opaque" />
                                                                    <param name="swfversion" value="6.0.65.0" />
                                                                    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                                                                    <!-- 瀏覽器會為使用 Flash Player 6.0 和更早版本的使用者顯示下列替代內容。 -->
                                                                    <div>
                                                                        <h4>
                                                                            這個頁面上的內容需要較新版本的 Adobe Flash Player。</h4>
                                                                        <p>
                                                                            <a href="http://www.adobe.com/go/getflashplayer">
                                                                                <img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif"
                                                                                    alt="取得 Adobe Flash Player" width="112" height="33" /></a></p>
                                                                    </div>
                                                                    <!--[if !IE]>-->
                                                                </object>
                                                                <!--<![endif]-->
                                                            </object>
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
                                        <div id="tabs4">
                                            <ul>
                                                <li><a href="#tabs-1">醫療機構</a></li>
                                                <li><a href="#tabs-2">簽名欄</a></li>
                                                <li><a href="#tabs-3">耗材</a></li>
                                            </ul>
                                            <div id="tabs-1">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <th class="edit" width="50%">
                                                                        醫療機構名稱：<span id="span9"></span>
                                                                    </th>
                                                                    <th class="edit" width="50%">
                                                                        座標：<span id="span10"></span>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="edit">
                                                                        <input id="btn4_1_1" name="btn4_1_1" type="button" value="選擇" class="btn" onmousedown="chgBtnDownBg()"
                                                                            onmouseup="chgBtnUpBg()" />
                                                                    </td>
                                                                    <td class="edit">
                                                                        <input id="btn4_1_2" name="btn4_1_2" type="button" value="定位" class="btn" onclick="getXY()"
                                                                            onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <table id="ContentPlaceHolder1_rblMedicalOrgKind" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_rblMedicalOrgKind_0" type="radio" name="ctl00$ContentPlaceHolder1$rblMedicalOrgKind" value="依責任區" /><label for="ContentPlaceHolder1_rblMedicalOrgKind_0">依責任區</label></td><td><input id="ContentPlaceHolder1_rblMedicalOrgKind_1" type="radio" name="ctl00$ContentPlaceHolder1$rblMedicalOrgKind" value="病情需要" /><label for="ContentPlaceHolder1_rblMedicalOrgKind_1">病情需要</label></td><td><input id="ContentPlaceHolder1_rblMedicalOrgKind_2" type="radio" name="ctl00$ContentPlaceHolder1$rblMedicalOrgKind" value="指揮中心" /><label for="ContentPlaceHolder1_rblMedicalOrgKind_2">指揮中心</label></td><td><input id="ContentPlaceHolder1_rblMedicalOrgKind_3" type="radio" name="ctl00$ContentPlaceHolder1$rblMedicalOrgKind" value="患者家屬要求" /><label for="ContentPlaceHolder1_rblMedicalOrgKind_3">患者家屬要求</label></td>
	</tr>
</table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                &nbsp;</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="edit">
                                                            患者若有財物無法自行保管
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            代管人：
                                                            <input name="ctl00$ContentPlaceHolder1$txtAssetsSubManger" type="text" id="ContentPlaceHolder1_txtAssetsSubManger" class="text" size="10" />
                                                            ，明細：
                                                            <textarea name="ctl00$ContentPlaceHolder1$txtOtherDescribe_01" rows="4" cols="30" id="ContentPlaceHolder1_txtOtherDescribe_01" class="text">
</textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>
                                                                &nbsp;</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="edit">
                                                            補述事項
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td class="edit">
                                                            <textarea name="ctl00$ContentPlaceHolder1$txtOtherDescribe_02" rows="4" cols="40" id="ContentPlaceHolder1_txtOtherDescribe_02" class="text">
</textarea>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-2">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <th class="edit">
                                                            拒絕送醫簽名
                                                        </th>
                                                        <th class="edit">
                                                            醫護人員或後續處理單位人員簽名
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                                <tr>
                                                                    <th>
                                                                        簽名：
                                                                    </th>
                                                                    <td>
                                                                        <input name="ctl00$ContentPlaceHolder1$txtRefuseHospitalSign" type="text" maxlength="100" id="ContentPlaceHolder1_txtRefuseHospitalSign" class="text" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        聯絡電話：
                                                                    </th>
                                                                    <td>
                                                                        <input name="ctl00$ContentPlaceHolder1$txtRefuseHospitalTel" type="text" maxlength="50" id="ContentPlaceHolder1_txtRefuseHospitalTel" class="text" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        與患者關係：
                                                                    </th>
                                                                    <td>
                                                                        <input name="ctl00$ContentPlaceHolder1$txtRefuseHospitalReleated" type="text" maxlength="50" id="ContentPlaceHolder1_txtRefuseHospitalReleated" class="text" />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <div id="ContentPlaceHolder1_UpdatePanel3">
	
                                                                    <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                                        <tr>
                                                                            <th>
                                                                                簽名：
                                                                            </th>
                                                                            <td>
                                                                                <input name="ctl00$ContentPlaceHolder1$txtFollowUpSign" type="text" maxlength="100" id="ContentPlaceHolder1_txtFollowUpSign" class="text" />
                                                                            </td>
                                                                            <td>
                                                                                &nbsp;
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                時間：
                                                                            </th>
                                                                            <td>
                                                                                <span id="ContentPlaceHolder1_lblFollowUpTime"></span>
                                                                            </td>
                                                                            <td>
                                                                                <input type="submit" name="ctl00$ContentPlaceHolder1$btnFollowUpTime" value="取得時間" id="ContentPlaceHolder1_btnFollowUpTime" class="btn" onmousedown="chgBtnDownBg()" onmouseup="chgBtnUpBg()" />
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                
</div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p>
                                                                &nbsp;</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <table id="ContentPlaceHolder1_rblFollowUpLevel" class="bigchkrdobox">
	<tr>
		<td><input id="ContentPlaceHolder1_rblFollowUpLevel_0" type="radio" name="ctl00$ContentPlaceHolder1$rblFollowUpLevel" value="1" /><label for="ContentPlaceHolder1_rblFollowUpLevel_0">一級</label></td><td><input id="ContentPlaceHolder1_rblFollowUpLevel_1" type="radio" name="ctl00$ContentPlaceHolder1$rblFollowUpLevel" value="2" /><label for="ContentPlaceHolder1_rblFollowUpLevel_1">二級</label></td><td><input id="ContentPlaceHolder1_rblFollowUpLevel_2" type="radio" name="ctl00$ContentPlaceHolder1$rblFollowUpLevel" value="3" /><label for="ContentPlaceHolder1_rblFollowUpLevel_2">三級</label></td><td><input id="ContentPlaceHolder1_rblFollowUpLevel_3" type="radio" name="ctl00$ContentPlaceHolder1$rblFollowUpLevel" value="4" /><label for="ContentPlaceHolder1_rblFollowUpLevel_3">四級</label></td><td><input id="ContentPlaceHolder1_rblFollowUpLevel_4" type="radio" name="ctl00$ContentPlaceHolder1$rblFollowUpLevel" value="5" /><label for="ContentPlaceHolder1_rblFollowUpLevel_4">五級</label></td>
	</tr>
</table>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2" class="edit">
                                                            患者/家屬/關係人簽名
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbAgree" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbAgree" /><label for="ContentPlaceHolder1_ckbAgree">救護人員已充分向患者、家屬或關係人解釋就近送醫需要， 若患者、家屬或關係人仍指定送醫醫院，後果須自行負責。</label></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                                <tr>
                                                                    <th>
                                                                        簽名：
                                                                    </th>
                                                                    <td>
                                                                        <input name="ctl00$ContentPlaceHolder1$txtAllSign" type="text" maxlength="100" id="ContentPlaceHolder1_txtAllSign" class="text" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        聯絡電話：
                                                                    </th>
                                                                    <td>
                                                                        <input name="ctl00$ContentPlaceHolder1$txtAllTel" type="text" maxlength="100" id="ContentPlaceHolder1_txtAllTel" class="text" />
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <p>
                                                                &nbsp;</p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="tabs-3">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td colspan="2">
                                                            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_1" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_1" /><label for="ContentPlaceHolder1_ckbConsumMaterials_1">鼻管</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_2" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_2" /><label for="ContentPlaceHolder1_ckbConsumMaterials_2">成人面罩</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_3" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_3" /><label for="ContentPlaceHolder1_ckbConsumMaterials_3">小兒面罩</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_4" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_4" /><label for="ContentPlaceHolder1_ckbConsumMaterials_4">成人NRM</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_5" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_5" /><label for="ContentPlaceHolder1_ckbConsumMaterials_5">小兒NRM</label></span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_6" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_6" /><label for="ContentPlaceHolder1_ckbConsumMaterials_6">鼻咽</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_7" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_7" /><label for="ContentPlaceHolder1_ckbConsumMaterials_7">口咽</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_8" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_8" /><label for="ContentPlaceHolder1_ckbConsumMaterials_8">拋棄式LMA</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_9" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_9" /><label for="ContentPlaceHolder1_ckbConsumMaterials_9">拋棄式床單</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_10" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_10" /><label for="ContentPlaceHolder1_ckbConsumMaterials_10">沖洗用食鹽水</label></span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                                <tr>
                                                                    <th>
                                                                        3*3紗布：
                                                                    </th>
																	<td>
                                                                        <select name="ctl00$ContentPlaceHolder1$ddlConsumMaterials_13" id="ContentPlaceHolder1_ddlConsumMaterials_13">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>

</select>
                                                                    </td>
                                                                
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                                <tr>
                                                                    <th>
                                                                        4*4紗布：
                                                                    </th>
																	<td>
                                                                        <select name="ctl00$ContentPlaceHolder1$ddlConsumMaterials_14" id="ContentPlaceHolder1_ddlConsumMaterials_14">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>

</select>
                                                                    </td>
                                                                
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                                <tr>
                                                                    <th>
                                                                        4*8紗布：
                                                                    </th>
																	<td>
                                                                        <select name="ctl00$ContentPlaceHolder1$ddlConsumMaterials_15" id="ContentPlaceHolder1_ddlConsumMaterials_15">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>

</select>
                                                                    </td>
                                                                
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                                <tr>
                                                                    <th>
                                                                        繃帶：
                                                                    </th>
																	<td>
                                                                        <select name="ctl00$ContentPlaceHolder1$ddlConsumMaterials_16" id="ContentPlaceHolder1_ddlConsumMaterials_16">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>

</select>
                                                                    </td>
                                                                
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                                <tr>
                                                                    <th>
                                                                        三角巾：
                                                                    </th>
																	<td>
                                                                        <select name="ctl00$ContentPlaceHolder1$ddlConsumMaterials_17" id="ContentPlaceHolder1_ddlConsumMaterials_17">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>

</select>
                                                                    </td>
                                                                
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0" class="subtable">
                                                                <tr>
                                                                    <th>
                                                                        IV注射溶針：
                                                                        
																		<select name="ctl00$ContentPlaceHolder1$ddlConsumMaterials_18" id="ContentPlaceHolder1_ddlConsumMaterials_18">
	<option value="0">0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>

</select>
                                                                    </th>
                                                                
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_11" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_11" /><label for="ContentPlaceHolder1_ckbConsumMaterials_11">IV注射溶液</label></span>
                                                        </td>
                                                        <td>
                                                            <table border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td>
                                                                        <span class="bigchkrdobox"><input id="ContentPlaceHolder1_ckbConsumMaterials_12" type="checkbox" name="ctl00$ContentPlaceHolder1$ckbConsumMaterials_12" onclick="showTxt(&#39;ContentPlaceHolder1_ckbConsumMaterials_12&#39;,&#39;spanOther23&#39;);" /><label for="ContentPlaceHolder1_ckbConsumMaterials_12">其他</label></span>
                                                                    </td>
                                                                    <td>
                                                                        <span id="spanOther23" style="display: none">
                                                                            <input name="ctl00$ContentPlaceHolder1$txtConsumMaterials_12" type="text" id="ContentPlaceHolder1_txtConsumMaterials_12" class="text" size="10" />
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
                                    <td colspan="2">
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="editbtn" colspan="2">
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ibtnSave" id="ContentPlaceHolder1_ibtnSave" onmouseover="MM_swapImage(&#39;ContentPlaceHolder1_ibtnSave&#39;,&#39;&#39;,&#39;images/btn_save_2.png&#39;,1)" onmouseout="MM_swapImgRestore()" src="images/btn_save_1.png" style="height:64px;width:100px;" />
                                        <img src="images/btn_cancel_1.png" alt="取消" width="99" height="64" id="ibtnCancel"
                                            onclick="MM_goToURL('parent','general_list.aspx');return document.MM_returnValue"
                                            onmouseover="MM_swapImage('ibtnCancel','','images/btn_cancel_2.png',1)" onmouseout="MM_swapImgRestore()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td class="editbtn" colspan="2">
                                        <img src="images/button_1_1.png" alt="上一頁" width="83" height="89" id="ibtnLeft4"
                                            onclick="MM_callJS('openDiv(3)')" onmouseover="MM_swapImage('ibtnLeft4','','images/button_1_2.png',1)"
                                            onmouseout="MM_swapImgRestore()" />
                                        <img src="images/button_2_2.png" alt="下一頁" width="85" height="89" id="ibtnRight4"
                                            onmouseover="MM_swapImage('ibtnRight4','','images/button_2_2.png',1)" onmouseout="MM_swapImgRestore()" />
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        &nbsp;
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <span id="ContentPlaceHolder1_lblMsg"></span>
 
                <div id="footer">
                    <p>
                        本局地址：(22060)新北市板橋區南雅南路二段15號 電話：02-89519119 傳真：02-22514761 廉政熱線：02-89535870<br />
                        本網站為新北市政府消防局版權所有，未經允許，不得以任何形式複製和採用 &copy; 2013 | All Rights Reserved改作
                    </p>
                </div>
            </div>
        
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="B7B6AA14" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="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" />
</div></form>
    
<!-- Visual Studio Browser Link -->
<script type="application/json" id="__browserLink_initializationData">
    {"appName":"Microsoft Edge","requestId":"9eb7bc75f0be4426805409022c5e40a3"}
</script>
<script type="text/javascript" src="http://localhost:49963/117e1a67180c44bd91c37733a9a2d106/browserLink" async="async"></script>
<!-- End Browser Link -->

</body>
</html>