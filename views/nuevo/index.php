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
        <h1 class="center">Ingresar un nuevo dato</h1>
    
        <div class="center">
    <?php 
    echo $this->mensaje;
    ?>
        </div>
        <form method="POST" action="<?php 
        echo URL;
        ?>nuevo/registrarAlumno">

            <p>
                <label for="matricula">Matrícula</label><br>
                <input type="text" name="matricula" required>
            </p>

            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" required>
            </p>

            <p>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" required>
            </p>

            <p>
                <input type="submit" value="REgistrar alumno">
            </p>

        </form>
    </div>


    <?php 
    require 'views/footer.php';
    ?>
</body>
</html>