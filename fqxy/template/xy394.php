<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

echo "<p style='color: black'>玩家PK信息：</p><br>";
echo "<p style='color: black'>------------------------------</p><br>";
echo "<p style='color: black'>".$pk8."向你发起了攻击"."</p><br>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=389;
$npc[]=$pk5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>开始反击</p></a>"."<p style='color: black'></p>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=393;
$npc[]=$pk5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>脱离战斗</p></a>"."<p style='color: black'></p>"."<br>";
echo "<p style='color: black'>提示：脱离了战斗对方仍然可以攻击你</p><br>";

echo "<p style='color: black'>------------------------------</p><br>";

echo "<br>";

//cmd及超链接值
include("fhgame.php");

} 
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


