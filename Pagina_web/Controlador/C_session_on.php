<?php
 session_start();
   if(isset($_SESSION['status'])){
   }else{
    Header("Location:../Inicio_Sesion/Iniciar.php"); 
  }
?>