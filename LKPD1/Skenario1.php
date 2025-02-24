<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario 1</title>
</head>
<body>
    <h1>Tugas LKPD kelompok Ihsan Naufal & Nur Akbar</h1>
    <h2>Skenario1</h2>
    <br>
    <?php 

    // Skenario Pertama
        $nilai = 76;

        if ($nilai <= 100 && $nilai >= 90 ) {
            echo "<h2>Nilai anda = $nilai | predikat anda A</h2>";
        } else if ($nilai <= 89 && $nilai >= 80 ) {
            echo "<h2>Nilai anda = $nilai | Predikat anda B</h2>";  
        } else if ($nilai <= 79 && $nilai >= 70 ) {
            echo "<h2>Nilai anda = $nilai | Predikat anda C</h2>";  
        } else if ($nilai <= 69 && $nilai >= 0 ) {
            echo "<h2>Nilai anda = $nilai | Predikat anda D</h2>";  
        } else {
            echo "<h2>Nilai anda = $nilai | Nilai wajib di antara 0 - 100</h2>";  
        }
           
    ?>
</body>
</html>