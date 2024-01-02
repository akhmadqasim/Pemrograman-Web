<html>
    <head>
        <title>Form Pendaftaran Online Mahasiswa Baru Universitas X</title>
    </head>
    <body>
        <h1>Form Pendaftaran Online Mahasiswa Baru Universitas X</h1>

        <form action="soal-3proses.php" method="get">
            <table>
                <tr><td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" size="20"></td></tr>
                <tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tempatlahir" size="20"></td></tr>
                <tr><td>Tanggal Lahir</td><td>:</td><td>
                        <select name="tanggal">
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <select name="bulan">
                            <?php
                            for ($i = 1; $i <= 12; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <select name="tahun">
                            <?php
                            for ($i = 1980; $i <= 2005; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                    </td></tr>
                <tr><td>Alamat Rumah</td><td>:</td><td><textarea name="alamat" cols="20" rows="5"></textarea></td></tr>
                <tr><td>Jenis Kelamin</td><td>:</td>
                    <td>
                        <input type="radio" name="jeniskelamin" value="Pria">Pria
                        <input type="radio" name="jeniskelamin" value="Wanita">Wanita
                    </td>
                </tr>
                <tr><td>Asal Sekolah</td><td>:</td><td><input type="text" name="asalsekolah" size="20"></td></tr>
                <tr><td>Nilai UAN</td><td>:</td><td><input type="text" name="nilai" size="20"></td></tr>
            </table>
            <input type="submit" name="submit" value="Submit"/>
            <input type="reset" name="reset" value="Reset"/>
        </form>
    </body>
</html>