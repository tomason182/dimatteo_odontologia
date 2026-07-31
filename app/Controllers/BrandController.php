<?php

namespace App\Controllers;

use App\Repositories\JsonChairRepository;

$repository = new JsonChairRepository(
  __DIR__ . "/../../data/chairs.json"
);

if (!isset($_GET["slug"])) {
  http_response_code(404);
  require __DIR__ . "/../Views/pages/404.php";
}

$brand = $_GET["slug"];

$chairs = $repository->findByBrand($brand);

if (empty($chairs)) {
  http_response_code(404);
  require __DIR__ . "/../Views/pages/404.php";
  return;
}

require __DIR__ . "/../Views/pages/brand.php";
