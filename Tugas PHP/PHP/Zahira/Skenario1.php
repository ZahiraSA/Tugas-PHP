  <h2>Skenario<h2>
    <h4><h4>
<?php

$nilai = 45;

if ($nilai >= 90 && $nilai <= 100) {
    $ket = "A";
} else if ($nilai >= 80 && $nilai <= 89) {
    $ket = "B";
} else if ($nilai >= 70 && $nilai <= 79) {
    $ket = "C";
} else if ($nilai >= 0 && $nilai <= 69) {
    $ket = "D";

} else {
    $ket = "Nilai wajib diantara 0-100";
}

print "Nilai $nilai = $ket";

?>