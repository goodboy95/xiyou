<?php




echo "<p style='color: red'>【阴曹地府】奖励掉落一览</p>"."<br>";
echo "<p style='color: black'>1层-3层</p>"."<br>";
echo "<p style='color: black'>随机各类三级宝石，银符碎片</p>"."<br>";
echo "<p style='color: black'>4层-6层</p>"."<br>";
echo "<p style='color: black'>随机各类四级宝石，各类师门声望卷，金符碎片</p>"."<br>";
echo "<p style='color: black'>7层-9层</p>"."<br>";
echo "<p style='color: black'>随机各类五级宝石，各类师门声望卷，法宝经验卷，区域声望卷，钻符碎片，</p>"."<br>";

echo "<p style='color: black'>11层-15层</p>"."<br>";
echo "<p style='color: black'>随机法宝经验卷，西游声望卷，钻符碎片，</p>"."<br>";

echo "<p style='color: black'>16层-20层</p>"."<br>";
echo "<p style='color: black'>随机财宝箱x1，法宝经验卷，西游声望卷，钻符碎片</p>"."<br>";
echo "<p style='color: black'>20层</p>"."<br>";
echo "<p style='color: black'>〖齐天大圣〗（宠物蛋）20%,〖大圣精魄〗50%</p>"."<br>";

echo "<p style='color: black'>另外：5层终极随机财宝箱（1-2），10层终极必掉财宝箱（1-5），15层终极必掉财宝箱（1-10），20层终极必掉财宝箱（1-20）</p>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=450;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回挑战</p></a>"."<br>";


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";






echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");


















 
 
 






?>