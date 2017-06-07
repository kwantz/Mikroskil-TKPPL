<?php

include('GlobalCtrl.php');

$global = new GlobalCtrl();
$arr = $global->getRecentUser();

echo json_encode($arr);