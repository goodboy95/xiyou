<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
echo "<p style='color: red'>小轩西游福利中心</p>"."<br>";
	
echo "<p style='color: black'>每日福利|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=408;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>每日活跃</p></a>";

echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=409;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>每日签到</p></a>";

echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=410;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>每日宣传</p></a>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=417;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>黄金贵族</p></a>";

echo "<p style='color: black'>|</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=418;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>铂金贵族</p></a>";

echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=419;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>钻石皇族</p></a>";

echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=420;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>至尊皇族</p></a>"."<br>";

		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
$hdid=3;
$npcc=$hdid;	
include("./ini/hd_ini.php");

$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
if (!$hdtime) {//如果没有值则添加新数据
include("./yxpz/hd_pz.php");
include("./ini/hd_ini.php");//重新获取缓存数据
$hdtime=($iniFile->getItem('活动时间',$hdid));
$hdcs=($iniFile->getItem('活动次数',$hdid));
$hdlq=2;
}



//如果跨天则重置次数和时间
$nowtime=date('Y-m-d H:i:s');
$hdtime1 = substr($hdtime,0,10); 
$nowtime1 = substr($nowtime,0,10); 	
if($hdtime1!=$nowtime1&&$hdtime1||$hdlq==2){//今天不是今天数据验证
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=0 where hdid=$hdid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => '0']);	
$hdcs=0;

}

//如果跨天则重置次数和时间


if($hdcs ==0){
$vipqytime=1;//1秒
} elseif ($hdcs==1) {
$vipqytime=300;//秒数30分钟
} elseif ($hdcs==2) {
$vipqytime=300;//秒数30分钟
} elseif ($hdcs==3) {
$vipqytime=300;//秒数30分钟
} elseif ($hdcs==4) {
$vipqytime=600;//秒数30分钟
} elseif ($hdcs==5) {
$vipqytime=600;//秒数30分钟
} elseif ($hdcs==6) {
$vipqytime=600;//秒数30分钟
} elseif ($hdcs==7) {
$vipqytime=1200;//秒数30分钟
} elseif ($hdcs==8) {
$vipqytime=1200;//秒数30分钟
} elseif ($hdcs==9) {
$vipqytime=3600;//秒数30分钟
}





if($hdcs <=9){
if ($hdtime) {
$startdate=$hdtime;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));
if($minute >= $vipqytime){
	
$vipqy=2;	
} else{
$vipqy=1;	
}
} else{
$vipqy=1;	
}
$csts=$hdcs+1;
echo "<br>";
echo "<p style='color: pink'>======</p>"."<br>";

echo "<p style='color: red'>第".$csts."份【神秘礼物】</p>";
if($vipqy ==1){	

$minute1=$vipqytime-$minute;
$minute=floor($minute1/60);
$second=$minute1%60;
if($minute > 0){		
echo "<p style='color: black'>[".$minute."分".$second."秒]</p>";
} else{
echo "<p style='color: black'>[".$second."秒]</p>";
} 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=307;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";

}

if($vipqy ==2){	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=308;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>领取</p></a>"."<br>";
}



} else{	
echo "<p style='color: blue'>【神秘礼物】(请明日再来)</p>"."<br>";
}
echo "<p style='color: pink'>======</p>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=521;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>兑换说明</p></a>"."<br>";




include("./ini/zt_ini.php");


$vip=($iniFile->getItem('玩家信息','vip等级'));
//调用zt.ini是否存在


$img='pic/vip/'."vip".$vip.'.png';
echo '<img src="'.$img.' "alt="图片"/>';
if($vip==0){  
echo "<p style='color: blue'>VIP0级：【万能果】x1（2000万银两）</p>";
} elseif($vip==1){   
echo "<p style='color: blue'>VIP1级：【万能果】x2〖金豆〗x1（2000万银两）</p>";
} elseif($vip==2){   
echo "<p style='color: blue'>VIP2级：【万能果】x4〖金豆〗x3（5000万银两）</p>";
} elseif($vip==3){   
echo "<p style='color: blue'>VIP3级：【万能果】x4〖金豆〗x3（6000万银两）</p>";
} elseif($vip==4){   
echo "<p style='color: blue'>VIP4级：【万能果】x5〖金豆〗x4（7000万银两）</p>";
} elseif($vip==5){   
echo "<p style='color: blue'>VIP5级：【万能果】x6〖金豆〗x5（8000万银两）</p>";
} elseif($vip==6){   
echo "<p style='color: blue'>VIP6级：【万能果】x7〖金豆〗x6（9000万银两）</p>";
} elseif($vip==7){   
echo "<p style='color: blue'>VIP7级：【万能果】x8〖金豆〗x7（1亿银两）</p>";
} elseif($vip==8){   
echo "<p style='color: blue'>VIP8级：【万能果】x9〖金豆〗x8（1亿银两）</p>";
} elseif($vip==9){   
echo "<p style='color: blue'>VIP9级：【万能果】x10〖金豆〗x9（1亿银两）</p>";
} elseif($vip==10){   
echo "<p style='color: blue'>VIP10级：【万能果】x11〖金豆〗x10（1亿银两）</p>";
} elseif($vip==11){   
echo "<p style='color: blue'>VIP11级：【万能果】x12〖金豆〗x11（2亿银两）</p>";
} elseif($vip==12){   
echo "<p style='color: blue'>VIP12级：【万能果】x13〖金豆〗x12（2亿银两）</p>";
} elseif($vip==13){   
echo "<p style='color: blue'>VIP13级：【万能果】x14和〖金豆〗x13（2亿银两）</p>";
} elseif($vip==14){   
echo "<p style='color: blue'>VIP14级：【万能果】x15和〖金豆〗x14（2亿银两）</p>";
} elseif($vip==15){   
echo "<p style='color: blue'>VIP15级：【万能果】x16和〖金豆〗x15（2亿银两）</p>";
} elseif($vip==16){   
echo "<p style='color: blue'>VIP16级：【万能果】x17和〖金豆〗x16（2亿银两）</p>";
} elseif($vip==17){   
echo "<p style='color: blue'>VIP17级：【万能果】x18和〖金豆〗x17（2亿银两）</p>";
} elseif($vip==18){   
echo "<p style='color: blue'>VIP18级：【万能果】x19和〖金豆〗x18（2亿银两）</p>";
} elseif($vip==19){   
echo "<p style='color: blue'>VIP19级：【万能果】x20和〖金豆〗x20（2亿银两）</p>";
} elseif($vip==20){   
echo "<p style='color: blue'>VIP20级：【万能果】x30和〖金豆〗x30（2亿银两）</p>";


}



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=520;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>兑换</p></a>"."<br>";




echo "<p style='color: black'>介绍：每天凌晨更新10份【神秘礼物】也是对广大玩家的福利每份礼物随机，领的越多东西越好！（只要在线就能获取）</p>"."<br>";






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


