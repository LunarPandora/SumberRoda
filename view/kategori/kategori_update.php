<?php
include "connection.php";

$idk = mysqli_real_escape_string($con, $_POST['idk']);
$kategori = mysqli_real_escape_string($con, $_POST['kategori']);

$sql = "UPDATE kategori SET kategori='$kategori' WHERE idk='$idk' ";
mysqli_query($con, $sql);

$url = "index.php?menu=kategori";
$pesan = "Data berhasil diubah";

echo "<script>alert('$pesan'); location='$url'; </script> ";
