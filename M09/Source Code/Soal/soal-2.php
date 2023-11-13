<!--Karyawan honorer di perusahaan XXX digaji berdasarkan jumlah jam kerjanya selama satu minggu. Upah per jam-->
<!--kerjannya selama satu minggu. Upah per jamnya adalah Rp. 2.000,-. Bila jumlah jam kerja selama satu minggunya-->
<!--lebih besar dari 48 jam, maka sisanya dianggap lembur dengan upah per jam lemburnya adalah Rp. 3.000,--->

<!--Buatlah form untuk memasukkan jumlah jam kerja selama satu minggu seorang karyawan. Setelah form disubmit, maka-->
<!--akan tampil jumlah upah yang diterima karyawan tersebut. Gunakan script PHP untuk membuat hal ini.-->

<html>
    <head>
        <title>Menghitung Upah Karyawan</title>
    </head>
    <body>
        <h1>Menghitung Upah Karyawan</h1>

        <form action="soal-2proses.php" method="post">
            Masukkan jumlah jam kerja<input type="text" name="jamkerja">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset" name="reset">
        </form>
    </body>
</html>