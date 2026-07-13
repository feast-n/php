<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HTML FORMAT</title>
</head>
<body>
    <?php
        header("Refresh: 0.5"); 
        $namadepan = "Pandu";
        $namabelakang = "Fawaz Rabbani";
        $umur = 21;
        $tinggi= 173;

        echo "<p>Nama Depan : " . $namadepan . "</p>";
        echo "<p>Nama Belakang : " . $namabelakang . "</p>";
        echo "<p>Umur : " . $umur . "</p>";
        echo "<p>Tinggi :" . $tinggi . "</p>";
    ?>
    
</body>
</html>