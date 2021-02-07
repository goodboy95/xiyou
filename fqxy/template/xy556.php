<?php
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='czjf_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){
include("./ini/czjf_ini.php");


$czjf=($iniFile->getItem('充值积分','初始'));
echo "<p style='color: black'>当前BOSS已蓄力（".$czjf."/500）</p>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=557;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【我要召唤欢喜财神】（160-200）</p></a>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=558;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【我要召唤如意财神】（1-159）</p></a>"."<br>";

echo "<p style='color: red'>提示：全区玩家每充值1元则可为财神蓄力+2满500点即可召唤【财神爷】</p>"."<br>";
echo "<p style='color: black'>1.两种财神分160以上和159以下打</p>"."<br>";
echo "<p style='color: black'>2.大概率掉落为〖金豆〗（1-200随机）〖金星升星符〗〖钻星升星符〗〖陨星升星符〗〖诛仙令〗〖双倍掉宝符〗〖四倍掉宝符〗〖八倍掉宝符〗〖荣誉宝石〗（随机）〖冠军宝石〗（随机）〖王者宝石〗（随机）</p>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";


}
//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini



?>