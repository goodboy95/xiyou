<?php


if ($m==1) {
	
$rwstr=$xrwidd."_".$xrwfl;
$rid=$rw2[$rwstr];
if ($rid==21||$rid==25||$rid==27||$rid==37||$rid==43||$rid==44||$rid==45||$rid==46||$rid==58||$rid==74||$rid==75||$rid==76||$rid==85||$rid==86||$rid==104||$rid==106||$rid==107||$rid==108||$rid==109||$rid==110||$rid==111||$rid==112||$rid==117||$rid==118||$rid==119||$rid==120||$rid==397||$rid==398) {
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


if ($rid==22||$rid==23||$rid==24||$rid==26||$rid==28||$rid==29||$rid==30||$rid==38||$rid==47||$rid==48||$rid==59||$rid==77||$rid==87||$rid==105||$rid==113||$rid==121||$rid==399) {
 ///////////////////////////////////////插入图片 /////////////////////////////
if ($tpbl==1) {
$img='./pic/ts/ts2.png';
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
$img='./pic/ts/ts1.png';
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";
} else{
echo "<p style='color: black'>！</p>";
}		
} else {
} 
	  //////////////////////////////////////一个npc多项任务直接上感叹号//////////////////////////	
	
}
















