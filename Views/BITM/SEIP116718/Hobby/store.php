<?php

include_once '../../../../vendor/autoload.php';
use App\BITM\SEIP116718\Hobby\Hobby;

$arrayData = $_POST['myHobby'];

$arrayToString = implode(",", $arrayData);

$_POST['myOneHobby'] = $arrayToString;

//echo "<pre>";
//print_r($arrayToString);
//echo "</pre>";

echo $_POST['myOneHobby'];


$processData = new Hobby();
$processData->prepare($_POST)->storeDataInDatabase();



