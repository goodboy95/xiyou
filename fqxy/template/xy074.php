<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
$xxid=$npcc;	
	
	
include("./ini/zbb_ini.php");
# 获取一个分类下某个子项的值
$zbid=($iniFile->getItem('装备星级','初始'));
# 获取一个分类下某个子项的值
$ks=($iniFile->getItem('装备孔1','初始'));
if($ks==1){
$dkmz="zbxq1";
} elseif($ks==2){   
$dkmz="zbxq2";
} elseif($ks==3){   
$dkmz="zbxq3";
} elseif($ks==4){ 
$dkmz="zbxq4";
} elseif($ks==5){  
$dkmz="zbxq5";
}

$bsid=$npcc;
include("./wp/zbbs.php");
//提供需要扣除的物品作为判读依据

$wpdz1[]=$bsmz;//名字
$wpdz2[]=9;//物品分类
$wpdz3[]=$bsid;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据



//////////////////////////////////////////////////////

$m=count($wpdz1,0); 
$km=$m;
$pdmzz=2;
$i=-1;
$mm=$m-1;
for($d=0;$d<$km;$d++){
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量

if($i+1==$m){

if($wpmz=="银两"){	
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两";	

} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz;

} else{
$wpts=$wpts.$wpmz."x".$wpkc;	
} 
	
} else{
	
if($wpmz=="银两"){	

//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$wpts=$wpts.$ylxx."银两"."，";	
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
include("./pz/ini_pzz013.php");
$wpts=$wpts.$ylxx.$swmz."，";

} else{
$wpts=$wpts.$wpmz."x".$wpkc."，";
} 

} 


if($wpmz=="银两"){
$kcyl01=$wpkc;
include("./pz/ini_pzz01.php");//调用判断是否满足
} elseif($wpmz =="声望"){
$kcyl01=$wpkc;
include("./pz/ini_pzz014.php");//调用判断是否满足
} else{
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz03.php");//判断
} 




if($pdmz==2){
} else{
$pdmzz=1;
} 
}
if($pdmz==2&&$pdmzz==2){

include("./sql/mysql.php");//调用数据库连接 
$kcrl=0;//扣除容量初始
$manzu1="";	
$i=-1;
for($d=0;$d<$km;$d++){	
$i=$i+1;
$wpmz=$wpdz1[$i];
$wwpfl=$wpdz2[$i];//物品分类
$wpid=$wpdz3[$i];//物品id
$wpkc=$wpdz4[$i];//	需要扣除的量
$wpzl=$wpdz5[$i];//	需要扣物品的重量

if($wpmz=="银两"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<p style='color: black'>失去：".$ylxx."银两</p>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz012.php");//扣除
} elseif($wpmz =="声望"){
//数字转汉字
$yl=$wpkc;
include("./pz/ylts.php");
$manzu1=$manzu1."<p style='color: black'>失去：".$ylxx.$swmz."</p>"."<br>";
$kcyl01=$wpkc;
include("./pz/ini_pzz015.php");//扣除

} else{
$manzu1=$manzu1."<p style='color: black'>失去：".$wpmz."x".$wpkc."</p>"."<br>";
include("./pz/ini_pz01.php");//缓存位置
include("./pz/ini_pzz020.php");//扣除
} 


if($wpmz!="银两"||$wpmz!="声望"){
$kcrl=$wpkc*$wpzl+$kcrl;

} 

}

//背包容量变更
include("./pz/ini_pzz05.php");		
//这里是升级装备代码	

$arr = explode("_",$zbid);
$zbid1=$arr[0];
$zbid2=$arr[1];

$q2="zbb".$wjid; //数据库位置 
$strsql = "update $q2 set $dkmz=$xxid where zbid=$zbid1";//物品id号必改值
$result = mysqli_query($conn, $strsql);
//更新缓存数据
$inina="zbb.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
//更新缓存数据
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据

echo "<p style='color: black'>恭喜你！镶嵌宝石成功</p>"."<br>";

//	输出满足提示语言
echo $manzu1;
	
	} else{
$bumanzu="对不起！镶嵌宝石失败";//不满足提示语	
//	输出不满足提示语言
echo "<p style='color: red'>".$bumanzu."</p>"."<br>";
}
	


























echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=81;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回装备</p></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");



}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>