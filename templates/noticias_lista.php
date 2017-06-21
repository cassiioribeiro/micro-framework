<!DOCTYPE html>
<html>
<head>
	<title>Noticias</title>
</head>
<body>
	<h1>Pagina de teste</h1>
	<ul>
		<?php foreach ($data['news'] as $new): ?>
		<li><a href="./noticias/<?= $new['id'] ?>"><?= utf8_encode($new['titulo']) ?></a></li>


		<?php endforeach; ?>
	</ul>

	<form method="POST">
		<input type="text" name="nome"/>
		<input type="submit" value="Enviar"/>
	</form>

</body>
</html>