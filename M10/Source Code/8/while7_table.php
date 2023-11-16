<?php
$jumlahBaris = 10;
$jumlahKolom = 6;
echo "<table border='1'>";
$baris = 1;
while ($baris <= $jumlahBaris) {
    echo "<tr>";
    $kolom = 1;
    while ($kolom <= $jumlahKolom) {
        echo "<td>...</td>";
        $kolom++;
    }
    echo "</tr>";
    $baris++;
}
echo "</table>";
?>