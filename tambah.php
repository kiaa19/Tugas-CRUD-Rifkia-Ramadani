<?php
include_once "../controllers/ProdukController.php";

$controller = new ProdukController();

if(isset($_POST['simpan'])) {
 $controller->model->create($_POST['nama'], $_POST['harga']);
 header("Location: ../index.php");
}
?>

<h2>Tambah Data Produk</h2>

<form method="POST">
Nama :
<input type="text" name="nama">
<br><br>

Harga :
<input type="text" name="harga">
<br><br>

<button type="submit" name="simpan">Simpan</button>
</form>