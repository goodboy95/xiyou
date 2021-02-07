<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

include("./wp/wpxx.php");
$wpid=$npcc;
echo "<p style='color: red'>$wpmz</p>"."<br>";
echo "<p style='color: black'>描述：$wpms</p>"."<br>";
//数字转汉字
$yl=$gmjg;
include("./pz/ylts.php");
echo "<p style='color: black'>价格：".$ylxx."两</p>"."<br>";
echo "<p style='color: black'>需要等级：$wpdj</p>"."<br>";
echo "<p style='color: black'>重量：$wpzl</p>"."<br>";
include("./ini/zt_ini.php");
# 获取一个分类下多个子项的值
$bbrlb=($iniFile->getItem('玩家信息','背包容量'));
include("./wp/bbrl.php");
echo "<p style='color: black'>物品负重：".$bbrla."/".$bbrlb."</p></a>"."<br>";
echo"<p style='color: black'>银两：</p></a>";
include("wp/warehouse.php");
include("npcc/mdx01.php");

include("./ini/wp_ini.php");
$npcc=($iniFile->getItem('序列','初始'));

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=246;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回列表</p></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>





