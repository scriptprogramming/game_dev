<?php

require './lib/Student.class.php';

$sort = function($a, $b) {
    return $a->getNote() - $b->getNote();
};

function createStudentFactory($note) {
    return function ($name) use ($note) {
        return new Student($name, $note);
    };
}

$studenten = array(new Student("Jonas", 2), new Student("Jan", 2), new Student("Max", 2));

Student::printStudenten($studenten);
usort($studenten, $sort);
Student::printStudenten($studenten);

// Erzeugt eine neue Studenten-Factory
$studentFactory = createStudentFactory(2);

// Alle Studenten, die mit $studentFactory erzeugt
// werden, erhalten standardmäßig die Note 5
// Erzeugt einen Benutzer mit dem Namen 'Max' und der Note 5

$studentSarah = $studentFactory('Sarah');
$studentCaro = $studentFactory('Caro');
$studentBella = $studentFactory('Bella');
$studentChristian = $studentFactory('Christian');

$neuestudenten = array($studentSarah, $studentBella, $studentCaro, $studentChristian);
Student::printStudenten($neuestudenten);