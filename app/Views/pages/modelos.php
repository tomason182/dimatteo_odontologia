<!DOCTYPE html>

<html lang="es">
<?php include __DIR__ . "/head.php"; ?>

<body>
  <?php include __DIR__ . "/../header.php"; ?>

  <main>
    <section class="models container">

      <h1>Todos lo productos</h1>
      <div class="models__container">
        <?php foreach ($chairs as $chair): ?>

          <div class="chair-card-mini">
            <img src="<?= $chair->getHeroImg()  ?>" />
            <div class="chair-card-mini__details">
              <h3><?= $chair->getBrand() ?></h3>

              <?php foreach ($chair->getHighlights() as $highlight): ?>

                <span class="highlight chair-card-mini__highligth"><?= htmlspecialchars($highlight) ?></span>

              <?php endforeach; ?>

              <a class="mas-info" href="<?= router("model", ["slug" => $chair->getSlug()]); ?>">Más info</a>
            </div>

          </div>


        <?php endforeach; ?>

      </div>

    </section>

  </main>

  <body>

</html>
