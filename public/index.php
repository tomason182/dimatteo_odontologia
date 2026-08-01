<?php

declare(strict_types=1);
require_once __DIR__ . "/../vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->safeload();

var_dump($_ENV["APP_ENV"]);

if ($_ENV["APP_ENV"] === "production") {
  ini_set("display_errors", "0");
  ini_set("log_errors", "1");
  error_reporting(E_ALL);
} else {
  ini_set("display_errors", 1);
  error_reporting(E_ALL);
}

require_once __DIR__ . "/../app/helpers.php";

$page = $_GET["page"] ?? "home";


switch ($page) {
  case "home":
    require "../app/Views/pages/home.php";
    break;
  case "brand":
    require "../app/Controllers/BrandController.php";
    break;
  case "model":
    require "../app/Controllers/ModelController.php";
    break;
  case "models":
    require "../app/Controllers/BrandController.php";
    break;
  default:
    http_response_code(404);
    require "../app/Views/pages/404.php";
}
