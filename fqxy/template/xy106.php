<?php

$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;



$wjid=$wjid1;

echo "<p style='color: black'>看宝宝正在紧张编写中.....</p><br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回</p></a><br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";





echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");


?>