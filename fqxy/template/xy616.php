<?php
$zlid=$npcc;
/////////公共锁
$path='acher/lock';//路径
$lockmz='ltbw_lock.txt';//文件
include("./ini/all_lock.php");
/////////公共锁

if($all_lock2==1){

if($zlid==1){
$ltpmms="【武道大会◎第一名】";	
} elseif ($zlid==2) {
$ltpmms="【武道大会◎第二名】";	
} elseif ($zlid==3) {
$ltpmms="【武道大会◎第三名】";	
} elseif ($zlid==4) {
$ltpmms="【武道大会◎第四名】";	
} elseif ($zlid==5) {
$ltpmms="【武道大会◎第五名】";	
} elseif ($zlid==6) {
$ltpmms="【武道大会◎第六名】";	
} elseif ($zlid==7) {
$ltpmms="【武道大会◎第七名】";	
} elseif ($zlid==8) {
$ltpmms="【第八名】";	
} elseif ($zlid==9) {
$ltpmms="【武道大会◎第九名】";	
} elseif ($zlid==10) {
$ltpmms="【武道大会◎第十名】";	
} else{	
$ltpmms="【未取得信息】";	
} 

echo "<p style='color: red'>".$ltpmms."</p>"."<br>";

echo "<br>";


include("./ini/ltbw_ini.php");
# 获取一个分类下某个子项的值
$ltmz0=($iniFile->getItem('占领玩家id',$zlid));
if($ltmz0>10000000){
$ltmz01=($iniFile->getItem('占领玩家',$zlid));
$ltmz02=($iniFile->getItem('占领时间',$zlid));
$ltmz03=($iniFile->getItem('占领膜拜',$zlid));
$ltmz04=($iniFile->getItem('比武hp',$zlid));
$ltmz05=($iniFile->getItem('比武攻击',$zlid));
$ltmz06=($iniFile->getItem('比武魔攻',$zlid));
$ltmz07=($iniFile->getItem('比武防御',$zlid));
$ltmz08=($iniFile->getItem('比武门派',$zlid));

$mgg = ceil(($djmg)/ 1.3);


echo "<p style='color: black'>名字：".$ltmz01."</p>"."<br>";

if($ltmz08>=1){
if($ltmz08==1){
$menp="将军府";
} elseif($ltmz08==2){
$menp="龙宫";
} elseif($ltmz08==3){
$menp="月宫";
} elseif($ltmz08==4){
$menp="方寸山";
} elseif($ltmz08==5){
$menp="普陀山";
} else{
$menp="无门派";
}	
echo "<p style='color: black'>门派：</p>".$menp."<br>";
} else{
echo "<p style='color: black'>门派：无门派</p><br>";
}
$gjj = ceil(($ltmz05)/ 1.3);
$maxgj=$ltmz05;
$mgg = ceil(($ltmz06)/ 1.3);
$maxmg=$ltmz06;
$fyy = ceil(($ltmz07)/ 1.3);
$maxfy=$ltmz07;

echo "<p style='color: black'>HP：".$ltmz04."</p>"."<br>";
echo "<p style='color: black'>攻击：".$gjj."-".$maxgj."</p>"."<br>";
echo "<p style='color: black'>魔攻：".$mgg."-".$maxmg."</p>"."<br>";
echo "<p style='color: black'>防御：".$fyy."-".$maxfy."</p>"."<br>";
echo "<p style='color: black'>受人膜拜：".$ltmz03."次</p>"."<br>";
echo "<p style='color: black'>比武时间：".$ltmz02."</p>"."<br>";


$startdate=$ltmz02;
$enddate=date('Y-m-d H:i:s');
$minute=floor((strtotime($enddate)-strtotime($startdate)));
$time1=floor($minute/60);
$time2=floor($minute%60);
$time3=floor($time1/60);
$time4=floor($time3/24);
if($time4 > 0){	
$time5=$time3%24;
$bossts=$time4."天".$time5."小时";	
} else{
if($time3 > 0){	
$second=$time1%60;
$bossts=$time3."时".$second."分";	
} else{
if($time1 >0){
$bossts=$time1."分钟";	
} else{
$bossts=$time2."秒";		
} 
} 
}
echo "<p style='color: black'>独占风骚：</p><p style='color: red'>".$bossts."</p>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=621;
$npc[]=$zlid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>膜拜他/她</p></a>"."<p style='color: black'></p>"."<br>";





} else{	

echo "<p style='color: black'>目前无任何玩家（点击比武即可属于你）</p>"."<br>";


}


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=402;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<p style='color: black'></p>"."<br>";








//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<p style='color: black'></p>"."<br>";


echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");
}

//解锁当前使用的ini
include("./ini/all_lock1.php");
//解锁当前使用的ini

?>