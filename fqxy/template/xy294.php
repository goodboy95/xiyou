<?php




//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ymid=($iniFile->getItem('背包页面','页面id'));




if($ymid==286){ //背包其他
//ini文件名字
$inina="ckqt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('其他数量',$npcc));




} 

if($ymid==286){ //背包其他
//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;
} 





$qbwp=0;

$sl=$wpsl;
$sll=1;

include("npcc/qcqt02.php");


///////////////////////////丢弃数量等于1的物品/////////////////////////////



if($qbwp==1){//背包书卷
if($ymid==278){//背包书卷

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=278;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回书卷</font></a>"."<br>";
} elseif($ymid==279){ //背包材料

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=279;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回材料</font></a>"."<br>";



} elseif($ymid==281){ //背包商城

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=281;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回商城</font></a>"."<br>";


} elseif($ymid==282){ //背包丹药
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=282;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回丹药</font></a>"."<br>";


} elseif($ymid==283){ //背包任务

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=283;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回任务</font></a>"."<br>";



} elseif($ymid==284){ //背包农场

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=284;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回农场</font></a>"."<br>";




} elseif($ymid==285){ //背包宝箱

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=285;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回宝箱</font></a>"."<br>";
} elseif($ymid==286){ //背包宝箱

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=286;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回其他</font></a>"."<br>";



} 



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";





echo "<font color=black>----------------------</font></a>"."<br>";
//cmd及超链接值
include("fhgame.php");


} 



} 
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>





