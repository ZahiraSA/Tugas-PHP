<h2>Skenario2<h2>
<h4><h4>
<?php

$waktu = "08:45";

if ($waktu >= "00:00" && $waktu < "04:00") {
    $ket = "dini hari";
} else if ($waktu >= "04:00" && $waktu < "10:00") {
    $ket = "pagi";
} else if ($waktu >= "10:00" && $waktu < "15:00") {
    $ket = "siang";
} else if ($waktu >= "15:00" && $waktu < "17:30") {
    $ket = "sore";
} else if ($waktu >= "17:30" && $waktu < "18:30") {
    $ket = "petang";
} else if ($waktu >= "18:30" && $waktu < "24:00") {
    $ket = "malam";

} else {
    $ket = "dunia lain";
}

echo "Waktu $waktu = $ket";

?>