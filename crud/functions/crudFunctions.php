<?php
define("DB_NAME", "/Users/coderex/Desktop/Backend_Development_Training_MONIR/crud/db/seedData.txt");
function seed(){
    $data = array(
        array(
            'id' => 1,
            'firstName' => 'Fazle',
            'lastName' => 'Rabbi',
            'roll' => 5
        ),
        array(
            'id' => 2,
            'firstName' => 'Samlan',
            'lastName' => 'Rahman',
            'roll' => 6
        ),
        array(
            'id' => 3,
            'firstName' => 'Rushnan',
            'lastName' => 'Nitol',
            'roll' => 7
        ),
        array(
            'id' => 4,
            'firstName' => 'Nahin',
            'lastName' => 'Hasan',
            'roll' => 8
        ),
        array(
            'id' => 5,
            'firstName' => 'Abdullah',
            'lastName' => 'Aman',
            'roll' => 9
        ),
        array(
            'id' => 6,
            'firstName' => 'Arfaqur',
            'lastName' => 'Rahman',
            'roll' => 10
        )
    );
    $serializedData = serialize($data);
    file_put_contents(DB_NAME, $serializedData, LOCK_EX);
}

function view(){
    $data = file_get_contents(DB_NAME);
    $students = unserialize($data);
    return $students;
}