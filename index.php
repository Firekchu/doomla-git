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

	$query = "SELECT content FROM pagecontent WHERE page='$page'";
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

function getTemplate()
{
	$page = page();
	$db = database();

	$query = "SELECT template FROM pagecontent WHERE page='$page'";
	$result = $db->query($query);
	$values = $result->fetch_all(MYSQLI_ASSOC);

	if (is_array($values) || is_object($values)) {
	    foreach ($values as $value) {
	        $template = $value['template'];
	    }
	}

	return $template;
}

function getMenu()
{
	$page = page();
	$db = database();

	$query = "SELECT * FROM pagecontent";
	$result = $db->query($query);
	$values = $result->fetch_all(MYSQLI_ASSOC);

	if (is_array($values) || is_object($values)) {
	    foreach ($values as $value) {
	        echo "<a href='?page=".$value['page']."'><li";
	        if($value['page']==$page){echo" class='active'";}
	        echo">".$value['menuoption']."</li></a>";
	    }
	}
}

function getTitle()
{
	$page = page();
	$db = database();

	$query = "SELECT menuoption FROM pagecontent WHERE page='$page'";
	$result = $db->query($query);
	$values = $result->fetch_all(MYSQLI_ASSOC);

	if (is_array($values) || is_object($values)) {
	    foreach ($values as $value) {
	        $title = $value['menuoption'];
	    }
	}

	return $title;
}


require "templates/".getTemplate();
?>