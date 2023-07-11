<!-- Start Hero Section -->
<!-- Start Hero Section -->
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
					<img src="assets/images/product-4.png" class="img-fluid" width="420" height="420">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->


<?php

include 'lib/db.php';


// Initialize shopping cart class 
include_once 'Cart.class.php';
$cart = new Cart;

// Fetch products from the database 
$sqlQ = "SELECT * FROM products";
$stmt = $db->prepare($sqlQ);
$stmt->execute();
$result = $stmt->get_result();
?>
<div class="untree_co-section product-section before-footer-section">
	<div class="container">
		<!-- Cart basket -->
		

			<a href="index.php?cart" title="View Cart"><i class="icart"></i>
				<p>Daftar Belanja</p>(<?php echo ($cart->total_items() > 0) ? $cart->total_items() . ' Items' : 0; ?>)
			</a>
		
		<div class="row">
			<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					$proImg = !empty($row["image"]) ? 'assets/images/' . $row["image"] : 'images/demo-img.png';
			?>
					<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">
							<img src="<?php echo $proImg; ?>" class="img-fluid product-thumbnail rounded" style="height: 200px; weidht:200px;">
							<h3 class="product-title"><?php echo $row["name"]; ?></h3>
							<strong class="product-price">
								<?php echo $row["price"]; ?></strong>
								<p class="product-title"><?php echo $row["description"]; ?></p>
									<span class="icon-cross">
										<img src="assets/images/cross.svg" class="img-fluid">
									</span>
						</a>
					</div><?php } ?>
				<!-- End Column 1 -->
			<?php } ?>

		</div>
	</div>
</div>