<html>
<head>
	<title>doomla admin</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<table>
		<tr>
			<td>Pagina</td>
			<td>Inhoud</td>
			<td>Menu-optie</td>
		</tr>
		<?php
		$db = new mysqli('localhost','root','','doomla');
		$query = "SELECT * FROM pagecontent";
		$result = $db->query($query);
		$values = $result->fetch_all(MYSQLI_ASSOC);

		if (is_array($values) || is_object($values)) {
		    foreach ($values as $value) {
		        echo "<tr><td>".$value['page']."</td><td>".$value['content']."</td><td>".$value['menuoption']."</td><tr>";
		    }
		}
		?>
	</table>
</body>
</html>