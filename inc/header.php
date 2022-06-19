<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-2">
        <div class="header__logo">
          <a href="index.php">
            <img src="src/img/logo.png" alt="">
          </a>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="header__nav">
          <nav class="header__menu mobile-menu">
            <ul>
              <li class="active"><a href="index.php">Inicio</a></li>
              <?php
              foreach ($categorias as $categoria => $subcategorias) {
                echo '<li><a href="index.php?categoria=' . $categoria . '">' . $categoria . '</a>';
                echo '<ul class="dropdown">';
                foreach ($subcategorias as $subcategoria) {
                  echo '<li><a href="index.php?categoria=' . $categoria . '&subcategoria=' . $subcategoria . '">' . $subcategoria . '</a></li>';
                }
                echo '</ul>';
                echo '</li>';
              }
              ?>
              <li><a href="#">Contacto</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="col-lg-2">
        <div class="header__right">
          <a href="#" class="search-switch"><span class="icon_search"></span></a>
          <a href="#"><span class="icon_profile"></span></a>
        </div>
      </div>
    </div>
    <div id="mobile-menu-wrap"></div>
  </div>
</header>