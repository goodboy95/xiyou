<?php









//以前使用的时间



$inina="zf.ini";
//路径
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;	
# 实例化ini文件操作类，并载入 .ini文件
$iniFile = new iniFile($ininame);




//检测时间
$b1=($iniFile->getItem('物品时间年',$wwpid1));
$b2=($iniFile->getItem('物品时间月',$wwpid1));
$b3=($iniFile->getItem('物品时间日',$wwpid1));
$b4=($iniFile->getItem('物品时间时',$wwpid1));
$b5=($iniFile->getItem('物品时间分',$wwpid1));
$b6=($iniFile->getItem('物品时间秒',$wwpid1));


$xxm=0;

//求年的单双

if($b1){



//现在的时间
$y= date('Y')*1;
$m= date('m')*1;
$d= date('d')*1;
$h= date('H')*1;
$i= date('i')*1;
$s= date('s')*1;

if($y%4 ==0){
$y1=366;
} else{
$y1=365;
}
if($m ==2){

if($y1==366){
$m1=29;
} elseif($y1==365){  
 $m1=28;
}
} else{


if($m ==1||$m ==3||$m ==5||$m ==7||$m ==8||$m ==10||$m ==12){
$m1=31;
} elseif($m ==4||$m ==6||$m ==9||$m ==11){  
$m1=30;
}




}

if($b1%4 ==0){
$y2=366;
} else{
$y2=365;
}
if($b2 ==2){
if($y2==366){
$m2=29;
} elseif($y2==365){  
 $m2=28;
}
} else{

if($b2 ==1||$b2 ==3||$b2 ==5||$b2 ==7||$b2 ==8||$b2 ==10||$b2 ==12){
 $m2=31;

} elseif($b2 ==4||$b2 ==6||$b2 ==9||$b2 ==11){  
 $m2=30;
}

}




//如果月份不相等需要加上上个月的天数
if($m-$b2==1&&$b1==$y||$m-$b2==-11&&$b1+1==$y){

$tss=($b3-1)*60*60*24+$b4*60*60+$b5*60+$b6;
$ts=$m2*60*60*24;
$xx2=$ts-$tss+($d-1)*60*60*24+$h*60*60+$i*60+$s;

} elseif($m-$b2==2&&$b1==$y){  
$tss=($b3-1)*60*60*24+$b4*60*60+$b5*60+$b6;
$ts1=$m2*60*60*24;
if($b2 ==2){
if($b1%4 ==0){
$m8=29;
} else{
$m8=28;
}
} else{
$m8=$m2;
}

$ts=$m8*60*60*24;
$xx2=$ts1-$tss+$ts+($d-1)*60*60*24+$h*60*60+$i*60+$s;

} elseif($m-$b2==0&&$b1==$y){  

$xx=$m*60*60*24*$m1+$d*60*60*24+$h*60*60+$i*60+$s;

$xx1=$b2*60*60*24*$m2+$b3*60*60*24+$b4*60*60+$b5*60+$b6;
$xx2=$xx-$xx1;



} else{
$xx2=$zfsj;


}




$zf="";
$xxm=0;
if($xx2 <$zfsj&&$xx2>0){
$xxm=$xxm+1;

$h0=floor(($zfsj-$xx2)/(24*60*60));
$h1=($zfsj-$xx2)-$h0*60*60*24;
$h2=floor($h1/3600);
$h3=($zfsj-$xx2)-$h0*60*60*24-$h2*60*60;
$h4=floor($h3/60);
$h5=($zfsj-$xx2)-$h0*60*60*24-$h2*60*60-$h4*60;

if($h0 >0){
$zf=$h0."天";
$zf=$zf.$h2."小时";
$ztzf=1;
}

if($h0 <1){
if($h2 >0){
$zf=$zf.$h2."小时";
$ztzf=1;
}
if($h2< 1){
if($h4 >0){
$zf=$zf.$h4."分钟";
$ztzf=1;
}
if($h4 <1){
if($h5 >0){
$zf=$zf.$h5."秒";
$ztzf=1;
}
}

}




}


} else{
$zf="0分钟";
$ztzf=0;
}






} else{

$zf="0分钟";
$ztzf=0;

}







