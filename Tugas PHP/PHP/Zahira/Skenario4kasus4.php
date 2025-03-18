<?php
// Playlist lagu Ambyar
$musik = [
    ["galau", "Mesin Waktu - Budi Doremi"],
    ["bersemangat", "Selamat Pagi - Ran"],
    ["marah", "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
];

$suasanaHati = ["galau", "bersemangat", "marah"];

echo "Playlist lagu Ambyar:<br>";
foreach ($suasanaHati as $suasana) {
    foreach ($musik as $lagu) {
        if ($lagu[0] == $suasana) {
            echo "Ambyar mendengarkan " . $suasana . ", maka ia mendengarkan " . $lagu[1] . "<br>";
            break;
        }
    }
}
?>