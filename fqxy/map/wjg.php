<?php
if ($dty == 0) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>官道</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 308;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>驿站驿官（传送）</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山脚</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宝林寺</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>桃林</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>官道往哪里走呢？</p>" . "<br>";
} elseif ($dty == 1) {
    //地名
    $a4 = $dcid + 1;
//cmd及超链接值
    $cmid = $dcid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>山脚</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山坡</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>官道</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>民居</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>平顶山</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>山脚往哪里走呢？</p>" . "<br>";
} elseif ($dty == 2) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>山坡</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>关口</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山脚</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>山坡往哪里走呢？</p>" . "<br>";
} elseif ($dty == 3) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>关口</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 314;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>边关守卫</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山坡</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山道</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>关口往哪里走呢？</p>" . "<br>";
} elseif ($dty == 4) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>山道</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山道</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>关口</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>山道往哪里走呢？</p>" . "<br>";
} elseif ($dty == 5) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>山道</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>夹欲关</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山道</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>乌林子</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>山道往哪里走呢？</p>" . "<br>";
} elseif ($dty == 6) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>夹欲关</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc夹欲关
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>夹脊关</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山道</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>土地庙</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>夹欲关往哪里走呢？</p>" . "<br>";
} elseif ($dty == 7) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>夹脊关</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 20;
    $npc[] = 100;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入车迟国</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>夹欲关</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>夹脊关往哪里走呢？</p>" . "<br>";
} elseif ($dty == 8) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>土地庙</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>土地庙后院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>乌林子</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>夹欲关</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>黑龙殿</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>土地庙往哪里走呢？</p>" . "<br>";
} elseif ($dty == 9) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>土地庙后院</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>土地庙</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>土地庙后院往哪里走呢？</p>" . "<br>";
} elseif ($dty == 10) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>黑龙殿</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>土地庙</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>黑龙殿往哪里走呢？</p>" . "<br>";
} elseif ($dty == 11) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>乌林子</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>土地庙</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山道</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>压龙山</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>乌林子往哪里走呢？</p>" . "<br>";
} elseif ($dty == 12) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>压龙山</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 20;
    $npc[] = 102;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入【压龙山】</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>乌林子</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>压龙山往哪里走呢？</p>" . "<br>";
} elseif ($dty == 13) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>民居</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山脚</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>民居往哪里走呢？</p>" . "<br>";
} elseif ($dty == 14) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>平顶山</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 20;
    $npc[] = 98;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入【平顶山】</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山脚</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>平顶山往哪里走呢？</p>" . "<br>";
} elseif ($dty == 15) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>桃林</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 20;
    $npc[] = 104;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入【桃林】</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>官道</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>桃林往哪里走呢？</p>" . "<br>";
} elseif ($dty == 16) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>宝林寺</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>官道</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宝殿</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宝林寺往哪里走呢？</p>" . "<br>";
} elseif ($dty == 17) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>宝殿</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宝林寺</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>禅院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>西厢房</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东厢房</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宝殿往哪里走呢？</p>" . "<br>";
} elseif ($dty == 18) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>禅院</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宝殿</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>禅院往哪里走呢？</p>" . "<br>";
} elseif ($dty == 19) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>东厢房</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宝殿</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>东厢房往哪里走呢？</p>" . "<br>";
} elseif ($dty == 20) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>西厢房</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宝殿</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>西厢房往哪里走呢？</p>" . "<br>";
} elseif ($dty == 21) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>东门</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>坤元街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>官道</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>东门往哪里走呢？</p>" . "<br>";
} elseif ($dty == 22) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>坤元街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 313;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>乌鸡国国王</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东门</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>坤元街往哪里走呢？</p>" . "<br>";
} else {
    echo "错误地图,编号：" . $dty . "<br>";
}
