<?php
echo "<p style='color: red'>Sorry！！为提高游戏性能，禁止页面非法刷新或者后退操作</p>" . "<br>";
echo "<br>";
echo "<br>";
//cmd及超链接值
$cmid = $cmid + 1;
$cdid[] = $cmid;
$clj[] = 2;
$npc[] = 0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>" . "<br/>";
echo "<br>";
echo "----------------------" . "<br>";
//cmd及超链接值
$cmid = $cmid + 1;
$cdid[] = $cmid;
$clj[] = 1;
$npc[] = 0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏首页</p></a>" . "<br/>";
