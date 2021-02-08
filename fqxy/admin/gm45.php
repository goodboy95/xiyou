<?php



$wjid=10000002;
//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");



/////////公共锁
$path='acher/lock';//路径
$lockmz='allhbmoney_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁


if($zsspd==1&&$all_lock2==1){




echo "<p style='color: red'>【小轩西游红包管理】</p>"."<br>";
include("./sql/mysql.php");//调用数据库连接 
$q2="all_xjhb";
$str="select id from $q2";
$result=mysqli_query($conn, $str) or die('SQL语句有误');

 while(!!$row=mysqli_fetch_array($result)){
$id[]=$row['id'];
$m=$m+1;
}
if($m >=1){
$i=-1;
$ii=0;
for($d=0;$d<$m;$d++){
$ii=$ii+1;
$i=$i+1;
$sql1=mysqli_query($conn, "select * from $q2 where id=$id[$i]");
$info1=@mysqli_fetch_array($sql1);
$cz01=$info1['wjid'];
$cz02=$info1['wjmz'];
$cz03=$info1['wjje'];
$cz04=$info1['zh1'];
$cz05=$info1['zh2'];
echo $ii;
echo ".";
echo "（".$cz02."--".$cz01."）";
echo "（".$cz03."元）";
if($cz04 !=111){
echo "（支付宝:".$cz04."）";
} else{
echo "（无效）";	
} 
if($cz05 !=111){
echo "（微信:".$cz05."）";
} else{
echo "（无效）";	
} 
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=46&&hbid=$id[$i]'><p style='color: blue'>【清理】</p></a>"."<br>";


echo "</br>";

}

echo "</br>";

} else{
echo "</br>";	
echo "<p style='color: black'>目前没有订单</p>"."<br>";
} 












echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><p style='color: blue'>【返回GM管理首页】</p></a>"."<br>";

echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><p style='color: blue'>返回GM管理平台</p></a>"."<br>";
}



//解锁当前使用的ini
include("./ini/jszsini.php");
//解锁当前使用的ini


//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini





