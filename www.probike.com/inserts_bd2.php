<html>
<body>
<?php

$conexion = mysqli_connect('localhost', 'root', '', 'bd_probike');

		//le decimos a la conexión que los datos los devuelva diréctamente en utf8, así no hay que usar htmlentities
		$acentos = mysqli_query($conexion, "SET NAMES 'utf8'");

		 if (!$conexion) {
		     echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
		     echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
		     echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		     exit;
		 }


if ($conexion) {
		echo <a href="http://wwww.google.es">Conexion exitosa</a><br />";  

		$anu_estado=$_GET ['estado'];
		 $anu_titol= $_GET ['anu_titulo'];
		
		$anu_data_robatori= $_GET ['fecharobo'];
		$anu_provincia= $_GET ['provincia'];
		$anu_descripcio_robatori= $_GET ['observaciones'];
		$anu_marca= $_GET ['estado'];
		$anu_model= $_GET ['modelo'];
		$anu_color= $_GET ['color'];
		$anu_antiguitat= $_GET ['antiguedad'];
		
		$anu_numero_serie= $_GET ['numeroserie'];
		$anu_foto= $_GET ['imagen'];
		$anu_compensacio= $_GET ['compensacion'];

		$consulta="insert into anunci (anu_estado, anu_titol, anu_data_robatori, anu_provincia, anu_descripcio_robatori, anu_marca, anu_model, anu_color, anu_antiguitat, anu_numero_serie, anu_foto, anu_compensacio) values ('$anu_estado','$anu_titol','$anu_data_robatori','$anu_provincia','$anu_descripcio_robatori','$anu_marca','$anu_model','$anu_color','$anu_antiguitat','anu_numero_serie','anu_foto','anu_compensacio')";
	
		$consulta;

		$productos= mysqli_query($conexion, $consulta);
	
		};

?>

<body/>
<html/>