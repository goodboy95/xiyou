<?php

if($txid>=673&&$txid<=679||$txid >=914&&$txid <=921||$txid >=954&&$txid <=964||$txid >=1034&&$txid <=1045){

$picmz="gif";
} else{
$picmz="png";
}

$img='pic/txpic/'.$txid.".".$picmz;
if(!file_exists($img)){
echo "<p style='color: black'>".$txmzsp."称号图片还未制作</p>";
$imgg=$txid.".".$picmz;
echo "<p style='color: black'>图片名称:</p>";
echo "<p style='color: red'>".$imgg."</p>"."<br>";

	} else{
	
		
$img='pic/txpic/'.$txid.".".$picmz;
echo '<img src="'.$img.' "alt="图片"/〉';
echo "<br>";	
echo "<br>";	



	}










