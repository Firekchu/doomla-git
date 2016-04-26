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
	$details = true;
	require 'logic.php';
	?>
	<p>Weet u zeker dat u onderstaande pagina wilt verwijderen?</p>
	<a href="logic.php?id=<?=$id;?>&delete"><button>Ja</button></a><a href="index.php"><button>Nee</button></a>
		<?php foreach ($values as $value): ?>
		<p>Pagina:<?= $value['page']; ?></p>
		<p>Menu-optie:<?= $value['menuoption']; ?></p>
		<p>Inhoud:<?= $value['content']; ?></p>
		<?php endforeach; ?>
</body>
</html>