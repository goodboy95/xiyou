<?php



if ($dty==0) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>彩楼广场</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
    //cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=7;
$npc[]=5379;//需要改动
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>天竺国车夫（传送）</p></a>"."<br>";
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>波澜道</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼南街</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼西街</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼东街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>街心有一座绘红画绿的琉璃彩楼</p>"."<br>";
} elseif ($dty==1) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>波澜道</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>皇宫</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼广场</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>酒馆</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>客店</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>条汉白玉石砌成的平坦大道，宽十丈！</p>"."<br>";
  
 } elseif ($dty==2) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>皇宫</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>波澜道</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>但见金钉朱户，画栋雕梁，巍峨壮丽，光耀溢目。</p>"."<br>";
  
   } elseif ($dty==3) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>酒馆</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>波澜道</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>几个江湖豪客正在推杯换盏，已经喝得酩酊大醉了！</p>"."<br>";
  
  
  
  
     } elseif ($dty==4) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>客店</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>波澜道</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>这里每天都有很多的人，所以总是热闹非凡。</p>"."<br>";
       } elseif ($dty==5) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>彩楼南街</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼广场</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南门</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>药铺</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>拍卖行</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>街上十分热闹，人来人往川流不息！</p>"."<br>";
  
  
         } elseif ($dty==6) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>南门</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼南街</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>石路</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>山石砌成的高大城楼，楼顶上有了望哨！</p>"."<br>";
  
           } elseif ($dty==7) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>石路</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>南门</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>这里是条青石路</p>"."<br>";
  
  
   } elseif ($dty==8) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>药铺</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼南街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>这里的药物种类齐全！</p>"."<br>";
  
  
  
  
     } elseif ($dty==9) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>拍卖行</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼南街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>老板正忙碌的张罗着生意！</p>"."<br>";
  
  
       } elseif ($dty==10) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>彩楼西街</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小街</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>书局</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>西门</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼广场</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>街上十分热闹，人来人往川流不息！</p>"."<br>";
  
         } elseif ($dty==11) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>西门</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>妙灵街</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼西街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>山石砌成的高大城楼，楼顶上有了望哨！</p>"."<br>";
  
  
           } elseif ($dty==12) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>妙灵街</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>西门</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>卦签铺</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>街道两旁的杨树林让这里显得格外幽静。</p>"."<br>";
             } elseif ($dty==13) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>卦签铺</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>妙灵街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>正中摆了一仙桌，上有几只插满竹签的雕花白石签筒。</p>"."<br>";
  
               } elseif ($dty==14) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>书局</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼西街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>现在书局冷冷清清，老板正看着书架上的一摞摞书发呆。</p>"."<br>";
  
  
                 } elseif ($dty==15) {
  //地名
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>小街</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>寇家庄</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼西街</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>私塾</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>一条幽静的小街！</p>"."<br>";
                   } elseif ($dty==16) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>寇家庄</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>一座大宅院！</p>"."<br>";
  
                     } elseif ($dty==17) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>私塾</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>小街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>明亮的堂屋里，放着一书案，上面一根铜戒尺！</p>"."<br>";
  
                       } elseif ($dty==18) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>彩楼东街</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>兵器铺</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>钱庄</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼广场</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>凌云街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>街上十分热闹，人来人往川流不息！</p>"."<br>";
  
                         } elseif ($dty==19) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>凌云街</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>光禄寺</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>成衣店</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼东街</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东门</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>五花八门的招牌幡旗临街挑起！</p>"."<br>";
  
  
  
  
                           } elseif ($dty==20) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>东门</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>凌云街</p></a>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=6;
$npc[]=0;
echo "<p style='color: black'>右:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>大路</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>山石砌成的高大城楼，楼顶上有了望哨！</p>"."<br>";
  
                             } elseif ($dty==21) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>大路</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=5;
$npc[]=0;
echo "<p style='color: black'>左:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>东门</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>铺着碎石子的野外大路，路边开着无名花草。</p>"."<br>";
  
  
                               } elseif ($dty==22) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>光禄寺</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>凌云街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>光禄寺红墙青瓦，自街上看去十分醒目。</p>"."<br>";
    
                               } elseif ($dty==23) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>成衣店</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>凌云街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>这里的做的衣服美观大方所以生意非常好！</p>"."<br>";
  
  
                                 } elseif ($dty==24) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>兵器铺</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=4;
$npc[]=0;
echo "<p style='color: black'>下:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼东街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  
  //地点描述
  echo "<p style='color: black'>这里横七竖八地放着各种兵器！</p>"."<br>";
    
                               } elseif ($dty==25) {
  //地名
      $cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<p style='color: black'>钱庄</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>刷新</p></a>"."<br>";
  //npc
  //出口
  
  echo "<p style='color: black'>请选择出口</p>"."<br>";
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=3;
$npc[]=0;
echo "<p style='color: black'>上:</p>"."<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>彩楼东街</p></a>"."<br>";
//查看地图
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=8;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><p style='color: blue'>查看地图</p></a>"."<br>";
  //地点描述
  echo "<p style='color: black'>钱庄的金字招牌在阳光的照耀下闪闪发光！</p>"."<br>";
  
  
  
  
  
  
  
  
  
      } else {
  echo "错误地图,编号：".$dty."<br>";
}









?>