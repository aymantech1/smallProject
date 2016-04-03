<?php
$id = $_GET['id'];
//echo $id;
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Gender\Gender;

$restore = new Gender();

$re = $restore->restoreData($id);
