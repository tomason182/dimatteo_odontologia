<?php

interface ChairRepository
{
  /* @return Chair[]  */
  public function findAll(): array;

  public function findBySlug(string $slug): ?Chair;

  /* @return Chair[] */
  public function findByBrand(string $brand): array;
}
