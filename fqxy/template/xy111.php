<?php

//调用dw.ini是否存在
   
include("./ini/dw_ini.php");



//查询是否有队伍

$m=0;
$inina="dw.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
$dwid=($iniFile->getItem('队伍id','已加队伍id'));

$wjid1=$wjid;



if ($dwid>10000000){

if ($dwid!=$wjid1){
$wjid=$dwid;
} elseif($dwid!=$wjid1){
$wjid=$wjid1;
}




//调用dw.ini是否存在
include("./ini/dw_ini.php");

$inina="dw.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);


# 获取一个分类下所有数据
$ltpx=($iniFile->getCategory('玩家排序'));
# 获取一个分类下所有数据
$ltpxm=($iniFile->getCategory('玩家排序1'));
# 获取一个分类下所有数据
$ltwjid=($iniFile->getCategory('玩家id'));
# 获取一个分类下所有数据
$ltwjvip=($iniFile->getCategory('玩家vip'));
# 获取一个分类下所有数据
$ltwjname=($iniFile->getCategory('玩家名字'));
$dwid1=($iniFile->getItem('队伍id','已加队伍id'));

foreach(array_keys($ltwjid) as $key){
$keyltwjid[]=$ltwjid[$key];
}
foreach(array_keys($ltpx) as $key){
$keyltpx[]=$ltpx[$key];
}
foreach(array_keys($ltpxm) as $key){
$keyltpxm[]=$ltpxm[$key];
}
foreach(array_keys($ltwjvip) as $key){
$keyltwjvip[]=$ltwjvip[$key];
}
foreach(array_keys($ltwjname) as $key){
$keyltwjname[]=$ltwjname[$key];
}


$m=count($ltpx,0)-1; 	
$wjid=$wjid1;
echo "<p style='color: black'>当前队伍（".$m."/4）</p><br>";



$i=0;
for($b=0;$b<$m;$b++){

$i=$i+1;

if ($dwid1==$keyltwjid[$i]){
echo "<p style='color: black'>队长：</p>";
$img='pic/vip/'."vip".$keyltwjvip[$i].'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	

if ($wjid1==$keyltwjid[$i]){
	
	echo "<p style='color: black'>".$keyltwjname[$i]."</p>";
	
		} else{
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$keyltwjid[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$keyltwjname[$i]."</p></a>";

	}







echo "</br>";
	}


}
	
	
$i=0;

for($b=0;$b<$m;$b++){
$i=$i+1;

if ($dwid1!=$keyltwjid[$i]){
	
echo "<p style='color: black'>队员：</p>";


$img='pic/vip/'."vip".$keyltwjvip[$i].'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	

if ($wjid1==$keyltwjid[$i]){
	
	echo "<p style='color: black'>".$keyltwjname[$i]."</p>";
	
		} else{
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$keyltwjid[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$keyltwjname[$i]."</p></a>";

	}
	
	
	if ($wjid1==$dwid1){
	
echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=112;
$npc[]=$keyltwjid[$i];

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>踢出</p></a>"."<br>";
	} else{
		

echo "</br>";
	} 


	}



}


	
	if ($wjid1==$dwid1){
	echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=113;
$npc[]=$wjid1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>解散队伍</p></a>"."<br>";
	} else{
		echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=113;
$npc[]=$dwid1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>离开队伍</p></a>"."<br>";
	} 

	

	
	


	} else{
echo "<p style='color: black'>我的队伍：</p><br>";
echo "<p style='color: black'>当前还未有队伍</p><br>";
	}





	$wjid=$wjid1;


echo "</br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";




echo "<p style='color: black'>----------------------</p></a>"."<br>";
//cmd及超链接值
include("fhgame.php");


?>








