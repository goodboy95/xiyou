<?	

include("./ini/zxrw_ini.php");
//首次接取任务	
////////////////////任务属性//////////////
$rwidd=11;//任务的id
$rwfl=5;//任务的分类1主线2支线5日常4活动
$rwmz="女儿国国师（60-80）";
include("./rwmap/rwpd.php");
////////////////////任务属性//////////////
//首次接取任务	
$rwstr=$rwidd."_".$rwfl;
$rcrwbl=($iniFile->getItem('任务变量',$rwstr));
$rw5=$rwfl;
$rw1=$rwidd;
if ($rcrwbl==1) {
echo "<p style='color: black'>是这样的我们女儿国需要一大批材料需要用于国家建设！你去找一些来吧！！拜托了</p>"."<br>";
echo "<p style='color: black'>天兵（掉落：银色星辰）</p>"."<br>";

//任务进程改变
$rwjc1=2;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=10;//任务要杀怪
$rwjc4="女儿国国师的请求（60-80）";//任务名字
include("./pz/ini_pzz025.php");
//任务进程改变
//快速任务
$ydx=31;//移动坐标x
$ydy=12;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");
//快速任务	
} elseif ($rcrwbl==2) {
$npcc11=$npcc;//存值

//提供需要扣除的物品作为判读依据
$wpdz1[]="银色星辰";//名字
$wpdz2[]=2;//物品分类
$wpdz3[]=356;//物品id
$wpdz4[]=20;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");
$npcc=$npcc11;//返还存值
if ($pd==2) {
echo "<p style='color: black'>年纪轻轻既然如此了得，果然不负众望啊！</p>"."<br>";
//银两加
$yl1=1600000;
$wwpsl=$yl1; 
include("./pz/ini_pz03.php");
//任务进程改变
$rwjc1=4;//任务进程id
$rwjc2=0;//任务已杀怪
$rwjc3=20;//任务要杀怪
$rwjc4="女儿国国师的请求（60-80）";//任务名字
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
echo "<p style='color: black'>是这样的我们女儿国需要一大批材料需要用于国家建设！你去找一些来吧！！拜托了</p>"."<br>";
//快速任务
$ydx=31;//移动坐标x
$ydy=12;//移动坐标y
$ydfy=100;//传送费用	
include("./rw/ksrw.php");	
echo "<p style='color: black'>需要银色星辰x20，快去吧！</p>"."<br>";
}





} else{	
echo "<p style='color: red'>对不起！请联系小轩GM处理</p></br>";

}


