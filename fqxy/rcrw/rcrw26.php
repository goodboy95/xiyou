<?	



include("./ini/zxrw_ini.php");
//首次接取任务	
////////////////////任务属性//////////////
$rwidd=26;//任务的id
$rwfl=5;//任务的分类1主线2支线5日常4活动
$rwmz="大唐国师（80-100）";
include("./rwmap/rwpd.php");
////////////////////任务属性//////////////
//首次接取任务	
$rwstr=$rwidd."_".$rwfl;
$rcrwbl=($iniFile->getItem('任务变量',$rwstr));
$rw5=$rwfl;
$rw1=$rwidd;
if ($rcrwbl==1) {
echo "<p style='color: black'>为国家出一份力，誓死为国家做贡献</p>"."<br>";
echo "<p style='color: black'>收集〖钻魂〗x50</p>"."<br>";

//任务进程改变
$rwjc1=2;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="大唐国师（40-60）（国家任务）";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
} elseif ($rcrwbl==2) {
$npcc11=$npcc;//存值

//提供需要扣除的物品作为判读依据
$wpdz1[]="〖钻魂〗";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=312;//物品id
$wpdz4[]=50;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
echo "<p style='color: black'>年纪轻轻既然如此了得，果然不负众望啊！</p>"."<br>";

//银两加
$yl1=5000000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");

//经验加
$jy=60000000;
include("./pz/ini_pzz023.php");
//经验加




//增加国家贡献
$gxx=10;//个人贡献
$gxx02=10;//国家经验
$gxx03=10;//国家声望
include("./yxpz/gjgx_pz.php");
//增加国家贡献







//任务进程改变
$rwjc1=4;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=20;//任务要杀怪
$rwjc4="大唐国师（80-100）（国家任务）";//任务名字
include("./pz/ini_pzz025.php");




//删除任务
include("./sql/mysql.php");//调用数据库连接 
$q2="yxrw".$wjid;
$strsql = "delete from $q2 where rwid=$rwidd and rwfl=$rwfl ";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/zxrw_ini.php");
$rwstr=$rwidd."_".$rwfl;
# 删除一个子项
$iniFile->delItem('任务id', $rwstr);
# 删除一个子项
$iniFile->delItem('任务变量', $rwstr);
# 删除一个子项
$iniFile->delItem('已杀怪', $rwstr);
# 删除一个子项
$iniFile->delItem('要杀怪', $rwstr);
# 删除一个子项
$iniFile->delItem('任务分类', $rwstr);
# 删除一个子项
$iniFile->delItem('任务名字', $rwstr);
//删除任务
$hdcs=$hdcs+1;
$q2="hd".$wjid;
$strsql = "update $q2 set hdcs=$hdcs where hdid=$hdid";//物品id号必改值
$result = mysqli_query($conn, $strsql);
include("./ini/hd_ini.php");
$iniFile->updItem('活动次数', [$hdid => $hdcs]);	
} else{
echo "<p style='color: black'>为国家出一份力，誓死为国家做贡献</p>"."<br>";

echo "<p style='color: black'>收集〖钻魂〗x50</p>"."<br>";
}





} else{	
echo "<p style='color: red'>对不起！请联系小轩GM处理</p></br>";

}


