<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$dtx=($iniFile->getItem('地图坐标','x'));


if($dtx==78||$dtx==79){
 echo "<p style='color: black'>对不起！！你正在挑战内请先离开</p><br>";
  	
	
} else{	
echo "<p style='color: red'>各项挑战如下：</p>"."<br>";
 

 
echo "<p style='color: black'>1.</p>";
 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=401;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【通天塔】</p></a>"."<br>";
echo "<p style='color: black'>2.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=451;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【阴曹地府】</p></a>"."<br>";
echo "<p style='color: black'>3.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=641;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【诛仙台】</p></a>"."<br>";
 
}
 
 echo "<br>";

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
//解锁当前使用的i
 
 
 






?>