<?php
//Pasar por referencia
function plus(&$param1, $param2){
    $param1 =  ($param1+$param2);
    echo 'El resultado de la división es '. $param1 . "<br>";
}

$arg1 = 20;
$arg2 = 5;
plus($arg1, $arg2);
echo "resultado  $arg1 <br>";

//Recursividad
function call($value){
    if($value <= 10){
        echo " $value <br>";
        call(++$value);
    }
}
call(1);

//Recivir multiples valores de una función

function operation($num1,$num2){
    return array($num1+$num2,$num1-$num2,$num1/$num2);
}

list($plus,$mins,$divided) = operation(15,5);

echo $plus, $mins, $divided, "<br>";

//Función anonima
$operation = function(){
    return "Función anonima <br>";
};

echo $operation();


//Funcion variable
function opertation2(){
    echo "función variable <br>";
}

$variable = 'opertation2';
$variable();



?>