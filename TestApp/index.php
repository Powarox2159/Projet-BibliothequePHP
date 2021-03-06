<?php

namespace TestApp;

session_start();
require_once('Loader/Autoload.php');
spl_autoload_register('TestApp\Loader\Autoload::monAutoload');

require './vendor/autoload.php';

use TestApp\App\Control;

$onlineLib = new \Metadata\Metadata();

$control = new App\Control($onlineLib);
$control->execute();


// use TestApp\Lib\Metadata;
// $lib = new Lib\Metadata();
