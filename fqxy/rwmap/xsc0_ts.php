<?php
if ($m == 1) {
    $rwstr = $xrwidd . "_" . $xrwfl;
    $rid = $rw2[$rwstr];
    if ($rid == 1 || $rid == 3 || $rid == 4 || $rid == 6 || $rid == 9 || $rid == 11 || $rid == 12 || $rid == 13 || $rid == 14 || $rid == 16) {
        ///////////////////////////////////////插入图片 /////////////////////////////
        if ($tpbl == 1) {
            $img = './pic/ts/ts1.png';
            echo '<img src="' . $img . ' "alt="图片"/〉';
            echo "<br>";
        } else {
            echo "<p style='color: black'>！</p>";
        }
    }
    if ($rid == 2 || $rid == 5 || $rid == 7 || $rid == 15 || $rid == 10 || $rid == 17) {
        ///////////////////////////////////////插入图片 /////////////////////////////
        if ($tpbl == 1) {
            $img = './pic/ts/ts2.png';
            echo '<img src="' . $img . ' "alt="图片"/〉';
            echo "<br>";
        } else {
            echo "<p style='color: black'>？</p>";
        }
    }
} else {
    //////////////////////////////////////一个npc多项任务直接上感叹号//////////////////////////
    if ($m >= 2) {
        if ($tpbl == 1) {
            $img = './pic/ts/ts1.png';
            echo '<img src="' . $img . ' "alt="图片"/〉';
            echo "<br>";
        } else {
            echo "<p style='color: black'>！</p>";
        }
    }
}


