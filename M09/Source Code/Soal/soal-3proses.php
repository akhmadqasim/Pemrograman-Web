<!--Soal analog no.2, namun dalam hal ini terdapat 4 jenis upah perjamnya dibedakan berdasarkan golongan:-->
<!--Golongan Upah perjam-->
<!--A = Rp. 4.000,--->
<!--B = Rp. 5.000,--->
<!--C = Rp. 6.000,--->
<!--D = Rp. 7.500,--->
<!--Sedangkan upah lemburnya dihitung sama untuk setiap golongan, yaitu Rp. 3.000,- per jamnya. Buatlah form-->
<!--untuk mengisikan jumlah jam kerja selama seminggu, dan juga memilih golongan karyawan (gunakan combo box).-->
<!--Apabila form tersebut disubmit maka akan muncul jumlah upah yang diperoleh karyawan.-->

<html>
<head>
        <title>Menghitung Upah Karyawan</title>
    </head>
    <body>
        <h1>Menghitung Upah Karyawan</h1>

        <?php
            $jamkerja = $_POST['jamkerja'];
            $golongan = $_POST['golongan'];
            $upahlembur = 3000;
            $upahperjam = 0;
            $upah = 0;
            $totalupah = 0;
            $hasillembur = 0;

            if ($golongan == "A") {
                $upahperjam = 4000;
            } elseif ($golongan == "B") {
                $upahperjam = 5000;
            } elseif ($golongan == "C") {
                $upahperjam = 6000;
            } elseif ($golongan == "D") {
                $upahperjam = 7500;
            }

            if ($jamkerja > 48) {
                $hasillembur = $upahlembur * ($jamkerja - 48);
                $upah = 48 * $upahperjam;
                $totalupah = $upah + $upahlembur;
            } else {
                $upah = $jamkerja * $upahperjam;
                $totalupah = $upah;
            }

            echo "Jumlah jam kerja: $jamkerja<br>";
            echo "Golongan: $golongan<br>";
            echo "Upah perjam: $upahperjam<br>";
            echo "Upah lembur: $hasillembur<br>";
            echo "Total upah: $totalupah<br>";
        ?>
    </body>
</html>