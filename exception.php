<?php 
/*
    function divide($num1,$num2){
        if($num2==0){
            throw new Exception('Cannot devide by zero');
        }else{
            return $num1/$num2;
        }
    }

    echo divide(10,5);
*/
    $age = 20;

    try{
        if($age>21){
            echo 'old enough.';
        }else{
            throw new Exception('Not enough age');
        }

    }catch(Exception $ex){
        echo 'Error: '.$ex->getMessage();
    }
?>