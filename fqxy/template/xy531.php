<?php
//阻塞代码防止出现脏数据
$ininalock = $wjid . "_lock" . ".txt";
include("./ini/zsini.php");
if ($zsspd == 1) {
    if ($npcc == 1) {
        $npcc11 = $npcc;//存值
//提供需要扣除的物品作为判读依据
        $wpdz1[] = "〖圣灵锻造图纸〗";//名字
        $wpdz2[] = 2;//物品分类
        $wpdz3[] = 577;//物品id
        $wpdz4[] = 5;//	需要扣除的量
        $wpdz5[] = 1;//	重量
        $wpdz1[] = "银两";//名字
        $wpdz2[] = 0;//物品分类
        $wpdz3[] = 0;//物品id
        $wpdz4[] = 100000000;//	需要扣除的量
        $wpdz5[] = 0;//	重量
        $wpdz1[] = "〖金豆〗";//名字
        $wpdz2[] = 4;//物品分类
        $wpdz3[] = 127;//物品id
        $wpdz4[] = 2;//	需要扣除的量
        $wpdz5[] = 1;//	重量
//提供需要扣除的物品作为判读依据
        include("./pz/ini_pzz026.php");
        $npcc = $npcc11;//返还存值
        if ($pd == 2) {
            $manzu1 = "";
            //物品加
            $wpdz1[] = "〖噬魂锻造图纸〗";//名字
            $wpdz2[] = 2;//物品分类
            $wpdz3[] = 637;//物品id
            $wpdz4[] = 1;//	量
            $wpdz5[] = 1;//	重量
//物品加
            include("./rwmap/rwget.php");
        } else {
            echo "<p style='color: black'>升级失败所需要的材料不足</p>" . "<br>";
        }
    } elseif ($npcc == 2) {
        $npcc11 = $npcc;//存值
//提供需要扣除的物品作为判读依据
        $wpdz1[] = "〖圣灵锻造图纸〗";//名字
        $wpdz2[] = 2;//物品分类
        $wpdz3[] = 577;//物品id
        $wpdz4[] = 50;//	需要扣除的量
        $wpdz5[] = 1;//	重量
        $wpdz1[] = "银两";//名字
        $wpdz2[] = 0;//物品分类
        $wpdz3[] = 0;//物品id
        $wpdz4[] = 1000000000;//	需要扣除的量
        $wpdz5[] = 0;//	重量
        $wpdz1[] = "〖金豆〗";//名字
        $wpdz2[] = 4;//物品分类
        $wpdz3[] = 127;//物品id
        $wpdz4[] = 20;//	需要扣除的量
        $wpdz5[] = 1;//	重量
//提供需要扣除的物品作为判读依据
        include("./pz/ini_pzz026.php");
        $npcc = $npcc11;//返还存值
        if ($pd == 2) {
            $manzu1 = "";
            //物品加
            $wpdz1[] = "〖噬魂锻造图纸〗";//名字
            $wpdz2[] = 2;//物品分类
            $wpdz3[] = 637;//物品id
            $wpdz4[] = 10;//	量
            $wpdz5[] = 1;//	重量
//物品加
            include("./rwmap/rwget.php");
        } else {
            echo "<p style='color: black'>升级失败所需要的材料不足</p>" . "<br>";
        }
    } elseif ($npcc == 3) {
        $npcc11 = $npcc;//存值
//提供需要扣除的物品作为判读依据
        $wpdz1[] = "〖圣灵锻造图纸〗";//名字
        $wpdz2[] = 2;//物品分类
        $wpdz3[] = 577;//物品id
        $wpdz4[] = 500;//	需要扣除的量
        $wpdz5[] = 1;//	重量
        $wpdz1[] = "银两";//名字
        $wpdz2[] = 0;//物品分类
        $wpdz3[] = 0;//物品id
        $wpdz4[] = 10000000000;//	需要扣除的量
        $wpdz5[] = 0;//	重量
        $wpdz1[] = "〖金豆〗";//名字
        $wpdz2[] = 4;//物品分类
        $wpdz3[] = 127;//物品id
        $wpdz4[] = 200;//	需要扣除的量
        $wpdz5[] = 1;//	重量
//提供需要扣除的物品作为判读依据
        include("./pz/ini_pzz026.php");
        $npcc = $npcc11;//返还存值
        if ($pd == 2) {
            $manzu1 = "";
            //物品加
            $wpdz1[] = "〖噬魂锻造图纸〗";//名字
            $wpdz2[] = 2;//物品分类
            $wpdz3[] = 637;//物品id
            $wpdz4[] = 100;//	量
            $wpdz5[] = 1;//	重量
//物品加
            include("./rwmap/rwget.php");
        } else {
            echo "<p style='color: black'>升级失败所需要的材料不足</p>" . "<br>";
        }
    }
    echo "<br>";
//cmd及超链接值
    $cmid = $cmid + 1;
    $cdid[] = $cmid;
    $clj[] = 2;
    $npc[] = 0;
    echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>" . "<br>";
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>