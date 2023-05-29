<?php
include "connection.php";

$idk = mysqli_real_escape_string($con, $_GET['id']);

$sql = "DELETE FROM master_kategori WHERE idk='$idk'";
mysqli_query($con, $sql);

$url = "index.php?menu=master_kategori";
$pesan = "Data berhasil dihapus";

echo "<script>alert('$pesan'); location='$url'; </script> ";
