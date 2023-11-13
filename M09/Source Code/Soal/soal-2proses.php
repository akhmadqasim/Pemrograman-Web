<!--Karyawan honorer di perusahaan XXX digaji berdasarkan jumlah jam kerjanya selama satu minggu. Upah per jam-->
<!--kerjannya selama satu minggu. Upah per jamnya adalah Rp. 2.000,-. Bila jumlah jam kerja selama satu minggunya lebih-->
<!--besar dari 48 jam, maka sisanya dianggap lembur dengan upah per jam lemburnya adalah Rp. 3.000,--->

<!--Buatlah form untuk memasukkan jumlah jam kerja selama satu minggu seorang karyawan. Setelah form disubmit, maka-->
<!--akan tampil jumlah upah yang diterima karyawan tersebut. Gunakan script PHP untuk membuat hal ini.-->

<html>
    <head>
        <title>Menghitung Upah Karyawam</title>
    </head>
    <body>
        <h1>Menghitung Upah Karyawam</h1>

        <?php
        $jamKerja = $_POST['jamkerja'];

        if ($jamKerja > 48) {
            $upah = 48 * 2000 + ($jamKerja - 48) * 3000;
        } else {
            $upah = $jamKerja * 2000;
        }

        echo "<p>Jumlah upah yang diterima karyawan tersebut adalah Rp. ".$upah.",-</p>";
        ?>
</html>