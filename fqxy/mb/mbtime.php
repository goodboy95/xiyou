<?php
//天降密宝
$tjmbLastTimeFile = "./mb/" . $mbflie . ".php";
if (file_exists($tjmbLastTimeFile)) {
    include($tjmbLastTimeFile);
}
$mbxs = 1;
$date = date("Y-m-d H:i:s");
if ($date > $mb) {
    $mbxs = 2;
}
?>







