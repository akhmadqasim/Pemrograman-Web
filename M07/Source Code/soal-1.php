<?php
$saldoAwal = 1000000;
$bunga = 0.0025;
$bulan = 11;
$saldoAkhir = $saldoAwal + $saldoAwal * 0.25/100 * 11;
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".$saldoAkhir.",-";
?>