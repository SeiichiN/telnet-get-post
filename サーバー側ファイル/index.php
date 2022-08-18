<?php
$host = "mysql-server";
$user = "root";
$pass = "root";
$db = "mysql";
try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// 修正時刻: Thu 2022/08/11 09:48:43
