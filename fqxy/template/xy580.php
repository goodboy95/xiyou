<?php


	
if($_POST['submit']){
	
	
$wjtake10= $_POST['wjtoke'];
$wjtakes2=iconv_strlen($wjtake10,"UTF-8");
$wjtake = iconv("utf-8","gbk",$wjtake10);  

if($wjtake10!=""){
if($wjtakes2>0&&$wjtakes2<=60||$wjtakes2>0&&$wjtakes2<=60){
if($wjtakes2>0){
$wjtake=$wjtake10;
}
	
	
	
	
if(preg_match("/[ ';~`@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$wjtake)){ 



$tszf=2;
} else{
$tszf=1;

}

if($tszf==1){
	$zfzh=$wjtake;
include("./ini/bdzfb_ini.php");	
$iniFile->updItem('支付宝', ['初始' => $zfzh]);
echo "<p style='color: red'>恭喜你！！成功绑定到了【支付宝】（".$zfzh."）</p>"."<br>";


	
} else{
echo "<p style='color: red'>你输入的账号包含敏感字符请重新输入</p>"."<br>";
}
} else{


echo "<p style='color: red'>长度不能超过20个字符</p><br>";

}


} else{


echo "<p style='color: red'>账号不能为空</p><br>";


}

}

?>


<form  action="" method="POST">
<p style='color: black'>请输入你的【支付宝】进行绑定:</p><br>
<input  type="text" name="wjtoke" placeholder="支付宝账号"id='search'><br>
<input  type="submit" name="submit" value="绑定"id="search1" ><br>
</form>


<?php



echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=579;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<p style='color: black'></p>"."<br>";


?>















