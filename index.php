<?php
require('functies/functies.php');

?>

<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Hackathon</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
	
</head>


<body class="is-preload">

	<!-- Sidebar -->
	<section id="sidebar">
		<div class="inner">
			<nav>
				<ul>
					<li><a href="#intro">welkom</a></li>
					<li><a href="#one">ranglijsten</a></li>
					<li><a href="#three">zoekbalk</a></li>
				</ul>
			</nav>
		</div>
	</section>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Intro -->
		<section id="intro" class="wrapper style1 fullscreen fade-up">
			<div class="inner">
				<h1>Covadis LanParty Leaderboards</h1>
				<p>Hier kunt u de verschillende leaderboards vinden van de afgelopen toernooien</a>.</p>
				<ul class="actions">
					<li><a href="#one" class="button scrolly">Learn more</a></li>
				</ul>
			</div>
		</section>
		<!-- Leaderboard -->

		<?php
		leaderboard();
		?>
	

		<!-- One -->
		<section id="one" class="wrapper style2 spotlights">
			<section>
				<a href="#" class="image"><img src="images/pic01.jpg" alt="" data-position="center center" /></a>
				<div class="content">
					<div class="inner">
						<h2>ranglijst een spel</h2>
						<form method="GET" action="ranglijsten.php">
							<input type="hidden" value="1Spel" name="value">
							<button id="submit" type="submit" href="ranglijsten.php">een spel</button>
						</form>
					</div>
				</div>
			</section>
			<section>
				<a href="#" class="image"><img src="images/pic02.jpg" alt="" data-position="top center" /></a>
				<div class="content">
					<div class="inner">
						<h2>dagelijkse ranglijst</h2>
						<section>
						<form method="GET" action="ranglijsten.php">
							<input id="date-time-text" type="datetime-local" name="datum">
							<input type="hidden" value="dagLijst" name="value">
							<button id="submit" type="submit" href="ranglijsten.php">een spel</button>
						</form>
					</div>
				</div>
			</section>
			<section>
				<a href="#" class="image"><img src="images/pic03.jpg" alt="" data-position="25% 25%" /></a>
				<div class="content">
					<div class="inner">
						<h2>algemeene ranglijst</h2>
						<form method="GET" action="ranglijsten.php">
							<input type="hidden" value="algemeenLijst" name="value">
							<button id="submit" type="submit" href="ranglijsten.php">een spel</button>
						</form>
					</div>
				</div>
			</section>
		</section>
		<section id = "addPlayer" class="wrapper style1 fade-up">
			<div class="inner">
			<h2>Voeg niewe player toe</h2>
				<div class="split style1">
					<section>
						<form method="post" action="functies/functies.php">
							<div class="inputRow">
                				<input type="text" name="addPlayer">
            				</div>
							<div class="inputRow">
                				<button class="btn" type="submit" name="submitPlayer">Voeg player toe</button>
            				</div>
						</form>
					</section>
				</div>
			</div>
		</section>
		<section id = "addPlayer" class="wrapper style1 fade-up">
			<div class="inner">
			<h2>Voeg niewe game toe</h2>
				<div class="split style1">
					<section>
						<form method="post" action="functies/functies.php">
							<div class="inputRow">
                				<input type="text" name="addGame">
            				</div>
							<div class="inputRow">
                				<button class="btn" type="submit" name="submitGame">Voeg game toe</button>
            				</div>
						</form>
					</section>
				</div>
			</div>
		</section>

		<!-- Three -->
		<section id="three" class="wrapper style1 fade-up">
			<div class="inner">
				<h2>zoekbalk</h2>
				<div class="split style1">
					<section>
						<form method="post" action="#">
							<input type="text" id="zoekblak">
						</form>
					</section>
				</div>
			</div>
		</section>

	</div>

	<!-- Footer -->
	<footer id="footer" class="wrapper style1-alt">
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