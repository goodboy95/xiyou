<?php





$hff=1;
$dqwp=0;

if($hff==1){
if($_POST['submit']){

$sl= $_POST['sl'];
$sll=preg_match('/^\d+$/i', $sl);
$dqwp=1;
include("gsgmbs02.php");





}












}
if($dqwp==1){
exit();
}

echo "<p style='color: red'>你最多可购买".$wpmz."x".$gmsl."</p>"."<br>";
echo "<p style='color: black'>请输入你要购买多少".$wpmz."呢？</p>"."<br>";
/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=293;
$npc[]=$npcc;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>下架全部</p></a>"."<br>";
*/



?>
<form  action="" method="POST">
<input type="tel" name="sl" placeholder="请输入"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="购买" id="search1"><br>
</form>
<?php

echo "<br>";
echo "<br>";
?>



