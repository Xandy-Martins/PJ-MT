<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/logoo.png">
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
		<div class="container">
			<br><a class="navbar-brand js-scroll-trigger" href="#page-top">Martins Technology</a><br>
			<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fa fa-bars"></i>
			</button>
			<div class="navbar-collapse collapse" id="navbarResponsive" style="">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item">
						<a href="#myModal" data-target="#myModal" class="nav-link js-scroll-trigger" data-toggle="modal">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="../#servicos">Serviços</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="../#produtos">Produtos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="../#about">História</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="../#team">Equipe</a>
					</li>
					<li class="nav-item">

						<a class="nav-link js-scroll-trigger" href="formulario.php">Agendamento de Serviços</a>
					</li>
				</div>
			</div>
		</nav>
		<div id="myModal" class="modal fade">
			<div class="modal-dialog modal-login">
				<div class="modal-content">
					<div class="modal-header">      
						<h4 class="modal-title">Login</h4>  
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<form action="auth.php" method="post">
							<div class="form-group">
								<input type="text" class="form-control" name="login" placeholder="login" required="required">   
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="senha" placeholder="senha" required="required"> 
							</div>        
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Entrar</button>
								<a href="cadastro.php" style="margin-left: 0;">Cadastre-se</a>
								

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>