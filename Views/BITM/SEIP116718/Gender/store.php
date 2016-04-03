<?php

include_once '../../../../vendor/autoload.php';

use App\BITM\SEIP116718\Gender\Gender;

$processingData = new Gender();

$processingData->prepare($_POST)->storeDataInDatabase();
