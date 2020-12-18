<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";


function randomNameGenerator():string {
    return $name = md5(rand());
}

$allowedFileTypes = array(
    'image/png',
    'image/jpg',
    'image/jpeg',
    'image/gif'
);

$totalFiles = count($_FILES['files']['name']);
$index = 0;

while($index < $totalFiles){
    if(in_array($_FILES['files']['type'][$index], $allowedFileTypes)){
        $splittedFileName = explode('.', $_FILES['files']['name'][$index]);
        $ext = $splittedFileName[1];
        $randName = randomNameGenerator();

        move_uploaded_file($_FILES['files']['tmp_name'][$index], "files/".$randName.'.'.$ext);
        // header("Location: ./");
    }
    $index++;
}
header("Location: ./");