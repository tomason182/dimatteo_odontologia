<?php

declare(strict_types=1);

namespace App\Entities;

class Chair
{
  public function __construct(
    public readonly string $slug,
    public readonly string $brand,
    public readonly string $name,
    public readonly string $description,
    public readonly string $shortDescription,
    public readonly array $gallery,
    public readonly string $catalogPdf,

    /** @var array<string> */
    public readonly array $highlights,

    /** @var array<string, array<string | array> */
    public readonly array $features,

    /** @var array<string, string|array> */
    public readonly array $technicalSpecifications,

  ) {}

  public function getSlug(): string
  {
    return $this->slug;
  }

  public function getBrand(): string
  {
    return $this->brand;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getShortDescription(): string
  {
    return $this->shortDescription;
  }

  public function getHighlights(): array
  {
    return $this->highlights;
  }
};
