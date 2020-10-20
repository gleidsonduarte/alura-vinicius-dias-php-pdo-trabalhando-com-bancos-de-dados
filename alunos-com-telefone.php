<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

/** @var Student[] $studentList */
$studentList = $studentRepository->studentsWithPhones();

echo $studentList[1]->phones()[0]->formattedPhone();
var_dump($studentList);
