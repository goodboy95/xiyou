<?php
echo "<p style='color: black'>【初始化奖池】</p>"."<br>";
echo "<p style='color: black'>所有奖池已初始化完毕</p>"."<br>";


include("./sql/mysql.php");//调用数据库连接 
$q2="all_jc";
$strsql="truncate table $q2";
$result=mysqli_query($conn, $strsql);

$inina="hdjc.ini";
$path='acher/hdjc';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件 
//更新缓存数据






echo "<p style='color: black'>---------------------</p>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><p style='color: blue'>【返回GM管理首页】</p></a>"."<br>";

echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><p style='color: blue'>返回GM管理平台</p></a>"."<br>";






