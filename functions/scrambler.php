<?php
function generateKey($key):string {
    $keyArr = str_split($key);
    shuffle($keyArr);
    return implode('', $keyArr);
}
function encodeData($data, $defKey){
    $currentKey = $data['userInputKey'];
    $iData = $data['iData'];
    $currentKeyLength = strlen($iData);
    $index = 0;
    $result = '';

    while($index < $currentKeyLength){
        $currentChar = $iData[$index];
        $position = strpos($defKey, $currentChar);
        
        if($position !== false){
            $result .= $currentKey[$position];
        } else{
            $result .= $currentChar;
        }
        $index++;
    }
    
    $resultData = array(
        'currentKey' => $currentKey,
        'userInputData' => $iData,
        'resultData' => $result
    );
    return $resultData;
}

/**
 * desc
 * @param
 * @return
 * 
 * @simce 
 */
function decodeData($data, $defKey){
    $currentKey = $data['userInputKey'];
    $iData = $data['iData'];
    $currentKeyLength = strlen($iData);
    $index = 0;
    $result = '';

    while($index < $currentKeyLength){
        $currentChar = $iData[$index];
        $position = strpos($currentKey, $currentChar);
        
        if($position !== false){
            $result .= $defKey[$position];
        } else{
            $result .= $currentChar;
        }
        $index++;
    }
    
    $resultData = array(
        'currentKey' => $currentKey,
        'userInputData' => $iData,
        'resultData' => $result
    );
    return $resultData;
}