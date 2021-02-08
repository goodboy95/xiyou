<?php
include("./ini/yl_ini.php");
$wpzzz = "背包仓库银两";
$wwpid = "背包银两";
$inina = "yl.ini";

//路径
$path = 'ache/' . $wjid;
//判断ini文件是否存在	
$ininame = $path . "/" . $inina;
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下所有数据$
$wjwp = ($iniFile->getItem($wpzzz, $wwpid));

include("./sql/mysql.php");//调用数据库连接
$q2 = "all_yl";
if ($wjwp) {
    $xwpsl = $wjwp + $wwpsl;
    if ($xwpsl > 99999999999) {
        $xwpsl = 99999999999;
        $strsql = "update $q2 set bbyl=$xwpsl where wjid=$wjid";
        $result = @mysqli_query($conn, $strsql);
        $ylmm = 2;
        //更新本地数据
        # 修改一个分类下子项的值(也可以修改多个)
        $iniFile->updItem($wpzzz, [$wwpid => $xwpsl]);
    } else {
        $strsql = "update $q2 set bbyl=$xwpsl where wjid=$wjid";//物品id号必改值
        $result = mysqli_query($conn, $strsql);
//数据库修改
//缓存修改
        $iniFile->updItem($wpzzz, [$wwpid => $xwpsl]);
        $ylmm = 1;
    }
} else {
    //新增数据
    $ylmm = 1;
    $sql = "insert into $q2 (wjid,bbyl,ckyl)  values($wjid,$wwpsl,'0')";
    if (!mysqli_query($conn, $sql)) {
        die('Error: ' . mysqli_error($conn));
    }
    //新增数据
//更新缓存数据
    unlink($ininame); //删除文件
}

if ($ylmm == 2) {
    echo "<p style='color: red'>银两达到上限，无法获得银两</p><br>";

} else {
    $yl = $wwpsl;
    echo "<p style='color: black'>得到了</p>";
    include("./wp/ylxx.php");//显示为汉字
}


echo "<br>";



