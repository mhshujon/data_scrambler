<?php
function seed($fileName){
    $data = array(
        array(
            'id' => 1,
            'firstName' => 'Fazle',
            'lastName' => 'Rabbi',
            'Roll' => 5
        ),
        array(
            'id' => 2,
            'firstName' => 'Samlan',
            'lastName' => 'Rahman',
            'Roll' => 6
        ),
        array(
            'id' => 3,
            'firstName' => 'Rushnan',
            'lastName' => 'Nitol',
            'Roll' => 7
        ),
        array(
            'id' => 4,
            'firstName' => 'Nahin',
            'lastName' => 'Hasan',
            'Roll' => 8
        ),
        array(
            'id' => 5,
            'firstName' => 'Abdullah',
            'lastName' => 'Aman',
            'Roll' => 9
        ),
        array(
            'id' => 6,
            'firstName' => 'Arfaqur',
            'lastName' => 'Rahman',
            'Roll' => 10
        )
    );
    $serializedData = serialize($data);
    file_put_contents($fileName, $serializedData, LOCK_EX);
}