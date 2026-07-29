<?php

declare(strict_types=1);
require_once __DIR__ . "/../vendor/autoload.php";

ini_set("display_errors", 1);
ini_set("display_startu_errors", 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../app/helpers.php";


$page = $_GET["page"] ?? "home";


$routes = [
  "home" => "../app/Views/pages/home.php",
  "modelos" => "../app/Controllers/ModelController.php",
  "saevo" => "../app/Controllers/SaevoController.php",
  "d700" => "pages/d700.php",
  "faq" => "pages/faq.php",
  "services" => "pages/services.php"
];

if (!isset($routes[$page])) {
  http_response_code(404);
  require "pages/404.php";
  exit;
}

require $routes[$page];
