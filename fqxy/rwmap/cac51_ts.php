<?php


if ($m==1) {
	
$rwstr=$xrwidd."_".$xrwfl;
$rid=$rw2[$rwstr];



if ($rid==123||$rid==124||$rid==125||$rid==126||$rid==127||$rid==128||$rid==129||$rid==130) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='./pic/ts/ts1.png';
	echo '<img src="'.$img.' "alt="图片"/〉';
	echo "<br>";
} else{
echo "<p style='color: black'>！</p>";

}
  //////////////////////////////////////插入图片  //////////////////////////
}




} else {
	  //////////////////////////////////////一个npc多项任务直接上感叹号//////////////////////////
if ($m>=2) {
if ($tpbl==1) {
$img='pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>！</p>";
}		
} else {
} 
	  //////////////////////////////////////一个npc多项任务直接上感叹号//////////////////////////	
	
}









?>







