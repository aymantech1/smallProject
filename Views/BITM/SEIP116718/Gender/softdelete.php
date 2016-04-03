<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Gender\Gender;

session_start();
if (isset($_SESSION['Message'])) {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}

$id  = $_GET['id'];

$softdel = new Gender();
$softdel->prepare($_GET);
$alldel = $softdel->softdelete();