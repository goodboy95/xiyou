<?php
if ($dty == 0) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>十字街头</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/gz/gz05-1.gif';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 5;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【君临天下】（仙）</p></a>";
    if ($tpbl == 1) {
        $img = 'pic/gz/gz05-2.gif';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    echo "<br>";
    if ($tpbl == 1) {
        $img = 'pic/gz/gz05-1.gif';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 26;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【君临天下】（魔）</p></a>";
    if ($tpbl == 1) {
        $img = 'pic/gz/gz05-2.gif';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map1.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/cac0.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc1.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 21;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>张果老(区域传送)</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>长安城的十字街头，真是热闹无比！</p>" . "<br>";
} elseif ($dty == 1) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>玄武大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 3;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【玄武居】（仙）</p></a>" . "<br>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 24;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【玄武居】（魔）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 608;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【巡天神将】（秘宝兑换）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 1081;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>龟仙人（时装兑换）</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/>';
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 637;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>如意传送员(VIP练级区)</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/>';
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 1323;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>〖活动〗点石成金传送员</p></a>" . "<br>";
//出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>十字街头</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>长安乐府</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>回春药铺</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的玄武大街。</p>" . "<br>";
} elseif ($dty == 2) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>玄武大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 6;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【唯我独尊】（仙）</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 27;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【唯我独尊】（魔）</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 1202;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>〖采花〗百花仙子</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 1077;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>〖世界〗BOSS狩猎员</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 535;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>钱老板（银两转换）</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>天监台</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>国子监</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的玄武大街</p>" . "<br>";
} elseif ($dty == 3) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>玄武大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 17;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【飘渺阁】（仙）</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 38;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【飘渺阁】（魔）</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>封榜堂</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>长安北门</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的玄武大街</p>" . "<br>";
} elseif ($dty == 4) {
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>玄武门</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 27;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【上古超级神兽】</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 28;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金甲侍卫</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 28;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金甲侍卫</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 28;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金甲侍卫</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朝阳门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>长安武馆</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>禁卫营</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>玄武门是大唐皇宫的入口，守卫森严！</p>" . "<br>";
} elseif ($dty == 5) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>朝阳门</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./ini/zt_ini.php");
    $wjddj = ($iniFile->getItem('玩家信息', '等级'));
    if ($wjddj <= 159) {
        $bossid = 8;
        $bossmz = "【上古神兽☯玄武】（世界boss）";
        $vipqytime = 36000;//多少时间更新10小时
        include("./wj/bossmb.php");//调用boss
    } else {
        echo "<p style='color: red'>【上古神兽☯玄武】（世界boss）160以下参与</p>" . "<br>";
    }
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 20;
    $npc[] = 58;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入【皇宫】</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 30;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金甲卫士</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 30;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金甲卫士</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 30;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金甲卫士</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>英雄大厅</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>活动大厅</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>玄武门是大唐皇宫的入口，守卫森严！</p>" . "<br>";
} elseif ($dty == 6) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>朱雀大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map6.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 2;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【朱雀居】（仙）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 23;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【朱雀居】（魔）</p></a>" . "<br>";
    include("rwmap/cac6.php");
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 560;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>天蓬元帅（神仙果兑换）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 421;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【星符碎片祝融台】</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 486;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【宠物颜色练星符】</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 517;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【镶嵌宝石升级】</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 530;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【〖圣灵锻造图纸〗升级为〖噬魂锻造图纸〗】</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>十字街头</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宠物店</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南城客栈</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的朱雀大街</p>" . "<br>";
} elseif ($dty == 7) {
    //地名
//最小值
    $a4 = $dcid + 1;
//cmd及超链接值
    $cmid = $dcid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>朱雀大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 7;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【雄霸天下】（仙）</p></a>" . "<br>";
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 28;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【雄霸天下】（魔）</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map11.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac7.php");
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 35;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>通天仙官</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>董记当铺(仓库)</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>裁缝店</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的朱雀大街</p>" . "<br>";
} elseif ($dty == 8) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>朱雀大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 18;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【醉心阁】（仙）</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 39;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【醉心阁】（魔）</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map11.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/cac8.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc10.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 37;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>水果贩子</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南城门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的朱雀大街</p>" . "<br>";
} elseif ($dty == 9) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>南城门</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./ini/zt_ini.php");
    $wjddj = ($iniFile->getItem('玩家信息', '等级'));
    if ($wjddj <= 159) {
        $bossid = 7;
        $bossmz = "【上古神兽☯朱雀】（世界boss）";
        $vipqytime = 21600;//多少时间更新boss6小时
        include("./wj/bossmb.php");//调用boss
    } else {
        echo "<p style='color: red'>【上古神兽☯朱雀】（世界boss）160以下参与</p>" . "<br>";
    }
    //npc
    include("rwmap/cac9.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc11.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 38;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>守城士兵</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc11.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 38;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>守城士兵</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>官道</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>泾水滨</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这是长安南门。有威武的将士镇守，出入需小心。</p>" . "<br>";
} elseif ($dty == 10) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>白虎大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    /////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 4;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【白虎居】（仙）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 25;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【白虎居】（魔）</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 921;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>〖活动〗金银山山神（永久开放）</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 1210;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>〖日常〗伏羲仙人（福满阵）</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 732;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大唐国师（经验奖励）</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 733;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>女儿国国师（银两奖励）</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 734;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宝象国国师（材料奖励）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 40;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>幸运大使</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>三联书店</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>相记银庄</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>十字街头</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的白虎大街</p>" . "<br>";
} elseif ($dty == 11) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>白虎大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    //npc
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 8;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【盖世英雄】（仙）</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 29;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【盖世英雄】（魔）</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map46.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/cac11.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>长安官府</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>总管府</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的白虎大街</p>" . "<br>";
} elseif ($dty == 12) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>白虎大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map44.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 19;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【凌烟阁】（仙）</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 40;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【凌烟阁】（魔）</p></a>" . "<br>";
    include("rwmap/cac12.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>喜福会</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>化生寺</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的白虎大街</p>" . "<br>";
} elseif ($dty == 13) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>白虎大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    /////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 42;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【天然居】</p></a>" . "<br>";
    include("rwmap/cac13.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>歪柳巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>长安西门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的白虎大街。</p>" . "<br>";
} elseif ($dty == 14) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>长安西门</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map40.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    $bossid = 10;
    $bossmz = "【上古神兽☯白虎】（世界boss）";
    $vipqytime = 90000;//多少时间更新boss1天1小时
    include("./wj/bossmb.php");//调用boss
    //npc
    include("rwmap/cac14.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc18.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 38;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>守城士兵</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc18.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 38;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>守城士兵</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金城郡南</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这是长安南门。有威武的将士镇守，出入需小心。</p>" . "<br>";
} elseif ($dty == 15) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>青龙大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    /////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 1;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【青龙居】（仙）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 22;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【青龙居】（魔）</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 449;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>魔珠打包服务</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 303;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【一键】宝石升级合成</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 482;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【一键】宝石熔炼西游声望</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 483;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【一键】区域师门卷轴熔炼西游声望</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 529;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【一键】铜魂——陨魂，熔炼西游声望</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 532;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【一键】熔炼〖财宝箱〗〖大财宝箱〗</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 317;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【一键】副本材料兑换西游声望</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 647;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【一键】各类修炼丹兑换修炼经验</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 43;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>游侠儿</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>杂货行(拍卖)</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>兵器铺</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>十字街头</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
//地点描述
    echo "<p style='color: black'>宽阔的青龙大街</p>" . "<br>";
} elseif ($dty == 16) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>青龙大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 9;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【绝世枭雄】（仙）</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 30;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【绝世枭雄】（魔）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 45;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>神算子</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>清虚观</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军府</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的青龙大街</p>" . "<br>";
} elseif ($dty == 17) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>青龙大街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map17.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 20;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【藏龙阁】（仙）</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 41;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【藏龙阁】（魔）</p></a>" . "<br>";
    include("rwmap/cac17.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc16.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 43;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>游侠儿</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东营房</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的青龙大街</p>" . "<br>";
} elseif ($dty == 18) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>东城门</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    include("./mb/mbbtime.php");//秘宝活动开启时间
    if ($hdtime == 2) {
        $mbid = "mb_" . $dty . "x" . $dty;//必改值	
        $mbflie = "mb" . $mbid;
        include("./mb/mbtime.php");
        if ($mbxs == 2) {
//天降密宝
            $cmid = $cmid + 1;
            $cdid[] = $cmid;
            $clj[] = 607;
            $npc[] = $mbid;
            echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【天降秘宝】（活动）</p></a>" . "<br>";
        }
    }
/////////////////////////////////////////////////天降秘宝活动////////////////////////////////
    //npc
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 16;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【至尊神殿】（仙）</p></a><br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 342;
    $npc[] = 37;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【至尊神殿】（魔）</p></a><br>";
    $bossid = 9;
    $bossmz = "【上古神兽☯青龙】（世界boss）";
    $vipqytime = 54000;//多少时间更新boss15小时
    include("./wj/bossmb.php");//调用boss
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc18.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 38;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>守城士兵</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc18.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 38;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>守城士兵</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
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
    echo "<p style='color: black'>这是长安东门。有威武的将士镇守，出入需小心</p>" . "<br>";
} elseif ($dty == 19) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>长安乐府</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map2.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 47;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【九天居】</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc3.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 48;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>公孙大娘(改名字,性别,门派)</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc3.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 49;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>剧场负责人</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>幻想大剧场</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>长安赌坊</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里是长安的贵族富豪经常光临的场所。</p>" . "<br>";
} elseif ($dty == 20) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>长安赌坊</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 50;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>千金赌场</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>长安乐府</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里是长安的赌坊</p>" . "<br>";
} elseif ($dty == 21) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>幻想大剧场</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 51;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大剧场看西游大笑话</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>长安乐府</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //查看地图
    echo "<a href='../template/index.php'><p style='color: blue'>查看地图（0）</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里是长安的贵族富豪经常光临的场所。</p>" . "<br>";
} elseif ($dty == 22) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>回春药铺</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map12.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 52;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>打包保命丸</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 53;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>保命丸升级</p></a>" . "<br>";
    include("rwmap/cac22.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里是长安最好的药铺</p>" . "<br>";
} elseif ($dty == 23) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>天监台</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map4.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 55;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>召唤怪物分身</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 56;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>召唤神仙下凡</p></a>" . "<br>";
    //本地点1号npc  $nbsp是npc编号npc是当前地点顺序
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 57;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>斗神台</p></a>" . "<br>";
    include("rwmap/cac23.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里便是长安城钦天监台，朝廷每年的祭天仪式都在这里举行</p>" . "<br>";
} elseif ($dty == 24) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>国子监</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 59;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【烟雨楼】</p></a>" . "<br>";
    include("rwmap/cac24.php");
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 60;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大学士贺知章</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这个地方就是大唐国子监的书院了</p>" . "<br>";
} elseif ($dty == 25) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>封榜堂</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map5.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 213;
    $npc[] = 1;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>10金豆换〖玄铁令〗</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc5.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 62;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大宰相.房玄龄(国战管理)</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里是长安的封榜堂</p>" . "<br>";
} elseif ($dty == 26) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>长安北门</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 63;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【飞仙居】</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>桂花树(往月宫)</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>宽阔的玄武北门</p>" . "<br>";
} elseif ($dty == 27) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>长安武馆</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map3.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 64;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>武状元选拔大赛活动</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 28;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金甲侍卫</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 10;
    $npc[] = 737;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【测试人偶】</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武门</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>玄武门旁边的武馆听说是朝廷开来选拔人才所用，守卫森严</p>" . "<br>";
} elseif ($dty == 28) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>禁卫营</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 65;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>御林军校尉</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 65;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>御林军校尉</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 65;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>御林军校尉</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玄武门</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里是长安的禁卫营</p>" . "<br>";
} elseif ($dty == 29) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>英雄大厅</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    /*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=66;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>30金豆兑换〖共工护符〗</p></a>"."<br>";
*/
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 312;
    $npc[] = 2;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>1金豆兑换【英雄牌】x10</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 312;
    $npc[] = 64;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>10金豆兑换【英雄牌】x100</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 312;
    $npc[] = 65;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>1金豆兑换〖宝盒钥匙〗x1</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 312;
    $npc[] = 66;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>10金豆兑换〖宝盒钥匙〗x10</p></a>" . "<br>";
    echo "<p style='color: black'>------------------</p>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 312;
    $npc[] = 1;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【英雄牌】x10兑换〖万能钥匙〗x1</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 312;
    $npc[] = 63;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【英雄牌】x100兑换〖万能钥匙〗x10</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 312;
    $npc[] = 245;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【英雄牌】x100兑换〖云梯石〗x1</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 312;
    $npc[] = 246;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【英雄牌】x1000兑换〖云梯石〗x10</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 312;
    $npc[] = 67;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>5000万银两兑换〖宝盒钥匙〗x1</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 312;
    $npc[] = 68;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>5亿银两兑换〖宝盒钥匙〗x10</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朝阳门</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里是长安的英雄大厅</p>" . "<br>";
} elseif ($dty == 30) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>活动大厅</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 640;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>神仙姐姐(vip玩家每日福利特权)</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 68;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【许愿池】</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 488;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【许愿奖励兑换】</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朝阳门</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>各种活动在这里进行！</p>" . "<br>";
} elseif ($dty == 31) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>皇宫广场</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 20;
    $npc[] = 59;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入【长安城】</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金銮殿</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金豆大厅</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>皇族花园</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>国家大厅</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>威严大气的皇宫广场，通往皇宫各处！</p>" . "<br>";
} elseif ($dty == 32) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>金銮殿</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 71;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>李世民</p></a>" . "<br>";
    include("./rwmap/hg32.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>皇宫广场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>威严大气的皇宫广场，通往皇宫各处！</p>" . "<br>";
} elseif ($dty == 33) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>金豆大厅</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 72;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【金豆商城】</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>皇宫广场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>人来人往拿着金豆兑换各种宝贝！</p>" . "<br>";
} elseif ($dty == 34) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>皇族花园</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 73;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【君临天下】</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>皇宫广场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>最漂亮的皇族花园</p>" . "<br>";
} elseif ($dty == 35) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>国家大厅</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    $img = 'pic/ts/ts1.png';
    echo '<img src="' . $img . ' "alt="图片"/〉';
    echo "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 74;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大唐国师（国家任务）</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>皇宫广场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>玩家攻占某个小城之后才能在这儿行驶国家权力</p>" . "<br>";
} elseif ($dty == 36) {
    //地名
//最小值
    $a4 = $dcid + 1;
//cmd及超链接值
    $cmid = $dcid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>三联书店</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map54.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc6.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 75;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>孔方兄（书符）</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>长安的三联书店</p>" . "<br>";
} elseif ($dty == 37) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>相记银庄</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 260;
    $npc[] = 0;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>存取物品</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 77;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>钱庄掌柜·铁算盘</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>长安老字号相记银庄</p>" . "<br>";
} elseif ($dty == 38) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>总管府</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc38.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 78;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大管家李丁</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>客厅</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>长安的总管府</p>" . "<br>";
} elseif ($dty == 39) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>客厅</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map49.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 79;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>殷夫人</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>总管府</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>后院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宴厅</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>客厅往哪里走呢？</p>" . "<br>";
} elseif ($dty == 40) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>后院</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map50.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>客厅</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>花园</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>阁楼</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>总管府后院</p>" . "<br>";
} elseif ($dty == 41) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>花园</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map51.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>后院</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>一个大花园，种了许多叫不出名字的</p>" . "<br>";
} elseif ($dty == 42) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>宴厅</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map53.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>客厅</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>总管府的宴客厅！</p>" . "<br>";
} elseif ($dty == 43) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>阁楼</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map52.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    //出口
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
    echo "<p style='color: black'>一座漂亮的小阁楼，紧靠花园，十分安静！</p>" . "<br>";
} elseif ($dty == 44) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>长安官府</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map47.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc42.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 80;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>官府告示</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc43.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 81;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>衙役</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>衙门公堂</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>天牢</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>长安官府往哪里走呢？</p>" . "<br>";
} elseif ($dty == 45) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>衙门公堂</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map48.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac45.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>长安官府</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这是衙门的公堂，是太守升堂审案的地方</p>" . "<br>";
} elseif ($dty == 46) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>天牢</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 82;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>牢头</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>天牢</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>天牢往哪里走呢？</p>" . "<br>";
} elseif ($dty == 47) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>天牢</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    include("./ini/tltime_ini.php");
    $hdtime = ($iniFile->getItem('天牢时间', '初始'));
    $vipqytime = 300;//系统消息存活秒数30分钟
    if ($hdtime) {
        $startdate = $hdtime;
        $enddate = date('Y-m-d H:i:s');
        $minute = floor((strtotime($enddate) - strtotime($startdate)));
        if ($minute <= $vipqytime) {
            $minute1 = $vipqytime - $minute;
            $minute = floor($minute1 / 60);
            $second = $minute1 % 60;
            if ($minute > 0) {
                echo "<p style='color: red'>【善果】剩余：" . $minute . "分" . $second . "秒</p>" . "<br>";
            } else {
                echo "<p style='color: red'>【善果】剩余：" . $second . "秒</p>" . "<br>";
            }
            $vipqy = 2;
        } else {
            $vipqy = 1;
        }
    } else {
        $vipqy = 1;
    }
    if ($vipqy == 1) {
        echo "<p style='color: red'>恭喜你！！【善果】已经成熟了~~~</p>";
//cmd及超链接值
        $cmid = $cmid + 1;
        $cdid[] = $cmid;
        $clj[] = 312;
        $npc[] = 147;//需要改动
        echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: red'>【摘取】</p></a>" . "<br>";
    }
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>天牢</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>天牢往哪里走呢？</p>" . "<br>";
} elseif ($dty == 48) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>喜福会</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map45.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac48.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc8.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 83;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>店小二</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>喜福会二楼</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>喜福会往哪里走呢？</p>" . "<br>";
} elseif ($dty == 49) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>喜福会二楼</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    include("rwmap/cac49.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>喜福会</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>喜福会二楼往哪里走呢？</p>" . "<br>";
} elseif ($dty == 50) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>化生寺</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 85;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>还愿!（开PK）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 86;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>上香!（关PK）</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 87;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大和尚</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 88;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>游方僧人</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 89;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>法明长老(副本)</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>化生寺往哪里走呢？</p>" . "<br>";
} elseif ($dty == 51) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>歪柳巷</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map34.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc31.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 90;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>卖糖人（药品）</p></a>" . "<br>";
    include("rwmap/cac51.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc33.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 92;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小女孩</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>歪柳巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>包子铺</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>鼓楼</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>歪柳巷往哪里走呢？</p>" . "<br>";
} elseif ($dty == 52) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>歪柳巷</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map35.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/cac52.php");
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc34.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 93;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>江湖艺人</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc35.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 94;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>香客</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>城隍庙</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>歪柳巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>袁氏草堂</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>古董店</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>歪柳巷往哪里走呢？</p>" . "<br>";
} elseif ($dty == 53) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>城隍庙</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map36.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac53.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc4.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 95;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进香客</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc35.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 96;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>许愿女</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc10.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 97;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>庙祝</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>歪柳巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>城隍庙往哪里走呢？</p>" . "<br>";
} elseif ($dty == 54) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>袁氏草堂</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map37.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc36.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 98;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>袁守诚</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc37.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 99;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白衣秀士</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>歪柳巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>袁氏草堂往哪里走呢？</p>" . "<br>";
} elseif ($dty == 55) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>古董店</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 100;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>古董老板</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>歪柳巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>古董店往哪里走呢？</p>" . "<br>";
} elseif ($dty == 56) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>包子铺</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map38.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc38.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 101;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>贾二</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>歪柳巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>包子铺往哪里走呢？</p>" . "<br>";
} elseif ($dty == 57) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>鼓楼</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map39.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/cac57.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc39.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 102;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大鼓</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>歪柳巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>鼓楼往哪里走呢？</p>" . "<br>";
} elseif ($dty == 58) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>背阴巷</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map32.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac58.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc28.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 103;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小流氓</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc29.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 104;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>穷汉</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白虎大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小酒馆</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>民居</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷往哪里走呢？</p>" . "<br>";
} elseif ($dty == 59) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>背阴巷</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map29.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/cac59.php");
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc26.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 106;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>瘦老头</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc27.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 105;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>黑狗</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>三花堂</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>杂货铺</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷往哪里走呢？</p>" . "<br>";
} elseif ($dty == 60) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>背阴巷</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map28.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac60.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc25.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  ////////////////////////// 
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 107;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>花母鸡</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>粮店</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>民居</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷往哪里走呢？</p>" . "<br>";
} elseif ($dty == 61) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>背阴巷</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    include("rwmap/cac61.php");
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 108;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大公鸡</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>民居</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷往哪里走呢？</p>" . "<br>";
} elseif ($dty == 62) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>民居</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 109;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>中年妇女</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷的一间民居</p>" . "<br>";
} elseif ($dty == 63) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>粮店</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 110;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>丰永贵</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷的一间小粮店</p>" . "<br>";
} elseif ($dty == 64) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>民居</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 109;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>中年妇女</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷的一间民居</p>" . "<br>";
} elseif ($dty == 65) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>三花堂</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map30.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 111;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>打手</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 111;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>打手</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 111;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>打手</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 112;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>二堂主</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷的黑帮</p>" . "<br>";
} elseif ($dty == 66) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>杂货铺</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map31.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc6.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 113;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>老板魏录齐</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷的一间小杂货铺</p>" . "<br>";
} elseif ($dty == 67) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>小酒馆</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map33.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    //本地点1号npc  $nbsp是npc编号npc是当前地点顺序
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc8.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 114;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>王小二</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc30.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 115;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>苦力</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷的一间小酒馆</p>" . "<br>";
} elseif ($dty == 68) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>民居</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 116;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>李玉娘</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 117;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>姑娘</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背阴巷</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>背阴巷的一间民居</p>" . "<br>";
} elseif ($dty == 69) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>杂货行(拍卖)</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 118;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>货行老板戴文重</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里每天都有很多人来人往</p>" . "<br>";
} elseif ($dty == 70) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>兵器铺</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map14.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc13.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 119;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>老板娘萧晓</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这是长安城里的兵器铺。</p>" . "<br>";
} elseif ($dty == 71) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>清虚观</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map18.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac71.php");
    include("rwmap/cac71_1.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>清虚观是长安城里的道观，大唐时不仅佛法盛行，道家也深受净重</p>" . "<br>";
} elseif ($dty == 72) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>将军府</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 121;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>秦平</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 123;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>白发老人（装备打造）</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军府前院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军堂</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>练兵场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>气势巍峨的将军府，是当朝大将军秦琼的府邸</p>" . "<br>";
} elseif ($dty == 73) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>将军府前院</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军府</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>后院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>结义堂</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>秦府正厅</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>气势巍峨将军府的前院</p>" . "<br>";
} elseif ($dty == 74) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>后院</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 122;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>秦琼</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军府前院</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>凉亭</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>后院并不大</p>" . "<br>";
} elseif ($dty == 75) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>凉亭</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //出口
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
    echo "<p style='color: black'>一个精美的凉亭</p>" . "<br>";
} elseif ($dty == 76) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>结义堂</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 124;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>罗成(拜师)</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军府前院</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>众将的义气而设立的大堂</p>" . "<br>";
} elseif ($dty == 77) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>秦府正厅</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 122;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>秦琼</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军府前院</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>王府的正厅</p>" . "<br>";
} elseif ($dty == 78) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>将军堂</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 125;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>程咬金</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军府</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里是秦府众将军议事之所</p>" . "<br>";
} elseif ($dty == 79) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>练兵场</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 126;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>尉迟恭</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军府</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>马棚</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>秦王府势力强大，有专门的练兵场</p>" . "<br>";
} elseif ($dty == 80) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>马棚</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 127;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>枣红马</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 128;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>乌青马</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 129;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>伊犁马</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 130;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>汗血宝马</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>练兵场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>秦府的马棚，偶尔能看到名贵的品种</p>" . "<br>";
} elseif ($dty == 81) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>东营房</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 125;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>程咬金</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>马场</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>长安城里的兵营</p>" . "<br>";
} elseif ($dty == 82) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>马场</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map19.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc18.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 131;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>马官</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc19.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 127;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>枣红马</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc20.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 128;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>乌青马</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc21.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 129;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>伊犁马</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东营房</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>马场里面宽大，马棚里养着良种骏马</p>" . "<br>";
} elseif ($dty == 83) {
    //地名
    //最小值
    $a4 = $dcid + 1;
//cmd及超链接值
    $cmid = $dcid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>望南街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map25.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac83.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙镖局</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>始皇陵</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>望南街往哪里走？</p>" . "<br>";
} elseif ($dty == 84) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>望南街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map20.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>碑林</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进士场</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>望南街往哪里走？</p>" . "<br>";
} elseif ($dty == 85) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>望南街</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map21.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac85.php");
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 132;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>背水客</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>慈恩寺</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>曲江池</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>望南街也是长安的重要街道</p>" . "<br>";
} elseif ($dty == 86) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>慈恩寺</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 133;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>僧人</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 134;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>慈恩法师(门派转换)</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小雁塔</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大雁塔</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这就是著名的慈恩寺，高大的寺门挺立，门两旁还立了两个大石狮子</p>" . "<br>";
} elseif ($dty == 87) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>曲江池</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 135;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>洗衣少女</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 135;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>洗衣少女</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 136;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>赏花公子</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>仙泉</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>曲江池终年都有着清澈干净的泉水，这要归功于东边的仙泉</p>" . "<br>";
} elseif ($dty == 88) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>仙泉</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map26.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/cac88.php");
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc24.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 137;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>守泉仙女</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 138;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>仙童</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>曲江池</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>据说这仙泉里的水喝了可以强身健体，十分有益</p>" . "<br>";
} elseif ($dty == 89) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>碑林</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 139;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>石碑</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 140;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>石碑</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>碑林(1,1)</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里有王羲之，颜真卿，柳公泉，欧阳询，诸遂良所书的碑刻</p>" . "<br>";
} elseif ($dty == 90) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>青龙镖局</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map15.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc14.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 141;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>林镖头</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>振远镖局</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里的人都是忙忙碌碌的，有很多镖车等着出发</p>" . "<br>";
} elseif ($dty == 91) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>振远镖局</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map15.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/cac91.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青龙镖局</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>振远镖局往哪里走呢？</p>" . "<br>";
} elseif ($dty == 92) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>始皇陵</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map23.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>兵马俑坑</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这是座落在官道以东的一个大丘陵</p>" . "<br>";
} elseif ($dty == 93) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>兵马俑坑</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map24.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac93.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>始皇陵</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>兵马佣(1,1)</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>兵马俑的入口</p>" . "<br>";
} elseif ($dty == 94) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>进士场</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map22.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc22.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 144;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>钱秀才</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>望南街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>据说新科进士在受赐之后都要在进士场题名刻碑</p>" . "<br>";
} elseif ($dty == 95) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>宠物店</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 145;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宠物店老板</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>长安城里贵妇人多，所以这宠物店的生意也好得很</p>" . "<br>";
} elseif ($dty == 96) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>南城客栈</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map9.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    include("./rwmap/cac96.php");
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南厢房</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>客栈睡房</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>长安街城里最大的南城客栈，客人熙熙攘攘</p>" . "<br>";
} elseif ($dty == 97) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>南厢房</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南城客栈</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这是南城客栈的南厢房</p>" . "<br>";
} elseif ($dty == 98) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>客栈睡房</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map10.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //npc
    include("rwmap/cac98.php");
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 147;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>租房休息</p></a>" . "<br>";
    //出口
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南城客栈</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这是南城客栈的客栈睡房</p>" . "<br>";
} elseif ($dty == 99) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>董记当铺(仓库)</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map7.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 148;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>存取物品</p></a>" . "<br>";
    include("rwmap/cac99.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>当铺货场</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>董记当铺的老板是个老奸巨滑的家伙</p>" . "<br>";
} elseif ($dty == 100) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>当铺货场</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map8.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/npc/npc7.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 150;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大老鼠</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>董记当铺(仓库)</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这里堆了不少货物，有不少老鼠跑来跑去</p>" . "<br>";
} elseif ($dty == 101) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>裁缝店</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 151;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>裁缝店老板</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>朱雀大街</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>这是家百年老字号的裁缝店</p>" . "<br>";
} elseif ($dty == 102) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>金城郡南</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map41.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    include("rwmap/cac102.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>昆仑山区</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>酒泉</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>土路</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>长安西门</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>金城郡是西北地区的重要城镇</p>" . "<br>";
} elseif ($dty == 103) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>昆仑山区</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map42.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>昆仑山区</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金城郡南</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>昆仑山区往哪里走呢？</p>" . "<br>";
} elseif ($dty == 104) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>昆仑山区</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map42.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 20;
    $npc[] = 62;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>雪山迷宫入口</p></a>" . "<br>";
    include("rwmap/cac104.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>玉女峰</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>昆仑山区</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>昆仑山麓</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>岸边</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>昆仑山区往哪里走呢？</p>" . "<br>";
} elseif ($dty == 105) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>昆仑山麓</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 20;
    $npc[] = 106;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>冰风谷入口</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>昆仑山区</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>昆仑山麓往哪里走呢？</p>" . "<br>";
} elseif ($dty == 106) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>岸边</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 154;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>巨角犀怪</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>昆仑山区</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>铁索桥</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>岩浆河的岸边，景色变得怪异起来</p>" . "<br>";
} elseif ($dty == 107) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>铁索桥</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 155;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入火焰山洞</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>岸边</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>山洞连接火山底的岩浆池,炙热无比</p>" . "<br>";
} elseif ($dty == 108) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>酒泉</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金城郡南</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>嘉峪关</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>饮马峪</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>酒泉往哪里走呢？</p>" . "<br>";
} elseif ($dty == 109) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>嘉峪关</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 156;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入【双叉岭】</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>茶馆</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>酒泉</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>嘉峪关往哪里走呢？</p>" . "<br>";
} elseif ($dty == 110) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>茶馆</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map43.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>嘉峪关</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>一间小茶馆，路途歇脚的一个好地方</p>" . "<br>";
} elseif ($dty == 111) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>饮马峪</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    include("rwmap/cac111.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>酒泉</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>饮马峪往哪里走呢？</p>" . "<br>";
} elseif ($dty == 112) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>土路</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>西瓜田</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>土路</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>金城郡南</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>人来人往的官道</p>" . "<br>";
} elseif ($dty == 113) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>土路</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>方寸山下</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>村口</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>土路</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>人来人往的官道</p>" . "<br>";
} elseif ($dty == 114) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>村口</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    include("rwmap/cac114.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>农舍</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>高家大门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>土路</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>人来人往的高家庄村口</p>" . "<br>";
} elseif ($dty == 115) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>农舍</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    include("rwmap/cac115.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>村口</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>一间宽敞的农舍，打扫的干干净净</p>" . "<br>";
} elseif ($dty == 116) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>泾水滨</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map13.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 20;
    $npc[] = 66;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>潜入泾水河底</p></a>" . "<br>";
    include("rwmap/cac116.php");
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南城门</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>泾水滨人来人往,都是来参加龙舟大赛的</p>" . "<br>";
} elseif ($dty == 117) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>官道</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南城门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南海之滨</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>城南荒野</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>升仙村口</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>人来人往的官道</p>" . "<br>";
} elseif ($dty == 118) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>南海之滨</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 153;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>渡船(往普陀山)</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 159;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>渡船(往灵异岛)</p></a>" . "<br>";
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
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>沙滩</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>沙滩</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>南海的边上，传说渡船就可以去南海了</p>" . "<br>";
} elseif ($dty == 119) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>沙滩</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南海之滨</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>南海边的沙滩</p>" . "<br>";
} elseif ($dty == 120) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>沙滩</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南海之滨</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>南海边的沙滩</p>" . "<br>";
} elseif ($dty == 121) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>升仙村口</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
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
    echo "<p style='color: black'>升仙村口往哪里走呢？</p>" . "<br>";
} elseif ($dty == 122) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>城南荒野</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 20;
    $npc[] = 60;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>城南荒野(区域)</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>孤坟堆</p></a>" . "<br>";
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
    echo "<p style='color: black'>城南荒野往哪里走呢？</p>" . "<br>";
} elseif ($dty == 123) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>孤坟堆</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 156;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>棺材</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>城南荒野</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>孤坟堆往哪里走呢？</p>" . "<br>";
} elseif ($dty == 124) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>官道</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东郊皇陵入口</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>官道</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东城门</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>修罗地狱入口</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>人来人往的官道</p>" . "<br>";
} elseif ($dty == 125) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>修罗地狱入口</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 162;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>进入修罗地狱</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 164;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>盗墓者</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 165;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>士兵魂</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 166;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军魂</p></a>" . "<br>";
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
    echo "<p style='color: black'>修罗地狱入口的入口</p>" . "<br>";
} elseif ($dty == 126) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>东郊皇陵入口</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 167;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>守灵老人</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 165;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>士兵魂</p></a>" . "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 166;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>将军魂</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 4;
    $npc[] = 0;
    echo "<p style='color: black'>下:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>官道</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东郊皇陵一(1,1)</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>东郊皇陵共9层，从东郊皇陵一(6,6)可以到东郊皇陵二，依此类推</p>" . "<br>";
} elseif ($dty == 127) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>官道</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>官道</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青石路</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>人来人往的官道</p>" . "<br>";
} elseif ($dty == 128) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>青石路</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 168;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东海渔村</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>傲来官道</p></a>" . "<br>";
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
    echo "<p style='color: black'>青石路往哪里走呢</p>" . "<br>";
} elseif ($dty == 129) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>大雁塔</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    //npc
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map27.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    include("rwmap/cac129.php");
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 133;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>僧人</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 5;
    $npc[] = 0;
    echo "<p style='color: black'>左:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>慈恩寺</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大雁塔</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>有名的大雁塔</p>" . "<br>";
} elseif ($dty == 130) {
    //地名
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<p style='color: black'>小雁塔</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>" . "<br>";
    ///////////////////////////////////////插入图片 /////////////////////////////
    if ($tpbl == 1) {
        $img = 'pic/mapx/map27.png';
        echo '<img src="' . $img . ' "alt="图片"/〉';
        echo "<br>";
        echo "<br>";
        echo "<br>";
    }
    //////////////////////////////////////插入图片  //////////////////////////
    //npc
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 7;
    $npc[] = 133;//需要改动
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>僧人</p></a>" . "<br>";
    echo "<p style='color: black'>请选择出口</p>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 3;
    $npc[] = 0;
    echo "<p style='color: black'>上:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>慈恩寺</p></a>" . "<br>";
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 6;
    $npc[] = 0;
    echo "<p style='color: black'>右:</p>" . "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小雁塔</p></a>" . "<br>";
//查看地图
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 8;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>" . "<br>";
    //地点描述
    echo "<p style='color: black'>有名的小雁塔</p>" . "<br>";
} else {
    echo "错误地图,编号：" . $dty . "<br>";
}
