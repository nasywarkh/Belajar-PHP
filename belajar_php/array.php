<?php
$names = ['Andi', 'Ahmad', 'Rofi', 'Maryam'];
print_r ($names);
var_dump ($names);

$colors = array('Purple', 'Pink', 'Yellow', 'Green');
echo '<br>';
print_r ($colors);
var_dump ($colors);
echo '<br>';
echo $colors[0];
echo '<br>';
print_r ($colors[2]);

$colors[0] = 'Blue';
echo '<br>';
print_r ($colors[0]);

$colors[] = 'White';
echo '<br>';
print_r ($colors);

$students = [
    'name' => 'salamah',
    'kelas' => '10',
    'alamat' => 'bekasi',
];

echo '<br>';
var_dump ($students);
?>