<!--Buatlah form untuk memasukkan bilangan yang menyatakan tahun. Setelah form tersebut disubmit, maka-->
<!--muncul apakah tahun tersebut termasuk tahun kabisat atau tidak. Gunakan script PHP untuk membuat hal ini.-->

<html>
    <head>
        <title>Mencari Tahun Kabisat</title>
    </head>
    <body>
        <h1>Mencari Tahun Kabisat</h1>

        <form action="soal-1proses.php" method="post">
            Masukkan tahun<input type="text" name="tahun">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset" name="reset">
        </form>
    </body>
</html>