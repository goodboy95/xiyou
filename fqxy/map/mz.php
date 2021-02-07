<?php


		//调用zt.ini是否存在  
include("./ini/fz_ini.php");
$fzpd=($iniFile->getItem('所处房间人id','初始'));

if($fzpd==123){

	//调用家具缓存
include("./ini/jj_ini.php");
# 获取一个分类下所有数据$
$jjxx2=($iniFile->getCategory('家具等级'));
$jjxx3=($iniFile->getCategory('家具摆放'));
$jjxx4=($iniFile->getCategory('家具名字'));

} else{	

$wjid1=$wjid;
$wjid=$fzpd;


if($yqbl!=123){

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


	//调用家具缓存
include("./ini/jj_ini.php");
# 获取一个分类下所有数据$
$jjxx2=($iniFile->getCategory('家具等级'));
$jjxx3=($iniFile->getCategory('家具摆放'));
$jjxx4=($iniFile->getCategory('家具名字'));
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

} else{	

	//调用家具缓存
include("./ini/jj_ini.php");
# 获取一个分类下所有数据$
$jjxx2=($iniFile->getCategory('家具等级'));
$jjxx3=($iniFile->getCategory('家具摆放'));
$jjxx4=($iniFile->getCategory('家具名字'));
} 



$wjid=$wjid1;



} 





if ($dty==0) {

  //地名

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>大厅</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=155;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>出门</p></a>"."<br>";

$jjid=3;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}
$jjid=4;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}
$jjid=5;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}
echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>偏厅</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>主人房</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>管家房</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>大厅往哪里走呢？</p>"."<br>";



} elseif ($dty==1) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>偏厅</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

$jjid=25;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}

echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>珠宝房</p></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大厅</p></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>杂物室</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>练武场</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>偏厅往哪里走呢？</p>"."<br>";






} elseif ($dty==2) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>杂物室</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

$jjid=36;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}


$jjid=37;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}
echo "<p style='color: black'>请选择出口</p>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>偏厅</p></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>杂物室往哪里走呢？</p>"."<br>";





} elseif ($dty==3) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>练武场</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
$jjid=6;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}
$jjid=7;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}
echo "<p style='color: black'>请选择出口</p>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>偏厅</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>马棚</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>练武场往哪里走呢？</p>"."<br>";


} elseif ($dty==4) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>管家房</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=5387;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>管家</p></a>"."<br>";
echo "<p style='color: black'>请选择出口</p>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大厅</p></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>管家房往哪里走呢？</p>"."<br>";




} elseif ($dty==5) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>主人房</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
$jjid=1;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}
$jjid=2;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}
echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宠物房</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>次厅</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大厅</p></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>主人房往哪里走呢？</p>"."<br>";


} elseif ($dty==6) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>宠物房</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";


echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>主人房</p></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>宠物房往哪里走呢？</p>"."<br>";

} elseif ($dty==7) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>马棚</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";


echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>练武场</p></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>马棚往哪里走呢？</p>"."<br>";

} elseif ($dty==8) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>珠宝房</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
$jjid=22;//家具id
if($jjxx3[$jjid]==2){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=161;
$npc[]=$jjid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jjxx4[$jjid]."(".$jjxx2[$jjid]."级)</p></a>"."<br>";
}

echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>偏厅</p></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>珠宝房往哪里走呢？</p>"."<br>";



} elseif ($dty==9) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>次厅</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";


echo "<p style='color: black'>请选择出口</p>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>厨房</p></a>"."<br>";

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>主人房</p></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>次厅往哪里走呢？</p>"."<br>";


} elseif ($dty==10) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>厨房</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";


echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>次厅</p></a>"."<br>";

//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>厨房往哪里走呢？</p>"."<br>";









} else {
  echo "错误地图,编号：".$dty."<br>";
}



?>