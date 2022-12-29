<?php 
require 'proses.php';
 
$id = $_GET['id'];
$mysqli  = "DELETE FROM karyawan WHERE id=$id";
$result  = mysqli_query($conn, $mysqli);
mysqli_close($conn);
if ($result) {
    echo "Hapus berhasil";
  } else {
    echo "Hapus gagal";
  }
header("location:tampil.php");
?>