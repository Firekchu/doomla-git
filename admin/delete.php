<html>
<head>
	<title>Pagina verwijderen</title>
</head>
<body>
	<h1>Pagina verwijderen</h1>
	<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		header('location:index.php');
	}
	$delete = true;
	require 'logic.php';
	?>
	<p>Weet u zeker dat u onderstaande pagina wilt verwijderen?</p>
	<a href="logic.php?id=<?=$id;?>&delete"><button>Ja</button></a><a href="index.php"><button>Nee</button></a>
	<form method="post" action="create.logic.php">
		<?php foreach ($values as $value): ?>
		<label>Pagina:</label>
		<input type="text" value=<?= $value['page']; ?> name="page"><br>
		<label>Menu-optie:</label>
		<input type="text" value=<?= $value['menuoption']; ?> name="menuoption"><br>
		<label>Inhoud:</label>
		<textarea name="content"><?= $value['content']; ?></textarea>
		<?php endforeach; ?>
		<input type="submit">
	</form>
</body>
</html>