
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
		 

		 		$cont=0;
		 		$consulta="";

		 	if(isset($_REQUEST['Estado'])){
		 		$estado=$_REQUEST['Estado'];
		 			$consulta.="WHERE anu_estado = \"".$estado."\"";
		 			$cont++;
		 		}else{
		 			$estado = "Encontrada";
		 			$consulta.="WHERE anu_estado = \"".$estado."\"";
		 		}

		 	if(isset($_REQUEST['provincia'])){
		 		echo"hola";
		 		$robo=$_REQUEST['provincia'];
		 			$consulta.=" and anu_ubicacio_robatori = \"".$robo."\"";
		 			$cont++;
		 	}

		 	if(isset($_REQUEST['marca'])){
		 		$marca=$_REQUEST['marca'];
		 				$consulta.=" and anu_marca = \"".$marca."\"";
		 		$cont++;
		 	}

		 	if(!empty($_REQUEST['modelo'])){
		 		$modelo=$_REQUEST['modelo'];
		 			 $consulta.=" and anu_model = \"".$modelo."\"";
		 		$cont++;
		 	}

		 	if(!empty($_REQUEST['numeroserie'])){
		 		$serie=$_REQUEST['numeroserie'];
		 			$consulta.=" and anu_numero_serie = \"".$serie."\"";
		 		$cont++;
		 	};

		 	
		 	if(!empty($_REQUEST['fecharobo'])){
		 		$datarobo=$_REQUEST['fecharobo'];
		 			$consulta.=" and anu_data_robatori = \"".$datarobo."\"";
		 		$cont++;
		 	}
		 	

		 	if(isset($_REQUEST['color'])){
		 		$color=$_REQUEST['color'];
		 			$consulta.=" and anu_color =\"".$color."\"";
		 		$cont++;
		 	}

			$sql = "SELECT * FROM anunci $consulta";
		 	$productos = mysqli_query($conexion, $sql);



?>
