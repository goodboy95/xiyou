<?php


echo "<p style='color: red'>温馨提示:〖银符碎片〗〖金符碎片〗〖钻符碎片〗可在这祝融为完整的升星符哦（同时也有失败的可能材料全爆）</p>"."<br>";
  


echo "<p style='color: black'>〖银星升星符〗（〖银符碎片〗x5+2亿银两）[成功率90%]</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=13;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【祝融】</p></a>"."<br>";
echo "<br>";

echo "<p style='color: black'>〖金星升星符〗（〖金符碎片〗x10+10亿银两）[成功率60%]</p>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=14;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【祝融】</p></a>"."<br>";




echo "<br>";
echo "<p style='color: black'>〖钻星升星符〗（〖钻符碎片〗x20+25亿银两）[成功率40%]</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=15;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【祝融】</p></a>"."<br>";
echo "<br>";

/*
〖陨符碎片〗
echo "<p style='color: black'>〖陨星升星符〗（〖陨符碎片〗x40+〖金豆〗x100）[成功率20%]</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=312;
$npc[]=16;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【祝融】</p></a>"."<br>";

*/

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



















?>