<?php


//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


echo "<p style='color: black'>我的宠物如下：</p>"."<br>";

# 修改一个分类下子项的值(也可以修改多个)
$ymid=($iniFile->getItem('背包页面','页面id'));
//调用cw.ini是否存在
include("./ini/yl_ini.php");
$iniFile->updItem('背包页面', ['页面id' => '362']);
//调用cw.ini是否存在
include("./ini/cw_ini.php");
# 获取一个分类下所有数据
$xl=($iniFile->getCategory('序列'));
$id=($iniFile->getCategory('id'));
$cwid=($iniFile->getCategory('宠物id'));
$cwmz=($iniFile->getCategory('宠物原始名字'));
$cwxj=($iniFile->getCategory('宠物星级'));
$cwcz=($iniFile->getCategory('宠物出战状态'));
$cwby=($iniFile->getCategory('宠物变异'));
$cwbx=($iniFile->getCategory('宠物品质'));
$m=count($xl,0)-1; 
$ym=$cwid['初始'];
$km=$m;
$kmcs=$cwmz['初始'];

echo "<p style='color: black'>容量：（".$km."/".$kmcs."）</p>"."<br>";

if($m>=1){
//将ini值存入数组方便使用
foreach(array_keys($cwid) as $key){
$keycwid[]=$cwid[$key];
}
foreach(array_keys($cwmz) as $key){
$keycwmz[]=$cwmz[$key];
}
foreach(array_keys($cwxj) as $key){
$keycwxj[]=$cwxj[$key];
}
foreach(array_keys($cwcz) as $key){
$keycwcz[]=$cwcz[$key];
}
foreach(array_keys($cwby) as $key){
$keycwby[]=$cwby[$key];
}
foreach(array_keys($cwbx) as $key){
$keycwbx[]=$cwbx[$key];
}






















$i=-1;

for($x=0;$x<=9;$x++){	

$i=$i+1;
$clname= $keycwmz[$ym*10-9+$i];
$str=$keycwid[$ym*10-9+$i];
$zbxjj=$keycwxj[$ym*10-9+$i];
$cwczqq=$keycwcz[$ym*10-9+$i];
$cw19x=$keycwby[$ym*10-9+$i];
$cw04x=$keycwbx[$ym*10-9+$i];
if($cw04x==1){
$cw04x="";	
} elseif($cw04x==2){  
$cw04x="<p style='color: red'>['极品']</p>";
} elseif($cw04x==3){  
$cw04x="<p style='color: red'>['灵品']</p>";
} elseif($cw04x==4){  
$cw04x="<p style='color: red'>['仙品']</p>";
} elseif($cw04x==5){  
$cw04x="<p style='color: red'>['神品']</p>";
} elseif($cw04x==6){  
$cw04x="<p style='color: red'>['圣品']</p>";
} else{	
$cw04x="";	
}

if($cw19x==1){
$cw19x="";	
} elseif($cw19x==2){  
$cw19x="<p style='color: red'>['一变']</p>";
} elseif($cw19x==3){  
$cw19x="<p style='color: red'>['二变']</p>";
} elseif($cw19x==4){  
$cw19x="<p style='color: red'>['三变']</p>";
} elseif($cw19x==5){  
$cw19x="<p style='color: red'>['四变']</p>";
} elseif($cw19x==6){  
$cw19x="<p style='color: red'>['五变']</p>";
} else{	
$cw19x="";	
}





$ik=$ym*10-9+$i;
include("wp/zbxj.php");
if($clname){


echo "<p style='color: black'>".$ik.".</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=365;
$npc[]=$str;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$xjname.$clname.$cw19x.$cw04x."</p></a>";
if($cwczqq==1){
echo "<p style='color: black'>（休息中）</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=363;
$npc[]=$str;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>出战</p></a>"."<br>";
} else{	
echo "<p style='color: black'>（出战中）</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=364;
$npc[]=$str;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>休息</p></a>"."<br>";
} 
}
}	














$f=0;

if($ym!=1){
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
$mcc=$km/10;
if($f>0&&$mcc>$ym){
echo  "<p style='color: blue'>|</p></a>";
}



$mcc=$km/10;
if($mcc>$ym){

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












} else{	

echo "<p style='color: black'>你还未获得任何宠物</p>"."<br>";
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



