<?php

namespace App\Controllers;

use App\Repositories\JsonChairRepository;

$repository = new JsonChairRepository(
  __DIR__ . "/../../data/chairs.json"
);

$brand = $_GET["slug"];

$chairs = $repository->findByBrand($brand);

if (empty($chairs)) {
  var_dump("No encontrado");
  return;
}

require __DIR__ . "/../Views/pages/brand.php";
