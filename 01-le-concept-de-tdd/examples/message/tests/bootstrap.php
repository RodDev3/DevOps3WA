<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/..', '.env');
$dotenv->load();

require_once __DIR__ . '/../vendor/autoload.php';
