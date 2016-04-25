<?php
$page = $_POST['page'];
$content = $_POST['content'];
$menuoption = $_POST['menuoption'];

$db = new mysqli('localhost','root','','doomla');
$query = "INSERT INTO pagecontent (page, content, menuoption) VALUES ('$page', '$content', '$menuoption')";
$db->query($query);

header('location:index.php');
?>