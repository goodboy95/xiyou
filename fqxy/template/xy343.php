<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



if($npcc==1){
$bumanzu="购买【心心相印】（婚戒）需要银两1000万";//不满足提示语
/////////////////////////////////////////////////////////////////////////



//判断银两满足代码
$ylkc=2;                    //用于数据位置1为否2为是
$kcyl01=10000000;            //需要扣除
include("./pz/ini_pzz01.php");//调用判断是否满足
//判断银两满足代码





//得到装备//最多添加五件装备

//---------------------------------------------------
$xyzbid1=337;//得到装备的id
$zbdd1=2;                    //用于数据位置1为否2为是
//---------------------------------------------------




//上述判断成功后扣除及其的到代码
include("./pz/ini_pzz02.php");//调用更改配置
//上述判断成功后扣除及其的到代码
  








} elseif($npcc==2){   
$bumanzu="购买【心心相印】（婚链）需要银两1000万";//不满足提示语
/////////////////////////////////////////////////////////////////////////



//判断银两满足代码
$ylkc=2;                    //用于数据位置1为否2为是
$kcyl01=10000000;            //需要扣除
include("./pz/ini_pzz01.php");//调用判断是否满足
//判断银两满足代码





//得到装备//最多添加五件装备

//---------------------------------------------------
$xyzbid1=338;//得到装备的id
$zbdd1=2;                    //用于数据位置1为否2为是
//---------------------------------------------------




//上述判断成功后扣除及其的到代码
include("./pz/ini_pzz02.php");//调用更改配置
//上述判断成功后扣除及其的到代码
  
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



}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>