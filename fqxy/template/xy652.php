<?php
echo "<p style='color: black'>玩法介绍</p><br>";
echo "<p style='color: black'>架构：</p><br>";
echo "<p style='color: black'>游戏分为4大阵图：【万象阵】（低级怪）、【八门阵】（中级怪）、【八卦阵】（高级boss）、【八阵图】（超级boss）</p><br>";
echo "<p style='color: black'>【万象阵】里面有：</p><p style='color: blue'>天阵</p><p style='color: black'>、</p></p><p style='color: red'>【地阵】</p>、人阵、风阵、云阵、龙阵、虎阵、神阵、鬼阵</p><br>";
echo "<p style='color: black'>【八门阵】里面有：休门、</p><p style='color: red'>【生门】</p><p style='color: black'>、伤门、杜门、景门、</p><p style='color: blue'>死门</p>、惊门、开门</p><br>";
echo "<p style='color: black'>【八卦阵】里面有：</p><p style='color: blue'>乾阵</p>、震阵、坎阵、艮阵、</p><p style='color: red'>【坤阵】</p>、巽阵、离阵、兑阵</p><br>";
echo "<p style='color: black'>【八阵图】里面有：</p><p style='color: blue'>天覆阵</p><p style='color: black'>、</p><p style='color: red'>【地载阵】</p><p style='color: black'>、风扬阵、云垂阵、龙飞阵、虎翼阵、鸟翔阵、蛇蟠阵</p><br>";
echo "<p style='color: black'>蓝色标注为：可随机跳的阵</p><br>";
echo "<p style='color: black'>红色标注为：可进入下一个大阵的小阵</p><br>";
echo "<br>";
echo "<p style='color: black'>玩法：</p><br>";
echo "<p style='color: black'>区域停留时间只有5分钟一定要抓紧哦</p><br>";
echo "<p style='color: black'>玩家一开始进入【万象阵】中的天阵，打败天阵的怪物随机进入【万象阵】里面的其他阵。如果进入地阵，打败怪物后进入【八门阵】中的死门。</p><br>";
echo "<p style='color: black'>同样道理，打败完怪物后随机进入【八门阵】中的一个阵，如果进入生门，打败怪物后进入【八卦阵】中的乾阵。</p><br>";
echo "<p style='color: black'>同上，打败完怪物后随机进入【八卦阵】中的一个阵，如果进入坤阵，打败怪物后进入【八阵图】中的天覆阵。</p><br>";
echo "<p style='color: black'>同上，打败完怪物后随机进入【八阵图】中的一个阵，如果进入地载阵，打败怪物后进入【神仙气阵图】。</p><br>";
echo "<p style='color: black'>【神仙气阵图】打败完怪物可许愿但是有50%落空哦</p><br>";
echo "<br>";
echo "<p style='color: black'>奖励：</p><br>";
echo "<p style='color: black'>【万象阵】（低级怪）普通经验、碎银、小概率云梯石</p><br>";
echo "<p style='color: black'>【八门阵】（中级怪）中等经验、碎银、中概率云梯石</p><br>";
echo "<p style='color: black'>【八卦阵】（高级boss）中等经验、碎银、中概率云梯石、金豆</p><br>";
echo "<p style='color: black'>【八阵图】（超级boss）高等经验、碎银、高概率云梯石、金豆</p><br>";
echo "<p style='color: black'>【神仙气阵图】：（顶级boss）超高经验、碎银、超高概率云梯石、金豆，并且完成玩家一个愿望（有百分之50%愿望落空）</p><br>";

echo "<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>返回游戏</p></a>"."<br>";

