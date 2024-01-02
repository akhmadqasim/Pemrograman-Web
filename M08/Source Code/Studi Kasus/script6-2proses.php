<html>
    <head>
        <title>Menghitung Komisi Salesman</title>
    </head>
    <body>
        <h1>Menghitung Komisi Salesman</h1>
        <?php
        $nilaiJual = $_POST['penjualan'];  // membaca nilai penjualan
        $persenKomisi = $_POST['komisi'];  // membaca nilai presentase komisi

        $komisi = $nilaiJual * $persenKomisi / 100;  // hitung komisi berdasarkan persen komisi

        echo "<p>Nilai penjualan salesman : Rp. ".$nilaiJual."</p>"; // menampilkan nilai penjualan salesman
        echo "<p>Persentase komisi : ".$persenKomisi."%</p>"; // menampilkan nilai persentase komisi salesman
        echo "<p>Komisi yang didapat salesman adalah Rp. ".$komisi."</p>"; // menampilkan hasil perhitungan komisi
        ?>
    </body>
</html>