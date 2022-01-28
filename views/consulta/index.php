<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require 'views/header.php';
    ?>

    <div class="main">
        <h1 class="center">Consultas para la web</h1>
    
        <table width="100%" style="text-align: center;">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>

               
            </thead>
            <tbody>

            <?php
            include_once 'models/alumno.php';
                foreach($this->alumnos as $row):
                    $alumno = new Alumno();
                    $alumno = $row;
            ?>
                <tr>
                    <td><?=$alumno->matricula ?></td>
                    <td><?=$alumno->nombre?></td>
                    <td><?=$alumno->apellido?></td>

                    <td><a href="<?php echo URL."/consulta/verAlumno/".$alumno->matricula; ?>">Actualizar</a></td>
                    <td><a href="<?php echo URL."/consulta/eliminarAlumno/".$alumno->matricula; ?>">Eliminar</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        

    </div>


    <?php 
    require 'views/footer.php';
    ?>
</body>
</html>