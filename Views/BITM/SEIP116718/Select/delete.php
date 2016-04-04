<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Select\Select;

$id = $_GET['id'];

$delete = new Select();
$delete ->permanentDelete($id);