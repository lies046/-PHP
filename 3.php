<?php
$x = 100;
$y = ++$x;
print "{$x}<br>";
print "{$y}<br>";

$i = 100;
$j = $i++;
print "{$i}<br>";
print $j;
"<br>"

$add = bcadd(0.1, 0.7, 1);
$mul = bcmul($add, 10, 1);
print floor($mul);

$assoc1 = [
  'Apple' => 'Red',
  'Orange' => 'Yellow',
  'Melon' => 'Green'
];

$assoc2 = [
  'Grape' => 'Purple',
  'Apple' => 'Green',
  'Strawberry' => 'Red'
];

$result = $assoc1 + $assoc2;
print_r($result);

$ary1 = [1, 3, 5];
$ary2 = [2, 3, 6];
$result = $ary1 + $ary2;
print_r($result);

$x = 1;
$y = &$x;
$x = 5;
print $y;

$x = 4;

$flag = $x == 1 ? 0 : -1;

print $flag;
