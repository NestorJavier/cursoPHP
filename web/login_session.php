<?php
$user='Mendez';
$pass='123';

session_start();
print_r($_POST);
if($_POST['userName']==$user && $_POST['password'] == $pass){
    $_SESSION['login']='Administrador';
    header('Location: cookiesSesiones.php');
}else{
    echo 'Usuario y/o contraseña no coinciden';
}
?>