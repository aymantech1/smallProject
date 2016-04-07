<?php
$id = $_GET['id'];
//echo $id;
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Profilepic\Profilepic;

$restore = new Profilepic();

$re = $restore->restoreData($id);
