<?php

declare(strict_types=1);

namespace app\Repositories;

use app\Entities\Chair;
use ChairRepository;

class JsonChairRepository implements ChairRepository
{
  /** @var Chair[] | null */
  private ?array $chair = null;

  public function __construct(
    private readonly string $filePath
  ) {}

  /**
   * @return Chair[]
   */
  public function findAll(): array
  {
    $this->load();

    return $this->chair;
  }


  public function findBySlug(string $slug): ?Chair
  {
    $this->load();

    foreach ($this->chair as $chair) {
      if ($chair->getSlug() === $slug) {
        return $chair;
      }
      return null;
    }
  }

  /*
   * @return Chair[];
   */
  public function findByBrand(string $brand): array
  {
    throw new \Exception('Not implemented');
  }

  private function load(): void
  {
    if ($this->chair !== null) {
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

    $this->chair = [];

    foreach ($data as $chairData) {
      $this->chair[] = $this->mapChair($chairData);
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
      technicalSpeficications: $chair["technicalSpeficications"],
      features: $chair["features"]
    );
  }
}
