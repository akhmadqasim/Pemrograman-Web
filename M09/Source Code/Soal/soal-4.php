<!--Dengan menggunakan konsep SWITCH, buatlah script untuk membaca bulan saat ini dan tampilkan jumlah hari-->
<!--dalam bulan tersebut.-->

<html>
    <head>
        <title>Bulan dan Hari</title>
    </head>
    <body>
        <h1>Bulan dan Hari</h1>

        <?php
            $bulan = date("F");
            $hari = 0;

            switch ($bulan) {
                case "January":
                case "March":
                case "May":
                case "July":
                case "August":
                case "October":
                case "December":
                    $hari = 31;
                    break;
                case "February":
                    $hari = 28;
                    break;
                case "April":
                case "June":
                case "September":
                case "November":
                    $hari = 30;
                    break;
            }

            echo "Bulan: $bulan<br>";
            echo "Jumlah hari: $hari<br>";
        ?>
</html>