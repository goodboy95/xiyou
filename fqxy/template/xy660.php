<?php
//阻塞代码防止出现脏数据
$ininalock = $wjid . "_lock" . ".txt";
include("./ini/zsini.php");
if ($zsspd == 1) {
    $npcc11 = $npcc;//存值
//提供需要扣除的物品作为判读依据
    $wpdz1[] = "【黑沃土】";//名字
    $wpdz2[] = 6;//物品分类
    $wpdz3[] = 942;//物品id
    $wpdz4[] = 200;//	需要扣除的量
    $wpdz5[] = 1;//	重量
    $wpdz1[] = "【仙玉露】";//名字
    $wpdz2[] = 6;//物品分类
    $wpdz3[] = 943;//物品id
    $wpdz4[] = 200;//	需要扣除的量
    $wpdz5[] = 1;//	重量
//提供需要扣除的物品作为判读依据
    include("./pz/ini_pzz026.php");
    $npcc = $npcc11;//返还存值
    if ($pd == 2) {
        $time1 = 30;//施肥时间（分）
        include("./ini/zz_ini.php");
        include("./sql/mysql.php");//调用数据库连接 
        $q2 = "zz" . $wjid;
        $sftime1 = ($iniFile->getItem('施肥时间', '1'));
        $tiemxx = date("Y-m-d H:i:s", strtotime("$sftime1   $time1   minute"));
        $strsql = "update $q2 set sftime='$tiemxx' where id=1";//物品id号必改值
        $result = mysqli_query($conn, $strsql);
        $iniFile->updItem('施肥时间', ['1' => $tiemxx]);
        echo "<p style='color: black'>恭喜您！！施肥成功！！（请于" . $tiemxx . "前来施肥否则会枯萎）</p>" . "<br>";
//cmd及超链接值
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = 658;
        $npc[] = 0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>" . "<br>";
    } else {
        echo "<p style='color: black'>对不起！！施肥需要" . $wpdz1[0] . "x" . $wpdz4[0] . "," . $wpdz1[1] . "x" . $wpdz4[1] . "</p>" . "<br>";
    }
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>" . "<br>";
    echo "<p style='color: black'>----------------------</p>" . "<br>";
//cmd及超链接值
    include("fhgame.php");
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>