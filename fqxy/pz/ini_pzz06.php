<?php
$jjdj=1;//家具等级
$jjbf=1;//家具摆放
//获取最大值
$q2="jj".$wjid;
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];
if (!$maxid){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$sql = "insert into $q2 (id,jjid,jjdj,jjbf)  values('$maxidd','$jjid','$jjdj','$jjbf')";
 if (!mysqli_query($conn, $sql))
 {
   die('Error: ' . mysqli_error($conn));
 }
//更新缓存数据
$inina="jj.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 

//更新缓存数据


