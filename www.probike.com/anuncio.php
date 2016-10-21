<!DOCTYPE html>
<html>
<head>
	<title>ANUNCIO</title>
</head>
<body>
	<DIV><H1>BICICLETA ROBADA</H1></DIV>
	<DIV> 
		<H2>CONTENIDO:</H2>
		FOTO:
		ANUNCIO:
		OTROS:
	</DIV>

</body>
</html>
	<?php

		//realizamos la conexión
		$conexion = mysqli_connect('localhost', 'root', '', 'bd_probike');

		//le decimos a la conexión que los datos los devuelva diréctamente en utf8, así no hay que usar htmlentities
		$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

		 if (!$conexion) {
		     echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		     echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		     echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		     exit;
		 }
		 

		 

		 		$consulta="";
		 	 	$cont=0;

		 	if(isset($_REQUEST['provincia'])){
		 		echo"hola";
		 		$robo=$_REQUEST['provincia'];
		 		if($cont==0){
		 			$consulta.="WHERE anu_ubicacio_robatori = \"".$robo."\"";
		 			$cont++;}
		 	}

		 	if(isset($_REQUEST['marca'])){
		 		$marca=$_REQUEST['marca'];
		 			if($cont!=0){
		 				$consulta.=" and anu_marca = \"".$marca."\"";
		 			}else{
		 				$consulta.="WHERE anu_marca = \"".$marca."\"";
		 			}
		 		$cont++;
		 	}

		 	if(!empty($_REQUEST['modelo'])){
		 		$modelo=$_REQUEST['modelo'];
		 		if($cont!=0){
		 			 $consulta.=" and anu_model = \"".$modelo."\"";
		 		}else{
		 			$consulta.="WHERE anu_model = \"".$modelo."\"";
		 		}
		 		$cont++;
		 	}

		 	if(!empty($_REQUEST['numeroserie'])){
		 		$serie=$_REQUEST['numeroserie'];
		 		if($cont!=0){
		 			$consulta.=" and anu_numero_serie = \"".$serie."\"";
		 		}else{
		 			$consulta.="WHERE anu_numero_serie = \"".$serie."\"";
		 		}
		 		$cont++;
		 	};

		 	
		 	if(!empty($_REQUEST['fecharobo'])){
		 		$datarobo=$_REQUEST['fecharobo'];
		 		if($cont!=0){
		 			$consulta.=" and anu_data_robatori = \"".$datarobo."\"";
		 		}else{
		 			$consulta.="WHERE anu_data_robatori = \"".$datarobo."\"";
		 		}
		 		$cont++;
		 	}
		 	

		 	if(isset($_REQUEST['color'])){
		 		$color=$_REQUEST['color'];
		 		if($cont!=0){
		 			$consulta.=" and anu_color =\"".$color."\"";
		 		}else{
		 			$consulta.="WHERE anu_color =\"".$color."\"";
		 		}
		 		$cont++;
		 	}

		 	

		 	$sql = "SELECT * FROM anunci $consulta";
		 	$productos = mysqli_query($conexion, $sql);



?>
