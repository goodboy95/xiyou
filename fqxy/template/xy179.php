<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){



if($bpid>=1){

$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
	
	
	
	
include("./ini/bpp_ini.php");



$xl=($iniFile->getItem('序列',$npcc));
$gjwjmz=($iniFile->getItem('名字',$xl));
$gjwjmzid=($iniFile->getItem('名字id',$xl));
	
	
	
	
	
	

include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";

if($npccid==2){  
$bpzw1="辅助大臣";
$strsql = "update $q2 set ccmz01=0,ccid01=0 where bpid=$bpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} elseif($npccid==3){  
$bpzw1="军机大臣";
$strsql = "update $q2 set ccmz01=0,ccid01=0 where bpid=$bpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} elseif($npccid==4){  
$bpzw1="财政大臣";
$strsql = "update $q2 set ccmz01=0,ccid01=0 where bpid=$bpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} elseif($npccid==5){  
$bpzw1="工部大臣";
$strsql = "update $q2 set ccmz01=0,ccid01=0 where bpid=$bpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} elseif($npccid==6){  
$bpzw1="外交大臣";
$strsql = "update $q2 set ccmz01=0,ccid01=0 where bpid=$bpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} elseif($npccid==7){  
$bpzw1="军团长";
$strsql = "update $q2 set ccmz01=0,ccid01=0 where bpid=$bpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} elseif($npccid==1){  
$bpzw1="君主";
} else{
$bpzw1="成员";
}














include("./ini/bp_ini.php");
$gjmz=($iniFile->getItem('国家信息','国家名字'));
$iniFile->updItem('国家信息', [$bpzw1=> 0]);
$iniFile->updItem('国家信息', [$bpzw1.'id'=> 0]);


   
include("./ini/zt_ini.php");
# 获取一个分类下某个子项的值
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
	
	
	
	
	$wjid1=$wjid;
	$wjid=$npcc;
	include("./ini/zt_ini.php");
$iniFile->updItem('玩家信息', ['帮派职务' => '成员']);
 
	//调用msg.ini是否存在
 $wjtake="将你罢免为了（".$gjmz."）国家的【成员】";
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

	
	
	$wjid=$wjid1;
	
	
	
echo "<font color=black>恭喜你！成功将".$gjwjmz."罢免为【成员】</font><br>";

	
	
	
	
	
echo "<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=172;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回国家</font></a>"."<br>";
} else{
	

echo "<font color=black>你还未加入任何国家！！</font><br>";
}























//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";

echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");









}
//解锁当前使用的ini
include("./ini/jjsini.php");
//解锁当前使用的ini



}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
	
	
	
	
	
	
?>