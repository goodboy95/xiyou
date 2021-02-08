<?php




//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
echo "<p style='color: red'>小轩温馨提示：男性玩家无法拜入月宫，女性玩家无法拜入普陀山（性别一旦选择无法更换）</p><br>";

echo "<br>";

echo "<p style='color: black'>请你先选择个性别吧</p><br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=298;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>男性</p></a>";
echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=298;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>女性</p></a>"."<br>";
echo "<br>";

echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");












}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini










