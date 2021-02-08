<?php



$npcc=$txid;
include("./wp/txxx.php");

include("./ini/tx_ini.php");
$txidd="";
$txidd=($iniFile->getItem('头衔名字',$txid));
$dypx=$dypx+1;
echo "<p style='color: black'>".$dypx.".</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=478;
$npc[]=$txid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$wpmz."</p></a>";

if($txidd){
echo "<p style='color: red'>（已获得）</p>"."<br>";
} else{
echo "<p style='color: black'>（未获得）</p>"."<br>";
} 
	


	


