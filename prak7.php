<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "UTF-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    <title>Tabel Konversi</title>
</head>

<body>
<?php
class Barang
{
    private $nama;
    private $beratKG;
    private $beratG;
    private $beratMG;
    private $stok;

    function __construct($nama,$beratKG,$stok){
        $this->nama = $nama;
        $this->beratKG = $beratKG;
        $this->stok = $stok;
    }

    function get_nama(){
        return $this->nama;
    }

    function get_beratKG(){
        return $this->beratKG;
    }

    function get_stok(){
        return $this->stok;
    }

    function convertBeratG($beratKG){
        return $beratG = $beratKG*1000;
    }

    function convertBeratMG($beratKG){
        return $beratMG = $beratKG*1000000;
    }
}

    $barang1 = new Barang($_POST["nama"],$_POST["berat"],$_POST["stok"]);
    $namaBarang1 = $barang1->get_nama();
    $beratKGBarang1 = $barang1->get_beratKG();
    $stokBarang1 = $barang1->get_stok();
    $beratGBarang1 = $barang1->convertBeratG($beratKGBarang1);
    $beratMGBarang1 = $barang1->convertBeratMG($beratKGBarang1);

echo '<h2 style ="background-color: skyblue"> KONVERSI BARANG TOKO JAYA </h2>';
    $data = array(  
        array("No","Nama Barang","Berat(Kg)","Berat(Gram)","Berat(Miligram)","Stok"),
        array("1","Beras",10,10*1000,10*1000000,20),
        array("2","Tepung",25,25*1000,25*1000000,12),
        array("3","Garam",12,12*1000,12*1000000,5),
        array("4","Gula",5,5*1000,5*1000000,0),
        array("5",$namaBarang1, $beratKGBarang1, $beratGBarang1, $beratMGBarang1, $stokBarang1)
    );
echo '<table border="1">';
foreach($data as $row){
echo '<tr>';
        foreach($row as $cell){
            if ($cell == 0){
            echo '<td style="background-color: red">' .$cell. '</td>';
            }
            else {
            echo '<td>' .$cell. '</td>';
            }
        }
echo '</tr>';
}

echo "<h2> Daftar data barang </h2>";

echo "<form action = '' method = 'POST'>
    <table>
    <tr>
    <td> Nama : </td>
    <td> <input type='text' name='nama'><br> </td> 
    </tr>
    <tr>
    <td> Berat (Kg) : </td>
    <td> <input type='number' name='berat'><br> </td>
    </tr>
    <tr>
    <td> Stok :</td>
    <td> <input type='number' name='stok'><br> </td>
    </tr>
    </table>
    <input type='submit' value='submit'>
    </form>";
?>
</body>
</html>