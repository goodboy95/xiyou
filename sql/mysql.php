<?php

$mysqla1 = 'xiyou_mysql';
$mysqla2 = 'root';
$mysqla3 = 'root';


//本地服务器连接
$conn=mysqli_connect($mysqla1,$mysqla2,$mysqla3)or die ("连接服务器失败2");
mysqli_select_db($conn, 'xxjyuser');

//echo "<p style='color: pink'>数据库调试信息----连接数据库中.......</p>"."<br>";
?>