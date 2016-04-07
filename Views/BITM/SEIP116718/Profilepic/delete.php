<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Profilepic\Profilepic;
$id = $_GET['id'];
$delete = new Profilepic();
$delete->delete($id);
