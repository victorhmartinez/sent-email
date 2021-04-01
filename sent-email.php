<?php 
	
	$Destino = "juanjoyasa.98@gmail.com";
	$Nombre = $_GET['nombre'];
	$Correo = $_GET['correo'];
	$Descripcion = $_GET['mensaje'];
	$Contenido = "Nombre: ".$Nombre."\nCorreo: ".$Correo."\nDescripcion: ".$Descripcion;
	$headers = "From:" . $Destino;
	$mail = mail($Destino,"Contacto",$Contenido,$headers);
	if ($mail) {
		echo "listo y gracias";
	}else{
	    echo "error";
	}
?>