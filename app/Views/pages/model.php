<!DOCTYPE html>

<html lang="es">
<?php include __DIR__ . "/head.php" ?>;

<body>
  <?php include __DIR__ . "/../header.php" ?>

</body>

<main>
  <section class="layout-hero">
    <h1><?= $chair->getBrand() . " " . $chair->getSlug(); ?></h1>
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
    <div class="model__specifications">
      <?php
      $features = $chair->getFeatures();
      $first_key = array_key_first($features);
      $technicals = $chair->getTechnicalSpecifications();
      ?>
      <nav class="tabs">
        <ul class="tabs__list">

          <?php foreach ($features as $key => $feature): ?>

            <li class="tab <?= $key === $first_key ? "active" : "" ?>" data-tab="<?= $key ?>">
              <?= $feature["title"]; ?>
            </li>

          <?php endforeach; ?>

          <li class="tab" data-tab="technical">Especificaciones técnicas</li>
        </ul>
      </nav>

      <div class="tabs-content">

        <?php foreach ($features as $key => $feature): ?>

          <div class="tab-content <?= $key === $first_key ? "active" : "" ?>" data-tab="<?= $key; ?>">

            <ul>

              <?php foreach ($feature["items"] as $items): ?>

                <li><?= $items["description"]; ?></li>

              <?php endforeach; ?>
            </ul>
          </div>

        <?php endforeach; ?>

        <div class="tab-content" data-tab="technical">
          <?php foreach ($technicals as $category => $especifications): ?>

            <ul>
              <?php foreach ($especifications as $spec): ?>

                <li>
                  <strong><?= $spec["name"] ?></strong>

                  <?php if (is_array($spec["value"])):; ?>
                    <ul>
                      <?php foreach ($spec["value"] as $subitem) : ?>
                        <li><?= $subitem; ?></li>
                      <?php endforeach; ?>
                    </ul>
                  <?php else: ?>

                    <span><?= $spec["value"] ?></span>
                  <?php endif; ?>
                </li>

              <?php endforeach; ?>
            </ul>

          <?php endforeach; ?>

        </div>

      </div>
    </div>

  </section>

</main>

<?php include __DIR__ . "/../footer.php" ?>

<script src="/assets/js/main.js"></script>

</html>
