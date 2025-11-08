<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use gabogalro\Router\Router;

$router = new Router();
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Authorization, Content-Type, X-Fingerprint");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
require_once __DIR__ . '/../routes/api.php';
$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);