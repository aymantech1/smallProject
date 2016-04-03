<?php
$id = $_GET['id'];
//echo $id;
include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Email\Email;

$restore = new Email();

$re = $restore->restoreData($id);
