<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];

	
	
	
		
//调用物品信息
include("./wp/zbxx.php");

	
	
	
//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
include("./ini/gsrl_ini.php");


# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['背包容量','挂售容量']));
$bbrlb=$wjxx['背包容量'];

$cbbrlb=$wjxx['挂售容量'];
	
	
	
include("./ini/bbrl_ini.php");
$ckbbrla=($iniFile->getItem('背包已用容量','容量'));
$rl=$wpzl;
$wprl=$bbrlb+$rl;



if($wprl<=$ckbbrla){
	
	
	
	
	
	
	
	
	
	
	include("./ini/gszb_ini.php");
$zbzz=($iniFile->getItem('装备id',$zbid));

if($zbzz !=""){

///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////

# 获取一个分类下某个子项的值
$xvjj=($iniFile->getItem('装备星级',$zbid));
$zbkk1=($iniFile->getItem('装备孔1',$zbid));
$zbkk2=($iniFile->getItem('装备孔2',$zbid));
$zbkk3=($iniFile->getItem('装备孔3',$zbid));
$zbkk4=($iniFile->getItem('装备孔4',$zbid));
$zbkk5=($iniFile->getItem('装备孔5',$zbid));
$zbxqq1=($iniFile->getItem('装备镶嵌1',$zbid));
$zbxqq2=($iniFile->getItem('装备镶嵌2',$zbid));
$zbxqq3=($iniFile->getItem('装备镶嵌3',$zbid));
$zbxqq4=($iniFile->getItem('装备镶嵌4',$zbid));
$zbxqq5=($iniFile->getItem('装备镶嵌5',$zbid));

	//背包减
include("./sql/mysql.php");//调用数据库连接 

$q2="gszb".$wjid;		
$strsql = "delete from $q2 where id=$npccid ";//物品id号必改值
$result = mysqli_query($conn, $strsql);	
//仓库加
//获取最大值
$q2="zb".$wjid;
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$q2="zb".$wjid;
$sql = "insert into $q2 (id,zbid,zbxj,zbk1,zbxq1,zbk2,zbxq2,zbk3,zbxq3,zbk4,zbxq4,zbk5,zbxq5)  values('$maxidd','$npcc','$xvjj','$zbkk1','$zbxqq1','$zbkk2','$zbxqq2','$zbkk3','$zbxqq3','$zbkk4','$zbxqq4','$zbkk5','$zbxqq5')";


 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }

///////////////////////////////////////////////////////////////////////////////////数据库修改///////////////////////////////////////////////////



//ini文件名字
$inina="gszb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;

/////////////////////////////////缓存ini删除////////////////////////////
# 删除一个子项
$iniFile->delItem('序列', $zbid);
# 删除一个子项
$iniFile->delItem('装备id', $zbid);
# 删除一个子项
$iniFile->delItem('装备名字', $zbid);
# 删除一个子项
$iniFile->delItem('装备星级', $zbid);



# 删除一个子项
$iniFile->delItem('装备孔1', $zbid);
# 删除一个子项
$iniFile->delItem('装备孔2', $zbid);
# 删除一个子项
$iniFile->delItem('装备孔3',$zbid);

# 删除一个子项
$iniFile->delItem('装备孔4', $zbid);
# 删除一个子项
$iniFile->delItem('装备孔5', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌1', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌2', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌3', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌4', $zbid);
# 删除一个子项
$iniFile->delItem('装备镶嵌5', $zbid);
# 删除一个子项
$iniFile->delItem('挂售价格', $zbid);
/////////////////////////////////缓存ini删除////////////////////////////
/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////

//ini文件名字
$inina="zb.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
/////////////////////////////////////////////////////////////////////强制更新数据以数据库数据为主//////////////////////////////////////////////////////////////

//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxxbs=$xbs;
include("wp/zbxj.php");
$zbxjj=$xjname;
//调用装备信息
include("./wp/zbxx.php");

$clname=$wp1;


//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


//ini文件名字
$inina="gsrl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$bbrla=($iniFile->getItem('挂售已用容量','容量'));
$rl=$wp25;
$wprl=$bbrla-$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('挂售已用容量', ['容量' => $wprl]);
	
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
$rl=$wp25;
$wprl=$ckbbrla+$rl;
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包已用容量', ['容量' => $wprl]);


//////////////////////////////////////////////////////////////////缓存背包容量修改/////////////////////////////////////////


	
	echo "<p style='color: black'>你下架了".$zbxjj.$xxxbs.$clname."</p>"."<br>";
	
	
} else{
echo "<p style='color: red'>该装备了已被买走了！！</p>"."<br>";

} 



} else{

	$dqwp=0;
echo "<p style='color: red'>对不起，你的背包已放不下任何装备了</p>"."<br>";
//echo "<br>";



}
/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=229;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=225;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回挂售</p></a>"."<br>";


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";

echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");
*/
include("template/xy229.php");
//不走xy.php直接调用xy文件需要加pz01配置
include("./pz/pz01.php");


} 
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>