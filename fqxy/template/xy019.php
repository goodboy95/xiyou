<?php



//获取返回战斗页面
include("./ini/npc_ini.php");
$yymid=($iniFile->getItem('怪物2号属性','初始'));
$cljpost=$yymid;
//获取返回战斗页面

if($yymid==130){



include("./npc/bossxx.php");
echo "<p style='color: red'>$nname</p>"."<br>";
echo "<p style='color: black'>生命:"."$nmaxhp</p>"."<br>";




} else{	
include("npc/npcxx.php");
if($nccp!=2){

//攻击
$maxgj=$ngj;
$ngj = ceil(($ngj)/ 1.3);
//魔攻
$maxmg=$nmg;
$nmg = ceil(($nmg)/ 1.3);
//防御
$maxfy=$nfy;
$nfy = ceil(($nfy)/ 1.3);
//魔防
$maxmf=$nmf;
$nmf = ceil(($nmf)/ 1.3);
echo "<p style='color: red'>$nname</p>"."<br>";
echo "<p style='color: black'>等级:"."$ndj</p>"."<br>";
echo "<p style='color: black'>生命:"."$nmaxhp</p>"."<br>";
echo "<p style='color: black'>攻击:"."$ngj"."-"."$maxgj</p>"."<br>";
echo "<p style='color: black'>魔攻:"."$nmg"."-"."$maxmg</p>"."<br>";
echo "<p style='color: black'>防御:"."$nfy"."-"."$maxfy</p>"."<br>";
//echo "<p style='color: black'>魔防:"."$nmf"."-"."$maxmf</p>"."<br>";
echo "<p style='color: black'>攻击元素:冰+"."$nbg"."&nbsp火+"."$nhg"."&nbsp雷+"."$nlg"."</p>"."<br>";
echo "<p style='color: black'>防御元素:冰+"."$nbf"."&nbsp火+"."$nhf"."&nbsp雷+"."$nlf"."</p>"."<br>";

} else{	

echo "<p style='color: black'>对不起这个npc未添加请联系gm解决编号：".$npcc."</p>"."<br>";



}


}
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=$cljpost;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";

echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");





?>