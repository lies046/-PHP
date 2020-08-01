<?php
$x = 10;
if ($x === 10) {
  print '変数$xは10です。';
} else {
  print '変数$xは10ではありません。';
}

$y = 35;
if ($y > 20) {
  print '変数は20より大きいです。';
} elseif ($y > 10) {
  print '変数は10より大きく、20以下です';
} else {
  print '変数は10以下です';
}

$rank = '甲';
switch ($rank) {
  case '甲':
    print '大変良いです。';
    break;
  case '乙':
    print '良いです。';
    break;
  case '丙':
    print 'もう少し頑張りましょう';
    break;
  default:
    print '???';
    break;
}

$x = 50;

if ($x >= 90) {
  print '優';
} elseif ($x >= 70) {
  print '良';
} elseif ($x >= 50) {
  print '可';
} else {
  print '不可';
}
