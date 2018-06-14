<?php 
include "cabecalho.php";
?>
<main>

  <div class="container">
   
    <form action="addAssociacoes.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-12">
          <h2>Cadastro de Usuarios</h2>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="nomeFan">Nome Completo:</label>
          <input type="text" class="form-control" id="nomeFan" placeholder="Nome Completo" name="nomeFan" required>
        </div>

        <div class="form-group col-md-4">
          <label for="cnpj">CNPJ:</label>
          <input type="text" class="form-control" id="cnpj" placeholder="CNPJ" name="cnpj" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="fone">Telefone:</label>
          <input type="text" class="form-control" id="fone" placeholder="Telefone Fixo (81) 0000-0000" name="fone">
        </div>

        <div class="form-group col-md-4">
          <label for="cel">Celular:</label>
          <input type="text" class="form-control" id="cel" placeholder="(DDD)número" name="cel" required>
        </div>

        <div class="form-group col-md-4">
          <label for="face">Facebook:</label>
          <input type="text" class="form-control" id="face" placeholder="Facebook" name="face">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="rua">Rua:</label>
          <input type="text" class="form-control" id="rua" placeholder="Rua" name="rua" required>
        </div>

        <div class="form-group col-md-4">
          <label for="bairro">Bairro:</label>
          <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro" required>
        </div>

        <div class="form-group col-md-2">
          <label for="cidade">Cidade:</label>
          <input type="text" class="form-control" id="cidade" placeholder="Cidade" name="cidade" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-12">
          <label for="nomeRes">Computador / Notebook</label>
          <input type="text" class="form-control" id="nomeRes" placeholder="" name="nomeRes" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Email" name="user" required>
        </div>
    
        <div class="form-group col-md-6">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" placeholder="Senha" name="password"  required>
        </div>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-2">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </div>
    </form>
  </div>

</main>
<br><br>


<?php
include 'rodape.php';
?>
