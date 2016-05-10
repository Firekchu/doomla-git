<html>
<head>
	<title>doomla admin</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<a href="create.php">Pagina toevoegen</a>
	<table>
		<tr>
			<td>Pagina</td>
			<td>Inhoud</td>
			<td>Menu-optie</td>
			<td>Volgorde</td>
			<td>Template</td>
			<td></td>
			<td></td>
		</tr>
		<?php
		$index = true;
		require 'logic.php';

		if (is_array($values) || is_object($values)) {
		    foreach ($values as $value) {
		        echo "<tr>".
		        "<td>".$value['page']."</td>".
		        "<td>".$value['content']."</td>".
		        "<td>".$value['menuoption']."</td>".
		        "<td>".$value['menuorder']."</td>".
		        "<td>".$value['template']."</td>".
		        "<td><a href='edit.php?id=".$value['id']."'>wijzigen</a></td>".
		        "<td><a href='delete.php?id=".$value['id']."'>verwijderen</a></td>".
		        "<tr>";
		    }
		}
		?>
	</table>
</body>
</html>