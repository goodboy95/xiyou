<?php

echo "<p style='color: black'>占星说明大全</p>"."<br>";

echo "<p style='color: black'>1.占星分为三种〖高级占星〗〖极品占星〗〖完美占星〗</p>"."<br>";
echo "<p style='color: black'>2.每次占星低倍必得占星积分〖高级占星〗得1-20个【小宇宙】〖极品占星〗得20-50个【小宇宙】〖完美占星〗得50-200个【小宇宙】</p>"."<br>";
echo "<p style='color: black'>3.每次占星高倍必得占星积分〖高级占星〗得10-200个【小宇宙】〖极品占星〗得200-500个【小宇宙】〖完美占星〗得500-2000个【小宇宙】</p>"."<br>";




echo "<br>"; 





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=585;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";

echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");



?>