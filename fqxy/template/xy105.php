<?php

//阻塞代码防止出现脏数据//自己的id锁
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
$wjid1=$wjid;
$ckid=$npcc;
$wjid=$ckid;

$ininalock2=$wjid."_lock".".txt";//对方的id锁
include("./ini/ozsini.php");
if($zsspd==1&&$zsspd2==1){

//查询是否有出战宠物
include("./ini/cw_ini.php");
$ncwcz=($iniFile->getCategory('宠物出战状态'));
$m=count($ncwcz,0)-1; 
if($m>=1){
$ncwczid1=($iniFile->getCategory('宠物id'));	
foreach(array_keys($ncwcz) as $key){
$ncwcz1[]=$ncwcz[$key];
}
foreach(array_keys($ncwczid1) as $key){
$ncwcz3[]=$ncwczid1[$key];
}
$i=-1;
for($x=0;$x<=$m;$x++){	
$i=$i+1;
if($ncwcz1[$i]==2){
$ncwidd=$ncwcz3[$i];
$ncwcz2=2;	
break;
} 
} 
} else{
$ncwcz2=1;		
} 

if($ncwcz2==2){




$zbid=$ncwidd;
$arr = explode("_",$ncwidd);
$npcc=$arr[0];
$npccid=$arr[1];
$cwidd=$npcc."_".$npccid;


if($npccid!=""){

//调用cw.ini是否存在
include("./ini/cw_ini.php");
$cw01x=($iniFile->getItem('宠物原始名字',$zbid));
$cw02x=($iniFile->getItem('宠物名字',$zbid));

if($cw02x==""){
$cw02x="无";	
}

$cw03x=($iniFile->getItem('宠物星级',$zbid));
$cw04x=($iniFile->getItem('宠物品质',$zbid));

if($cw04x==1){
$cw04x="<p style='color: black'>品质：普品</p><br>";
} elseif($cw04x==2){  
$cw04x="<p style='color: red'>品质：极品</p><br>";
} elseif($cw04x==3){  
$cw04x="<p style='color: red'>品质：灵品</p><br>";
} elseif($cw04x==4){  
$cw04x="<p style='color: red'>品质：仙品</p><br>";
} elseif($cw04x==5){  
$cw04x="<p style='color: red'>品质：神品</p><br>";
} elseif($cw04x==6){  
$cw04x="<p style='color: red'>品质：圣品</p><br>";
} else{	
$cw04x="<p style='color: black'>品质：普品</p><br>";
}






$cw05x=($iniFile->getItem('宠物hp',$zbid));
$cw06x=($iniFile->getItem('宠物maxhp',$zbid));
$cw07x=($iniFile->getItem('宠物mp',$zbid));
$cw08x=($iniFile->getItem('宠物maxmp',$zbid));
$cw09x=($iniFile->getItem('宠物攻击',$zbid));
$cw10x=($iniFile->getItem('宠物魔攻',$zbid));
$cw11x=($iniFile->getItem('宠物防御',$zbid));
$cw12x=($iniFile->getItem('宠物冰攻',$zbid));
$cw13x=($iniFile->getItem('宠物火攻',$zbid));
$cw14x=($iniFile->getItem('宠物雷攻',$zbid));
$cw15x=($iniFile->getItem('宠物冰防',$zbid));
$cw16x=($iniFile->getItem('宠物火防',$zbid));
$cw17x=($iniFile->getItem('宠物雷防',$zbid));
$cw18x=($iniFile->getItem('宠物雷防',$zbid));
$cw19x=($iniFile->getItem('宠物变异',$zbid));
$cw20x=($iniFile->getItem('宠物等级',$zbid));
if($cw19x==1){
$cw19x="<p style='color: black'>变异：无变异</p><br>";
} elseif($cw19x==2){  
$cw19x="<p style='color: red'>变异：一级变异</p><br>";
} elseif($cw19x==3){  
$cw19x="<p style='color: red'>变异：二级变异</p><br>";
} elseif($cw19x==4){  
$cw19x="<p style='color: red'>变异：三级变异</p><br>";
} elseif($cw19x==5){  
$cw19x="<p style='color: red'>变异：四级变异</p><br>";
} elseif($cw19x==6){  
$cw19x="<p style='color: red'>变异：五级变异</p><br>";
} else{	
$cw19x="<p style='color: black'>变异：无变异</p><br>";
}
$zbid=$cwidd;

include("./wj/cwztt.php");
echo "<p style='color: red'>品种：".$cw01x."</p><br>";



echo $cw04x;
echo $cw19x;
echo "<p style='color: black'>昵称：【".$cw02x."】</p><br>";


echo "<p style='color: black'>星级：极品".$cw03x."星</p><br>";
echo  "<p style='color: black'>等级：".$cw20x."&nbsp&nbsp级</p><br>";
echo  "<p style='color: black'>HP：".$cw05x."/".$cwxx1['血']."</p><br>";
echo  "<p style='color: black'>MP：".$cwxx1['蓝']."/".$cwxx1['蓝']."</p><br>";
echo "<p style='color: black'>攻击：".$cwxx1['攻击']."-".$cwxx1['max攻击']."</p><br/>";
echo "<p style='color: black'>魔攻：".$cwxx1['魔攻']."-".$cwxx1['max魔攻']."</p><br/>";
echo "<p style='color: black'>防御：".$cwxx1['防御']."-".$cwxx1['max防御']."</p><br/>";
echo  "<p style='color: black'>攻击元素：冰+</p>".$cwxx1['冰攻']."<p style='color: black'>&nbsp火+</p>".$cwxx1['火攻']."<p style='color: black'>&nbsp雷+</p>".$cwxx1['雷攻']."<br>";
echo  "<p style='color: black'>防御元素：冰+</p>".$cwxx1['冰防']."<p style='color: black'>&nbsp火+</p>".$cwxx1['火防']."<p style='color: black'>&nbsp雷+</p>".$cwxx1['雷防']."<br>";

} else{
$wjid=$wjid1;	
	
echo "<p style='color: red'>宠物有误！！请联系GM解决此问题</p>"."<br>";

echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";
}





} else{
echo "<p style='color: black'>对方没有出战的宠物</p><br>";
} 




$wjid=$wjid1;






echo "<br>";





//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=93;
$npc[]=$ckid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a><br>";







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
include("./ini/ojsini.php");
//解锁当前使用的ini

?>