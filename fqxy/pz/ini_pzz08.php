<?php



$q2="qt".$wjid;
$sql1=mysqli_query($conn, "select * from $q2 where wpid=$bsid");
$info1=@mysqli_fetch_array($sql1);
$ckwpid=$info1[wpid];
$ckwpsl=$info1[wpsl];

if($ckwpid==""){


$q2="qt".$wjid;
$sql = "insert into $q2 (wpid,wpsl)  values('$bsid','$bssl')";

 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }

//更新缓存数据
$inina="qt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
//更新缓存数据



} else{
$q2="qt".$wjid;	
$ckwpsl=$ckwpsl+$bssl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$bsid";//物品id号必改值
$result = mysqli_query($conn, $strsql);


include("./ini/qt_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他数量', [$bsid => $ckwpsl]);

} 













?>
