<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Entities\Chair;

class JsonChairRepository implements ChairRepository
{
  /** @var Chair[] | null */
  private ?array $chairs = null;

  public function __construct(
    private readonly string $filePath
  ) {}

  /**
   * @return Chair[]
   */
  public function findAll(): array
  {
    $this->load();

    return $this->chairs;
  }


  public function findBySlug(string $slug): ?Chair
  {
    $this->load();

    foreach ($this->chairs as $chair) {
      if ($chair->getSlug() === $slug) {
        return $chair;
      }
    }

    return null;
  }

  /*
   * @return Chair[];
   */
  public function findByBrand(string $brand): array
  {
    $this->load();

    return array_values(
      array_filter(
        $this->chairs,
        fn(Chair $chair) => $chair->getBrand() === $brand
      )
    );
  }

  private function load(): void
  {
    if ($this->chairs !== null) {
      return;
    }

    if (!file_exists($this->filePath)) {
      throw new \RuntimeException("Chair JSON not found");
    }

    $json = file_get_contents($this->filePath);

    if ($json === false) {
      throw new \RuntimeException("Unable to read JSON file");
    }

    $data = json_decode($json, true);

    if (!is_array($data)) {
      throw new \RuntimeException("Invalid JSON file");
    }

    $this->chairs = [];

    foreach ($data as $chairData) {
      $this->chairs[] = $this->mapChair($chairData);
    }
  }

  private function mapChair(array $chair): Chair
  {
    return new Chair(
      slug: $chair["slug"],
      brand: $chair["brand"],
      name: $chair["name"],
      description: $chair["description"],
      shortDescription: $chair["shortDescription"],
      gallery: $chair["gallery"],
      catalogPdf: $chair["catalogPdf"],
      technicalSpecifications: $chair["technicalSpecifications"],
      features: $chair["features"]
    );
  }
}
