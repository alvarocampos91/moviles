<?php	
	include "conexion.php";

	$tipo=$_POST['tipo'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	
	    if($tipo=== "candidato" ){
            $user_id=null;
			$sql1= "select * from candidato where (loggin_Candidato='$name' or direccion_Candidato='$name') and password_Candidato='$password' ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_Candidato"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../perfilCandidato.php';</script>";				
			}
        }else if($tipo==="empresa"){
            $user_id=null;
			$sql1= "select * from empresa where (loggin_Empresa='$name' or correo_Empresa='$name') and password_Empresa='$password' ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_Empresa"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../perfilEmpresa.php';</script>";				
			}
        }else if($tipo==="evaluador"){
            $user_id=null;
			$sql1= "select * from evaluador where (loggin_Usuario='$name' or direccion_Usuario='$name') and password_Usuario='$password' ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_Usuario"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../perfilEvaluador.php';</script>";				
			}
        }else if($tipo==="usuario"){
            $user_id=null;
			$sql1= "select * from usuario_er where (loggin_Usuario='$name' or direccion_Usuario='$name') and password_Usuario='$password' ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$user_id=$r["id_Usuario"];
				break;
			}
			if($user_id==null){
				print "<script>alert(\"Acceso invalido.\");window.location='../index.php';</script>";
			}else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				print "<script>window.location='../perfilUsuario.php';</script>";				
			}
            	
            }




			
	




?>