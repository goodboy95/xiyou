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




if($ymid==236){ //背包其他
//ini文件名字
$inina="gsqt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$wpsl=($iniFile->getItem('其他数量',$npcc));




}








///////////////////////////丢弃数量大于1的物品/////////////////////////////
if($wpsl>1){


if($ymid==236){ //背包其他
//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;
}

include("npcc/xgsqt01.php");


//echo "<br>";




if($ymid==236){ //背包其他

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=236;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<br>";



}


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");






///////////////////////////丢弃数量大于1的物品/////////////////////////////








///////////////////////////丢弃数量等于1的物品/////////////////////////////

} elseif($wpsl==1){  
$sl=1;
$wpsl=1;
$sll=1;
//调用物品信息
include("./wp/zbbs.php");


include("npcc/xgsqt02.php");


///////////////////////////丢弃数量等于1的物品/////////////////////////////







} else{
echo "<p style='color: red'>该宝石已被买走了！！</p>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=236;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<br>";


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



?>