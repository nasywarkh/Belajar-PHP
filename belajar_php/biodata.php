<?php
$nama_depan = "Nasywa";
$nama_belakang = "Rana Khairiyah";
$umur = 20;
$jenis_kelamin = "perempuan";
$alamat = "Jln. Ahmad Yani No. 80, Kreasi Computer";
$hobi = "traveling";

$text = "Perkenalkan nama saya adalah" . " " . $nama_depan . " " . $nama_belakang . "" . "." . " " . "Umur saya saat ini adalah" . " " . $umur . "" . "." . " " . "Saya tinggal di" . " " . $alamat . "" . "." . " " . "Hobi saya adalah" . " " . $hobi . "" . ".";

echo ($text);


$tb = 1.6;
$bb = 55;

var_dump(is_int($tb));
var_dump(is_float($tb));

$tb_int = (int) round($tb);
var_dump($tb_int);

$bb = (float) $bb;
var_dump($bb);

$a = 10;
$b = 5;
echo('<br>');
echo('a = ' .$a);
echo('<br>');
echo('b = ' .$b);
echo('<br>');

$a += $b; // a = a + b
echo('a = a + b = '. $a);
echo('<br>');

$a -= $b; // a = a - b
echo('a = a - b = '. $a);
echo('<br>');

$a *= $b; // a = a * b
echo('a = a * b = '. $a);
echo('<br>');

$a /= $b; // a = a / b
echo('a = a / b = '. $a);
echo('<br>');

$a %= $b; // a = a % b
echo('a = a % b = '. $a);
echo('<br>');
?>

