<?php



if($npcc==1){
include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));	
$fz01=10000000;//民宅价格1000万
if($yl>=$fz01){

include("./ini/zt_ini.php");
$wjname=($iniFile->getItem('玩家信息','玩家名字'));	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_houres";
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$maxidd=$maxid+1;
$fziidd=$maxidd;
$fzname="民宅";//房子名字
$fzfl=1;//房子类型
$fzgm=0;//房子改名
$sql = "insert into $q2 (id,wjid,fzid,wjmz,fzmz,fzfl,fzgm)  values('$maxidd','$wjid','$fziidd','$wjname','$fzname','$fzfl','$fzgm')";
 if (!mysqli_query($conn, $sql))
 {
   die('Error: ' . mysqli_error($conn));
 }
$q2="all_zt";
$strsql = "update $q2 set zzid=$fziidd,zzmz='$fzname',zzfl=$fzfl where wjid=$wjid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
$q2="all_yl";
$yll=$yl-$fz01;
$strsql = "update $q2 set bbyl=$yll where wjid=$wjid";//物品id号必改值
$result = mysqli_query($conn, $strsql);


include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['住宅id'=> $fziidd]);
$iniFile->updItem('玩家信息', ['住宅分类'=> $fzfl]);
$iniFile->updItem('玩家信息', ['住宅名字'=> $fzname]);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两'=> $yll]);
echo "<p style='color: black'>恭喜你,成功购买到了民宅</p>"."<br>";
echo "<p style='color: black'>失去银两1000万</p>"."<br>";
} else{
echo "<p style='color: black'>对不起,你的银两不足</p>"."<br>";

}

} elseif($npcc==2){  
include("./ini/sc_ini.php");
$jd=($iniFile->getItem('商城数量','127'));	
$fz02=188;//豪宅价格188金豆
if($jd>=$fz02){
$kcjd=$jd-$fz02;
$iniFile->updItem('商城数量', ['127'=> $kcjd]);



include("./ini/zt_ini.php");
$wjname=($iniFile->getItem('玩家信息','玩家名字'));	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_houres";
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$maxidd=$maxid+1;
$fziidd=$maxidd;
$fzname="豪宅";//房子名字
$fzfl=2;//房子类型
$fzgm=1;//房子改名
$sql = "insert into $q2 (id,wjid,fzid,wjmz,fzmz,fzfl,fzgm)  values('$maxidd','$wjid','$fziidd','$wjname','$fzname','$fzfl','$fzgm')";
 if (!mysqli_query($conn, $sql))
 {
   die('Error: ' . mysqli_error($conn));
 }
$q2="all_zt";
$strsql = "update $q2 set zzid=$fziidd,zzmz='$fzname',zzfl=$fzfl where wjid=$wjid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$kcjd where wpid=127";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['住宅id'=> $fziidd]);
$iniFile->updItem('玩家信息', ['住宅分类'=> $fzfl]);
$iniFile->updItem('玩家信息', ['住宅名字'=> $fzname]);
echo "<p style='color: black'>恭喜你,成功购买到了豪宅</p>"."<br>";
echo "<p style='color: black'>失去金豆x188</p>"."<br>";



} else{
echo "<p style='color: black'>对不起,你的金豆不足</p>"."<br>";

}
} elseif($npcc==3){  
include("./ini/sc_ini.php");
$jd=($iniFile->getItem('商城数量','127'));
$yhj=($iniFile->getItem('商城数量','396'));
$fz03=88;//豪宅价格88金豆+豪宅优惠券
if($jd>=$fz03&&$yhj>=1){
	$kcjd=$jd-$fz03;
	$kcyhj=$yhj-1;
$iniFile->updItem('商城数量', ['127'=> $kcjd]);
$iniFile->updItem('商城数量', ['396'=> $kcyhj]);



include("./ini/zt_ini.php");
$wjname=($iniFile->getItem('玩家信息','玩家名字'));	
include("./sql/mysql.php");//调用数据库连接 
$q2="all_houres";
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$maxidd=$maxid+1;
$fziidd=$maxidd;
$fzname="豪宅";//房子名字
$fzfl=2;//房子类型
$fzgm=1;//房子改名
$sql = "insert into $q2 (id,wjid,fzid,wjmz,fzmz,fzfl,fzgm)  values('$maxidd','$wjid','$fziidd','$wjname','$fzname','$fzfl','$fzgm')";
 if (!mysqli_query($conn, $sql))
 {
   die('Error: ' . mysqli_error($conn));
 }
$q2="all_zt";
$strsql = "update $q2 set zzid=$fziidd,zzmz='$fzname',zzfl=$fzfl where wjid=$wjid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$kcjd where wpid=127";//物品id号必改值
$result = mysqli_query($conn, $strsql);
$strsql = "update $q2 set wpsl=$kcyhj where wpid=396";//物品id号必改值
$result = mysqli_query($conn, $strsql);

include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['住宅id'=> $fziidd]);
$iniFile->updItem('玩家信息', ['住宅分类'=> $fzfl]);
$iniFile->updItem('玩家信息', ['住宅名字'=> $fzname]);
echo "<p style='color: black'>恭喜你,成功购买到了豪宅</p>"."<br>";
echo "<p style='color: black'>失去金豆x88,豪宅优惠券x1</p>"."<br>";



} else{
echo "<p style='color: black'>对不起,你的金豆不足或者缺少豪宅优惠卷</p>"."<br>";

}


} else{

echo "<p style='color: black'>购买住宅出现未知错误请联系购买解决</p>"."<br>";


}
















?>


