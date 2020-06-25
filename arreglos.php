<?php
$colores=array('Rojo', 'Morado', 'Verde');
print_r($colores);

echo $colores[0];

$colores[1]='Azul';
echo $colores[1];

echo "<br>  Asociativos";   

$person = array('name'=>'Marines', 'lastname'=>'Méndez', 'age'=>23);
print_r ($person);
echo $person['name'];
$person['lastname']='Gallesgos';
print_r ($person);
echo "<br>  multi dimencionales";
$battleShip = array(
    'A'=>array('mar','Barco','mar','mar'),
    'B'=>array('mar','mar','mar','mar'),
    'C'=>array('mar','mar','Barco','mar'),
    'D'=>array('mar','mar','mar','mar'),
);
print_r($battleShip);
$coordenadas=$battleShip['A'][0];

for ($i=0; $i < sizeof($colores); $i++) { 
    echo "Indice: $i Valor:{$colores[$i]} <br>";
}
foreach ($battleShip as $key => $value) {
    echo "<br>";
    for ($i=0; $i < sizeof($value); $i++) { 
        # code...
        echo "Coordenadas:  Fila $key Columna $i";
    }
    # code...
}
?>