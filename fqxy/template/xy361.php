<?php
echo "<p style='color: red'>很遗憾！！捕捉失败了，".$nname."居然溜走了！！！</p>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>继续走</p></a>"."<br>";


//宠物加时间
include("./pz/pz06.php");//调用可以捕捉的宠物id
if ($cwbz==2) {
include("./ini/user_ini.php");
# 获取一个分类下某个子项的值
$bosid=$npcc;
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));
include("./ini/qycw_ini.php");
//写入boss时间
$enddate=date('Y-m-d H:i:s');
$iniFile->updItem('boss', [$npcc => $enddate]);	
	
	
} 

//宠物加时间


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




