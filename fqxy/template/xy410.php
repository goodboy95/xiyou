<?php
echo "<p style='color: red'>小轩西游福利中心</p>"."<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=307;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>每日福利</p></a>";
echo "<p style='color: black'>|</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=408;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>每日活跃</p></a>";
echo "<p style='color: blue'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=409;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>每日签到</p></a>";

echo "<p style='color: black'>|</p>";

echo "<p style='color: black'>每日宣传</p><br>";



echo "<br>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=417;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>黄金贵族</p></a>";

echo "<p style='color: black'>|</p>";

//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=418;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>铂金贵族</p></a>";

echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=419;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>钻石皇族</p></a>";

echo "<p style='color: black'>|</p>";
//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=420;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>至尊皇族</p></a>"."<br>";

		
	echo "<br>";







echo "<p style='color: black'>小轩西游推广计划</p>";
echo "<p style='color: red'>此活动长期有效</p><br>";
echo "<p style='color: black'>1.每日在其他WAP游戏群发布宣传语截图并且到管理员，得【西游宣传礼包】x1</p><br>";
echo "<p style='color: black'>2.邀请新人进群并且注册游戏，邀请人得【西游邀请礼包】x1，被邀请人得【西游新人礼包】x1</p><br>";
echo "<p style='color: black'>3.拉人送自充卡。使用自充卡不参与积分排名，与充值赠送</p><br>";
echo "<p style='color: black'>4.拉1人送10自充，拉2人送20元自充，必须为真实有效玩家，以此类推，多拉多送禁小号禁作弊，一经发现严惩不贷，不排除封号</p><br>";







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
echo "<p style='color: red'>进群填写我的邀请游戏ID：".$wjid."</p><br>";
echo "<p style='color: red'>填写邀请ID即可领取超值【三区水帘洞助力包】包含【幻想套装】【vip练级卷】x20，【10亿修炼经验丹】x10，【万能果】x100，【1万西游声望卷轴】x100，【1万法宝经验卷轴】x100，〖瞌睡虫〗（典藏版）x5</p><br>";
echo "<p style='color: red'>我不断的寻找，有你的世界在哪儿</p><br>";
echo "<p style='color: red'>新区【水帘洞】开放，各项福利免费拿</p><br>";
echo "<p style='color: red'>独立的服务器全新的西游，在这儿等你归来</p><br>";
echo "<p style='color: red'>原汁原味的幻想西游，全新的任务，pk，国战，宠物，住宅等等</p><br>";
echo "<p style='color: red'>注册就有【三区水帘洞助力包】送，携爱共走西游路</p><br>";

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

echo "<br>";


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













