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
	
	<h1 id="pageTitle">Check the Drop</h1>
	
<p style="text-align: center;">INSTRUCTIONS</p>
	
	<div class="row">
		<div class="column1">
		
		<p>In this game you can see on the screen some shapes drop in a specific order from top to bottom. The game has 4 different phases of asceding difficulty. At the first phase you see 1 shape drop, at the second you see 3 shapes drop, at the third phase you can see 6 shapes drop and at the fourth and last one you can see 10 shapes drop. What you need to do is remember the order of appearance of the shapes at each phase. After all shapes of a phase have passed through the screen, what you need to  put the shapes that appeared during the drop, in order of appearance, at the square outlines showed on the screen. The first shape that appeared at each phase goes on the outline that is at the first row and first column, the second shape of each phase goes to the outline that is at the first row and second columnt, etc. No matter what shape is correct at any phase for any position, all outlines are square. To move a shape you first need to grab it by placing your hand over it and touch the tips of your fingers together. Do not touch the tips of your fingers together before placing your hand over a shape. After grabbing a shape it follows the move of your hand as long as you keep holding the given grip. After placing a shape at its correct position and outline, you just release your grip and you repeat the process for all the shapes of each phase. You have one minute to complete as many phases as you can. The time runs only when you are at the process placing shapes in outlines, it does not run when the shapes drop on the screen. At the end of each level you receive a score based on the total amount of shapes you put in the correct outlines based on the order of their appearance at each phase of the game collectively.</p>
			
			<p>To better understand the way the game works, watch the demonstration video that follows:</p>
	
				<div 
	 style="text-align: center; background: #000; float: left; width: 100%; margin-bottom: 20px;">
 <video
		style="width: 100%; max-width: 1200px;"
		muted controls>
  <source src="/videos/check-the-drop-demo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video> 
</div>
			
	
	

			
	</div>


	</div>
	


	
<p style="text-align: center; margin-top: 50px;">
<a href="index.php"><button>Check the Drop Game</button></a>
</p>
	
	


	
</main>
		


<?php include '../../../main-footer.php';?>
