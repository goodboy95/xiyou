<?php
//阻塞代码防止出现脏数据
$ininalock = $wjid . "_lock" . ".txt";
include("./ini/zsini.php");
if ($zsspd == 1) {
    $hdid = 226;
    $npcc = $hdid;
    include("./ini/hd_ini.php");
    $hdcs = ($iniFile->getItem('活动次数', $hdid));
    $csts = $hdcs + 1;
    if ($hdcs < 30) {
        $npcc11 = $npcc;//存值
//提供需要扣除的物品作为判读依据
        $wpdz1[] = "银两";//名字
        $wpdz2[] = 0;//物品分类
        $wpdz3[] = 0;//物品id
        $wpdz4[] = 500000000;//	需要扣除的量
        $wpdz5[] = 0;//	重量
//提供需要扣除的物品作为判读依据
        include("./pz/ini_pzz026.php");
        $npcc = $npcc11;//返还存值
        if ($pd == 2) {
            $hdcs = $hdcs + 1;
            $nowtime = date('Y-m-d H:i:s');
            include("./sql/mysql.php");//调用数据库连接 
            $q2 = "hd" . $wjid;
            $strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$hdid";//物品id号必改值
            $result = mysqli_query($conn, $strsql);
            include("./ini/hd_ini.php");
            $iniFile->updItem('活动时间', [$hdid => $nowtime]);
            $iniFile->updItem('活动次数', [$hdid => $hdcs]);
            echo "<p style='color: black'>心如七夕女，生死难再匹。</p>" . "<br>";
            echo "<br>";
//随机出题
//随机
            $bz = rand(1, 100);
            if ($bz <= 100) {
                $jy = 777;
                include("./pz/ini_pzz023.php");
//经验加
//cmd及超链接值
                $cmid = $cmid + 1;
                $cdid[] = $cmid;
                $clj[] = 528;
                $npc[] = 1;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>我猜【生】</p></a>" . "<br>";
//cmd及超链接值
                $cmid = $cmid + 1;
                $cdid[] = $cmid;
                $clj[] = 528;
                $npc[] = 1;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>我猜【死】</p></a>" . "<br>";
            } else {
                echo "<p style='color: red'>〖活动〗潇道长：(ˇˍˇ) 你未能识破我的生死之谜（失败了）</p>" . "<br>";
            }
//随机出题
        } else {
            echo "<p style='color: black'>对不起！猜生死需要5亿银两</p>" . "<br>";
        }
    } else {
        echo "<p style='color: red'>〖活动〗潇道长：你今日次数已用完！！</p>" . "<br>";
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