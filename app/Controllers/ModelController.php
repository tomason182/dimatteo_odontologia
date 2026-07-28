<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repositories\JsonChairRepository;

$repository = new JsonChairRepository(
  __DIR__ . "/../../data/chairs.json"
);

$chairs = $repository->findAll();

require __DIR__ . "../Views/brands.php";
