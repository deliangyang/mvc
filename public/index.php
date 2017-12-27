<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);
require_once __DIR__ . '/../vendor/autoload.php';


$database = require_once __DIR__ . '/../config/database.php';

$capsule = new Illuminate\Database\Capsule\Manager();

$capsule->addConnection($database);

$capsule->bootEloquent();
require_once __DIR__ . '/../config/router.php';
