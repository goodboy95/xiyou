<?php


$fb="byzzl";//副本变量
$fbid1=4;//副本变量
$fbid2=5;//副本变量
$fbid3=6;//副本变量
$fbid4=32;//副本变量
include("./ini/fb_ini.php");



$fbid=$fbid1;
$gwbl=($iniFile->getCategory($fbid));

if ($gwbl[怪物1]==2&&$gwbl[怪物2]==2&&$gwbl[怪物3]==2&&$gwbl[怪物4]==2&&$gwbl[怪物5]==2||$gwbl['完成情况']==3) {
	
if ($gwbl['完成情况']==1) {
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>！</p>";
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=87;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【普通】</p></a>"."<br>";
} else{
	
$fbtime=$gwbl['激活时间'];
$nowtime=date('Y-m-d H:i:s');
$fbtime1 = substr($fbtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($fbtime1!=$nowtime1&&$fbtime1!=""){
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>！</p>";
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=85;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【普通】</p></a>"."<br>";
}else{ 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=8;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【普通】</p></a>"."<br>";

} 
	
	
	

} 
	
}else{ 

if ($tpbl==1) {
$img='pic/ts/ts2.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>？</p>";
}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=7;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【普通】</p></a>"."<br>";








}












$fbid=$fbid2;
$gwbl=($iniFile->getCategory($fbid));
if ($gwbl[怪物1]==2&&$gwbl[怪物2]==2&&$gwbl[怪物3]==2&&$gwbl[怪物4]==2&&$gwbl[怪物5]==2||$gwbl['完成情况']==3) {
	
if ($gwbl['完成情况']==1) {
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>！</p>";
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=87;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【困难】</p></a>"."<br>";
} else{
	
$fbtime=$gwbl['激活时间'];
$nowtime=date('Y-m-d H:i:s');
$fbtime1 = substr($fbtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($fbtime1!=$nowtime1&&$fbtime1!=""){
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>！</p>";
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=85;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【困难】</p></a>"."<br>";
}else{ 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=10;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【困难】</p></a>"."<br>";

} 
	
	
	

} 
	
}else{ 


if ($tpbl==1) {
$img='pic/ts/ts2.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>？</p>";
}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=9;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【困难】</p></a>"."<br>";









}





$fbid=$fbid3;
$gwbl=($iniFile->getCategory($fbid));

if ($gwbl[怪物1]==2&&$gwbl[怪物2]==2&&$gwbl[怪物3]==2&&$gwbl[怪物4]==2&&$gwbl[怪物5]==2||$gwbl['完成情况']==3) {
	
if ($gwbl['完成情况']==1) {
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>！</p>";
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=87;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【梦魇】</p></a>"."<br>";
} else{
	
$fbtime=$gwbl['激活时间'];
$nowtime=date('Y-m-d H:i:s');
$fbtime1 = substr($fbtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($fbtime1!=$nowtime1&&$fbtime1!=""){
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>！</p>";
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=85;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【梦魇】</p></a>"."<br>";
}else{ 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=12;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【梦魇】</p></a>"."<br>";

} 
	
	
	

} 
	
}else{ 


if ($tpbl==1) {
$img='pic/ts/ts2.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>？</p>";
}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=11;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【梦魇】</p></a>"."<br>";









}




$fbid=$fbid4;
$gwbl=($iniFile->getCategory($fbid));

if ($gwbl[怪物1]==2&&$gwbl[怪物2]==2&&$gwbl[怪物3]==2&&$gwbl[怪物4]==2&&$gwbl[怪物5]==2||$gwbl['完成情况']==3) {
	
if ($gwbl['完成情况']==1) {
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>！</p>";
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=87;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【地狱】</p></a>"."<br>";
} else{
	
$fbtime=$gwbl['激活时间'];
$nowtime=date('Y-m-d H:i:s');
$fbtime1 = substr($fbtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($fbtime1!=$nowtime1&&$fbtime1!=""){
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>！</p>";
}	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=85;
$npc[]=$fbid;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【地狱】</p></a>"."<br>";
}else{ 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=64;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【地狱】</p></a>"."<br>";

} 
	
	
	

} 
	
}else{ 


if ($tpbl==1) {
$img='pic/ts/ts2.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>？</p>";
}
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=88;
$npc[]=63;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>激活变异竹林副本【地狱】</p></a>"."<br>";










}
















?>







