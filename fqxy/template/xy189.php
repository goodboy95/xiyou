<?php


echo "<p style='color: black'>['攻城-地图']</p>"."<br>";

//调用选择的位置信息
if($npcc ==1){
echo "<p style='color: black'>所选位置:密室(0,0)</p>"."<br>";
} elseif($npcc ==2){
echo "<p style='color: black'>所选位置:神兽守卫(1,0)</p>"."<br>";
} elseif($npcc ==3){
echo "<p style='color: black'>所选位置:神兽守卫(1,1)</p>"."<br>";
} elseif($npcc ==4){
echo "<p style='color: black'>所选位置:无名(1,2)</p>"."<br>";



} elseif($npcc ==5){
echo "<p style='color: black'>所选位置:神兽守卫(2,0)</p>"."<br>";
} elseif($npcc ==6){
echo "<p style='color: black'>所选位置:神兽守卫(2,1)</p>"."<br>";
} elseif($npcc ==7){
echo "<p style='color: black'>所选位置:中门(2,2)攻破中门才可进入密室</p>"."<br>";
} elseif($npcc ==8){
echo "<p style='color: black'>所选位置:无名(2,3)</p>"."<br>";
} elseif($npcc ==9){
echo "<p style='color: black'>所选位置:攻方墓地(2,5)</p>"."<br>";
} elseif($npcc ==10){
echo "<p style='color: black'>所选位置:无名(2,6)</p>"."<br>";
} elseif($npcc ==11){
echo "<p style='color: black'>所选位置:无名(3,2)</p>"."<br>";
} elseif($npcc ==12){
echo "<p style='color: black'>所选位置:大门(3,3)攻破大门才可进入城池</p>"."<br>";
} elseif($npcc ==13){
echo "<p style='color: black'>所选位置:无名(3,5)</p>"."<br>";
} elseif($npcc ==14){
echo "<p style='color: black'>所选位置:无名(3,6)</p>"."<br>";
} elseif($npcc ==15){
echo "<p style='color: black'>所选位置:无名(4,3)</p>"."<br>";
} elseif($npcc ==16){
echo "<p style='color: black'>所选位置:无名(4,4)</p>"."<br>";
} elseif($npcc ==17){
echo "<p style='color: black'>所选位置:无名(4,5)</p>"."<br>";
} elseif($npcc ==18){
echo "<p style='color: black'>所选位置:无名(4,6)</p>"."<br>";
} elseif($npcc ==19){
echo "<p style='color: black'>所选位置:守方墓地(5,0)</p>"."<br>";
} elseif($npcc ==20){
echo "<p style='color: black'>所选位置:无名(5,1)</p>"."<br>";
} elseif($npcc ==21){
echo "<p style='color: black'>所选位置:无名(5,2)</p>"."<br>";
} elseif($npcc ==22){
echo "<p style='color: black'>所选位置:无名(5,3)</p>"."<br>";

} elseif($npcc ==23){
echo "<p style='color: black'>所选位置:无名(5,4)</p>"."<br>";

} elseif($npcc ==24){
echo "<p style='color: black'>所选位置:无名(6,0)</p>"."<br>";

} elseif($npcc ==25){
echo "<p style='color: black'>所选位置:无名(6,1)</p>"."<br>";
} elseif($npcc ==26){
echo "<p style='color: black'>所选位置:无名(6,2)</p>"."<br>";
} elseif($npcc ==27){
echo "<p style='color: black'>所选位置:入口通道(6,4)</p>"."<br>";
} elseif($npcc ==28){
echo "<p style='color: black'>所选位置:无名(6,5)</p>"."<br>";

} elseif($npcc ==29){



} else{
echo "<p style='color: black'>攻城地图出现错误联系GM进行解决</p>"."<br>";

}







//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=1;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[0,0]</p></a>";
echo "<p style='color: black'>[0,1]</p>";
echo "<p style='color: black'>[0,2]</p>";
echo "<p style='color: black'>[0,3]</p>";
echo "<p style='color: black'>[0,4]</p>";
echo "<p style='color: black'>[0,5]</p>";
echo "<p style='color: black'>[0,6]</p>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=2;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[1,0]</p></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=3;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[1,1]</p></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=4;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[1,2]</p></a>";


echo "<p style='color: black'>[1,3]</p>";
echo "<p style='color: black'>[1,4]</p>";
echo "<p style='color: black'>[1,5]</p>";
echo "<p style='color: black'>[1,6]</p>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=5;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[2,0]</p></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=6;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[2,1]</p></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=7;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[2,2]</p></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=8;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[2,3]</p></a>";

echo "<p style='color: black'>[2,4]</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=9;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[2,5]</p></a>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=10;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[2,6]</p></a>"."<br>";



echo "<p style='color: black'>[3,0]</p>";
echo "<p style='color: black'>[3,1]</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=11;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[3,2]</p></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=12;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[3,3]</p></a>";

echo "<p style='color: black'>[3,4]</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=13;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[3,5]</p></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=14;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[3,6]</p></a>"."<br>";





echo "<p style='color: black'>[4,0]</p>";
echo "<p style='color: black'>[4,1]</p>";
echo "<p style='color: black'>[4,2]</p>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=15;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[4,3]</p></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=16;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[4,4]</p></a>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=17;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[4,5]</p></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=18;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[4,6]</p></a>"."<br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=19;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[5,0]</p></a>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=20;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[5,1]</p></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=21;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[5,2]</p></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=22;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[5,3]</p></a>";


//cmd及超链接值
$cmid=$cmid+1;

$cdid[]=$cmid;
$clj[]=189;
$npc[]=23;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[5,4]</p></a>";




echo "<p style='color: black'>[5,5]</p>";
echo "<p style='color: black'>[5,6]</p>"."<br>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=24;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[6,0]</p></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=25;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[6,1]</p></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=26;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[6,2]</p></a>";

echo "<p style='color: black'>[6,3]</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=27;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[6,4]</p></a>";


//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=189;
$npc[]=28;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>[6,5]</p></a>";


echo "<p style='color: black'>[6,6]</p>"."<br>";

echo "<br>";







$weekarray=array("天","一","二","三","四","五","六",);



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=187;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";

echo "<p style='color: black'>----------------------</p>"."<br>";
//cmd及超链接值
include("fhgame.php");


?>