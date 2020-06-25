<?php
declare(strict_types=1);//
function edad(int $age):string{//:string es para forzar que el valor devuelto sea una cadena
    
    return 'Tu edad es '. $age . "<br>";
}

echo edad(18);
?>