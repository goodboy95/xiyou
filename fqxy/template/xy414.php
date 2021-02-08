<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


	
$hdid=31;
$npcc=$hdid;
include("./ini/hd_ini.php");
$hdcs=($iniFile->getItem('活动次数',$hdid));
$csts=$hdcs+1;

if($hdcs <10){


$hdcs=$hdcs+1;
$nowtime=date('Y-m-d H:i:s');
include("./sql/mysql.php");//调用数据库连接 
$q2="hd".$wjid;
$strsql = "update $q2 set hdtime='$nowtime',hdcs=$hdcs where hdid=$hdid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动时间', [$hdid => $nowtime]);
$iniFile->updItem('活动次数', [$hdid => $hdcs]);	









echo "<p style='color: black'>万恶的班主任：都说女子无才便是德，放屁~~这是谁说的你看看老师给你出的题就知道了（答对获取才子碎片x5）</p>"."<br>";
echo "<br>";


//随机出题

//随机
$bz= rand(1, 6);
if($bz ==1){
echo "<p style='color: black'>有两个人掉进了井里，死的人叫死人，活的人叫什么？</p>"."<br>";

echo "<p style='color: black'>A.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>活人</p></a>"."<br>";
echo "<p style='color: black'>B.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>救命</p></a>"."<br>";
echo "<p style='color: black'>C.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>生还者</p></a>"."<br>";
echo "<p style='color: black'>D.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>伤者</p></a>"."<br>";

} elseif($bz ==2){ 

echo "<p style='color: black'>动物园里谁是百兽之王？</p>"."<br>";

echo "<p style='color: black'>A.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>园长</p></a>"."<br>";
echo "<p style='color: black'>B.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>管理员</p></a>"."<br>";
echo "<p style='color: black'>C.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>狮子</p></a>"."<br>";
echo "<p style='color: black'>D.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>老虎</p></a>"."<br>";

} elseif($bz ==3){ 


echo "<p style='color: black'>一根针掉进了海里后，该怎么办？</p>"."<br>";

echo "<p style='color: black'>A.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>跳进海里捞</p></a>"."<br>";
echo "<p style='color: black'>B.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>再买一根</p></a>"."<br>";
echo "<p style='color: black'>C.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>不管它</p></a>"."<br>";
echo "<p style='color: black'>D.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>旧的不去，新的不来</p></a>"."<br>";




} elseif($bz ==4){ 

echo "<p style='color: black'>什么人的心肠最好？</p>"."<br>";

echo "<p style='color: black'>A.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=13;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>好人</p></a>"."<br>";
echo "<p style='color: black'>B.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>青年人</p></a>"."<br>";
echo "<p style='color: black'>C.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>身体健康的人</p></a>"."<br>";
echo "<p style='color: black'>D.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小轩~~最好</p></a>"."<br>";


} elseif($bz ==5){ 

echo "<p style='color: black'>小猫掉进了河里，大猫将其救起。问：小猫被救上岸时，会说什么？</p>"."<br>";

echo "<p style='color: black'>A.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>谢谢</p></a>"."<br>";
echo "<p style='color: black'>B.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>喵</p></a>"."<br>";
echo "<p style='color: black'>C.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>什么也不说</p></a>"."<br>";
echo "<p style='color: black'>D.</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=413;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>会跑掉</p></a>"."<br>";







} else{
	
	
echo "<p style='color: red'>班主任：(ˇˍˇ) 想～什么了，正在给你出题你居然也能睡着！！（被班主任套路了，无题可出）</p>"."<br>";
	
	
	
	
	
	

}
	
//随机出题


} else{	


echo "<p style='color: red'>班主任：你今日已没有答题机会了哦！！</p>"."<br>";
	
	








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















