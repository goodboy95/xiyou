<?php
//判断ini文件是否存在如不没有则从数据库提取并且写入ini
$inina = "xp.ini";
$path = 'ache/' . $wjid;
$file = $path . "/" . $inina;
if (!file_exists($file)) {
    //连接数据库提取数据写入ini
    //创建文件
    file_put_contents($file, "[玩家星盘]");
    # 实例化ini文件操作类，并载入 .ini文件
    $iniFile = new iniFile($file);
    $iniFile->addItem('星盘id', ['初始' => 0]);
    $iniFile->addItem('星盘开启', ['初始' => 0]);
    include("./sql/mysql.php");//调用数据库连接
    //判断表是否存在
    $q2 = "xp" . $wjid;
    if (mysqli_num_rows(mysqli_query($conn, "SHOW TABLES LIKE '" . $q2 . "'")) != 1) {
        $sql = "CREATE TABLE $q2 (`id` int( 11 ) NOT  NULL default  '0' COMMENT  '编号id',
        `xpid` int( 11 )  NOT  NULL default  '0' COMMENT  '星盘id',
        `xpkq` int( 11 )  NOT  NULL default  '0' COMMENT  '星盘开启')
        DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
        mysqli_query($conn, $sql);
    }
    //判断值是否存在
    $xlidd = 0;
    $m = 27;
    for ($d = 0; $d < $m; $d++) {
        $xlidd = $xlidd + 1;
        $q2 = "xp" . $wjid;
        $sql1 = mysqli_query($conn, "select id from $q2 where id=$xlidd");
        $info1 = @mysqli_fetch_array($sql1);
        $xlpd = $info1 != null ? $info1['id'] : "";
        if (!$xlpd) {
            //获取最大值
            $q2 = "xp" . $wjid;
            $sql1 = mysqli_query($conn, "select MAX(id) from $q2");
            $abc = mysqli_fetch_array($sql1);
            $maxid = $abc[0];
            $maxidd = $maxid + 1;
            $sql = "insert into $q2 (id,xpid,xpkq)  values('$maxidd','0','0')";
            if (!mysqli_query($conn, $sql)) {
                die('Error: ' . mysqli_error($conn));
            }
        }
    }
    //判断值是否存在
    $q2 = "xp" . $wjid;
    $str = "select * from $q2";
    $result = mysqli_query($conn, $str) or die('SQL语句有误');
    //把有值的数据存入一个数组
    $m = 0;
    while (!!$row = mysqli_fetch_array($result)) {
        $iniFile->addCategory('星盘id', [$row['id'] => $row['xpid']]);
        $iniFile->addCategory('星盘开启', [$row['id'] => $row['xpkq']]);
    }
}
$iniFile = new iniFile($file);
