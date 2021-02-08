<?php



$npcc=$dyxxid;
include("./wj/dysx.php");
$wpsycs=($iniFile->getItem('物品使用次数',$dyxxid));
$dypx=$dypx+1;
echo "<p style='color: black'>".$dypx.".</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=425;
$npc[]=$dyxxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$wwpmz."</p></a>";

if($wpsycs >=1){
} else{
$wpsycs=0;		
} 
	
echo "<p style='color: black'>（".$wpsycs."/".$xzcs."）</p>"."<br>";

	


