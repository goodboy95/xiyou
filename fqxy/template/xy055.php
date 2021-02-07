<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


include("./wp/wpxx.php");//信息页面
$wpid=$npcc;


echo "<p style='color: black'>$wpmz</p>"."<br>";
echo "<p style='color: black'>描述：$wpms</p>"."<br>";
echo "<p style='color: black'>价格：".$wpjd."金豆</p>"."<br>";
echo "<p style='color: black'>需要等级：$wpdj</p>"."<br>";
echo "<p style='color: black'>重量：$wpzl</p>"."<br>";
if($wpbd==1){
$wpbdd="否";	
} else{	
$wpbdd="是";	
}
echo "<p style='color: black'>是否绑定：$wpbdd</p>"."<br>";
include("npcc/mdx03.php");
include("./ini/wp_ini.php");
$npcc=($iniFile->getItem('序列','初始'));

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=53;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回商城</p></a>"."<br>";







//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";






echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");





}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>