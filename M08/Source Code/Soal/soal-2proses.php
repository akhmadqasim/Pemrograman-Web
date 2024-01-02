<html>
    <head>
        <title>Menghitung Uang Pecahan</title>
    </head>
    <body>
        <h1>Menghitung Uang Pecahan</h1>

        <?php
        $jumlahUang = $_POST['jumlahuang'];

        echo "<table>";
        echo "<tr><td>Jumlah Uang</td><td>:</td><td>".$jumlahUang."</td></tr>";
        echo "</table>";

        $sisa = $jumlahUang % 100000;
        $a = ($jumlahUang - $sisa) / 100000;

        $jumlahUang = $sisa;
        $sisa = $jumlahUang % 50000;
        $b = ($jumlahUang - $sisa) / 50000;

        $jumlahUang = $sisa;
        $sisa = $jumlahUang % 20000;
        $c = ($jumlahUang - $sisa) / 20000;

        $jumlahUang = $sisa;
        $sisa = $jumlahUang % 5000;
        $d = ($jumlahUang - $sisa) / 5000;

        $jumlahUang = $sisa;
        $sisa = $jumlahUang % 100;
        $e = ($jumlahUang - $sisa) / 100;

        $jumlahUang = $sisa;
        $sisa = $jumlahUang % 50;
        $f = ($jumlahUang - $sisa) / 50;

        echo "Jumlah uang Rp. 100.000 = ".$a." lembar<br>";
        echo "Jumlah uang Rp. 50.000 = ".$b." lembar<br>";
        echo "Jumlah uang Rp. 20.000 = ".$c." lembar<br>";
        echo "Jumlah uang Rp. 5.000 = ".$d." lembar<br>";
        echo "Jumlah uang Rp. 100 = ".$e." lembar<br>";
        echo "Jumlah uang Rp. 50 = ".$f." lembar<br>";
        ?>
    </body>
</html>