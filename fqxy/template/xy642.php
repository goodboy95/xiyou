<?php

echo "<p style='color: red'>【诛仙台】第一层</p>"."<br>";



//调用zt.ini是否存在
$wjxx="";
$wjxx1="";
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));
include("wj/ztt.php");
include("wj/zfzt.php");
$ohp=$wjxx['红'];
$omaxhp=$wjxx1['血'];	

echo "<p style='color: red'>【诛仙台属性】:</p>"."<br>";
//显示自己
echo "<p style='color: black'>HP:(".$ohp."/".$omaxhp.")</p>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=641;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<p style='color: black'></p>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<p style='color: black'></p>"."<br>";
echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");

 






?>