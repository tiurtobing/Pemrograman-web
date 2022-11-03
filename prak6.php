<html>
    <head>
        <body>
    <?php
echo "<h2>Konversi barang pak Joy</h2>";
$data = array(  
array("No","Nama Barang","Berat(kg)","Berat(gram)","Berat(miligram)","stock"),
array("1","Tepung",1,1*1000,1*1000000,20),
array("2","Gula",5,5*1000,5*1000000,25),
array("3","Pisang",2,2*1000,2*1000000,20),
array("4","Terigu",7,7*1000,7*1000000,30),
array("5","Mantan",1,1*1000,1*1000000,1),
);

echo '<table border="1">';
foreach($data as $row) {
echo '<tr>';
foreach($row as $cell) {
    if ($cell==0) {
        echo '<td style="background-color:red">'.$cell.'</td>';
    }
    else {
        echo '<td>' .$cell. '</td>';
    }
}
echo '</tr>';
}
echo '</table>';
?>
</body>
 </html>