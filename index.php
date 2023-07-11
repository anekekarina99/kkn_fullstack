<?php 
  include "include/header.php";

  if(isset($_GET["home"])){
    include "home.php";
  }else if(isset($_GET["about"])){
    include "about.php";
  }else if(isset($_GET["shop"])){
    include "shop.php";
  }else if(isset($_GET["contact"])){
    include "contact.php";
  }else if(isset($_GET["shop_detail"])){
    include "shop_detail.php";
  }else if(isset($_GET["cart"])){
    include "cart.php";
  }else if(isset($_GET["cartAction"])){
    include "cartAction.php";
  }else if(isset($_GET["checkout"])){
    include "checkout.php";
  }else{
    include "home.php";
  }

  include  "include/footer.php";
?>