<?php

include 'init.php';

$user = $_POST['login'];
$pw = $_POST['senha'];

if (login($user, $pw)) {
    header('location:oi.php');
} else {
	$_SESSION['flash']=true;
    header('location:index.php');
}

?>
