<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	


if($_POST['submit']){
$wjjdqg= $_POST['sl'];
$wjtake10= $_POST['jdqg'];
$wjtakes2=iconv_strlen($wjtake10,"UTF-8");
$wjtake = iconv("utf-8","gbk",$wjtake10);  

if($wjtake!=""){
	
		
if(preg_match("/[ ';~`@#$%^&+=)(<>{}]|\]|\[|\/|\\\|\"|\|/",$wjtake)){ 



$tszf=2;
} else{
$tszf=1;

}

	
	
if($tszf==1){
	
	
	
	
	
if($wjtakes2>0&&$wjtakes2<=6||$wjtakes2>0&&$wjtakes2<=6){

	




if($wjjdqg>=1&&$wjjdqg<=9999){

$sll=preg_match('/^\d+$/i', $wjjdqg);

if($sll!=0){
include("wj/qggz.php");
} else {

echo "<p style='color: red'>你输入的官宅求购价格有误请重新输入</p>"."<br>";

}





















} else{

echo "<p style='color: red'>金豆求购价格必须在1-9999之间</p>"."<br>";
} 


} else{


echo "<p style='color: red'>字符超过最大限制(6个字以内)</p>"."<br>";

}






	} else{
echo "<p style='color: red'>你输入的官宅求购信息包含敏感字符请重新输入</p>"."<br>";
}











} else{


echo "<p style='color: red'>求购官宅的信息不能为空</p>"."<br>";

}



}





}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>

<form  action="<?echo "xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1";?>" method="POST">
<p style='color: black'>请输入你要求购官宅的信息及其金豆价格:</p><br>
信息：<input  type="text" name="jdqg" placeholder="请输入求购信息"id='search'><br>
豆价：<input type="tel" name="sl" placeholder="请输入求购价格"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>

<input  type="submit" name="submit" value="发布求购"id="search1" ><br>
</form>


<?
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";

echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");







?>






















