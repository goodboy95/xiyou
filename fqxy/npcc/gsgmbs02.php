<?php

$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$bsid=$arr[0];

//扣除手续费用
$bfb=floor($sl*$wpjgg*0.01);
if ($bfb==0) {
$bfb=1;	  
}
$ylsxf=$bfb;
$ylmm=$sl*$wpjgg+$ylsxf;
if($yl>=$ylmm){




if($sll!=0){

$wjid=$ckid;//对方
include("./ini/gsqt_ini.php");
# 获取一个分类下某个子项的值
$zbzz=($iniFile->getItem('其他id',$zbid));
if($zbzz !=""){
	
if($wpsl>=$sl){
	
	
//调用物品信息
include("./wp/zbbs.php");
$wpmz=$bsmz;
	
	
	
//调用zt.ini是否存在
   $wjid=$wjid1;


include("./ini/zt_ini.php");
$bbrlb=($iniFile->getItem('玩家信息',['背包容量']));







//$cbbrlb=$wjxx['挂售容量'];
	
include("./ini/bbrl_ini.php");
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;



if($wprl<=$bbrlb){

if($wpsl<$sl){
	$dqwp=0;
echo "<p style='color: red'>输入有误请重新输入</p>"."<br>";
echo "<br>";

} elseif($wpsl>$sl&&$sl!=0){  

 
$wpsl=$wpsl-$sl;


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

	$wjid=$ckid;//对方
	//背包减
include("./sql/mysql.php");//调用数据库连接 
$q2="gsqt".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where id=$npccid";//物品id号必改值
$result = mysqli_query($conn, $strsql);

///////////////////////////////////////////银两修改////////////////////////////////////

$q2="all_yl";
$sql1=mysqli_query($conn, "select bbyl from $q2 where wjid=$wjid");
$info1=@mysqli_fetch_array($sql1);
$wjyl=$info1['bbyl'];
$wjyll=$wjyl+$sl*$wpjgg;
if($wjyll>=99999999999){
$wjyll=99999999999;
}
$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);

///////////////////////////////////////////银两修改////////////////////////////////////


//仓库加
$wjid=$wjid1;//自己
//查询如果没有则添加
$q2="qt".$wjid;
$sql1=mysqli_query($conn, "select * from $q2 where wpid=$npcc");
$info1=@mysqli_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if($ckwpid==""){


$ckwpsl=$ckwpsl+$sl;
//调用物品信息
include("./wp/zbbs.php");
$wpmz=$bsmz;
$q2="qt".$wjid;
$sql = "insert into $q2 (wpid,wpsl)  values('$npcc','$ckwpsl')";


 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }

} else{
$q2="qt".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} 

//

///////////////////////////////////////////银两修改////////////////////////////////////

$q2="all_yl";
$sql1=mysqli_query($conn, "select bbyl from $q2 where wjid=$wjid");
$info1=@mysqli_fetch_array($sql1);
$wjyl=$info1['bbyl'];
$wjyll=$wjyl-($sl*$wpjgg+$ylsxf);
if($wjyll<=0){
$wjyll=0;
}

$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);

///////////////////////////////////////////银两修改////////////////////////////////////





///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////
$wjid=$ckid;//对方
include("./ini/gsqt_ini.php");
$iniFile->updItem('其他数量', [$zbid => $wpsl]);

$wjid=$wjid1;//自己
//ini文件名字
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  


/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////





//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


//调用物品信息
include("./wp/zbbs.php");
$wpmz=$bsmz;
$wpzl=$bszl;
$wjid=$ckid;//对方
include("./ini/gsrl_ini.php");
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('挂售已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('挂售已用容量', ['容量' => $wprl]);
	$wjid=$wjid1;//自己
include("./ini/bbrl_ini.php");

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);







//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////



///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////



$wjid=$wjid1;//自己
$u_wjid=$wjid1;
include("./ini/zt_ini.php");
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
//数字转汉字
$yl=$sl*$wpjgg;
include("./pz/ylts.php");
	//调用msg.ini是否存在
 $wjtake="买走了你挂售的".$wpmz."x".$sl."，获得".$ylxx."银两";
 
 
 
 $wjid=$ckid;//对方
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
$iniFile->addItem('玩家id',[$ltmax1 => $u_wjid]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 

///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////








echo "<p style='color: red'>你用了".$ylxx."两，购买".$wpmz."x".$sl."</p>";

//数字转汉字
$yl=$ylsxf;
include("./pz/ylts.php");
echo "<p style='color: red'>(附带".$ylxx."两手续费)</p>";
echo "<br>";


$zsspd2=1;
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini
$wjid=$wjid1;//自己
$npcc=$ckid;
include("template/xy239.php");

//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} elseif($wpsl==$sl){  


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

$wpsl=$wpsl-$sl;
$wjid=$ckid;//对方
include("./sql/mysql.php");//调用数据库连接 
$q2="gsqt".$wjid;
$strsql = "delete from $q2 where id=$npccid ";//物品id号必改值
$result = mysqli_query($conn, $strsql);

///////////////////////////////////////////银两修改////////////////////////////////////

$q2="all_yl";
$sql1=mysqli_query($conn, "select bbyl from $q2 where wjid=$wjid");
$info1=@mysqli_fetch_array($sql1);
$wjyl=$info1['bbyl'];
$wjyll=$wjyl+$sl*$wpjgg;
if($wjyll>=99999999999){
$wjyll=99999999999;
}

$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);

///////////////////////////////////////////银两修改////////////////////////////////////









//仓库加

$wjid=$wjid1;//自己
//查询如果没有则添加
$q2="qt".$wjid;
$sql1=mysqli_query($conn, "select * from $q2 where wpid=$npcc");
$info1=@mysqli_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if($ckwpid==""){

$ckwpsl=$ckwpsl+$sl;
//调用物品信息
include("./wp/zbbs.php");
$wpmz=$bsmz;
$q2="qt".$wjid;
$sql = "insert into $q2 (wpid,wpsl)  values('$npcc','$ckwpsl')";


 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }

} else{
$q2="qt".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} 


///////////////////////////////////////////银两修改////////////////////////////////////

$q2="all_yl";
$sql1=mysqli_query($conn, "select bbyl from $q2 where wjid=$wjid");
$info1=@mysqli_fetch_array($sql1);
$wjyl=$info1['bbyl'];
$wjyll=$wjyl-($sl*$wpjgg+$ylsxf);

if($wjyll<=0){
$wjyll=0;
}
$strsql = "update $q2 set bbyl=$wjyll where wjid=$wjid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/yl_ini.php");
$iniFile->updItem('背包仓库银两', ['背包银两' => $wjyll]);

///////////////////////////////////////////银两修改////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////






$wjid=$ckid;//对方
/////////////////////////////////////////////////////////////////////////////////////缓存修改强制更新//////////////////////////////////////////////////////////////
include("./ini/gsqt_ini.php");
# 删除一个子项
$iniFile->delItem('其他id', $zbid);
# 删除一个子项
$iniFile->delItem('序列', $zbid);
# 删除一个子项
$iniFile->delItem('其他数量', $zbid);
# 删除一个子项
$iniFile->delItem('其他名字', $zbid);
# 删除一个子项
$iniFile->delItem('其他价格', $zbid);

$wjid=$wjid1;//自己
//ini文件名字
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////









//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////

include("./wp/zbbs.php");
$wpmz=$bsmz;
$wpzl=$bszl;

$wjid=$ckid;//对方
include("./ini/gsrl_ini.php");
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('挂售已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('挂售已用容量', ['容量' => $wprl]);
	$wjid=$wjid1;//自己
//ini文件名字
include("./ini/bbrl_ini.php");

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////



///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////



$wjid=$wjid1;//自己
$u_wjid=$wjid1;
include("./ini/zt_ini.php");
$ltbl2=($iniFile->getItem('玩家信息','vip等级'));
$ltbl1=($iniFile->getItem('玩家信息','玩家名字'));
//数字转汉字
$yl=$sl*$wpjgg;
include("./pz/ylts.php");
	//调用msg.ini是否存在
 $wjtake="买走了你挂售的".$wpmz."x".$sl."，获得".$ylxx."银两";
 
 
 
 $wjid=$ckid;//对方
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
$iniFile->addItem('玩家id',[$ltmax1 => $u_wjid]); 
$iniFile->addItem('玩家vip',[$ltmax1 => $ltbl2]); 
$iniFile->addItem('玩家名字',[$ltmax1 => $ltbl1]); 
$iniFile->addItem('玩家发言',[$ltmax1 => $wjtake]); 

///////////////////////////////////////////////////////////写入对方消息///////////////////////////////////






echo "<p style='color: red'>你用了".$ylxx."两，购买".$wpmz."x".$sl."</p>";

//数字转汉字
$yl=$ylsxf;
include("./pz/ylts.php");
echo "<p style='color: red'>(附带".$ylxx."两手续费)</p>";
echo "<br>";



$zsspd2=1;
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini
$wjid=$wjid1;//自己
$npcc=$ckid;
include("template/xy239.php");

//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
exit();

} else {
	$dqwp=0;
echo "<p style='color: red'>输入有误请重新输入</p>"."<br>";
echo "<br>";
}




} else{
$dqwp=0;
	//$qbwp=1;
echo "<p style='color: red'>对不起，你的背包已放不下任何东西了</p>"."<br>";
echo "<br>";



}

} else {
	$dqwp=0;
echo "<p style='color: red'>输入有误请重新输入</p>"."<br>";
echo "<br>";
}

} else {
$dqwp=0;
echo "<p style='color: red'>该宝石已被下架或者被买走了！！</p>"."<br>";
echo "<br>";
}







} else {
$dqwp=0;
echo "<p style='color: red'>输入有误请重新输入</p>"."<br>";
echo "<br>";
}
} else {
$dqwp=0;
echo "<p style='color: red'>对不起！你银两不足！</p>"."<br>";
echo "<br>";
}

?>




