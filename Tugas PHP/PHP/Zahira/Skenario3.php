<h1>Jadwal Kegiatan Andi</h1>

    <?php

    $nama_anda = "Yuanova Helga";
    $nama_partner = "Zahira Shofa";
    echo "<p>Dibuat oleh: $nama_anda dan $nama_partner</p>";

    $jam = date("06:06");
    echo "<p>Jam Sekarang:$jam </p>";

    $adaTugas = true;
    $berkumpul_dimajukan = false; 

    $jadwal = [
        "04:00 - 06:10" => "Sholat Subuh dan Mengaji",
        "07:00 - 15:30" => "Masih di Sekolah",
        "15:30 - 15:45" => "Perjalanan pulang dari sekolah ke rumah",
        "15:45 - 16:15" => "Membeli bumbu",
        "16:15 - 16:30" => "Mandi",
        "16:30 - 17:00" => "Mengaji",
        "17:00 - 17:30" => "Chatting dengan Raya",
        "17:30 - 18:00" => "Menghafalkan dialog",
        "18:00 - 18:10" => "Sholat Maghrib",
        "18:10 - 18:40" => "Makan malam bersama keluarga",
        "18:40 - 19:00" => "Waktu Luang",
        "19:00 - 19:10" => "Sholat Isya",
    ];

    if ($adaTugas) {
        $jadwal["19:10 - 21:10"] = "Mengerjakan tugas sekolah";
        $jadwal["21:10 - 21:40"] = "Mengobrol bersama keluarga";
        $jadwal["21:40 - 22:00"] = "Waktu luang";
        echo "<p>Catatan: Permintaan waktu ngobrol dimajukan ditolak</p>";
        if ($berkumpul_dimajukan) {
            $jadwal["19:10 - 19:40"] = "Mengobrol bersama keluarga";
            $jadwal["19:40 - 22:00"] = "Waktu luang";
        } else {
            $jadwal["19:10 - 21:30"] = "Waktu luang";
            $jadwal["21:30 - 22:00"] = "Mengobrol bersama keluarga";
        }
        echo "<p>YESSS! Tidak ada tugas, HOREEE</p>";
    }

    $jadwal["22:00 - 04:00"] = "Tidur";

    echo "<ul>";
    foreach ($jadwal as $waktu => $kegiatan) {
        echo "<li> $waktu - $kegiatan</li>";
    }
    echo "</ul>";

    $kegiatan_sekarang = "Tidak ada kegiatan saat ini";
    $kegiatan_selanjutnya = "Tidak ada kegiatan berikutnya";

    foreach ($jadwal as $waktu => $kegiatan) {
        $rentang = explode(" - ", $waktu);
        $jam_mulai = $rentang[0];
        $jam_selesai = $rentang[1];

        if ($jam >= $jam_mulai && $jam <= $jam_selesai) {
            $kegiatan_sekarang = $kegiatan;
        } elseif ($jam < $jam_mulai && $kegiatan_selanjutnya == "Tidak ada kegiatan berikutnya") {
            $kegiatan_selanjutnya = $kegiatan;
        }
    }

    echo "Sedang Berlangsung: <span class='highlight'>$kegiatan_sekarang</span></p>";
    echo "Selanjutnya: $kegiatan_selanjutnya</p>";
    ?>