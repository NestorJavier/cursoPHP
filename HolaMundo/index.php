<?php
echo "Hola ", "Mundo <br/>";//echo puede imprimir varias cadenas al mismo tiempo
print "Hola Mundo <br/>";//print solo puede imprimir 1

//niveles de error
//Parse error, error de sintaxis
//fatal error, valor o funcion indefinida
//warning, no interrumpe la ejecución

//trigger_error("Error al escribir ", E_USER_ERROR);

//Variables y constantes
// $number = 13;
// $cadena = "13";
// $band = bool;
const PATH1 = 'cusrsoPHP/index.php';//Const se define en tiempo de compilación
define('PATH2','cusrsoPHP/index.php');//define se define en tiempo de ejecución
echo PATH1, '<br/>', PATH2, '<br/>  ';

//print_r(get_defined_constants(true))//Imprimir arreglos

//Comillas dobles y simples
$animal = "panda";
//Se puede interpolar y usar la diagonal invertida para los signos de escape
echo " \"Hola $animal\" \n adios";
//no es posible interpolar e imprime directamente el slto de linea sin usar \n
echo 'Hola 
$animal';

//EREDOC, NOWDOC
//FRASE es el identificador
echo <<<FRASE
lorem 'ipsum lorem' \n"ipsum lorem" $animal
FRASE;

$varEredoc = <<<FRASE
lorem 'ipsum lorem3333' \n"ipsum lorem555" $animal
FRASE;

echo $varEredoc;

//nowdoc
echo <<<'FRASE'
lorem 'ipsum lorem3333' \n"ipsum lorem555" $animal <br>
FRASE;

//Consversión de  tipos
$var = 'Hola';
echo gettype($var);

//Forzando tipado
$price = 2029.50;
$price=(int)$price;
var_dump($price);

//Forzado con funciones
$price = intval($price);
$price = boolval($price);
//floatval()
//strval()

//Concatenación
$word1 = "Hola";
$word2 = "mundo";

echo 'imprime ' . $word1 . ' ' . $word2;
echo "imprime $word1 {$word2}sssss";


//substring
substr("Holassss olas ooolas", 8);
$varibl = 'Bienvenido al mundo de la programación';
$palabraBuscar = 'programación';
$indice =  strpos($varibl, $palabraBuscar);//Regresa el indice donde comienza la palabra que se le indico que buscara
echo $indice;

$search = ' ';
$repalce = ':';
$text = '91 75 1a ec 9a c7';
str_replace($search, $repalce, $text, $count);
//Imprime el numer de coincidencias
echo $count;

$arg1 = 1994;
$arg2 = 'PHP';
$text = 'En %d fue creado %s';
sprintf($text, $arg1, $arg2);

//PCRE
//DElimitadores / # ~
$texto = 'hola mundo en 123';
$regex = '/hola/';
echo preg_match($regex, $text);//imprime 1 si encunetra coincidencia y 0 si no
//metacaracteres
$regex = '/^hola/';//bucara hola cuando se encuentre al inicio de la cadena
echo preg_match($regex, $text);
$texto = ' mundo en 123 hola';
echo preg_match($regex, $text);//En este caso el resultado es 0
// para buscar al final 
$regex = '/hola$/';
echo preg_match($regex, $text);//En este caso el resultado es 1
//es sesible a mayusculas y minusculas, pero si se quisiera es
//es posible cambiar esto con (MODIFICADORES)
$texto = 'Hola mundo en 123';
$regex = '/^hola/i';
echo preg_match($regex, $text);//En este caso el resultado es 1

//Agrupadores
$texto = 'Hxla mundo en 123';
$regex = '/^H[oksxj]la/';
echo preg_match($regex, $text);//En este caso el resultado es 1
//ya que la x se encuantra en conjunto definido por el agrupador
//[]

//los parentesis () permiten cerar sub patrones dentro del patron principal
$texto = 'Yo vivo en México';
$regex = '/Mé(x|j)ico/';
echo preg_match_all($regex, $text);
//ya se que se escriba México ó Mejico ambas 

$texto = 'Los números son 1 4 5 6';
$regex = '/[0-9]/';//buscara los numero dentro de la cadena que esten en este rango
$regex = '/\d/';//es lo mismo que la expresión anterior solo que abreviada
//Existen mas de estas expresiones con secuencias de escape
echo preg_match_all($regex, $text, $matches);

print_r($matches);//Imprime el mnumero de coincidencias

?>