<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
//调用yl.ini是否存在
   
include("./ini/yl_ini.php");

//调用zt.ini是否存在
   
include("./ini/zt_ini.php");
//调用bbrl.ini是否存在
   
include("./ini/bbrl_ini.php");
//调用ckrl.ini是否存在
      //保存页面id方便分页存入
if($cmdd==261||$cmdd==262||$cmdd==263||$cmdd==264||$cmdd==265||$cmdd==266||$cmdd==267||$cmdd==268||$cmdd==269){
$inina="yl.ini";
$path='ache/'.$wjid;
$file = $path."/".$inina;	


# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($file);

# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('背包页面', ['页面id' => $cmdd]);
}

include("./ini/ckrl_ini.php");

echo "<font color=black>请选择你要存入仓库的物品</font>"."<br>";

//ini文件名字
$inina="zt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);

# 获取一个分类下多个子项的值
$wjxx=($iniFile->getItem('玩家信息',['背包容量','仓库容量']));
$bbrlb=$wjxx['背包容量'];

$cbbrlb=$wjxx['仓库容量'];
include("wp/bbrl.php");
echo "<font color=black>物品负重：".$bbrla."/".$bbrlb."</font></a>"."<br>";

include("wp/ckrl.php");
echo "<font color=black>仓库容量：".$bbrla1."/".$cbbrlb."</font></a>"."<br>";



//调用wp.ini是否存在
   
include("./ini/qt_ini.php");


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=261;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>书卷</font></a>";
echo"<font color=black>|</font></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=262;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>材料</font></a>";
echo"<font color=black>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=263;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>装备</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=264;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>商城</font></a>";

echo"<font color=black>|</font></a>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=265;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>丹药</font></a>";

echo"<font color=black>|</font></a>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=266;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>任务</font></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=267;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>农场</font></a>";
echo"<font color=black>|</font></a>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=268;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>宝箱</font></a>";
echo"<font color=black>|</font></a>";




echo"<font color=black>其他</font></a>"."<br>";


//ini文件名字
$inina="qt.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件



$iniFile = new iniFile($ininame);




# 修改一个分类下子项的值(也可以修改多个)
$iniFile->updItem('其他数量', ['初始' => 35]);



# 获取一个分类下所有数据
$wpid=($iniFile->getCategory('其他id'));
# 获取一个分类下所有数据
$wpmz=($iniFile->getCategory('其他名字'));

# 获取一个分类下所有数据
$wpsl=($iniFile->getCategory('其他数量'));

$m=count($wpid,0)-1; 
$i=0;

$ym=$wpid['初始'];

$km=0;





//将ini值存入数组方便使用
foreach(array_keys($wpmz) as $key){
$keywpmz[]=$wpmz[$key];
}
foreach(array_keys($wpsl) as $key){
$keywpsl[]=$wpsl[$key];
}
foreach(array_keys($wpid) as $key){
$keywpid[]=$wpid[$key];
}
//将ini值存入数组方便使用









for($d=0;$d<$m;$d++){
$i=$i+1;

$ivd=$keywpid[$i];
$mvz=$keywpmz[$i];
$svl=$keywpsl[$i];



$mmz[]=$mvz;
$ssl[]=$svl;
$iid[]=$ivd;
$km=$km+1;
$mz[]=$mvz;






}






$i=-2;
$mcc=$km/10;


if($mcc>=$ym){


for($x=0;$x<=9;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=273;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=276;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>存入</font></a>"."<br>";





}


} else{
if($ym>1){
$mcc=$km%10-1;

for($x=0;$x<=$mcc;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];
$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=273;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=276;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>存入</font></a>"."<br>";



}
} else{
$i=-2;
for($x=0;$x<=$km-1;$x++){
$i=$i+1;
$clname= $mz[$ym*10-9+$i];


$cl=$ssl[$ym*10-9+$i];
$xxid=$iid[$ym*10-9+$i];
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=273;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>$clname</font></a>"."<font color=blue>x$cl|</font>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=276;
$npc[]=$xxid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>存入</font></a>"."<br>";




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
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>首页</font></a>";
echo  "<font color=blue>|</font></a>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=39;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>上页</font></a>";

$f=1;

}
$mcc=$km/10;
if($f>0&&$mcc>$ym){
echo  "<font color=blue>|</font></a>";
}



$mcc=$km/10;
if($mcc>$ym){

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=38;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>下页</font></a>";
echo  "<font color=blue>|</font></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=41;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>末页</font></a>";
$f=1;
}

if($f>0){
echo "<br>";
}


echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=260;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回仓库</font></a>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";





echo "<font color=black>----------------------</font></a>"."<br>";
//cmd及超链接值
include("fhgame.php");


}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini
?>