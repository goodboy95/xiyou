<?php




//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=477;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>称号</p></a>";
echo "<p style='color: black'>|</p>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=656;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>半周年称号</p></a>";
echo "<p style='color: black'>|</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=666;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>重阳活动称号</p></a>";
echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=673;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>万圣节活动称号</p></a>"."<br>";



$dypx=0;
include("./ini/tx_ini.php");
$txid=915;
include("./pz/pz08.php");
$txid=916;
include("./pz/pz08.php");
$txid=917;
include("./pz/pz08.php");
$txid=918;
include("./pz/pz08.php");
$txid=919;
include("./pz/pz08.php");
$txid=920;
include("./pz/pz08.php");
$txid=921;
include("./pz/pz08.php");



echo "<br>";












//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>我的状态</p></a>"."<br>";











}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>





