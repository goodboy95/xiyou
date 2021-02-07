<?php

echo "<p style='color: red'>【小轩西游充值管理】</p>"."<br>";
include("./sql/mysql.php");//调用数据库连接 
$q2="all_cz";
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
$sql1=mysqli_query($conn, "select * from $q2 where id=$id[$i]",$conn);
$info1=@mysqli_fetch_array($sql1);
$cz01=$info1['czid'];
$cz02=$info1['czje'];
$cz03=$info1['cztime'];
$cz04=$info1['czfl'];
echo $ii;
echo ".";
echo "（".$cz02."元）";
echo "（".$cz03."）";
if($cz04 ==1){
$cz04="（支付宝）";
} elseif($cz04==2){   
$cz04="（微信）";	
} elseif($cz04==3){   
$cz04="（支付宝【红包】）";	
} elseif($cz04==4){   
$cz04="（微信【红包】）";	


} else{
$cz04="（无效）";	
} 
echo $cz04;
echo "ID:".$cz01;
echo "</br>";

}

echo "</br>";

echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=44'><p style='color: blue'>【清空所有订单】</p></a>"."<br>";

} else{
echo "</br>";	
echo "<p style='color: black'>目前没有充值订单</p>"."<br>";
} 












echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><p style='color: blue'>【返回GM管理首页】</p></a>"."<br>";

echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><p style='color: blue'>返回GM管理平台</p></a>"."<br>";





?>
