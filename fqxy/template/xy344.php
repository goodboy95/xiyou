<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){
include("./ini/zt_ini.php");
$wjdj=($iniFile->getItem('玩家信息','等级'));





$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$zbid=$npcc."_".$npccid;
$wpidd=$npcc;
$cwid1=$arr[2];
$cwid2=$arr[3];
$cwid3=$cwid1."_".$cwid2;
//下一个装备阶段描述
include("./zbdz/zbms.php");//装备描述
$npcc=$ms3;

if($ms1!="暂时无法升级"){

include("./wp/zbxx.php");//装备描述
echo "<p style='color: black'>可升级为：".$ms1."</p></a>"."<br>";
echo "<p style='color: blue'>可佩带等级：".$wp24."级</p></a>"."<br>";
echo "<p style='color: black'>升级所需：".$ms2."</p></a>"."<br>";
} else{	
echo "<p style='color: red'>此装备不能升级了（封印状态）</p></a>"."<br>";
} 




if($ms1!="暂时无法升级"){

if($wjdj>=$wp24){


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=90;
$npc[]=$zbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【确定升级】</p></a>"."<br>";

echo "<p style='color: black'>温馨提示：装备成功升级后会保留原有升星及孔数</p></a>"."<br>";
} else{	
echo "<p style='color: red'>【确定升级】（封印状态-你的等级不足）</p></a>"."<br>";


} 
}




















echo "<br>";

if($cwid1!=""){
$cwid3=$zbid."_".$cwid3;

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=367;
$npc[]=$cwid3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回装备</p></a>"."<br>";
	
} else{	
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$zbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回装备</p></a>"."<br>";
} 

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";


echo "----------------------"."<br>";
//cmd及超链接值
include("fhgame.php");



}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini




?>