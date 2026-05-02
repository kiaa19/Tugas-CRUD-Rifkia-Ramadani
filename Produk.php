<?php
class Produk {
 private $conn;

 public function __construct($db) {
  $this->conn = $db;
 }

 public function getAll() {
  return $this->conn->query("SELECT * FROM produk");
 }

 public function getById($id) {
  return $this->conn->query("SELECT * FROM produk WHERE id=$id");
 }

 public function create($nama, $harga) {
  return $this->conn->query("INSERT INTO produk(nama,harga) VALUES('$nama','$harga')");
 }

 public function update($id, $nama, $harga) {
  return $this->conn->query("UPDATE produk SET nama='$nama', harga='$harga' WHERE id=$id");
 }

 public function delete($id) {
  return $this->conn->query("DELETE FROM produk WHERE id=$id");
 }
}
?>