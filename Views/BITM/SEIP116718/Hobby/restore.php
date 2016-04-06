<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Hobby\Hobby;

$id = $_GET['id'];

$restore = new Hobby();
$restore->prepare($_GET);
$restore->restore($id);