<?php

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $databasePath);

echo 'Conectei' . PHP_EOL;

// $pdo->exec("INSERT INTO phones (area_code, number, student_id) VALUES ('24', '999999999', 1), ('21', '222222222', 1);");
// exit();

$createTable = '
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY,
        name TEXT,
        birth_date TEXT
    );

    CREATE TABLE IF NOT EXISTS phones (
        id INTEGER PRIMARY KEY,
        area_code TEXT,
        number TEXT,
        student_id INTEGER,
        FOREIGN KEY (student_id) REFERENCES students(id)
    );
';

$pdo->exec($createTable);
