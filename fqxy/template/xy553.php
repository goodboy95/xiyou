<?php


//阻塞代码防止出现脏数据

$zspd=0;
$zsspd=0;
$ininalock="phb13";


   //路径
$path='acher/phb';
$gglockname=$path."/".$ininalock;

for($x=0;$x<=30;$x++){

$fp = fopen($gglockname, "w+");
if(flock($fp,LOCK_EX | LOCK_NB)){
  $zsspd=1;
 //usleep(800);
 
 
 flock($fp,LOCK_EX);

  break;
}else{
	//排队等待
	//延时200毫秒

	usleep(200000);
	$zspd=$zspd+1;//五秒内没获得锁则提示服务器繁忙
	if($zspd>=25){
	$zsspd=2;	
	  break;
	}

}

}




if($zsspd==1){









include("./ini/phb13_ini.php");



$phbzz2=($iniFile->getCategory('排行榜值2'));
$phbzz4=($iniFile->getCategory('排行榜值4'));
$hm=0;

$ik=0;
$hm=count($phbzz2,0); 
echo "<p style='color: black'>【新区开区活动积分排名前10名玩家】</p></a>"."<br>";
echo "<p style='color: black'>活动时间：11.26-12.02（23:50）</p></a>"."<br>";
if($hm>=1){


foreach(array_keys($phbzz2) as $key){
$keyphbzz2[]=$phbzz2[$key];
}

foreach(array_keys($phbzz4) as $key){
$keyphbzz4[]=$phbzz4[$key];
}

$mt=0;
for($b=0;$b<$hm;$b++){
$xb[]=$keyphbzz2[$mt]*10000+$keyphbzz4[$mt];
$fb[]=$keyphbzz2[$mt]*10000;


$mt=$mt+1;

}

if ($hm>0){
rsort($fb);
rsort($xb);

}


$mt=0;
for($b=0;$b<$hm;$b++){

$xbb[]=$xb[$mt]-$fb[$mt];
$mt=$mt+1;
}
$mm=0;
$i=-1;
for($b=0;$b<$hm;$b++){
$i=$i+1;
$xbbb=$xbb[$i];

$phmz[]=($iniFile->getItem('排行榜名字',$xbbb));
$phidd[]=($iniFile->getItem('排行榜值1',$xbbb));
$phsx[]=($iniFile->getItem('排行榜值2',$xbbb));
$vvip[]=($iniFile->getItem('排行榜值3',$xbbb));

}














$i=-1;
for($d=0;$d<$hm-1;$d++){
$i=$i+1;

$ik=$ik+1;


echo "<p style='color: black'>".$ik.".</p>";

$img='pic/vip/'."vip".$vvip[$i].'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
	

if ($wjid==$phidd[$i]){

	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$phidd[$i];
echo "<p style='color: red'>".$phmz[$i]."</p></a>";
echo "<p style='color: red'>&nbsp&nbsp&nbsp[".$phsx[$i]."]</p>";
} else{
	//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$phidd[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$phmz[$i]."</p></a>";
echo "<p style='color: black'>&nbsp&nbsp&nbsp[".$phsx[$i]."]</p>";
echo $phidd[$i];



} 
	/*
if ($ik==1){
echo "<p style='color: red'>[奖励8888金豆]</p>";
} elseif($ik==2){ 
echo "<p style='color: red'>[奖励3000金豆]</p>";
} elseif($ik==3){ 
echo "<p style='color: red'>[奖励1200金豆]</p>";
} elseif($ik==4){ 
echo "<p style='color: red'>[奖励500金豆]</p>";
} elseif($ik==5){ 
echo "<p style='color: red'>[奖励360金豆]</p>";
} elseif($ik==6){ 
echo "<p style='color: red'>[奖励300金豆]</p>";
} elseif($ik==7){ 
echo "<p style='color: red'>[奖励220金豆]</p>";
} elseif($ik==8){ 
echo "<p style='color: red'>[奖励160金豆]</p>";
} elseif($ik==9){ 
echo "<p style='color: red'>[奖励100金豆]</p>";
} elseif($ik==10){ 
echo "<p style='color: red'>[奖励50金豆]</p>";
}

*/


echo "</br>";
if ($ik>=10){
	break;
	}
	
	
	
	
}

 

 
 
 
 } else{	
echo "<p style='color: black'>目前还无人上榜</p>"."<br>";

}

 
 
 echo "</br>";
 
 
 
 
 
 
 
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=57;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回排行</p></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";






echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 flock($fp,LOCK_UN);
	} else{	

echo "服务器开小差了";





}









