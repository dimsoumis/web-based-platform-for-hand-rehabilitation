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
	
	<h1 id="pageTitle">128</h1>
	
<p style="text-align: center;">INSTRUCTIONS</p>
	
	<div class="row">
		<div class="column1">
		
		<p>At first, you can see on the screen a numbered square (with number 1 on it) at one corner and a numbered square (also with number 1 on it) near the middle of the screen. You need to grab the square appearing on the corner, avoid the vertical line shown next to it, and put it right under the second square of the screen and release it there. When releasing a square after moving it past the vertical line, then it starts going up until touching the top of the screen or another square. When two square with the same number touch, then they merge and their numbers add together. Squares of different numbers do not merge and they just keep pilling on over the other. After releasing a square, a new one appears on the corner where you could see at the beggining the initial square. You must keep adding square together until you reach the number 128. If you pile squares one over the other until they pass the horizontal line visible on the screen, then you lose and the game stops (you also receive scores that show how much you progressed on the game, based on the number you were able to reach the added squares and the time you spent to reach there). To move a square you put your hand over the square, touch the tips of the fingers together and move your hand while holding your grip. You release a square just by releasing your grip. If you reach 128, you win the game and you receive a score based on the time you needed to finish the process (small scores are the goal).</p>
			<p>To better understand the way the game works, watch the demonstration video that follows:</p>
	
				<div 
	 style="text-align: center; background: #000; float: left; width: 100%; margin-bottom: 20px;">
 <video
		style="width: 100%; max-width: 1200px;"
		muted controls>
  <source src="/videos/128-demo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video> 
</div>
			
	
	

			
	</div>


	</div>
	


	
<p style="text-align: center; margin-top: 50px;">
<a href="index.php"><button>128 Game</button></a>
</p>
	
	


	
</main>
		


<?php include '../../../main-footer.php';?>
