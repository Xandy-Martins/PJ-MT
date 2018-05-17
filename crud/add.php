<?php 

$nome=$_POST['nome'];
$b=$_POST['genero_musical'];

$data= file('todos.txt');
$data[]=$nome."-".$b."\n";

$data_str=implode('', $data);
file_put_contents('todos.txt', $data_str);
header('location:piu.php');

?>