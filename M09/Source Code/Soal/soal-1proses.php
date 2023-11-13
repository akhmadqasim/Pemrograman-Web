<!--Buatlah form untuk memasukkan bilangan yang menyatakan tahun. Setelah form tersebut disubmit, maka-->
<!--muncul apakah tahun tersebut termasuk tahun kabisat atau tidak. Gunakan script PHP untuk membuat hal ini.-->

<html>
    <head>
        <title>Mencari Tahun Kabisat</title>
    </head>
    <body>
        <h1>Mencari Tahun Kabisat</h1>

        <?php
        $tahun = $_POST['tahun'];
        if ($tahun % 4 == 0) {
            echo "<p>Tahun ".$tahun." adalah tahun kabisat</p>";
        } else {
            echo "<p>Tahun ".$tahun." adalah bukan tahun kabisat</p>";
        }
        ?>
    </body>
</html>