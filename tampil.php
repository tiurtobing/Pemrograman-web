<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karyawan</title>
</head>
<body>
    <h2> Daftar Karyawan </h2>
    <a href="index.php">Back</a>
    <table border="1">
        <tr>
            <th> # </th>
            <th> Nama </th>
            <th> Email </th>
            <th> Alamat </th>
            <th> Jenis kelamin </th>
            <th> Posisi </th>
            <th> Status </th>
            <th> Aksi </th>
        </tr>
        <?php 
            include 'proses.php';
            $data = mysqli_query($conn, "SELECT * FROM karyawan");
            $no = 1;
            while($d = mysqli_fetch_array($data)){
        ?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $d['nama']?></td>
                <td><?= $d['email']?></td>
                <td><?= $d['alamat']?></td>
                <td><?= $d['jenis_kelamin']?></td>
                <td><?= $d['posisi']?></td>
                <td><?= $d['status']?></td>
                <td><a href="edit.php?id=<?= $d['id']; ?>" class="button">Update</a><a href="hapus.php?id=<?= $d['id']; ?>" class="button">Hapus</a></td>
            </tr>
        <?php 
        }
        ?>
    </table>
</body>
</html>