<?php

function displayKey($key){
    printf("%s",$key);
}
function scrambleData($originalData,$key){
    $originalKey='abcdefghijklmnopqrstuvwxyz1234567890';
    $length=strlen($originalData);
    $data='';
    for($i=0;$i<$length;$i++){
        $currentChar=$originalData[$i];
        $charPositon=strpos($originalKey,$currentChar);
        if($charPositon !==false){
            $data .=$key[$i];
        }
        else{
            $data .=$currentChar;
        }
    }
    return $data;
}