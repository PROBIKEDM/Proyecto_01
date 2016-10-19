
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

		 $sql = "SELECT * FROM anunci";

		 
		 $productos = mysqli_query($conexion, $sql);


		//  if(mysqli_num_rows($productos)>0){
		// 	echo "Número de productos: " . mysqli_num_rows($productos) . "<br/><br/>";
		// 	while($producto = mysqli_fetch_array($productos)){
		// 		echo "Id: " . $producto['anu_titol'] . "<br/>";
		// 		echo "Nombre: " . $producto['pro_nombre'] . "<br/>";
		// 		echo "Precio: " . $producto['pro_precio'] . "<br/>";
		// 		$foto='img/'.$producto['pro_foto'];

		// 		if (file_exists ($foto)){
		// 			echo "<img src='" . $foto . "' width='300'/><br/><br/>";
		// 		} else {
		// 			echo "<img src='img/0.jpg' width='300'/><br/><br/>";
		// 		}
		// 	}
		// } else {
		// 	echo "No hay datos que mostrar!";
		// }

		// mysqli_close($conexion);


?>
