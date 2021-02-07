<?php


echo "<p style='color: black'>【秘宝宝箱和秘宝钥匙合成】</p>"."<br>";

 
echo "<p style='color: red'> 【秘宝宝箱】=【秘宝碎片】x100</p>";
 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=218;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【合成】</p></a>"."<br>";
echo "<p style='color: red'> 【秘宝钥匙】=【秘宝碎片】x150</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=219;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【合成】</p></a>"."<br>";
 echo "<p style='color: red'> 【秘宝宝箱】x10=【秘宝碎片】x1000</p>";
 //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=220;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【合成】</p></a>"."<br>";
echo "<p style='color: red'> 【秘宝钥匙】x10=【秘宝碎片】x1500</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=221;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【合成】</p></a>"."<br>";
 
 
 
 echo "<br>";
 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";



?>