<?php
  include "proses.php";
  $id = $_REQUEST['id'];
  $nama = $_REQUEST['nama'];
  $email = $_REQUEST['email'];
  $alamat = $_REQUEST['alamat'];
  $jenis_kelamin = $_REQUEST['jenis_kelamin'];
  $posisi  = $_REQUEST['posisi'];
  $status  = $_REQUEST['status'];
  $mysqli  = "INSERT INTO karyawan (nama, email, alamat, jenis_kelamin, posisi, status) VALUES ('$nama', '$email', '$alamat', '$jenis_kelamin', '$posisi', '$status')";
  $result  = mysqli_query($conn, $mysqli);
  mysqli_close($conn);
  header("location:tampil.php")
?>