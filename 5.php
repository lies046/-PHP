<?php
// mb_internal_encoding('UTF-8');
// $str = 'WINGSプロジェクト';

// print mb_substr($str, 5);

// $str = '彼の電話番号は0399-88-9785,私のは0398-99-1234です。郵便番号はどちらも687-1109です';
// if (preg_match_all('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data, PREG_SET_ORDER)) {
//   foreach ($data as $item) {
//     print "電話番号:{$item[0]}<br />";
//     print "市外局番:{$item[1]}<br />";
//     print "市内局番:{$item[2]}<br />";
//     print "加入者番号:{$item[3]}<hr />";
//   }
// }

// $str = '彼の電話番号は0399-88-9785,私のは0398-99-1234です。郵便番号はどちらも687-1109です';
// if (preg_match('/([0-9]{2,4})-([0-9]{2,4})-([0-9]{4})/', $str, $data, PREG_OFFSET_CAPTURE)) {
//   print_r($data);
// }

// $msg = <<<EOD
// サンプルは、「サーバーサイドの技術の学び舎(http://www.wings.msn.to/)」から入手できます。執筆のノウハウ集
// 「(http://www31.atwiki.jp/)」もどうぞ。
// EOD;

// print preg_replace('|http(s)?://([w-]+\.)+[\w-]+(/w- ./?%&=]*?)|', '<a href="$0">$0</a>', $msg);

// function factorial(int $num): int
// {
//   if ($num !== 0) {
//     return $num * factorial($num - 1);
//   }
//   return 1;
// }

// print factorial(5);

// function my_array_walk(array $array, callable $func)
// {
//   foreach ($array as $key => $value) {
//     $func($value, $key);
//   }
// }

// $data = [100, 50, 10, 5];
// $result = 0;
// my_array_walk($data, function (float $value, int $key) use (&$result) {
//   $result += $value;
// });

// print "合計値:{$result}";

// function getPrimes()
// {
//   $num = 2;
//   while (true) {
//     if (isPrime($num)) {
//       yield $num;
//     }
//     $num++;
//   }
// }

// function isPrime(int $value): bool
// {
//   $prime = true;
//   for ($i = 2; $i <= floor(sqrt($value)); $i++) {
//     if ($value % $i === 0) {
//       $prime = false;
//       break;
//     }
//   }
//   return $prime;
// }

// foreach (getPrimes() as $prime) {
//   if ($prime > 100) {
//     die();
//   }
//   print $prime . ',';
// }

$now = new DateTime();
print $now->format('Y年m月d日 H:i;s');
