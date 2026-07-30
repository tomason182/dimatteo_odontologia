<!DOCTYPE html>

<html lang="es">
<?php include __DIR__ . "/head.php" ?>;

<body>
  <?php include __DIR__ . "/../header.php" ?>

</body>

<main>
  <section class="layout-hero">
    <h1><?= $chair->getBrand() . $chair->getSlug(); ?></h1>
  </section>

  <section class="model__container container">
    <div class="model__description">
      <div class="">
        <img src="<?= $chair->getHeroImg(); ?>" />
      </div>
      <div class="chair-info">
        <h2><?= "Modelo " . $chair->getSlug(); ?></h2>

        <p><?= $chair->getShortDescription(); ?></p>

        <a class="btn btn__presupuesto">Solicitar presupuesto</a>
      </div>
    </div>
    <div class="mode__specifications">
      <nav class="tabs">
        <ul class="tabs__list">

          <?php foreach ($chair->getFeatures() as $key => $feature): ?>

            <li class="tab <?= $key === array_key_first($chair->getFeatures()) ? "active" : "" ?>" data-tab="<?= $key ?>">
              <?= $feature["title"]; ?>
            </li>

          <?php endforeach; ?>

          <li class="tab" data-tab="technical">Especificaciones técnicas</li>
        </ul>
      </nav>

      <div class="tabs-content">

        <?php foreach ($chair->getFeatures() as $key => $feature): ?>

          <div class="tab-content <?= $key === array_key_first($chair->getFeatures()) ? "active" : "" ?>" data-tab="<?= $key; ?>">

            <ul>

              <?php foreach ($feature["items"] as $items): ?>

                <li><?= $items["description"]; ?></li>

              <?php endforeach; ?>
            </ul>
          </div>

        <?php endforeach; ?>

      </div>

    </div>

  </section>

</main>

</html>
