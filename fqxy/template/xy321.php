<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
	//阻塞代码防止出现脏数据
	$ggmz="qggz";
$ininalock1=$ggmz."_lock".".txt";
include("./ini/zsggini.php");


if($zsspd==1&&$zsspd1==1){
include("./ini/qggz_ini.php");
$qgjd=($iniFile->getItem('求购价格',$wjid));

if($qgjd>=1){

include("./sql/mysql.php");//调用数据库连接 
$q2="all_qggz";
$strsql = "delete from $q2 where wjid=$wjid ";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/sc_ini.php");
$jd=($iniFile->getItem('商城数量','127'));	

$jdd=$qgjd+$jd;
if($jd==""){  
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
$sql = "insert into $q2 (id,wpid,wpsl,wpfl)  values('$maxidd','127','$jdd','4')";
 if (!mysqli_query($conn, $sql))
 {
   die('Error: ' . mysqli_error($conn));
 }
//更新缓存数据
$inina="sc.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
} else{
$q2="wp".$wjid;
$strsql = "update $q2 set wpsl=$jdd where wpid=127";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/sc_ini.php");
$iniFile->updItem('商城数量', ['127'=> $jdd]);
}











include("./ini/qggz_ini.php");


# 删除一个子项
$iniFile->delItem('排序id', $wjid);
# 删除一个子项
$iniFile->delItem('求购信息', $wjid);
# 删除一个子项
$iniFile->delItem('求购人', $wjid);
# 删除一个子项
$iniFile->delItem('求购人id', $wjid);
# 删除一个子项
$iniFile->delItem('求购价格', $wjid);



echo "<p style='color: black'>返还了求购金豆x".$qgjd."</p>"."<br>";
echo "<p style='color: black'>你撤消官宅求购信息</p>"."<br>";
} else{	

echo "<p style='color: black'>对不起！！此条求购官宅信息不存在！！</p>"."<br>";






}


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


}
//解锁当前使用的ini
include("./ini/jsggini.php");
//解锁当前使用的ini

?>