<?php



if ($dty==0) {

  //地名

$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(4,4)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //副本如意传送门
$csid=6;//传送id值
include("./fb/rycs.php");
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=110;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入大墓室</p></a>"."<br>";

    //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=316;
$npc[]=0;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【西游各大副本重置台】（需要副本重置令）</p></a>"."<br>";


include("./fb/bglm.php");

include("./gw/bgd.php");



echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(4,3)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,4)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>白骨洞(4,4)往哪里走呢？</p>"."<br>"; 



} elseif ($dty==1) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(3,4)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");

echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,3)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,4)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(4,4)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>白骨洞(3,4)往哪里走呢？</p>"."<br>"; 


} elseif ($dty==2) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(2,4)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");




echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,3)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(1,4)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,4)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>白骨洞(2,4)往哪里走呢？</p>"."<br>"; 


} elseif ($dty==3) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(1,4)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");

echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;

$npc[]=0;

echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(1,3)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,4)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";


//地点描述
echo "<p style='color: black'>白骨洞(1,4)往哪里走呢？</p>"."<br>"; 


} elseif ($dty==4) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(1,3)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");


echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(1,4)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(1,2)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,3)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";


//地点描述
echo "<p style='color: black'>白骨洞(1,3)往哪里走呢？</p>"."<br>"; 


} elseif ($dty==5) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(2,3)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");


echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,4)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,2)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(1,3)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,3)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";


//地点描述
echo "<p style='color: black'>白骨洞(2,3)往哪里走呢？</p>"."<br>"; 


} elseif ($dty==6) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(3,3)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");


echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,4)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,2)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,3)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(4,3)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>白骨洞(3,3)往哪里走呢？</p>"."<br>"; 



} elseif ($dty==7) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(4,3)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");


echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(4,4)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(4,2)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,3)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";


//地点描述
echo "<p style='color: black'>白骨洞(4,3)往哪里走呢？</p>"."<br>"; 


} elseif ($dty==8) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(4,2)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");

echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(4,3)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(4,1)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,2)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>白骨洞(4,2)往哪里走呢？</p>"."<br>"; 


} elseif ($dty==9) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(3,2)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");


echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,3)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,1)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,2)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(4,2)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";


//地点描述
echo "<p style='color: black'>白骨洞(3,2)往哪里走呢？</p>"."<br>"; 



} elseif ($dty==10) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(2,2)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");

echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,3)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,1)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(1,2)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,2)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";


//地点描述
echo "<p style='color: black'>白骨洞(2,2)往哪里走呢？</p>"."<br>"; 

echo $bossts;

} elseif ($dty==11) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(1,2)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");


echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(1,3)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(1,1)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,2)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>白骨洞(1,2)往哪里走呢？</p>"."<br>"; 

} elseif ($dty==12) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(1,1)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=20;
$npc[]=93;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入【宝象国】</p></a>"."<br>";







include("./gw/bgd.php");



echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(1,2)</p></a>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,1)</p></a>"."<br>";


//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>白骨洞(1,1)往哪里走呢？</p>"."<br>"; 


} elseif ($dty==13) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(2,1)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

include("./gw/bgd.php");



echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,2)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(1,1)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,1)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>白骨洞(2,1)往哪里走呢？</p>"."<br>"; 


} elseif ($dty==14) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(3,1)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";


include("./gw/bgd.php");

echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,2)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(2,1)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(4,1)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";


//地点描述
echo "<p style='color: black'>白骨洞(3,1)往哪里走呢？</p>"."<br>"; 


} elseif ($dty==15) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>白骨洞(4,1)</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";


include("./gw/bgd.php");

echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(4,2)</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白骨洞(3,1)</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";

//地点描述
echo "<p style='color: black'>白骨洞(4,1)往哪里走呢？</p>"."<br>"; 





} else {
  echo "错误地图,编号：".$dty."<br>";
}











?>