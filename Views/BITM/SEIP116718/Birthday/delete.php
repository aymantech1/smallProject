<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Birthday\Birthday;
$id = $_GET['id'];
//echo $id;

$delete = new Birthday();
$delete->permanentDelete($id);

