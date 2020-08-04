<?php
require_once 'conect.php';
$db = getDb();
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
$db->exec('MECHA KUCHA');
if ($db->errorCode() !== '000000') {
  $info = $db->errorInfo();
  print "エラーコード：{$info[0]}<br>";
  print "エラーコード：{$info[1]}<br>";
  print "エラーメッセージ：{$info[2]}";
}
