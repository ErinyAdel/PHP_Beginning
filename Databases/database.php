<?php

try {
    //$pdo = new PDO($dsn, $username, $password);
    $pdo = new PDO("sqlite:contacts.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $command = "CREATE TABLE IF NOT EXISTS contacts (
        Id INTEGER PRIMARY KEY,
        Name TEXT NOT NULL,
        Email TEXT NOT NULL,
        Phone TEXT,
        Image TEXT
    );";
    $pdo->exec($command);

    return $pdo;
}
catch(PDOException $e) {
    return null;
}