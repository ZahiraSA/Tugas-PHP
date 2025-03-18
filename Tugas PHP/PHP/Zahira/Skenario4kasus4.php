<?php
// Playlist lagu Ambyar
$musik = [
    ["galau", "Mesin Waktu - Budi Doremi"],
    ["semangat", "Selamat Pagi - Ran"],
    ["marah", "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
];
$perasaan = ["galau", "semangat", "marah"];

echo "Playlist lagu Ambyar:<br>";
foreach ($perasaan as $suasana) {
foreach ($musik as $lagu) {
     if ($lagu[0] == $suasana) {
echo "Ambyar sedang " . $suasana . ", maka ia mendengarkan " . $lagu[1] . "<br>";
        }
    }
}
?>
