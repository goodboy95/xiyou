<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
	
	
echo "<p style='color: black'>我的挂售</p></a>"."<br>";

//调用gsrl.ini是否存在
include("./ini/gsrl_ini.php");
//调用zt.ini是否存在
include("./ini/zt_ini.php");
# 获取一个分类下多个子项的值
$gsrlb=($iniFile->getItem('玩家信息','挂售容量'));
include("wp/gsrl.php");
echo "<p style='color: black'>挂售容量：".$gsbbrla."/".$gsrlb."</p></a>"."<br>";



//保存页面id方便分页使用
if($cmdd==229){
//调用yl.ini是否存在
include("./ini/yl_ini.php");
# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包页面', ['页面id' => $cmdd]);


}
	
	
//调用gszb.ini是否存在
include("./ini/gszb_ini.php");
	
# 获取一个分类下所有数据
$zbid=($iniFile->getCategory('装备id'));
$xl=($iniFile->getCategory('序列'));
$id=($iniFile->getCategory('id'));
# 获取一个分类下所有数据
$zbmz=($iniFile->getCategory('装备名字'));

$zbxj=($iniFile->getCategory('装备星级'));

$zbk1=($iniFile->getCategory('装备孔1'));
$zbk2=($iniFile->getCategory('装备孔2'));
$zbk3=($iniFile->getCategory('装备孔3'));
$zbk4=($iniFile->getCategory('装备孔4'));
$zbk5=($iniFile->getCategory('装备孔5'));

$zbxq1=($iniFile->getCategory('装备镶嵌1'));
$zbxq2=($iniFile->getCategory('装备镶嵌2'));
$zbxq3=($iniFile->getCategory('装备镶嵌3'));
$zbxq4=($iniFile->getCategory('装备镶嵌4'));
$zbxq5=($iniFile->getCategory('装备镶嵌5'));
$wpjg=($iniFile->getCategory('挂售价格'));

$m=count($zbid,0)-1; 

if($m>0){
$ym=$zbid['初始'];


$km=0;
$i=0;





//将ini值存入数组方便使用
foreach(array_keys($zbmz) as $key){
$keyzbmz[]=$zbmz[$key];
}
foreach(array_keys($zbid) as $key){
$keyzbid[]=$zbid[$key];

}
foreach(array_keys($zbxj) as $key){
$keyzbxj[]=$zbxj[$key];
}
foreach(array_keys($zbk1) as $key){
$keyzbk1[]=$zbk1[$key];
}
foreach(array_keys($zbk2) as $key){
$keyzbk2[]=$zbk2[$key];
}

foreach(array_keys($zbk3) as $key){
$keyzbk3[]=$zbk3[$key];
}

foreach(array_keys($zbk4) as $key){
$keyzbk4[]=$zbk4[$key];
}
foreach(array_keys($zbk5) as $key){
$keyzbk5[]=$zbk5[$key];
}
foreach(array_keys($zbxq1) as $key){
$keyzbxq1[]=$zbxq1[$key];
}
foreach(array_keys($zbxq2) as $key){
$keyzbxq2[]=$zbxq2[$key];
}
foreach(array_keys($zbxq3) as $key){
$keyzbxq3[]=$zbxq3[$key];
}
foreach(array_keys($zbxq4) as $key){
$keyzbxq4[]=$zbxq4[$key];
}
foreach(array_keys($zbxq5) as $key){
$keyzbxq5[]=$zbxq5[$key];
}
foreach(array_keys($wpjg) as $key){
$keywpjg[]=$wpjg[$key];
}
//将ini值存入数组方便使用














for($d=0;$d<=$m;$d++){
$i=$i+1;

$idd[]=$keyzbid[$i];

$gsjg[]=$keywpjg[$i];

$mz[]=$keyzbmz[$i];
$xvjj=$keyzbxj[$i];
include("wp/zbxj.php");
$xvj[]=$xjname;



$zbkk1=$keyzbk1[$i];
$zbkk2=$keyzbk2[$i];
$zbkk3=$keyzbk3[$i];
$zbkk4=$keyzbk4[$i];
$zbkk5=$keyzbk5[$i];

$zbxqq1=$keyzbxq1[$i];
$zbxqq2=$keyzbxq2[$i];
$zbxqq3=$keyzbxq3[$i];
$zbxqq4=$keyzbxq4[$i];
$zbxqq5=$keyzbxq5[$i];

//装备名字前加镶嵌的宝石
include("wp/xbs.php");
$xxbs[]=$xbs;




$km=$km+1;

}



$i=-2;
$mcc=$km/10-0.1;

if($mcc>=$ym){


for($x=0;$x<=9;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$str=$idd[$ym*10-9+$i];
$xxxbs=$xxbs[$ym*10-9+$i];
$zbxjj=$xvj[$ym*10-9+$i];
$gsjgg=$gsjg[$ym*10-9+$i];
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=230;
$npc[]=$str;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$zbxjj.$xxxbs.$clname."</p></a>"."<p style='color: blue'>（".$gsjgg."两）|</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=231;
$npc[]=$str;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>下架</p></a>"."<br>";


}


} else{
if($ym>1){
$mcc=$km%10-1-0.1;

for($x=0;$x<=$mcc;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$str=$idd[$ym*10-9+$i];
$xxxbs=$xxbs[$ym*10-9+$i];
$zbxjj=$xvj[$ym*10-9+$i];
$gsjgg=$gsjg[$ym*10-9+$i];
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=230;
$npc[]=$str;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$zbxjj.$xxxbs.$clname."</p></a>"."<p style='color: blue'>（".$gsjgg."两）|</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=231;
$npc[]=$str;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>下架</p></a>"."<br>";

}

} else{
$i=-2;
for($x=0;$x<=$km-1;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$str=$idd[$ym*10-9+$i];
$xxxbs=$xxbs[$ym*10-9+$i];
$zbxjj=$xvj[$ym*10-9+$i];
$gsjgg=$gsjg[$ym*10-9+$i];

if($clname){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=230;
$npc[]=$str;

echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$zbxjj.$xxxbs.$clname."</p></a>"."<p style='color: blue'>（".$gsjgg."两）|</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=231;
$npc[]=$str;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>下架</p></a>"."<br>";

}
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
$mcc=$km/10-0.1;
if($f>0&&$mcc>$ym){
echo  "<p style='color: blue'>|</p></a>";
}



$mcc=$km/10-0.1;
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


echo "<p style='color: black'>暂时无任何挂售的装备</p></a>"."<br>";


}






echo "<br>";
	
	
	

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=225;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<br>";

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
