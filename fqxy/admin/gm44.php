<?php

echo "<p style='color: red'>【小轩西游充值订单】</p>"."<br>";


echo "<p style='color: black'>【订单已清空】</p>"."<br>";

include("./sql/mysql.php");//调用数据库连接 
//清空家具
$q2="all_cz";
$strsql="truncate table $q2";
$result=mysqli_query($conn, $strsql);

echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><p style='color: blue'>【返回GM管理首页】</p></a>"."<br>";

echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><p style='color: blue'>返回GM管理平台</p></a>"."<br>";






