<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Textarea\Textarea;

session_start();
if (isset($_SESSION['Message'])) {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}

$id  = $_GET['id'];
echo $id;

$softdel = new Textarea();
$softdel->prepare($_GET);
$alldel = $softdel->softdelete();

