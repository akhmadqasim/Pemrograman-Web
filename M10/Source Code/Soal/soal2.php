<!--Dengan menggunakan script PHP, tampilkan semua pasangan nilai x, y, dan z yang memenuhi persamaan-->
<!--x + y + z = 25, dengan x, y, dan z adalah bilangan asli. Serta tampilkan pula banyaknya pasangan-->
<!--x, y, dan z yang memenuhi persamaan tersebut.-->

<!--Contoh tampilan:-->
<!--x = 1, y = 1, z = 23-->
<!--x = 1, y = 2, z = 22-->
<!--x = 1, y = 3, z = 21-->
<!--dst.-->
<!--Jumlah penyelesaian : ...-->

<!--Petunjuk:-->
<!--1. Tentukan dahulu nilai-nilai yang mungkin dari x, y, dan z. Berapa nilai minimum yang mungkin dari ketiganya,-->
<!--dan berapa maksimumnya.-->
<!--2. Gunakan nested FOR/WHILE 3 tingkat-->

<html>
    <head>
        <title>Soal 2</title>
    </head>
    <body>
        <?php
        $x = 1;
        $y = 1;
        $z = 1;
        $hitung = 0;
        while ($x <= 25) {
            while ($y <= 25) {
                while ($z <= 25) {
                    if ($x + $y + $z == 25) {
                        echo "x = " . $x . ", y = " . $y . ", z = " . $z . "<br/>";
                        $hitung = $hitung + 1;
                    }
                    $z++;
                }
                $z = 1;
                $y++;
            }
            $y = 1;
            $x++;
        }
        echo "Jumlah penyelesaian : " . $hitung;
        ?>
    </body>
</html>