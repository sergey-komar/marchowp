<?php
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>
<body <?php body_class();?>>
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <a href="#" class="logo">
          <img src="./images/header/logo.png" alt="logo" class="logo__img">
        </a>
        <nav class="menu">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-header',
              'menu_id'        => 'nav',
              'container'      => '',
              'menu_class'	 => 'menu__list'
            )
          );  
          ?>
        </nav>
        <div class="user-nav">
          <a href="register.html" class="user-nav__link">
            <img src="./images/header/user.png" alt="user icon" class="user-nav__link-img">
          </a>
          <a href="#" class="user-nav__link">
            <img src="./images/header/search.png" alt="search icon" class="user-nav__link-img">
          </a>
          <a href="#" class="user-nav__link">
            <img src="./images/header/heart.png" alt="heart icon" class="user-nav__link-img">
            <span class="user-nav__num">3</span>
          </a>
          <a href="#" class="user-nav__link">
            <img src="./images/header/cart.png" alt="cart icon" class="user-nav__link-img">
            <span class="user-nav__num">7</span>
          </a>
        </div>
      </div>
    </div>
  </header>