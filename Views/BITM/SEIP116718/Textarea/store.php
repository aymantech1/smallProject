<?php

include_once '../../../../vendor/autoload.php';

use App\BITM\SEIP116718\Textarea\Textarea;

$processingData = new Textarea();

$processingData->prepare($_POST);

$processingData->storeDataInDatabase();
