<?php



echo "<p style='color: red'>【禁言操作】</p>"."<br>";

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
include("./ini/alluser_ini.php");

$fhid=($iniFile->getItem('禁言信息','禁言时间'));

$jy01=($iniFile->getItem('禁言信息','永久'));
$jy02=($iniFile->getItem('禁言信息','禁言时间'));
$jy03=($iniFile->getItem('禁言信息','解除变量'));

//调用zt.ini是否存在
include("./ini/zt_ini.php");
$wjname=($iniFile->getItem('玩家信息','玩家名字'));




//查询禁言是否到期永久则不行

if($jy03!=""){

if($jy01!=2){

if($jy03 >= 1){	
$startdate=$jy02;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));	

if($minute <= $jy03){
$jybl=2;
$minute1=$jy03-$minute;
$minute=floor($minute1/60);
$second=$minute1%60;
if($minute > 0){	

}
} else{
	

include("./sql/mysql.php");//调用数据库连接 
$q2="all_user";
$strsql = "delete from $q2 where wjid=$wjid and fl=1 ";//物品id号必改值
$result = mysqli_query($conn, $strsql);


$jy03="";
}

} else{	

include("./sql/mysql.php");//调用数据库连接 
$q2="all_user";
$strsql = "delete from $q2 where wjid=$wjid and fl=1 ";//物品id号必改值
$result = mysqli_query($conn, $strsql);

$jy03="";
} 
}

}















if($jy03==""){
   //连接数据库提取数据写入ini 
   
include("./sql/mysql.php");//调用数据库连接 
//获取最大值
$q2="all_user";
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$time=86400;
$nowtime=date('Y-m-d H:i:s');
$sql = "insert into $q2 (id,wjid,wjname,wjtime,utime,fl,yj)  values('$maxidd','$wjid','$wjname','$nowtime','$time','1','1')";
 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }
 
 
 
//更新缓存数据
$inina="all_user.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据


echo "<p style='color: black'>成功对".$wjname."进行了1天禁言处罚！！</p>"."<br>";




$wjid1=999;
$ltbl2=999;
$ltbl1="小轩GM";
	//调用msg.ini是否存在
 $wjtake="对你进行了1天禁言的处罚，如有任何疑问请咨询管理员！！";
include("./ini/msg_ini.php");

$hkeyltpx1[]="";
$hltpx1="";
$arr3="";
# 获取一个分类下所有数据
$hltpx1=($iniFile->getCategory('玩家排序'));
	foreach(array_keys($hltpx1) as $key){
$hkeyltpx1[]=$hltpx1[$key];
}
	
	
$tmp1="排序";
$arr3=$hkeyltpx1;
foreach( $arr3 as $k=>$v) {
    if($tmp1 == $v) unset($arr3[$k]);
}

$ltmax1=max($arr3);
if($ltmax1=="排序"){
$ltmax1=0;
	}
$ltmax1=$ltmax1+1;
$zbidd2=$wjid1."_".$ltmax1;
$iniFile->addItem('玩家排序',[$zbidd2 => $ltmax1]); 
$iniFile->addItem('玩家id',[$ltmax1 => $wjid1]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 


















} else{	
echo "<p style='color: black'>对不起！".$wjname."正处于禁言状态！！</p>"."<br>";

}











}
//解锁当前使用的ini
include("./ini/jsini.php");
//












echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><p style='color: blue'>【返回GM管理首页】</p></a>"."<br>";

echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><p style='color: blue'>返回GM管理平台</p></a>"."<br>";


















?>





