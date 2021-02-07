<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zf.ini是否存在
   
include("./ini/zf_ini.php");


//获取毫毛时间
$wwpid1=136;
$zfsj=2592000;
include("./pz/pz05.php");
$zf1=$zf;

//获取人参果时间
$wwpid1=137;
$zfsj=1296000;
include("./pz/pz05.php");
$zf2=$zf;

//获取神秘人参果时间
$wwpid1=138;
$zfsj=2592000;
include("./pz/pz05.php");
$zf3=$zf;


//获取小智慧果时间
$wwpid1=398;
$zfsj=3600;
include("./pz/pz05.php");
$zf4=$zf;


//获取大智慧果时间
$wwpid1=399;
$zfsj=3600;
include("./pz/pz05.php");
$zf5=$zf;


//获取双倍掉宝时间
$wwpid1=454;
$zfsj=600;
include("./pz/pz05.php");
$zf6=$zf;


//获取四倍掉宝时间
$wwpid1=455;
$zfsj=600;
include("./pz/pz05.php");
$zf7=$zf;


//获取八倍掉宝时间
$wwpid1=456;
$zfsj=600;
include("./pz/pz05.php");
$zf8=$zf;

include("./ini/zgvip_ini.php");
$viptime=($iniFile->getItem('尊贵vip','1'));
$nowtime=date('Y-m-d H:i:s');	
if($viptime >$nowtime){
$minute1=floor((strtotime($viptime)-strtotime($nowtime)));
$minute=floor($minute1/60);
$second=$minute1%60;
$time1=floor($minute1/60);
$time2=floor($minute1%60);
$time3=floor($time1/60);
$time4=floor($time3/24);
if($time4 > 0){	
$time5=$time3%24;
$bossts=$bossts."<p style='color: red'>".$bossmz."剩".$time4."天".$time5."小时</p>";
} else{
if($time3 > 0){	
$second=$time1%60;
$bossts=$bossts."<p style='color: red'>".$bossmz."剩".$time3."时".$second."分</p>";
} else{
if($time1 >0){
$bossts=$bossts."<p style='color: red'>".$bossmz."剩".$time1."分钟</p>";
} else{
$bossts=$bossts."<p style='color: red'>".$bossmz."剩".$time2."秒</p>";
} 
} 
}

$zf9=$bossts;
} else{	
"0分钟";
}


echo "<p style='color: black'>你的祝福如下：</p>"."<br>";
echo "<p style='color: black'>如意毫毛：".$zf1."</p>"."<br>";
echo "<p style='color: black'>人参果：".$zf2."</p>"."<br>";
echo "<p style='color: black'>神秘人参果：".$zf3."</p>"."<br>";
echo "<p style='color: black'>双倍经验：".$zf4."</p>"."<br>";
echo "<p style='color: black'>四倍经验：".$zf5."</p>"."<br>";
echo "<p style='color: black'>双倍掉宝：".$zf6."</p>"."<br>";
echo "<p style='color: black'>四倍掉宝：".$zf7."</p>"."<br>";
echo "<p style='color: black'>八倍掉宝：".$zf8."</p>"."<br>";
echo "<p style='color: black'>尊贵VIP：".$zf9."</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=648;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>详细特权</p></a>"."<br>";
echo "<p style='color: black'>尊贵VIP显示开关：</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=649;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>开启</p></a>";
echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=650;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>关闭</p></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=11;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回状态</p></a>"."<br>";

echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";






echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");

}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini





?>