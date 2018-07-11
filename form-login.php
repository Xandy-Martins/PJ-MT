<?php 

session_start();
include 'cabecalho.php';
?>


 

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
              <input type="text" class="form-control" id="email" placeholder="Email" name="user" required>
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="senha">Senha:</label>
              <input type="password" class="form-control" id="senha" placeholder="Senha" name="password" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-2">
            	<button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
      </form>
    </div>