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
	
	<h1 id="pageTitle">Match & Crash</h1>
	
<p style="text-align: center;">INSTRUCTIONS</p>
	
	<div class="row">
		<div class="column1">
		
		<p>In this game you can see on the screen different shapes of different colors. Your goal is to swap places between specific shapes in order to create triads of similar shapes, either horizontally or vertically. To move a shape, you place the hand you are exercising over it, and you touch the tips of your fingers together. When successfully grabbing a shape, the nodes appearing on your hand turn to green and stay that way as long as you hold the grip. Do not touch the tips of your fingers before placing your hand over a shape, because you will not be able to grab the shape that way. The only shapes that can be grabbed and moved are the ones that will create triads if they change position with a neighbor shape. After grabbing a shape, move your hand while holding your grip towards a neighbor shape and create two triads by changing position between the two shapes. After moving the shape to its new place release your grip. </p>
			<p>There are 4 different levels available:</p>
			<ul><li>On the first level you need to swap places between two shapes and create two triads.</li>
				<li>On the second level you need to swap places between three couples of shapes and create six different triads.</li>
				<li>On the third level you need to swap places between five couples of shapes and create ten different triads. At first you see only 18 shapes that can create 6 triads, but as you create these triads the initial shapes disappear and new shapes appear with which you can create the remaining four triads.</li>
				<li>On the fourth level you need to swap places between seven couples of shapes and create fourteen different triads. At first you see only 12 shapes that can create 4 triads, but as you create these triads the initial shapes disappear and new shapes appear with which you can create 6 triads. After creating the new 6 triads, their shapes disappear and new shapes appear that allow you to create the remaining 4 triads.</li>
				
			</ul>
			<p>At the end of each level you receive a score based on the time that passed until you created all the triads (small scores are the goal).</p>
			
			<p>To better understand the way the game works, watch the demonstration video that follows:</p>
	
					<div 
	 style="text-align: center; background: #000; float: left; width: 100%; margin-bottom: 20px;">
 <video
		style="width: 100%; max-width: 1200px;"
		muted controls>
  <source src="/videos/match-and-crash-demo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video> 
</div>
			
	
	

			
	</div>


	</div>
	


	
<p style="text-align: center; margin-top: 50px;">
<a href="index.php"><button>Match & Crash Game</button></a>
</p>
	
	


	
</main>
		


<?php include '../../../main-footer.php';?>
