<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina = "zzck.ini";
$path = 'ache/' . $wjid;
$file = $path . "/" . $inina;
if (!file_exists($file)) {
//创建文件
    file_put_contents($file, "[玩家背包]");
# 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    $iniFile->addItem('序列', ['初始' => 123]);
    $iniFile->addItem('id', ['初始' => 1]);
    $iniFile->addItem('数量', ['初始' => 123]);
    $iniFile->addItem('名字', ['初始' => 123]);
    include("./sql/mysql.php");//调用数据库连接 
    //连接数据库提取数据写入ini 
    $inina = "zzck.ini";
    $path = 'ache/' . $wjid;
    $file = $path . "/" . $inina;
//创建文件
    file_put_contents($file, "[玩家背包]");
# 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    $iniFile->addItem('序列', ['初始' => 123]);
    $iniFile->addItem('id', ['初始' => 1]);
    $iniFile->addItem('数量', ['初始' => 123]);
    $iniFile->addItem('名字', ['初始' => 123]);
    include("./sql/mysql.php");//调用数据库连接
    $q2 = "zzck" . $wjid;
    $str = "select wpid,wpsl,wpfl from $q2";
    $result = mysqli_query($conn, $str) or die('SQL语句有误');
//把有值的数据存入一个数组
    $m = 0;
    while (!!$row = mysqli_fetch_array($result)) {
        if ($row['wpsl'] > 0) {
            $m = $m + 1;
            $npcc = $row['wpid'];
            $iniFile->addCategory('序列', [$row['wpid'] => $m]);
            $iniFile->addCategory('id', [$m => $row['wpid']]);
            $iniFile->addCategory('数量', [$row['wpid'] => $row['wpsl']]);
//调用物品信息
            include("./wp/wpxx.php");
            $iniFile->addCategory('名字', [$row['wpid'] => $wpmz]);
        }
    }
}
$iniFile = new iniFile($file);
