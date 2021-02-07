<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用ltyeid.ini是否存在
include("./ini/ltymid_ini.php");


$inina="ltymid.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);
# 获取一个分类下某个子项的值
$ltymid=($iniFile->getItem('页面id','私聊页面'));
	
	
	
	
	
//ini文件名字
$inina="user.ini";
$path='ache/'.$wjid;
$ininame = $path."/".$inina;	
$iniFile = new iniFile($ininame);
$yymid=($iniFile->getItem('最后页面id','页面id'));

if($yymid==21||$yymid==22||$yymid==23||$yymid==24){
	//调用yl.ini是否存在
include("./ini/yl_ini.php");
$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包页面', ['页面id' => '24']);

$inina="ltymid.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);
# 获取一个分类下某个子项的值
$ym=($iniFile->getItem('页面id','私聊页面'));
$ym=1;
$iniFile->updItem('页面id', ['私聊页面' => $ym]);






}


	
	
	
	
	
	
	//调用sltt.ini是否存在
   
include("./ini/sltt_ini.php");
$inina="sltt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下所有数据
$ltpx=($iniFile->getCategory('玩家排序'));
# 获取一个分类下所有数据
$ltwjid=($iniFile->getCategory('玩家id'));
# 获取一个分类下所有数据
$ltwjvip=($iniFile->getCategory('玩家vip'));
# 获取一个分类下所有数据
$ltwjname=($iniFile->getCategory('玩家名字'));
# 获取一个分类下所有数据
$ltwjtake=($iniFile->getCategory('玩家发言'));









foreach(array_keys($ltwjid) as $key){
$keyltwjid[]=$ltwjid[$key];
}
foreach(array_keys($ltpx) as $key){
$keyltpx[]=$ltpx[$key];
}
foreach(array_keys($ltwjvip) as $key){
$keyltwjvip[]=$ltwjvip[$key];
}
foreach(array_keys($ltwjname) as $key){
$keyltwjname[]=$ltwjname[$key];
}
foreach(array_keys($ltwjtake) as $key){
$keyltwjtake[]=$ltwjtake[$key];
}



$tmp="排序";
$arr=$keyltpx;
foreach( $arr as $k=>$v) {
    if($tmp == $v) unset($arr[$k]);
}

$ltmax=max($arr);
$ltmin=0;


$m=count($ltpx,0)-1; 	
$ltsl1=$m/10;
if($ltsl1 >$ltymid){
if($ltymid >=2){
$ymsl=($ltymid-1)*10-1;
$ltsl=$m%10;
$ltmin1=min($arr);
$ltmin=$ltmin1+$ymsl+$ltsl-10;
$ltmax=$ltmin1+$ymsl+$ltsl;
	
	
} elseif($ltymid ==1){	
if($m >=10){
$ltmin=$ltmax-10;
} else{
$ltsl=$m%10;
$ltmin1=min($arr);
$ltmin=$ltmin1-1;
$ltmax=$ltmin1-1+$ltsl;
	

}

	}
		
} elseif($ltymid>$ltsl1){
$ltsl=$m%10;
$ltmin1=min($arr);
$ltmin=$ltmin1-1;
$ltmax=$ltmin1-1+$ltsl;

		
	}




echo "<p style='color: black'>私聊频道</p></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=24;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新信息</p></a>"."<br>";


if($m >=1){


$i=-1;
for($b=0;$b<10;$b++){
$i=$i+1;
if($ltmax ==$ltmin){
break;
}
$pxwjid[]= $keyltwjid[$ltmax];
$pxwjname[]=$keyltwjname[$ltmax];
$pxwjtake[]=$keyltwjtake[$ltmax];
$pxwjvip[]=$keyltwjvip[$ltmax];

echo "<p style='color: black'>['私聊']</p></a>";


$img='pic/vip/'."vip".$pxwjvip[$i].'.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
if($wjid==$pxwjid[$i]){

echo "<p style='color: black'>".$pxwjname[$i]."</p>";

} else{

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$pxwjid[$i];
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$pxwjname[$i]."</p></a>";

}

echo "<p style='color: black'>对你说：".$pxwjtake[$i]."</p><br>";


$ltmax=$ltmax-1;
}
	} else{	
	echo "<br>";	
	echo "<p style='color: red'>小轩Say：私聊世界还很清静！！</p><br>";
		echo "<br>";	
	echo "<p style='color: red'>没有了爱也没有了烦恼！！</p><br>";
	echo "<br>";	
		
		
}



if($ltymid!=1){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=40;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>首页</p></a>";
echo  "<p style='color: blue'>|</p></a>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=39;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>上页</p></a>";

$f=1;

}
$mcc=$m/10;
if($f>0&&$mcc>$ltymid){
echo  "<p style='color: blue'>|</p></a>";
}



$mcc=$m/10;
if($mcc>$ltymid){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=38;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>下页</p></a>";
echo  "<p style='color: blue'>|</p></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=41;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>末页</p></a>";
$f=1;
}

if($f>0){
echo "<br>";
}















echo "<p style='color: black'>-----------</p></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=21;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>公共</p></a>";

echo "<p style='color: black'>|</p></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=22;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>组队</p></a>";
echo "<p style='color: black'>|</p></a>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=23;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>国家</p></a>";

echo "<p style='color: black'>|</p></a>";

echo "<p style='color: black'>私聊</p></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";




echo "<p style='color: black'>----------------------</p></a>"."<br>";
//cmd及超链接值
include("fhgame.php");

}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>