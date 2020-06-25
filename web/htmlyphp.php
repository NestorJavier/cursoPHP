<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="post">
        <table>
            <?php
            $array = array('name' => 'Nombre', 'lastname' => 'Apellido', 'address' => 'Dirección', 'phone' => 'Telefono');
            foreach ($array as $key => $value) :
            ?>
                <tr>
                    <td><?php echo $value ?></td>
                    <td><input type="text" name=<?php echo $key ?>></td>
                </tr>

            <?php
            endforeach;
            ?>

            <tr>
                <td>Sexo</td>
                <td>
                    <input type="radio" name="sex" value="Mujer">Mujer
                    <input type="radio" name="sex" value="Hombre">Hombre
                </td>
            </tr>
            <tr>
                <td><input name="submit" type="submit" value="Guardar"></td>
            </tr>
        </table>
    </form>
    <h1>
        <?php
            echo "!! {$_GET['answer']} gracias {$_GET['name']}";
        ?>
    </h1>
</body>

</html>