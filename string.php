<?php
$title = 'サーバーサイド技術の学び舎 - WING';
//ダブルクウォート出ないと変数を展開できない。
$data1 = "サポートサイト\t「{$title}」へ<br />";
$data2 = 'サポートサイト\t「{$title}」へ<br />';

print $data1;
print $data2;
