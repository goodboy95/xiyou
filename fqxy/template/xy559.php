<?php





echo "<p style='color: black'>【每日领取支付宝红包】</p></a>"."<br>";

echo "<p style='color: red'>温馨提示：不支持外挂浏览器如五滴，自动等（建议用uc）</p></a>"."<br>";
echo "<p style='color: red'>按照顺序点击下方链接</p></a>"."<br>";



echo "<a href='lhb.php'><p style='color: blue'>步骤一：点击领红包</p></a>"."<br>";
echo "<a href='lhbb.php'><p style='color: blue'>步骤二：将领取红包存余额宝消费（支付大于步骤一的红包）</p></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=561;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>步骤三：100%返现金（奖励金豆x2）</p></a>"."<br>";
echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";

?>