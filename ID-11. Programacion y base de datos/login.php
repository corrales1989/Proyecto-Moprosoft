<?php
	$usuario = $_POST["usuario"];
	$password = $_POST["nip"];

// #$conexion = mysql_connect("localhost", "root", "root");
// $conexion = mysql_connect("localhost:3306";
// mysql_select_db(loginbd, $conexion);

	

// if (mysql_num_rows($comprobar) > 0)
//  {
// 	id_usuario = mysql_result($comprobar, 0);
// 	header("location:menu.html");
//  }
//  else{
//  	echo "Numero de cuenta y/o Nip Incorrecto(s)...";
//  }
		$servidor = "localhost";
		$usuarioBD = "root";
		$contraseña = "";
		$bd = "loginbd";
		$link = mysqli_connect('localhost', 'root', '','loginbd');
		// mysql_select_db($bd, $link);
		if (!$link)
		{
			echo "Error al conectar a Mysql";
		}
		else{
			$sql = mysqli_query($link,"SELECT id_usuario FROM usuario WHERE nombre_usuario = '$usuario' AND contrasenna='$password'");
			//$comprobar = $mysql->query($sql);	
			if (mysqli_num_rows($sql) > 0)
			 {
				//$id_usuario = mysqli_result($comprobar, 0);
				header("location:menu.html");
			 }
			 else{
			 	echo "Numero de cuenta y/o Nip Incorrecto(s)...";
			 }
		}
?>