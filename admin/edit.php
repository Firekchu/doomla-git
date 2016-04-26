<html>
<head>
	<title>Pagina wijzigen</title>
</head>
<body>
	<h1>Pagina wijzigen</h1>
	<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		header('location:index.php');
	}
	$details = true;
	require 'logic.php';
	?>
	<form method="post" action="logic.php?id=<?=$id;?>&edit">
		<?php foreach ($values as $value): ?>
		<label>Pagina:</label>
		<input type="text" value="<?= $value['page']; ?>" name="page"><br>
		<label>Menu-optie:</label>
		<input type="text" value="<?= $value['menuoption']; ?>" name="menuoption"><br>
		<label>Volgorde:</label>
		<input type="text" value="<?= $value['menuorder']; ?>" name="menuorder"><br>
		<label>Inhoud:</label>
		<textarea name="content"><?= $value['content']; ?></textarea>
		<?php endforeach; ?>
		<input type="submit">
	</form>
</body>
</html>