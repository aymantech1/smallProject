<?php
$id = $_GET['id'];
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Birthday\Birthday;

$restore = new Birthday();
$re = $restore->restoreData($id);
