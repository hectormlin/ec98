<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar usuarios</title>
    <link href="../CSS/estilo_r.css" rel="stylesheet">
</head>
<body>

    <div class="contenedor">

      <form action="" method="POST" class="forms">
       <h1 class="titulo">Registro</h2>
       <?php
       include("../BD/Conexion.php");
       include("../Controlador/Controlador_Registro.php");
       ?>
       <div class="p">

        <div class="nombre">
         <label for="">Nombre</label>
         <input type="text" name="nombre">
        </div>
        
        <div class="tipo">
         <label for="">Alumno/Profesor</label>
         <select name="tipo" id="tipos">
          <option>Alumno</option>
          <option>Profesor</option>
         </select>

        </div>
         
        <div class="usuario">
         <label for="">Usuario</label>
         <input type="text" name="usuario">
        </div>

        <div class="contraseña">
         <label for="">Contraseña</label>
         <input type="password" name="clave">
        </div>

       </div>
         <div class="registrar">
          <input class="boton" type="submit" value="Registrar" name="registro">
        </div>
    </form>
    </div>

</body>
</html>