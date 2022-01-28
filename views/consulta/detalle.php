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
        <h1 class="center">Detalle del Alumno </h1>
    
        <div class="center">
    <?php 
    echo $this->mensaje;
    ?>
        </div>

        <form method="POST" action="<?php 
        echo URL;
        ?>consulta/actualizarAlumno">

            <p>
                <label for="matricula">Matrícula</label><br>
                <input type="text" name="matricula" value="<?php echo $this->alumno->matricula; ?>" disabled>
            </p>

            <p>
                <label for="nombre">Nombre</label><br>
                <input type="text" name="nombre" required value="<?php echo $this->alumno->nombre; ?>">
            </p>

            <p>
                <label for="apellido">Apellido</label><br>
                <input type="text" name="apellido" required value="<?php echo $this->alumno->apellido; ?>">
            </p>

            <p>
                <input type="submit" value="Actualizar alumno">
            </p>

        </form>
    </div>


    <?php 
    require 'views/footer.php';
    ?>
</body>
</html>