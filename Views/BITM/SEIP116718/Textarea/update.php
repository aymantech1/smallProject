<?php
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Textarea\Textarea;
session_start();

$update = new Textarea();
$update->prepare($_POST);
$update->update();
print_r($_POST);
