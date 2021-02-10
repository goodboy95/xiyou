<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina = "zxrw.ini";
$path = 'ache/' . $wjid;
$file = $path . "/" . $inina;
if (!file_exists($file)) {
    //创建文件
    file_put_contents($file, "[玩家任务]");
    # 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    $iniFile->addItem('任务id', ['初始' => 123]);
    $iniFile->addItem('任务变量', ['初始' => 123]);
    $iniFile->addItem('已杀怪', ['初始' => 123]);
    $iniFile->addItem('要杀怪', ['初始' => 123]);
    $iniFile->addItem('任务分类', ['初始' => 123]);
    $iniFile->addItem('任务名字', ['初始' => 123]);
    include("./sql/mysql.php");//调用数据库连接
    $q2 = "yxrw" . $wjid;
    $str = "select * from $q2";
    $result = mysqli_query($conn, $str) or die('SQL语句有误');
    //把有值的数据存入一个数组
    $m = 0;
    while (!!$row = mysqli_fetch_array($result)) {
        $rwid = $row['rwid'];
        $rwfl = $row['rwfl'];
        if ($rwfl == 1 || $rwfl == 2 || $rwfl == 4 || $rwfl == 5) {
            $rwstr = $rwid . "_" . $rwfl;
            $iniFile->addCategory('任务id', [$rwstr => $rwid]);
            $iniFile->addCategory('任务变量', [$rwstr => $row['rwbl']]);
            $iniFile->addCategory('已杀怪', [$rwstr => $row['yisg']]);
            $iniFile->addCategory('要杀怪', [$rwstr => $row['ysg']]);
            $iniFile->addCategory('任务分类', [$rwstr => $rwfl]);
            $iniFile->addCategory('任务名字', [$rwstr => $row['rwmz']]);
        }
    }
}
$iniFile = new iniFile($file);
