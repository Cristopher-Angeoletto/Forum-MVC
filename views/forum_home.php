<link href="css/home.css" rel="stylesheet"/>
<h2>Bem-vindo ao nosso <span>fórum!</span></h2>
<h3>Deseja cadastrar um novo fórum?</h3>

<form method="post">
	<input type="text" autocomplete="off" name="titulo_forum">
	<input type="submit" autocomplete="off" name="cadastrar_forum" value="Cadastrar!">
</form>

<h3 class="access">Acessar fóruns já existentes:</h3>

<ul>
	<?php
		foreach ($foruns as $key => $value) {
	?>
	<li><a href="<?php echo INCLUDE_PATH ?><?php echo $value['id']; ?>"><?php echo $value['nome']; ?></a></li>
	<?php } ?>
</ul>