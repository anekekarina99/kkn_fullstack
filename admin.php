<?php 
  include "include/header_admin.php";

  if(isset($_GET["upload_product"])){
    include "upload_product.php";
  /*}else if(isset($_GET["about"])){
    include "about.php";
  }else if(isset($_GET["shop"])){
    include "shop.php";
  }else if(isset($_GET["contact"])){
    include "contact.php";
  }else if(isset($_GET["shop_detail"])){
    include "shop_detail.php";
  }else if(isset($_GET["cart"])){
    include "cart.php";
  */}else{
    include "upload_product.php";
  }

  include  "include/footer_admin.php";
?>