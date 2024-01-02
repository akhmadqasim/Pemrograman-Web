<html>
    <head>
        <title>Menghitung Saldo Akhir</title>
    </head>
    <body>
        <h1>Menghitung Saldo Akhir</h1>
        <form action="soal-1proses.php" method="post">
            <table>
                <tr>
                    <td>Saldo Awal</td>
                    <td>:</td>
                    <td><input type="text" name="saldoawal" size="20"/></td>
                </tr>
                <tr>
                    <td>Bunga/Bulan</td>
                    <td>:</td>
                    <td><input type="text" name="bunga" size="20"/></td>
                </tr>
                <tr>
                    <td>Lama Bulan</td>
                    <td>:</td>
                    <td><input type="text" name="lamabulan" size="20"/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Submit"/>
            <input type="reset" name="reset" value="Reset"/>
        </form>
    </body>
</html>