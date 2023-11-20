<?php
$str = $_POST['str'];
$ch = $_POST['op'];

function firstWords($str){
    echo implode(' ',array_slice(explode(" ",$str),0,5));
}

function caseChange($str){
    $str1 = strtolower($str);
    echo $str1;
    $str2 = ucwords($str);
    echo $str2;
}

function pad($str){
    $str1 = str_pad($str,20,"*",STR_PAD_BOTH);
    echo $str1;
}

function removeSpace($str){
    $str1 = str_replace(" ","",$str);
    echo $str1;
}

function reversestr($str){
    $str1 = strrev($str);
    echo $str1;
}


if($ch == 1){
    firstWords($str);
}
else if($ch == 2){
    caseChange($str);
}
else if($ch == 3){
    pad($str);
}
else if($ch == 4){
    removeSpace($str);
}
else if($ch == 5){
    reversestr($str);
}
?>