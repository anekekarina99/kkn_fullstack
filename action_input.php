<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['submit'])) {
	$name            = $_POST['name'];
    $price        = $_POST['price'];
	$detail  = $_POST['description'];
    $tag = $_POST['tag'];
	$status  = $_POST['status'];
	$created = $_POST['created'];
	$stok = $_POST['stok'];

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "assets/images/" . $filename;

	/*if (empty($name)||empty($description)||empty($price)||empty($status)||empty($created)||empty($modified)) {
?>
		<script language="JavaScript">
			alert('Data Harap Dilengkapi!');
			document.location = 'admin?upload_product.php';
		</script>
<?php
	} else { */ 
		include 'lib/db.php';

		// Get all the submitted data from the form
		$sql = "INSERT INTO produk VALUES ('$name','$price','$filename','$detail','$tag','$status','$created','$stok')";

		// Execute query
		$input = mysqli_query($db,$sql);

		if($input){

		// Now let's move the uploaded image into the folder: image
	
			echo "<h3> Image dan Produk uploaded sukses diupload!</h3>";
		} else {
			echo "<h3> Gagal upload image dan produk!</h3>";
		}
	}
/*}else {
	echo "<script>alert(Input Data Gagal!, Silahkan diulangi!)</script>";
}*/


?>