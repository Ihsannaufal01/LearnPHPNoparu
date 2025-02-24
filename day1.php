<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Day 1</title>
    <style>
        .Abang{
            background-color:powderblue;
        }
    </style>
</head>
    <body>
        <h1>Haloooo</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates vitae rerum fugit quam fuga eaque ea doloribus, eligendi corrupti? Tempora maiores velit similique accusamus unde? Numquam, voluptas provident error laboriosam dolor quibusdam ea inventore praesentium earum dolore quasi iusto, repudiandae animi saepe unde aspernatur vero quaerat obcaecati deleniti cum. Velit.</p>
        <!-- testing -->
        <?php
            $walkes = "Bu Yuniar";
            echo "<h1>Belajar PHP</h1>";
            echo '<h2>Haloo, aku bersekolah di Snapan<h2>';
            echo "<div class='Abang'>wali kelas: ". $walkes ."</div>";
            // coba coba ini comment
            # ini juga commentar dengan hastag
            /* ini iyayaya 
            bisa ditumpuk*/
            echo " $walkes ";
            $angka1 = 14;
            $angka2 = 20;
            $angka3 = 37;
            $angka4 = 2;
            $penjumlahan = $angka1 + $angka2;
            $perkali = $angka1 * $angka3;
            // $pangkat = $angka1 sub $angka2;
            
            echo "<br>";
            echo "<br> $angka1 + $angka2 = ", $penjumlahan;
            echo "<br> $angka1 + $angka2 = ", $penjumlahan;
            echo "<br>";
            echo "<br> $angka1 x $angka3 = ", $perkali;
            echo "<br>";
            echo "<br>" . $perkali . " = $angka1 x $angka3";
            echo "<br>";
            echo "<br> $angka4<sup>$angka2</sup> = ";
            echo pow($angka4,$angka2);
            echo "<br>";
            echo "$angka4<sup>$angka2</sup> = ";
            echo number_format(pow($angka4, $angka2), 2, ',', '.'). "<h2>menggunakan number format</h2>";
            // number format(angkanya, jumlah angka dibelakang koma, tanda koma/titik paling belakang, tanda koma/titik diantara angka)
        ?>
    </body>
</html>