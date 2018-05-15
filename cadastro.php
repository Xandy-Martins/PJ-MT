<?php include "cabecalho.php"; ?>
<div class="container" id="cadastro" style="margin-top: 5%;">
<form action="cad.php" method="POST">
<table id="nn">

	<tr>
		<td>Login: </td>
		<td><input type="text" name="novo_login" placeholder="login" required></td>
	</tr>

	<tr>
		<td>Senha: </td>
		<td><input type="password" name="nova_senha" placeholder="Senha" required></td>
	</tr>
	<tr>
		<td>Nome: </td>
		<td><input type="text" name="novo_nome" placeholder="Nome" required></td>
	</tr>
	<tr>
		<td>Gênero: </td>
		<td><input type="text" name="novo_genero" placeholder="Gênero" required></td>
	</tr>
</table>
<input id="env" type="submit" value="Salvar" style="margin-left: 13%;">
</form>
</div>
</body>
</html>
