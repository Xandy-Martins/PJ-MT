<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/logoo.png">
	<title>Página do Usuário</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php include "cabecalho.php"; ?>
	<?php
		include 'init.php';
		if(empty($_GET['user'])){
			if($_SESSION['user']){
				$u = $_SESSION['user'];
			}
			else{
				redirect('index.php');
			}
		}
		else{
			
				$u = $_GET['user'];
			}
			
			
		$filename = "$u.csv";
		$data = file($filename);
		$arr =[];
		for($i = 0; $i < sizeof($data); $i++ ) {
    $data[$i] = explode(',', $data[$i]);
    $arr[$i] = $data[$i];
		}
	?>
<br>
<div id="primeiro">

	<h3>
	




<?php for($i = 0; $i < sizeof($data); $i++): ?>
<?= $data[0][$i] ?><br>
<a href='logout.php'>Deslogar</a></br></br><?= $data[0][1] ?><br> 

<a href='update.php?linha=<?=$i?>' style="margin-right:-425px;float: right;margin-top: -110px; "><i class="far fa-edit" ></i></a>

<?php endfor; ?>
	</h3>
	<div id="i">
		<img src="img/avatar.png">
	</div>
</div>

<div id="segundo">

</div>

<div id="terceiro">

</div>

<div id="quarto">

</div>

<div id="quinto">

</div><br><br>
<?php include 'rodape.php'; ?>

</body>
</html>