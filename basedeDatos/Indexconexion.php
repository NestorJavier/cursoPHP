<?php
// require_once 'model/animal.php';
// $animal = new Animal();
// print_r($animal->getAll());

// $animal->id=1;
// $animal->name='ozzy';
// $animal->specie='Gato';
// $animal->breed='akita';
// $animal->gender='Macho';
// $animal->age='12';
// $animal->color='Dorado';

//$animal->create();
//$animal->update(2);

if(!isset($_REQUEST['controller'])){
    require_once 'controller/animal_controller.php';
    $controller = new AnimalController();
    $controller->indexAnimal();
}else{
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
    require_once 'controller/'.$controller.'_controller.php';
    $controller = ucwords($controller).'Controller';
    $controller = new $controller;
    call_user_func(array($controller,$action));
}
?>