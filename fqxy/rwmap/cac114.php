<?php
//初始化
$rw1="";
$rw2="";
$rw3="";
$rw4="";
$rw5="";
$rw6="";
$npcc=456;//npcid
//初始化
include("./ini/zxrw_ini.php");





//首次接取任务	
////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=1;//任务的分类1主线2支线5日常4活动


//第一个必须加变量转换
$xrwidd=$rwidd;
$xrwfl=$rwfl;
//第一个必须加变量转换

////////////////////任务属性//////////////
//首次接取任务	

	


/*
//首次接取任务	
////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=4;//任务的分类1主线2支线5日常4活动
$rwmz="活动任务";
include("./rwmap/rwpd.php");
////////////////////任务属性//////////////
//首次接取任务	



//首次接取任务	
////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=5;//任务的分类1主线2支线5日常4活动
$rwmz="日常任务";
include("./rwmap/rwpd.php");
////////////////////任务属性//////////////
//首次接取任务	

//首次接取任务	
////////////////////任务属性//////////////
$rwidd=1;//任务的id
$rwfl=2;//任务的分类1主线2支线5日常4活动
$rwmz="支线任务";
include("./rwmap/rwpd.php");
////////////////////任务属性//////////////
//首次接取任务	
*/


$rw1=($iniFile->getCategory('任务id'));
$rw2=($iniFile->getCategory('任务变量'));
$rw3=($iniFile->getCategory('已杀怪'));
$rw4=($iniFile->getCategory('要杀怪'));
$rw5=($iniFile->getCategory('任务分类'));
$rw6=($iniFile->getCategory('任务名字'));


include("./rwmap/rwpdd.php");//调用任务判断



if ($rid==372||$rid==373) {


$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;
if ($rid==372) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<p style='color: black'>！</p>";

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==373) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<p style='color: black'>？</p>";

}
  //////////////////////////////////////插入图片  //////////////////////////
   

}

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>清清</p></a>"."<br>";
}



if ($rid==281||$rid==282) {

$strr1=$xrwidd."_".$xrwfl."_5196";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;

if ($rid==281) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<p style='color: black'>！</p>";

}
  //////////////////////////////////////插入图片  //////////////////////////
   } elseif ($rid==282) {
  ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='pic/ts/ts2.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<p style='color: black'>？</p>";

}
  //////////////////////////////////////插入图片  //////////////////////////
   

}

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>霜儿</p></a>"."<br>";
}











include("./rwmap/cac114_ts.php");//任务提示	

if ($m==1) {
	
$strr1=$xrwidd."_".$xrwfl."_".$npcc;

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=43;
$npc[]=$strr1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>村长吴文</p></a>"."<br>";
} else {
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>村长吴文</p></a>"."<br>";
}









//查询npc是否有任务

?>







