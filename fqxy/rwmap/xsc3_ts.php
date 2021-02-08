<?php
if ($m == 1) {
    $rwstr = $xrwidd . "_" . $xrwfl;
    $rrw2 = $rw2[$rwstr];
    echo $rrw2;
    if ($rrw2 == 7 || $rrw2 == 8) {
        ///////////////////////////////////////插入图片 /////////////////////////////
        if ($tpbl == 1) {
            $img = './pic/ts/ts1.png';
            echo '<img src="' . $img . ' "alt="图片"/〉';
            echo "<br>";
        } else {
            echo "<p style='color: black'>！</p>";
        }
    }
    if ($rrw2 == 9) {
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
            $img = 'pic/ts/ts1.png';
            echo '<img src="' . $img . ' "alt="图片"/〉';
            echo "<br>";
        } else {
            echo "<p style='color: black'>！</p>";
        }
    }
}

