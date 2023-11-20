<?php
    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])){
        $num1 = intval($_POST['num1']);
        $num2 = intval($_POST['num2']);
        $op = $_POST['operation'];

        function add($num1,$num2){
            return $num1 + $num2;
        }

        function sub($num1,$num2){
            return abs($num1 - $num2);
        }

        function mul($num1 , $num2){
            return $num1 * $num2;
        }

        function div($num1 , $num2){
            return $num1/$num2;
        }


        if($op === "add"){
            echo "'$num1' + '$num2' = ".add($num1,$num2);
        }
        else if($op === "sub"){
            echo "'$num1' - '$num2' = ".sub($num1,$num2);
        }
        else if($op === "mul"){
            echo "'$num1' * '$num2' = ".mul($num1,$num2);
        }
        else if($op === "div"){
            echo "'$num1' / '$num2' = ".div($num1,$num2);
        }
        else{
            echo "select correct choice";
        }
    }
?>