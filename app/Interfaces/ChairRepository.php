<?php

declare(strict_types=1);

namespace App\Interfaces;

use App\Entities\Chair;

interface ChairRepository
{
  /* @return Chair[]  */
  public function findAll(): array;

  public function findBySlug(string $slug): ?Chair;

  /* @return Chair[] */
  public function findByBrand(string $brand): array;
}
