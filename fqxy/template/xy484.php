<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$cwidd=$npcc;


if($cwidd){











//调用cw.ini是否存在
include("./ini/cw_ini.php");
$cwmz1=($iniFile->getItem('宠物原始名字',$cwidd));
$cwmz2=($iniFile->getItem('宠物名字',$cwidd));
$cwxj=($iniFile->getItem('宠物星级',$cwidd));
if($cwmz2){
$cwmz3="<p style='color: red'>".$cwmz1."（".$cwmz2."）</p>"."<br>";
} else{	
$cwmz3="<p style='color: red'>".$cwxj."</p>"."<br>";
}
$zbid=$cwidd;

echo $cwmz3;


echo "<p style='color: black'>星级：极品".$cwxj."星</p>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=485;
$npc[]=$cwidd;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【开始升星】</p></a>"."<br>";







echo "<p style='color: red'>温馨提示：需要宠物星源进行升星100%成功（宠物星级越高所要求的星源颜色品质越高）</p>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=365;
$npc[]=$cwidd;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=362;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回宠物</p></a>"."<br>";
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





} else{	
echo "<p style='color: red'>宠物有误！！请联系GM解决此问题</p>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";
}











}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



