<!--Seorang nasabah bank, mula-mula memiliki saldo awal Rp. 1.000.000,- di suatu bank X. Bank tersebut memiliki-->
<!--kebijakan memberikan bunga 3% p.a jika besar saldo kurang dari Rp. 1.100.000,- dan 4 % p.a bila saldo lebih-->
<!--besar atau sama dengan Rp. 1.100.000,-. Perhitungan bunga dihitung dari besar saldo terakhir. Selain itu di-->
<!--setiap bulannya nasabah dikenai biaya administrasi Rp. 9.000,-. Buatlah script PHP untuk menentukan saldo-->
<!--akhir setelah N bulan. Buatlah form untuk mengisikan saldo awalnya dan N (jangka waktu tabungan).-->

<html>
    <head>
        <title>Perhitungan Bunga Bank</title>
    </head>
    <body>
        <form action="soal1.php" method="post">
            <table>
                <tr>
                    <td>Saldo Awal</td>
                    <td>:</td>
                    <td><input type="number" name="saldo" size="20"></td>
                </tr>
                <tr>
                    <td>Jangka Waktu (bulan)</td>
                    <td>:</td>
                    <td><input type="number" name="jangka" size="20"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="hitung" value="Hitung"></td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['hitung'])) {
            $saldo = $_POST['saldo'];
            $jangka = $_POST['jangka'];
            $bunga = 0;
            $biaya = 9000;
            $total = 0;
            $i = 1;
            while ($i <= $jangka) {
                if ($saldo < 1100000) {
                    $bunga = $saldo * 0.03;
                } else {
                    $bunga = $saldo * 0.04;
                }
                $total = $saldo + $bunga - $biaya;
                echo "Saldo di bulan ke-" . $i . " adalah Rp. " . number_format($total, 0, ',', '.') . "<br/>";
                $saldo = $total;
                $i++;
            }
        }
        ?>
    </body>
</html>