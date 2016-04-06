<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Hobby\Hobby;

$id = $_POST['id'];
echo $id;
$arrayData = $_POST['myHobby'];
//print_r($_POST['myHobby']);

$arrayToString = implode(",", $arrayData);

$_POST['myOneHobby'] = $arrayToString;
echo $_POST['myOneHobby'];
$updateData = new Hobby();
$updateData->prepare($_POST)->update();

//echo"<pre>";
//print_r($_POST);
//echo"</pre>";