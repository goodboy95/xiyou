<?php


$ppczzs=200;       //充值赠送的
$ppwpsl=2000;//最终充值所得
$vipjf=200;
$ppwpsl1=10;//赠送背包卷
$ppwpsl2=10;//赠送仓库卷




include("czcode.php");//充值代码

include("./ini/zt_ini.php");


echo "<p style='color: red'>【充值成功】</p>"."<br>";

echo "<p style='color: red'>---------------------</p>"."<br>";
echo "<p style='color: black'>ID：".$wjid."</p>"."<br>";
echo "<p style='color: black'>玩家：".$usermzxx."</p>"."<br>";
echo "<p style='color: black'>价格：200元</p>"."<br>";
echo "<p style='color: black'>道具1：〖金豆〗x".$ppwpsl."</p>"."<br>";
echo "<p style='color: black'>道具2：〖背包扩容卷〗x".$ppwpsl1."</p>"."<br>";
echo "<p style='color: black'>道具3：〖仓库扩容卷〗x".$ppwpsl2."</p>"."<br>";
echo "<p style='color: black'>VIP积分：".$vipjf."点</p>"."<br>";
echo "<p style='color: red'>---------------------</p>"."<br>";





echo "<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=4'><p style='color: blue'>返回查询玩家</p></a>"."<br>";

echo "<p style='color: black'>---------------------</p>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><p style='color: blue'>【返回GM管理首页】</p></a>"."<br>";

echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><p style='color: blue'>返回GM管理平台</p></a>"."<br>";
?>





