<?php
#Menggunakan foreach
$anak_ayam = range(30, 1);

foreach ($anak_ayam as $jumlah) {
    if ($jumlah == 1) {
        echo "Anak ayam turun $jumlah, mati satu tinggal induknya.<br>";
    } else {
        $sisa = $jumlah - 1;
        echo "Anak ayam turun $jumlah, mati satu tinggal $sisa.<br>";
    }
}
echo "<hr>";

#Menggunakan for
$anak_ayam = 30;
for ($i = $anak_ayam; $i >= 1; $i--) {
    if ($i == 1) {
        echo "Anak ayam turun $i, mati satu tinggal induknya.<br>";
    } else {
        $sisa = $i - 1;
        echo "Anak ayam turun $i, mati satu tinggal $sisa.<br>";
    }
}
?>

