<?php
function page()
{
	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = "home";
	}

	return $page;
}

function database()
{
	$db = new mysqli('localhost','root','','doomla');

	return $db;
}

function getContent()
{
	$page = page();
	$db = database();

	$query = "SELECT * FROM pagecontent WHERE page='$page'";
	$result = $db->query($query);
	$values = $result->fetch_all(MYSQLI_ASSOC);

	if (is_array($values) || is_object($values)) {
	    foreach ($values as $value) {
	        $content = $value['content'];
	    }
	}

	if (!isset($content)) {
		$content = "NO CONTENT FOR YOU";
	}

	return $content;
}

require "templates/template.php";
?>