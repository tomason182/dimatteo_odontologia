<?php
$aboutLink = (isset($currentPage) && $currentPage === "home") ? "#about-us" : "/#about-us"

?>

<header class="header">

  <div class="container header__container">

    <div class="header__logo">
      <a href="/"><img src="/assets/img/hero/rod_odonto.png" /></a>
    </div>

    <button class="menu_toggle" aria-label="abrir menu" aria-expanded="false">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu">
        <path d="M4 5h16" />
        <path d="M4 12h16" />
        <path d="M4 19h16" />
      </svg>
    </button>

    <nav class="nav">
      <ul class="nav_list">
        <li>
          <a href="<?= router("brand", ["slug" => "saevo"]); ?>" class="<?= $page === "saevo" ? "active" : ""; ?>">Saevo</a>
        </li>
        <li>
          <a href="<?= router("brand", ["slug" => "d700"]) ?>" class="<?= $page === "d700" ? "active" : "" ?>"> D700 </a>
        </li>
        <li>
          <a href="<?= router("brand", ["slug" => "suntem"]) ?>" class="<?= $page === "suntem" ?: "" ?>"> Suntem </a>
        </li>
        <li>
          <a href="#">Servicio Técnico</a>
        </li>
        <li>
          <a href="<?= $aboutLink ?>">Nosotros</a>
        </li>
        <li>
          <a href="#">FAQ</a>
        </li>
        <li>
          <a href="#">Contactenos</a>
        </li>
      </ul>

    </nav>

  </div>

</header>
