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
                <a href="#">Link</a>
                <a href="#">Link</a>
                <a href="#">Link</a>
            </div>
            <div class="main">
                <div class="judul">
                    Heading (Judul Konten)
                </div>
                <br/>
                <div class="konten">
                    Konten/isi
                </div>
            </div>
            <div class="footer">
                <?= $footer ?>
            </div>
        </div>
    </body>
</html>