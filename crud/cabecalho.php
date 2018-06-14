<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Martins Technology</title>
  <link rel="stylesheet" href="animate.css'">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.css">
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">-->

  <link rel="icon" href="img/26168939_392450217869697_9061459695988775158_n.png">
  <!--<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">-->
  <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
    <div class="container">
      <br><a class="navbar-brand js-scroll-trigger" href="index.php">Martins Technology</a><br>
      <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="index.php" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
     <i class="fa fa-bars"></i>
      </button>
      <div class="navbar-collapse collapse" id="navbarResponsive" style="">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <li class="nav-item">
            <a class="" data-toggle="modal" data-target="#myModal" href="#my"></a>
                 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login.php"></a>
              <!-- <li><a href="#myModal" class="nav-link js-scroll-trigger" data-toggle="modal">Login</a></li> -->

            </li>

          </li>
        
            <br><li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="servicos">Serviços</a>
          </li></br>
                 <br><li class="nav-item">
             <a class="nav-link js-scroll-trigger" href="produtos">Produtos</a>
            </li></br>

            <br><li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about">História</a>
            </li></br>
            <li class="nav-item">
             <a class="nav-link js-scroll-trigger" href="team">Equipe</a>
            </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="agendamento">Agendamento de Serviços</a>
            </li>
                </div>
            </div>
        </div>
    </div>
    
</div>
        </ul>
      </div>
    </div>
  </nav>
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <header>
      
    </header>
      <div class="jumbotron text-center">
       <!--  <h1>Martins Technology</h1>
         -->
      </div>

      <nav class="navbar navbar-inverse navbar">
       
            
            <div class="col col-lg-4">
              <ul class="nav navbar-nav">
                <?php if (isset($_SESSION['user'])): ?>
                <li style="color: gray;"><a href="#">Olá, <?php echo $_SESSION['user'];?></a></li>
                <li><a href="index-assoc.php"></a></li>
                <li><a href="publicar-noticias.php"></a></li>
                <li><a href="sair.php">Sair <i class="fas fa-sign-in-alt"></i></a></li>
                  <?php else: ?>
             <!--    <li><a href="form-login.php">Cadastre-se</a></li> -->
               <!--  <li><a href="form-login.php">Login<i class="fas fa-sign-in-alt"></i></a></li>
 -->
                <?php endif ?>
              </ul>
            </div>
          </div>
        </div>
      </nav> 
    </header>