<?php
session_start();
//Elimina todas las sesiones
session_destroy();
//Si requerimios eliminar una sesión en especifico lo hacemos 
//asi
unset($_SESSION['login']);
if(session_status()==PHP_SESSION_DISABLED){//PHP_SESSION_NONE, PHP_SESSION_ACTIVE

}
if(isset($_SESSION['login'])){
    //Es posible modificar la sesión desde cualquier archivo
    $_SESSION['login']='Cliente';
    echo 'Bienvenido '.$_SESSION['login'];
}else{
    echo 'Sin sesion';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login_session.php" method="post">
        Usuario: <input type="text" name="userName"><br>
        Contraseña: <input type="password" name="password">
        <input type="submit" value="Enviar" name="send">
    </form>
</body>
</html>