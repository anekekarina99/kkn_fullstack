<div class="hero">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-5">
        <div class="intro-excerpt">
          <h1>Belanja </h1>
          <p class="mb-4" style="font-size:medium;"> Nikmati belanja tanpa repot di Wanastore. Beli produk yang Anda inginkan dengan harga yang lebih murah dan nikmati promosi yang kami miliki sekarang.</p>
          <!-- <p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>-->
        </div>
      </div>
      <div class="col-lg-7">
        <div class="hero-img-wrap">
          <img src="assets/images/product-4.png" class="img-fluid rounded" width="420" height="420">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Hero Section -->
<div class="untree_co-section product-section before-footer-section">
  <div class="container">

    <?php

    include 'lib/db.php';
    $id_produk = $_GET['id'];
    // mengaktifkan session
    

    $query = mysqli_query($db, "SELECT * FROM products WHERE id='$id_produk'");

    while ($data = mysqli_fetch_array($query)) {


    ?>
      <div class="row">
        <div class="col-md-6">
          <img src="assets/images/<?php echo $data['image'] ?> " alt="Image" class="img-fluid rounded card p-4" style="box-shadow:0 3px 10px rgb(0 0 0 / 0.2); border-radius:25px;" width="400" height="400">
        </div>
        <div style="border-radius: 10px; box-shadow:0 3px 10px rgb(0 0 0 / 0.2);" class="col-md-6 card p-5">
          <div class="card-body">
            <h2 class="text-black card-title"><?php echo $data['name'] ?></h2>
            <p style="font-size:large;" class="self-align-between card-text mt-3"><?php echo $data['description'] ?></p>
            <p class="card-text"><strong class="text-primary h5">Harga : <?php echo $data['price'] ?></strong></p>
            <p class="card-text"><strong class="text-primary h5">Tersedia :
                <?php
                if ($data['status'] == 1) {
                  echo 'Ada';
                } else {
                  echo 'Tidak Ada';
                }
                ?> </strong></p>
          <?php } ?>
          </div>

          <!-- <div class="mb-1 d-flex">
          <label for="option-sm" class="d-flex mr-3 mb-3">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
          </label>
          <label for="option-md" class="d-flex mr-3 mb-3">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
          </label>
          <label for="option-lg" class="d-flex mr-3 mb-3">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
          </label>
          <label for="option-xl" class="d-flex mr-3 mb-3">
            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
          </label>
        </div> -->
          <div class="mb-6">
            <!-- <div class="input-group" style="max-width: 300px;">
            <div class="input-group-prepend m-2">
              <button class="btn btn-outline-primary js-btn-minus mr-2" type="button">&minus;</button>
            </div>
            <input type="text" class="form-control text-center  m-2" value="0" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
            <div class="input-group-append m-2">
              <button class="btn btn-outline-primary js-btn-plus  ml-2" type="button">&plus;</button>
            </div>
          </div>-->

          </div>



          <a href="index.php?action=addToCart&cart" style="border-radius:10px;" class="buy-now btn btn-sm btn-primary mt-3">Tambah ke Keranjang</a>;


          <a href="index.php?shop" style="border-radius:10px;" class="buy-now btn btn-sm btn-secondary mt-3">Kembali</a>

        </div>
      </div>
  </div>
</div>

