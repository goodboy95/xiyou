<?php
$h = date('H') * 1;
$i = date('i') * 1;
$wjid = $_GET['uid'];
if ($wjid != 10000001) {
    if ($h >= 23 && $i >= 50) {
        include("wh.php");
        exit;
    }
}
