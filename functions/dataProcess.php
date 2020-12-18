<?php
include_once ("scrambler.php");

if(isset($_POST['resultButtonClicked'])){
    $defMode = $_POST['task'] ?? '';
} else{
    $defMode = $_POST['task'] ?? 'keyG';
}
$defKey = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$newRandomKey = '';

if($defMode == 'keyG'){
    $newRandomKey = generateKey($defKey);

    echo $newRandomKey;
    die();
} elseif($defMode == 'encode'){
    if(isset($_POST)){
        $data = $_POST;
        $result = encodeData($data, $defKey);
        $newRandomKey = $result["currentKey"];
        $userInputData = $result["userInputData"];
        $resultData = $result["resultData"];

        echo $resultData;
        die();
    }
} elseif($defMode == 'decode'){
    if(isset($_POST)){
        $data = $_POST;
        $result = decodeData($data, $defKey);
        $newRandomKey = $result["currentKey"];
        $userInputData = $result["userInputData"];
        $resultData = $result["resultData"];

        echo $resultData;
        die();
    }
}