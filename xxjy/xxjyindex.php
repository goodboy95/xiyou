<?
header("Content-type: text/html; charset=utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>小轩西游-登录成功</title>
    <link rel="stylesheet" href="../css/touchScreen/mobile.css"/>
    <link rel="stylesheet" href="../css/touchScreen/ch5game.css"/>
    <link rel="stylesheet" href="../css/touchScreen/ccolorbutton.css"/>
    <link rel="icon" href="../img/favicon.png" type="image/x-icon"/>
    <style type="text/css">
        #search {
            width: 235px;
            height: 32px;
            border-radius: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            border: 1px solid #ccc;
            background-color: transparent;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }
        #search1 {
            width: 82px;
            height: 38px;
            background: #0086DB;
            border: 0;
            border-radius: 10px;
            margin-top: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        input:focus {
            border-color: #66AFE9 !important;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
            -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, 0.6);
        }
        ::-webkit-input-placeholder {
            text-indent: 20px;
            font-size: 16px;
        }
        ::-moz-input-placeholder {
            text-indent: 20px;
            font-size: 16px;
        }
        a {
            color: #0077E0;
        }
        table {
            max-width: 600px;
            min-width: 280px;
        }
        td {
            height: 30px;
        }
        .lbg {
            height: 20px;
            border-bottom: 1px solid #DCDCDC;
        }
        .btable {
            border-top: 1px solid #9DB3C5;
        }
        .circle {
            width: 16px;
            height: 16px;
            line-height: 16px;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            color: #fff;
            text-align: center;
            font-size: 10px;
        }
        .red.circle {
            background: #e62727;
        }
        .orange.circle {
            background: #ff5c00;
        }
        .pink.circle {
            background: #e22092;
        }
        .green.circle {
            background: #56A418;
        }
        .blue.circle {
            background: #2981e4;
        }
        .err {
            color: red;
            font-size: 13px;
        }
    </style>
</head>
<body>
<?php
error_reporting(E_ALL & ~E_NOTICE);
$wjid = $_GET['wjid'];
$password = $_GET['pass'];
//ini文件名字
$inina = "user.ini";
//路径
$path = '../ache/' . $wjid;
//判断ini文件是否存在	
$ininame = $path . "/" . $inina;
$filename = $ininame;
if (file_exists($filename)) {
    include("../class/iniclass.php");//调用iniclass文件
    //调用user.ini是否存在
    include("../ini/user_ini.php");
    # 获取一个分类下某个子项的值
    $pass = ($iniFile->getItem('验证信息', '玩家验证'));
    if ($pass == "" && $password == "") {
        $pass = 1;
    }
    if ($pass == $password) {
        $name = ($iniFile->getItem('验证信息', '玩家昵称'));
        include("../url/url.php");
        $xyurl = "http://" . $xxjyurl . "/xxjy/index.php?wjid=$wjid&&pass=$password";
        $zcxx = "<p style='color: red'>登录成功</p>" . "<br>";
        $zcxx1 = "<p style='color: red'>" . $name . "欢迎您回来！！小轩游戏社区有你更精彩！！</p>" . "<br>";
    } else {
        include("../url/url.php");
        $xyurl = "http://" . $xxjyurl . "/index.php";
        $zcxx = "<p style='color: red'>当前验证信息失效,请重新登录</p>" . "<br><br><a href='login.php'><p style='color: blue'>返回登录</p></a>" . "<br>";
    }
} else {
    include("../url/url.php");
    $xyurl = "http://" . $xxjyurl . "/index.php";
    $zcxx = "<p style='color: red'>当前验证信息失效,请重新登录</p>" . "<br><br><a href='login.php'><p style='color: blue'>返回登录</p></a>" . "<br>";
}
?>
<div class="g-hd f-cb">
    <img src="../images/logo1.jpg" alt="">
    <div align="right">
        <div style="margin-right: 10px;" class="m-icon-list">
            <br/>
        </div>
    </div>
</div>
<div class="g-mn">
    <div class="m-box">
        <div class="m-box-hd" style="margin-left: 3%;">
            <div class="tt">
                <? echo $zcxx; ?><br>
            </div>
        </div>
        <div class="m-box-mn" style="padding: 5px 10px 0px 10px;">
            <? echo $zcxx1; ?><br>
            <br>
            <br>
            <br>
            <br>
            <div class="article-content" style="font-size: 15px;margin-top: 10px;">
            </div>
        </div>
    </div>
</div>
<div class="g-ft f-cb">
    <div class="f-fr"><a href="<? echo $xyurl; ?>" class="to-top">返回官网</a><br/></div>
</div>
</body>
</html>
