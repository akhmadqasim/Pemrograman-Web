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

        <form action="soal-3proses.php" method="post">
            Masukkan jumlah jam kerja<input type="text" name="jamkerja">
            <select name="golongan">
                <option value="A">Golongan A</option>
                <option value="B">Golongan B</option>
                <option value="C">Golongan C</option>
                <option value="D">Golongan D</option>
            </select>
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset" name="reset">
        </form>
    </body>
</html>