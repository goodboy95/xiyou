<?php
/////////公共锁
$path='acher/lock';//路径
$lockmz='ltbw_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁

if($all_lock2==1){



include("./ini/ltbw_ini.php");


$ltpmid1=($iniFile->getItem('玩家擂台排名','1'));
$ltpmid2=($iniFile->getItem('玩家擂台排名','2'));
$ltpmid3=($iniFile->getItem('玩家擂台排名','3'));
$ltpmid4=($iniFile->getItem('玩家擂台排名','4'));
$ltpmid5=($iniFile->getItem('玩家擂台排名','5'));
$ltpmid6=($iniFile->getItem('玩家擂台排名','6'));
$ltpmid7=($iniFile->getItem('玩家擂台排名','7'));
$ltpmid8=($iniFile->getItem('玩家擂台排名','8'));
$ltpmid9=($iniFile->getItem('玩家擂台排名','9'));
$ltpmid10=($iniFile->getItem('玩家擂台排名','10'));




if($ltpmid1==$wjid){
$ltid=1;
} elseif($ltpmid2==$wjid){  
$ltid=2;
} elseif($ltpmid3==$wjid){  
$ltid=3;
} elseif($ltpmid4==$wjid){  
$ltid=4;
} elseif($ltpmid5==$wjid){  
$ltid=5;
} elseif($ltpmid6==$wjid){   
$ltid=6;
} elseif($ltpmid7==$wjid){
$ltid=7;
} elseif($ltpmid8==$wjid){  
$ltid=8;
} elseif($ltpmid9==$wjid){ 
$ltid=9;
} elseif($ltpmid10==$wjid){  
$ltid=10;
} else{	
$ltid=999;

}

if($ltid>=1&&$ltid<=10){




include("./ini/ltbw_ini.php");
$ltmz02=($iniFile->getItem('占领时间',$ltid));

$ltmz03=($iniFile->getItem('占领膜拜',$ltid));

$startdate=$ltmz02;
$enddate=date('Y-m-d H:i:s');
//获取天数
$minute=floor((strtotime($enddate)-strtotime($startdate)));
$time1=floor($minute/60);
$time2=floor($minute%60);
$time3=floor($time1/60);
$time4=floor($time3/24);




if($time4 > 0){	



$hdid=300;
$npcc=$hdid;
include("./ini/hd_ini.php");
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdlq=1;
if (!$hdtime) {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdlq=2;
}


$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	

if($hdtime1!=$nowtime1&&$hdtime1||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime' where hdid=$hdid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);




if($time4 >= 7){	
$bwts=7;
}else{	
$bwts=$time4;
} 


if($ltmz03>=10&&$ltmz03<=19){ 
$bwbh=5000000;
} elseif($ltmz03>=20&&$ltmz03<=49){  
$bwbh=10000000;
} elseif($ltmz03>=50&&$ltmz03<=99){  
$bwbh=20000000;
} elseif($ltmz03>=100&&$ltmz03<=199){  
$bwbh=25000000;
} elseif($ltmz03>=200&&$ltmz03<=299){  
$bwbh=50000000;
} elseif($ltmz03>=300&&$ltmz03<=399){  
$bwbh=100000000;
} elseif($ltmz03>=400&&$ltmz03<=499){  
$bwbh=200000000;
} elseif($ltmz03>=500){  
$bwbh=300000000;
} else{	
$bwbh=1000000;
}
if($bwts>=1){ 
$yl1=$bwbh*$bwts;
} else{	
$yl1=999;
}

//银两加
$wwpsl=$yl1;
include("./pz/ini_pz03.php");
//银两加

echo "<p style='color: black'>恭喜你！！领取到了【天下第一武道会】领取了万人膜拜奖励</p>"."<br>";

include("./ini/zt_ini.php");
$wjmz=($iniFile->getItem('玩家信息','玩家名字'));
$xtxx= "恭喜玩家".$wjmz."在【天下第一武道会】风骚了".$time4."天，领取了万人膜拜奖励";
include("./msg/msgg02.php");







} else{	
echo "<p style='color: red'>对不起！你今日已经领取【天下第一武道会】万人膜拜奖励了（每日凌晨后方可更新）</p></br>";
} 





} else{	
echo "<p style='color: red'>对不起！！【天下第一武道会】万人膜拜奖励风骚天数还未满一天不能领取</p>"."<br>";
} 

} else{	
echo "<p style='color: red'>对不起！！您还未在【天下第一武道会】拿到名次，无法领取奖励请继续加油</p>"."<br>";
}



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=402;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回武道场</p></a>"."<p style='color: black'></p>"."<br>";



}

//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini









	
