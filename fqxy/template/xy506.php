<?php


//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='pm_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁



if($zsspd==1&&$all_lock2==1){

//调用wp.ini是否存在
include("./ini/pm_cl_ini.php");
$pmmwpid=($iniFile->getItem('拍卖物品id',$npcc));
$pmmwjid=($iniFile->getItem('玩家id',$npcc));
$wpsl=($iniFile->getItem('拍卖数量',$npcc));
$wpjgg=($iniFile->getItem('拍卖价格',$npcc));
$wpsjc=($iniFile->getItem('拍卖时间搓',$npcc));
$wpmz=($iniFile->getItem('拍卖名字',$npcc));


$wjid1=$wjid;
$ckid=$pmmwjid;
$wjid=$ckid;
$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");

$wjid=$wjid1;





if($zsspd2==1){




include("./ini/yl_ini.php");
$yl=($iniFile->getItem('背包仓库银两','背包银两'));

if($yl>=1000){
$gmsl=floor($yl/$wpjgg);

if($gmsl>$wpsl){
$gmsl=$wpsl;
}

} else{
$gmsl=0;
echo "<p style='color: red'>提示：你身上携带的银两不足哦！！</p>"."<br>";

} 





if($wpsl>1){


include("npcc/pmgmwp01.php");






} elseif($wpsl==1){  

$sl=1;
$wpsl=1;
$sll=1;
include("npcc/pmgmwp02.php");

} else{



echo "<p style='color: red'>该物品已被下架或者被买走了！！</p>"."<br>";
echo "<br>";





} 




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=505;
$npc[]=$pmmwpid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<br>";








}
//解锁当前使用的ini
include("./ini/ojsini.php");
//解锁当前使用的ini



}
//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini

//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini





















?>