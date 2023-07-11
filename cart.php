
<script>
	function updateCartItem(obj, id) {
		$.get("index.php?cartAction", {
			action: "updateCartItem",
			id: id,
			qty: obj.value
		}, function(data) {
			if (data == 'ok') {
				location.reload();
			} else {
				alert('Update Riwayat Belanja gagal coba lag!.');
			}
		});
	}
</script>
<!-- Start Hero Section -->
<div class="hero">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-5">
				<div class="intro-excerpt">
					<h1>Riwayat Belanja</h1>
				</div>
			</div>
			<div class="col-lg-7">

			</div>
		</div>
	</div>
</div>
<!-- End Hero Section -->



<div class="untree_co-section before-footer-section">
	<div class="container">
		<div class="row mb-5">
			<form class="col-md-12" method="post">
				<div class="site-blocks-table">
					<table class="table">
						<thead>
							<tr>
								<th class="product-thumbnail">Gambar</th>
								<th class="product-name">Produk</th>
								<th class="product-price">Price</th>
								<th class="product-quantity">Kuantitas</th>
								<th class="product-total">Total</th>
								<th class="product-remove"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
								include('lib/db.php');

								include_once 'Cart.class.php';
								$cart = new Cart;



								if ($cart->total_items() > 0) {
									// Get cart items from session 
									$cartItems = $cart->contents();
									foreach ($cartItems as $item) {
										$proImg = !empty($item["image"]) ? 'assets/images/' . $item["image"] : 'images/demo-img.png';



								?>
										<td class="product-thumbnail">
											<img src="<?php echo $proImg; ?>" alt="Image" class="img-fluid">
										</td>
										<td class="product-name">
											<h2 class="h5 text-black"><?php echo $item["name"]; ?></h2>
										</td>
										<td><?php echo $item["price"]; ?></td>
										<?php $c = $item["rowid"]; ?>
										<td><input class="form-control" id="qty" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this,<?php echo '.$c.'; ?> )" />
										</td>
										<td/><?php echo $item["qty"] * $item["price"]; ?>
										</td>
										<td><button class="btn btn-sm btn-danger" onclick="return confirm('Apakah kamu ingin menghapus item?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $c ?> ':false;" title="Hapus Item"><i class="itrash"></i> Hapus</button> </td>
							</tr>
						<?php }
								} else { ?>
						<tr>
							<td colspan="6">
								<p>Kosong</p>
							</td>
						<?php } ?>
						<?php if ($cart->total_items() > 0) { ?>


						</tbody>
					</table>
				</div>
			</form>
		</div>

	</div>
	<div class="row mb-5">
		<!--<div class="col-md-6 mb-3 mb-md-0">
                      <button class="btn btn-black btn-sm btn-block">Update Cart</button>
                    </div>-->
	<!--	<div class="col-md-6 justify-content-center">
			<button class="btn btn-outline-black btn-sm btn-block "onclick="window.location='index.php?shop'">Lanjutkan Belanja</button>
		</div>-->
	</div>
	<div class="col-md-6 pl-5">
		<div class="row justify-content-end">
			<div class="col-md-7">
				<div class="row">
					<div class="col-md-12 text-right border-bottom mb-5">
						<h3 class="text-black h4 text-uppercase">Riwayat Total</h3>
					</div>
				</div>
				<div class="row mb-3">
					<div class="col-md-6">
						<span class="text-black">Total</span>
					</div>
					<div class="col-md-6 text-right">
						<strong class="text-black"><?php echo $cart->total() ?></strong>
					
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-black btn-sm py-3 btn-block mt-3" onclick="window.location='index.php?checkout'">Proceed To Checkout</button>
						<button class="btn btn-black btn-sm py-3 btn-block mt-3"onclick="window.location='index.php?shop'">Lanjutkan Belanja</button>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
</div>
</div>