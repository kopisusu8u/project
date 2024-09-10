<?php
    $respon = "refresh";
    $waktu = 2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind in PHP</title>
    <meta http-equiv="<?=$respon?>" content="<?=$waktu?>"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <?php
        include('layout/register.php')
        // include('layout/register.php')
    ?>
    
</body>
</html>