<?php
//阻塞代码防止出现脏数据
$zspd = 0;
$zsspd = 0;
$ininalock = "all_ip";
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
    //登录限制
    include("./ini/zt_ini.php");
    $vip = ($iniFile->getItem('玩家信息', 'vip等级'));
    $wjname = ($iniFile->getItem('玩家信息', '玩家名字'));
    $vip = 3;
    //vip玩家无视限制
    if ($vip == 0 || $vip == 1 || $vip == 2) {
        $ip1 = $_SERVER['REMOTE_ADDR'];
        $ip2 = $_SERVER['HTTP_X_FORWARDED_FOR'];
        if ($ip1 && $ip2 == "") {
            //更新缓存数据
            $inina = "all_ip_ini.ini";
            $path = 'acher/hdjc';
            //判断ini文件是否存在
            $ininame = $path . "/" . $inina;
            unlink($ininame); //删除文件
            //更新缓存数据
            include("./ini/all_ip_ini.php");
            $ip0 = ($iniFile->getItem('玩家id', $ip1));
            $ip3 = ($iniFile->getItem('ip地址', $ip0));
            $ip4 = ($iniFile->getItem('ip时间', $wjid));
            //如果跨天则重置次数和时间
            $nowtime = date('Y-m-d H:i:s');
            $hdtime1 = substr($ip4, 0, 10);
            $nowtime1 = substr($nowtime, 0, 10);
            if (!$ip4) {//如果没有值则添加新数据
                $ip5 = 2;
            }
            echo "<p style='color: red'>【V0-V2号限制情况】</p>" . "<br>";
            echo "<p style='color: black'>【今日绑定IP：" . $ip3 . "】</p>" . "<br>";
            if ($hdtime1 != $nowtime1 && $hdtime1  || $ip5 == 2) {//今天不是今天数据验证
                //改写ip
                $nowtime = date('Y-m-d H:i:s');
                include("./sql/mysql.php");//调用数据库连接
                $q2 = "all_ip";
                $strsql = "delete from $q2 where wjid='$wjid'";//物品id号必改值
                $result = mysqli_query($conn, $strsql);
                $nowtime = date('Y-m-d H:i:s');
                $sql = "insert into $q2 (ip,iptime,wjid,wjname)  values('$ip1','$nowtime','$wjid','$wjname')";
                if (!mysqli_query($conn, $sql)) {
                    die('Error: ' . mysqli_error($conn));
                }
                //更新缓存数据
                $inina = "all_ip_ini.ini";
                $path = 'acher/hdjc';
                //判断ini文件是否存在
                $ininame = $path . "/" . $inina;
                unlink($ininame); //删除文件
                //更新缓存数据
            }
            include("./ini/all_ip_ini.php");
            $ip0 = ($iniFile->getItem('玩家id', $ip1));
            $ip3 = ($iniFile->getItem('ip地址', $ip0));
            if (!$ip3) {
                $nowtime = date('Y-m-d H:i:s');
                include("./sql/mysql.php");//调用数据库连接
                $q2 = "all_ip";
                $sql = "insert into $q2 (ip,iptime,wjid,wjname)  values('$ip1','$nowtime','$wjid','$wjname')";
                if (!mysqli_query($conn, $sql)) {
                    die('Error: ' . mysqli_error($conn));
                }
                //更新缓存数据
                $inina = "all_ip_ini.ini";
                $path = 'acher/hdjc';
                //判断ini文件是否存在
                $ininame = $path . "/" . $inina;
                unlink($ininame); //删除文件
                //更新缓存数据
            }
            include("./sql/mysql.php");//调用数据库连接
            $q2 = "all_ip";
            $str = "select ip from $q2";
            $result = mysqli_query($conn, $str) or die('SQL语句有误');
            //把有值的数据存入一个数组
            $m = 0;
            while (!!$row = mysqli_fetch_array($result)) {
                if ($row['ip'] == $ip1) {
                    $m = $m + 1;
                }
            }
            if ($m <= 2) {
            } else {
                include("./xxjyindex2.php");
                exit;
            }
        } else {
            include("./xxjyindex3.php");
            exit;
        }
    }
    $img = 'pic/login/1.jpg';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
    echo "<br>";
    echo "<br>";
    include("./ini/zt_ini.php");
    $jcmz = ($iniFile->getItem('玩家信息', '玩家名字'));
    $jcmp = ($iniFile->getItem('玩家信息', '门派'));
    $jcxb = ($iniFile->getItem('玩家信息', '性别'));
    if ($jcmz && $jcmp >= 1 && $jcxb >= 1) {
        $hdid = 5;
        $npcc = $hdid;
        include("./ini/hd_ini.php");
        $hdtime = ($iniFile->getItem('活动时间', $hdid));
        $hdcs = ($iniFile->getItem('活动次数', $hdid));
        if (!$hdtime) {//如果没有值则添加新数据
            include("./yxpz/hd_pz.php");
            include("./ini/hd_ini.php");//重新获取缓存数据
            $hdtime = ($iniFile->getItem('活动时间', $hdid));
            $hdcs = ($iniFile->getItem('活动次数', $hdid));
            $hdlq = 2;
        }
        $hdlq = 2;
        //如果跨天则重置次数和时间
        $nowtime = date('Y-m-d H:i:s');
        $hdtime1 = substr($hdtime, 0, 10);
        $nowtime1 = substr($nowtime, 0, 10);
        if ($hdtime1 != $nowtime1 && $hdtime1 && $wjid != 10000001 || $hdlq == 2 && $wjid != 10000001) {//今天不是今天数据验证
            include("./sql/mysql.php");//调用数据库连接
            $q2 = "hd" . $wjid;
            $strsql = "update $q2 set hdtime='$nowtime',hdcs=0 where hdid=$hdid";//物品id号必改值
            $result = mysqli_query($conn, $strsql);
            include("./ini/hd_ini.php");
            $iniFile->updItem('活动时间', [$hdid => $nowtime]);
            $iniFile->updItem('活动次数', [$hdid => '0']);
            $hdcs = 0;
            //更新
            include("./ini/zt_ini.php");
            $wjmz = ($iniFile->getItem('玩家信息', '玩家名字'));
            $vip = ($iniFile->getItem('玩家信息', 'vip等级'));
            $wjdj = ($iniFile->getItem('玩家信息', '等级'));
            $vipjy = ($iniFile->getItem('玩家信息', 'vip经验'));
            include("./wj/ztt.php");
            include("./ini/sc_ini.php");
            $jdd = ($iniFile->getItem('商城数量', '127'));
            if ($jdd >= 1) {
            } else {
                $jdd = 0;
            }
            include("./ini/yl_ini.php");
            $yl = ($iniFile->getItem('背包仓库银两', '背包银两'));
            if ($yl >= 1) {
            } else {
                $yl = 0;
            }
            $phb1 = $wjxx1['血'];
            $phb2 = $wjxx1['max攻击'];
            $phb3 = $wjxx1['max魔攻'];
            $phb4 = $wjxx1['max防御'];
            $phb5 = $wjdj;
            $phb6 = $yl;
            $phb7 = $jdd;
            $phb8 = $vipjy;
            include("./sql/mysql.php");//调用数据库连接
            $q2 = "all_phb";
            $sql1 = mysqli_query($conn, "select wjid from $q2 where wjid=$wjid");
            $info1 = @mysqli_fetch_array($sql1);
            $phwjid = $info1['wjid'];
            if (!$phwjid) {
                //获取最大值
                $q2 = "all_phb";
                $sql1 = mysqli_query($conn, "select MAX(id) from $q2");
                $abc = mysqli_fetch_array($sql1);
                $maxid = $abc[0];
                if (!$maxid) {
                    $maxid = 0;
                    $maxidd = $maxid + 1;
                } else {
                    $maxidd = $maxid + 1;
                }
                $q2 = "all_phb";
                $sql = "insert into $q2 (id,wjid,wjmz,vip,phb1,phb2,phb3,phb4,phb5,phb6,phb7,phb8)  values('$maxidd','$wjid','$wjmz','$vip','$phb1','$phb2','$phb3','$phb4','$phb5','$phb6','$phb7','$phb8')";
                if (!mysqli_query($conn, $sql)) {
                    die('Error: ' . mysqli_error($conn));
                }
            } else {
                $q2 = "all_phb";
                $strsql = "update $q2 set phb1='$phb1',phb2='$phb2',phb3='$phb3',phb4='$phb4',phb5='$phb5',phb6='$phb6',phb7='$phb7',phb8='$phb8',vip='$vip' where wjid=$wjid";//物品id号必改值
                $result = mysqli_query($conn, $strsql);
            }
            //路径
            $inina = "phb1.ini";
            $path = './acher/phb';
            //判断ini文件是否存在
            $ininame = $path . "/" . $inina;
            unlink($ininame); //删除文件
            function deldir($dir)
            {
                //先删除目录下的文件：
                $dh = opendir($dir);
                while ($file = readdir($dh)) {
                    if ($file != "." && $file != "..") {
                        $fullpath = $dir . "/" . $file;
                        if (!is_dir($fullpath)) {
                            unlink($fullpath);
                        } else {
                            deldir($fullpath);
                        }
                    }
                }
                closedir($dh);
            }
            $path = './acher/phb';
            deldir($path);
        }
    }
    echo "<p style='color: black'>古典神话网游，持神兵利器，降五爪金龙，携爱行走西游路……</p>" . "<br>";
    echo "<p style='color: black'>【游戏选项】</p>" . "<br>";
    //页面值
    $q5 = 1;
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入游戏</p></a>" . "<br>";
    echo "<p style='color: black'>进入论坛</p>" . "<br>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 336;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>增值仓库</p></a>" . "<br>";
    echo "<p style='color: black'>【官方动态】</p>" . "<br>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 34;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【活动-补充值【傲来国】活动】(11-26~~~12-02(23:50))</p></a>" . "<br>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 35;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【活动-纯净新【宝象国】活动】(11-26~~~12-02(23:50))</p></a>" . "<br>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 36;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【活动-开区活动】(补充值区与纯净新区同时有效)</p></a>" . "<br>";
    echo "<p style='color: black'>【游戏指引】</p>" . "<br>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 1;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>简介</p></a>";
    echo "<p style='color: black'>|</p>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 2;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>操作</p></a>";
    echo "<p style='color: black'>|</p>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 3;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>门派</p></a>";
    echo "<p style='color: black'>|</p>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 4;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>区域</p></a>" . "<br>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 5;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>装备</p></a>";
    echo "<p style='color: black'>|</p>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 6;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>道具</p></a>";
    echo "<p style='color: black'>|</p>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 7;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>任务</p></a>";
    echo "<p style='color: black'>|</p>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 107;
    $npc[] = 8;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>战斗</p></a>" . "<br>";
    echo "<p style='color: black'>【客服帮助】</p>" . "<br>" . "<p style='color: black'>官方群QQ群:54665469,客服QQ:137154720</p>" . "<br>" . "<p style='color: black'>服务时间(09:30-21:00)</p>";
    flock($fp, LOCK_UN);
} else {
    echo "服务器开小差了";
}

