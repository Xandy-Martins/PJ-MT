<?php

session_start();

function login ($user, $pw){
	$users = file('users-pws.txt');
	for ($i=0;$i<sizeof($users);$i++){
		$users[$i] = trim($users[$i]);
	}
	$usuario = $user."-".$pw;

	if(in_array($usuario, $users)) {
    $_SESSION['user'] =  $user;
    return true;
  }
  return false;
}

function logado() {
    return isset($_SESSION['user']);
}

function sair() {
    unset($_SESSION['user']);
}

function redirect($pagina) {
	header('location: ' . $pagina);
}

?>