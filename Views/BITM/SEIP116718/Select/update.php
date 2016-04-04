<?php
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Select\Select;
session_start();

$update = new Select();
$update->prepare($_POST);
$update->update();

echo "<pre>";
print_r($_POST);
echo "</pre>";
