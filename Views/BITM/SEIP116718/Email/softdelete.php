<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Email\Email;

session_start();
if (isset($_SESSION['Message'])) {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}

$id  = $_GET['id'];

$softdel = new Email();
$softdel->prepare($_GET);
$alldel = $softdel->softdelete();