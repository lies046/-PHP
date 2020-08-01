<?php
$i = 1;
while ($i < 6) {
  print "{$i}番目のループです。<br />";
  $i++;
}

for ($i = 1; $i < 6; $i++) {
  print "{$i}番目のループです。<br />";
}

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
  $sum += $i;
  if ($sum > 1000) {
    break;
  }
}
print "合計が1000を超えるのは、1~{$i}を加算した時です。";

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
  if ($i % 2 !== 0) {
    continue;
  }
  $sum += $i;
}

print $sum;

?>
<table border="1">
  <?php
  for ($i = 1; $i < 10; $i++) {
    print '<tr>';
    for ($j = 1; $j < 10; $j++) {
      print '<td>' . $i * $j . '</td>';
    }
    print "</tr>";
  }
  ?>
</table>