<?php



//调用sc.ini是否存在
   
include("./ini/sc_ini.php");
$inina="sc.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
$iniFile = new iniFile($file);
$wnys=($iniFile->getItem('商城数量','401'));
$wnyssl=5;//需要钥匙的数量
$ysid=401;
$ysmz="〖万能钥匙〗";

if($wnys >=$wnyssl){
$wpsy=2;//使用成功
$ysmz1="〖金宝箱〗";
echo "<font color=black>恭喜你！打开了".$ysmz1."</font><br>";




$bz= rand(1, 100);
if($bz >=1&&$bz <=60){
$dd=$dd+1;	
//////////////////////////////////////////////////〖百年魔珠〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖百年魔珠〗";//需要的到某个物品的名字    // 
$wwpid=331;                   //需要的到某个物品的id      //
$wwpsl=15;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=2;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖百年魔珠〗/////////////////////////////////////////
}

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖金豆〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖金豆〗";//需要的到某个物品的名字    // 
$wwpid=127;                   //需要的到某个物品的id      //
$wwpsl=2;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=4;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖金豆〗/////////////////////////////////////////
}






$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖金平丸〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖金平丸〗";//需要的到某个物品的名字    // 
$wwpid=220;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖金平丸〗/////////////////////////////////////////

}



$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖龙虎豹胎丸〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖龙虎豹胎丸〗";//需要的到某个物品的名字    // 
$wwpid=221;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖龙虎豹胎丸〗/////////////////////////////////////////

}




$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖血河丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖血河丹〗";//需要的到某个物品的名字    // 
$wwpid=222;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖血河丹〗/////////////////////////////////////////

}


$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖白巫丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖血河丹〗";//需要的到某个物品的名字    // 
$wwpid=223;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖白巫丹〗/////////////////////////////////////////

}

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖玲珑丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖玲珑丹〗";//需要的到某个物品的名字    // 
$wwpid=224;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖玲珑丹〗/////////////////////////////////////////

}



$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖朱紫丸〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖朱紫丸〗";//需要的到某个物品的名字    // 
$wwpid=225;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖朱紫丸〗/////////////////////////////////////////

}


$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖比丘丸〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖比丘丸〗";//需要的到某个物品的名字    // 
$wwpid=226;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖比丘丸〗/////////////////////////////////////////

}

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖比丘丹〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖比丘丹〗";//需要的到某个物品的名字    // 
$wwpid=227;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖比丘丹〗/////////////////////////////////////////

}



//////////////////////////////////////////////////〖比丘丸〗/////////////////////////////////////////


$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖天法丸〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖天法丸〗";//需要的到某个物品的名字    // 
$wwpid=228;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖天法丸〗/////////////////////////////////////////

}

$bz= rand(1, 100);
if($bz >=1&&$bz <=30){
$dd=$dd+1;	
//////////////////////////////////////////////////〖天竺丸〗/////////////////////////////////////////

//---------------------------------------------------------//
$q2="wp".$wjid;                //数据库位置               //
$wwpmz="〖天竺丸〗";//需要的到某个物品的名字    // 
$wwpid=229;                   //需要的到某个物品的id      //
$wwpsl=1;                     //需要的到某个物品的数量    //这里是新增物品必改值
$wwpfl=5;                     //需要的到某个物品的是分类   //
//---------------------------------------------------------//
include("./pz/ini_pz01.php");//调用ini缓存位置
$wpsy=2;//使用成功
include("./pz/ini_pz02.php");//调用ini缓存位置
include("./pz/ini_pz01.php");//调用ini缓存位置


//////////////////////////////////////////////////〖天竺丸〗/////////////////////////////////////////

}













	if($dd >=1){

} else{
echo "<font color=black>居然人品大爆发了居然是个空箱子</font>"."<br>";
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


echo "<font color=black>失去".$ysmz."x".$wnyssl."</font><br>";

} else{
$wpsy=1;//使用失败
echo "<font color=black>对不起！你需要".$ysmz."x".$wnyssl."才能打开</font><br>";

}


//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini



?>


