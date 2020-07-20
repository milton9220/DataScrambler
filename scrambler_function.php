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

function decodeData($originalData, $key){
	$originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
	$data = '';
	$length = strlen($originalData);
	for($i=0;$i<$length;$i++){
		$currentChar = $originalData[$i];
		$position = strpos($key,$currentChar);
		if($position !== false){
			$data .= $originalKey[$position];
		}else{
			$data .= $currentChar;
		}
	}
	return $data;
}