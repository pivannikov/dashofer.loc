<?php
namespace Core;

use Models\TransferCsv;
use Core\Model;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Models/TransferCsv.php';
require_once $_SERVER['DOCUMENT_ROOT'] . 'Core/Model.php';


$info = new TransferCsv();
$info->burn();