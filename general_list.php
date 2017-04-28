
<?php
include ("conf.php");
?>
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
        </head>
    <body onload="MM_preloadImages('images/btn_qry_2.png','images/btn_add_2.png','images/sidemenu_8_2.png','images/sidemenu_9_2.png','images/head_menu_2_2.png')">
    <form action="general_list.php" method="POST" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="6w+4R628HK506Hf3f5krkb8A2BFx4bwBE28NPOpWMXEZf6Q0rP5L1v/ULTXL3zwrIIEL9rlDht/tO8HkoOw0hH/ICQQOpD2VOwCWowyXnimEu5bOHV1aD2YYVarmbF8B5DPZMhLWsS4P0rtOpbSWgudjGU2O86NwiHPBuD8eHgIugXYu+k4uvU/+GevQV3x3yoEDHqIeKCl28ViNtiVqF7WejJs0JIL1MHZweQJJrSxLAemZ0MKZjxOGBAntp/cUuMq4MUSWVRCLeN8XwWsvFVbisi2/7wqFh2LV+8B5muWwXMm9ISHS+dVE4YIepd1RVPU10CWV7u4WFNCkSwzHZ771PfK2rzV1zBGIS90kaO7MINeyi/evHJeSEoEOQi/jMAuahC5n/Koc6RL73WWV/O60hrLoKTSJspoqg7BXyPo=" />
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


<script src="/WebResource.axd?d=prkwPsh0NG0chXnOKFou33p6pR-37Rx_g3oYKrv-mAyoVR5XZPbiYbtEsM7W9YXAhaNQAPFhR5K_vzLPtIys-O2k15rq31w09Rcj0nRJ4TM1&amp;t=635810180628077660" type="text/javascript"></script>


<script src="/ScriptResource.axd?d=KCfhcOjuHlkEajGbYaA8imFZDVWZQdhJH2eYI-mFCfSpgiSahUAw7Np1pGVJBi1EfVWjsozqj1PNs3QtsB-jPs7V3BoOjV7B11EGZHannI69AK1b49ssU1QY6OUzvTW_jVqAO9d_vpTYcMV9UvkvLDSA9ZSg6z7hnjTY9tAfova0_zzzD-uavRe-tIpdrFhr0&amp;t=ffffffffba49bcf7" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('ASP.NET Ajax 用戶端架構無法載入。');
//]]>
</script>

<script src="/ScriptResource.axd?d=2Ifp5NV6SEVZskLssKevTMGJ-puETATERKG7OIBRTa6QA45kEtCSivDvfVUoQlFAVcY_bM10ObosjA1GtTXL3PUBhGwth3kg9gQXjdTNQsTrCAthLVSo8r-HzniHl9w5ob5Ci1lT3NW7_2HK8M7NzUd7jjJqBjVLiF2uFfx2MfUSmYwkyc-loO-cHuCoQl_-0&amp;t=ffffffffba49bcf7" type="text/javascript"></script>
            <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'form1', [], [], [], 90, 'ctl00');
//]]>
</script>

            <div id="wrapper">
                

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
                        onclick="MM_goToURL('parent','general_list.php');return document.MM_returnValue" 
                        onmouseover="MM_swapImage('imgMenuGeneral','','images/head_menu_1_2.png',1)" 
                        onmouseout="MM_swapImgRestore()" /><img
                            src="images/head_menu_2_1.png" alt="特殊表" width="96" height="37" id="imgMenuSpecial"
                            onclick="MM_goToURL('parent','special_list.php');return document.MM_returnValue"
                            onmouseover="MM_swapImage('imgMenuSpecial','','images/head_menu_2_2.png',1)"
                            onmouseout="MM_swapImgRestore()" />
                    </div>
                </div>
    <div id="container">
        <div id="sidebar">
            <ul id="nav">
                <li>
                    <img src="images/sidemenu_8_2.png" alt="一般表" width="157" height="74" id="imgGeneral"
                        onclick="openDiv(1)" onmouseover="MM_swapImage('imgGeneral','','images/sidemenu_8_2.png',1)"
                        onmouseout="MM_swapImgRestore()" />
                </li>
                <li>
                    <img src="images/sidemenu_9_1.png" alt="特殊表" width="157" height="74" id="imgSpecial"
                        onclick="openDiv(2);MM_goToURL('parent','special_list.php');return document.MM_returnValue"
                        onmouseover="MM_swapImage('imgSpecial','','images/sidemenu_9_2.png',1)" onmouseout="MM_swapImgRestore()" />
                </li>
            </ul>
        </div>
        <div id="content">
            <div id="path">
                <p>首頁>一般表列表</p>
                &nbsp;
            </div>
            
            <div id="list">
           
                <table width="87%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <img src="images/search_top.png" width="694" height="14" alt="" />
                        </td>
                    </tr>
                    <tr>
                        <td class="edit">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <th width="20%">出勤單位</th>
                                    <td width="70%">
                                        <select name="ctl00$ContentPlaceHolder1$ddlDutyOrg_1" id="ContentPlaceHolder1_ddlDutyOrg_1">
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

</select>
                                        <select name="ctl00$ContentPlaceHolder1$ddlDutyOrg_2" id="ContentPlaceHolder1_ddlDutyOrg_2">
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

</select>
                                    </td>
                                </tr>
                                <!--<tr>
                                <th>出勤通知時間</th>
                                <td><select name="ddlDutyTime1">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                    <select name="ddlDutyTime2">
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
                                    </select>
                                    ：
                                    <select name="ddlDutyTime3">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <select name="ddlDutyTime4">
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
                                    </select></td>
                            </tr>-->
                                <tr>
                                    <th>患者姓名</th>
                                    <td><input name="ctl00$ContentPlaceHolder1$txtPatientName" type="text" maxlength="20" id="ContentPlaceHolder1_txtPatientName" /></td>
                                </tr>
                                <tr>
                                    <th>身分證字號</th>
                                    <td><input name="ctl00$ContentPlaceHolder1$txtUID" type="text" maxlength="10" id="ContentPlaceHolder1_txtUID" /></td>
                                </tr>
                                <!--<tr>
                                <th>年齡</th>
                                <td><input name="" type="text" size="4" />～<input name="" type="text" size="4" /> 
                                <div style="color:#F00">(請輸入年齡區間，查詢一個年齡時，兩格請輸入相同年齡)</div></td>
                            </tr>-->
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="btnqry">
                            <input type="image" name="ctl00$ContentPlaceHolder1$ibtnQry" id="ContentPlaceHolder1_ibtnQry" onmouseover="MM_swapImage(&#39;ContentPlaceHolder1_ibtnQry&#39;,&#39;&#39;,&#39;images/btn_qry_2.png&#39;,1)" onmouseout="MM_swapImgRestore()" src="images/btn_qry_1.png" style="height:66px;width:102px;"  />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="images/search_bottom.png" width="694" height="14" alt=""/>
                        </td>
                    </tr>
                    
                    <tr>
                        <th>
                            
                            <input type="image" name="ctl00$ContentPlaceHolder1$ibtnAdd" id="ContentPlaceHolder1_ibtnAdd" onmouseover="MM_swapImage(&#39;ContentPlaceHolder1_ibtnAdd&#39;,&#39;&#39;,&#39;images/btn_add_2.png&#39;,1)" onmouseout="MM_swapImgRestore()" src="images/btn_add_1.png" style="height:66px;width:102px;" onclick="location.href='general_edit.php'; return false;" />
                            
                        </th>
                    </tr>
                    <tr>
                        <td class="listtable">
                            
                                    <span id="ContentPlaceHolder1_lvwGeneralList_lblEmpty"></span>
                                
                        </td>
                    </tr>
                    
                    <?php

                        $link = mysqli_connect($hostname, $username, $password, $database) OR die("Error: Unable to connect to MySQL.");
                        mysqli_set_charset($link,"utf8");
                        //$query = "SELECT date_format(`db_emergency`.`AttendanceTime`,'%Y-%m-%d') AS AttendanceTime";
                        //$query_1="SET @row = 0;";
                        

                        if(isset($_POST['ctl00$ContentPlaceHolder1$txtPatientName'])){
                            $unitnumber=$_POST['ctl00$ContentPlaceHolder1$ddlDutyOrg_1'].$_POST['ctl00$ContentPlaceHolder1$ddlDutyOrg_2'];
                            if($_POST['ctl00$ContentPlaceHolder1$txtPatientName']!=null or $_POST['ctl00$ContentPlaceHolder1$txtUID']!=null or $unitnumber!="00"){
                                    $query = "SELECT ID,AttendanceTime,AttendanceUnit,Name,IdCardNumber,Age FROM `db_emergency` WHERE `Name` LIKE '".$_POST['ctl00$ContentPlaceHolder1$txtPatientName']."' OR `IdCardNumber` LIKE '".$_POST['ctl00$ContentPlaceHolder1$txtUID']."' OR `AttendanceUnit` LIKE '".$unitnumber."'  ORDER BY AttendanceTime";
                            }else{
                                    echo "no input";
                                    $query="SELECT ID,AttendanceTime,AttendanceUnit,Name,IdCardNumber,Age FROM `db_emergency` ORDER BY AttendanceTime";
                                    //$query="SELECT @i := @i + 1 AS ID,AttendanceTime,AttendanceUnit,Name,IdCardNumber,Age FROM `db_emergency` ,(SELECT @i:=0)i ORDER BY AttendanceTime";
                                }
                        }else{
                            $query="SELECT ID,AttendanceTime,AttendanceUnit,Name,IdCardNumber,Age FROM `db_emergency` ORDER BY AttendanceTime";
                            //$query="SELECT @i := @i + 1 AS ID,AttendanceTime,AttendanceUnit,Name,IdCardNumber,Age FROM `db_emergency` ,(SELECT @i:=0)i  ORDER BY AttendanceTime";
                        }
                        
                        

                        
                        //$query=$query_1.$query_2;
                        echo $query;
                        $result=mysqli_query($link,$query) or die("Connect DB Table Error!");
                        
                        echo '<tr>
                        <td class="listtable">
                        <table width="100%" border="1" cellspacing="0" cellpadding="0">
                            <tr>
                                <th width=70>表單編號</th>
                                <th>出勤通知時間</th>
                                <th width=70>出勤單位</th>
                                <th width=111>患者姓名</th>
                                <th width=170>身分證字號</th>
                                <th width=56>年齡</th>
                                <th>刪除</th>
                            </tr>
                        </table>
                        </td>
                        </tr>
                        ';
                        echo '<tr>
                        <td class="listtable">';
                            echo '<table width="100%" border="1" cellspacing="0" cellpadding="0">';

                        while ($row=mysqli_fetch_array($result)) {
                            
                            echo "<tr><th width=70>".$row["ID"].'</th><td align=Right width=166>'.$row["AttendanceTime"].'</td><td align=Right width=70>'.$row["AttendanceUnit"].'</td><td align="Right" width=111>'.$row["Name"]."</td><td width=170>".$row["IdCardNumber"]."</td><td width=56>".$row["Age"]."</td><td>";?>
                            <a href="del.php?ID=<?php echo $row["ID"]; ?>" onclick="return confirm('確定刪除此筆資料?')">刪除</a>
                            <!--echo "<a href=del.php?ID=".$row["ID"].">刪除</a>";-->
                            <?php
                            echo '</td></tr>';

                        }
                        echo '</table></td></tr>';
                    ?>
                    
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

    <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="AAB76EAA" />
    <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" />
    <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="6cpwV/lcq7z64Tj5waZRMQfT1sihbez6wjhrlBbm5UmMzfJi/Qi/n6H6p9IbO1KCF5fyZezDpeYMXSZ/6lmqEePAp1+iGqAKCR+y4l7AMczLQmIqiThYtvzh9U8JCP2fWeQxO8TnbuYaphR1OCWV3HsaJcsjSNzQSWBIGddwQAENfPDLHIOU6P2htqSfX9GG+eKG49Zi0SmE2RQN59pbY59eyTDEHsF27f12abSTBvTj5zx77hUZZhpYjwW2nsFhKqTIqNZY6g60gcIYoB5RXJHkKY/tOkupK2G6Tjsyw+as6LH/vbvE2b9FcVbhj17mxuSFeB2r2kYlzzB98tjTM0BIfXeLoFKez1r+k0l7KBi8L4WixOZtiuHAff6mpfZC5JnVUzkl2/9eIo8+wWAyqqtTDrqDgeRriq1PchbLn/wJyfaEjtJpr0POP2bmXxl1wAcynxlLr6KyoMvL6ZyqpfgKLjFB9hfD1pr8s6UoQt7WbdAHxGC8adOAkBy0MY8Oo9ZRTT2PNhy3/5ErlSaTbxySt1PsQ4dl/pvCjJCsDQPA0Lni2cVx1PU9QSoEf6qFA5yRmzeldEiGm8H+8fJNPelAK11OZwlti+GJsjMN588b6rLKIzMB3AUPkzrWQyLB" />
</div>
    
<!-- Visual Studio Browser Link -->
<script type="application/json" id="__browserLink_initializationData">
    {"appName":"Internet Explorer","requestId":"23b4450b35dc47abbd13c851175e8689"}
</script>
<script type="text/javascript" src="http://localhost:50426/e485553e5e2c4531825282094f5c3395/browserLink" async="async"></script>
<!-- End Browser Link -->
</form>
</body>
</html>