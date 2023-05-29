<?php
include "connection.php";

$kategori = mysqli_real_escape_string($con, $_POST['kategori']);

$sql = "INSERT INTO kategori (kategori) VALUES ('$kategori')";
mysqli_query($con, $sql);

$url = "index.php?menu=kategori";
$pesan = "Data berhasil disimpan";

echo "<script>alert('$pesan'); location='$url'; </script> ";
