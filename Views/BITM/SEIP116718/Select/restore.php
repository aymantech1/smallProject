<?php
$id = $_GET['id'];
//echo $id;
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Select\Select;

$restore = new Select();

$re = $restore->restoreData($id);
