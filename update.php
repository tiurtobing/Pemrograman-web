<?php
      require "proses.php";
      $id = $_REQUEST['id'];
      $nama  = $_REQUEST['nama'];
      $email = $_REQUEST['email'];
      $alamat = $_REQUEST['alamat'];
      $jenis_kelamin = $_REQUEST['jenis_kelamin'];
      $posisi = $_REQUEST['posisi'];
      $status = $_REQUEST['status'];
      $mysqli  = "UPDATE karyawan SET nama='$nama', email='$email', alamat='$alamat', jenis_kelamin='$jenis_kelamin', posisi='$posisi', status='$status' WHERE id='$id'";
      $result  = mysqli_query($conn, $mysqli);
      mysqli_close($conn);
    
      header("location:tampil.php")
?>