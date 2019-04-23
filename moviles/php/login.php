<?php	
	include "conexion.php";

	$login=$_POST['login'];
	$password=$_POST['password'];
	
	    if(!empty($_POST)){
            $user_id=null;
			$sql1= "select * from usuario where login='$login' and password='$password' ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_usuario"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../IniciarSesion.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../PerfilUsuario.php';</script>";				
			}
		}

?>