<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skenario 2</title>
</head>
<body>
    <h1>Tugas LKPD kelompok Ihsan Naufal & Nur Akbar</h1>
    <h2>Skenario Kedua</h2>
    <br>
    <?php         
    // Skenario Kedua
        $jam = date("15:00");

        if ($jam >= date("00:00") && $jam <= date("04:00") ) {
            echo "<h2>jam $jam adalah Dini hari </h2>";  
        } else if ($jam >= date("04:00") && $jam <= date("10:00") ) {
            echo "<h2>jam $jam adalah Pagi </h2>";  
        } else if ($jam >= date("10:00") && $jam <= date("15:00") ) {
            echo "<h2>jam $jam adalah Siang </h2>";  
        } else if ($jam >= date("15:00") && $jam <= date("17:30") ) {
            echo "<h2>jam $jam adalah Sore </h2>";  
        } else if ($jam >= date("17:30") && $jam <= date("18:30") ) {
            echo "<h2>jam $jam adalah Petang </h2>";  
        } else if ($jam >= date("18:30") & $jam <= date("24:00") ) {
            echo "<h2>jam $jam adalah Malam </h2>";  
        } else  {
            echo "<h2>jam $jam adalah .... WOY KAU DI ISEKAI?? </h2>";  
        } 

    ?>
</body>
</html>