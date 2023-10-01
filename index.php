<?php include "functions/conditions.php" ?>
<?php

if (pageVerification('/emart/'))
  include "views/main.view.php";
elseif (pageVerification('/emart/authentication'))
  include "views/auth.view.php";
elseif (pageVerification('/emart/cart'))
  include "views/cart.view.php";
else
  include "views/4o4.view.php";