<?php
$id = $_GET['id'];
//echo $id;
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Textarea\Textarea;

$restore = new Textarea();

$re = $restore->restoreData($id);

echo $re;
