<?php

include("./ini/cw_ini.php");
$xl=($iniFile->getCategory('序列'));
$m=count($xl,0)-1; 
$km=$m+1;



if($km <=20){

$npcc=$boxcwid;
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
$cwby=6;//变异
$cwxb=6;//品质


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
echo "<p style='color: red'>恭喜你！！获得了".$cw19x."的".$nname."（".$cw04x."）！！</p>"."<br>";
} elseif ($cwxb >=2) {//宠物
echo "<p style='color: red'>恭喜你！！获得了".$nname."（".$cw04x."）！！</p>"."<br>";
 } elseif ($cwby >=2) {//宠物
echo "<p style='color: red'>恭喜你！！获得了".$cw19x."的".$nname."！！</p>"."<br>";
 } else{
echo "<p style='color: red'>恭喜你！！获得了".$nname."！！</p>"."<br>";
	 
} 
$wpsy=2;//使用成功


} else{
	$wpsy=1;//使用失败
	
echo "<p style='color: black'>对不起！这只宠物有误联系GM解决</p>"."<br>";
	
}




//等到宠物代码


} else{
$wpsy=1;//使用失败	
echo "<p style='color: red'>对不起，你的宠物背包已满了！请及时清理，以免错过绝世好宠哦</p>"."<br>";

	
}

$npcc=$npcccz;

?>
