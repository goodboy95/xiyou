<?php
//判断物品是否满足
$wpsl=($iniFile->getItem($wpzzz,$wpid));
$wpsll=$wpsl+$wpkc;



if($wpsl>=1){

$q2="qt".$wjid;
$strsql = "update $q2 set wpsl=$wpsll where wpid=$wpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
$iniFile->updItem($wpzzz, [$wpid => $wpsll]);
} else{

$q2="qt".$wjid;
$sql1 = "insert into $q2 (wpid,wpsl)  values('$wpid','$wpsll')";
 if (!mysqli_query($conn, $sql1))
 {
   die('Error: ' . mysqli_error($conn));
 }	
 
 //更新缓存数据
$inina="qt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
 
 


} 





