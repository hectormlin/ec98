<?php
if(!empty($_POST["registro"])){
    if(empty($_POST["nombre"]) or empty($_POST["tipo"] or
     empty($_POST["usuario"])) or empty($_POST["clave"])){
       
       echo '<div class="alert">uno de los campos esta vacios</div>';

       }else{
         $nombre=$_POST["nombre"];
         $tipo=$_POST["tipo"];
         $usuario=$_POST["usuario"];
         $clave=$_POST["clave"];
         $query="SELECT * FROM usuario where usuario='$usuario'";
         $result=$conexion->query($query);
         if($result->num_rows == 0){
         $sql=$conexion->query(" insert into usuario(nombre,tipo,usuario,clave)values
         ('$nombre','$tipo','$usuario','$clave')");
         if($sql==1){
            echo 'registrado';

         }else{
            echo'error';
         }
        }
        else{
         echo'usuario ya registrado';
}
      }

}

?>