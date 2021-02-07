<?php


if($xpjh==1){	
$xpidd=$xpidd+1;
$xpiddd=$xpidd;
include("xpxx.php");

echo "<p style='color: black'>".$xpiddd.".".$xpmz."：</p>";

if($sl!=999999){
	

if($keyxpkq[$xpidd]>=1){	
if($keyxpid[$xpidd]>=1){
	
$npcc=$keyxpid[$xpidd];
$str=$keyxpid[$xpidd]."_".$xpiddd;
include("./wp/wpxx.php");

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=593;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>（".$wpmz."）</p></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=594;
$npc[]=$str;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【卸下】</p></a>"."<br>";
	
} else{	
echo "<p style='color: black'>（未注入）</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=591;
$npc[]=$xpiddd;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【注入】</p></a>"."<br>";
}
} else{	
$xpjh=2;
echo "<p style='color: red'>（未激活）</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=590;
$npc[]=$xpiddd;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【激活】（".$sl."金豆）</p></a>"."<br>";

}

}

}

 

?>


