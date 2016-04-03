<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Email\Email;

$id = $_GET['id'];

$delete = new Email();
$delete ->permanentDelete($id);