<?php
include "header.php";
$bill1 = $_POST['bil1'];
$bill2 = $_POST['bil2'];
$hasil = $bill1 + $bill2;
?>
<h1><font face="<?php echo $jenisFontHeading; ?>">
        Output
    </font></h1>
<p><font face="<?php echo $jenisFontParagraf; ?>">
        Hasil penjumlahannya adalah <?php echo $hasil; ?>
    </font></p>
<?php
include "footer.php";
?>