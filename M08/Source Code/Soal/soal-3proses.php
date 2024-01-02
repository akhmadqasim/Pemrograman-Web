<html>
    <head>
        <title>Form Pendaftaran Online Mahasiswa Baru Universitas X</title>
    </head>
    <body>
        <h1>Form Pendaftaran Online Mahasiswa Baru Universitas X</h1>

        <?php
        $nama = $_POST['nama'];
        $tempatLahir = $_POST['tempatlahir'];
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $alamat = $_POST['alamat'];
        $jenisKelamin = $_POST['jeniskelamin'];
        $asalSekolah = $_POST['asalsekolah'];
        $nilai = $_POST['nilai'];

        echo "Terima kasih <b>$nama</b> sudah mengisi form pendaftaran<br>";
        echo "<table>";
        echo "<tr><td>Nama Lengkap</td><td>:</td><td>".$nama."</td></tr>";
        echo "<tr><td>Tempat Lahir</td><td>:</td><td>".$tempatLahir."</td></tr>";
        echo "<tr><td>Tanggal Lahir</td><td>:</td><td>".$tanggal."-".$bulan."-".$tahun."</td></tr>";
        echo "<tr><td>Alamat Rumah</td><td>:</td><td>".$alamat."</td></tr>";
        echo "<tr><td>Jenis Kelamin</td><td>:</td><td>".$jenisKelamin."</td></tr>";
        echo "<tr><td>Asal Sekolah</td><td>:</td><td>".$asalSekolah."</td></tr>";
        echo "<tr><td>Nilai UAN</td><td>:</td><td>".$nilai."</td></tr>";
        echo "</table>";
        ?>
    </body>
</html>