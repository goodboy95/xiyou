<?php

if ($rw1 == 1) {
    if ($rw2 >= 1 && $rw2 <= 100) {
        include("hdrw01_1.php");
    } elseif ($rw2 >= 101 && $rw2 <= 200) {
        include("hdrw02_1.php");
    } elseif ($rw2 >= 201 && $rw2 <= 300) {
        include("hdrw03_1.php");
    } elseif ($rw2 >= 301 && $rw2 <= 400) {
        include("hdrw04_1.php");
    } elseif ($rw2 >= 401 && $rw2 <= 500) {
        include("hdrw05_1.php");
    } else {
        echo "<p style='color: black'>没有这个任务变量编号" . $rw2 . "请尝试联系gm解决此问题！！</p><br>";
    }
} else {
    echo "<p style='color: black'>没有这个任务id编号" . $rw1 . "请尝试联系gm解决此问题！！</p><br>";
}
