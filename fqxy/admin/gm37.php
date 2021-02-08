<?php





//获取全区所有人员id所有


include("./sql/mysql.php");//调用数据库连接 

$q2="all_zt";
$str="select wjid from $q2";
$result=mysqli_query($conn, $str) or die('SQL语句有误');
//把有值的数据存入一个数组
$xxcc=0;

 while(!!$row=mysqli_fetch_array($result)){
$sxwjid[]=$row['wjid'];
$xxcc=$xxcc+1;

}
$sxi=-1;


//清空
$q2="all_phb";
$strsql="truncate table $q2";
$result=mysqli_query($conn, $strsql);

$maxidd=0;
for($d=0;$d<$xxcc;$d++){
$sxi=$sxi+1;
$wjid=$sxwjid[$sxi];
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){



//调用zt.ini是否存在
$wjxx="";
include("./ini/zt_ini.php");
include("wj/ztt.php");
include("./ini/zt_ini.php");
$wjxx=($iniFile->getCategory('玩家信息'));

if($wjxx['玩家名字']){
$maxidd=$maxidd+1;
$q2="all_phb";
$sql = "insert into $q2 (id,wjid,wjmz,vip,phb1,phb2,phb3,phb4,phb5,phb6,phb7,phb8)  values('$maxidd','$wjid','$wjxx['玩家名字']','$wjxx['vip等级']','$wjxx1['血']','$wjxx1['max攻击']','$wjxx1['max魔攻']','$wjxx1['max防御']','$wjxx['等级']','0','0','0')";
if (!mysqli_query($conn, $sql)){
die('Error: ' . mysqli_error($conn));
}
}





}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini








}


function deldir($dir) {
  //先删除目录下的文件：
  $dh=opendir($dir);
  while ($file=readdir($dh)) {
    if($file!="." && $file!="..") {
      $fullpath=$dir."/".$file;
      if(!is_dir($fullpath)) {
          unlink($fullpath);
      } else {
          deldir($fullpath);
      }
    }
  }
  
  closedir($dh);

}


$path='acher/phb';
deldir($path);




echo "<p style='color: red'>排行榜数据已刷新</p>"."<br>";





echo "<p style='color: black'>---------------------</p>"."<br>";
echo "<a href='gm.php?wjid=$wjiddd&&pass=$password&&gid=1'><p style='color: blue'>【返回GM管理首页】</p></a>"."<br>";

echo "<br>";
echo "<p style='color: black'>---------------------</p>"."<br>";


echo "<a href=http://".$xxjyurl."/admin/index.php?wjid=$wjid&&pass=$password><p style='color: blue'>返回GM管理平台</p></a>"."<br>";






