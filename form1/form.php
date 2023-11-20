<?php

if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])){
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $op = $_POST['operation'];

    function findModulo($num1,$num2){
        return $num1 % $num2;
    }

    function power($num1,$num2){
        return pow($num1,$num2);
    }

    function sumOfN($num1){
        $sum = 0;

        for($i = 1 ; $i <= $num1 ; $i++){
            $sum = $sum + $i;
        }

        return $sum;
    }

    function factorial($num1){
        if($num1 === 0){
            return 1;
        }
        
        return $num1 *  factorial($num1 - 1);
    }

    if($op === "mod"){
        echo "'$num1' modulo '$num2' ".findModulo($num1,$num2);
    }
    else if($op === "pow"){
        echo "'$num1' rasie to '$num2' is ".pow($num1,$num2);
    }
    else if($op === "sumN"){
        echo "Sum till '$num1' is ".sumOfN($num1);
    }
    else if($op === "fact"){
        echo "factorial of '$num1' is ".factorial($num1);
    }
    else{
        echo "Please enter proper details";
    }
}
?>