<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="money.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
if(file_exists($file)){


} else{



	
   //连接数据库提取数据写入ini 
   
$inina="money.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[玩家信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('财神币',['初始' => 0]); 
include("./sql/mysql.php");//调用数据库连接 
$q2="all_money";
$sql1=mysqli_query($conn, "select * from $q2 where wjid=$wjid");
$info1=@mysqli_fetch_array($sql1);
$mwjid=$info1['wjid'];
$mwjmz=$info1['wjmz'];
$mwjmoney=$info1['money'];





 
 
 
 
 if($mwjid==""){	
$q2="all_money";	
$sql = "insert into $q2 (wjid,wjmz,money)  values('$wjid','$wjmz','0')";
 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }
$iniFile->addCategory('财神币', ['初始'=>'0']);
} else{
$iniFile->addCategory('财神币', ['初始'=>$mwjmoney]);
}
 
 
 
 
 
 
 
 
 

}
$iniFile = new iniFile($file);











?>