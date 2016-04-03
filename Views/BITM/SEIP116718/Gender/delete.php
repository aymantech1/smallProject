<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Gender\Gender;

$id = $_GET['id'];

$delete = new Gender();
$delete ->permanentDelete($id);