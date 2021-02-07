<?php





  





echo "<p style='color: red'>【发布系统消息】</p>"."<br>";
if($_POST['submit']){
$xtxx= $_POST['sl'];


include("./msg/msgg02.php");

if($xtmsg==2){
echo"<p style='color: black'>发布系统消息成功</p></a>";
echo"<p style='color: black'>发布内容：".$xtxx."</p></a>";
}


}
?>
<form  action="" method="post">
信息：<input type="text" name="sl" placeholder="请输入你要发布的系统消息"id='search'><br>
<input  type="submit" name="submit"  value="发布" id="search1"><br>
</form>
<?

echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><p style='color: blue'>【返回GM管理首页】</p></a>"."<br>";

echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><p style='color: blue'>返回GM管理平台</p></a>"."<br>";
?>





