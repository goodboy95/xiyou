<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="moneyjc.ini";
$path='acher/hdjc';
$file = $path."/".$inina;	
if(file_exists($file)){


} else{



	
   //连接数据库提取数据写入ini 
$inina="moneyjc.ini";
$path='acher/hdjc';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[奖池信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
$iniFile->addItem('财神币总和',['初始' => 0]); 
$iniFile->addItem('财神币总和',['初始1' => 0]); 
include("./sql/mysql.php");//调用数据库连接 
$q2="all_moneyjc";
$sql1=mysqli_query($conn, "select * from $q2 where id=1");
$info1=@mysqli_fetch_array($sql1);
$mwjmoney=$info1[money];

 if($mwjmoney!==""){	
$q2="all_moneyjc";	
$sql = "insert into $q2 (id,money)  values('1','0')";
 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }
$iniFile->addCategory('财神币总和', ['初始'=>'0']);
} else{
$iniFile->addCategory('财神币总和', ['初始'=>$mwjmoney]);
}



$q2="all_moneyjc";
$sql1=mysqli_query($conn, "select * from $q2 where id=2");
$info1=@mysqli_fetch_array($sql1);
$mwjmoney=$info1[money];

 if($mwjmoney!==""){	
$q2="all_moneyjc";	
$sql = "insert into $q2 (id,money)  values('2','0')";
 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }
$iniFile->addCategory('财神币总和', ['初始1'=>'0']);
} else{
$iniFile->addCategory('财神币总和', ['初始1'=>$mwjmoney]);
}









 
 
}
$iniFile = new iniFile($file);











?>