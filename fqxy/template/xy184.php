<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){



if($bpid>=1){
//调用zt.ini是否存在

include("./ini/bpp_ini.php");

$xl=($iniFile->getItem('序列',$npcc));
$gjwjmz=($iniFile->getItem('名字',$xl));
include("./ini/bp_ini.php");
$gjmz=($iniFile->getItem('国家信息','国家名字'));
echo "<p style='color: red'>你确定要将".$gjwjmz."踢出".$gjmz."么？？</p><br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=339;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>是的，我已想好了</p></a>"."<br>";


echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=175;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>不，我点错了</p></a>"."<br>";







echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=172;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回国家</p></a>"."<br>";
} else{
	

echo "<p style='color: black'>你还未加入任何国家！！</p><br>";
}























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
include("./ini/jjsini.php");
//解锁当前使用的ini



}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>