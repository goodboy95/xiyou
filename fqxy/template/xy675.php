<?php

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=680;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【兑换SDK码】</p></a>"."<br>";
echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=675;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>宣传SDK码</p></a>";
echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=676;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>拉人SDK码</p></a>";
echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=677;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>福利SDK码</p></a>";
echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=678;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>新区SDK码</p></a>";
echo "<br>";
echo "<br>";
echo "<p style='color: black'>宣传SDK码包含以下物品</p></a>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=679;
$npc[]=865;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【尊享VIP】（1天）x1</p></a><br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=679;
$npc[]=128;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【万能果】x20</p></a><br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=679;
$npc[]=565;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【1万法宝经验卷轴】x20</p></a><br>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=679;
$npc[]=564;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>【1万西游声望卷轴】x20</p></a><br>";

echo "<br>";
echo "<p style='color: red'>温馨提示：此SDK码奖励需要条件！任意幻想西游群私聊发给五人即可（其中这五人不能在本群，严禁作弊，需要录制视频发给GM）</p></a>"."<br>";
echo "<p style='color: red'>温馨提示：此SDK码的有效时间为1天</p></a>"."<br>";
?>



<?
echo "<br>";
echo "<br>";
echo "<p style='color: pink'>======宣传语======</p><br>";

?>


<button id="copy" >点击复制宣传语</button>

<?
echo "<br>";


?>

<article id="article">



<?
echo "<p style='color: red'>小轩西游2018年11月5日新区（乌鸡国）即将火热开启，我们不见不散</p><br>";
echo "<p style='color: red'>进群填写我的邀请游戏ID：".$wjid."</p><br>";
echo "<p style='color: red'>填写邀请ID即可领取超值新区（乌鸡国）SDK码包含如下福利奖励</p><br>";
echo "<p style='color: red'>【50元充值卡】x1</p><br>";
echo "<p style='color: red'>【尊享VIP】（3天）x1</p><br>";
echo "<p style='color: red'>【万能果】x500</p><br>";
echo "<p style='color: red'>【10亿修炼经验丹】x10</p><br>";
echo "<p style='color: red'>【1万法宝经验卷轴】x100</p><br>";
echo "<p style='color: red'>【1万西游声望卷轴】x100</p><br>";
echo "<p style='color: red'>〖圣灵白板套装〗x1</p><br>";
echo "<p style='color: red'>〖铁魂〗-〖金魂〗各x500</p><br>";
echo "<p style='color: red'>〖铁星升星符〗-〖金星升星符〗各x100,80,50,20</p><br>";
echo "<p style='color: red'>【vip练级卷】x20</p><br>";
echo "<p style='color: red'>原汁原味的幻想西游，全新的任务，pk，国战，宠物，住宅等等，携爱共走西游路</p><br>";


echo "<p style='color: red'>QQ交流群：54665469</p><br>";
echo "<p style='color: red'>游戏网址：www.hfqyx.cn</p><br>";





?>


</article>
<?
echo "<br>";

echo "<p style='color: pink'>======宣传语======</p><br>";

?>


<script>
function copyArticle(event){
const range = document.createRange();
range.selectNode(document.getElementById('article'));
const selection = window.getSelection();
if(selection.rangeCount > 0) selection.removeAllRanges();
selection.addRange(range);
document.execCommand('copy');
}
document.getElementById('copy').addEventListener('click', copyArticle, false);
</script>



<?

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";
echo "<p style='color: black'>----------------------</p></a>"."<br>";
//cmd及超链接值
include("fhgame.php");





?>