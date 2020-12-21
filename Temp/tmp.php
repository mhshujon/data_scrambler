<?php
// $string = "Quick brown fox jumps over the lazy dog.";

// $string = str_replace(array('brown', 'lazy', 'fox'), array('hello', 'hi', 'bye'), $string);

// echo $string;

$file = 'resources/files/temp.txt';

if(is_readable($file)){
    // $fp = fopen($file, 'r');

// while($line = fgets($fp)){
//     echo $line;
// }
// echo PHP_EOL, PHP_EOL;
// rewind($fp);
// // fseek($fp, -7, SEEK_END);
// while($line = fgets($fp)){
//     echo $line;
// }
// fclose($fp);

$data = file($file);
print_r($data);
echo PHP_EOL;

$data = file_get_contents($file);
print_r($data);
} else echo 'The file is not readable!';