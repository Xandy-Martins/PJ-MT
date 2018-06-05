<?php include_once 'cabecalho.php' ?>

  <main>
   
    <div class="container">
      <h1>Publicar Notícias</h1> 
  
      <label>Classifique a nóticia</label>
        <select class="selectpicker">
          <option>Curso</option>
          <option>Política</option>
          <option>Esporte</option>
          <option>Projetos</option>
          <option>Ações Sociais</option>
        </select>  
<br>
<br>
  <div class="row">
    <div class="col-sm-6">
      <div>
        <label>Digite o Título da nóticia</label>
        <input type="text" name="Titulo">
      </div>
      <br>
      <div>
        <label>Digite o sub título da nóticia</label>
        <input type="text" name="Titulo">
      </div>
      <br>
      <div>
        <input type="file" name="image" />
      </div>
      <br>
      <div>
        <label>Digite a Nóticia</label>
        <textarea rows="10" cols="60" maxlength="400"></textarea>
        <button><a href="inserir_noticias.php">Salvar</a></button> <br>
      </div>   
    </div>
  </div>
</div>
  </form>
  <div>
      
<!-- <center>
  <h1>Publicar Notícias</h1>
<form>
  <textarea rows="30" cols="60" maxlength="500"></textarea>
</form>
<button><a href="inserir_noticias.php">Enviar</a></button> <br>

<br>
<body>
<select class="selectpicker">
  <option>Curso</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>
</center> -->
</main>
<br><br>
<?php
include 'rodape.php';
?>
<div>
</body>
</html>