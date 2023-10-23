<?php
$jumlahUang = 1575250;

$a = intval($jumlahUang / 100000); // Jumlah pecahan Rp. 100.000
$jumlahUang %= 100000; // Sisa uang setelah menghitung pecahan Rp. 100.000

$b = intval($jumlahUang / 50000); // Jumlah pecahan Rp. 50.000
$jumlahUang %= 50000; // Sisa uang setelah menghitung pecahan Rp. 50.000

$c = intval($jumlahUang / 20000); // Jumlah pecahan Rp. 20.000
$jumlahUang %= 20000; // Sisa uang setelah menghitung pecahan Rp. 20.000

$d = intval($jumlahUang / 5000); // Jumlah pecahan Rp. 5.000
$jumlahUang %= 5000; // Sisa uang setelah menghitung pecahan Rp. 5.000

$e = intval($jumlahUang / 100); // Jumlah pecahan Rp. 100
$jumlahUang %= 100; // Sisa uang setelah menghitung pecahan Rp. 100

$f = intval($jumlahUang / 50); // Jumlah pecahan Rp. 50

echo "Jumlah Rp. 100.000 : $a lembar<br />";
echo "Jumlah Rp. 50.000 : $b lembar<br />";
echo "Jumlah Rp. 20.000 : $c lembar<br />";
echo "Jumlah Rp. 5.000 : $d lembar<br />";
echo "Jumlah Rp. 100 : $e koin<br />";
echo "Jumlah Rp. 50 : $f koin<br />";
?>