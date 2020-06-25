<?php
/*
$name =$_POST['name'];
$lastname =$_POST['lastname'];
$phone =$_POST['phone'];
$address =$_POST['address'];
$sex =$_POST['sex'];
REQUEST nos permite obtener el valor de las variables
sin importar si fueron enviados mendiate POST o GET
*/
//Esta es una forma de saber el metodo que se uso para enviar los datos al servidor
if($_SERVER['REQUEST_METHOD']=='POST'){
$name =$_REQUEST['name'];
$lastname =$_REQUEST['lastname'];
$phone =$_REQUEST['phone'];
$address =$_REQUEST['address'];
$sex =$_REQUEST['sex'];
echo "Nombre: $name, Apellido: $lastname, Telefono: $phone, Dirección: $address, Sexo: $sex";
//Respuesta del servidor al cliente mediante la URL
header("location: htmlyphp.php?answer=datos recibidos&name={$name}");
}


?>