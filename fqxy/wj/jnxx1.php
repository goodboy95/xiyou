<?php
if($jnid>0){
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=15;
$npc[]=$jn;
echo "<p style='color: black'>快捷键".$jn.":</p><a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>".$jnnamex."</p></a>"."<br>";
}else{
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=15;
$npc[]=$jn;
echo "<p style='color: black'>快捷键".$jn.":</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>选择</p></a>"."<br>";
}



