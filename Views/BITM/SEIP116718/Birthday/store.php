<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../../../../vendor/autoload.php';

use App\BITM\SEIP116718\Birthday\Birthday;

$birthday = new Birthday();

$birthday->prepare($_POST);

$birthday->storeDataInDatabase();
