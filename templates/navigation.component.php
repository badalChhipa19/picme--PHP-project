<?php $url = $_SERVER['REQUEST_URI'] ?>
<!--//! Navbar Start-->
<nav class="navigation__bar">
  <!--//TODO: Logo-->
  <div class="nav__logo_box" onclick="parent.location='/emart/'">
    <img class="logo__image" src="public/images/main/logo.png" alt="Logo Image">
    <img class="logo__image-1" src="public/images/main/favicon.png" alt="Logo Image">
  </div>

  <!--//TODO: Search box-->
  <?php if (pageVerification('/emart/')): ?>
    <div class="product__searchbox">
      <input class="searchbox" type="search" name="productSearch" id="productSearch">
      <ion-icon class="searchbox__icon" name="search-outline"></ion-icon>
    </div>
  <?php endif ?>

  <!--//TODO: Links for authentication Page-->
  <?php if (pageVerification("/emart/authentication")): ?>
    <ul class="nav__list list__auth">
      <li class="nav__list_item"><a href="#">Membership</a></li>
      <li class="nav__list_item item__button">
        <button class="nav__button" onclick="parent.location = '/emart/'">Shop Now</button>
      </li>
    </ul>

    <!--//TODO: Links for shop Page-->
  <?php elseif (pageVerification("/emart/")): ?>
    <div class="abstract__container">
      <input type="checkbox" id="abstract__checkbox">
      <label for="abstract__checkbox" class="abstract__nav">
        <li class='abstract__list'>
          <div class="line mid__line"></div>
        </li>
      </label>
      <ul class="nav__list list__shop">
        <li class="nav__list_item"><a href="/emart/authentication"><span>01. </span>Sign-in</a></li>
        <li class="nav__list_item"><a href="#"><span>02. </span>Blog</a></li>
        <li class="nav__list_item icons__box " onclick="parent.location='/emart/wishlist'">
          <span>03. </span>
          <ion-icon class="shop__nav_icon" name="heart-outline"></ion-icon>
        </li>
        <li class="nav__list_item icons__box" onclick="parent.location='/emart/cart'">
          <span>04. </span>
          <ion-icon class="shop__nav_icon" name="cart-outline"></ion-icon>
        </li>
      </ul>
    </div>
  <?php endif ?>

</nav>

<link rel="stylesheet" href="public/css/navigation.style.css">