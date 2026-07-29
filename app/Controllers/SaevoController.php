<?php

namespace App\Controllers;

use App\Repositories\JsonChairRepository;

$repository = new JsonChairRepository(
  __DIR__ . "/../../data/chairs.json"
);

$chairs = $repository->findByBrand("saevo");

require __DIR__ . "/../Views/pages/saevo.php";
