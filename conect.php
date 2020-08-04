<?php
function getDb()
{
  $dns = 'mysql:dbname=D; host=127.0.0.1; charset=utf8';
  $usr = 'root';
  $passwd = '';

  try {
    $db = new PDO($dns, $usr, $passwd);
    print '接続に成功しました。';
    return $db;
  } catch (PDOException $e) {
    print "接続エラー:{$e->getMessage()}";
  } finally {
    $db = null;
  }
}
