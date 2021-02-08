<?php

$wjid=10000001;
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='allhbmoney_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){
include("./ini/hbmoneyjc_ini.php");	
$csbzh=($iniFile->getItem('财神币总和','初始'));
$csbzh1=($iniFile->getItem('财神币总和','初始1'));
echo "<p style='color: red'>【天降红包】（统计）</p>"."<br>";





echo "<p style='color: red'>---------------------</p>"."<br>";
echo "<p style='color: black'>【当前奖金】：".$csbzh."个〖红包〗</p>"."<br>";
echo "<p style='color: black'>【总共盈利】：".$csbzh1."个〖红包〗</p>";
if($csbzh1>=1){
echo "<p style='color: red'>（盈利中）</p>"."<br>";
} elseif($csbzh1==0){ 
echo "<p style='color: red'>（持平）</p>"."<br>";
} else{	
echo "<p style='color: red'>（亏损中）</p>"."<br>";
}
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=56'><p style='color: blue'>【清空所有】</p></a>"."<br>";

echo "<p style='color: red'>---------------------</p>"."<br>";





echo "<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=52'><p style='color: blue'>【返回上级】</p></a>"."<br>";


echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjiddd=$wjid&&pass=$password><p style='color: blue'>返回GM管理平台</p></a>"."<br>";




}



//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini





