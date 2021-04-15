<?php

echo("hello world 1\n");
echo "\t\t\thello\tworld 2\n";
// echo 'hello world 3\n';
echo "hello world 4\n";
echo "<strong>hello world 5</strong><br>";
echo "<strong style=\"color:red\">hello world 6</strong><br>";

print "<strong style=\"color:green\">hello world 7</strong><br>";

var_dump("hello world 4\n");
var_dump([]);
var_dump([1,2,3]);

$arr = [1,2,3]; // let arr = [];

var_dump($arr);
print_r($arr);

echo "\n";

echo (1 + 2) . "\n" . (4 + 5) . "\n";
echo 'test';

var_dump(+4.4);

$a = 10;
$b = 7;
$c = 10 % 7;

var_dump($c);

echo $c . "\n";
echo($c . "\n");

function sum($a, $b)
{
	return $a + $b;
}

echo sum(1,5) . "\n";
echo sum(6.9, 9.8) . "\n";