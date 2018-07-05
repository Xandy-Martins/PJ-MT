<?php
 
session_start();
include 'bd/conexao.php';

$nome = addslashes($_POST['nome']);
$fone = addslashes($_POST['fone']);
$cel = addslashes($_POST['cel']);
$rua = addslashes($_POST['rua']);
$bairro = addslashes($_POST['bairro']);
$cidade = addslashes($_POST['cidade']);
$cep = addslashes($_POST['cep']);
$user = addslashes($_POST['user']);
$pw = md5(addslashes($_POST['password']));

$sql = "INSERT INTO USUARIOS (US_NOME, US_TELEFONE, US_CELULAR, US_RUA, US_BAIRRO, US_CIDADE, US_CEP, US_EMAIL, US_SENHA) VALUES(:nome, :fone, :cel, :rua, :bairro, :cidade, :cep, :user, :pw)";

$stmt = $conn->prepare( $sql );

$stmt->bindParam( ':nome', $nome );
$stmt->bindParam( ':fone', $fone );
$stmt->bindParam( ':cel', $cel);
$stmt->bindParam( ':rua', $rua);
$stmt->bindParam( ':bairro', $bairro);
$stmt->bindParam( ':cidade', $cidade);
$stmt->bindParam( ':cep', $cep);
$stmt->bindParam( ':user', $user);
$stmt->bindParam( ':pw', $pw);

$result = $stmt->execute();
if ( ! $result ){
	var_dump( $stmt->errorInfo() );
	exit;
}
$_SESSION['sucess-cadastrado']=1;
header('location:index.php');





?>