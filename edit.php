<?php
include_once "../controllers/ProdukController.php";

$controller = new ProdukController();
$id = $_GET['id'];
$data = $controller->model->getById($id);
$row = $data->fetch_assoc();

if(isset($_POST['update'])) {
 $controller->model->update(
  $id,
  $_POST['nama'],
  $_POST['harga']
 );

 header("Location: ../index.php");
}
?>

<h2>Edit Data Produk</h2>

<form method="POST">
Nama :
<input type="text" name="nama" value="<?= $row['nama']; ?>">
<br><br>

Harga :
<input type="text" name="harga" value="<?= $row['harga']; ?>">
<br><br>

<button type="submit" name="update">Update</button>
</form>