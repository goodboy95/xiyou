<?php





if($sll!=0){
	
	
	
if($wpsl>=$sl){
//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpzl=$bszl;


include("./ini/zt_ini.php");



# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['背包容量','仓库容量']));
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



$bbrlb=$wjxx['背包容量'];

$cbbrlb=$wjxx['仓库容量'];
	
	


	include("./ini/ckrl_ini.php");
	

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('仓库已用容量','容量'));

$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;



if($wprl<=$cbbrlb){





if($wpsl<$sl){
	$dqwp=0;
echo "<p style='color: red'>输入有误请重新输入</p>"."<br>";
echo "<br>";






} elseif($wpsl>$sl&&$sl!=0){  

 
$wpsl=$wpsl-$sl;


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

if($ymid==269){
	
	//背包减
include("./sql/mysql.php");//调用数据库连接 
$q2="qt".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where wpid=$npcc";//物品id号必改值
$result = mysqli_query($conn, $strsql);
//仓库加


//查询如果没有则添加
$q2="ckqt".$wjid;
$sql1=mysqli_query($conn, "select * from $q2 where wpid=$npcc");
$info1=@mysqli_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];

if($ckwpid==""){

$ckwpsl=$ckwpsl+$sl;

$q2="ckqt".$wjid;
$sql = "insert into $q2 (wpid,wpsl)  values('$npcc','$ckwpsl')";


 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }

} else{
$q2="ckqt".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} 

//

}


///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////

if($ymid==269){//背包其他
include("./ini/qt_ini.php");

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他数量', [$npcc => $wpsl]);




include("./ini/ckqt_ini.php");
unlink($file); //删除文件  




}

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////







//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


if($ymid==269){

//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;
$wpzl=$bszl;

}



	include("./ini/bbrl_ini.php");
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

include("./ini/ckrl_ini.php");

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('仓库已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('仓库已用容量', ['容量' => $wprl]);

//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////

//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $ymid]);
echo "<p style='color: red'>你存入了".$wpmz."x".$sl."</p>"."<br>";



echo "<br>";
if($ymid==269){ //背包

include("template/xy269.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

}





} elseif($wpsl==$sl){  


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

$wpsl=$wpsl-$sl;
if($ymid==269){
include("./sql/mysql.php");//调用数据库连接 
$q2="qt".$wjid;
$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysqli_query($conn, $strsql);

//仓库加


//查询如果没有则添加
$q2="ckqt".$wjid;
$sql1=mysqli_query($conn, "select * from $q2 where wpid=$npcc");
$info1=@mysqli_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if($ckwpid==""){

$ckwpsl=$ckwpsl+$sl;
//调用物品信息
include("./wp/zbbs.php");
$q2="ckqt".$wjid;
$sql = "insert into $q2 (wpid,wpsl)  values('$npcc','$ckwpsl')";


 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }

} else{
$q2="ckqt".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} 

}

///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////缓存修改强制更新//////////////////////////////////////////////////////////////
if($ymid==269){//背包书卷

//ini文件名字
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

//查询序列删物品id
# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$npcc));
# 删除一个子项
$iniFile->delItem('其他id', $xlh);
# 删除一个子项
$iniFile->delItem('其他', $npcc);
# 删除一个子项
$iniFile->delItem('其他数量', $npcc);
# 删除一个子项
$iniFile->delItem('其他名字', $npcc);



//ini文件名字
$inina="ckqt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  


}

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////










//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////



if($ymid==269){ //背包其他
//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;
$wpzl=$bszl;

}
	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

	
//ini文件名字
$inina="ckrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('仓库已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('仓库已用容量', ['容量' => $wprl]);


//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////
























//ini文件名字
$inina="user.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('验证信息', ['cmid值' => $ymid]);

echo "<p style='color: red'>你存入了".$wpmz."x".$sl."</p>"."<br>";

echo "<br>";

if($ymid==269){ //背包宝箱

include("template/xy269.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

}







} else {
	$dqwp=0;
echo "<p style='color: red'>输入有误请重新输入</p>"."<br>";
echo "<br>";
}




} else{
$dqwp=0;
	$qbwp=1;
echo "<p style='color: red'>对不起，你的仓库已放不下任何东西了</p>"."<br>";
echo "<br>";



}
} else{

	$dqwp=0;
echo "<p style='color: red'>输入有误请重新输入</p>"."<br>";
echo "<br>";



}







} else {
$dqwp=0;
echo "<p style='color: red'>输入有误请重新输入</p>"."<br>";
echo "<br>";
}


?>




