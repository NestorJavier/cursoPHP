<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="Indexconexion.php?controller=animal&action=showById">Nuevo</a>
    <table>
        <tr>
            <?php
            require_once 'core/const.php';
            foreach (DATA_ANIMAL as $key => $value) :
            ?>
                <td><?php echo $value; ?></td>
            <?php
            endforeach;
            ?>
            <td>Genero</td>
        </tr>
        <?php
        foreach($this->model->getAll() as $animal):
        ?>
        <tr>
            <td><?php echo $animal->name ?></td>
            <td><?php echo $animal->specie ?></td>
            <td><?php echo $animal->breed ?></td>
            <td><?php echo $animal->color ?></td>
            <td><?php echo $animal->age ?></td>
            <td><?php echo $animal->gender ?></td>
            
            <td>
                <a href="Indexconexion.php?controller=animal&action=showById&id=<?php echo $animal->id;?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('Seguro que desea eliminar este registro?');" href="Indexconexion.php?controller=animal&action=quit&id=<?php echo $animal->id;?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>

</body>

</html>