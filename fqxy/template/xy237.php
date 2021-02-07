<?php



//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){




$bsid=$npcc;

include("wp/zbbs.php");//调用宝石信息




echo "<p style='color: black'>$bsmz</p>"."<br>";
echo "<p style='color: black'>描述：$bsms</p>"."<br>";


if($bsxl>0){
echo "<p style='color: black'>镶嵌血量：".$bsxl."</p>"."<br>";

}
if($bsgj>0){
$wpp4 = ceil(($bsgj)/ 1.3);
echo "<p style='color: black'>镶嵌攻击：".$wpp4."-".$bsgj."</p>"."<br>";

}
if($bsmg>0){
$wpp5 = ceil(($bsmg)/ 1.3);
echo "<p style='color: black'>镶嵌魔攻：".$wpp5."-".$bsmg."</p>"."<br>";

}
if($bsfy>0){
$wpp6 = ceil(($bsfy)/ 1.3);

echo "<p style='color: black'>镶嵌防御：".$wpp6."-".$bsfy."</p>"."<br>";
}



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=236;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<br/>";


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br/>";






echo "----------------------"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=1;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏首页</p></a>"."<br/>";

}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>