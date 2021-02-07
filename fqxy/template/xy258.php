<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
if($_POST['submit']){
$sl= $_POST['sl'];
$sll=preg_match('/^\d+$/i', $sl);
if($sll!=0){
if($sl<=99999999999&&$sl>=1){
	
	

//ini文件名字
$inina="yl.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('背包仓库银两',['背包银两','仓库银两']));




$ssyl=$wjxx['背包银两'];
$ckssyl=$wjxx['仓库银两'];
if($ssyl>=$sl){
$ylsx=$ckssyl+$sl;

if($ylsx<=99999999999){




//连接数据库提取数据写入ini 
   
include("./sql/mysql.php");//调用数据库连接 
   
$q2="all_yl";
$sql1=mysqli_query($conn, "select * from $q2 where wjid=$wjid");
$info1=@mysqli_fetch_array($sql1);
$bbyl=$info1['bbyl'];
$ckyl=$info1['ckyl'];
if($bbyl>=$sl){


//存钱仓库加身上减	
$ssyl1=$bbyl-$sl;
$ckyl1=$ckyl+$sl;
if ($ckyl1>99999999999) {

$ckyl1=99999999999;
} else {


}



$strsql = "update $q2 set bbyl=$ssyl1,ckyl=$ckyl1 where wjid=$wjid";
$result = @mysqli_query($conn, $strsql);

////////////////////////////////缓存更新///////////////////////
	
	

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包仓库银两', ['背包银两' => $ssyl1, '仓库银两' => $ckyl1]);
	
////////////////////////////////缓存更新///////////////////////
	
	echo "<p style='color: red'>恭喜你存入了银两：</p>";
	$yl=$sl;
	$clor="red";
		include("./wp/sxf.php");
	
	
	
		echo "<br>";
	
	
		
} else {

echo "<p style='color: red'>对不起!你身上没有那么多银两哦!</p>"."<br>";

}
	} else {

echo "<p style='color: red'>对不起!你本次存款达到了仓库银两上限!请重新输入</p>"."<br>";

}	
} else {

echo "<p style='color: red'>对不起!你身上没有那么多银两哦!</p>"."<br>";

}

} else {

echo "<p style='color: red'>最大不能超过999亿9999万9999两</p>"."<br>";

}


} else {

echo "<p style='color: red'>输入有误请重新输入</p>"."<br>";

}

} else {


}



echo"<p style='color: black'>钱庄存款：</p></a>";
include("wp/ckwarehouse.php");
echo "<p style='color: black'>------</p>"."<br>";
echo"<p style='color: black'>身上银子：</p></a>";
include("wp/warehouse.php");
echo"<p style='color: black'>请输入存入的银两：</p></a>";
?>


<form  action="" method="post">
<input type="tel" name="sl" placeholder="请输入存入的银两"id='search'onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"><br>
<input  type="submit" name="submit"  value="存款" id="search1"><br>
</form>



<?php
echo "<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=257;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>放弃存款</p></a>"."<br>";


echo "<p style='color: black'>------</p>"."<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";

echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");






}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>
