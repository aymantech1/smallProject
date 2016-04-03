<?php
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Email\Email;
session_start();

$update = new Email();
$update->prepare($_POST);
$update->update();
