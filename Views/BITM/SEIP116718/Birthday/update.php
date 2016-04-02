<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Birthday\Birthday;

echo "<pre>";
print_r($_POST);
echo "</pre>";

session_start();

$update = new Birthday();
$update->prepare($_POST);
$update->update();
