<?php



//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
 
  $sjcs=1;
	$sjcs1=1;
	$sjcs2=1;
	$sjcs3=1;
	$sjcs4=1;
	$sjcs5=1;
	$sjcs6=1;
    $sjcs7=1;
	$sjcs8=1;
	$sjcs9=1;
	$sjcs10=1;
	$sjcs11=1;
	$sjcs12=1;
	$sjcs13=1;
	$sjcs14=1;
	$sjcs15=1;
	$sjcs16=1;
    $sjcs17=1;
	$sjcs18=1;
	$sjcs19=1;
	$sjcs20=1;
	$sjcs21=1;
	$sjcs22=1;
	$sjcs23=1;
	$sjcs24=1;
	$sjcs25=1;
	$sjcs26=1;
    $sjcs27=1;
	$sjcs28=1;
	$sjcs29=1;
	$sjcs30=1;
	$sjcs31=1;
	$sjcs32=1;
	$sjcs33=1;
	$sjcs34=1;
	$sjcs35=1;
	$sjcs36=1;
    $sjcs37=1;
	$sjcs38=1;
	$sjcs39=1;
	$sjcs40=1;
	$sjcs41=1;
	$sjcs42=1;
	$sjcs43=1;
	$sjcs44=1;
	$sjcs45=1;
	
	
	$xyswxs=0;
	
include("./ini/bx_ini.php");
$wpsl1=($iniFile->getItem('宝箱数量','453'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值

//提供需要扣除的物品作为判读依据
$wpdz1[]="〖财宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=453;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*20000000;

}


	
	
include("./ini/bx_ini.php");
$wpsl1=($iniFile->getItem('宝箱数量','487'));



if($wpsl1 >=$sjcs1){//改动
//扣除数量
$sjwpsl1=floor($wpsl1/$sjcs);//改动
$asjwpsl1=$sjwpsl1*$sjcs;//改动
$npcc11=$npcc;//存值

//提供需要扣除的物品作为判读依据
$wpdz1[]="〖大号财宝箱〗";//名字
$wpdz2[]=8;//物品分类
$wpdz3[]=487;//物品id
$wpdz4[]=$asjwpsl1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
$xysw1=$xysw1+$sjwpsl1*200000000;

}


	
	
	
	
	
	
	
	
	
if ($xysw1>0) {
$syz=$xysw1;//值
$yl1=$syz;
$wwpsl=$yl1;
include("./pz/ini_pz03.php");
//银两加

} else{	
echo "<p style='color: black'>对不起,你没有财宝箱或者大财宝箱</p><br>";
} 
  





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";

echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");

	
	
	
	
	
	
	
	
	
	
	
	
	

}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini





