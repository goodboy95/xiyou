<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina = "gz05.ini";
$path = 'acher/guoz';
$file = $path . "/" . $inina;
if (!file_exists($file)) {
//创建文件
    file_put_contents($file, "[国战信息]");
# 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    $iniFile->addItem('国战判断时间', ['初始' => 0]);
    include("./sql/mysql.php");//调用数据库连接 
    $q2 = "gz05";
    $str = "select * from $q2";
    $result = mysqli_query($conn, $str) or die('SQL语句有误');
    while (!!$row = mysqli_fetch_array($result)) {
        $iniFile->addCategory('国战判断时间', [$row['id'] => $row['gztime']]);
    }
}
$iniFile = new iniFile($file);
