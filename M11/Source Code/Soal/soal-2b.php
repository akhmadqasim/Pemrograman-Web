<!--Dengan menggunakan teknik modularitas, buatlah sebuah desain layout sebuah halaman web yang terdiri dari modul-->
<!--config.php, header.php, dan footer.php. Modul config.php digunakan untuk mengatur konfigurasi seperti jenis-->
<!--font, ukuran font, warna background dll.-->

<!--Keterangan:-->
<!--Untuk bagian "Nama Situs Anda", "Link", dan "Copyright" bersifat fixed, artinya kelima halaman tersebut-->
<!--memiliki tampilan yang sama. Sehingga dalam hal ini bagian yang berubah-ubah untuk setiap halaman hanyalah-->
<!--bagian "Heading dan Konten" saja.-->

<?php
include "config.php";
include "header.php";
include "footer.php";
?>

<html>
    <head>
        <title>Soal 1</title>
        <style>
            .grid-container {
                display: grid;
                grid-template-columns: auto auto;
                border: 1px solid black;
            }

            .grid-container > div {
                text-align: center;
                padding: 20px 0;
                font-size: 30px;
                border: 1px solid black;
            }

            .header {
                grid-column-start: 1;
                grid-column-end: 3;
                font-family: <?= $fontHeader ?>;
            }

            .link > a {
                display: block;
                color: black;
                text-decoration: none;
            }

            .main {
                font-family: <?= $fontParagraph ?>;
            }

            .footer {
                grid-column-start: 1;
                grid-column-end: 3;
                font-family: <?= $fontFooter ?>;
            }
        </style>
    </head>
    <body>
        <div class="grid-container">
            <div class="header">
                <?= $header ?>
            </div>
            <div class="link">
                <a href="./soal-2a.php">Tugas 1</a>
                <a href="./soal-2c.php">Tugas 3</a>
                <a href="./soal-2d.php">Tugas 4</a>
                <a href="./soal-2e.php">Tugas 5</a>
            </div>
            <div class="main">
                <div class="judul">
                    HTML Tag Akronim & Image
                </div>
                <br/>
                <div class="konten">
                    HTML Tag Akronim & Image adalah tag yang digunakan untuk menampilkan gambar dan akronim.
                </div>
            </div>
            <div class="footer">
                <?= $footer ?>
            </div>
        </div>
    </body>
</html>