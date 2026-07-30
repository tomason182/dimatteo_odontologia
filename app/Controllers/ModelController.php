<?php


namespace App\Controllers;

use App\Repositories\JsonChairRepository;

$repository = new JsonChairRepository(
  __DIR__ . "/../../data/chairs.json"
);

$slug = $_GET["slug"];

switch ($slug) {
  case "s203":
    $chair = $repository->findBySlug("s203");
    break;
  case "s303":
    $chair = $repository->findBySlug("s303");
    break;

  case "s404":
    $chairs = $repository->findBySlug("s404");
    break;

  case "s502":
    $chair = $repository->findBySlug("s502");
    break;
  default:
    require __DIR__ . "../Views/pages/404.php";
}

require __DIR__ . "/../Views/pages/model.php";
