<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Textarea\Textarea;

$id = $_GET['id'];
echo $id;

$delete = new Textarea();
$delete ->permanentDelete($id);