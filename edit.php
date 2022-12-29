<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Karyawan</title>
</head>
<body>
    <h2> Update Data Karyawan </h2><br>
    <a href="tampil.php">Back</a>
    <?php 
        require 'proses.php';
        $id = $_GET['id'];
        $data = mysqli_query($conn, "SELECT * FROM karyawan WHERE id='$id'");
        while($d = mysqli_fetch_array($data)){
    ?>
    <form method="POST" action="update.php">
        <table>
                <tr>
                    <td><h3>Form Update Data Karyawan </h3></td>
                </tr>
                <tr>
                    <td> Nama </td>
                    <td>
                        <input type="hidden" name = "id" value="<?= $d['id']?>">
                        <input type="text" name = "nama" value="<?= $d['nama']?>"/>
                    </td>
                </tr>
                <tr>
                    <td> Email </td>
                    <td><input type="email" name = "email" value="<?= $d['email']?>"/></td>
                </tr>
                <tr>
                    <td> Alamat </td>
                    <td><input type="text" name = "alamat" value="<?= $d['alamat']?>"/></td>
                </tr>
                <tr>
                    <td> Jenis kelamin </td>
                    <td><input type="text" name = "jenis_kelamin" value="<?= $d['jenis_kelamin']?>"/></td>
                </tr>
                <tr>
                    <td> Posisi </td>
                    <td><input type="text" name = "posisi" value="<?= $d['posisi']?>"/></td>
                </tr>
                <tr>
                    <td> Status </td>
                    <td><input type="text" name = "status" value="<?= $d['status']?>"/></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Submit" value="Submit"><input type="reset" name="Reset" value="Reset"></td>
                </tr>
        </table>
    </form>
    <?php
    } 
    ?>
</body>
</html>