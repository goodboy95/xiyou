<?php


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=580;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>绑定【支付宝】</p></a>";

echo "<p style='color: red'>☯</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=581;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>绑定【微信】</p></a>"."<br>";


include("./ini/bdzfb_ini.php");	
$zfb=($iniFile->getItem('支付宝','初始'));
include("./ini/bdwx_ini.php");	
$wx=($iniFile->getItem('微信','初始'));
$bdzh=0;

if($zfb!=111){
echo $zfb;	
echo "<p style='color: red'>已绑定【支付宝】：".$zfb."</p>"."<br>";
} else{
$bdzh=$bdzh+1;	
}
	
if($wx!=111){
echo "<p style='color: red'>已绑定【微信】：".$wx."</p>"."<br>";
} else{
$bdzh=$bdzh+1;	

}	


if($bdzh==2){
echo "<p style='color: red'>当前绑定：未绑定（请先绑定哦）</p>";
}



echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=582;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>领取1元现金（10个红包）</p></a>"."<p style='color: black'></p>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=582;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>领取10元现金（100个红包）</p></a>"."<p style='color: black'></p>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=582;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>领取20元现金（200个红包）</p></a>"."<p style='color: black'></p>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=582;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>领取50元现金（500个红包）</p></a>"."<p style='color: black'></p>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=582;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>领取100元现金（1000个红包）</p></a>"."<p style='color: black'></p>"."<br>";



echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=570;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<p style='color: black'></p>"."<br>";










