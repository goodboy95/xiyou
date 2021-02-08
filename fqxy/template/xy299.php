<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

if($npcc ==1){

echo "<p style='color: red'>攻略大全正在紧张编写中</p><br>";
echo "<p style='color: red'>如有疑问请咨询客服:QQ:137154720</p><br>";
echo "<p style='color: red'>或加入西游群QQ:54665469</p><br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=203;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回系统</p></a>"."<br>";
echo "<br>";	
} elseif($npcc ==2){	
echo "<p style='color: red'>客服:QQ:137154720</p><br>";
echo "<p style='color: red'>西游群QQ:54665469</p><br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=203;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回系统</p></a>"."<br>";
echo "<br>";	
} else{
echo "<p style='color: red'>找不到当前页面</p><br>";

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
include("./ini/jsini.php");
//解锁当前使用的ini
















