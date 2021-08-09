<?php
namespace Core;

require_once $_SERVER['DOCUMENT_ROOT'] . 'Core/TransferCsv.php';

$info = new TransferCsv();
$info->burn();