<?php



include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
$strsql = "update $q2 set rwbl=$rwjc1,yisg=$rwjc2,ysg=$rwjc3,rwmz='$rwjc4' where rwid=$rw1 and rwfl=$rw5";//物品id号必改值
$result = mysqli_query($conn, $strsql);




include("./ini/zxrw_ini.php");
$rwcurl=$rw1."_".$rw5;

$iniFile->updItem('任务变量', [$rwcurl => $rwjc1]);
$iniFile->updItem('已杀怪', [$rwcurl => $rwjc2]);
$iniFile->updItem('要杀怪', [$rwcurl => $rwjc3]);
$iniFile->updItem('任务名字', [$rwcurl => $rwjc4]);



