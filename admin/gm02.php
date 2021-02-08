<?php
header("Content-type: text/html; charset=utf-8");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- TemplateBeginEditable name="doctitle" -->
<title>小轩GM管理平台</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>

<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>
<?php

error_reporting(E_ALL & ~E_NOTICE); 

$wjid=$_GET['wjid'];
$password=$_GET['pass'];
//ini文件名字
$inina="user2.ini";
//路径
$path='../ache/gm';
//判断ini文件是否存在	
$ininame = $path."/".$inina;
$filename = $ininame;
if(file_exists($filename)){
include("../class/iniclass.php");//调用iniclass文件
	//调用user.ini是否存在
include("../ini/user2_ini.php");		
# 获取一个分类下某个子项的值
$pass=($iniFile->getItem('验证信息','玩家验证'));
if($pass||$password){
}else{
$pass=1;
}
if($pass==$password){
$name=($iniFile->getItem('验证信息','玩家昵称'));
include("../url/url.php");
include("../sql/mysql.php");//调用数据库连接

echo "<p style='color: red'>【提取成功】</p>"."<br>";


//随机产生一个玩家的特征码写入数据库验证网址信息
function randomkeys($length) {
    $returnStr='';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
    for($i = 0; $i < $length; $i ++) {
        $returnStr .= $pattern {mt_rand ( 0, 61)}; //生成php随机数
    }
    return $returnStr;
}
$a1=randomkeys(35);	
$a2="【小|轩|家|园|注册码|】[".$a1."]";	
//获取最大值
$q2="zem";
$sql1=mysqli_query($conn, "select MAX(id) from $q2");
$abc=mysqli_fetch_array($sql1);
$maxid=$abc[0];

if($maxid ==""){
$maxid=0;
$maxidd=$maxid+1;
} else{
$maxidd=$maxid+1;
}
$q2="zem";
$sql = "insert into $q2 (id,zem,sy)  values('$maxidd','$a2','1')";
 if (!mysqli_query($conn, $sql))
 {
   die('Error: ' . mysqli_error($conn));
 }












echo "<p style='color: black'>【注册码】</p>"."<br>";


echo "<p style='color: red'>恭喜你成功提取到一条注册码</p>"."<br>";
echo "<p style='color: red'>请复制以下注册码进行注册:</p>"."<br>";
echo "<p style='color: black'>$a2</p>"."<br>";
echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";






echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><p style='color: blue'>返回GM管理平台</p></a>"."<br>";






} else {
include("../url/url.php");
$xyurl="http://".$xxjyurl."/admin/login.php";
$zcxx="<p style='color: red'>当前验证信息失效,请重新登录</p>"."<br><br><a href='login.php'><p style='color: blue'>返回GM登录</p></a>"."<br>";
}
} else {
include("../url/url.php");
$xyurl="http://".$xxjyurl."/admin/login.php";
$zcxx="<p style='color: red'>当前验证信息失效,请重新登录</p>"."<br><br><a href='login.php'><p style='color: blue'>返回GM登录</p></a>"."<br>";
}

?>
</div>

</body>
</html>




