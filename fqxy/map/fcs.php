<?php
if ($dty == 0) {
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>方寸山门</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map63.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc50.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 201;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山门迎客晨月（传送）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 208;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>老道士（装备打造）</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>方寸山下</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>观景台</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>方寸山门往哪里走呢？</p>" . "<br>";
} elseif ($dty == 1) {
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>小院</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map65.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/fcs1.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>正院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>方寸山门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>厢房</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>练功场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>小院往哪里走呢？</p>" . "<br>";
} elseif ($dty == 2) {
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>正院</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 203;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小天师云阳真人（声望、腾云符）</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>讲经堂</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>后院</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>正院往哪里走呢？</p>" . "<br>";
} elseif ($dty == 3) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>讲经堂</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 204;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>清风道长</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>瑶台</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>正院</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>讲经堂往哪里走呢？</p>" . "<br>";
} elseif ($dty == 4) {
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>瑶台</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map66.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//npc
    include("rwmap/fcs4.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc57.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 206;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青衣道童</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>讲经堂</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>瑶台往哪里走呢？</p>" . "<br>";
} elseif ($dty == 5) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>后院</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>藏经楼</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>厢房</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>正院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>厨房</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>后院往哪里走呢？</p>" . "<br>";
} elseif ($dty == 6) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>厨房</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map67.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc57.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 207;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小厨子晚风</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>后院</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>厨房往哪里走呢？</p>" . "<br>";
} elseif ($dty == 7) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>藏经楼</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>后院</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>藏经楼往哪里走呢？</p>" . "<br>";
} elseif ($dty == 8) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>厢房</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>后院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>练功场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>厢房往哪里走呢？</p>" . "<br>";
} elseif ($dty == 9) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>练功场</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    include("rwmap/fcs9.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>厢房</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>卧室</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>练功房</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>练功场往哪里走呢？</p>" . "<br>";
} elseif ($dty == 10) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>练功房</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    include("rwmap/fcs10.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>练功场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>练功房往哪里走呢？</p>" . "<br>";
} elseif ($dty == 11) {
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>卧室</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>练功场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>卧室往哪里走呢？</p>" . "<br>";
} elseif ($dty == 12) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>厢房</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小院</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>厢房往哪里走呢？</p>" . "<br>";
} elseif ($dty == 13) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>观景台</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 209;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>仙鹿</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>方寸山门</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>这里观看这座仙山，真个是如入梦境</p>" . "<br>";
} elseif ($dty == 14) {
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>方寸山下</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map64.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/fcs14.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>方寸山门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>土路</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>松林</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>方寸山下往哪里走呢？</p>" . "<br>";
} elseif ($dty == 15) {
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>松林</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>松林(4,4)</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山洞</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>方寸山下</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>松林往哪里走呢？</p>" . "<br>";
} elseif ($dty == 16) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>山洞</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山洞</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>松林</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>山洞往哪里走呢？</p>" . "<br>";
} elseif ($dty == 17) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>山洞</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
//npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>山洞</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>山洞往哪里走呢？</p>" . "<br>";
} else {
    echo "错误地图,编号：" . $dty . "<br>";
}
?>