<link href="css/topicos.css" rel="stylesheet"/>
<h2>Você está em: <a href="<?php echo INCLUDE_PATH; ?>">FORUM</a> > <?php echo $forumInfo['nome']; ?></h2>

<form method="post">
	<input type="text" autocomplete="off" name="titulo_topico">
	<input type="hidden" autocomplete="off" name="forum_id" value="<?php echo $idForum; ?>">
	<input type="submit" autocomplete="off" name="cadastrar_topico" value="Cadastrar!">
</form>

<h3 class="access">Acessar topicos já existentes:</h3>

<ul>
	<?php
		foreach ($topicos as $key => $value) {
	?>
	<li><a class="link" href="<?php echo INCLUDE_PATH ?><?php echo $forumInfo['id'];  ?>/<?php echo $value['id']; ?>"><?php echo $value['nome']; ?></a></li>
	<?php } ?>
</ul>