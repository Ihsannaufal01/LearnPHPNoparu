<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario 3</title>
</head>
<body>
    <h1>Tugas LKPD kelompok Ihsan Naufal & Nur Akbar</h1>
    <h2>Skenario Ketiga</h2>
    <h3>"Bagaimana cara mengatur daftar tugas harian Andi agar lebih efisien selama persiapan festival kesenian budaya yang akan dia ikuti di sekolah?"
</h3>
    <br>
    <?php         
    
    $tugas = true; 

    $jam = date("03:00");
    
    
    if ($tugas == true) {
        echo "<h2>Andi Ada tugas</h2>";
        echo "<h2>pada pukul $jam,</h2>";
        if ($jam >= date("15:30") && $jam <= date("15:45")) {
            echo "<h2>Andi Sedang dalam perjalanan pulang sekolah</h2>";
        } else if ($jam >= date("15:45") && $jam <= date("16:15")) {
            echo "<h2>Andi Sedang mandi</h2>"; 
        } else if ($jam >= date("16:15") && $jam <= date("16:45")) {
            echo "<h2>Andi Sedang Menghafal dialog dialog untuk festival budaya</h2>"; 
        } else if ($jam >= date("16:45") && $jam <= date("17:00")) {
            echo "<h2>Andi ada waktu luang</h2>"; 
        } else if ($jam >= date("17:00") && $jam <= date("17:30")) {
            echo "<h2>Andi Sedang Chattingan dengan raya yang ada di arab</h2>"; 
        } else if ($jam >= date("17:30") && $jam <= date("18:00")) {
            echo "<h2>Andi Sedang mengaji</h2>"; 
        } else if ($jam >= date("18:00") && $jam <= date("18:05")) {
            echo "<h2>Andi Sedang membeli bumbu masak</h2>"; 
        } else if ($jam >= date("18:05") && $jam <= date("18:15")) {
            echo "<h2>Andi Sedang Sholat maghrib</h2>"; 
        } else if ($jam >= date("18:15") && $jam <= date("18:45")) {
            echo "<h2>Andi Sedang makan malam</h2>"; 
        } else if ($jam >= date("18:45") && $jam <= date("19:15")) {
            echo "<h2>Andi ada waktu luang</h2>"; 
        } else if ($jam >= date("19:15") && $jam <= date("19:25")) {
            echo "<h2>Andi Sedang Sholat isya</h2>"; 
        } else if ($jam >= date("19:25") && $jam <= date("21:25")) {
            echo "<h2>Andi Sedang mengerjakan tugas</h2>"; 
        } else if ($jam >= date("21:25") && $jam <= date("21:30")) {
            echo "<h2>Andi ada waktu luang</h2>"; 
        } else if ($jam >= date("21:30") && $jam <= date("22:00")) {
            echo "<h2>Andi Sedang mengobrol dengan keluarga nya</h2>"; 
        } else if ($jam >= date("22:00") && $jam <= date("24:00")) {
            echo "<h2>Andi sedang tidur</h2>"; 
        } else if ($jam >= date("00:00") && $jam <= date("04:00")) {
            echo "<h2>Andi sedang tidur</h2>"; 
        } else {
            echo "Error!";
        }
    }
    else {
        echo "<h2>Andi tidak ada tugas</h2>";
        echo "<h2>pada pukul $jam,</h2>";
        if ($jam >= date("15:30") && $jam <= date("15:45")) {
            echo "<h2>Andi Sedang dalam perjalanan pulang sekolah</h2>";
        } else if ($jam >= date("15:45") && $jam <= date("16:15")) {
            echo "<h2>Andi Sedang mandi</h2>"; 
        } else if ($jam >= date("16:15") && $jam <= date("16:45")) {
            echo "<h2>Andi Sedang Menghafal dialog dialog untuk festival budaya</h2>"; 
        } else if ($jam >= date("16:45") && $jam <= date("17:00")) {
            echo "<h2>Andi ada waktu luang</h2>"; 
        } else if ($jam >= date("17:00") && $jam <= date("17:30")) {
            echo "<h2>Andi Sedang Chattingan dengan raya yang ada di arab</h2>"; 
        } else if ($jam >= date("17:30") && $jam <= date("18:00")) {
            echo "<h2>Andi Sedang mengaji</h2>"; 
        } else if ($jam >= date("18:00") && $jam <= date("18:05")) {
            echo "<h2>Andi Sedang membeli bumbu masak</h2>"; 
        } else if ($jam >= date("18:05") && $jam <= date("18:15")) {
            echo "<h2>Andi Sedang Sholat maghrib</h2>"; 
        } else if ($jam >= date("18:15") && $jam <= date("18:45")) {
            echo "<h2>Andi Sedang makan malam</h2>"; 
        } else if ($jam >= date("18:45") && $jam <= date("19:15")) {
            echo "<h2>Andi ada Mengobrol dengan keluarga</h2>"; 
        } else if ($jam >= date("19:15") && $jam <= date("19:25")) {
            echo "<h2>Andi Sedang Sholat isya</h2>"; 
        } else if ($jam >= date("19:25") && $jam <= date("22:00")) {
            echo "<h2>Andi ada waktu luang</h2>"; 
        } else if ($jam >= date("22:00") && $jam <= date("24:00")) {
            echo "<h2>Andi sedang tidur</h2>"; 
        } else if ($jam >= date("00:00") && $jam <= date("04:00")) {
            echo "<h2>Andi sedang tidur</h2>"; 
        } else {
            echo "Error!";
        }
    }

    ?>

<!-- Jadwal Harian Andi dengan tugas

15:30 Andi pulang dari sekolah
15:30 - 15:45 Andi dalam perjalanan pulang dari sekolah
15:45 Andi tiba di rumah
15:45 - 16:15 Mandi
16:15 - 16:45 Menghafal Dialog
16:45 - 17:15 Luang
17:00 - 17:30 Chat 
17:30 - 18:00 Mengaji
18:00 - 18:05 Beli bumbu
18:05 - 18:15 Sholat Maghrib
18:15 - 18:45 Makan malam
18:45 - 19:15 Luang
19:15 - 19:25 Sholat Isya
19:25 - 21:25 Mengerjakan tugas
21:25 - 21:30 Luang	
21:30 - 22:00 Mengobrol dengan keluarga
22:00 - 04:00 Andi Tidur

Jadwal Harian Andi tanpa tugas

15:30 Andi pulang dari sekolah
15:30 - 15:45 Andi dalam perjalanan pulang dari sekolah
15:45 Andi tiba di rumah
15:45 - 16:15 Mandi
16:15 - 16:45 Menghafal Dialog
16:45 - 17:15 Luang
17:00 - 17:30 Chattingan
17:30 - 18:00 Mengaji
18:00 - 18:05 Beli bumbu
18:05 - 18:15 Sholat Maghrib
18:15 - 18:45 Makan malam
18:45 - 19:15 Mengobrol dengan keluarga
19:15 - 19:25 Sholat Isya
19:25 - 22:00 Luang
22:00 - 04:00 Andi Tidur -->

</body>
</html>