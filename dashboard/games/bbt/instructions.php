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
	
	<h1 id="pageTitle">Box & Blocks</h1>
	
<p style="text-align: center;">INSTRUCTIONS</p>
	
	<div class="row">
		<div class="column1">
		
		<p>On one side of the screen (either left or right, depending on the hand you are exercising) you see some blocks. You need to put the hand you are exercising over a block and touch the tips of your fingers together, in a move imitating grabbing the virtual block. When you successfully grab a block, the nodes on your hand change their color to green. Do not touch the tips of your fingers together before placing your hand over a block, because the block will not be grabbed.</p>
			<p>While holding the grabbing grip, move your hand, and the block you are grabbing, to the other side of the partition appearing in the middle of the screen. After moving to the other side of the partition release the grip and the block you were moving will be put in place at the new side and you will be rewarded with a point. Repeat the process as many times as you can before the time runs out (you have one minute in your disposal).</p>
			<p>To better understand the way the game works, watch the demonstration video that follows:</p>
	
	
			<div 
	 style="text-align: center; background: #000; float: left; width: 100%; margin-bottom: 20px;">
 <video
		style="width: 100%; max-width: 1200px;"
		muted controls>
  <source src="/videos/bbt-demo.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video> 
</div>

	
	

			
	</div>


	</div>
	


	
<p style="text-align: center; margin-top: 50px;">
<a href="index.php"><button>Box & Blocks Game</button></a>
</p>
	
	


	
</main>
		


<?php include '../../../main-footer.php';?>
