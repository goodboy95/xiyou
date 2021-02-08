<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina = "zbb.ini";
$path = 'ache/' . $wjid;
$file = $path . "/" . $inina;
if (!file_exists($file)) {
    //连接数据库提取数据写入ini 
    $inina = "zbb.ini";
    $path = 'ache/' . $wjid;
    $file = $path . "/" . $inina;
//创建文件
    file_put_contents($file, "[玩家背包]");
# 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    $iniFile->addItem('序列', ['初始' => 123]);
    $iniFile->addItem('装备id', ['初始' => 1234]);
    $iniFile->addItem('装备idd', ['初始' => 1234]);
    $iniFile->addItem('装备名字', ['初始' => 123]);
    $iniFile->addItem('id', ['初始' => 123]);
    $iniFile->addItem('装备星级', ['初始' => 123]);
    $iniFile->addItem('装备孔1', ['初始' => 123]);
    $iniFile->addItem('装备孔2', ['初始' => 123]);
    $iniFile->addItem('装备孔3', ['初始' => 123]);
    $iniFile->addItem('装备孔4', ['初始' => 123]);
    $iniFile->addItem('装备孔5', ['初始' => 123]);
    $iniFile->addItem('装备镶嵌1', ['初始' => 123]);
    $iniFile->addItem('装备镶嵌2', ['初始' => 123]);
    $iniFile->addItem('装备镶嵌3', ['初始' => 123]);
    $iniFile->addItem('装备镶嵌4', ['初始' => 123]);
    $iniFile->addItem('装备镶嵌5', ['初始' => 123]);
    $iniFile->addItem('装备分类', ['初始' => 123]);
    $iniFile->addItem('装备分类id', ['初始' => 123]);
    include("./sql/mysql.php");//调用数据库连接 
    $q2 = "zbb" . $wjid;
    $str = "select * from $q2";
    $result = mysqli_query($conn, $str) or die('SQL语句有误');
//把有值的数据存入一个数组
    $m = 0;
    while (!!$row = mysqli_fetch_array($result)) {
        $m = $m + 1;
        $npcc = $row['zbid'];
        $npcc1 = $row['id'];
        $zbidd = $npcc . "_" . $npcc1;
        $iniFile->addCategory('序列', [$zbidd => $m]);
//调用物品信息
        include("./wp/zbxx.php");
        $iniFile->addCategory('装备名字', [$zbidd => $wp1]);
        $iniFile->addCategory('装备星级', [$zbidd => $row['zbxj']]);
        $iniFile->addCategory('装备孔1', [$zbidd => $row['zbk1']]);
        $iniFile->addCategory('装备孔2', [$zbidd => $row['zbk2']]);
        $iniFile->addCategory('装备孔3', [$zbidd => $row['zbk3']]);
        $iniFile->addCategory('装备孔4', [$zbidd => $row['zbk4']]);
        $iniFile->addCategory('装备孔5', [$zbidd => $row['zbk5']]);
        $iniFile->addCategory('装备镶嵌1', [$zbidd => $row['zbxq1']]);
        $iniFile->addCategory('装备镶嵌2', [$zbidd => $row['zbxq2']]);
        $iniFile->addCategory('装备镶嵌3', [$zbidd => $row['zbxq3']]);
        $iniFile->addCategory('装备镶嵌4', [$zbidd => $row['zbxq4']]);
        $iniFile->addCategory('装备镶嵌5', [$zbidd => $row['zbxq5']]);
        $iniFile->addCategory('装备分类', [$zbidd => $row['zbfl']]);
        $iniFile->addCategory('装备分类id', [$row['zbfl'] => $zbidd]);
        $iniFile->addCategory('装备id', [$zbidd => $zbidd]);
        $iniFile->addCategory('装备idd', [$zbidd => $npcc]);
    }
}
$iniFile = new iniFile($file);
