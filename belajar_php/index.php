<?php

$text1 = "Halo" ;
$text2 = "Selamat Datang" ;

$text3 = $text1 . " " . $text2 . "!" ;

define("PI", 3.14); 

$nama = "Nasywa Rana Khairiyah";

var_dump($nama);

$tinggi_badan = 160;
var_dump($tinggi_badan);

$berat_badan = 55.5;
var_dump($berat_badan);

$status = true;
var_dump($status);

$colors = ['blue', 'yellow', 'red', 'green'];
var_dump($colors);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
<h1> <?= $text3 ?> </h1>
<h2> <?= date('Y-m-d') ?> </h2>
<h3>
    <?= PI ?>
</h3>
</body>
</html>

