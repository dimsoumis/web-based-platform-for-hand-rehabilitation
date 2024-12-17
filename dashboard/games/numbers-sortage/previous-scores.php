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


 $sql1 = "select * from numbers_sortage where user = '$user' ORDER BY reg_date DESC";  
        $result1 = mysqli_query($con, $sql1);  
        $count1 = mysqli_num_rows($result1);





$sqlStats1 = "select * from numbers_sortage where user = '$user' and level = 'Level 1'";  
        $resultStats1 = mysqli_query($con, $sqlStats1);  
        $countStats1 = mysqli_num_rows($resultStats1);





$maxScoreRight1 = 0;
	$maxScoreLeft1 = 0;
	$minScoreRight1 = 5000;
	$minScoreLeft1 = 5000;
	$averageScoreRight1 = 0;
	$averageScoreLeft1 = 0;
$rightScoresCounter1 = 0;
$leftScoresCounter1 = 0;
 $maxScoreRightDate1;
 $maxScoreLeftDate1;
 $minScoreRightDate1;
 $minScoreLeftDate1;

		while($row = mysqli_fetch_array($resultStats1)) {
		
			$actualScore1 = $row['score'];
			$actualHand1 = $row['hand'];
			
		
			if ($actualHand1 == "Right") {
				if ($actualScore1 > $maxScoreRight1) {
					$maxScoreRight1 = $actualScore1;
					$dateOfmaxR1=$row['reg_date'];
					 $maxScoreRightDate1 = date('d-m-Y', strtotime($dateOfmaxR1));
				}
				
				$averageScoreRight1 = $averageScoreRight1 + $actualScore1;
				$rightScoresCounter1++;
				
			} else {
			if ($actualScore1 > $maxScoreLeft1) {
					$maxScoreLeft1 = $actualScore1;
				$dateOfmaxL1=$row['reg_date'];
					 $maxScoreLeftDate1 = date('d-m-Y', strtotime($dateOfmaxL1));
				}	
				
				$averageScoreLeft1 = $averageScoreLeft1 + $actualScore1;
				$leftScoresCounter1++;
					
			}
		
		
			if ($actualHand1 == "Right") {
				if ($actualScore1 < $minScoreRight1) {
					$minScoreRight1 = $actualScore1;
						$dateOfminR1=$row['reg_date'];
					 $minScoreRightDate1 = date('d-m-Y', strtotime($dateOfminR1));
				}
			} else {
			if ($actualScore1 < $minScoreLeft1) {
					$minScoreLeft1 = $actualScore1;
					$dateOfminL1=$row['reg_date'];
					 $minScoreLeftDate1 = date('d-m-Y', strtotime($dateOfminL1));
				}	
			} 
			
		
			}


			$averageScoreRight1 = $averageScoreRight1 / $rightScoresCounter1;
				$averageScoreLeft1 = $averageScoreLeft1 / $leftScoresCounter1;

















$sqlStats2 = "select * from numbers_sortage where user = '$user' and level = 'Level 2'";  
        $resultStats2 = mysqli_query($con, $sqlStats2);  
        $countStats2 = mysqli_num_rows($resultStats2);





$maxScoreRight2 = 0;
	$maxScoreLeft2 = 0;
	$minScoreRight2 = 5000;
	$minScoreLeft2 = 5000;
	$averageScoreRight2 = 0;
	$averageScoreLeft2 = 0;
$rightScoresCounter2 = 0;
$leftScoresCounter2 = 0;
 $maxScoreRightDate2;
 $maxScoreLeftDate2;
 $minScoreRightDate2;
 $minScoreLeftDate2;

		while($row = mysqli_fetch_array($resultStats2)) {
		
			$actualScore2 = $row['score'];
			$actualHand2 = $row['hand'];
			
		
			if ($actualHand2 == "Right") {
				if ($actualScore2 > $maxScoreRight2) {
					$maxScoreRight2 = $actualScore2;
					$dateOfmaxR2=$row['reg_date'];
					 $maxScoreRightDate2 = date('d-m-Y', strtotime($dateOfmaxR2));
				}
				
				$averageScoreRight2 = $averageScoreRight2 + $actualScore2;
				$rightScoresCounter2++;
				
			} else {
			if ($actualScore2 > $maxScoreLeft2) {
					$maxScoreLeft2 = $actualScore2;
				$dateOfmaxL2=$row['reg_date'];
					 $maxScoreLeftDate2 = date('d-m-Y', strtotime($dateOfmaxL2));
				}	
				
				$averageScoreLeft2 = $averageScoreLeft2 + $actualScore2;
				$leftScoresCounter2++;
					
			}
		
		
			if ($actualHand2 == "Right") {
				if ($actualScore2 < $minScoreRight2) {
					$minScoreRight2 = $actualScore2;
						$dateOfminR2=$row['reg_date'];
					 $minScoreRightDate2 = date('d-m-Y', strtotime($dateOfminR2));
				}
			} else {
			if ($actualScore2 < $minScoreLeft2) {
					$minScoreLeft2 = $actualScore2;
					$dateOfminL2=$row['reg_date'];
					 $minScoreLeftDate2 = date('d-m-Y', strtotime($dateOfminL2));
				}	
			} 
			
		
			}


			$averageScoreRight2 = $averageScoreRight2 / $rightScoresCounter2;
				$averageScoreLeft2 = $averageScoreLeft2 / $leftScoresCounter2;

















$sqlStats3 = "select * from numbers_sortage where user = '$user' and level = 'Level 3'";  
        $resultStats3 = mysqli_query($con, $sqlStats3);  
        $countStats3 = mysqli_num_rows($resultStats3);





$maxScoreRight3 = 0;
	$maxScoreLeft3 = 0;
	$minScoreRight3 = 5000;
	$minScoreLeft3 = 5000;
	$averageScoreRight3 = 0;
	$averageScoreLeft3 = 0;
$rightScoresCounter3 = 0;
$leftScoresCounter3 = 0;
 $maxScoreRightDate3;
 $maxScoreLeftDate3;
 $minScoreRightDate3;
 $minScoreLeftDate3;

		while($row = mysqli_fetch_array($resultStats3)) {
		
			$actualScore3 = $row['score'];
			$actualHand3 = $row['hand'];
			
		
			if ($actualHand3 == "Right") {
				if ($actualScore3 > $maxScoreRight3) {
					$maxScoreRight3 = $actualScore3;
					$dateOfmaxR3=$row['reg_date'];
					 $maxScoreRightDate3 = date('d-m-Y', strtotime($dateOfmaxR3));
				}
				
				$averageScoreRight3 = $averageScoreRight3 + $actualScore3;
				$rightScoresCounter3++;
				
			} else {
			if ($actualScore3 > $maxScoreLeft3) {
					$maxScoreLeft3 = $actualScore3;
				$dateOfmaxL3=$row['reg_date'];
					 $maxScoreLeftDate3 = date('d-m-Y', strtotime($dateOfmaxL3));
				}	
				
				$averageScoreLeft3 = $averageScoreLeft3 + $actualScore3;
				$leftScoresCounter3++;
					
			}
		
		
			if ($actualHand3 == "Right") {
				if ($actualScore3 < $minScoreRight3) {
					$minScoreRight3 = $actualScore3;
						$dateOfminR3=$row['reg_date'];
					 $minScoreRightDate3 = date('d-m-Y', strtotime($dateOfminR3));
				}
			} else {
			if ($actualScore3 < $minScoreLeft3) {
					$minScoreLeft3 = $actualScore3;
					$dateOfminL3=$row['reg_date'];
					 $minScoreLeftDate3 = date('d-m-Y', strtotime($dateOfminL3));
				}	
			} 
			
		
			}


			$averageScoreRight3 = $averageScoreRight3 / $rightScoresCounter3;
				$averageScoreLeft3 = $averageScoreLeft3 / $leftScoresCounter3;




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
	
	<h1 id="pageTitle">Numbers Sortage</h1>
	
<p style="text-align: center;">Check the previous scores you have achieved (lower scores are better).</p>
	
	
	
	<div class="row">
				<div class="column1">
				<h3 style="text-align: center;">Statistics</h3>
					<p style="text-align: center;">Level 1</p>
				<?php if($countStats1 > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Min Score (Right)</th>
			<th>Average Score (Right)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight1;
	
			echo " (on ";
		echo $maxScoreRightDate1;
			echo ")";
			
			echo "</td><td>";
			
			echo $minScoreRight1;
	
		echo " (on ";
		echo $minScoreRightDate1;
			echo ")";
			
			echo "</td><td>";
			
			echo $averageScoreRight1;
			
			echo "</td></tr>";
	
	
	
		echo "<tr>
		<th>Max Score (Left)</th>
		<th>Min Score (Left)</th>
		<th>Average Score (Left)</th>
					</tr>";
	
	
			
			echo "<tr><td>";
			
			echo $maxScoreLeft1;
	
		echo " (on ";
		echo $maxScoreLeftDate1;
			echo ")";
			
			echo "</td><td>";
			
			echo $minScoreLeft1;
			
		echo " (on ";
		echo $minScoreLeftDate1;
			echo ")";
			
			echo "</td><td>";
			
			echo $averageScoreLeft1;
			
			echo "</td></tr>";
	
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
					
					
					
					
					
					
						<p style="text-align: center;">Level 2</p>
				<?php if($countStats2 > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Min Score (Right)</th>
			<th>Average Score (Right)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight2;
	
			echo " (on ";
		echo $maxScoreRightDate2;
			echo ")";
			
			echo "</td><td>";
			
			echo $minScoreRight2;
	
		echo " (on ";
		echo $minScoreRightDate2;
			echo ")";
			
			echo "</td><td>";
			
			echo $averageScoreRight2;
			
			echo "</td></tr>";
	
	
	
		echo "<tr>
		<th>Max Score (Left)</th>
		<th>Min Score (Left)</th>
		<th>Average Score (Left)</th>
					</tr>";
	
	
			
			echo "<tr><td>";
			
			echo $maxScoreLeft2;
	
		echo " (on ";
		echo $maxScoreLeftDate2;
			echo ")";
			
			echo "</td><td>";
			
			echo $minScoreLeft2;
			
		echo " (on ";
		echo $minScoreLeftDate2;
			echo ")";
			
			echo "</td><td>";
			
			echo $averageScoreLeft2;
			
			echo "</td></tr>";
	
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
						<p style="text-align: center;">Level 3</p>
				<?php if($countStats3 > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Min Score (Right)</th>
			<th>Average Score (Right)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight3;
	
			echo " (on ";
		echo $maxScoreRightDate3;
			echo ")";
			
			echo "</td><td>";
			
			echo $minScoreRight3;
	
		echo " (on ";
		echo $minScoreRightDate3;
			echo ")";
			
			echo "</td><td>";
			
			echo $averageScoreRight3;
			
			echo "</td></tr>";
	
	
	
		echo "<tr>
		<th>Max Score (Left)</th>
		<th>Min Score (Left)</th>
		<th>Average Score (Left)</th>
					</tr>";
	
	
			
			echo "<tr><td>";
			
			echo $maxScoreLeft3;
	
		echo " (on ";
		echo $maxScoreLeftDate3;
			echo ")";
			
			echo "</td><td>";
			
			echo $minScoreLeft3;
			
		echo " (on ";
		echo $minScoreLeftDate3;
			echo ")";
			
			echo "</td><td>";
			
			echo $averageScoreLeft3;
			
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
	
		
		$sqlLoop = "select * from numbers_sortage where user = '$user' ORDER BY reg_date DESC LIMIT 20 OFFSET $x2";  
        $resultLoop = mysqli_query($con, $sqlLoop);  
        $countLoop = mysqli_num_rows($resultLoop);
		$x2 = $x2 + 20;
		
echo "<table style='display: none;' id='resultsTableNo";
echo $x;
echo "'>
					<tr>
						<th>Level</th>
						<th>Score</th>
					<th>Hand</th>
						<th>Date</th>
					</tr>";
		
		while($rowLoop = mysqli_fetch_array($resultLoop))
{
			
				
			
					echo "<tr><td>";
				echo $rowLoop['level'];
			echo "</td><td>";
					echo $rowLoop['score'];
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
<a href="index.php"><button>Numbers Sortage Game</button></a>
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
