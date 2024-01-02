<html>
    <head>
        <title>Menghitung Saldo Akhir</title>
    </head>
    <body>
        <h1>Menghitung Saldo Akhir</h1>

        <?php
        $saldoAwal = $_POST['saldoawal'];
        $bunga = $_POST['bunga'];
        $lamaBulan = $_POST['lamabulan'];

        $saldoAkhir = $saldoAwal + $saldoAwal * $bunga/100 * $lamaBulan;

        echo "<table>";
        echo "<tr><td>Saldo Awal</td><td>:</td><td>".$saldoAwal."</td></tr>";
        echo "<tr><td>Besar Bunga per Bulan</td><td>:</td><td>".$bunga."</td></tr>";
        echo "<tr><td>Jangka Waktu Menabung (Bulan)</td><td>:</td><td>".$lamaBulan."</td></tr>";
        echo "</table>";
        echo "<br>";
        echo "<p>Saldo akhir setelah ".$lamaBulan." bulan adalah : Rp. ".$saldoAkhir.",-</p>";
        ?>
    </body>
</html>