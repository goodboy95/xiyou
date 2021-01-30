<?php



$tzms="";
if($tzhp>=1){
$tzms=$tzms."血量+".$tzhp."&nbsp";	
}
if($tzgj>=1){
$tzms=$tzms."攻击+".$tzgj."&nbsp";	
}
if($tzmg>=1){
$tzms=$tzms."魔攻+".$tzmg."&nbsp";	
}
if($tzfy>=1){
$tzms=$tzms."防御+".$tzmg."&nbsp";	
}
if($tzms!=""){
$tzms=$tzms."</br>";		
}
if($tzbg>=1){
$tzms=$tzms."冰攻+".$tzbg."&nbsp";		
}
if($tzhg>=1){
$tzms=$tzms."火攻+".$tzhg."&nbsp";		
}
if($tzlg>=1){
$tzms=$tzms."雷攻+".$tzlg."&nbsp";		
}
if($tzbg>=1||$tzhg>=1||$tzlg>=1){
$tzms=$tzms."</br>";		
}
if($tzbf>=1){
$tzms=$tzms."冰防+".$tzbf."&nbsp";		
}
if($tzhf>=1){
$tzms=$tzms."火防+".$tzhf."&nbsp";		
}
if($tzlf>=1){
$tzms=$tzms."雷防+".$tzlf."&nbsp";		
}
if($tzbf>=1||$tzhf>=1||$tzlf>=1){
$tzms=$tzms."</br>";		
}




?>


