<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



echo "<p style='color: black'>你脱离了来自玩家的攻击</p>"."<br>";


include("./ini/pkbl_ini.php");
$iniFile->delItem('玩家id', $npcc);
$iniFile->delItem('玩家pk', $npcc);
$iniFile->delItem('玩家名字', $npcc);
$iniFile->delItem('玩家伤害', $npcc);
$iniFile->delItem('玩家攻击语', $npcc);
$iniFile->delItem('被打死', $npcc);

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";

echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");


}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


