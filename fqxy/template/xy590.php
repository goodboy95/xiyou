<?php
$xpiddd = $npcc;
include("./wj/xpxx.php");
//提供需要扣除的物品作为判读依据
$wpdz1[] = "〖金豆〗";//名字
$wpdz2[] = 4;//物品分类
$wpdz3[] = 127;//物品id
$wpdz4[] = $sl;//	需要扣除的量
$wpdz5[] = 1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
if ($pd == 2) {
    include("./sql/mysql.php");//调用数据库连接 
    $q2 = "xp" . $wjid;
    $strsql = "update $q2 set xpkq=2 where id=$xpiddd";//物品id号必改值
    $result = mysqli_query($conn, $strsql);
//更新缓存数据
    $inina = "xp.ini";
    $path = 'ache/' . $wjid;
//判断ini文件是否存在	
    $ininame = $path . "/" . $inina;
    unlink($ininame); //删除文件  
//更新缓存数据
    echo "<p style='color: red'>恭喜你！激活" . $xpmz . "成功了！！</p><br>";
    include("./ini/zt_ini.php");
    $wjmz = ($iniFile->getItem('玩家信息', '玩家名字'));
    $xtxx = "恭喜玩家" . $wjmz . "激活了" . $xpmz . "实力得到了大幅度提升！！赶紧膜拜下吧！！！";
    include("./msg/msgg02.php");
    echo "<br>";
} else {
    echo "<p style='color: black'>对不起！激活" . $xpmz . "需要" . $wpdz1[0] . "x" . $wpdz4[0] . "</p><br>";
}
echo "<br>";
//cmd及超链接值
$cmid = $cmid + 1;
$cdid[] = $cmid;
$clj[] = 589;
$npc[] = 0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>" . "<br>";
//cmd及超链接值
$cmid = $cmid + 1;
$cdid[] = $cmid;
$clj[] = 2;
$npc[] = 0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>" . "<br>";
echo "<p style='color: black'>----------------------</p>" . "<br>";
//cmd及超链接值
include("fhgame.php");
