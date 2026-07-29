<!DOCTYPE html>

<html lang="es">
<?php include __DIR__ . "/head.php"; ?>

<body>
  <?php include __DIR__ . "/../header.php"; ?>

  <main>
    <section class="layout-hero">
      <h1><?= $chairs[0]->getBrand()  ?></h1>

    </section>
    <section class="container catalog">

      <?php foreach ($chairs as $chair):  ?>
        <article class="chair-card">
          <div class="chair-image">
            <img src=<?= $chair->getHeroImg(); ?> />
          </div>
          <div class="chair-info">
            <h2><?= htmlspecialchars($chair->getName()) ?></h2>
            <p><?= htmlspecialchars($chair->getShortDescription()) ?></p>

            <ul class="chair-highlights">

              <?php foreach ($chair->getHighlights() as $highlight):  ?>
                <li><?= htmlspecialchars($highlight) ?></li>

              <?php endforeach; ?>
            </ul>

            <div class="chair-card__actions">

              <a class="chair-card__btn" href="#">Ver detalles </a>
              <a class="chair-card__btn chair-card__chat-btn" href="#">Contactar</a>
            </div>
          </div>
        </article>

      <?php endforeach; ?>



    </section>

  </main>

  <?php include __DIR__ . "/../footer.php" ?>


</body>


</html>
