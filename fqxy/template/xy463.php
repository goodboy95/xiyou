<?php




//获取我的银两和金豆
include("./ini/ylck_ini.php");
$yl01=($iniFile->getItem('玩家信息','银两'));
$yl02=($iniFile->getItem('玩家信息','金豆'));
$yl03=($iniFile->getItem('玩家信息','金带'));

echo "<p style='color: red'>【我的小仓】：</p>"."<br>";



//数字转汉字
$yl=$yl01;
include("./pz/ylts.php");
echo "<p style='color: black'>〖银两〗：".$ylxx."两</p>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=464;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【提现】</p></a><br>";

echo "<p style='color: black'>〖金豆〗：".$yl02."个</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=464;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【提现】</p></a><br>";
echo "<p style='color: black'>〖金带〗：".$yl03."个</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=464;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【提现】</p></a><br>";


echo "<p style='color: balck'>--------------</p>"."<br>";

echo "<p style='color: red'>说明：猜拳，吹泡获胜的财物包括撤回的都在这里（提现收取手续费用银两5%，金豆2%）</p><br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=403;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回娱乐</p></a>"."<p style='color: black'></p>"."<br>";
?>