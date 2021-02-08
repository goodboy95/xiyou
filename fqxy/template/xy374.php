<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$arr2 = explode("_",$npcc);
$xw01=$arr2[0];
$xw02=$arr2[1];
$xw03=$arr2[2];
$xw04=$arr2[3];

$szbid=$xw01."_".$xw02;
$cwidx=$xw03."_".$xw04;

if($xw01){


include("./ini/cw_ini.php");
$cwmz1=($iniFile->getItem('宠物原始名字',$cwidx));
$cwmz2=($iniFile->getItem('宠物名字',$cwidx));


$zbid=$cwidx;
include("./ini/cwzbb_ini.php");

$zbmz=($iniFile->getItem('装备名字',$szbid));
$xvjj=($iniFile->getItem('装备星级',$szbid));
$zbkk1=($iniFile->getItem('装备孔1',$szbid));
$zbkk2=($iniFile->getItem('装备孔2',$szbid));
$zbkk3=($iniFile->getItem('装备孔3',$szbid));
$zbkk4=($iniFile->getItem('装备孔4',$szbid));
$zbkk5=($iniFile->getItem('装备孔5',$szbid));
$zbxqq1=($iniFile->getItem('装备镶嵌1',$szbid));
$zbxqq2=($iniFile->getItem('装备镶嵌2',$szbid));
$zbxqq3=($iniFile->getItem('装备镶嵌3',$szbid));
$zbxqq4=($iniFile->getItem('装备镶嵌4',$szbid));
$zbxqq5=($iniFile->getItem('装备镶嵌5',$szbid));
$zbfll=($iniFile->getItem('装备分类',$szbid));

if($cwmz2){
echo "<p style='color: red'>".$cwmz1."（".$cwmz2."）卸下了".$zbmz."！！</p>"."<br>";
} else{	
echo "<p style='color: red'>".$cwmz1."卸下了".$zbmz."！！</p>"."<br>";
}

$q2="zb".$wjid;
include("./sql/mysql.php");//调用数据库连接
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

$sql1 = "insert into $q2 (id,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5,zbpd) 
values('$maxidd','$xw01','$xvjj','$zbkk1','$zbxqq1','$zbkk2','$zbxqq2','$zbkk3','$zbxqq3','$zbkk4','$zbxqq4','$zbkk5','$zbxqq5','0')";
 if (!mysqli_query($conn, $sql1))
 {
   die('Error: ' . mysqli_error($conn));
 }	
 
 $q2="cwzbb".$wjid;
$strsql = "delete from $q2 where cwid='$cwidx' and id=$xw02";//物品id号必改值
$result = mysqli_query($conn, $strsql);


 
 //更新缓存数据
$inina="zb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
//更新缓存数据
$inina="cwzbb_".$cwidx.".ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

 
 
 //更新缓存数据
$inina="cwztt_".$cwidx.".ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
 
 
 

$npcc=$cwidx;
include("template/xy366.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


} else{	
echo "<p style='color: red'>穿戴宠物装备有误！！请联系GM解决此问题</p>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";
}



} 
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



