<?php
$dsn = "mysql:host=localhost;dbname=nitipin;charset=UTF8";

try {
    // gunakan user:password selain root
    $pdo = new PDO($dsn, "nitipin", "kel9");
} catch (PDOException $e) {
    echo $e->getMessage();
}
