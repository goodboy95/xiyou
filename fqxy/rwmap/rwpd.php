<?php


$rwstr=$rwidd."_".$rwfl;
$rwpd=($iniFile->getItem('任务id',$rwstr));

//数据库为空则新增最开始的任务点
if (!$rwpd) {
$inina='zxrw.ini';
$path='./ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  	
include("./sql/mysql.php");//调用数据库连接 
//获取最大值
$q2="yxrw".$wjid;
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];
if (!$maxid){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,rwid,rwbl,rwmz,ysg,yisg,rwfl)  values('$maxidd','$rwidd','1','$rwmz','0','0',$rwfl)";
 if (!mysqli_query($conn, $sql)){
 die('Error: ' . mysqli_error($conn));
 }
include("./ini/zxrw_ini.php");
} else {
	

}

$m=$m+1;
//数据库为空则新增最开始的任务点








