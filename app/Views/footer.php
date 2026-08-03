<?php
$brandsLink = isset($currentPage) && $currentPage === "home" ? "#nuestras_marcas" : "/#nuestras_marcas";
$aboutUsLink = isset($currentPage) && $currentPage === "home" ? "#about-us" : "/#about-us";
?>

<footer class="footer">
  <div class="container">
    <div class="footer__top">
      <div class="footer__brand">
        <h3>RoD Odontología</h3>

        <p>
          Equipamiento odontológico para profesionales.
          Venta, instalación y servicio técnico especializado.
        </p>

      </div>
      <div class="footer__column">
        <h4>Navegación</h4>

        <ul>
          <li><a href="<?= $brandsLink; ?>">Marcas</a></li>
          <li><a href="<?= $aboutUsLink; ?>">Nosotros</a></li>
          <li><a href="#">Servicio Técnico</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>

      <div class="footer__column">
        <h4>Contacto</h4>
        <ul>
          <li>Olavarria, Buenos Aires</li>
          <li>+549 xxx xxxx xxxxx</li>
          <li>soporte@rododontologia.com</li>
        </ul>
      </div>

      <div class="footer__column">
        <h4>Horarios</h4>
        <ul>
          <li>Lun. a Vie.</li>
          <li>09:00 a 17:00 hs</li>
        </ul>
      </div>
    </div>
    <div class="footer__bottom">
      <p>
        &copy; <?= date("Y") ?> Dimatteo Odontología. Todos los derechos reservados.
      </p>
    </div>
  </div>
</footer>
