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
	
	<h1 id="pageTitle">Shapes & Colors</h1>
	
<p style="text-align: center;">INSTRUCTIONS</p>
	
	<div class="row">
		<div class="column1">
		
		<p>You can see on the screen shapes of different colors, and their outlines. What you need to do is put the hand you are exercising each time over a shape and touch the tips of your fingers together, in a move imitating grabbing the virtual shape. When you grab a shape successfully, the nodes appearing on your hand turn to green. Do not touch the tips of your fingers together before placing your hand over a shape, because the shape will not be grabbed this way.</p>
			<p>After grabbing a shape, While holding the grip, move your hand, and thus the shape you are grabbing, and put it on the outline that matches either its shape or its color (depending on the level you are exercising in). When you have moved a shape to its outline, release your grip and make sure the shape has been placed in the outline. Repeat the process for all the shapes available on the screen. The goal is to move all the shapes in their outlines as quick as possible. After completing a level, you are given a score based on the time passed until finishing a level (lower score equals better result).</p>
			<p>There are 5 different levels:</p>
			<ul><li>Level 1 gives you 3 different shapes to match to their outlines</li>
				<li>Level 2 gives you 3 identical shapes of different colors to match to their outlines</li>
			<li>Level 3 gives you 5 different shapes to match to their outlines</li>
				<li>Level 4 gives you 5 identical shapes of different colors to match to their outlines</li>
				<li>Level 5 gives you 10 shapes groupped in 5 couples of different shapes, each shape of a couple having a different color. At first you see only 5 shapes, but as you match them to their outlines (based both on shape and color) the initial shapes disappear and 5 new shapes and their respective outlines appear.</li></ul>
			
			<p>To better understand the way the game works, watch the demonstration video that follows:</p>
	
	<div 
	 style="text-align: center; background: #000; float: left; width: 100%; margin-bottom: 20px;">
 <video
		style="width: 100%; max-width: 1200px;"
		muted controls>
  <source src="/videos/shapes-and-colors-demo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video> 
</div>
			
	
	

			
	</div>


	</div>
	


	
<p style="text-align: center; margin-top: 50px;">
<a href="index.php"><button>Shapes & Colors Game</button></a>
</p>
	
	


	
</main>
		


<?php include '../../../main-footer.php';?>
