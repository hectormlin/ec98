<?php
   include("../BD/Conexion.php");
  session_start();

   if(isset($_POST['usuario']) && isset($_POST['clave'])){
     
    function clean($data){
        $data= trim($data);
        $data= stripcslashes($data);
        $data= htmlspecialchars($data);
        return $data;
    }
    $usuario=clean($_POST['usuario']);
    $clave=clean($_POST['clave']);
    if(empty($usuario) or empty($clave)){
      header("Location: ../Inicio_Sesion/Iniciar.php?error=rellena todos los campos");
      exit();
    }else{
      $query = "SELECT * FROM usuario WHERE usuario='$usuario' AND clave='$clave'";
      $result = mysqli_query($conexion,$query);
      if(mysqli_num_rows($result)===1){
        $row=mysqli_fetch_assoc($result);
        if($row['usuario']===$usuario && $row['clave']===$clave ){
          $query="UPDATE usuario SET status='1' WHERE usuario='$usuario'";
          $result=mysqli_query($conexion,$query);
            $_SESSION['usuario']=$row['usuario'];
            $_SESSION['status']=$row['status'];
            $_SESSION['id']=$row['id'];
            header("Location: ../index.php");
            exit();
        }
        else{
            header("Location: ../Inicio_Sesion/Iniciar.php?error= intente de nuevo");
            exit();            
        }
      } else{
            header("Location: ../Inicio_Sesion/Iniciar.php?error= intente de nuevo");
            exit();            
        }
    }
   } else{
            header("Location: ../Inicio_Sesion/Iniciar.php");
            exit();            
        }
?>