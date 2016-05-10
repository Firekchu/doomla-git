<html>
<head>
	<title>Pagina toevoegen</title>
</head>
<body>
	<h1>Pagina toevoegen</h1>
	<form method="post" action="logic.php?create">
		<label>Pagina:</label>
		<input type="text" name="page"><br>
		<label>Menu-optie:</label>
		<input type="text" name="menuoption"><br>
		<label>Template:</label>
		<input type="text" name="template"><br>
		<label>Inhoud:</label>
		<textarea name="content"></textarea>
		<input type="submit">
	</form>
</body>
</html>