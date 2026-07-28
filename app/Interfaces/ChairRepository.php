<?php

declare(strict_types=1);

namespace app\Repositories;

use app\Entities\Chair;

interface ChairRepository
{
  /* @return Chair[]  */
  public function findAll(): array;

  public function findBySlug(string $slug): ?Chair;

  /* @return Chair[] */
  public function findByBrand(string $brand): array;
}
