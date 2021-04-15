<?php

// Sukurkite 3 kintamuosius: skaičių, raidinės vertės bei tuščią kintamąjį ir juos išveskite į ekraną.
$a = 1;
$b = 'b';
$c = '';

var_dump($a, $b, $c);

// Parašykite skriptą, kuris išspausdintų paskutiniąsias 3 stringo raides.
$d = 'lorem 123';

$s = str_split($d);

var_dump($s);

$s = array_slice($s, -3);

var_dump($s);

$s = implode('', $s);

var_dump($s);

var_dump(implode('', array_slice(str_split($d), -3)));