<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用zt.ini是否存在  
include("./ini/zt_ini.php");
$bpid=($iniFile->getItem('玩家信息','帮派id'));
$bpmz=($iniFile->getItem('玩家信息','帮派名字'));

$ininalock5="bp".$bpid.".ini";
include("./ini/zsgggini.php");
if($zsspd5==1){
	
if($bpid>=1){
	
include("./ini/bp_ini.php");
# 获取一个分类下所有数据$
$bpdj=($iniFile->getItem('国家信息','国家等级'));



include("./ini/bpp_ini.php");

$xl=($iniFile->getItem('序列',$wjid));
$gjgx1=($iniFile->getItem('贡献',$xl));
	
echo "<p style='color: black'>".$bpmz."的国家商城</p><br>";
echo "<p style='color: black'>我可以使用的国家贡献：".$gjgx1."点</p><br>";
echo "<p style='color: black'>----------------------</p>"."<br>";


$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=186;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>1级商城</p></a>";
echo "<p style='color: black'>|</p>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=596;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>2级商城</p></a>";
echo "<p style='color: black'>|</p>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=597;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>3级商城</p></a>";
echo "<p style='color: black'>|</p>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=598;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>4级商城</p></a>";
echo "<p style='color: black'>|</p>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=599;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>5级商城</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=600;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>6级商城</p></a>";
echo "<p style='color: black'>|</p>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=601;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>7级商城</p></a>";
echo "<p style='color: black'>|</p>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=602;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>8级商城</p></a>";
echo "<p style='color: black'>|</p>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=603;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>9级商城</p></a>";
echo "<p style='color: black'>|</p>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=604;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>10级商城</p></a>"."<br>";
	





if($bpdj>=4){
echo "<p style='color: red'>【四级国家商城】</p>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=606;
$npc[]=305;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>〖强化打孔器〗</p></a>";
echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=605;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>兑换（150贡献+2亿银两）</p></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=606;
$npc[]=316;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>〖银星升星符〗</p></a>";
echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=605;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>兑换（200贡献+4亿银两）</p></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=606;
$npc[]=126;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小幸运草</p></a>";
echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=605;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>兑换（100贡献+2亿银两）</p></a>"."<br>";














} else{
echo "<p style='color: black'>四国家商城未开启（升级国家后开启）</p>"."<br>";
} 





echo "<p style='color: black'>----------------------</p>"."<br>";
echo "<p style='color: red'>温馨提示：国家商城等级越高商品越丰厚越多（在国家商城购买商品需要消耗国家贡献）</p><br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=172;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回国家</p></a>"."<br>";


} else{
echo "<p style='color: black'>你还未加入任何国家！！</p><br>";
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
include("./ini/jjsini.php");
//解锁当前使用的ini



}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini


?>