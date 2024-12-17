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
	
	<h1 id="pageTitle">Categorize</h1>
	
<p style="text-align: center;">INSTRUCTIONS</p>
	
	<div class="row">
		<div class="column1">
		
		<p>You can see on the screen a shape at one end (either left or right, depending on the hand you are exercising) and at the other end three square outlines acompanied by three different shapes (a cirle, a square and a triangle) with counters in them. What you need to do is grab and move the shape (the one with no number in it) inside the outline acompanied by its matching shape (squares go to the outline acompanied by the square, circles go inside the outline acompanied by the circle and triangles in the outline acompanied by the triangle). When you put a shape in the correct outline the counter of the acompanied shape increases and a new shape appears that needs to be categorized. Repeat the process as many times as you can until the given timer of 1 minute ends. When the timer reaches 0 the game ends and you are given a score based on how many shapes you categorized correctly (the sum of the three counters of the shapes acompanying the outlines). The higher the score, the better the result.</p>
			<p>To grab a shape you need to put your hand over it and touch together the tips of your fingers. Do not touch the tips of your fingers together before placing your hand over a shape. As long as you keep holding your grip and you have successfully grabbed a shape, it follows the movement of your hand. To drop a shape in an outline you simply release your grip.</p>
			<p>To better understand the way the game works, watch the demonstration video that follows:</p>
	
				<div 
	 style="text-align: center; background: #000; float: left; width: 100%; margin-bottom: 20px;">
 <video
		style="width: 100%; max-width: 1200px;"
		muted controls>
  <source src="/videos/categorize-demo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video> 
</div>
			
	
	

			
	</div>


	</div>
	


	
<p style="text-align: center; margin-top: 50px;">
<a href="index.php"><button>Categorize Game</button></a>
</p>
	
	


	
</main>
		


<?php include '../../../main-footer.php';?>
