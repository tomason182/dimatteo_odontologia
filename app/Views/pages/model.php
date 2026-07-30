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
      <div class="">
        <h2><?= "Modelo" . $chair->getSlug(); ?></h2>

        <p><?= $chair->getDescription(); ?></p>

        <a class="btn_presupuesto">Solicitar presupuesto</a>
      </div>
    </div>
    <div class="mode__specifications">
      <nav class="tabs">
        <ul class="tabs__list">

          <?php foreach ($chair->getFeatures() as $key => $features): ?>
            <li class="tab active" data-tab="<?= $key ?>">
              <?= $key; ?>
            </li>
          <?php endforeach; ?>

          <li class="tab" data-tab="technical">Especificaciones técnicas</li>
        </ul>
      </nav>

      <div class="tabs-content">

        <?php foreach ($chair->getFeatures() as $key => $features): ?>

          <div class="tab-content" data-tab="<?= $key; ?>">
            <ul>
              <?php foreach ($features as $feature): ?>
                <li><?= $feature["description"]; ?></li>
              <?php endforeach; ?>
            </ul>
          </div>

        <?php endforeach; ?>

      </div>

    </div>

  </section>

</main>

</html>
