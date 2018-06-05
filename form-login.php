<?php 
include "cabecalho.php";
?>
<html>
<body>
  
  <main>

	  <div class="container">
  
        <form action="autLogin.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-12">
              <h2>Login</h2>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Email" name="user" required>
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="senha">Senha:</label>
              <input type="password" class="form-control" id="senha" placeholder="Senha" name="password" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <a href="form-cadastro-assoc.php"></a>
               <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
      </form>
    </div>

  </main>
  
  <div style="margin-top:170px;">
    <?php
      include 'rodape.php';
    ?>
  <div>
</body>
</html>
