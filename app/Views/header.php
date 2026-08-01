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
        <li class="contacto-btn">
          <a href="#">
            Contactenos
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle-more-icon lucide-message-circle-more">
              <path d="M2.992 16.342a2 2 0 0 1 .094 1.167l-1.065 3.29a1 1 0 0 0 1.236 1.168l3.413-.998a2 2 0 0 1 1.099.092 10 10 0 1 0-4.777-4.719" />
              <path d="M8 12h.01" />
              <path d="M12 12h.01" />
              <path d="M16 12h.01" />
            </svg>
          </a>
        </li>
      </ul>

    </nav>

  </div>

</header>
