<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Secion</title>
    <link href="../CSS/estilos_i.css" rel="stylesheet">
</head>
<body>

    <div class="contenedor">

      <form action="../Controlador/Control_Inicio.php" method="POST" class="forms">
       <h1 class="titulo">Iniciar sesion</h2>
      
       <?php
       if(isset($_GET['error'])){
        ?>
        <p class="error">
        <?php
        echo $_GET['error']
        ?> 
        </p>
        <?php
       }
       ?>
    
       <div class="pp">
         
        <div class="usuario">
         <label for="">Usuario</label>
         <input type="text" name="usuario">
        </div>

        <div class="contraseña">
         <label for="">Contraseña</label>
         <input type="password" name="clave">
        </div>

       </div>
         <div class="iniciar">
          <input class="boton" type="submit" value="iniciar" name="iniciar">
        <button><a href="Registrar.php">Registrar</a></button>
        </div>
     </form>
    </div>

</body>
</html>