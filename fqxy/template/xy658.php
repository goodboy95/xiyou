<?php






//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


include("./ini/zz_ini.php");

# 获取一个分类下某个子项的值
$zzdj=($iniFile->getItem('种植等级','1'));
# 获取一个分类下某个子项的值
$zzwpid=($iniFile->getItem('种植物品','1'));
# 获取一个分类下某个子项的值
$zztime=($iniFile->getItem('种植时间','1'));
# 获取一个分类下某个子项的值
$sftime=($iniFile->getItem('施肥时间','1'));
# 获取一个分类下某个子项的值
$shtime=($iniFile->getItem('收获时间','1'));
# 获取一个分类下某个子项的值
$zzwpmz=($iniFile->getItem('种植名字','1'));
# 获取一个分类下某个子项的值
$zzwpsl=($iniFile->getItem('种植数量','1'));



$nowtime=date('Y-m-d H:i:s');

if($sftime>$nowtime){









if($zzwpid>=1){

echo "<p style='color: blue'>种植时间：".$zztime."</p></a>"."<br>";
echo "<p style='color: blue'>收获时间：".$shtime."</p></a>"."<br>";
echo "<p style='color: blue'>最晚施肥时间：".$sftime."</p></a>"."<br>";
} else{	
echo "<p style='color: blue'>种植时间：未种植</p></a>"."<br>";
echo "<p style='color: blue'>收获时间：未种植</p></a>"."<br>";
echo "<p style='color: blue'>最晚施肥时间：未种植</p></a>"."<br>";
}
echo "<p style='color: black'>请选择您要种植的物品</p>"."<br>";
if($zzwpid>=1){
echo "<p style='color: red'>种植物：".$zzwpmz."x".$zzwpsl."</p>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=660;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【给它施肥】</p></a>";

echo "<p style='color: black'>◎</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=662;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【收获】</p></a>"."<br>";

echo "<p style='color: red'>种植等级：".$zzdj."级</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=661;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【升级】</p></a>"."<br>";


echo "<p style='color: red'>〖小公主の激素〗x1（提升1小时）：</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=665;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【使用】</p></a>"."<br>";


echo "<p style='color: red'>〖小公主の激素〗x6（提升6小时）：</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=665;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【使用】</p></a>"."<br>";

echo "<p style='color: red'>〖小公主の激素〗x12（提升12小时）：</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=665;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【使用】</p></a>"."<br>";

echo "<p style='color: red'>〖小公主の激素〗x24（提升24小时）：</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=665;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【使用】</p></a>"."<br>";

} else{	
echo "<p style='color: black'>【未种植】</p>"."<br>";
}



echo "<br>";




//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=659;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【种植】〖金豆〗x100</p></a>"."<br>";


/*
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=659;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【种植】〖云梯石〗x10</p></a>"."<br>";
*/
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=659;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【种植】〖八倍掉宝符〗x1</p></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=659;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【种植】〖护身符〗x1</p></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=659;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【种植】〖尊享VIP〗（月卡）x1</p></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=659;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【种植】〖至尊宝石包〗（1个）x1</p></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=659;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【种植】〖帝王石〗x5</p></a>"."<br>";



} else{	
echo "<p style='color: red'>对不起！！由于您未在施肥时间前来施肥作物已死亡（下次记得按时前来哦）</p>"."<br>";
include("./sql/mysql.php");//调用数据库连接 
$q2="zz".$wjid;
$strsql = "delete from $q2 where id=1 ";//物品id号必改值
$result = mysqli_query($conn, $strsql);

//更新缓存数据
$inina="zz.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
unlink($ininame); //删除文件  
//更新缓存数据
}

echo "<br>";





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