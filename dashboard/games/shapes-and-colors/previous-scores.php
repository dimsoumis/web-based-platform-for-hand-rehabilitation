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


 $sql1 = "select * from shapes_scores where user = '$user' ORDER BY reg_date DESC";  
        $result1 = mysqli_query($con, $sql1);  
        $count1 = mysqli_num_rows($result1);










$sqlStats1 = "select * from shapes_scores where user = '$user' and level = 'Level 1'";  
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

















$sqlStats2 = "select * from shapes_scores where user = '$user' and level = 'Level 2'";  
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

















$sqlStats3 = "select * from shapes_scores where user = '$user' and level = 'Level 3'";  
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






























$sqlStats4 = "select * from shapes_scores where user = '$user' and level = 'Level 4'";  
        $resultStats4 = mysqli_query($con, $sqlStats4);  
        $countStats4 = mysqli_num_rows($resultStats4);





$maxScoreRight4 = 0;
	$maxScoreLeft4 = 0;
	$minScoreRight4 = 5000;
	$minScoreLeft4 = 5000;
	$averageScoreRight4 = 0;
	$averageScoreLeft4 = 0;
$rightScoresCounter4 = 0;
$leftScoresCounter4 = 0;
 $maxScoreRightDate4;
 $maxScoreLeftDate4;
 $minScoreRightDate4;
 $minScoreLeftDate4;

		while($row = mysqli_fetch_array($resultStats4)) {
		
			$actualScore4 = $row['score'];
			$actualHand4 = $row['hand'];
			
		
			if ($actualHand4 == "Right") {
				if ($actualScore4 > $maxScoreRight4) {
					$maxScoreRight4 = $actualScore4;
					$dateOfmaxR4=$row['reg_date'];
					 $maxScoreRightDate4 = date('d-m-Y', strtotime($dateOfmaxR4));
				}
				
				$averageScoreRight4 = $averageScoreRight4 + $actualScore4;
				$rightScoresCounter4++;
				
			} else {
			if ($actualScore4 > $maxScoreLeft4) {
					$maxScoreLeft4 = $actualScore4;
				$dateOfmaxL4=$row['reg_date'];
					 $maxScoreLeftDate4 = date('d-m-Y', strtotime($dateOfmaxL4));
				}	
				
				$averageScoreLeft4 = $averageScoreLeft4 + $actualScore4;
				$leftScoresCounter4++;
					
			}
		
		
			if ($actualHand4 == "Right") {
				if ($actualScore4 < $minScoreRight4) {
					$minScoreRight4 = $actualScore4;
						$dateOfminR4=$row['reg_date'];
					 $minScoreRightDate4 = date('d-m-Y', strtotime($dateOfminR4));
				}
			} else {
			if ($actualScore4 < $minScoreLeft4) {
					$minScoreLeft4 = $actualScore4;
					$dateOfminL4=$row['reg_date'];
					 $minScoreLeftDate4 = date('d-m-Y', strtotime($dateOfminL4));
				}	
			} 
			
		
			}


			$averageScoreRight4 = $averageScoreRight4 / $rightScoresCounter4;
				$averageScoreLeft4 = $averageScoreLeft4 / $leftScoresCounter4;
























$sqlStats5 = "select * from shapes_scores where user = '$user' and level = 'Level 5'";  
        $resultStats5 = mysqli_query($con, $sqlStats5);  
        $countStats5 = mysqli_num_rows($resultStats5);





$maxScoreRight5 = 0;
	$maxScoreLeft5 = 0;
	$minScoreRight5 = 5000;
	$minScoreLeft5 = 5000;
	$averageScoreRight5 = 0;
	$averageScoreLeft5 = 0;
$rightScoresCounter5 = 0;
$leftScoresCounter5 = 0;
 $maxScoreRightDate5;
 $maxScoreLeftDate5;
 $minScoreRightDate5;
 $minScoreLeftDate5;

		while($row = mysqli_fetch_array($resultStats5)) {
		
			$actualScore5 = $row['score'];
			$actualHand5 = $row['hand'];
			
		
			if ($actualHand5 == "Right") {
				if ($actualScore5 > $maxScoreRight5) {
					$maxScoreRight5 = $actualScore5;
					$dateOfmaxR5=$row['reg_date'];
					 $maxScoreRightDate5 = date('d-m-Y', strtotime($dateOfmaxR5));
				}
				
				$averageScoreRight5 = $averageScoreRight5 + $actualScore5;
				$rightScoresCounter5++;
				
			} else {
			if ($actualScore5 > $maxScoreLeft5) {
					$maxScoreLeft5 = $actualScore5;
				$dateOfmaxL5=$row['reg_date'];
					 $maxScoreLeftDate5 = date('d-m-Y', strtotime($dateOfmaxL5));
				}	
				
				$averageScoreLeft5 = $averageScoreLeft5 + $actualScore5;
				$leftScoresCounter5++;
					
			}
		
		
			if ($actualHand5 == "Right") {
				if ($actualScore5 < $minScoreRight5) {
					$minScoreRight5 = $actualScore5;
						$dateOfminR5=$row['reg_date'];
					 $minScoreRightDate5 = date('d-m-Y', strtotime($dateOfminR5));
				}
			} else {
			if ($actualScore5 < $minScoreLeft5) {
					$minScoreLeft5 = $actualScore5;
					$dateOfminL5=$row['reg_date'];
					 $minScoreLeftDate5 = date('d-m-Y', strtotime($dateOfminL5));
				}	
			} 
			
		
			}


			$averageScoreRight5 = $averageScoreRight5 / $rightScoresCounter5;
				$averageScoreLeft5 = $averageScoreLeft5 / $leftScoresCounter5;






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
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
						<p style="text-align: center;">Level 4</p>
				<?php if($countStats4 > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Min Score (Right)</th>
			<th>Average Score (Right)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight4;
	
			echo " (on ";
		echo $maxScoreRightDate4;
			echo ")";
			
			echo "</td><td>";
			
			echo $minScoreRight4;
	
		echo " (on ";
		echo $minScoreRightDate4;
			echo ")";
			
			echo "</td><td>";
			
			echo $averageScoreRight4;
			
			echo "</td></tr>";
	
	
	
		echo "<tr>
		<th>Max Score (Left)</th>
		<th>Min Score (Left)</th>
		<th>Average Score (Left)</th>
					</tr>";
	
	
			
			echo "<tr><td>";
			
			echo $maxScoreLeft4;
	
		echo " (on ";
		echo $maxScoreLeftDate4;
			echo ")";
			
			echo "</td><td>";
			
			echo $minScoreLeft4;
			
		echo " (on ";
		echo $minScoreLeftDate4;
			echo ")";
			
			echo "</td><td>";
			
			echo $averageScoreLeft4;
			
			echo "</td></tr>";
	
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<p style="text-align: center;">Level 5</p>
				<?php if($countStats5 > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Min Score (Right)</th>
			<th>Average Score (Right)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight5;
	
			echo " (on ";
		echo $maxScoreRightDate5;
			echo ")";
			
			echo "</td><td>";
			
			echo $minScoreRight5;
	
		echo " (on ";
		echo $minScoreRightDate5;
			echo ")";
			
			echo "</td><td>";
			
			echo $averageScoreRight5;
			
			echo "</td></tr>";
	
	
	
		echo "<tr>
		<th>Max Score (Left)</th>
		<th>Min Score (Left)</th>
		<th>Average Score (Left)</th>
					</tr>";
	
	
			
			echo "<tr><td>";
			
			echo $maxScoreLeft5;
	
		echo " (on ";
		echo $maxScoreLeftDate5;
			echo ")";
			
			echo "</td><td>";
			
			echo $minScoreLeft5;
			
		echo " (on ";
		echo $minScoreLeftDate5;
			echo ")";
			
			echo "</td><td>";
			
			echo $averageScoreLeft5;
			
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
	
		
		$sqlLoop = "select * from shapes_scores where user = '$user' ORDER BY reg_date DESC LIMIT 20 OFFSET $x2";  
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
<a href="index.php"><button>Shapes & Colors Game</button></a>
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
