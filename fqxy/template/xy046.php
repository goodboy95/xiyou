<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

//调用zt.ini是否存在
include("./ini/zxrw_ini.php");
$rwid=($iniFile->getCategory('任务id'));
$rwbl=($iniFile->getCategory('任务变量'));
$rwmz=($iniFile->getCategory('任务名字'));
$rwfl=($iniFile->getCategory('任务分类'));
$m=count($rwbl,0)-1; 
$i=0;
$ik=0;

if($m>=1){
echo "<p style='color: black'>我的【支线任务】</p>"."<br>";


foreach(array_keys($rwid) as $key){
$keyrwid[]=$rwid[$key];
}
foreach(array_keys($rwbl) as $key){
$keyrwbl[]=$rwbl[$key];
}
foreach(array_keys($rwmz) as $key){
$keyrwmz[]=$rwmz[$key];
}
foreach(array_keys($rwfl) as $key){
$keyrwfl[]=$rwfl[$key];
}




for($d=0;$d<$m;$d++){
$i=$i+1;
if($keyrwfl[$i]==2){
	$ik=$ik+1;
	
$rwstr=$keyrwid[$i]."_".$keyrwfl[$i];

echo "<p style='color: black'>".$ik.".</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=49;
$npc[]=$rwstr;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$keyrwmz[$i]."</p></a>"."<br>";

}




}





} else{	
echo "<p style='color: black'>暂时还未接受任何支线任务</p>"."<br>";

}



echo "<p style='color: black'>----------</p>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=44;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回任务分类</p></a>"."<br>";
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


