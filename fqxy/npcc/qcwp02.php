<?php

if($sll!=0){

	
	
if($wpsl>=$sl){
	
	
//调用物品信息
include("./wp/wpxx.php");

	
	
	
//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
include("./ini/ckrl_ini.php");
	//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['背包容量','仓库容量']));
$bbrlb=$wjxx['背包容量'];

$cbbrlb=$wjxx['仓库容量'];
	
	
	
	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;



if($wprl<=$bbrlb){

if($wpsl<$sl){
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";

} elseif($wpsl>$sl&&$sl!=0){  

 
$wpsl=$wpsl-$sl;


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

if($ymid==278||$ymid==279||$ymid==281||$ymid==282||$ymid==283||$ymid==284||$ymid==285){
	echo $wpsl;
	//背包减
include("./sql/mysql.php");//调用数据库连接 
$q2="ckwp".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where wpid=$npcc";//物品id号必改值
$result = mysqli_query($conn, $strsql);
//仓库加

//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysqli_query($conn, "select * from $q2 where wpid=$npcc");
$info1=@mysqli_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if($ckwpid==""){
//获取最大值
$q2="wp".$wjid;
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$ckwpsl=$ckwpsl+$sl;
//调用物品信息
include("./wp/wpxx.php");
$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$npcc','$ckwpsl','$wpfl')";


 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }

} else{
$q2="wp".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} 

//


} elseif($ymid==286){ //背包其他

include("./sql/mysql.php");//调用数据库连接 
$q2="qt".$wjid;
$strsql = "update $q2 set wpsl=$wpsl where wpid=$npcc";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} 




///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////
if($ymid==278){

//ini文件名字
$inina="ckwp.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('书卷数量', [$npcc => $wpsl]);
//ini文件名字
$inina="wp.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($ymid==279){ //背包材料
//ini文件名字
$inina="ckcl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('材料数量', [$npcc => $wpsl]);
//ini文件名字
$inina="cl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($ymid==281){ //背包商城
//ini文件名字
$inina="cksc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('商城数量', [$npcc => $wpsl]);

//ini文件名字
$inina="sc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($ymid==282){ //背包丹药
//ini文件名字
$inina="ckdy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('丹药数量', [$npcc => $wpsl]);
# 修改一个分类下子项的值(也可以修改多个)
//ini文件名字
$inina="dy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($ymid==283){ //背包任务
//ini文件名字
$inina="ckrw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('任务数量', [$npcc => $wpsl]);
//ini文件名字
$inina="rw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($ymid==284){ //背包农场
//ini文件名字
$inina="cknc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('农场数量', [$npcc => $wpsl]);

//ini文件名字
$inina="nc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($ymid==285){ //背包宝箱
//ini文件名字
$inina="ckbx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('宝箱数量', [$npcc => $wpsl]);
//ini文件名字
$inina="bx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  

} elseif($ymid==286){ //背包其他
//ini文件名字
$inina="ckqt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他数量', [$npcc => $wpsl]);
//ini文件名字
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  




} 

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////





//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


if($ymid==278||$ymid==279||$ymid==281||$ymid==282||$ymid==283||$ymid==284||$ymid==285){
//调用物品信息
include("./wp/wpxx.php");



} elseif($ymid==286){ //背包其他
//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;
$wpzl=$bszl;

} 



	


//ini文件名字
$inina="ckrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('仓库已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('仓库已用容量', ['容量' => $wprl]);
	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);











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
echo "<font color=red>你取出了".$wpmz."x".$sl."</font>"."<br>";



echo "<br>";

if($ymid==278){//背包书卷
include("template/xy278.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==279){ //背包材料
include("template/xy279.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==281){ //背包商城
include("template/xy281.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==282){ //背包丹药
include("template/xy282.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} elseif($ymid==283){ //背包任务

include("template/xy283.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} elseif($ymid==284){ //背包农场
include("template/xy284.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


} elseif($ymid==285){ //背包宝箱

include("template/xy285.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==286){ //背包宝箱

include("template/xy286.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} 





} elseif($wpsl==$sl){  


//////////////////////////////////////////////////////////////////////////////////数据库修改//////////////////////////////////////////////////////////

$wpsl=$wpsl-$sl;
if($ymid==278||$ymid==279||$ymid==281||$ymid==282||$ymid==283||$ymid==284||$ymid==285){
include("./sql/mysql.php");//调用数据库连接 
$q2="ckwp".$wjid;
$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysqli_query($conn, $strsql);
//仓库加


//查询如果没有则添加
$q2="wp".$wjid;
$sql1=mysqli_query($conn, "select * from $q2 where wpid=$npcc");
$info1=@mysqli_fetch_array($sql1);
$ckwpid=$info1['wpid'];
$ckwpsl=$info1['wpsl'];
if($ckwpid==""){
//获取最大值
$q2="wp".$wjid;
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$ckwpsl=$ckwpsl+$sl;
//调用物品信息
include("./wp/wpxx.php");
$q2="wp".$wjid;
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','$npcc','$ckwpsl','$wpfl')";


 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }

} else{
$q2="wp".$wjid;	
$ckwpsl=$ckwpsl+$sl;
$strsql = "update $q2 set wpsl=$ckwpsl where wpid=$ckwpid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
} 

} elseif($ymid==286){ //背包其他

include("./sql/mysql.php");//调用数据库连接 
$q2="qt".$wjid;

$strsql = "delete from $q2 where wpid=$npcc ";//物品id号必改值
$result = mysqli_query($conn, $strsql);


} 

///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////缓存修改强制更新//////////////////////////////////////////////////////////////
if($ymid==278){//背包书卷
//ini文件名字
$inina="ckwp.ini";
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
$iniFile->delItem('书卷id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('书卷数量', $npcc);
# 删除一个子项
$iniFile->delItem('书卷名字', $npcc);
//ini文件名字
$inina="wp.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($ymid==279){ //背包材料
//ini文件名字
$inina="ckcl.ini";
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
$iniFile->delItem('材料id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('材料数量', $npcc);
# 删除一个子项
$iniFile->delItem('材料名字', $npcc);
//ini文件名字
$inina="cl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  


} elseif($ymid==281){ //背包商城
//ini文件名字
$inina="cksc.ini";
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
$iniFile->delItem('商城id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('商城数量', $npcc);
# 删除一个子项
$iniFile->delItem('商城名字', $npcc);
//ini文件名字
$inina="sc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($ymid==282){ //背包丹药
//ini文件名字
$inina="ckdy.ini";
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
$iniFile->delItem('丹药id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('丹药数量', $npcc);
# 删除一个子项
$iniFile->delItem('丹药名字', $npcc);
//ini文件名字
$inina="dy.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($ymid==283){ //背包任务
//ini文件名字
$inina="ckrw.ini";
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
$iniFile->delItem('任务id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);

# 删除一个子项
$iniFile->delItem('任务数量', $npcc);
# 删除一个子项
$iniFile->delItem('任务名字', $npcc);

//ini文件名字
$inina="rw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($ymid==284){ //背包农场

//ini文件名字
$inina="cknc.ini";
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
$iniFile->delItem('农场id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('农场数量', $npcc);
# 删除一个子项
$iniFile->delItem('农场名字', $npcc);

//ini文件名字
$inina="nc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($ymid==285){ //背包宝箱
//ini文件名字
$inina="ckbx.ini";
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
$iniFile->delItem('宝箱id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $npcc);
# 删除一个子项
$iniFile->delItem('宝箱数量', $npcc);
# 删除一个子项
$iniFile->delItem('宝箱名字', $npcc);

//ini文件名字
$inina="bx.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
} elseif($ymid==286){ //背包其他
//ini文件名字
$inina="ckqt.ini";
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
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  


} 

/////////////////////////////////////////////////////////////////////////////////缓存修改//////////////////////////////////////////////////////////////










//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////

if($ymid==278||$ymid==279||$ymid==281||$ymid==282||$ymid==283||$ymid==284||$ymid==285){
//调用物品信息
include("./wp/wpxx.php");



} elseif($ymid==286){ //背包其他
//调用物品信息
$bsid=$npcc;
include("./wp/zbbs.php");
$wpmz=$bsmz;
$wpzl=$bszl;

} 



//ini文件名字
$inina="ckrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('仓库已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('仓库已用容量', ['容量' => $wprl]);
	
//ini文件名字
$inina="bbrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下某个子项的值
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl*$sl;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);

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

echo "<font color=red>你取出了".$wpmz."x".$sl."</font>"."<br>";

echo "<br>";

if($ymid==278){//背包书卷
include("template/xy278.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==279){ //背包材料
include("template/xy279.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==281){ //背包商城
include("template/xy281.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==282){ //背包丹药
include("template/xy282.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} elseif($ymid==283){ //背包任务

include("template/xy283.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");

} elseif($ymid==284){ //背包农场
include("template/xy284.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


} elseif($ymid==285){ //背包宝箱

include("template/xy285.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} elseif($ymid==286){ //背包宝箱

include("template/xy286.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");
} 


} else {
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}




} else{
$dqwp=0;
	$qbwp=1;
echo "<font color=red>对不起，你的背包已放不下任何东西了</font>"."<br>";
echo "<br>";



}

} else {
	$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}









} else {
$dqwp=0;
echo "<font color=red>输入有误请重新输入</font>"."<br>";
echo "<br>";
}


?>




