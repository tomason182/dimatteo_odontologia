<!DOCTYPE html>

<html lang="es">
<?php include __DIR__ . "/head.php"; ?>

<body>
  <?php include __DIR__ . "/../header.php"; ?>

  <main>
    <section class="container catalog">

      <?php foreach ($chairs as $chair):  ?>
        <article class="chair-card">
          <div class="chair-image">
            <img src="/assets/img/brands/saevo.jpeg" />
          </div>
          <div class="chair-info">
            <h2><?= htmlspecialchars($chair->getName()) ?></h2>
            <p><?= htmlspecialchars($chair->getShortDescription()) ?></p>

            <ul class="chair-highlights">

              <?php foreach ($chair->getHighlights() as $highlight):  ?>
                <li><?= htmlspecialchars($highlight) ?></li>

              <?php endforeach; ?>
            </ul>

            <a class="btn" href="#">Ver detalles </a>
            <a class="chat-btn" href="#">Contactar</a>
          </div>
        </article>

      <?php endforeach; ?>



    </section>

  </main>

  <?php include __DIR__ . "/../footer.php" ?>


</body>


</html>
