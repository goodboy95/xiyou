<?


if ($wjid == 10000001) {//gm号可看

    echo "<p style='color: red'>==========任务调试信息=========</p>" . "<br>";
    echo "任务编号：" . $rw1 . "号<br>";
    echo "任务进程值：" . $rw2 . "号<br>";
    echo "任务名称：【" . $rw6 . "】<br>";
    echo "<p style='color: red'>==========任务调试信息=========</p>" . "<br>";

} else {

}

$rid = $rw2;
$xysg = $rw4;
$ysg = $rw3;
if ($rw1 == 1) {
    if ($rid >= 1 && $rid <= 100) {
        include("zxrw01_1.php");
    } elseif ($rid >= 101 && $rid <= 200) {
        include("zxrw02_1.php");
    } elseif ($rid >= 201 && $rid <= 300) {
        include("zxrw03_1.php");
    } elseif ($rid >= 301 && $rid <= 400) {
        include("zxrw04_1.php");
    } elseif ($rid >= 401 && $rid <= 500) {
        include("zxrw05_1.php");
    } else {
        echo "<p style='color: black'>没有这个任务变量：" . $rid . "请尝试联系gm解决此问题！！</p><br>";
    }

} elseif ($rw1 == 2) {

} else {
    echo "<p style='color: black'>没有这个任务ID：" . $rw1 . "请尝试联系gm解决此问题！！</p><br>";
}

