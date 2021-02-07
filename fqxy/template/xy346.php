<?php
//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){






$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
//include("./wp/zbxx.php");
include("./ini/zbb_ini.php");
$xj=($iniFile->getItem('装备星级',$zbid));




if($xj>=0&&$xj<=71){
include("./zbdz/xycl.php");
if($cgl!=0){
include("./ini/sc_ini.php");
$xyc1=($iniFile->getItem('商城数量','126'));
if($xyc1==""){
$xyc1=($iniFile->getItem('商城数量','307'));
} 



//幸运草几率
if($xyc1!=""){
$xyc=5;
} elseif($xyc1!=""){   
$xyc=10;
} else{
$xyc=0;
}
$cgl1=$cgl;
$cgl=$cgl+$xyc;


if($cgl>=100){
$cgl=100;
}
} 










echo "<p style='color: black'>升星下一级所需材料和费用如下：</p></a>"."<br>";
echo "<p style='color: black'>材料：".$xycl."</p></a>"."<br>";
echo "<p style='color: black'>费用：".$xyyl."</p></a>"."<br>";



if($xyc1!=""&&$cgl1!=100){
echo "<p style='color: black'>成功率：".$cgl."%</p><p style='color: red'>（附带幸运草提升几率）</p></a>"."<br>";
} else{
echo "<p style='color: black'>成功率：".$cgl."%</p></a>"."<br>";
}



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=77;
$npc[]=$zbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【开始升星】</p></a>"."<br>";


echo "<p style='color: black'>温馨提示：材料升星会自动消耗掉提升成功率幸运草不需要请放置仓库！升星失败会造成装备掉星！</p></a>"."<br>";


} else{
	
	
echo "<p style='color: red'>该装备已是目前满星级装备无需继续提升了！！</p></a>"."<br>";



}





echo "<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=83;
$npc[]=$zbid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回装备</p></a>"."<br>";


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