<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Hobby\Hobby;
$id = $_GET['id'];
$delete = new Hobby();
$delete->prepare($_GET)->delete();
