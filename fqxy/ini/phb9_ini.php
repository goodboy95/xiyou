<?php

//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina="phb9.ini";
$path='acher/phb';
$file = $path."/".$inina;	
if(file_exists($file))
{


}
else
{
   //连接数据库提取数据写入ini 
      
$inina="phb9.ini";
$path='acher/phb';
$file = $path."/".$inina;	
//创建文件
file_put_contents($file,"[排行榜信息]");
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

$iniFile->addItem('排行榜名字',['初始' => 123]);
$iniFile->addItem('排行榜值1',['初始' => 0]); 
$iniFile->addItem('排行榜值2',['初始' => 0]); 
$iniFile->addItem('排行榜值3',['初始' => 0]); 
$iniFile->addItem('排行榜值4',['初始' => 0]); 
include("./sql/mysql.php");//调用数据库连接 
   
$q2="all_yd01";
$str="select * from $q2";
$result=mysqli_query($conn, $str) or die('SQL语句有误');
//把有值的数据存入一个数组

 while(!!$row=mysqli_fetch_array($result)){


$iniFile->addCategory('排行榜名字', [$row[id]=> $row[wjmz]]);
$iniFile->addCategory('排行榜值1', [$row[id]=> $row[wjid]]);
$iniFile->addCategory('排行榜值2', [$row[id]=> $row[ds02]]);
$iniFile->addCategory('排行榜值3', [$row[id]=> $row[vip]]);
$iniFile->addCategory('排行榜值4', [$row[id]=> $row[id]]); 


}
}

$iniFile = new iniFile($file);



?>