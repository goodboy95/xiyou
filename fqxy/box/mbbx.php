<?php



//调用sc.ini是否存在
   
include("./ini/sc_ini.php");
$inina="sc.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
$iniFile = new iniFile($file);
$wnys=($iniFile->getItem('商城数量','737'));
$wnyssl=1;//需要钥匙的数量
$ysid=737;
$ysmz="【秘宝钥匙】";

if($wnys >=$wnyssl){
$wpsy=2;//使用成功
$ysmz1="【秘宝宝箱】";
echo "<p style='color: black'>恭喜你！打开了".$ysmz1."</p><br>";


$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////〖铜魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖铜魂〗";//需要的到某个物品的名字    // 
$wwpid=309;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖铜魂〗/////////////////////////////////////////

}


$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////〖银魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖银魂〗";//需要的到某个物品的名字    // 
$wwpid=310;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖银魂〗/////////////////////////////////////////

}



$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////〖金魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖金魂〗";//需要的到某个物品的名字    // 
$wwpid=311;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖金魂〗/////////////////////////////////////////

}

$bz= rand(1, 100);
if($bz >=1&&$bz <=40){
$dd=$dd+1;	
//////////////////////////////////////////////////〖钻魂〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖钻魂〗";//需要的到某个物品的名字    // 
$wwpid=312;                   //需要的到某个物品的id      //
$wwpsl=10;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖钻魂〗/////////////////////////////////////////

}




$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$dd=$dd+1;	
//////////////////////////////////////////////////万能果/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="【万能果】";//需要的到某个物品的名字    // 
$wwpid=128;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////万能果/////////////////////////////////////////

}


$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$dd=$dd+1;	
//////////////////////////////////////////////////金豆/////////////////////////////////////////
//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖金豆〗";//需要的到某个物品的名字    // 
$wwpid=127;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////金豆/////////////////////////////////////////
}



$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖小智慧果〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖小智慧果〗";//需要的到某个物品的名字    // 
$wwpid=398;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖小智慧果〗/////////////////////////////////////////

}


$bz= rand(1, 100);
if($bz >=1&&$bz <=20){
$dd=$dd+1;	
//////////////////////////////////////////////////〖大智慧果〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖大智慧果〗";//需要的到某个物品的名字    // 
$wwpid=399;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////〖大智慧果〗/////////////////////////////////////////
}


$bz= rand(1, 100);
if($bz >=1&&$bz <=10){
$dd=$dd+1;	
//////////////////////////////////////////////////〖1亿修炼经验丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖1亿修炼经验丹〗";//需要的到某个物品的名字    // 
$wwpid=625;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置
//////////////////////////////////////////////////〖1亿修炼经验丹〗/////////////////////////////////////////
}












if($dd >=1){

} else{
echo "<p style='color: black'>居然人品大爆发了居然是个空箱子</p>"."<br>";
	} 		

////////////////////////////////////////////////扣除钥匙//////////////////////////////
//ini文件名字
$inina="sc.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$wnys1=$wnys-$wnyssl;
if($wnys1 ==0){
//扣除钥匙
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "delete from $q2 where wpid=$ysid ";//物品id号必改值
$result = mysqli_query($conn, $strsql);


# 获取一个分类下某个子项的值
$xlh=($iniFile->getItem('序列',$ysid));
# 删除一个子项
$iniFile->delItem('商城id', $xlh);
# 删除一个子项
$iniFile->delItem('序列', $ysid);
# 删除一个子项
$iniFile->delItem('商城数量', $ysid);
# 删除一个子项
$iniFile->delItem('商城名字', $ysid);

} else{
//扣除钥匙
include("./sql/mysql.php");//调用数据库连接 
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$wnys1 where wpid=$ysid";//物品id号必改值
$result = mysqli_query($conn, $strsql);


# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('商城数量', [$ysid => $wnys1]);


}	
//////////////////////////////////////////////扣除钥匙////////////////////////////////////


echo "<p style='color: black'>失去".$ysmz."x".$wnyssl."</p><br>";

} else{
$wpsy=1;//使用失败
echo "<p style='color: black'>对不起！你需要".$ysmz."x".$wnyssl."才能打开</p><br>";

}


//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini






