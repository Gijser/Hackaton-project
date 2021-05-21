<?php
require("functies/functies.php");
?>

<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>ranglijst</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Header -->
	<header id="header">
		<a href="index.php" class="title">Hyperspace</a>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="elements.html">Elements</a></li>
			</ul>
		</nav>
	</header>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<section id="main" class="wrapper">
			<div class="inner">

				<?php
				if ($_GET["value"] == "1Spel") {
					$title = "een spel ";
				} elseif ($_GET["value"] == "dagLijst") {
					$title = "een dag ";
				} elseif ($_GET["value"] == "algemeenLijst") {
					$title = "alle spellen ";
				}
				?>
				<h1 class="major"><?php echo $title ?>ranglijst</h1>
			</div>
		</section>
		<section id="main" class="wrapper">
			<div class="inner">
				<table>
					<?php


					if ($_GET["value"] == "1Spel") {
						getEenSpel();
					} elseif ($_GET["value"] == "dagLijst") {
						getEenDag();
					} elseif ($_GET["value"] == "algemeenLijst") {
						getAll();
					}
					?>

				</table>
			</div>
		</section>
		<section>
			<form method="POST" action="ranglijsten.php">
				<input type="datetime-local" name="datum">
				<button>submit</button>
			</form>
		</section>
	</div>

	<!-- Footer -->
	<footer id="footer" class="wrapper alt">
		<div class="inner">
			<ul class="menu">
				<li>&copy; Untitled. All rights reserved.</li>
				<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>