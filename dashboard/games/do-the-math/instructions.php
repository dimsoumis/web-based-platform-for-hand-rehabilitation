 <?php
session_start();
if(!isset($_SESSION['userEmail'])){
   header("Location:https://mani-hab.space");
}


?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
	<title>Mani-Hab - Hand Rehabilitation Platform</title>
	<link rel="icon" type="image/x-icon" href="/images/favicon.png">
	<link rel="stylesheet" href="/styles/main.css">
	<link rel="stylesheet" href="/styles/responsive.css">
	
		<script src="/scripts/main.js" type="text/javascript"></script> 
		<script src="/scripts/sweetalert2.all.min.js" type="text/javascript"></script> 
</head>
	<body>
		
		<header>
	<div id="logo"><img src="/images/logo-hor.png" /></div>
<nav id="mainNavigation">
	<a href="https://mani-hab.space/dashboard/index.php">About</a>
	<a href="https://mani-hab.space/dashboard/games/index.php">Games</a>
	<a href="https://mani-hab.space/dashboard/previous-scores/index.php">Previous Scores</a>
	<a href="https://mani-hab.space/dashboard/contact.php">Contact</a>
	<a class="logoutButton" href="https://mani-hab.space/dashboard/logout.php">Log out</a>
</nav>
	
	<div id="mobileNav"><button onclick="showMobileMenu()">MENU</button></div>
	<nav id="mobileNavigation" class="noDis">
	<a href="https://mani-hab.space/dashboard/index.php">About</a>
	<a href="https://mani-hab.space/dashboard/games/index.php">Games</a>
	<a href="https://mani-hab.space/dashboard/previous-scores/index.php">Previous Scores</a>
	<a href="https://mani-hab.space/dashboard/contact.php">Contact</a>
	<a class="logoutButton" href="https://mani-hab.space/dashboard/logout.php">Log out</a>
</nav>
</header>
		
		
<main>
	
	<h1 id="pageTitle">Do the Math</h1>
	
<p style="text-align: center;">INSTRUCTIONS</p>
	
	<div class="row">
		<div class="column1">
		
		<p>In this game you can see on the screen some numbered squares, some square outlines and some math operators like + (addition), - (subtraction), * (multiplication) and / (division). What you need to do is grab and drag all the squares and put them in the correct outlines in order to make the mathematical operation appearing on the screen valid. To grab a square you need to put your hand over it and touch the tips of your fingers together. Do not touch the tips of your fingers together before puting your hand over a square. While holding the grip, if you move your hand, the grabbed square will follow your movement. After you put a square in the outline it needs to be in, you just release your grip and you repeat the process until all squares are in the outlines they need to be.</p>
			<p>There are 3 different levels available:</p>
			<ul><li>On the first level you need to make an addition between two numbers be valid.</li>
				<li>On the second level you need to make a multiplication between two numbers be valid.</li>
				<li>On the third level you need to make 4 different operations valid. They appear one after the other on the screen, one by one (each operation disappears when valid and the next one appears).</li>
			
				
			</ul>
			<p>At the end of each level you receive a score based on the time that passed until you placed correctly all squares (small scores are the goal).</p>
			
			<p>To better understand the way the game works, watch the demonstration video that follows:</p>
	
					<div 
	 style="text-align: center; background: #000; float: left; width: 100%; margin-bottom: 20px;">
 <video
		style="width: 100%; max-width: 1200px;"
		muted controls>
  <source src="/videos/do-the-math-demo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video> 
</div>
			
	
	

			
	</div>


	</div>
	


	
<p style="text-align: center; margin-top: 50px;">
<a href="index.php"><button>Do the Math Game</button></a>
</p>
	
	


	
</main>
		


<?php include '../../../main-footer.php';?>
