<?php


echo "<p style='color: black'>得到了".$wwpmz."x".$wwpsl."</p><br>";
$wjwp=($iniFile->getItem($wpzzz,$wwpid));

if($wjwp >=1){
$xwpsl=$wjwp+$wwpsl;
include("./sql/mysql.php");//调用数据库连接 
$strsql = "update $q2 set wpsl=$xwpsl where wpid=$wwpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
//数据库修改
//缓存修改
$iniFile->updItem($wpzzz, [$wwpid => $xwpsl]);
//缓存修改
} else{
	include("./sql/mysql.php");//调用数据库连接 
	//新增数据
	//获取最大值	
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];
if (!$maxid){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}

$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values($maxidd,$wwpid,$wwpsl,$wwpfl)";
 if (!mysqli_query($conn, $sql))
 {
   die('Error: ' . mysqli_error($conn));
 }
	//新增数据
//更新缓存数据
unlink($ininame); //删除文件  
//更新缓存数据

}



