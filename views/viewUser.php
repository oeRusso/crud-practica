<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>

<body>
    <h1>Lista de usuarios</h1>

    <table>
        <thead>
            <td>Id</td>
            <td>Nombre</td>
            <td>Email </td>
        </thead>
        <tbody>
            <?php
            include_once 'controllers/usuarioController.php';
            foreach ($usuarios as $user) {
            ?>
                <tr>
                    <td><?php echo $user['id']; ?> </td>
                    <td><?php echo  $user['email']; ?></td>
                    <td><?php echo  $user['nombre']; ?></td>

                    <!-- <td><a href="<?php echo constant('URL') . 'consulta/verLibro/' . $libros->matricula ?>">Editar</a></td> -->
                    <!-- <td><a href="<?php echo constant('URL') . 'consulta/eliminarLibro/' . $libros->matricula ?>">Eliminar</a></td> -->
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>



</body>

</html>