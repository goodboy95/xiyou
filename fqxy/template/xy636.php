<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
	
	
$npcc11=$npcc;//存值

//提供需要扣除的物品作为判读依据
$wpdz1[]="【国庆金锤】";//名字
$wpdz2[]=6;//物品分类
$wpdz3[]=843;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值

if ($pd==2) {

$manzu1="";

$bz= rand(1,5);
//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=$bz;//	量
$wpdz5[]=1;//	重量
//物品加

$bz= rand(1,5);
//物品加
$wpdz1[]="〖云梯石〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=821;//物品id
$wpdz4[]=$bz;//	量
$wpdz5[]=1;//	重量
//物品加


include("./rwmap/rwget.php");

if($npcc11==1){
echo "<p style='color: red'>恭喜你！！敲碎了【1号金蛋】获得大量奖励</p>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在国庆活动中敲碎了【1号金蛋】获得了大量奖励";
include("./msg/msgg02.php");
} elseif($npcc11==2){  
echo "<p style='color: red'>恭喜你！！敲碎了【2号金蛋】获得大量奖励</p>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在国庆活动中敲碎了【2号金蛋】获得了大量奖励";
include("./msg/msgg02.php");
} elseif($npcc11==3){  
echo "<p style='color: red'>恭喜你！！敲碎了【3号金蛋】获得大量奖励</p>"."<br>";
include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在国庆活动中敲碎了【3号金蛋】获得了大量奖励";
include("./msg/msgg02.php");
}
	





} else{
echo "<p style='color: red'>对不起！！敲金蛋需要【国庆金锤】x1</p>"."<br>";

}

	
	
	
	
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
	
	
	
	

