function ejemplo(id){
    const pdf=document.getElementById("pdfs")
     switch (id) {
     
     case 1: pdf.src="Bloque_1/Informes/Informe-1_Instalacion_y_configuracion_del_servidor_web.pdf#toolbar=0"; break;
     case 2: pdf.src="Bloque_1/Informes/Informe_2_Activar_o_Desactivar_el_Servidor.pdf#toolbar=0";break;
     case 3: pdf.src="Bloque_1/Informes/Informe_3_Configuracion_de_los_parametros_de_identifacion_del_servidor.pdf#toolbar=0";break;
     case 4: pdf.src="Bloque_1/Informes/Informe-4.-Agregar-Grupos-y-Usuarios.pdf#toolbar=0";break;
     case 5: pdf.src="Bloque_1/Informes/Informe-5.-Permisos por directorios basados en prioridades.pdf#toolbar=0";break;
     case 6: pdf.src="Bloque_1/Informes/Informe-6.-Autenticacion-Anonima.pdf#toolbar=0";break;
     case 7: pdf.src="Bloque_1/Informes/Informe-7_Configuracion_de_caducidad.pdf#toolbar=0";break;
     case 8: pdf.src="";break;
     case 9: pdf.src="Bloque_1/Informes/Configuracion_del_lenguaje_mediante_especificaciones.pdf#toolbar=0";break;
     case 10: pdf.src="Bloque_2/Informes/Registro_del_servidor_en_iis.pdf#toolbar=0";break;
     case 11: pdf.src="Bloque_2/Informes/Informe-11_12_FileZilla.pdf#toolbar=0";break;
     case 13: pdf.src="Bloque_2/Informes/Informe-13_FTP_CLIENTE.pdf#toolbar=0";break;
     default: pdf.src=""; break;
 }
   
    
}