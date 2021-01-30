<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="jfdj.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){

} else{
	
	
$inina="jfdj.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家等级上限]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('玩家等级上限',['上限' => 123]); 

include("./sql/mysql.php");//调用数据库连接 
	
//判断表是否存在
$q2="jfdj".$wjid;
if(mysqli_num_rows(mysqli_query($conn, "SHOW TABLES LIKE '". $q2."'"))==1) {
} else {
$sql = " CREATE  TABLE  $q2 
(  `id` int( 11  )  NOT  NULL default  '0' COMMENT  '编号id',
`jfdj` int( 11  )  NOT  NULL default  '0' COMMENT  '解封等级')
DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
mysqli_query($conn, $sql);
}
//判断表是否存在



$q2="jfdj".$wjid;
$sql1=mysqli_query($conn, "select id from $q2 where id=1");
$info1=@mysqli_fetch_array($sql1);
$xlpd=$info1['id'];
if($xlpd ==""){

$sql = "insert into $q2 (id,jfdj)  values('1','159')";
 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }
}


$q2="jfdj".$wjid;
$sql1=mysqli_query($conn, "select * from $q2 where id=1");
$info1=@mysqli_fetch_array($sql1);
$wjjfdj=$info1['jfdj'];



$iniFile->addItem('玩家等级上限',['上限' => $wjjfdj]); 









}






$iniFile = new iniFile($file);

	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>