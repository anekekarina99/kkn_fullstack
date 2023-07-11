<div class="container">
	<h2 class="m-4 text-center">Upload Produk</h2>
	<form method="POST" action="" enctype="multipart/form-data">
		<div class="form-group">
			<label for="name">Nama Produk</label>
			<input type="text" class="form-control" id="name">
		</div>
		<div class="form-group">
			<label for="description">Deskripsi Produk</label>
			<input type="text" class="form-control" id="description">
		</div>
		<div class="form-group">
			<label for="price">Harga Produk</label>
			<input type="number" class="form-control" id="price">
		</div>
		<div class="form-group">
			<label for="status">Status Produk</label>
			<input type="status" class="form-control" id="status">
		</div>
		<div class="form-group">
			<label for="created">Tanggal Awal</label>
			<input type="datetime-local" id="created" name="created">
		</div>
		<div class="form-group">
			<label for="modified">Diubah</label>
			<input type="datetime-local" id="modified" name="modified">
		</div>
		<div class="form-group">
			<label for="modified">Upload Gambar</label>
			<input class="form-control" type="file" name="uploadfile" value="" />
		</div>
		<div class="form-group">

			<button class="btn btn-primary" type="submit" value="submit" name="submit">UPLOAD</button>
		</div>
	</form>
</div>

<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
	$name            = $_POST['name'];
	$description     = $_POST['description'];
	$price        = $_POST['price'];
	$status  = $_POST['status'];
	$created = $_POST['created'];
	$modified = $_POST['modified'];

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "assets/images/" . $filename;

	if (empty($filename) || empty($name) || empty($description) || empty($price) || empty($status) || empty($created) || empty($modified)) {
?>
		<script language="JavaScript">
			alert('Data Harap Dilengkapi!');
			//document.location = 'download-script-form-input-data.php';
		</script>
<?php
	} else {
		include 'lib/db.php';

		// Get all the submitted data from the form
		$sql = "INSERT INTO products (image,name,description,price,created,modified,status) VALUES ('$filename','$name','$description','$price','$created','$modified','$status')";

		// Execute query
		$input = mysqli_query($db,$sql);

		if($input){

		// Now let's move the uploaded image into the folder: image
	
			echo "<h3> Image dan Produk uploaded sukses diupload!</h3>";
		} else {
			echo "<h3> Gagal upload image dan produk!</h3>";
		}
	}
} else {
	echo "<script>alert(Input DatA Gagal!, Silahkan diulangi!)</script>";
}


?>