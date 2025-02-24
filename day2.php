<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <h1>Belajar PHP DAY 2</h1>

        <?php
        // Jika senin, selasa, rabu, maka mengenakan seragam osis
        // Jika kamis, maka mengenakan seragam batik
        // Jika Jumat, maka mengenakan seragam olahraga
        // Jika sabtu, maka mengenakan seragam pramuka
        // And = &
        // OR = ||

            echo "<p>Jika senin, selasa, rabu, maka mengenakan seragam osis</p>";
            echo "<p>Jika kamis, maka mengenakan seragam batik</p>";
            echo "<p>Jika Jumat, maka mengenakan seragam olahraga</p>";
            echo "<p>Jika sabtu, maka mengenakan seragam pramuka</p>";

            $hari = "kamis";

            if ($hari == "senin" || $hari =="selasa" || $hari =="rabu")
            {
                echo "<h2>$hari mengenakan seragam osis</h2>";
            } else if ($hari == "kamis") {
                echo "<h2>$hari mengenakan seragam batik</h2>";
            } else if ($hari == "Jumat") {
                echo "<h2>$hari mengenakan olahraga</h2>";
            } else if ($hari == "sabtu") {
                echo "<h2>$hari mengenakan pramuka</h2>";
            } else {
                echo "<h2>$hari Libur Bangggggggggggggg</h2>";
            }
        ?>
    </body>
</html>