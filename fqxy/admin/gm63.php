<?php
include("./sql/mysql.php");//调用数据库连接 
$q2="all_zt";
$str="select * from $q2";
$result=mysqli_query($conn, $str) or die('SQL语句有误');
//把有值的数据存入一个数组
$m=0;




 while(!!$row=mysqli_fetch_array($result)){
$q2="all_user";
$sql1=mysqli_query($conn, "select wjid from $q2 where wjid=$row[wjid]");
$info1=@mysqli_fetch_array($sql1);
$fh=$info1[wjid];
if($fh >=1){
echo "<font color=blue>【违规封号】玩家【:".$row[username]."（". $row[wjid]."）】====充值总额：【".$row[vipjy]."】</font></br>";		
} else{	
if($row[vipjy] >=1){	
echo "<font color=red>【YES】玩家【:".$row[username]."（". $row[wjid]."）】====充值总额：【".$row[vipjy]."】</font></br>";	
} else{
echo "<font color=balck>【NO】玩家【:".$row[username]."（". $row[wjid]."）】====充值总额：【".$row[vipjy]."】</font></br>";			
} 	

} 


}


echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=3'><font color=blue>【返回上级】</font></a>"."<br>";
















?>





