<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
  echo "ID: $student->id\nNome: $student->name\n\n";
}

/** @var Student $student */
$student = $studentRepository->find(2);
echo $student->name;

$student2 = $studentRepository->findBy(["name"=> "Jeca 5"]);
var_dump($student2);

$student3 = $studentRepository->findOneBy(["name"=> "Jeca 5"]);
var_dump($student3);

echo $studentRepository->count([]) . PHP_EOL;