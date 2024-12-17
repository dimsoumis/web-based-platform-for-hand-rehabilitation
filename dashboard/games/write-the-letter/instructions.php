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
	
	<h1 id="pageTitle">Write the Letter</h1>
	
<p style="text-align: center;">INSTRUCTIONS</p>
	
	<div class="row">
		<div class="column1">
		
		<p>In this game you are provided with the outline of a letter or a word. What you need to do is place your hand over the provided letter, touch the tips of your fingers together (do not do this before placing your hand over each letter because the system will not recognize your action) and fill the outline with color by moving your hand across the outline. The process works even if you touch together only the tips of the thumb, the pointer and the middle finger.</p>
			<p>There are 5 different levels in the game:</p>
			<ul><li>On the first level you need to write the letter "I", starting at the top edge of the outline, moving downwards.</li>
				<li>On the second level you need to write the letter "L", starting at the top edge of the outline, moving downwards and then to the left.</li>
				<li>On the third level you need to write the letter "A", starting at the lower left edge of the outline, moving to the top edge and then to the lower right edge, without releasing the grip. After reaching the lower right edge you release the grip and then you write the last vertical line using the same grip and process, starting from left to right.</li>
				<li>On the fourth level you need to write the letter "O", starting wherever you want inside the outline, moving either clockwise or counter clockwise, until you fill the whole outline.</li>
				<li>On the fifth level you need to write the word "HAT", starting at the top left edge of "H" moving downwards and releasing your grip after you fill the left vertical line of the letter, continuing to the right vertical line of "H" with the same process, and finishing the letter with the horizontal line, written from left to write. After that you write the letter "A" the same way you do in the third level, and you complete the word by writing "T" starting from top left corner going to the right, then releasing the grip after writing the horizontal line, and then you write the vertical line starting from top to bottom.</li>
			</ul>
			<p>At the end of each level you are given a score based on the time you spent until completing the level (smaller score equals better result).</p>
			
			<p>To better understand the way the game works, watch the demonstration video that follows:</p>
	
	
				<div 
	 style="text-align: center; background: #000; float: left; width: 100%; margin-bottom: 20px;">
 <video
		style="width: 100%; max-width: 1200px;"
		muted controls>
  <source src="/videos/write-the-letter-demo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video> 
</div>
	
	

			
	</div>


	</div>
	


	
<p style="text-align: center; margin-top: 50px;">
<a href="index.php"><button>Write the Letter Game</button></a>
</p>
	
	


	
</main>
		


<?php include '../../../main-footer.php';?>
