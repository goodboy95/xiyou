<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='allmoney_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){



if($npcc>=1&&$npcc<=5){//买



if($npcc==1){
$csbyq=1;	
} elseif($npcc==2){
$csbyq=10;	
} elseif($npcc==3){
$csbyq=100;	
} elseif($npcc==4){
$csbyq=500;	
} elseif($npcc==5){
$csbyq=1000;	
} else{	
$csbyq=0;
}	

//提供需要扣除的物品作为判读依据
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=$csbyq;//	量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");


if ($pd==2) {

include("./ini/money_ini.php");
$csb=($iniFile->getItem('财神币','初始'));
$csbb=$csb+$csbyq;
$iniFile->updItem('财神币', ['初始' => $csbb]);
include("./sql/mysql.php");//调用数据库连接 
$q2="all_money";
$strsql = "update $q2 set money=$csbb where wjid=$wjid";//物品id号必改值
$result = mysqli_query($conn, $strsql);	


echo "<p style='color: black'>恭喜你！！获得〖财神币〗x".$csbyq."</p>"."<br>";

} else{
echo "<p style='color: black'>对不起！！所需要〖金豆〗不足！！</p>"."<br>";

}



} elseif($npcc>=6&&$npcc<=10){ //卖



if($npcc==6){
$csbyq=1;	
} elseif($npcc==7){
$csbyq=10;	
} elseif($npcc==8){
$csbyq=100;	
} elseif($npcc==9){
$csbyq=500;	
} elseif($npcc==10){
$csbyq=1000;	
} else{	
$csbyq=0;
}	

include("./ini/money_ini.php");
$csb=($iniFile->getItem('财神币','初始'));
if($csb>=$csbyq){
	
	
if($csbyq>=1){	
include("./ini/money_ini.php");
$csbb=$csb-$csbyq;
$iniFile->updItem('财神币', ['初始' => $csbb]);
include("./sql/mysql.php");//调用数据库连接 
$q2="all_money";
$strsql = "update $q2 set money=$csbb where wjid=$wjid";//物品id号必改值
$result = mysqli_query($conn, $strsql);	
echo "<p style='color: black'>失去〖财神币〗x".$csbyq."</p>"."<br>";
$manzu1="";

//物品加
$wpdz1[]="〖金豆〗";//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=127;//物品id
$wpdz4[]=$csbyq;//	量
$wpdz5[]=1;//	重量

//物品加

include("./rwmap/rwget.php");

} else{	
echo "<p style='color: black'>对不起~~你的财神币非法</p>"."<br>";
}	


} else{	
echo "<p style='color: black'>对不起~~你的财神币不足</p>"."<br>";
}	






} else{	
echo "<p style='color: black'>没有这个选项</p>"."<br>";
}





echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=564;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<p style='color: black'></p>"."<br>";



}



//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini







?>