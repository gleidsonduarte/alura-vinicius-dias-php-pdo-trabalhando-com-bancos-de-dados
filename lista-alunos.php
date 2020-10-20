<?php

use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

var_dump($studentRepository->allStudents());
