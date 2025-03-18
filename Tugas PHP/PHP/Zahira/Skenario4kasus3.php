<?php
#Mawar yang dimiliki Sholeh
echo "Mawar yang dimiliki Sholeh: ";
    $jumlahMawarSholeh = 0;
for ($mawar = 21; $mawar >= 10; $mawar--) { 
    echo $mawar . ", ";
    $jumlahMawarSholeh++;
}
echo "<br>";
echo "Jumlah mawar yang dimiliki Sholeh : $jumlahMawarSholeh";
echo "<br>";
#Mawar yang diberikan ke ibunya
echo "Mawar yang diberikan ke ibunya: ";
    $jumlahMawarIbu = 0;
for ($mawar = 21; $mawar >= 10; $mawar -= 4) { 
    echo $mawar . ", ";
    $jumlahMawarIbu++;
}
echo "<br>";
echo "Jumlah mawar yang dimiliki Ibu : $jumlahMawarIbu";
echo "<br>";

#Mawar yang diberikan ke Sholehah
$mawarSholehah = array_diff(range(10, 21), range(10, 21, 4));
$jumlahMawarSholehah = count($mawarSholehah);

echo "Mawar yang dimiliki Sholehah: ";
foreach ($mawarSholehah as $mawar) {
    echo "$mawar, ";
}
echo "<br>";
echo "Jumlah mawar yang dimiliki Sholehah: $jumlahMawarSholehah";
?>