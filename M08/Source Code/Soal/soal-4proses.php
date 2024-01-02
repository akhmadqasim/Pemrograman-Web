<html>
    <head>
        <title>Form Pendaftaran Online Mahasiswa Baru Universitas X</title>
    </head>
    <body>
        <h1>Form Pendaftaran Online Mahasiswa Baru Universitas X</h1>

        <?php
        $nama = $_GET['nama'];
        $tempatLahir = $_GET['tempatlahir'];
        $tanggal = $_GET['tanggal'];
        $bulan = $_GET['bulan'];
        $tahun = $_GET['tahun'];
        $alamat = $_GET['alamat'];
        $jenisKelamin = $_GET['jeniskelamin'];
        $asalSekolah = $_GET['asalsekolah'];
        $nilai = $_GET['nilai'];

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