<?php

include_once '../../../../vendor/autoload.php';

use App\BITM\SEIP116718\Select\Select;

$processingData = new Select();

$processingData->prepare($_POST)->storeDataInDatabase();
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
