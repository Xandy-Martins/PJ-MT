<?php

include 'init.php';

if (!is_logged()) {
    redirect('form.php');
} else {
    echo "Olá Seja Bem-vindo, usuário " . $_SESSION['user-logged'];
}

?>
<a href="logout.php">Sair</a>