<?php
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();?>">

<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="nav-icon">
          <div class="nav-icon__middle"></div>
        </div>
       
        <?php the_custom_logo();?>

        <nav class="menu">
          <?php
            wp_nav_menu([
                'theme_location' => 'header-menu',
                'menu_class' => 'menu__list',
                'container' => ''

            ])
          ?>
        </nav>
      </div>
    </div>
  </header>