<?php
include("seach.php");
//阻塞代码防止出现脏数据
$ininalock = $wjid . "_lock" . ".txt";
include("./ini/zsini.php");
if ($zsspd == 1) {
//调用zt.ini是否存在
    include("./ini/zt_ini.php");
//调用yl.ini是否存在
    include("./ini/yl_ini.php");
//调用bbrl.ini是否存在
    include("./ini/bbrl_ini.php");
//保存页面id方便分页使用
    if ($cmdd == 27 || $cmdd == 28 || $cmdd == 29 || $cmdd == 30 || $cmdd == 31 || $cmdd == 32 || $cmdd == 33 || $cmdd == 34 || $cmdd == 35) {
        $inina = "yl.ini";
        $path = 'ache/' . $wjid;
        $file = $path . "/" . $inina;
# 实例化ini文件操作类，并载入 .ini文件
        $iniFile = new iniFile($file);
# 修改一个分类下子项的值(也可以修改多个)
        $iniFile->updItem('背包页面', ['页面id' => $cmdd]);
    }
//ini文件名字
    $inina = "zt.ini";
//路径
    $path = 'ache/' . $wjid;
//判断ini文件是否存在	
    $ininame = $path . "/" . $inina;
# 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($ininame);
# 获取一个分类下多个子项的值
    $bbrlb = ($iniFile->getItem('玩家信息', '背包容量'));
//调用dy.ini是否存在
    include("./ini/dy_ini.php");
    include("wp/bbrl.php");
    echo "<p style='color: black'>物品负重：" . $bbrla . "/" . $bbrlb . "</p></a>" . "<br>";
    echo "<p style='color: black'>银两：</p></a>";
    include("wp/warehouse.php");
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 27;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>书卷</p></a>";
    echo "<p style='color: black'>|</p></a>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 28;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>材料</p></a>";
    echo "<p style='color: black'>|</p></a>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 29;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>装备</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 30;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>商城</p></a>";
    echo "<p style='color: black'>|</p></a>";
    echo "<p style='color: black'>丹药</p></a>";
    echo "<p style='color: black'>|</p></a>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 32;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>任务</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 33;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>农场</p></a>";
    echo "<p style='color: black'>|</p></a>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 34;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宝箱</p></a>";
    echo "<p style='color: black'>|</p></a>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 35;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>其他</p></a>" . "<br>";
//显示搜索结果
    $inina = "seach.ini";
    $path = 'ache/' . $wjid;
    $file = $path . "/" . $inina;
    if (file_exists($file)) {
        $iniFile = new iniFile($file);
# 获取一个分类下所有数据
        $wpid = ($iniFile->getCategory('物品id'));
        $m = count($wpid, 0);
        if ($m >= 1) {
//如果任意一样缓存不存在则不显示搜索记录
            $inina = "wp.ini";
            $path = 'ache/' . $wjid;
            $file = $path . "/" . $inina;
            if (file_exists($file)) {
                $pdcc1 = 1;
            } else {
                $pdcc1 = 2;
            }
            $inina = "cl.ini";
            $path = 'ache/' . $wjid;
            $file = $path . "/" . $inina;
            if (file_exists($file)) {
                $pdcc2 = 1;
            } else {
                $pdcc2 = 2;
            }
            $inina = "sc.ini";
            $path = 'ache/' . $wjid;
            $file = $path . "/" . $inina;
            if (file_exists($file)) {
                $pdcc3 = 1;
            } else {
                $pdcc3 = 2;
            }
            $inina = "dy.ini";
            $path = 'ache/' . $wjid;
            $file = $path . "/" . $inina;
            if (file_exists($file)) {
                $pdcc4 = 1;
            } else {
                $pdcc4 = 2;
            }
            $inina = "rw.ini";
            $path = 'ache/' . $wjid;
            $file = $path . "/" . $inina;
            if (file_exists($file)) {
                $pdcc5 = 1;
            } else {
                $pdcc5 = 2;
            }
            $inina = "nc.ini";
            $path = 'ache/' . $wjid;
            $file = $path . "/" . $inina;
            if (file_exists($file)) {
                $pdcc6 = 1;
            } else {
                $pdcc6 = 2;
            }
            $inina = "bx.ini";
            $path = 'ache/' . $wjid;
            $file = $path . "/" . $inina;
            if (file_exists($file)) {
                $pdcc7 = 1;
            } else {
                $pdcc7 = 2;
            }
            if ($pdcc1 == 1 && $pdcc2 == 1 && $pdcc3 == 1 && $pdcc4 == 1 && $pdcc5 == 1 && $pdcc6 == 1 && $pdcc7 == 1) {
//显示搜索结果
//cmd及超链接值
                $cmid = $cmid + 1;
                $cdid[] = $cmid;
                $clj[] = 458;
                $npc[] = 0;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【清除搜索记录】</p></a>" . "<br>";
                foreach (array_keys($wpid) as $key) {
                    $keywpid[] = $wpid[$key];
                }
                $i = -1;
                $km = 0;
                for ($x = 0; $x < $m; $x++) {
                    $i = $i + 1;
                    $npcc = $keywpid[$i];
                    include("./wp/wpxx.php");
                    if ($wpfl == 1) {//背包书卷
                        include("./ini/wp_ini.php");
                        $wpsl = ($iniFile->getItem('书卷数量', $npcc));
                        $wpmz = ($iniFile->getItem('书卷名字', $npcc));
                    } elseif ($wpfl == 2) { //背包材料
                        include("./ini/cl_ini.php");
                        $wpsl = ($iniFile->getItem('材料数量', $npcc));
                        $wpmz = ($iniFile->getItem('材料名字', $npcc));
                    } elseif ($wpfl == 4) { //背包商城
                        include("./ini/sc_ini.php");
                        $wpsl = ($iniFile->getItem('商城数量', $npcc));
                        $wpmz = ($iniFile->getItem('商城名字', $npcc));
                    } elseif ($wpfl == 5) { //背包丹药
                        include("./ini/dy_ini.php");
                        $wpsl = ($iniFile->getItem('丹药数量', $npcc));
                        $wpmz = ($iniFile->getItem('丹药名字', $npcc));
                    } elseif ($wpfl == 6) { //背包任务
                        include("./ini/rw_ini.php");
                        $wpsl = ($iniFile->getItem('任务数量', $npcc));
                        $wpmz = ($iniFile->getItem('任务名字', $npcc));
                    } elseif ($wpfl == 7) { //背包农场
                        include("./ini/nc_ini.php");
                        $wpsl = ($iniFile->getItem('农场数量', $npcc));
                        $wpmz = ($iniFile->getItem('农场名字', $npcc));
                    } elseif ($wpfl == 8) { //背包宝箱
                        include("./ini/bx_ini.php");
                        $wpsl = ($iniFile->getItem('宝箱数量', $npcc));
                        $wpmz = ($iniFile->getItem('宝箱名字', $npcc));
                    }
                    if ($wpsl >= 1) {
                        $km = $km + 1;
                        echo "<p style='color: black'>" . $km . ".</p>";
//cmd及超链接值
                        $cmid = $cmid + 1;
                        $cdid[] = $cmid;
                        $clj[] = 36;
                        $npc[] = $npcc;
                        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>$wpmz</p></a>" . "<p style='color: blue'>x$wpsl|</p>";
//cmd及超链接值
                        $cmid = $cmid + 1;
                        $cdid[] = $cmid;
                        $clj[] = 37;
                        $npc[] = $npcc;
                        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>使用</p></a>" . "<br>";
                    }
                }
            }
        }
    } else {
//ini文件名字
        $inina = "dy.ini";
//路径
        $path = 'ache/' . $wjid;
//判断ini文件是否存在	
        $ininame = $path . "/" . $inina;
# 实例化ini文件操作类，并载入 .ini文件
        $iniFile = new iniFile($ininame);
# 修改一个分类下子项的值(也可以修改多个)
        $iniFile->updItem('丹药数量', ['初始' => 28]);
# 获取一个分类下所有数据
        $wpid = ($iniFile->getCategory('丹药id'));
# 获取一个分类下所有数据
        $wpmz = ($iniFile->getCategory('丹药名字'));
# 获取一个分类下所有数据
        $wpsl = ($iniFile->getCategory('丹药数量'));
        $wpxl = ($iniFile->getCategory('序列'));
        $cb01 = count($wpxl, 0);
        $cb02 = count($wpid, 0);
        $cb03 = count($wpmz, 0);
        $cb04 = count($wpsl, 0);
        if ($cb01 == $cb02 && $cb01 == $cb03 && $cb01 == $cb04 && $cb02 == $cb03 && $cb02 == $cb04 && $cb03 == $cb04) {
            $m = count($wpid, 0) - 1;
            $i = 0;
            $ym = $wpid['初始'];
            $km = 0;
//将ini值存入数组方便使用
            foreach (array_keys($wpmz) as $key) {
                $keywpmz[] = $wpmz[$key];
            }
            foreach (array_keys($wpsl) as $key) {
                $keywpsl[] = $wpsl[$key];
            }
            foreach (array_keys($wpid) as $key) {
                $keywpid[] = $wpid[$key];
            }
//将ini值存入数组方便使用
            for ($d = 0; $d < $m; $d++) {
                $i = $i + 1;
                $ivd = $keywpid[$i];
                $mvz = $keywpmz[$i];
                $svl = $keywpsl[$i];
                $mmz[] = $mvz;
                $ssl[] = $svl;
                $iid[] = $ivd;
                $km = $km + 1;
                $mz[] = $mvz;
            }
            $i = -2;
            $mcc = $km / 10;
            if ($mcc >= $ym) {
                for ($x = 0; $x <= 9; $x++) {
                    $i = $i + 1;
                    $clname = $mz[$ym * 10 - 9 + $i];
                    $cl = $ssl[$ym * 10 - 9 + $i];
                    $xxid = $iid[$ym * 10 - 9 + $i];
                    if ($cl >= 1) {
//cmd及超链接值
                        $cmid = $cmid + 1;
                        $cdid[] = $cmid;
                        $clj[] = 36;
                        $npc[] = $xxid;
                        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>$clname</p></a>" . "<p style='color: blue'>x$cl|</p>";
//cmd及超链接值
                        $cmid = $cmid + 1;
                        $cdid[] = $cmid;
                        $clj[] = 37;
                        $npc[] = $xxid;
                        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>使用</p></a>" . "<br>";
                    }
                }
            } else {
                if ($ym > 1) {
                    $mcc = $km % 10 - 1;
                    for ($x = 0; $x <= $mcc; $x++) {
                        $i = $i + 1;
                        $clname = $mz[$ym * 10 - 9 + $i];
                        $cl = $ssl[$ym * 10 - 9 + $i];
                        $xxid = $iid[$ym * 10 - 9 + $i];
                        if ($cl >= 1) {
//cmd及超链接值
                            $cmid = $cmid + 1;
                            $cdid[] = $cmid;
                            $clj[] = 36;
                            $npc[] = $xxid;
                            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>$clname</p></a>" . "<p style='color: blue'>x$cl|</p>";
//cmd及超链接值
                            $cmid = $cmid + 1;
                            $cdid[] = $cmid;
                            $clj[] = 37;
                            $npc[] = $xxid;
                            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>使用</p></a>" . "<br>";
                        }
                    }
                } else {
                    $i = -2;
                    for ($x = 0; $x <= $km - 1; $x++) {
                        $i = $i + 1;
                        $clname = $mz[$ym * 10 - 9 + $i];
                        $cl = $ssl[$ym * 10 - 9 + $i];
                        $xxid = $iid[$ym * 10 - 9 + $i];
                        if ($cl >= 1) {
//cmd及超链接值
                            $cmid = $cmid + 1;
                            $cdid[] = $cmid;
                            $clj[] = 36;
                            $npc[] = $xxid;
                            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>$clname</p></a>" . "<p style='color: blue'>x$cl|</p>";
//cmd及超链接值
                            $cmid = $cmid + 1;
                            $cdid[] = $cmid;
                            $clj[] = 37;
                            $npc[] = $xxid;
                            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>使用</p></a>" . "<br>";
                        }
                    }
                }
            }
            $f = 0;
            if ($ym != 1) {
//cmd及超链接值
                $cmid = $cmid + 1;
                $cdid[] = $cmid;
                $clj[] = 40;
                $npc[] = 0;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>首页</p></a>";
                echo "<p style='color: blue'>|</p></a>";
                $cmid = $cmid + 1;
                $cdid[] = $cmid;
                $clj[] = 39;
                $npc[] = 0;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>上页</p></a>";
                $f = 1;
            }
            $mcc = $km / 10;
            if ($f > 0 && $mcc > $ym) {
                echo "<p style='color: blue'>|</p></a>";
            }
            $mcc = $km / 10;
            if ($mcc > $ym) {
//cmd及超链接值
                $cmid = $cmid + 1;
                $cdid[] = $cmid;
                $clj[] = 38;
                $npc[] = 0;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>下页</p></a>";
                echo "<p style='color: blue'>|</p></a>";
//cmd及超链接值
                $cmid = $cmid + 1;
                $cdid[] = $cmid;
                $clj[] = 41;
                $npc[] = 0;
                echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>末页</p></a>";
                $f = 1;
            }
            if ($f > 0) {
                echo "<br>";
            }
        } else {
            echo "<p style='color: black'>物品错位（联系GM修复）</p>" . "<br>";
        }
    }
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>" . "<br>";
    echo "----------------------" . "<br>";
//cmd及超链接值
    include("fhgame.php");
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
