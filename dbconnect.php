<?php
$development = ['localhost', '127.0.0.1'];

$request_domain = $_SERVER['SERVER_NAME'];

function establishConnection($host, $user, $password, $database) {
    try {
        $pdo = new PDO("mysql:host=$host;port=3308;dbname=$database", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $exception) {
        die("Connection Failed: " . $exception->getMessage());
    }
}

if (in_array($request_domain, $development)) {
    $pdo = establishConnection("127.0.0.1", "root", "Admin123###", "adhiti_db");
} else {
    die("Unauthorized Access");
}

