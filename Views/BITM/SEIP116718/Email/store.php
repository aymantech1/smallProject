<?php

include_once '../../../../vendor/autoload.php';

use App\BITM\SEIP116718\Email\Email;

$processingData = new Email();

$processingData->prepare($_POST)->storeDataInDatabase();
