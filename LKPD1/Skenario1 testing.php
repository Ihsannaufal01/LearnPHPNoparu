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
    
    <style>
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
    </style>
    <form name="form" action="" method="post">
    <input type="number" name="subject" id="subject"/>
    <button type="submit">Submit</button>
</form>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input value
    $nilai = $_POST['subject'];

    // Validate if it's a number
    if (is_numeric($nilai)) {
        $nilai = (int) $nilai; // Convert to integer

        if ($nilai <= 100 && $nilai >= 90) {
            echo "<h2>Nilai anda = $nilai | Predikat anda A</h2>";
        } elseif ($nilai <= 89 && $nilai >= 80) {
            echo "<h2>Nilai anda = $nilai | Predikat anda B</h2>";  
        } elseif ($nilai <= 79 && $nilai >= 70) {
            echo "<h2>Nilai anda = $nilai | Predikat anda C</h2>";  
        } elseif ($nilai <= 69 && $nilai >= 0) {
            echo "<h2>Nilai anda = $nilai | Predikat anda D</h2>";  
        } else {
            echo "<h2>Nilai anda = $nilai | Nilai wajib di antara 0 - 100</h2>";  
        }
    } else {
        echo "<h2>Masukkan nilai yang valid!</h2>";
    }
}
?>

</body>
</html>