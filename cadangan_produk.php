<div class="container">
	<h2 class="m-4 text-center">Upload Produk</h2>
	<form method="POST" action="action_input.php" name="form-input-data">
		<div class="form-group">
			<label for="name">Nama Produk</label>
			<input type="text" class="form-control" id="name">
		</div>
		<div class="form-group">
			<label for="price">Harga Produk</label>
			<input type="number" class="form-control" id="price">
		</div>
		<div class="form-group">
			<label for="modified">Upload Gambar</label>
			<input class="form-control" type="file" name="uploadfile" value="" />
		</div>
		<div class="form-group">
			<label for="description">Detail Produk</label>
			<input type="text" class="form-control" id="description">
		</div>
		<div class="form-group">
			<label for="tag">Tag Produk</label>
			<input type="text" class="form-control" id="tag">
		</div>
		
		<div class="form-group">
			<label for="status">Status Produk</label>
			<input type="number" class="form-control" id="status">
		</div>
		<div class="form-group">
			<label for="created">Tanggal Awal</label>
			<input type="datetime-local" id="created" name="created">
		</div>
		<div class="form-group">
			<label for="modified">Stok</label>
			<input type="number" id="stok" name="stok">
		</div>
		
		<div class="form-group">

			<button class="btn btn-primary" type="submit" value="submit" name="submit">UPLOAD</button>
		</div>
	</form>
</div>

