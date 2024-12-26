 <?php
session_start();
if(!isset($_SESSION['userEmail'])){
   header("Location:https://mani-hab.space");
}

$servername = "localhost";
$username = "mani_hab_space";
$password = "eqi9_Y619";
$dbname = "mani_hab_space";
          
   $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  

$user = $_SESSION['userEmail'];  
      
        //to prevent from mysqli injection  
        $user = stripcslashes($user);    
        $user = mysqli_real_escape_string($con, $user); 


 $sql1 = "select * from ekatoneikosiokto where user = '$user' ORDER BY reg_date DESC";  
        $result1 = mysqli_query($con, $sql1);  
        $count1 = mysqli_num_rows($result1);


$sqlStats = "select * from ekatoneikosiokto where user = '$user'";  
        $resultStats = mysqli_query($con, $sqlStats);  
        $countStats = mysqli_num_rows($resultStats);





$maxScoreRight = 0;
$maxScoreRightTime = 0;
	$maxScoreLeft = 0;
$maxScoreLeftTime = 0;
	$minScoreRight = 5000;
$minScoreRightTime = 5000;
	$minScoreLeft = 5000;
$minScoreLeftTime = 5000;
	$averageScoreRight = 0;
$averageScoreRightTime = 0;
	$averageScoreLeft = 0;
$averageScoreLeftTime = 0;
$rightScoresCounter = 0;
$leftScoresCounter = 0;
 $maxScoreRightDate;
 $maxScoreLeftDate;
 $minScoreRightDate;
 $minScoreLeftDate;

		while($row = mysqli_fetch_array($resultStats)) {
		
			$actualScore = $row['score'];
			$actualHand = $row['hand'];
			
		
			if ($actualHand == "Right") {
				if ($actualScore > $maxScoreRight) {
					$maxScoreRight = $actualScore;
					$maxScoreRightTime = $row['time'];
					$dateOfmaxR=$row['reg_date'];
					 $maxScoreRightDate = date('d-m-Y', strtotime($dateOfmaxR));
				} else if ($actualScore == $maxScoreRight) {
					if ($row['time'] < $maxScoreRightTime) {
					$maxScoreRightTime = $row['time'];
					$dateOfmaxR=$row['reg_date'];
					 $maxScoreRightDate = date('d-m-Y', strtotime($dateOfmaxR));
				}
				}
				
				$averageScoreRight = $averageScoreRight + $actualScore;
				$averageScoreRightTime = $averageScoreRightTime + $row['time'];
				$rightScoresCounter++;
				
			} else {
			if ($actualScore > $maxScoreLeft) {
					$maxScoreLeft = $actualScore;
				$maxScoreLeftTime = $row['time'];
				$dateOfmaxL=$row['reg_date'];
					 $maxScoreLeftDate = date('d-m-Y', strtotime($dateOfmaxL));
				} else if ($actualScore == $maxScoreLeft) {
					if ($row['time'] < $maxScoreLeftTime) {
					$maxScoreLeftTime = $row['time'];
					$dateOfmaxL=$row['reg_date'];
					 $maxScoreLeftDate = date('d-m-Y', strtotime($dateOfmaxL));
				}
				}	 
				
				$averageScoreLeft = $averageScoreLeft + $actualScore;
				$averageScoreLeftTime = $averageScoreLeftTime + $row['time'];
				$leftScoresCounter++;
					
			}
		
		
			if ($actualHand == "Right") {
				if ($actualScore < $minScoreRight) {
					$minScoreRight = $actualScore;
					$minScoreRightTime = $row['time'];
						$dateOfminR=$row['reg_date'];
					 $minScoreRightDate = date('d-m-Y', strtotime($dateOfminR));
				} else if ($actualScore == $minScoreRight) {
					if ($row['time'] > $minScoreRightTime) {
					$minScoreRightTime = $row['time'];
					$dateOfminR=$row['reg_date'];
					 $minScoreRightDate = date('d-m-Y', strtotime($dateOfminR));
				}
				}
			} else {
			if ($actualScore < $minScoreLeft) {
					$minScoreLeft = $actualScore;
				$minScoreLeftTime = $row['time'];
					$dateOfminL=$row['reg_date'];
					 $minScoreLeftDate = date('d-m-Y', strtotime($dateOfminL));
				} else if ($actualScore == $minScoreLeft) {
					if ($row['time'] > $minScoreLeftTime) {
					$minScoreLeftTime = $row['time'];
					$dateOfminL=$row['reg_date'];
					 $minScoreLeftDate = date('d-m-Y', strtotime($dateOfminL));
				}
				}	
			} 
			
		
			}


			$averageScoreRight = $averageScoreRight / $rightScoresCounter;
				$averageScoreLeft = $averageScoreLeft / $leftScoresCounter;
		$averageScoreRightTime = $averageScoreRightTime / $rightScoresCounter;
				$averageScoreLeftTime = $averageScoreLeftTime / $leftScoresCounter;


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
	
<p style="text-align: center;">Check the previous scores you have achieved (for score column higher scores are better, while for time column lower scores are better).</p>
	
		<div class="row">
				<div class="column1">
				<h3 style="text-align: center;">Statistics</h3>
				<?php if($countStats > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Min Score (Right)</th>
			<th>Average Score (Right)</th>
					</tr>";
	

			
			
			echo "<tr><td>Score: ";
			
			echo $maxScoreRight;
	
	echo "<br> Time: ";
	
	echo $maxScoreRightTime;
	
			echo "<br> (on ";
		echo $maxScoreRightDate;
			echo ")";
			
			echo "</td><td> Score: ";
			
			echo $minScoreRight;
	
		echo "<br> Time: ";
	
	echo $minScoreRightTime;
	
		echo "<br> (on ";
		echo $minScoreRightDate;
			echo ")";
			
			echo "</td><td>Score: ";
			
			echo $averageScoreRight;
	
		echo "<br> Time: ";
	
	echo $averageScoreRightTime;
			
			echo "</td></tr>";
	
	
	
		echo "<tr>
		<th>Max Score (Left)</th>
		<th>Min Score (Left)</th>
		<th>Average Score (Left)</th>
					</tr>";
	
	
			
					echo "<tr><td>Score: ";
			
			echo $maxScoreLeft;
	
	echo "<br> Time: ";
	
	echo $maxScoreLeftTime;
	
			echo "<br> (on ";
		echo $maxScoreLeftDate;
			echo ")";
			
			echo "</td><td> Score: ";
			
			echo $minScoreLeft;
	
		echo "<br> Time: ";
	
	echo $minScoreLeftTime;
	
		echo "<br> (on ";
		echo $minScoreLeftDate;
			echo ")";
			
			echo "</td><td>Score: ";
			
			echo $averageScoreLeft;
	
		echo "<br> Time: ";
	
	echo $averageScoreLeftTime;
			
			echo "</td></tr>";
	
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
			</div>
	
	</div>
	
	
	
	
	
	
	
	
		<div class="row">

		<div class="column1">
		<h3 style="text-align: center;">Individual Scores</h3>
		
		<?php if($count1 > 0) {
	
	
	
	
	
	
	
	
	$noOfPages = intdiv($count1, 20);
	
	if (fmod($count1, 20) > 0) {
	$noOfPages = $noOfPages + 1;
	}
	
	$currentPage = 1;
	
	
	

	
	
	
	$x2 = 0;
	for ($x = 1; $x <= $noOfPages; $x++) {
	
		
		$sqlLoop = "select * from ekatoneikosiokto where user = '$user' ORDER BY reg_date DESC LIMIT 20 OFFSET $x2";  
        $resultLoop = mysqli_query($con, $sqlLoop);  
        $countLoop = mysqli_num_rows($resultLoop);
		$x2 = $x2 + 20;
		
echo "<table style='display: none;' id='resultsTableNo";
echo $x;
echo "'>
					<tr>
						<th>Score</th>
						<th>Time</th>
					<th>Hand</th>
						<th>Date</th>
					</tr>";
		
		while($rowLoop = mysqli_fetch_array($resultLoop))
{
			
				
			
					echo "<tr><td>";
					echo $rowLoop['score'];
			echo "</td><td>";
			echo $rowLoop['time'];
			echo "</td><td>";
				echo $rowLoop['hand'];
	echo "</td><td>";	
			
$dateOfX=$rowLoop['reg_date'];
echo date('H:i / d-m-Y', strtotime($dateOfX));
			
	echo "</td></tr>";
			
				
				}
echo "</table>";
	}
	
	
	
	
	
	
	
	
	
	
	
	echo "<br><p style='text-align: center;'> Page <span id='curActivePage'>";
	echo $currentPage;
	echo "</span> of ";
	echo $noOfPages;	
	echo "</p>";
			
			
			
			
			
			
			
			
			
			
			
			
		} 	else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
			
	</div>


	</div>
	

<p id="navButtonsArea" style="text-align: center; display: none;">
<button id="prevTableButton">Prev</button>&nbsp;&nbsp;&nbsp;<button id="nextTableButton">Next</button>
</p>
	
<p style="text-align: center; margin-top: 50px;">
<a href="index.php"><button>128 Game</button></a>
</p>
	
	<p style="text-align: center;">
<a href="../../previous-scores/index.php"><button>Previous Scores List</button></a>
</p>


	
</main>
		
		<script>
		
			 var noOfTables = "<?php echo $noOfPages; ?>";
			if (noOfTables > 0) {
				var activeTable = 1;
			document.getElementById("resultsTableNo" + activeTable).style.display = "block";
				
				if (noOfTables > 1) {
				document.getElementById("navButtonsArea").style.display = "block";
				}
				
				document.getElementById("nextTableButton").addEventListener("click", goToNextTable);
				function goToNextTable() {
					if (activeTable < noOfTables) {
					document.getElementById("resultsTableNo" + activeTable).style.display = "none";
						activeTable++;
						document.getElementById("resultsTableNo" + activeTable).style.display = "block";
						document.getElementById("curActivePage").innerHTML = activeTable;
				}
				}	
						document.getElementById("prevTableButton").addEventListener("click", goToPrevTable);
				function goToPrevTable() {
					if (activeTable > 1) {
					document.getElementById("resultsTableNo" + activeTable).style.display = "none";
						activeTable--;
						document.getElementById("resultsTableNo" + activeTable).style.display = "block";
						document.getElementById("curActivePage").innerHTML = activeTable;
				}
				}
			}
			
		</script>

<?php include '../../../main-footer.php';?>
