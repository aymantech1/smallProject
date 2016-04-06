<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Hobby\Hobby;

$id = $_GET['id'];
echo $id;

$softdelete = new Hobby();

$softdelete->prepare($_GET)->softDelete();
