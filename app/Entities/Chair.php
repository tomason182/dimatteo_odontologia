<?php

class Chair
{
  public function __construct(
    public readonly string $slug,
    public readonly string $brand,
    public readonly string $name,
    public readonly string $description,

    /** @var array<string, array<string | array> */
    public readonly array $features,

    /** @var array<string, string|array> */
    public readonly array $technicalSpeficications,

  ) {}
};
