<?php
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Gender\Gender;
session_start();

$update = new Gender();
$update->prepare($_POST);
$update->update();
