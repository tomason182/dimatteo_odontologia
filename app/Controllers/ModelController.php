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
  case "d702":
    $chair = $repository->findBySlug("d702");
    break;
  case "307":
    $chair = $repository->findBySlug("307");
    break;
  case "303-pro":
    $chair = $repository->findBySlug("303-pro");
    break;
  case "302-pro":
    $chair = $repository->findBySlug("302-pro");
    break;
  default:
    http_response_code(404);
    require __DIR__ . "/../Views/pages/404.php";
    break;
}

require __DIR__ . "/../Views/pages/model.php";
