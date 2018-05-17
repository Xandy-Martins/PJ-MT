<?php

include 'init.php';

if (isset($_POST['user']) && isset($_POST['pw'])) {
    $user = $_POST['user'];
    $pw = $_POST['pw'];

    if (login($user, $pw)) {
        redirect('index.php');
    } else {
        redirect('login.php?wrong_data');
    }
}

?>