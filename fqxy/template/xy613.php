<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

include("./mb/tgmbbtime.php");//秘宝活动开启时间
if ($hdtime==2) {

$file01="./mb/mb".$npcc.".php";


if(file_exists($file01)){
$a=filemtime($file01);
$startdate=date("Y-m-d H:i:s",$a);
$enddate=date('Y-m-d H:i:s');
$date=floor((strtotime($enddate)-strtotime($startdate))/86400);
$hour=floor((strtotime($enddate)-strtotime($startdate))%86400/3600);
$minute=floor((strtotime($enddate)-strtotime($startdate))%86400/60);
$second=floor((strtotime($enddate)-strtotime($startdate))%86400%60);
if($second <= $msgtime){
$xtmsg=1;		
} else{
unlink($file01); //删除文件  
$xtmsg=2;	
$mbsjtime= rand(1, 60);
$mbtime=date("Y-m-d H:i:s",strtotime("+".$mbsjtime."seconds"));
$zlmb='$mb';
file_put_contents($file01,"<?
$zlmb='".$mbtime."';
?>");	
} 




}else{
$xtmsg=2;	
$mbsjtime= rand(1, 60);
$mbtime=date("Y-m-d H:i:s",strtotime("+".$mbsjtime."seconds"));
$zlmb='$mb';
file_put_contents($file01,"<?
$zlmb='".$mbtime."';
?>");	
}




include("./wj/mbdl.php");












}else{
echo "<p style='color: red'>对不起~~~【天降秘宝】时间已过~~等待下一轮开启</p>"."<br>";
}

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";


}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>