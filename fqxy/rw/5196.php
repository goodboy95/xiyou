<?php
$npcname = "店小二";
if ($rid == 26) {
    echo "<p style='color: black'>【和南城客栈店小二说话】（一名衣衫褴褛的醉汉躺在门口）</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：去去去！没钱给你！</p>" . "<br>";
    echo "<p style='color: black'>醉道士：我不是要钱，我只想讨些酒喝！小兄弟～拜托一下嘛．．给我一点酒吧！</p>" . "<br>";
//经验加
    $jy = 1500;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 27;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "赶走醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 27) {
    echo "<p style='color: black'>【和南城客栈店小二说话】（一名衣衫褴褛的醉汉躺在门口）</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：去去去！没钱给你！</p>" . "<br>";
    echo "<p style='color: black'>醉道士：我不是要钱，我只想讨些酒喝！小兄弟～拜托一下嘛．．给我一点酒吧！</p>" . "<br>";
//
} elseif ($rid == 31) {
    echo "<p style='color: black'>【赶走在南城客栈的醉道士】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：你怎么还没走啊！快走吧！给小二知道了我准挨骂，你赶快走吧！</p>" . "<br>";
    echo "<p style='color: black'>醉道士：哎呀！没酒喝我一步也走不动，你就行行好吧．．</p>" . "<br>";
//任务进程改变
    $rwjc1 = 32;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "送菜到客房";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 32) {
    $npcc11 = $npcc;//存值


//提供需要扣除的物品作为判读依据
    $wpdz1[] = "桂花酒";//名字
    $wpdz2[] = 6;//物品分类
    $wpdz3[] = 253;//物品id
    $wpdz4[] = 1;//	需要扣除的量
    $wpdz5[] = 1;//	重量
//提供需要扣除的物品作为判读依据
    include("./pz/ini_pzz026.php");
    $npcc = $npcc11;//返还存值
    if ($pd == 2) {
        echo "<p style='color: black'>【和南城客栈醉道士说话】</p>" . "<br>";
        echo "<p style='color: black'>醉道士：酒求求．．你．．一口．．喝一口！你拿出桂花酒袋对醉道士说：看你可怜，就给你喝一口吧～喂！只能喝一口喔！
</p>" . "<br>";
//经验加
        $jy = 1500;
        include("./pz/ini_pzz023.php");
//任务进程改变
        $rwjc1 = 33;//任务进程id
        $rwjc2 = 0;//任务已杀怪
        $rwjc3 = 10;//任务要杀怪
        $rwjc4 = "送菜到客房";//任务名字
        include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
        $rw10 = $npcc;//npc号
        include("./rw/jxl.php");
//继续聊
    } else {
        echo "<p style='color: black'>醉道士：酒求求．．你．．一口．．喝一口！（需要桂花酒x1）</p>" . "<br>";
    }
} elseif ($rid == 33) {
    echo "<p style='color: black'>【和南城客栈醉道士说话】</p>" . "<br>";
    echo "<p style='color: black'>醉道士拿起酒一饮而尽∶啊．．．．好酒！
</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：哎呀．．你怎么喝光了！</p>" . "<br>";
    echo "<p style='color: black'>醉道士∶嗝～我一口就是那么大口真是不好意思．</p>" . "<br>";
//任务进程改变
    $rwjc1 = 34;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "送菜到客房";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 34) {
    echo "<p style='color: black'>【和南城客栈醉道士说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：你．．．你要赔我！</p>" . "<br>";
    echo "<p style='color: black'>醉道士∶呵呵．．要钱我可没有～你不是很想学仙法吗？看在酒的份上，贫道可以破例指点你几招！
</p>" . "<br>";
//经验加
    $jy = 1500;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 35;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "送菜到客房";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 35) {
    echo "<p style='color: black'>【和南城客栈醉道士说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：你．．你要教我仙法？？你别逗我了～还是快走吧，要是给小二知道我拿酒给你喝会骂我的～</p>" . "<br>";
//任务进程改变
    $rwjc1 = 36;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "送菜到客房";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 36) {
    echo "<p style='color: black'>【和南城客栈店小二说话】</p>" . "<br>";
    echo "<p style='color: black'>醉道士∶哈哈哈！那就今晚三更城南荒野，不见不散！（醉道士话说完一溜烟地就不见了．．）</p>" . "<br>";
//经验加
    $jy = 1500;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 37;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "送菜到客房";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
} elseif ($rid == 37) {
    echo "<p style='color: black'>【和南城客栈店小二说话】</p>" . "<br>";
    echo "<p style='color: black'>醉道士∶哈哈哈！那就今晚三更城南荒野，不见不散！（醉道士话说完一溜烟地就不见了．．）</p>" . "<br>";
//经验加
    $jy = 1500;
    include("./pz/ini_pzz023.php");
//
} elseif ($rid == 63) {
    echo "<p style='color: black'>【去城南荒野（4，4）找醉道士】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：呀，差点忘了！那醉道士让我去城南荒野学仙法呢！～趁城门还没关，过去看看！</p>" . "<br>";
//快速任务
    $ydx = 16;//移动坐标x
    $ydy = 0;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//任务进程改变
    $rwjc1 = 64;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "找醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 64) {
    echo "<p style='color: black'>【去城南荒野（4，4）找醉道士】</p>" . "<br>";
    echo "<p style='color: black'>醉道士∶哈哈哈！小伙子你果然守信。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：要不是店小二看得紧，晚辈原本还想替老前辈带几壶好酒来。</p>" . "<br>";
//经验加
    $jy = 3000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 65;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "找醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 65) {
    echo "<p style='color: black'>【去城南荒野（4，4）找醉道士】</p>" . "<br>";
    echo "<p style='color: black'>醉道士∶呵呵！那倒不必了，老夫喝遍天下名酒，要不是酒虫闹得凶，才不稀罕那掺了水的酸酒。</p>" . "<br>";
//任务进程改变
    $rwjc1 = 66;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "找醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 66) {
    echo "<p style='color: black'>【去城南荒野（4，4）找醉道士】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：让前辈见笑了，寻常小店没啥美酒佳肴，怠慢不周之处还请前辈多多见谅。</p>" . "<br>";
    echo "<p style='color: black'>醉道士∶哈～哈哈！这样说才像句人话。</p>" . "<br>";
//经验加
    $jy = 3000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 67;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "找醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 67) {
    echo "<p style='color: black'>【去城南荒野（4，4）找醉道士】</p>" . "<br>";
    echo "<p style='color: black'>醉道士∶我一生从不亏欠别人，现在就教你仙法要诀，算是回报你赐酒之恩，仔细看清楚了！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 68;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "找醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 68) {
    echo "<p style='color: black'>【去城南荒野（4，4）找醉道士】</p>" . "<br>";
    echo "<p style='color: black'>醉道士捏个手决，以气御力～指尖激出一道金光！在空中飞旋～瞬间分作数十条～忽又合为一体！只听轰的一声远处巨石已被击的粉碎～</p>" . "<br>";
//经验加
    $jy = 3000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 69;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "找醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 69) {
    echo "<p style='color: black'>【去城南荒野（4，4）找醉道士】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：（你看的眼都呆了，忙跪地拜谢）前辈！请您收我为徒。
</p>" . "<br>";
    echo "<p style='color: black'>醉道士∶贫道一向漂泊惯了，不想收徒弟。</p>" . "<br>";
//任务进程改变
    $rwjc1 = 70;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "找醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
//
} elseif ($rid == 70) {
    echo "<p style='color: black'>【去城南荒野（4，4）找醉道士】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：前辈～求求您．．晚辈愿意孝敬您下半辈子，跟随您行侠仗义，云游四海．．
</p>" . "<br>";
//经验加
    $jy = 3000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 71;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "找醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 71) {
    echo "<p style='color: black'>【去城南荒野（4，4）找醉道士】</p>" . "<br>";
    echo "<p style='color: black'>醉道士∶以无限为有限，以无法为有法，修仙得道之路，不进则退！我教你的几招仙法，助你固本培元，你好生练习，便可一生受用无穷，你我缘尽于此，回家去吧．．聚宝盆∶前．．前辈！还不知道您尊姓大名呢！
学会了排山倒海技能待定</p>" . "<br>";
//任务进程改变
    $rwjc1 = 72;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "找醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 72) {
    echo "<p style='color: black'>【在城南荒野练习仙法】（远远传来宏亮的朗诗声）</p>" . "<br>";
    echo "<p style='color: black'>桃花坞里桃花庵，桃花庵里桃花仙。</p>" . "<br>";
    echo "<p style='color: black'>桃花仙人种桃树，又摘桃花换酒钱。</p>" . "<br>";
    echo "<p style='color: black'>酒醒只在花前坐，酒醉还来花下眠。</p>" . "<br>";
    echo "<p style='color: black'>半醒半醉日复日，花落花开年复年。</p>" . "<br>";
    echo "<p style='color: black'>别人笑我忒疯癫，我笑他人看不穿。</p>" . "<br>";
    echo "<p style='color: black'>不见五陵豪杰墓，无花无酒锄作田！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：前～前辈？</p>" . "<br>";
//经验加
    $jy = 5000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 73;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "找醉道士";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 73) {
    echo "<p style='color: black'>【在城南荒野练习仙法】（远远传来宏亮的朗诗声）</p>" . "<br>";
    echo "<p style='color: black'>桃花坞里桃花庵，桃花庵里桃花仙。</p>" . "<br>";
    echo "<p style='color: black'>桃花仙人种桃树，又摘桃花换酒钱。</p>" . "<br>";
    echo "<p style='color: black'>酒醒只在花前坐，酒醉还来花下眠。</p>" . "<br>";
    echo "<p style='color: black'>半醒半醉日复日，花落花开年复年。</p>" . "<br>";
    echo "<p style='color: black'>别人笑我忒疯癫，我笑他人看不穿。</p>" . "<br>";
    echo "<p style='color: black'>不见五陵豪杰墓，无花无酒锄作田！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：前～前辈？</p>" . "<br>";
//
} elseif ($rid == 79) {
    echo "<p style='color: black'>【长安南城客栈睡房和黑衣大汉说话】</p>" . "<br>";
    echo "<p style='color: black'>黑衣大汉∶你是怎么溜进来的！好大的胆子～谁让你进来的！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：哼～你们把这位姑娘绑来这里！到底作何居心？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 80;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "睡房打探";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 80) {
    echo "<p style='color: black'>【在长安南城客栈教训黑衣人】</p>" . "<br>";
    echo "<p style='color: black'>黑衣大汉∶咱们天法国的事你最好别管！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：嘿～在我们客栈拐卖人口，我当然非管不可！</p>" . "<br>";
    echo "<p style='color: black'>黑衣大汉∶你找死！</p>" . "<br>";
//经验加
    $jy = 1500;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 81;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 1;//任务要杀怪
    $rwjc4 = "睡房打探";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 81) {
    echo "<p style='color: black'>【在长安南城客栈教训黑衣人】</p>" . "<br>";
    echo "<p style='color: black'>黑衣大汉∶咱们天法国的事你最好别管！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：嘿～在我们客栈拐卖人口，我当然非管不可！</p>" . "<br>";
    echo "<p style='color: black'>黑衣大汉∶你找死！</p>" . "<br>";
//
} elseif ($rid == 82) {
    echo "<p style='color: black'>【长安南城客栈睡房和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>黑衣大汉∶臭小子，算你厉害。咱们走着瞧！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：不要让我再看到你们，见一次打一次～哼！</p>" . "<br>";
    echo "<p style='color: black'>黑衣大汉∶你找死！</p>" . "<br>";
//银两加
    $yl1 = 2200;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 1500;
    include("./pz/ini_pzz023.php");
//银两加
//任务进程改变
    $rwjc1 = 83;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "睡房打探";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 83) {
    echo "<p style='color: black'>【长安南城客栈睡房和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>黑衣大汉∶臭小子，算你厉害。咱们走着瞧！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：不要让我再看到你们，见一次打一次～哼！</p>" . "<br>";
    echo "<p style='color: black'>黑衣大汉∶你找死！</p>" . "<br>";
//
} elseif ($rid == 93) {
    echo "<p style='color: black'>【仙泉和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>清清∶师父．．都怪清清不好，没有听您的话．．要是仙露还在，您也不会死了～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好了．．别难过了，事已至此～我想你师父也不希望你一直这么伤心吧</p>" . "<br>";
//银两加
    $yl1 = 5000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 5000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 94;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "睡房打探";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 94) {
    echo "<p style='color: black'>【仙泉和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>清清∶师父．．都怪清清不好，没有听您的话．．要是仙露还在，您也不会死了～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好了．．别难过了，事已至此～我想你师父也不希望你一直这么伤心吧</p>" . "<br>";
//
} elseif ($rid == 101) {
    echo "<p style='color: black'>【南城客栈教训黑衣人】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：清清的话你们听到了吧？她是不会跟你们走的～你们杀了清清师父，这笔帐还没算呢！</p>" . "<br>";
    echo "<p style='color: black'>黑衣头领：臭小子～上次要利用你骗出仙露，老子才留了你一条小命～今天你就没这么好运了！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 102;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 1;//任务要杀怪
    $rwjc4 = "黑衣客人";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
} elseif ($rid == 102) {
    echo "<p style='color: black'>【南城客栈教训黑衣人】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：清清的话你们听到了吧？她是不会跟你们走的～你们杀了清清师父，这笔帐还没算呢！</p>" . "<br>";
    echo "<p style='color: black'>黑衣头领：臭小子～上次要利用你骗出仙露，老子才留了你一条小命～今天你就没这么好运了！</p>" . "<br>";
//
} elseif ($rid == 103) {
    echo "<p style='color: black'>【南城客栈和店小二说话】</p>" . "<br>";
    echo "<p style='color: black'>（黑衣人见势不妙，突然扑过去抓住店小二）黑衣头领∶不许动！不然我就要这小伙计的命！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：啊．．你！你卑鄙！！快放开小二．</p>" . "<br>";
//任务进程改变
    $rwjc1 = 104;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "黑衣客人";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 104) {
    echo "<p style='color: black'>【南城客栈和店小二说话】</p>" . "<br>";
    echo "<p style='color: black'>（黑衣人见势不妙，突然扑过去抓住店小二）黑衣头领∶不许动！不然我就要这小伙计的命！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：啊．．你！你卑鄙！！快放开小二．</p>" . "<br>";
//
} elseif ($rid == 105) {
    echo "<p style='color: black'>【南城客栈和店小二说话】</p>" . "<br>";
    echo "<p style='color: black'>喂．．黑脸的？喂．．店小二∶糟糕～一不小心用了穿云掌，这黑脸胖子怕是没救了．．</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：哇．．小二！你好厉害喔．．</p>" . "<br>";
//银两加
    $yl1 = 1200;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 1200;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 106;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "黑衣客人";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 106) {
    echo "<p style='color: black'>【南城客栈和店小二说话】</p>" . "<br>";
    echo "<p style='color: black'>喂．．黑脸的？喂．．店小二∶糟糕～一不小心用了穿云掌，这黑脸胖子怕是没救了．．</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：哇．．小二！你好厉害喔．．</p>" . "<br>";
//
} elseif ($rid == 113) {
    echo "<p style='color: black'>【去南城客栈睡房外看看】</p>" . "<br>";
    echo "<p style='color: black'>（当夜．．门外传来哭泣声．．）</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：咦？是谁呀？半夜三更的在外面哭鼻子？出去瞅瞅～</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 96;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 12000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 114;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "客栈夜话";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 114) {
    echo "<p style='color: black'>【去南城客栈睡房外看看】</p>" . "<br>";
    echo "<p style='color: black'>（当夜．．门外传来哭泣声．．）</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：咦？是谁呀？半夜三更的在外面哭鼻子？出去瞅瞅～</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 96;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 130) {
    echo "<p style='color: black'>【城隍庙和打人的野蛮丫头说话】</p>" . "<br>";
    echo "<p style='color: black'>清清：快看～有人被打！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：恩？（一个丫环和一个下人模样的男子被吊在树上，一个穿着阔气的野蛮丫头正拿着鞭子抽打这两人）</p>" . "<br>";
//任务进程改变
    $rwjc1 = 131;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 131) {
    echo "<p style='color: black'>【城隍庙和打人的野蛮丫头说话】</p>" . "<br>";
    echo "<p style='color: black'>清清：快看～有人被打！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：恩？（一个丫环和一个下人模样的男子被吊在树上，一个穿着阔气的野蛮丫头正拿着鞭子抽打这两人）</p>" . "<br>";
//
} elseif ($rid == 133) {
    echo "<p style='color: black'>【歪柳巷和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：既然他们两情相悦，何不做个顺水人情，做主撮合他们，不是美事一桩吗？何必苦苦相逼</p>" . "<br>";
//经验加
    $jy = 20000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 134;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 134) {
    echo "<p style='color: black'>【歪柳巷和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶胆敢坏了我们家规矩，岂能便宜了他们？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：敢问小姐可有心上人？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 135;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 135) {
    echo "<p style='color: black'>【歪柳巷和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶没、没有．你这话什么意思</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：哈！这就是了，像姑娘这样的美人居然没有心上人？难怪、难怪会见不得别人双宿双飞</p>" . "<br>";
//经验加
    $jy = 20000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 136;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 136) {
    echo "<p style='color: black'>【歪柳巷和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶你！狗嘴吐不出象牙！本小姐管教下人，干你何事？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：下人也是人呐，像你这样打法会出人命的！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 137;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 137) {
    echo "<p style='color: black'>【歪柳巷和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶好！我就饶他们一命．．．</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：姑娘果然是个明理人～我来帮他们解开绳索</p>" . "<br>";
//经验加
    $jy = 20000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 138;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 138) {
    echo "<p style='color: black'>【歪柳巷教训萧晓月】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶慢着！死罪可免，活罪难逃！各砍断一只手，作为警惕！</p>" . "<br>";
    echo "<p style='color: black'>清清∶啊～不可以！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 52;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//任务进程改变
    $rwjc1 = 139;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 1;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 139) {
    echo "<p style='color: black'>【歪柳巷教训萧晓月】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶慢着！死罪可免，活罪难逃！各砍断一只手，作为警惕！</p>" . "<br>";
    echo "<p style='color: black'>清清∶啊～不可以！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 52;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 140) {
    echo "<p style='color: black'>【歪柳巷和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>(你将野蛮丫头绑在树上)萧晓月∶小贼！你想干什么？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：像你这种蛮横的人，不给你一点教训怎行？让你也尝尝被吊在树上的滋味！</p>" . "<br>";
//经验加
    $jy = 20000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 141;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 141) {
    echo "<p style='color: black'>【歪柳巷和银花说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶你！！快把我放了！不然我回去一定叫我爹派人把你们通通抓起来，打断你们的腿！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 142;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 142) {
    echo "<p style='color: black'>【歪柳巷和银花说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶你！！快把我放了！不然我回去一定叫我爹派人把你们通通抓起来，打断你们的腿！</p>" . "<br>";
//
} elseif ($rid == 145) {
    echo "<p style='color: black'>【歪柳巷和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：清清咱们去城隍庙逛逛吧！这城隍庙可热闹了，我带你去瞧瞧新鲜～</p>" . "<br>";
    echo "<p style='color: black'>清清∶留她一个人在这里，不妥吧？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 146;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 146) {
    echo "<p style='color: black'>【去城隍庙烧香】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：现在就放了她，岂不是前功尽弃？等他们小俩口逃得够远了，我们再回来放了这蛮千金。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶小贼！快放了我！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 53;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 25000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 147;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 147) {
    echo "<p style='color: black'>【去城隍庙烧香】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：现在就放了她，岂不是前功尽弃？等他们小俩口逃得够远了，我们再回来放了这蛮千金。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶小贼！快放了我！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 53;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 149) {
    echo "<p style='color: black'>【城隍庙和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：怎么了？是你在喊救命吗？是不是害怕了，想求饶？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶谁．．谁怕了！我随便喊喊，关你什么事？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 150;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 150) {
    echo "<p style='color: black'>【去城隍庙烧香】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：这可是你自己说的这回我真的不管你．．</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶你走啊，下次再让我遇到你，我一定要你好看！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：奉陪！谁怕谁！</p>" . "<br>";
//经验加
    $jy = 30000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 151;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 151) {
    echo "<p style='color: black'>【去城隍庙烧香】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：这可是你自己说的这回我真的不管你．．</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶你走啊，下次再让我遇到你，我一定要你好看！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：奉陪！谁怕谁！</p>" . "<br>";
//
} elseif ($rid == 154) {
    echo "<p style='color: black'>【去城隍庙教训小流氓】</p>" . "<br>";
    echo "<p style='color: black'>流氓：敢坏大爷好事！小子～你也想尝鲜呀？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 155;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 1;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 155) {
    echo "<p style='color: black'>【去城隍庙教训小流氓】</p>" . "<br>";
    echo "<p style='color: black'>流氓：敢坏大爷好事！小子～你也想尝鲜呀？</p>" . "<br>";
//
} elseif ($rid == 156) {
    echo "<p style='color: black'>【城隍庙和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>清清∶你看吧！还好我们及时折回来不然可闯大祸了．．</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：呜呜～呜～呜呜～呜</p>" . "<br>";
//经验加
    $jy = 35000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 157;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 157) {
    echo "<p style='color: black'>【城隍庙和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：实在很抱歉，没想到害了姑娘受到这般惊吓。还好没有受伤，要不要我送你回家？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 158;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 158) {
    echo "<p style='color: black'>【城隍庙和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶少假惺惺～看剑！（萧晓月突然一剑刺向你！你中剑倒地～）</p>" . "<br>";
    echo "<p style='color: black'>清清∶</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥！！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶你．．你怎么不闪呀！</p>" . "<br>";
//经验加
    $jy = 35000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 159;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 159) {
    echo "<p style='color: black'>【城隍庙和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶在下无礼．．冒犯姑娘．．以致．．姑娘名节受损．．自当受此一剑．．以赎其罪</p>" . "<br>";
//任务进程改变
    $rwjc1 = 160;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 160) {
    echo "<p style='color: black'>【歪柳巷和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我．．我不是故意的．．都怪你．．是你太过份！我才．．我．．（萧晓月又羞又恼的跑了～）</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>苦笑∶开什么玩笑．．这一剑．．又快又突然。躲得掉才怪．．(你昏死过去)</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 52;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 35000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 161;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 161) {
    echo "<p style='color: black'>【歪柳巷和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我．．我不是故意的．．都怪你．．是你太过份！我才．．我．．（萧晓月又羞又恼的跑了～）</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>苦笑∶开什么玩笑．．这一剑．．又快又突然。躲得掉才怪．．(你昏死过去)</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 52;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 168) {
    echo "<p style='color: black'>【城隍庙和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>你点上一柱香许愿∶我</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>可以对天发誓，从今以后决不会让你一个人孤苦伶仃！</p>" . "<br>";
    echo "<p style='color: black'>清清∶谢谢你．．</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥</p>" . "<br>";
//经验加
    $jy = 35000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 169;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 173) {
    echo "<p style='color: black'>【白虎大街教训众酒客】</p>" . "<br>";
    echo "<p style='color: black'>（一群人正在打一个书生）众人：打死他！踹死他！癞蛤蟆想吃天鹅肉自己撒泡尿去照照吧！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：等等！诸位有话好说。。</p>" . "<br>";
//任务进程改变
    $rwjc1 = 174;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "野蛮丫头";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 174) {
    echo "<p style='color: black'>【白虎大街教训众酒客】</p>" . "<br>";
    echo "<p style='color: black'>众酒客：少管闲事～要不连你一块打！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 175;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 1;//任务要杀怪
    $rwjc4 = "患难之交";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
} elseif ($rid == 176) {
    echo "<p style='color: black'>【去喜福会二楼找殷净年】</p>" . "<br>";
    echo "<p style='color: black'>书生∶哎呦．．得救了．．如不嫌弃，在下殷净年略备水酒答谢大侠相救之恩！大侠请！（书生邀请你至喜福会二楼把酒共叙）</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：这？好吧～相请不如偶遇～</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 49;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//银两加
    $yl1 = 200000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 200000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 177;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "患难之交";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 177) {
    echo "<p style='color: black'>【去喜福会二楼找殷净年】</p>" . "<br>";
    echo "<p style='color: black'>书生∶哎呦．．得救了．．如不嫌弃，在下殷净年略备水酒答谢大侠相救之恩！大侠请！（书生邀请你至喜福会二楼把酒共叙）</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：这？好吧～相请不如偶遇～</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 49;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 181) {
    echo "<p style='color: black'>【喜福会二楼和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：清清～该起床了！</p>" . "<br>";
    echo "<p style='color: black'>清清∶唔～人家还要睡嘛．．呼～呼～</p>" . "<br>";
//任务进程改变
    $rwjc1 = 182;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "患难之交";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 182) {
    echo "<p style='color: black'>【离开喜福会（在门口遇到算命仙）】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：太阳晒屁股罗～快起来快起来！</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥说好要带你逛长安城，你再赖床，我就不带你去罗！</p>" . "<br>";
    echo "<p style='color: black'>清清∶嘻～人家要去！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 12;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//银两加
    $yl1 = 50000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 50000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 183;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "患难之交";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 183) {
    echo "<p style='color: black'>【离开喜福会（在门口遇到算命仙）】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：太阳晒屁股罗～快起来快起来！</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥说好要带你逛长安城，你再赖床，我就不带你去罗！</p>" . "<br>";
    echo "<p style='color: black'>清清∶嘻～人家要去！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 12;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
} elseif ($rid == 191) {
    echo "<p style='color: black'>【振远镖局和殷净年说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶咦，这不是殷兄吗？</p>" . "<br>";
    echo "<p style='color: black'>殷净年∶</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>兄！你怎么也在这里？难不成你是来参加招亲的？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶我只是看到这里热闹非常凑过来瞧瞧罢了。殷兄，你怎么不上去试试？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 192;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "患难之交";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 192) {
    echo "<p style='color: black'>【振远镖局和殷净年说话】</p>" . "<br>";
    echo "<p style='color: black'>殷净年∶</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>兄～您别挖苦我了．．我若有学过那么一点点武功早就向晓月表妹求亲了！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶此话怎讲？殷兄温文有礼又长得一表人才，你那什么晓月表妹若看不上你，那真是没啥眼光！
</p>" . "<br>";
//经验加
    $jy = 80000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 193;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "患难之交";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 193) {
    echo "<p style='color: black'>【镇远镖局看擂台比武】</p>" . "<br>";
    echo "<p style='color: black'>殷净年∶嘘．．别让台上听到了</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶哦？莫非台上的就是殷兄的晓月表妹？嘿．．能令殷兄如此挂意，应该是位美人罗？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 194;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "患难之交";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 194) {
    echo "<p style='color: black'>【镇远镖局看擂台比武】</p>" . "<br>";
    echo "<p style='color: black'>殷净年∶嘘．．别让台上听到了</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶哦？莫非台上的就是殷兄的晓月表妹？嘿．．能令殷兄如此挂意，应该是位美人罗？</p>" . "<br>";
//
} elseif ($rid == 195) {
    echo "<p style='color: black'>【镇远镖局和殷净年说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶．．啊～野蛮丫头！！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶亏你还认得我呀～呆瓜小贼！怎么啦，今天是不是又想把我绑起来吊在树上呀？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 196;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "患难之交";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 196) {
    echo "<p style='color: black'>【镇远镖局和殷净年说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶．．啊～野蛮丫头！！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶亏你还认得我呀～呆瓜小贼！怎么啦，今天是不是又想把我绑起来吊在树上呀？</p>" . "<br>";
//
} elseif ($rid == 197) {
    echo "<p style='color: black'>【镇远镖局和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我不管，你叫他上来我一定出这口气！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶虽然在下曾冒犯姑娘在先，但我自愿捱你一剑，已经两不相欠。姑娘又何必逼人太甚呢？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 198;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "患难之交";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 198) {
    echo "<p style='color: black'>【镇远镖局和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我不服气！昨天你们两个打我一个。今天有种就来单打独斗！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶要是你胜了，咱们之间的过节就一笔勾消。要是你输了，就得在我家当一年的长工。来抵被你放走的银花和长贵的份！怎么着，怕了吗？</p>" . "<br>";
//经验加
    $jy = 80000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 199;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "患难之交";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 199) {
    echo "<p style='color: black'>【镇远镖局和萧升说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶话可是你说的呦！只要我打赢你，昨天的事就一笔勾消</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶没错！</p>" . "<br>";
    echo "<p style='color: black'>萧升：月儿！不可儿戏！</p>" . "<br>";
//经验加
    $jy = 80000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 200;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//最小值
//
} elseif ($rid == 200) {
    echo "<p style='color: black'>【镇远镖局和萧升说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶话可是你说的呦！只要我打赢你，昨天的事就一笔勾消</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶没错！</p>" . "<br>";
    echo "<p style='color: black'>萧升：月儿！不可儿戏！</p>" . "<br>";
//
} elseif ($rid == 204) {
    echo "<p style='color: black'>【镇远镖局和萧升说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我认输了．． </p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶承让～擂台下响起一片掌声～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶啊．．谢谢，谢谢各位</p>" . "<br>";
//银两加
    $yl1 = 100000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 80000;
    include("./pz/ini_pzz023.php");
//银两加
//任务进程改变
    $rwjc1 = 205;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 205) {
    echo "<p style='color: black'>【镇远镖局和萧升说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我认输了．． </p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶承让～擂台下响起一片掌声～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶啊．．谢谢，谢谢各位</p>" . "<br>";
//
} elseif ($rid == 206) {
    echo "<p style='color: black'>【镇远镖局和萧升说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶爹～！人家才不依呢．． </p>" . "<br>";
    echo "<p style='color: black'>萧升∶哈哈哈！难得～难得～想不到月儿也会害臊</p>" . "<br>";
//经验加
    $jy = 80000;
    include("./pz/ini_pzz023.php");
//银两加
//任务进程改变
    $rwjc1 = 207;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 207) {
    echo "<p style='color: black'>【镇远镖局和萧升说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶爹～！人家才不依呢．． </p>" . "<br>";
    echo "<p style='color: black'>萧升∶哈哈哈！难得～难得～想不到月儿也会害臊</p>" . "<br>";
//
} elseif ($rid == 211) {
    echo "<p style='color: black'>【镇远镖局和萧升说话】</p>" . "<br>";
    echo "<p style='color: black'>殷净年∶您明知我不会武功，却以比武来决定晓月的婚事！</p>" . "<br>";
    echo "<p style='color: black'>萧升∶既是比武招亲，擂台胜负已分．．．</p>" . "<br>";
    echo "<p style='color: black'>殷净年∶不！这不能算数的，晓月的终身大事怎可如此草率！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 212;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 212) {
    echo "<p style='color: black'>【镇远镖局和萧升说话】</p>" . "<br>";
    echo "<p style='color: black'>殷净年∶您明知我不会武功，却以比武来决定晓月的婚事！</p>" . "<br>";
    echo "<p style='color: black'>萧升∶既是比武招亲，擂台胜负已分．．．</p>" . "<br>";
    echo "<p style='color: black'>殷净年∶不！这不能算数的，晓月的终身大事怎可如此草率！</p>" . "<br>";
//
} elseif ($rid == 222) {
    echo "<p style='color: black'>【镇远镖局和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶瞧！我这身衣裳好不好看？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶喔～好．．好看！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶就这样子而已吗．．？！人家可是好不容易才穿一次呢</p>" . "<br>";
//任务进程改变
    $rwjc1 = 223;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 223) {
    echo "<p style='color: black'>【镇远镖局和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶萧姑娘，我能否私下问你一个问题，请你老实回答我～</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶你说啊！？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶你．．当真想要嫁给我？</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 224;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 224) {
    echo "<p style='color: black'>【镇远镖局和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶不是我嫁给你，是你入赘到我们萧家！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶不是指这个，我是指比武招亲太草率了，这门亲事不一定要算数～</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶没关系，我爹说了就算</p>" . "<br>";
//任务进程改变
    $rwjc1 = 225;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 225) {
    echo "<p style='color: black'>【镇远镖局和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶这．．其实我今天上擂你与你比武，只是想化解误会，并未想到招亲这一层．．</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶嘻～谁叫你要打赢我！现在全京城的人都知道你是萧家的新姑爷了，难道你想赖帐不成？</p>" . "<br>";
//银两加
    $yl1 = 120000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 226;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 226) {
    echo "<p style='color: black'>【镇远镖局和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶可是～我们认识才不过两天！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶说了半天，原来你讨厌我</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶不．．而是．．我总觉得这样太随便了～</p>" . "<br>";
//任务进程改变
    $rwjc1 = 227;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 227) {
    echo "<p style='color: black'>【镇远镖局和秋香说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我才不是随随便便的女人呢！我在做什么，心里清楚的很！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶你该不会是为了昨天的事还怀恨在心，故意捉弄我吧？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶嘻．．你说呢？</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 228;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 228) {
    echo "<p style='color: black'>【镇远镖局和秋香说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我才不是随随便便的女人呢！我在做什么，心里清楚的很！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶你该不会是为了昨天的事还怀恨在心，故意捉弄我吧？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶嘻．．你说呢？</p>" . "<br>";
//
} elseif ($rid == 233) {
    echo "<p style='color: black'>【镇远镖局和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶究竟发生了什么事？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶狐妖，是只半人半狐的妖怪，刚才就在西厢房里面！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶清清！清清人呢？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶清姑娘不见了！</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 234;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 234) {
    echo "<p style='color: black'>【镇远镖局和萧升说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶等一等！很危险呀！现在附近一片漆黑，什么也看不见，我已经叫人去取灯火了！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶清清一定还在附近，我要去救清清！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我跟你去！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 235;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "比武招亲";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
} elseif ($rid == 235) {
    echo "<p style='color: black'>【镇远镖局和萧升说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶等一等！很危险呀！现在附近一片漆黑，什么也看不见，我已经叫人去取灯火了！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶清清一定还在附近，我要去救清清！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我跟你去！</p>" . "<br>";
//
} elseif ($rid == 240) {
    echo "<p style='color: black'>【在镖局门口和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我不要！！！既然爹已许过婚～怎可出尔反尔？除了小铃铛大哥我谁也不嫁！（晓月说完便向镖局门外跑去了！）</p>" . "<br>";
    echo "<p style='color: black'>萧升∶唉．．女儿大了，留不住了！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 83;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 241;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清清失踪";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 241) {
    echo "<p style='color: black'>【在镖局门口和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我不要！！！既然爹已许过婚～怎可出尔反尔？除了小铃铛大哥我谁也不嫁！（晓月说完便向镖局门外跑去了！）</p>" . "<br>";
    echo "<p style='color: black'>萧升∶唉．．女儿大了，留不住了！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 83;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
} elseif ($rid == 246) {
    echo "<p style='color: black'>【大雁塔外和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶这里就是大雁塔吗？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶没错，就是这里！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶你留下来，在这里等我！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶不行～我也要进去</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 247;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "大雁塔除妖";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 247) {
    echo "<p style='color: black'>【搜查大雁塔（2，2）】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶你是女孩子，万一有个什么．．岂不是太危险了！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我要是出了什么事．．你会保护我吧？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶那是当然的～</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶嘻～这不就结了！还磨菇什么，走嘛！</p>" . "<br>";
//快速任务
    $ydx = 17;//移动坐标x
    $ydy = 10;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//任务进程改变
    $rwjc1 = 248;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "大雁塔除妖";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 248) {
    echo "<p style='color: black'>【搜查大雁塔（2，2）】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶你是女孩子，万一有个什么．．岂不是太危险了！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我要是出了什么事．．你会保护我吧？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶那是当然的～</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶嘻～这不就结了！还磨菇什么，走嘛！</p>" . "<br>";
//快速任务
    $ydx = 17;//移动坐标x
    $ydy = 10;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 252) {
    echo "<p style='color: black'>【大雁塔（2，2）和晓慧说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶姑娘～你们都是被蛇妖抓来的吗？</p>" . "<br>";
    echo "<p style='color: black'>晓慧∶是啊～我们都是城南高家庄人氏！还好被抓后，妖怪只要我们做一些打杂的工作，并没有伤害我们。</p>" . "<br>";
//任务进程改变
    $rwjc1 = 253;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "大雁塔除妖";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 253) {
    echo "<p style='color: black'>【在大雁塔（4，1）找到狐妖女】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶蛇妖已经死了～你们赶紧回家吧！</p>" . "<br>";
    echo "<p style='color: black'>晓慧：不行啊～就在这层左下处还有只狐妖！跟这蛇妖是一伙的！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶哦？好，一起解决了！（狐妖女：大雁塔（4.1））</p>" . "<br>";
//快速任务
    $ydx = 17;//移动坐标x
    $ydy = 15;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 80000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 254;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "大雁塔除妖";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 254) {
    echo "<p style='color: black'>【在大雁塔（4，1）找到狐妖女】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶蛇妖已经死了～你们赶紧回家吧！</p>" . "<br>";
    echo "<p style='color: black'>晓慧：不行啊～就在这层左下处还有只狐妖！跟这蛇妖是一伙的！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶哦？好，一起解决了！（狐妖女：大雁塔（4.1））</p>" . "<br>";
//快速任务
    $ydx = 17;//移动坐标x
    $ydy = 15;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 259) {
    echo "<p style='color: black'>【大雁塔（4.1）和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶．．．我们先把这里被妖怪抓来的女孩子们救出去～清姑娘的下落，我们另外再从头查起吧．．</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶好．．．好吧</p>" . "<br>";
//任务进程改变
    $rwjc1 = 260;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "大雁塔除妖";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 260) {
    echo "<p style='color: black'>【去高家庄和老余头说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶唉．．无心插柳～</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶别灰心嘛～我相信清清妹子一定不会有事的．．</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶看来．．只得从头找起了！先把她们送回高家庄吧！</p>" . "<br>";
//快速任务
    $ydx = 21;//移动坐标x
    $ydy = 0;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 261;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "大雁塔除妖";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 261) {
    echo "<p style='color: black'>【去高家庄和老余头说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶唉．．无心插柳～</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶别灰心嘛～我相信清清妹子一定不会有事的．．</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶看来．．只得从头找起了！先把她们送回高家庄吧！</p>" . "<br>";
//快速任务
    $ydx = 21;//移动坐标x
    $ydy = 0;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 270) {
    echo "<p style='color: black'>【高家庄农舍和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶清清．．！！</p>" . "<br>";
    echo "<p style='color: black'>吴文∶二位认识她吗？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶清姑娘在我家作客时突然失踪还好．．吉人天相！</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 271;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "意外重逢";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 271) {
    echo "<p style='color: black'>【高家庄农舍和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶清清．．！！</p>" . "<br>";
    echo "<p style='color: black'>吴文∶二位认识她吗？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶清姑娘在我家作客时突然失踪还好．．吉人天相！</p>" . "<br>";
} elseif ($rid == 274) {
    echo "<p style='color: black'>【高家庄农舍和霜儿说话】</p>" . "<br>";
    echo "<p style='color: black'>吴文∶我已把药单交给小女～叫她照单子上的配方煎药！</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶配药需要人参、雪莲子、何首乌、银杏子、鹿茸、外加一条活鲤鱼</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶活鲤鱼！？</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 275;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "恢复药方";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 275) {
    echo "<p style='color: black'>【高家庄农舍和霜儿说话】</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶没错！这付药方要活鲤鱼的肝作药引才有疗效～</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶我们分头去弄这些药材，人参、雪莲子、何首乌这三样药材我可以弄的到！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 276;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "恢复药方";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 276) {
    echo "<p style='color: black'>【（你和萧晓月走后～高家庄吴村长家里）】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶好！其它的三项你来想办法！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶正午之前我会赶回来～</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 277;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "恢复药方";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 277) {
    echo "<p style='color: black'>【（你和萧晓月走后～高家庄吴村长家里）】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶好！其它的三项你来想办法！</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶正午之前我会赶回来～</p>" . "<br>";
//
} elseif ($rid == 281) {
    echo "<p style='color: black'>【在方寸山下和猎户说话】</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶方寸山下的松树林里，有一棵银杏果树～摘一颗果子便够了！</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶鹿茸和鲤鱼就需要你自己想想办法了！
</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>～不会是个薄情之人</p>" . "<br>";
//快速任务
    $ydx = 10;//移动坐标x
    $ydy = 14;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 282;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "恢复药方";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 282) {
    echo "<p style='color: black'>【在方寸山下和猎户说话】</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶方寸山下的松树林里，有一棵银杏果树～摘一颗果子便够了！</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶鹿茸和鲤鱼就需要你自己想想办法了！
</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>～不会是个薄情之人</p>" . "<br>";
//快速任务
    $ydx = 10;//移动坐标x
    $ydy = 14;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 284) {
    echo "<p style='color: black'>【在方寸山下松树林里找到雄鹿】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶咦？有鹿的脚印～哈哈～就把夹子放这里吧！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶现在去附近找找看，把鹿赶到这里来就成了！(去3.2)</p>" . "<br>";
//任务进程改变
    $rwjc1 = 285;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "恢复药方";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 285) {
    echo "<p style='color: black'>【在方寸山下松树林里找到雄鹿】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶咦？有鹿的脚印～哈哈～就把夹子放这里吧！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶现在去附近找找看，把鹿赶到这里来就成了！(去3.2)</p>" . "<br>";
//
} elseif ($rid == 286) {
    echo "<p style='color: black'>【在方寸山下松树林里往左边松树林里追鹿】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶跑的还真快！嘿嘿～继续赶（雄鹿一看到你，就往左边林子里跑掉了） </p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 287;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "恢复药方";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 287) {
    echo "<p style='color: black'>【在方寸山下松树林里往左边松树林里追鹿】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶跑的还真快！嘿嘿～继续赶（雄鹿一看到你，就往左边林子里跑掉了） </p>" . "<br>";
} elseif ($rid == 288) {
    echo "<p style='color: black'>【高家庄街道和小乞丐说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶鹿兄啊～鹿兄！对不起啦～我朋友生病，要借你头上的角来入药，不会伤你性命。（取得鹿茸后，放鹿逃走） </p>" . "<br>";
//快速任务
    $ydx = 21;//移动坐标x
    $ydy = 8;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//银两加
    $yl1 = 100000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 200000;
    include("./pz/ini_pzz023.php");
//银两加
//物品加
    $wpdz1[] = "鹿茸（药引）";//名字
    $wpdz2[] = 6;//物品分类
    $wpdz3[] = 260;//物品id
    $wpdz4[] = 1;//	量
    $wpdz5[] = 1;//	重量
    include("./rwmap/rwget.php");
//物品加
//任务进程改变
    $rwjc1 = 289;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "恢复药方";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 289) {
    echo "<p style='color: black'>【高家庄街道和小乞丐说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶鹿兄啊～鹿兄！对不起啦～我朋友生病，要借你头上的角来入药，不会伤你性命。（取得鹿茸后，放鹿逃走） </p>" . "<br>";
//
} elseif ($rid == 302) {
    echo "<p style='color: black'>【高家庄农舍和霜儿说话】</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶嗯．．这下药材都齐全了你再等一下，药马上就煎好～让病人服下这帖六神丹要趁热喝喔！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 303;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "恢复药方";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 303) {
    echo "<p style='color: black'>【高家庄农舍和霜儿说话】</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶六神丹乃我吴家祖传秘方．．药性温和、滋补强身，对贫血伤风、气虚等极俱神效～是当年方寸道长给的秘方</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 304;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "恢复药方";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 304) {
    echo "<p style='color: black'>【高家庄农舍和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>（清清仍在床上昏迷不醒）</p>" . "<br>";
    echo "<p style='color: black'>吴文∶快让清姑娘服药吧</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶辛苦你们了．．（给清清饮下药汤）</p>" . "<br>";
//任务进程改变
    $rwjc1 = 305;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "恢复药方";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 305) {
    echo "<p style='color: black'>【高家庄农舍和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>（清清仍在床上昏迷不醒）</p>" . "<br>";
    echo "<p style='color: black'>吴文∶快让清姑娘服药吧</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶辛苦你们了．．（给清清饮下药汤）</p>" . "<br>";
//
} elseif ($rid == 306) {
    echo "<p style='color: black'>【高家庄农舍和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>吴文∶这附近一带的村子饱受海妖肆孽，能搬走的人都搬走了，本村幸有河水阻隔，才暂时得以安泰。三位既不是本地人，老夫劝你们还是早点离开吧。</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 307;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 307) {
    echo "<p style='color: black'>【高家庄农舍和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>清清∶不．．看到村民们遭受这般苦难，我觉得．．我应该替村民们做点事，以报答村长的恩情！</p>" . "<br>";
    echo "<p style='color: black'>吴文：清姑娘这般慈悲心肠，老夫实在太感激了．．</p>" . "<br>";
//任务进程改变
    $rwjc1 = 308;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 308) {
    echo "<p style='color: black'>【高家庄农舍和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶光是医人也不能解决问题吧！海妖一日不除，这里的居民还是永无宁日。大家何不想个办法来把海妖除掉？ </p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 309;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 309) {
    echo "<p style='color: black'>【高家庄农舍和霜儿说话】</p>" . "<br>";
    echo "<p style='color: black'>吴文∶唉．．谈何容易。海妖不同于其它妖怪。他们遇水则入，来去无形～更可怕的是会喷毒汁！一旦毒气攻心，老夫也医不活～以前只在海滨附近才会出现，可最近却四处横行。再这样下去，连这高家庄也不能住人了！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 310;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 310) {
    echo "<p style='color: black'>【高家庄农舍和霜儿说话】</p>" . "<br>";
    echo "<p style='color: black'>吴文∶唉．．谈何容易。海妖不同于其它妖怪。他们遇水则入，来去无形～更可怕的是会喷毒汁！一旦毒气攻心，老夫也医不活～以前只在海滨附近才会出现，可最近却四处横行。再这样下去，连这高家庄也不能住人了！</p>" . "<br>";
//
} elseif ($rid == 312) {
    echo "<p style='color: black'>【高家庄农舍和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>吴文∶坦白说．．老夫也曾派人去请清风道长下山，但是．．至今见过清风道长的人，没有一个人回来</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶不会吧．．．难不成那些道士会吃人！？</p>" . "<br>";
    echo "<p style='color: black'>吴文∶当然不．．而是都当了道士</p>" . "<br>";
//任务进程改变
    $rwjc1 = 313;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 313) {
    echo "<p style='color: black'>【高家庄农舍和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶也许．．那位道长真的是道术无边 </p>" . "<br>";
    echo "<p style='color: black'>吴文∶不．．少侠且听我说</p>" . "<br>";
    echo "<p style='color: black'>吴文∶小女霜儿和江家大公子少云自幼就订了亲的，俩人感情一向很好。前不久两家才说好，等到霜儿满十六岁就要来下聘。</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 314;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 314) {
    echo "<p style='color: black'>【高家庄农舍和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>一个月前老夫听说方寸山的清风道长法力高深，于是想请他下山除妖。少云和二个弟弟便自告奋勇前往，结果一去不返老夫和小女多次前往查问，才知道兄弟三人都出家当了道士这件事至今仍令人想不透．．</p>" . "<br>";
//任务进程改变
    $rwjc1 = 315;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 315) {
    echo "<p style='color: black'>【方寸山小院和扫地小童说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶听起来．．这村子的灾难还真不少．．村长放心～多亏你救了我朋友！如今村子有难，我们不能坐视不管！我们这就上山请道长下山除妖！（方寸山小院）  </p>" . "<br>";
//快速任务
    $ydx = 10;//移动坐标x
    $ydy = 1;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 316;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 316) {
    echo "<p style='color: black'>【方寸山小院和扫地小童说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶听起来．．这村子的灾难还真不少．．村长放心～多亏你救了我朋友！如今村子有难，我们不能坐视不管！我们这就上山请道长下山除妖！（方寸山小院）  </p>" . "<br>";
//快速任务
    $ydx = 10;//移动坐标x
    $ydy = 1;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 317) {
    echo "<p style='color: black'>【方寸山小院和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>晓风∶啊．．．施主．．是．．．．是来论道的吗？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶我们想求见贵观的清风道长 </p>" . "<br>";
    echo "<p style='color: black'>晓风∶道．．道长～有人来啦！！ </p>" . "<br>";
    echo "<p style='color: black'>晓风∶各位．．各位施主．．请留步贫．．贫道先进去通报一声</p>" . "<br>";
//任务进程改变
    $rwjc1 = 318;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 318) {
    echo "<p style='color: black'>【方寸山小院和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>晓风∶啊．．．施主．．是．．．．是来论道的吗？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶我们想求见贵观的清风道长 </p>" . "<br>";
    echo "<p style='color: black'>晓风∶道．．道长～有人来啦！！ </p>" . "<br>";
    echo "<p style='color: black'>晓风∶各位．．各位施主．．请留步贫．．贫道先进去通报一声</p>" . "<br>";
//
} elseif ($rid == 319) {
    echo "<p style='color: black'>【方寸山小院和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>清清∶．．．．．． </p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶清清．．怎么了？ </p>" . "<br>";
    echo "<p style='color: black'>清清∶我总觉得这间寺庙四周似乎．．有股妖气 </p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶妖气？怎么可能！这里可是道家清修之地呢？  </p>" . "<br>";
//经验加
    $jy = 120000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 320;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 320) {
    echo "<p style='color: black'>【方寸山小院和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>清清∶我也说不上来．．但．．并非是邪恶的妖气～ </p>" . "<br>";
    echo "<p style='color: black'>晓风∶三位施主，很抱歉．．观里出了点事，不便待客 </p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶哦！清风道长不在吗？  </p>" . "<br>";
//任务进程改变
    $rwjc1 = 321;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 321) {
    echo "<p style='color: black'>【方寸山小院和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>清清∶我也说不上来．．但．．并非是邪恶的妖气～ </p>" . "<br>";
    echo "<p style='color: black'>晓风∶三位施主，很抱歉．．观里出了点事，不便待客 </p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶哦！清风道长不在吗？  </p>" . "<br>";
//
} elseif ($rid == 322) {
    echo "<p style='color: black'>【方寸练功场和大胡子道士说话】</p>" . "<br>";
    echo "<p style='color: black'>（一满脸胡子的道士正拿把菜刀追着晓风砍～） </p>" . "<br>";
    echo "<p style='color: black'>晓风∶哇～！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶喂喂～道长！有话好说！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶我受不了啦！让我砍了这小王八蛋</p>" . "<br>";
//任务进程改变
    $rwjc1 = 323;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 323) {
    echo "<p style='color: black'>【方寸练功场和大胡子道士说话】</p>" . "<br>";
    echo "<p style='color: black'>（一满脸胡子的道士正拿把菜刀追着晓风砍～） </p>" . "<br>";
    echo "<p style='color: black'>晓风∶哇～！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶喂喂～道长！有话好说！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶我受不了啦！让我砍了这小王八蛋</p>" . "<br>";
//
} elseif ($rid == 325) {
    echo "<p style='color: black'>【方寸山练功场和大胡子道士说话】</p>" . "<br>";
    echo "<p style='color: black'>大胡子道士∶吃大米喝凉茶是吗！？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶可能你弄错了．．悟道清修之人本来就很少吃荤的</p>" . "<br>";
//任务进程改变
    $rwjc1 = 326;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "清风道长";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 326) {
    echo "<p style='color: black'>【方寸山练功场和大胡子道士说话】</p>" . "<br>";
    echo "<p style='color: black'>大胡子道士∶吃大米喝凉茶是吗！？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶可能你弄错了．．悟道清修之人本来就很少吃荤的</p>" . "<br>";
//
} elseif ($rid == 330) {
    echo "<p style='color: black'>【方寸练功室和清风道长谈谈】</p>" . "<br>";
    echo "<p style='color: black'>大晓风∶各位施主，我来引见各位见清风道长吧～（晓风向右边练功房离开）</p>" . "<br>";
//快速任务
    $ydx = 10;//移动坐标x
    $ydy = 10;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 120000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 331;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "方寸奇遇";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
} elseif ($rid == 331) {
    echo "<p style='color: black'>【方寸练功室和清风道长谈谈】</p>" . "<br>";
    echo "<p style='color: black'>大晓风∶各位施主，我来引见各位见清风道长吧～（晓风向右边练功房离开）</p>" . "<br>";
//
//快速任务
    $ydx = 10;//移动坐标x
    $ydy = 10;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
} elseif ($rid == 339) {
    echo "<p style='color: black'>【方寸山练功场教训清风道长】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶啊．．．不劳您相送了</p>" . "<br>";
    echo "<p style='color: black'>清风道长∶贫道让你进得来出不得！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 340;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 1;//任务要杀怪
    $rwjc4 = "方寸奇遇";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 340) {
    echo "<p style='color: black'>【方寸山练功场教训清风道长】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶啊．．．不劳您相送了</p>" . "<br>";
    echo "<p style='color: black'>清风道长∶贫道让你进得来出不得！</p>" . "<br>";
//
} elseif ($rid == 341) {
    echo "<p style='color: black'>【方寸练功场和晓风说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶你这妖道．．我踢死你！</p>" . "<br>";
    echo "<p style='color: black'>清清∶</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥～等一等！（～清风道长失去法力～变回了晓风）</p>" . "<br>";
//银两加
    $yl1 = 250000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 150000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 342;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "小玉奇缘";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 342) {
    echo "<p style='color: black'>【方寸练功场和晓风说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶你这妖道．．我踢死你！</p>" . "<br>";
    echo "<p style='color: black'>清清∶</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥～等一等！（～清风道长失去法力～变回了晓风）</p>" . "<br>";
//
} elseif ($rid == 354) {
    echo "<p style='color: black'>【方寸练功场和江少云说话】</p>" . "<br>";
    echo "<p style='color: black'>众人∶谢谢三位大侠，我们终于不必再受妖怪的控制了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶诸位之中，哪位是江少云？</p>" . "<br>";
    echo "<p style='color: black'>江少云∶我就是．．！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 355;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "赤血龙王";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 355) {
    echo "<p style='color: black'>【方寸练功场和江少云说话】</p>" . "<br>";
    echo "<p style='color: black'>众人∶谢谢三位大侠，我们终于不必再受妖怪的控制了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶诸位之中，哪位是江少云？</p>" . "<br>";
    echo "<p style='color: black'>江少云∶我就是．．！</p>" . "<br>";
//
} elseif ($rid == 356) {
    echo "<p style='color: black'>【在东海海底莽林（4，4）内找到化血池】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶清清！晓月！好臭的味道！这里是什么鬼地道？小玉：这一大片红色的池子应该就是赤血龙王所在的血池。</p>" . "<br>";
//任务进程改变
    $rwjc1 = 357;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "赤血龙王";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 357) {
    echo "<p style='color: black'>【海底莽林（4，4）和赤血龙王说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶天哪～好恶心．．哪来这么多血水啊！？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶呸．．难闻死了这股血腥味实在令人受不了</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶这么多的血，可见这妖魔不知残害了多少生命</p>" . "<br>";
//经验加
    $jy = 100000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 358;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "赤血龙王";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 358) {
    echo "<p style='color: black'>【海底莽林（4，4）和赤血龙王说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶天哪～好恶心．．哪来这么多血水啊！？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶呸．．难闻死了这股血腥味实在令人受不了</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶这么多的血，可见这妖魔不知残害了多少生命</p>" . "<br>";
//
} elseif ($rid == 365) {
    echo "<p style='color: black'>【海底莽林（4，4）和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>清清：传说～这些灵珠早已失落多年，我们今日竟能得到此物，莫非是天意．．</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶哈！既然是千年古物．．应该值不少钱！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 366;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "赤血龙王";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 366) {
    echo "<p style='color: black'>【海底莽林（4，4）和萧晓月说话】</p>" . "<br>";
    echo "<p style='color: black'>清清：传说～这些灵珠早已失落多年，我们今日竟能得到此物，莫非是天意．．</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶哈！既然是千年古物．．应该值不少钱！</p>" . "<br>";
//
} elseif ($rid == 367) {
    echo "<p style='color: black'>【海底莽林（4，4）和清清说话】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶清清．．怎么你今天讲的话都好深奥，好像变个人似的，是有什么心事吗？</p>" . "<br>";
    echo "<p style='color: black'>清清：没．．没有啦，我没事</p>" . "<br>";
//任务进程改变
    $rwjc1 = 368;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "天法长老";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 368) {
    echo "<p style='color: black'>【回高家庄和小乞丐说话】</p>" . "<br>";
    echo "<p style='color: black'>清清：这些日子．．我过得很快乐，你们不要担心．．．．．．．．．．</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：我们快离开这里吧，村民们在等我们的好消息呢。</p>" . "<br>";
//快速任务
    $ydx = 21;//移动坐标x
    $ydy = 8;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 110000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 369;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "天法长老";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
} elseif ($rid == 369) {
    echo "<p style='color: black'>【回高家庄和小乞丐说话】</p>" . "<br>";
    echo "<p style='color: black'>清清：这些日子．．我过得很快乐，你们不要担心．．．．．．．．．．</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：我们快离开这里吧，村民们在等我们的好消息呢。</p>" . "<br>";
//快速任务
    $ydx = 21;//移动坐标x
    $ydy = 8;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 372) {
    echo "<p style='color: black'>【去长安城兵马俑阵和兵马俑对话】</p>" . "<br>";
    echo "<p style='color: black'>清清∶</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥～霜儿姐姐对我有恩，我一定要去救她！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶那当然！这次我一定要把他们全部打回老家永远不敢再来烦你！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 93;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 150000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 373;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "天法长老";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 373) {
    echo "<p style='color: black'>【去长安城兵马俑阵和兵马俑对话】</p>" . "<br>";
    echo "<p style='color: black'>清清∶</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥～霜儿姐姐对我有恩，我一定要去救她！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶那当然！这次我一定要把他们全部打回老家永远不敢再来烦你！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 93;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 375) {
    echo "<p style='color: black'>【在兵马俑阵打败兵马俑】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：奇怪！这些石头人竟然也会说话了！</p>" . "<br>";
    echo "<p style='color: black'>清清：很可能是有人在背后控制！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶啊？控制石头人？！太厉害了！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 376;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 5;//任务要杀怪
    $rwjc4 = "天法长老";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 376) {
    echo "<p style='color: black'>【在兵马俑阵打败兵马俑】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：奇怪！这些石头人竟然也会说话了！</p>" . "<br>";
    echo "<p style='color: black'>清清：很可能是有人在背后控制！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶啊？控制石头人？！太厉害了！</p>" . "<br>";
//
} elseif ($rid == 378) {
    echo "<p style='color: black'>【兵马俑阵（4.4）打败项长老】</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶小心！有埋伏。</p>" . "<br>";
    echo "<p style='color: black'>项长老∶殿下～老臣得罪了。</p>" . "<br>";
    echo "<p style='color: black'>清清∶</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥！萧姐姐！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 379;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 1;//任务要杀怪
    $rwjc4 = "天法长老";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 379) {
    echo "<p style='color: black'>【兵马俑阵（4.4）打败项长老】</p>" . "<br>";
    echo "<p style='color: black'>霜儿∶小心！有埋伏。</p>" . "<br>";
    echo "<p style='color: black'>项长老∶殿下～老臣得罪了。</p>" . "<br>";
    echo "<p style='color: black'>清清∶</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥！萧姐姐！</p>" . "<br>";
//
} elseif ($rid == 388) {
    echo "<p style='color: black'>【兵马俑阵（4.4）和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>(项长老带清清离开后，吴村长带许多村民赶来！)吴村长∶乖女乖女儿！你没事吧？</p>" . "<br>";
    echo "<p style='color: black'>霜儿：我没事～可是．．清清妹妹．．</p>" . "<br>";
//任务进程改变
    $rwjc1 = 389;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "天法长老";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 389) {
    echo "<p style='color: black'>【兵马俑阵（4.4）和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>吴村长∶清姑娘呢？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月∶她．．为了救我们，跟那些苗人走了。</p>" . "<br>";
    echo "<p style='color: black'>吴村长∶唉．．清姑娘是个好女孩，许多事情她不愿连累别人，都自己承担了．．</p>" . "<br>";
//经验加
    $jy = 220000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 390;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "天法长老";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 390) {
    echo "<p style='color: black'>【兵马俑阵（4.4）和吴文说话】</p>" . "<br>";
    echo "<p style='color: black'>吴村长∶</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>少侠．．你可要再去找清姑娘吗？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>∶我不会让她离开我的！</p>" . "<br>";
//任务进程改变
    $rwjc1 = 391;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "天法长老";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 391) {
    echo "<p style='color: black'>【十字街头和李白说话】</p>" . "<br>";
    echo "<p style='color: black'>吴村长∶呵呵～那我就安心了．．打起精神来吧！我相信你和清姑娘还会再见面的。</p>" . "<br>";
    echo "<p style='color: black'>吴村长一行人走了</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 0;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 660000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 392;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "天法长老";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 392) {
    echo "<p style='color: black'>【十字街头和李白说话】</p>" . "<br>";
    echo "<p style='color: black'>吴村长∶呵呵～那我就安心了．．打起精神来吧！我相信你和清姑娘还会再见面的。</p>" . "<br>";
    echo "<p style='color: black'>吴村长一行人走了</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 0;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
} elseif ($rid == 393) {
    echo "<p style='color: black'>【到望南街寻找清清】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：晓月～你刚说什么呢？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：没有，大木头～哦不～</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥你有何打算？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我在想～清清刚痊愈不久，身子骨还十分虚弱，那老头肯定有所顾忌，放慢脚步以便清清修养，所以他们可能还逗留在长安城内。我想在他们离开之前，把清清救出来。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：救清姑娘这么有意义的事情，怎么能少了我萧晓月呢～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：不愧是我的好妹子，我们先出发到望南街找找吧。</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 85;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 150000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 394;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "寻找清清";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 394) {
    echo "<p style='color: black'>【到望南街寻找清清】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：晓月～你刚说什么呢？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：没有，大木头～哦不～</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥你有何打算？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我在想～清清刚痊愈不久，身子骨还十分虚弱，那老头肯定有所顾忌，放慢脚步以便清清修养，所以他们可能还逗留在长安城内。我想在他们离开之前，把清清救出来。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：救清姑娘这么有意义的事情，怎么能少了我萧晓月呢～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：不愧是我的好妹子，我们先出发到望南街找找吧。</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 85;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 395) {
    echo "<p style='color: black'>【到白虎大街寻找清清的下落】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：呜～～我的腿快断掉了～</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥，你就差没挖开地下的砖头看看清姑娘有没藏在下面了～～～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：只要找到清清，不管是用什么方式我都不介意。青龙街没有，我要到白虎大街去看看，就算翻转整个长安城我都要找到他们！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 13;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 150000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 396;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "寻找清清";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 396) {
    echo "<p style='color: black'>【到白虎大街寻找清清的下落】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：呜～～我的腿快断掉了～</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥，你就差没挖开地下的砖头看看清姑娘有没藏在下面了～～～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：只要找到清清，不管是用什么方式我都不介意。青龙街没有，我要到白虎大街去看看，就算翻转整个长安城我都要找到他们！</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 13;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 400) {
    echo "<p style='color: black'>【南城客栈和偷包袱的贼对话】</p>" . "<br>";
    echo "<p style='color: black'>古董商：我的包袱，可恶的贼竟然偷我的包袱，给我抓到了，一定要扒你的皮，拆你的骨，喝你的血！你们快去帮我抓住他，别给他逃了～～那里可是我的全部财产啊！如果没了，我全家就要到街边乞讨了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：你放心好了，像这样的小贼，我还不放在眼里，我一出手就可以帮你把包袱拿回来。</p>" . "<br>";
//经验加
    $jy = 150000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 401;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "寻找清清";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 401) {
    echo "<p style='color: black'>【南城客栈和偷包袱的贼对话】</p>" . "<br>";
    echo "<p style='color: black'>古董商：我的包袱，可恶的贼竟然偷我的包袱，给我抓到了，一定要扒你的皮，拆你的骨，喝你的血！你们快去帮我抓住他，别给他逃了～～那里可是我的全部财产啊！如果没了，我全家就要到街边乞讨了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：你放心好了，像这样的小贼，我还不放在眼里，我一出手就可以帮你把包袱拿回来。</p>" . "<br>";
//
} elseif ($rid == 404) {
    echo "<p style='color: black'>【往下边追踪飞贼】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥，你快点～那贼快逃到没影了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好好好～～我知道了。(飞贼往下方逃去)</p>" . "<br>";
//任务进程改变
    $rwjc1 = 405;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "追踪飞贼";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 405) {
    echo "<p style='color: black'>【往下边追踪飞贼】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥，你快点～那贼快逃到没影了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好好好～～我知道了。(飞贼往下方逃去)</p>" . "<br>";
//
} elseif ($rid == 406) {
    echo "<p style='color: black'>【背阴巷追捕飞贼】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥，他逃进了背阴巷了～～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好，我们继续追(飞贼往背阴巷逃去)</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 61;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//任务进程改变
    $rwjc1 = 407;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "追踪飞贼";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 407) {
    echo "<p style='color: black'>【背阴巷追捕飞贼】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥，他逃进了背阴巷了～～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好，我们继续追(飞贼往背阴巷逃去)</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 61;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 408) {
    echo "<p style='color: black'>【往上方追捕飞贼】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我有点吃不消了，晓月你追，我稍后跟上你。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：嗯～～我先行一步～(逃犯向上逃去)</p>" . "<br>";
//任务进程改变
    $rwjc1 = 409;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "追踪飞贼";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 409) {
    echo "<p style='color: black'>【往上方追捕飞贼】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我有点吃不消了，晓月你追，我稍后跟上你。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：嗯～～我先行一步～(逃犯向上逃去)</p>" . "<br>";
//
} elseif ($rid == 410) {
    echo "<p style='color: black'>【往上方追捕飞贼】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：毛贼的脚步放慢了，他的窝就在这一带了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我们别跟太近了，如果被他发现那可前功尽废了。(逃犯向上逃去)</p>" . "<br>";
//任务进程改变
    $rwjc1 = 411;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "追踪飞贼";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 411) {
    echo "<p style='color: black'>【往上方追捕飞贼】</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：毛贼的脚步放慢了，他的窝就在这一带了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我们别跟太近了，如果被他发现那可前功尽废了。(逃犯向上逃去)</p>" . "<br>";
//
} elseif ($rid == 412) {
    echo "<p style='color: black'>【鼓楼教训飞贼】</p>" . "<br>";
    echo "<p style='color: black'>飞贼：你们跟着我这么久，不知有何贵干？？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：我看你今晚一无所获，怕你明天会挨饿，因此大发善心，准备带你去一个吃饭不用钱的地方。</p>" . "<br>";
    echo "<p style='color: black'>飞贼：呵呵，还有这等好地方？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：大牢！</p>" . "<br>";
    echo "<p style='color: black'>飞贼：喔，如果你也进去陪我的话，我是很乐意进去坐坐。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：死到临头还口出狂言，看剑～～</p>" . "<br>";
//任务进程改变
    $rwjc1 = 413;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 1;//任务要杀怪
    $rwjc4 = "追踪飞贼";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 413) {
    echo "<p style='color: black'>【鼓楼教训飞贼】</p>" . "<br>";
    echo "<p style='color: black'>飞贼：你们跟着我这么久，不知有何贵干？？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：我看你今晚一无所获，怕你明天会挨饿，因此大发善心，准备带你去一个吃饭不用钱的地方。</p>" . "<br>";
    echo "<p style='color: black'>飞贼：呵呵，还有这等好地方？</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：大牢！</p>" . "<br>";
    echo "<p style='color: black'>飞贼：喔，如果你也进去陪我的话，我是很乐意进去坐坐。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：死到临头还口出狂言，看剑～～</p>" . "<br>";
//
} elseif ($rid == 414) {
    echo "<p style='color: black'>【和鼓楼萧晓月对话】</p>" . "<br>";
    echo "<p style='color: black'>飞贼：哎呀，天都亮了。不玩了，不玩了。这次真的要回家睡觉了。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：留下小命再说～</p>" . "<br>";
    echo "<p style='color: black'>飞贼：真是野蛮人，整天就知道要别人的命。以你的实力还想留我性命？看在你们陪我玩了一个晚上的份上就放过你，下次我一定不会再留手！(趁你们不备，飞贼往喜福会逃去)</p>" . "<br>";
//银两加
    $yl1 = 1200000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 660000;
    include("./pz/ini_pzz023.php");
//银两加
//物品加
    $wpdz1[] = "包袱";//名字
    $wpdz2[] = 6;//物品分类
    $wpdz3[] = 263;//物品id
    $wpdz4[] = 1;//	量
    $wpdz5[] = 1;//	重量
    include("./rwmap/rwget.php");
//物品加
//任务进程改变
    $rwjc1 = 415;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "追踪飞贼";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rid == 415) {
    echo "<p style='color: black'>【和鼓楼萧晓月对话】</p>" . "<br>";
    echo "<p style='color: black'>飞贼：哎呀，天都亮了。不玩了，不玩了。这次真的要回家睡觉了。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：留下小命再说～</p>" . "<br>";
    echo "<p style='color: black'>飞贼：真是野蛮人，整天就知道要别人的命。以你的实力还想留我性命？看在你们陪我玩了一个晚上的份上就放过你，下次我一定不会再留手！(趁你们不备，飞贼往喜福会逃去)</p>" . "<br>";
//
} elseif ($rid == 416) {
    $npcc11 = $npcc;//存值


//提供需要扣除的物品作为判读依据
    $wpdz1[] = "包袱";//名字
    $wpdz2[] = 6;//物品分类
    $wpdz3[] = 263;//物品id
    $wpdz4[] = 1;//	需要扣除的量
    $wpdz5[] = 1;//	重量
//提供需要扣除的物品作为判读依据
    include("./pz/ini_pzz026.php");
    $npcc = $npcc11;//返还存值
    if ($pd == 2) {
        echo "<p style='color: black'>【和南城客栈古董商对话】</p>" . "<br>";
        echo "<p style='color: black'>古董商：太好了～我的宝贝包袱回来了～咦？？怎么少了一件～我的炼妖壶呢？说！你们是不是和那飞贼是一伙的～</p>" . "<br>";
        echo "<p style='color: black'>萧晓月：我们辛辛苦苦帮你把包袱拿回来，你却冤枉我们。像你这种人就是活该被偷。</p>" . "<br>";
        echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：晓月！不可以这样说话。这位员外，如果我们和那飞贼是一伙的，又何必把包袱还给你呢？</p>" . "<br>";
//经验加
        $jy = 150000;
        include("./pz/ini_pzz023.php");
//任务进程改变
        $rwjc1 = 417;//任务进程id
        $rwjc2 = 0;//任务已杀怪
        $rwjc3 = 10;//任务要杀怪
        $rwjc4 = "追踪飞贼";//任务名字
        include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
        $rw10 = $npcc;//npc号
        include("./rw/jxl.php");
//继续聊
    } else {
        echo "<p style='color: black'>古董商：我的包袱还没找回来么？？需要：包袱x1～</p>" . "<br>";
    }
} elseif ($rid == 417) {
    echo "<p style='color: black'>【到喜福会打听情况】</p>" . "<br>";
    echo "<p style='color: black'>古董商：我不管，如果你们现在不交出炼妖壶，我就去报官。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：壶不在我们手上，怎么给你啊～</p>" . "<br>";
    echo "<p style='color: black'>古董商：那我只好去报官了～(古董商气冲冲地冲出了客栈)</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：看来我们被那飞贼摆了一道，他把宝壶拿走了，还给我们的只是一些没用的东西。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：那现在该怎么办呢？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：飞贼是往喜福会方向逃跑的，我想我们可以去那里打听到一些情况。</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 49;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//任务进程改变
    $rwjc1 = 418;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "追踪飞贼";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 418) {
    echo "<p style='color: black'>【到喜福会打听情况】</p>" . "<br>";
    echo "<p style='color: black'>古董商：我不管，如果你们现在不交出炼妖壶，我就去报官。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：壶不在我们手上，怎么给你啊～</p>" . "<br>";
    echo "<p style='color: black'>古董商：那我只好去报官了～(古董商气冲冲地冲出了客栈)</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：看来我们被那飞贼摆了一道，他把宝壶拿走了，还给我们的只是一些没用的东西。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：那现在该怎么办呢？</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：飞贼是往喜福会方向逃跑的，我想我们可以去那里打听到一些情况。</p>" . "<br>";
//
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 49;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
} elseif ($rid == 420) {
    echo "<p style='color: black'>【到鼓楼找萧晓月】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：请问大师，刚才是否看到一个穿红衣的姑娘经过？</p>" . "<br>";
    echo "<p style='color: black'>游方僧人：阿弥佗佛，那位女施主往鼓楼方向跑去了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：多谢大师。</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 57;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 150000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 421;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "追踪飞贼";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 421) {
    echo "<p style='color: black'>【到鼓楼找萧晓月】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：请问大师，刚才是否看到一个穿红衣的姑娘经过？</p>" . "<br>";
    echo "<p style='color: black'>游方僧人：阿弥佗佛，那位女施主往鼓楼方向跑去了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：多谢大师。</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 57;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 424) {
    echo "<p style='color: black'>【离开秘道回到鼓楼】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：如我所料，炼妖壶真的在这个包袱里。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：哼，就为了这么一个破壶害本小姐被人误以为是贼。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：这里并不安全，我们离开这里再说。（沿原路返回鼓楼秘道入口）</p>" . "<br>";
//经验加
    $jy = 150000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 425;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "调查真相";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 425) {
    echo "<p style='color: black'>【离开秘道回到鼓楼】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：如我所料，炼妖壶真的在这个包袱里。</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：哼，就为了这么一个破壶害本小姐被人误以为是贼。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：这里并不安全，我们离开这里再说。（沿原路返回鼓楼秘道入口）</p>" . "<br>";
//
} elseif ($rid == 426) {
    echo "<p style='color: black'>【你们被带到官府大厅受审】</p>" . "<br>";
    echo "<p style='color: black'>衙役把你和萧晓月押上公堂，两边衙役一起喊到：～威～武～</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 45;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 180000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 427;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "调查真相";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 427) {
    echo "<p style='color: black'>【你们被带到官府大厅受审】</p>" . "<br>";
    echo "<p style='color: black'>衙役把你和萧晓月押上公堂，两边衙役一起喊到：～威～武～</p>" . "<br>";
//
} elseif ($rid == 438) {
    $npcc11 = $npcc;//存值


//提供需要扣除的物品作为判读依据
    $wpdz1[] = "耳珠坠子";//名字
    $wpdz2[] = 6;//物品分类
    $wpdz3[] = 264;//物品id
    $wpdz4[] = 1;//	需要扣除的量
    $wpdz5[] = 1;//	重量
//提供需要扣除的物品作为判读依据
    include("./pz/ini_pzz026.php");
    $npcc = $npcc11;//返还存值
    if ($pd == 2) {
        echo "<p style='color: black'>【偷偷往舞娘的头发抹上磷粉】</p>" . "<br>";
        echo "<p style='color: black'>(你走到最左边舞娘身旁，拾起耳坠珠子，交给舞娘)</p>" . "<br>";
        echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：姑娘的耳坠掉了，踩坏了倒不可惜，不过如果硌到姑娘的脚就不妥了。舞娘欠了欠身：多谢公子～妾身在家排行第五，家人都唤我小五，公子如果赏脸就这样叫我吧！</p>" . "<br>";
        echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好～小五姑娘！我帮你把耳环戴上吧！</p>" . "<br>";
        echo "<p style='color: black'>失去耳坠珠子x1</p>" . "<br>";
//任务进程改变
        $rwjc1 = 439;//任务进程id
        $rwjc2 = 0;//任务已杀怪
        $rwjc3 = 10;//任务要杀怪
        $rwjc4 = "调查真相";//任务名字
        include("./pz/ini_pzz025.php");
//任务进程改变
    } else {
        echo "<p style='color: black'>你没有耳珠坠子</p>" . "<br>";
    }
    if ($pd == 0) {
//
//
    }
} elseif ($rid == 439) {
    echo "<p style='color: black'>【偷偷往舞娘的头发抹上磷粉】</p>" . "<br>";
    echo "<p style='color: black'>(你走到最左边舞娘身旁，拾起耳坠珠子，交给舞娘)</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：姑娘的耳坠掉了，踩坏了倒不可惜，不过如果硌到姑娘的脚就不妥了。舞娘欠了欠身：多谢公子～妾身在家排行第五，家人都唤我小五，公子如果赏脸就这样叫我吧！</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好～小五姑娘！我帮你把耳环戴上吧！</p>" . "<br>";
//
} elseif ($rid == 440) {
    echo "<p style='color: black'>【在喜福会监视舞娘的行踪】</p>" . "<br>";
    echo "<p style='color: black'>舞娘：为报答公子，就让妾身为公子献上一支霓裳羽衣舞吧～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好～这可是我三生修来的福气啊～(舞曲罢，舞步停)你拍手喊道：好～好～好～此舞只应天上有，人间那得几回闻～</p>" . "<br>";
    echo "<p style='color: black'>老板娘：小哥哥，那厢有客人唤小五过去…你是否可以～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好吧。你领她过去～</p>" . "<br>";
    echo "<p style='color: black'>舞娘：公子，妾身告退了～（下楼跟踪小五）</p>" . "<br>";
//银两加
    $yl1 = 880000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 1500000;
    include("./pz/ini_pzz023.php");
//银两加
//任务进程改变
    $rwjc1 = 441;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "调查真相";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 441) {
    echo "<p style='color: black'>【在喜福会监视舞娘的行踪】</p>" . "<br>";
    echo "<p style='color: black'>舞娘：为报答公子，就让妾身为公子献上一支霓裳羽衣舞吧～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好～这可是我三生修来的福气啊～(舞曲罢，舞步停)你拍手喊道：好～好～好～此舞只应天上有，人间那得几回闻～</p>" . "<br>";
    echo "<p style='color: black'>老板娘：小哥哥，那厢有客人唤小五过去…你是否可以～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好吧。你领她过去～</p>" . "<br>";
    echo "<p style='color: black'>舞娘：公子，妾身告退了～（下楼跟踪小五）</p>" . "<br>";
//
} elseif ($rid == 442) {
    echo "<p style='color: black'>【向左追踪舞娘】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：跑吧跑吧，看你能跑到那里去～～看你怎么跑出我的五指山～(蓝光向左移动)</p>" . "<br>";
//经验加
    $jy = 220000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 443;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "调查真相";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 443) {
    echo "<p style='color: black'>【向左追踪舞娘】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：跑吧跑吧，看你能跑到那里去～～看你怎么跑出我的五指山～(蓝光向左移动)</p>" . "<br>";
//
} elseif ($rid == 444) {
    echo "<p style='color: black'>【向右追踪舞娘】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：果然是这样～看来他们的老巢就是那里了～(蓝光向右移动了)</p>" . "<br>";
//经验加
    $jy = 220000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 445;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "调查真相";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 445) {
    echo "<p style='color: black'>【向右追踪舞娘】</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：果然是这样～看来他们的老巢就是那里了～(蓝光向右移动了)</p>" . "<br>";
//
} elseif ($rid == 446) {
    echo "<p style='color: black'>【偷听舞娘和妖艳女人的对话】</p>" . "<br>";
    echo "<p style='color: black'>(舞娘停下来，似乎在等人，片刻之后一个穿得十分妖艳的女人和喜福会的老板娘一起出现。后面还跟着两个穿绿衣的女子，她们都用薄纱遮着脸，看不清容貌，舞娘见到那个女人马上恭敬跪下来迎接。)</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：看来事情不简单，他们在讨论什么呢？让我好好听听。</p>" . "<br>";
//经验加
    $jy = 220000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 447;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "调查真相";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 447) {
    echo "<p style='color: black'>【偷听舞娘和妖艳女人的对话】</p>" . "<br>";
    echo "<p style='color: black'>(舞娘停下来，似乎在等人，片刻之后一个穿得十分妖艳的女人和喜福会的老板娘一起出现。后面还跟着两个穿绿衣的女子，她们都用薄纱遮着脸，看不清容貌，舞娘见到那个女人马上恭敬跪下来迎接。)</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：看来事情不简单，他们在讨论什么呢？让我好好听听。</p>" . "<br>";
//
} elseif ($rid == 449) {
    echo "<p style='color: black'>【秘道杀死绿衣女子】</p>" . "<br>";
    echo "<p style='color: black'>绿衣女子：你这个狂妄之徒，竟对教主出言不逊～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：你们作恶多端，跟我回去投案是最正确的选择。</p>" . "<br>";
    echo "<p style='color: black'>绿衣女子：废话少说，任何想伤害教主的人，都要死在我的剑下。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：既然是这样，我就对你们不客气了～～</p>" . "<br>";
//任务进程改变
    $rwjc1 = 450;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 1;//任务要杀怪
    $rwjc4 = "调查真相";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 450) {
    echo "<p style='color: black'>【秘道杀死绿衣女子】</p>" . "<br>";
    echo "<p style='color: black'>绿衣女子：你这个狂妄之徒，竟对教主出言不逊～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：你们作恶多端，跟我回去投案是最正确的选择。</p>" . "<br>";
    echo "<p style='color: black'>绿衣女子：废话少说，任何想伤害教主的人，都要死在我的剑下。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：既然是这样，我就对你们不客气了～～</p>" . "<br>";
//
} elseif ($rid == 451) {
    echo "<p style='color: black'>【秘道和绿衣女子对话】</p>" . "<br>";
    echo "<p style='color: black'>(绿衣女子已死，遗下另一个绿衣女子对你怒目而视)</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：小菜一碟，还有谁要过来挨打？</p>" . "<br>";
    echo "<p style='color: black'>绿衣女子：可恶～竟然杀了我的同伴，我看你是活得不耐烦了～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我劝你们不要做无谓的反抗了，你们修炼多一百年都未必是我的对手，何必送死呢～～</p>" . "<br>";
//银两加
    $yl1 = 2200000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 880000;
    include("./pz/ini_pzz023.php");
//银两加
//任务进程改变
    $rwjc1 = 452;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "调查真相";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 452) {
    echo "<p style='color: black'>【秘道和绿衣女子对话】</p>" . "<br>";
    echo "<p style='color: black'>(绿衣女子已死，遗下另一个绿衣女子对你怒目而视)</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：小菜一碟，还有谁要过来挨打？</p>" . "<br>";
    echo "<p style='color: black'>绿衣女子：可恶～竟然杀了我的同伴，我看你是活得不耐烦了～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我劝你们不要做无谓的反抗了，你们修炼多一百年都未必是我的对手，何必送死呢～～</p>" . "<br>";
//
} elseif ($rid == 456) {
    echo "<p style='color: black'>【秘道和飞花教教主对话】</p>" . "<br>";
    echo "<p style='color: black'>凌月：看不出来你还有些能耐，竟可以打败我的护卫～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：不是我能耐大，是你那些个护卫无能而已～</p>" . "<br>";
    echo "<p style='color: black'>凌月：呵呵，你蛮张狂的，不过我就是喜欢你这种人。不如加入我飞花教，成为本教主的左护法，荣华富贵享之不尽。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我对你那个什么破烂教的左护法一点兴趣都没有，不知道你对官府的大牢有没有兴趣呢？我可以护送你过去住上一住。</p>" . "<br>";
//银两加
    $yl1 = 3600000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 1000000;
    include("./pz/ini_pzz023.php");
//银两加
//任务进程改变
    $rwjc1 = 457;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "调查真相";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 457) {
    echo "<p style='color: black'>【秘道和飞花教教主对话】</p>" . "<br>";
    echo "<p style='color: black'>凌月：看不出来你还有些能耐，竟可以打败我的护卫～</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：不是我能耐大，是你那些个护卫无能而已～</p>" . "<br>";
    echo "<p style='color: black'>凌月：呵呵，你蛮张狂的，不过我就是喜欢你这种人。不如加入我飞花教，成为本教主的左护法，荣华富贵享之不尽。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我对你那个什么破烂教的左护法一点兴趣都没有，不知道你对官府的大牢有没有兴趣呢？我可以护送你过去住上一住。</p>" . "<br>";
//
} elseif ($rid == 474) {
    echo "<p style='color: black'>【和长安城西书生对话】</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：你们也要到嘉峪关去吗？最近在去往嘉峪关的路上出现了几个很恐怖的马贼,他们专门抢劫路人。听说他们身高八丈，两只眼睛在夜里还会发出绿幽幽的光芒，经过他们身边的人都会被吓死。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：听了你的形容，我怎么都想象不到那个是人～～我</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>不怕地不怕，还会怕那么几个马贼！？</p>" . "<br>";
//任务进程改变
    $rwjc1 = 475;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "胆小书生";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 475) {
    echo "<p style='color: black'>【和长安城西书生对话】</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：看你这身打扮，就知道你是一个武功高强，有着侠义心肠的人。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：你从我这身这么平常的打扮，可以看出这么多东西还真是难为你了。</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：像你这么有侠义心肠的人，一定不忍心我这个手无缚鸡之力的书生独自上路的。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：抱歉，我一向只保护女人，特别是漂亮的女人。男的滚到一边去。</p>" . "<br>";
    echo "<p style='color: black'>我给200两报酬你们，请你们带我出城吧～</p>" . "<br>";
//经验加
    $jy = 450000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 476;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "胆小书生";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 476) {
    echo "<p style='color: black'>【和长安城西书生对话】</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：唉～我的母亲患有重病，正所谓百善孝为先，如果我不回去就是不孝了。不孝之人活于世上又有何意思呢？我不如就死在这里好了。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：好了，好了，我们带你过去。但是在此之前，你可以先松开你的手吗？我的袖子快被你扯掉了。还有就是，报酬得加多点。</p>" . "<br>";
//任务进程改变
    $rwjc1 = 477;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "胆小书生";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//继续聊
    $rw10 = $npcc;//npc号
    include("./rw/jxl.php");
//继续聊
} elseif ($rid == 477) {
    echo "<p style='color: black'>【和金城郡南的摊贩说话】</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：太感谢你们～只要你们肯带我出城，我就给你们3000两。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我们脚程比较快，你可得跟紧我们。</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：嗯嗯，我会紧紧跟随恩公们的。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：为了更好保障你的安全，先付一半报酬吧～</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：全听恩公的吩咐～</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 102;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//经验加
    $jy = 450000;
    include("./pz/ini_pzz023.php");
//任务进程改变
    $rwjc1 = 478;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "胆小书生";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 478) {
    echo "<p style='color: black'>【和金城郡南的摊贩说话】</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：太感谢你们～只要你们肯带我出城，我就给你们3000两。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：我们脚程比较快，你可得跟紧我们。</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：嗯嗯，我会紧紧跟随恩公们的。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：为了更好保障你的安全，先付一半报酬吧～</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：全听恩公的吩咐～</p>" . "<br>";
//快速任务
    $ydx = 1;//移动坐标x
    $ydy = 102;//移动坐标y
    $ydfy = 100;//传送费用	
    include("./rw/ksrw.php");
//快速任务
//
} elseif ($rid == 479) {
    echo "<p style='color: black'>【和饮马峪书生对话】</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：恩公们，你看连摊贩大哥都这样说了，那马盗一定比传说中更恐怖。不如我们回头～～</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：胆小鬼，我和</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥还没怕，你怕什么。不知道刚刚是谁用哭丧的脸孔乞求我们带他出城，还说什么百善孝为先，还没走到一半就想退缩，这种行为是绝对不允许的。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：晓月说得对，无论做什么都不可以半途而废，而且有我们在，你没什么可以怕的。</p>" . "<br>";
//银两加
    $yl1 = 5000000;
    $wwpsl = $yl1;
    include("./pz/ini_pz03.php");
//经验加
    $jy = 5000000;
    include("./pz/ini_pzz023.php");
//银两加
//任务进程改变
    $rwjc1 = 480;//任务进程id
    $rwjc2 = 0;//任务已杀怪
    $rwjc3 = 10;//任务要杀怪
    $rwjc4 = "胆小书生";//任务名字
    include("./pz/ini_pzz025.php");
//任务进程改变
//
//
} elseif ($rid == 480) {
    echo "<p style='color: black'>【和饮马峪书生对话】</p>" . "<br>";
    echo "<p style='color: black'>胆小的书生：恩公们，你看连摊贩大哥都这样说了，那马盗一定比传说中更恐怖。不如我们回头～～</p>" . "<br>";
    echo "<p style='color: black'>萧晓月：胆小鬼，我和</p>" . "<p style='color: black'>$name</p>" . "<p style='color: black'>大哥还没怕，你怕什么。不知道刚刚是谁用哭丧的脸孔乞求我们带他出城，还说什么百善孝为先，还没走到一半就想退缩，这种行为是绝对不允许的。</p>" . "<br>";
    echo "<p style='color: black'>$name</p>" . "<p style='color: black'>：晓月说得对，无论做什么都不可以半途而废，而且有我们在，你没什么可以怕的。</p>" . "<br>";
//
} else {
    echo "<p style='color: black'>纳尼？？<(￣3￣)> 居然找不到页面了请重试</p>" . "<br>";
//
}
