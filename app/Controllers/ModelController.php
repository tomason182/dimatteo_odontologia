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
    $chair = $repository->findBySlug("s404");
    break;

  case "s502":
    $chair = $repository->findBySlug("s502");
    break;
  case "d703":
    $chair = $repository->findBySlug("d703");
    break;
  case "702":
    $chair = $repository->findBySlug("d702");
    break;
  default:
    http_response_code(404);
    require __DIR__ . "/../Views/pages/404.php";
    break;
}

require __DIR__ . "/../Views/pages/model.php";
