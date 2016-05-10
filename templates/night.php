<!doctype html>
<html>
<head>
	<title><?= getTitle(); ?></title>
	<link rel="stylesheet" type="text/css" href="CSS/night.css">
</head>
<body>
	<header>
		<h1 id="topheading">!Almood</h1>
		<nav>
			<h2 id="pages">Pages:</h2>
			<ul>
				<?= getMenu(); ?>
			</ul>
		</nav>
	</header>
	<section>
		<article>
			<?= getContent($get="content"); ?>
		</article>
	</section>
</body>
</html>