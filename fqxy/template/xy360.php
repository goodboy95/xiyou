<?php

//宠物加时间
include("./pz/pz06.php");//调用可以捕捉的宠物id
if ($cwbz==2) {
include("./ini/user_ini.php");
# 获取一个分类下某个子项的值
$bosid=$npcc;
$dtx=($iniFile->getItem('地图坐标','x'));
$dty=($iniFile->getItem('地图坐标','y'));
include("./ini/qycw_ini.php");
//写入boss时间
$enddate=date('Y-m-d H:i:s');
$iniFile->updItem('boss', [$npcc => $enddate]);	
}

//宠物加时间



include("./ini/cw_ini.php");
$xl=($iniFile->getCategory('序列'));
$m=count($xl,0)-1; 
$km=$m+1;



if($km <=20){


//等到宠物代码

include("./npc/npcxx.php");

if($cwid !=""){

include("./cw/cwxx.php");



//等到宠物代码

include("./npc/npcxx.php");
include("./cw/cwxx.php");

//初始化宠物
$cwxj=0;//星级
$cwcz=1;//出战状态
$cwby=1;//变异
$cwxb=1;//品质
//随机变异
 $bz= rand(1, 100);//随机

if($bz >=1&&$bz<=50){
$cwby=2;
$bz= rand(1, 100);//随机
if($bz >=1&&$bz<=50){
$cwby=3;	
$bz= rand(1, 100);//随机
if($bz >=1&&$bz<=50){
$cwby=4;	
$bz= rand(1, 100);//随机
if($bz >=1&&$bz<=50){
$cwby=5;
$bz= rand(1, 100);//随机		
if($bz >=1&&$bz<=50){
$cwby=6;	
}
}
}
}
}
//随机变异
//随机品质
 $bz= rand(1, 100);//随机

if($bz >=1&&$bz<=50){
$cwxb=2;
$bz= rand(1, 100);//随机
if($bz >=1&&$bz<=50){
$cwxb=3;	
$bz= rand(1, 100);//随机
if($bz >=1&&$bz<=50){
$cwxb=4;	
$bz= rand(1, 100);//随机	
if($bz >=1&&$bz<=50){
$cwxb=5;	
$bz= rand(1, 100);//随机	
if($bz >=1&&$bz<=50){
$cwxb=6;	
}
}
}
}
}
//随机品质

include("./sql/mysql.php");//调用数据库连接 
//获取最大值
$q2="cw".$wjid;
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];
if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$q2="cw".$wjid;
$sql = "insert into $q2 (id,cwid,cwmz,cwdj,cwxj,cwby,cwxb,cwcz)  values('$maxidd','$cwid','$nname','$ndj','$cwxj','$cwby','$cwxb','$cwcz')";
 if (!mysqli_query($conn, $sql)){
   die('Error: ' . mysqli_error($conn));
 }
 //更新缓存数据
$inina="cw.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
 
 
 
 
 
 
 
 $cw04x=$cwxb;
if($cw04x==1){
$cw04x="普品";	
} elseif($cw04x==2){  
$cw04x="极品";	
} elseif($cw04x==3){  
$cw04x="灵品";	
} elseif($cw04x==4){  
$cw04x="仙品";	
} elseif($cw04x==5){  
$cw04x="神品";	
} elseif($cw04x==6){  
$cw04x="圣品";	
} else{	
$cw04x="普品";	
}
 $cw19x=$cwby;
if($cw19x==1){
$cw19x="无变异";	
} elseif($cw19x==2){  
$cw19x="一级变异";	
} elseif($cw19x==3){  
$cw19x="二级变异";	
} elseif($cw19x==4){  
$cw19x="三级变异";	
} elseif($cw19x==5){  
$cw19x="四级变异";	
} elseif($cw19x==6){  
$cw19x="五级变异";	
} else{	
$cw19x="无变异";	
}


 if($cwxb >=2&&$cwby>=2){
echo "<font color=red>恭喜你！！抓捕到了".$cw19x."的".$nname."（".$cw04x."）！！</font>"."<br>"; 
} elseif ($cwxb >=2) {//宠物
echo "<font color=red>恭喜你！！抓捕到了".$nname."（".$cw04x."）！！</font>"."<br>";
 } elseif ($cwby >=2) {//宠物
echo "<font color=red>恭喜你！！抓捕到了".$cw19x."的".$nname."！！</font>"."<br>"; 
 } else{
echo "<font color=red>恭喜你！！抓捕到了".$nname."！！</font>"."<br>";  
	 
} 



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续走</font></a>"."<br>";


 
 
 
} else{
	
	
echo "<font color=black>对不起！您抓捕的这只宠物有误联系GM解决</font>"."<br>";
	
}




//等到宠物代码


} else{
echo "<font color=red>对不起，你的宠物背包已满了！请及时清理，以免错过绝世好宠哦</font>"."<br>";  
	 
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>继续走</font></a>"."<br>";

	
	
}








echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";


echo "<font color=black>----------------------</font>"."<br>";
//cmd及超链接值
include("fhgame.php");




?>