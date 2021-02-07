<?php





$wpid=$npcc;
//调用物品信息
include("./wp/wpxx.php");
if($wpbd==0){
$wpbd="是";
} else{
$wpbd="否";

}
echo "<p style='color: red'>".$wpmz."</p>"."<br>";
echo "<p style='color: black'>描述：".$wpms."</p>"."<br>";
echo "<p style='color: black'>价格：".$wpjg."两</p>"."<br>";
echo "<p style='color: black'>需要等级：".$wpdj."级</p>"."<br>";
echo "<p style='color: black'>重量：".$wpzl."</p>"."<br>";
echo "<p style='color: black'>是否绑定：".$wpbd."</p>"."<br>";




echo "<br>"; 



if($wpfl==1){
$ymid=499;
} elseif($wpfl==2){ //背包材料
$ymid=505;
} elseif($wpfl==4){ //背包商城
$ymid=507;
} elseif($wpfl==5){ //背包丹药
$ymid=509;
} elseif($wpfl==6){ //背包任务
$ymid=511;
} elseif($wpfl==7){ //背包农场
$ymid=513;
} elseif($wpfl==8){ //背包宝箱
$ymid=515;
} else{
$ymid=499;
}



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=$ymid;
$npc[]=$wpid;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回上级</p></a>"."<br>";








//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";
echo "<br>"; 






include("fhgame.php");














?>