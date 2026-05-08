<?php
$angka1 = 20;

if ($angka1 > 5 && $angka1 < 15) {
    echo $angka1 . ' diantara 5 dan 15';
}

if ($angka1 > 5 || $angka1 < 15) {
    echo $angka1 . ' lebih dari 5 atau bisa juga kurang dari 15';
}

if ($angka1 != 100) {
    echo '<br>';
    echo $angka1 . ' tidak sama dengan 100';
}

?>