<?php
/**Redireccionamiento
 * header('Location:test.php');
 */

 //Autenticación
 /**
  * Basada en formularios y Autenticación http
  */
  $loginSuccessful=false;
  //Verificamos que el usuario y contraseña no esten vacios
  if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])){
    $userName = $_SERVER['PHP_AUTH_USER'];
    $userPwd = $_SERVER['PHP_AUTH_PW'];

    if($userName == 'Mendez' && $userPwd=='123'){
        $loginSuccessful=true;
    }
  }
  //http esto hara que se muestre un formulario de autenticación
  //en cuanto cargue la pagina
  if(!$loginSuccessful){
      header('WWW-Authenticate:Basic');
      header('HTTP/1.0 401 Unauthorized');

      echo "Error";
  }else{
      echo 'Bienvenido';
  }

?>