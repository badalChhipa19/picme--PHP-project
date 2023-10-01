<?php $url = $_SERVER['REQUEST_URI'] ?>
<!--//? Header component -->
<nav class="navigation__bar">
  <div class="logo">
    <a href="/" class="nav__logo">
      <img src="public/images/main/logo.png" alt="Logo Image">
    </a>
  </div>
  <?php if (pageVerification('/emart/')): ?>
    <div class="productSearch__box">
      <input type="search" name="productSearch" id="productSearch">
      <ion-icon name="search-outline"></ion-icon>
    </div>
  <?php endif ?>
  <ul class="nav__list">
    <?php if (pageVerification("/emart/authentication")): ?>
      <li class="nav__list_item"><a href="#">Membership</a></li>
      <li class="nav__list_item"><a href="#">Shop Now</a></li>

    <?php elseif (pageVerification("/emart/")): ?>
      <li class="nav__list_item"><a href="#">Sign-in</a></li>
      <li class="nav__list_item"><a href="#">Blog</a></li>
      <li class="nav__list_item">
        <a href="">
          <ion-icon name="heart-outline"></ion-icon>
        </a>
      </li>
      <li class="nav__list_item">
        <a href="#">
          <ion-icon name="cart-outline"></ion-icon>
        </a>
      </li>
    <?php endif ?>

  </ul>
</nav>

<link rel="stylesheet" href="public/css/header.style.css">