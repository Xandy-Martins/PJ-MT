<?php
session_start();
include 'bd/conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autenticação</title>
	<script type="text/javascript">
		function loginsucess(){
			window.location='index.php';
		}
		function loginfailed(){
			alert('Login e/ou senha incorretos');
			window.location='form-login.php';
		}
	</script>
</head>
<body>

<?php
$user = addslashes($_POST['user']);
$pw = md5(addslashes($_POST['password']));

	$sql = "SELECT * FROM USUARIOS WHERE US_EMAIL='$user' AND US_SENHA='$pw'";

	$res = $conn->query($sql);
	if($res !== false){
		$result = $res->fetch(PDO::FETCH_ASSOC);
		if($result['US_EMAIL'] == $user && $result['US_SENHA'] == $pw) {
			$_SESSION['user'] = $user;
			$_SESSION['password'] = $pw;
			$_SESSION['logado'] = True;
			echo "<script>loginsucess()</script>";
		}
		else{
			echo "<script>loginfailed()</script>";
		}
	}	
?>