<?php
//Importar archivos
//require('ruta.php');
//include('ruta.php');
//require_once('ruta.php');
//include_once('ruta.php');

class Person{
    public $name;
    public $lastname;
    public $sex;
    public $nationality;
    public $age;
    //variable de clase
    static $solor = 'Rojo';

    
    function see(){
        echo 'Yo veo una camisa ' . selft::$color;
        $this->name;
        $this->run();
    }
    
    function run(){

    }
    function talk(){
        $this->see();

    }
    
}

$jose = new Person()
$jose->name = 'Jose';
//Variable de clase
Person::$color = 'Azul';
?>