<?php



$jnid=$npcc;
include("./ini/jn_ini.php");
$jnlvl=($iniFile->getItem('技能等级',$npcc));
if($jnlvl ==1){
$jnsh=1;
$kcmp=10;
} elseif($jnlvl ==2){
$jnsh=1.1;
$kcmp=15;
} elseif($jnlvl ==3){
$jnsh=1.2;
$kcmp=20;
} elseif($jnlvl ==4){
$jnsh=1.4;
$kcmp=25;
} elseif($jnlvl ==5){
$jnsh=1.5;
$kcmp=30;
} elseif($jnlvl ==6){	
$jnsh=1.6;
$kcmp=35;
} elseif($jnlvl ==7){
$jnsh=1.7;
$kcmp=40;
} elseif($jnlvl ==8){	
$jnsh=1.8;
$kcmp=45;
} elseif($jnlvl ==9){	
$jnsh=1.9;
$kcmp=50;
} elseif($jnlvl ==10){
$jnsh=2;
$kcmp=60;
} elseif($jnlvl ==11){
$jnsh=2.1;
$kcmp=70;
} else{
$jnsh=1;
}

//调用大数运算
include_once("./wp/func1.php");

if ($jnid==1) {

//////////////////////////////////////////////////普攻///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1;		
include("./wj/ltpk06.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据


//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////

//////////////////////////////////////////////////普攻///////////////////////////////////////////////////	
echo "<p style='color: red'>你对".$nmz."使用了一招普攻</p>"."<br>";
} elseif ($jnid==2) {


//////////////////////////////////////////////////挥砍///////////////////////////////////////////////////	



$mppppd=2;	
$shxs=1.3;	
$shxss=1.3;
include("./wj/ltpk06.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////挥砍///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招挥砍</p>"."<br>";


} elseif ($jnid==3) {


//////////////////////////////////////////////////排山倒海///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.3;	
$shxss=1.3;
include("./wj/ltpk06.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////排山倒海///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招排山倒海</p>"."<br>";



} elseif ($jnid==4) {


//////////////////////////////////////////////////排山倒海///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.3;	
$shxss=1.3;
include("./wj/ltpk06.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////排山倒海///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招排山倒海</p>"."<br>";


} elseif ($jnid==5) {


//////////////////////////////////////////////////举火烧天势///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/ltpk06.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////举火烧天势///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招举火烧天势</p>"."<br>";


} elseif ($jnid==6) {


//////////////////////////////////////////////////霸王枪///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/ltpk06.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////霸王枪///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招举火烧天势</p>"."<br>";



} elseif ($jnid==7) {


//////////////////////////////////////////////////风波未宁///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/ltpk06.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////风波未宁///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招风波未宁</p>"."<br>";

} elseif ($jnid==8) {


//////////////////////////////////////////////////风波十二叉///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/ltpk06.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////风波十二叉///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招风波十二叉</p>"."<br>";




} elseif ($jnid==9) {


//////////////////////////////////////////////////佛光普度///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/ltpk07.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////佛光普度///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招佛光普度</p>"."<br>";





} elseif ($jnid==10) {


//////////////////////////////////////////////////如来神掌///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/ltpk07.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////如来神掌///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招如来神掌</p>"."<br>";


} elseif ($jnid==11) {


//////////////////////////////////////////////////天师正道///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/ltpk07.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////天师正道///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招天师正道</p>"."<br>";




} elseif ($jnid==12) {


//////////////////////////////////////////////////五雷咒///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/ltpk07.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////五雷咒///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招五雷咒</p>"."<br>";



} elseif ($jnid==13) {


//////////////////////////////////////////////////迷魂心法///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/ltpk07.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////迷魂心法///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招迷魂心法</p>"."<br>";



} elseif ($jnid==14) {


//////////////////////////////////////////////////回梦心法///////////////////////////////////////////////////	
$mppppd=2;	
$shxs=1.5;	
$shxss=1.5;
include("./wj/ltpk07.php");//造成对象伤害运算
include("./wj/ltpk04.php");//造成对象伤害写入数据
//////////////////造成对象伤害//////////////////
//////////////////造成自己伤害//////////////////
include("./wj/ltpk03.php");
//////////////////造成自己伤害//////////////////


//////////////////////////////////////////////////回梦心法///////////////////////////////////////////////////
echo "<p style='color: red'>你对".$nmz."使用了一招迷魂心法</p>"."<br>";










}















?>


