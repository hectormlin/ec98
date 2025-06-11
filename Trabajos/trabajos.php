<?php include "../Controlador/C_session_on.php";?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRABAJOS</title>
    <link href="../CSS/trabajos.css" rel="stylesheet">
</head>
<body>
       <header class="header">
   <nav class="nav_at">
    <div>
     <ul class="nav">
      <li><a href="../index.php">inicio </a> </li>
      
      <li><a href="trabajos.php"> Trabajos</a></li>

      <li><a href="../Descargas/descargar.php">Descargas</a></li>
     <li><a href="../Controlador/C_Session_close.php">Cerrar</a></li>
      <li class="cuenta"><a href="../Inicio_Sesion/Iniciar.php">Cuenta</a></li>
     </ul>
     
    </div>
    </nav>
</header>
<header class="vista_pdf" >
    <embed oncontextmenu="return false;"class="block_pdf" src="" type="application/pdf" 
    width=70% height=90% id="pdfs" overflow-x: auto; overflow-y: hidden; max-height: 130px; width: 530px; white-space: nowrap;/>

</header>
  <header class="works">
   <nav class="works_T">
    <div>
        <h1 class="te">Paginas web</h1>
 <ul class="navb">
    
  <li><a href="">Bloque 1</a>
   <ul>
    <li><button onclick="ejemplo(1)">Practica 1</button></li>
    <li><button onclick="ejemplo(2)">Practica 2</button></li>
    <li><button onclick="ejemplo(3)">Practica 3</button></li>
    <li><button onclick="ejemplo(4)">Practica 4</button></li>
    <li><button onclick="ejemplo(5)">Practica 5</button></li>
    <li><button onclick="ejemplo(6)">Practica 6</button></li>
    <li><button onclick="ejemplo(7)">Practica 7</button></li>
    <li><button onclick="ejemplo(8)">Practica 8</button></li>
    <li><button onclick="ejemplo(9)">Practica 9</button></li>
   </ul>
</li>

   <li><a href="">Bloque 2</a>
  <ul>
    <li><button onclick="ejemplo(10)">Practica 10</button></li>
    <li><button onclick="ejemplo(11)">Practica 11-12</button></li>
    <li><button onclick="ejemplo(13)">Practica 13</button></li>
  </ul>
</li>  
 </ul>
 
</div>
   </nav>
  </header>

  <script src="js/vista.js"></script>
</body>
</html>