<?php


$q2="zb".$wjid;
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

$zbcc1=0;
$zbcc2=0;
$zbcc3=0;
$zbcc4=0;
$zbcc5=0;
$zbcc6=0;
$zbcc7=0;
$zbcc8=0;
$zbcc9=0;
$zbcc10=0;
$zbcc11=0;
$zbcc12=0;
$sql1 = "insert into $q2 (id,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5,zbpd)  values('$maxidd','$zbid1','$zbcc1','$zbcc2','$zbcc3','$zbcc4','$zbcc5','$zbcc6','$zbcc7','$zbcc8','$zbcc9','$zbcc10','$zbcc11','$zbcc12')";
 if (!mysqli_query($conn, $sql1))
 {
   die('Error: ' . mysqli_error($conn));
 }	
echo "<p style='color: black'>得到了".$jjmz."</p>"."<br>";
//更新缓存数据
$inina="zb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据


