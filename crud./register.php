<?php

include 'init.php';

if (isset($_POST['user']) && isset($_POST['pw'])) {
    $user = $_POST['user'];
    $pw = $_POST['pw'];

    $users = getUsers();
    if (in_array($user, $users)) {
        redirect("register.php?invalid_user=$user");
    }

    addUser($user, $pw);
    redirect('login.php?user_registered');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <?php if (isset($_GET['invalid_user'])): ?>
        <span style="color: red">Usuário <?= $_GET['invalid_user'] ?> já registrado, utilize outro username</span>
    <?php endif ?>
    <form method="POST">
        <input type="text" name="user" placeholder="User">
        <input type="password" name="pw" placeholder="Password">
        <br>
        <input type="submit">
    </form>
    <a href="login.php">Login</a>
</body>
</html>