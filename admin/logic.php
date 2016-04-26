<?php
$db = new mysqli('localhost','root','','doomla');

if (isset($index)) {
	$query = "SELECT * FROM pagecontent ORDER BY menuorder ASC";
	$result = $db->query($query);
	$values = $result->fetch_all(MYSQLI_ASSOC);
}

if (isset($_GET['create'])) {
	$page = $_POST['page'];
	$content = $_POST['content'];
	$menuoption = $_POST['menuoption'];

	$query = "INSERT INTO pagecontent (page, content, menuoption) VALUES ('$page', '$content', '$menuoption')";
	$db->query($query);

	header('location:index.php');
}

if (isset($details)) {
	$query = "SELECT * FROM pagecontent WHERE id=$id";
	$result = $db->query($query);
	$values = $result->fetch_all(MYSQLI_ASSOC);
}

if (isset($_GET['delete'])) {
	if (isset($_GET['id']) & is_numeric($_GET['id'])) {
		$id = $_GET['id'];
		$query = "DELETE FROM pagecontent WHERE id='$id'";
		$db->query($query);

		header('location:index.php');
	}
}

if (isset($_GET['edit'])) {
	if (isset($_GET['id']) & is_numeric($_GET['id'])) {
		$page = $_POST['page'];
		$menuoption = $_POST['menuoption'];
		$menuorder = $_POST['menuorder'];
		$content = $_POST['content'];
		$id = $_GET['id'];
		$query = "UPDATE pagecontent SET page='$page', menuoption='$menuoption', menuorder='$menuorder', content='$content' WHERE id='$id'";
		$db->query($query);

		header('location:index.php');
	}
}

?>