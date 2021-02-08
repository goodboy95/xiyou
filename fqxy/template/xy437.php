<?php
//阻塞代码防止出现脏数据
$ininalock = "hdjc.txt";
$zspd = 0;
$zsspd = 0;
// flock($fp, LOCK_NB); //duwei:注释加锁代码
//路径
$path = 'acher/hdjc';
$gglockname = $path . "/" . $ininalock;
for ($x = 0; $x <= 30; $x++) {
    $fp = fopen($gglockname, "w+");
    if (flock($fp, LOCK_EX | LOCK_NB)) {
        $zsspd = 1;
        //usleep(800);
        flock($fp, LOCK_EX);
        break;
    } else {
        //排队等待
        //延时200毫秒
        usleep(200000);
        $zspd = $zspd + 1;//五秒内没获得锁则提示服务器繁忙
        if ($zspd >= 25) {
            $zsspd = 2;
            break;
        }
    }
}
if ($zsspd == 1) {
//判断是否在活动时间内
    include("./wj/ydtime.php");
    $nowtime = strtotime(date('Y-m-d'));
    $time1 = strtotime($starttime);
    $time2 = strtotime($endtime);
    if ($nowtime >= $time1 && $nowtime <= $time2) {
        echo "<p style='color: black'>活动截止：" . $endtime . "晚上23:55</p><br>";
        include("./ini/yd01_ini.php");
        $hdyd = ($iniFile->getCategory('摇点信息'));
        $hdtime = $hdyd['摇点时间'];
        $nowtime = date('Y-m-d H:i:s');
        $hdtime1 = substr($hdtime, 0, 10);
        $time3 = strtotime($hdtime1);
        if ($time3 <= $time1 && $time3 >= $time2) {
//如果大于1则改掉自己的点数
            include("./ini/yd01_ini.php");
            $hdyd = ($iniFile->getCategory('摇点信息'));
            $yd01 = $hdyd['今日点数'];
            $yd02 = $hdyd['活动点数'];
            if ($yd01 >= 1 || $yd02 >= 1) {
                include("./sql/mysql.php");//调用数据库连接 
                $q2 = "all_yd01";
                $strsql = "update $q2 set ds01=0,ds02=0 where wjid=$wjid";//物品id号必改值
                $result = mysqli_query($conn, $strsql);
                include("./ini/yd01_ini.php");
                $iniFile->updItem('摇点信息', ['今日点数' => '0', '活动点数' => '0']);
            }
        }
        $nowtime1 = substr($nowtime, 0, 10);
        if ($hdtime1 != $nowtime1 && $hdtime1) {//今天不是今天数据验证
            $hdyd = "";
//更新摇点每日限制
            include("./sql/mysql.php");//调用数据库连接 
            $q2 = "all_yd01";
            $strsql = "update $q2 set dy01_time='$nowtime',ds01='0',yd01='0',yd02='0' where wjid=$wjid";//物品id号必改值
            $result = mysqli_query($conn, $strsql);
            include("./ini/yd01_ini.php");
            $iniFile->updItem('摇点信息', ['摇点时间' => $nowtime, '今日点数' => '0', '免费次数' => '0', '收费次数' => '0']);
            include("./ini/yd01_ini.php");
            $hdyd = ($iniFile->getCategory('摇点信息'));
        }
        echo "<p style='color: red'>娱乐项目-【疯狂摇一摇】（黄金场）</p>" . "<br>";
        echo "<p style='color: black'>今日点数：</p>";
        echo "<p style='color: red'>" . $hdyd['今日点数'] . "&nbsp点</p>" . "<br>";
        echo "<p style='color: black'>活动点数：</p>";
        echo "<p style='color: red'>" . $hdyd['活动点数'] . "&nbsp点</p>" . "<br>";
        echo "<br>";
        echo "<p style='color: black'>免费摇点：</p>";
        echo "<p style='color: red'>(" . $hdyd['免费次数'] . "/6次)</p>";
//cmd及超链接值
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = 439;
        $npc[] = 1;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【免费摇一摇】</p></a>" . "<p style='color: black'></p>" . "<br>";
        echo "<br>";
        echo "<p style='color: black'>金豆摇点：</p>";
        echo "<p style='color: red'>(" . $hdyd['收费次数'] . "/4次)</p>";
//cmd及超链接值
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = 439;
        $npc[] = 2;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【金豆摇一摇】</p></a>" . "<p style='color: black'></p>" . "<br>";
        echo "<br>";
        include("./ini/hdjc_ini.php");
        $hdjc = ($iniFile->getItem('奖金池', '1'));
        echo "<p style='color: black'>【金豆奖池】</p><br>";
        echo "<p style='color: black'>奖池：〖金豆〗x" . $hdjc . "</p><br>";
        echo "<p style='color: black'>------</p><br>";
        echo "<p style='color: black'>当前奖池分成</p><br>";
        $fc01 = ceil($hdjc * 0.6);
        $fc02 = ceil(($hdjc - $fc01) * 0.5);
        $fc03 = ceil(($hdjc - $fc01 - $fc02) * 0.3);
        $fc04 = ceil(($hdjc - $fc01 - $fc02 - $fc03) * 0.07);
        $fc05 = ceil(($hdjc - $fc01 - $fc02 - $fc03 - $fc04) * 0.06);
        $fc06 = ceil(($hdjc - $fc01 - $fc02 - $fc03 - $fc04 - $fc05) * 0.05);
        $fc07 = ceil(($hdjc - $fc01 - $fc02 - $fc03 - $fc04 - $fc05 - $fc06) * 0.04);
        $fc08 = ceil(($hdjc - $fc01 - $fc02 - $fc03 - $fc04 - $fc05 - $fc06 - $fc07) * 0.03);
        $fc09 = ceil(($hdjc - $fc01 - $fc02 - $fc03 - $fc04 - $fc05 - $fc06 - $fc07 - $fc08) * 0.02);
        $fc10 = ceil(($hdjc - $fc01 - $fc02 - $fc03 - $fc04 - $fc05 - $fc06 - $fc07 - $fc08 - $fc09) * 0.01);
        echo "<p style='color: black'>第1名:〖金豆〗x" . $fc01 . "</p><br>";
        echo "<p style='color: black'>第2名:〖金豆〗x" . $fc02 . "</p><br>";
        echo "<p style='color: black'>第3名:〖金豆〗x" . $fc03 . "</p><br>";
        echo "<p style='color: black'>第4名:〖金豆〗x" . $fc04 . "</p><br>";
        echo "<p style='color: black'>第5名:〖金豆〗x" . $fc05 . "</p><br>";
        echo "<p style='color: black'>第6名:〖金豆〗x" . $fc06 . "</p><br>";
        echo "<p style='color: black'>第7名:〖金豆〗x" . $fc07 . "</p><br>";
        echo "<p style='color: black'>第8名:〖金豆〗x" . $fc08 . "</p><br>";
        echo "<p style='color: black'>第9名:〖金豆〗x" . $fc09 . "</p><br>";
        echo "<p style='color: black'>第10名:〖金豆〗x" . $fc10 . "</p><br>";
        echo "<br>";
//cmd及超链接值
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = 403;
        $npc[] = 0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回娱乐</p></a>" . "<p style='color: black'></p>" . "<br>";
    } else {
//如果大于1则改掉自己的点数
        include("./ini/yd01_ini.php");
        $hdyd = ($iniFile->getCategory('摇点信息'));
        $yd01 = $hdyd['今日点数'];
        $yd02 = $hdyd['活动点数'];
        if ($yd01 >= 1 || $yd02 >= 1) {
            include("./sql/mysql.php");//调用数据库连接 
            $q2 = "all_yd01";
            $strsql = "update $q2 set ds01=0,ds02=0 where wjid=$wjid";//物品id号必改值
            $result = mysqli_query($conn, $strsql);
            include("./ini/yd01_ini.php");
            $iniFile->updItem('摇点信息', ['今日点数' => '0', '活动点数' => '0']);
        }
        echo "<p style='color: red'>活动尚未开始或者已结束</p><br>";
        echo "<p style='color: black'>开始时间：" . $starttime . "晚0点</p><br>";
        echo "<p style='color: black'>截止时间：" . $endtime . "晚0点</p><br>";
        echo "<br>";
//cmd及超链接值
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = 403;
        $npc[] = 0;
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回娱乐</p></a>" . "<p style='color: black'></p>" . "<br>";
    }
    flock($fp, LOCK_UN);
} else {
    echo "<p style='color: black'>服务器睡着了</p><br>";
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 403;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回娱乐</p></a>" . "<p style='color: black'></p>" . "<br>";
}
 
	
