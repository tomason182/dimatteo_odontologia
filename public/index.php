<?php

declare(strict_types=1);
require_once __DIR__ . "/../vendor/autoload.php";

ini_set("display_errors", 1);
ini_set("display_startu_errors", 1);
error_reporting(E_ALL);

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
