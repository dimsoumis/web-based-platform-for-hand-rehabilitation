 <?php

$servername = "localhost";
$username = "mani_hab_space";
$password = "eqi9_Y619";
$dbname = "mani_hab_space";
          
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  



 $sql = "select * from shapes_scores";  
        $result = mysqli_query($con,  $sql);  
        $count = mysqli_num_rows($result);

 $sqlUsers = "select * from users";  
        $resultUsers = mysqli_query($con, $sqlUsers);  
        $countUsers = mysqli_num_rows($resultUsers);

 $sqlForStats = "select * from shapes_scores";  
        $resultForStats = mysqli_query($con, $sqlForStats);  
        $countForStats = mysqli_num_rows($resultForStats);


$sqlForHealthyStats = "SELECT * FROM shapes_scores WHERE user IN (SELECT email FROM users WHERE status = 'healthy')";
$resultForHealthyStats = mysqli_query($con, $sqlForHealthyStats);  
$countForHealthyStats = mysqli_num_rows($resultForHealthyStats);

$sqlForPatientsStats = "SELECT * FROM shapes_scores WHERE user IN (SELECT email FROM users WHERE status = 'patient')";
$resultForPatientsStats = mysqli_query($con, $sqlForPatientsStats);  
$countForPatientsStats = mysqli_num_rows($resultForPatientsStats);












$maxScoreRight1 = 0;
	$maxScoreLeft1 = 0;
	$minScoreRight1 = 5000;
	$minScoreLeft1 = 5000;
	$averageScoreRight1 = 0;
	$averageScoreLeft1 = 0;
$rightScoresCounter1 = 0;
$leftScoresCounter1 = 0;

$maxScoreRight2 = 0;
	$maxScoreLeft2 = 0;
	$minScoreRight2 = 5000;
	$minScoreLeft2 = 5000;
	$averageScoreRight2 = 0;
	$averageScoreLeft2 = 0;
$rightScoresCounter2 = 0;
$leftScoresCounter2 = 0;


$maxScoreRight3 = 0;
	$maxScoreLeft3 = 0;
	$minScoreRight3 = 5000;
	$minScoreLeft3 = 5000;
	$averageScoreRight3 = 0;
	$averageScoreLeft3 = 0;
$rightScoresCounter3 = 0;
$leftScoresCounter3 = 0;


$maxScoreRight4 = 0;
	$maxScoreLeft4 = 0;
	$minScoreRight4 = 5000;
	$minScoreLeft4 = 5000;
	$averageScoreRight4 = 0;
	$averageScoreLeft4 = 0;
$rightScoresCounter4 = 0;
$leftScoresCounter4 = 0;

$maxScoreRight5 = 0;
	$maxScoreLeft5 = 0;
	$minScoreRight5 = 5000;
	$minScoreLeft5 = 5000;
	$averageScoreRight5 = 0;
	$averageScoreLeft5 = 0;
$rightScoresCounter5 = 0;
$leftScoresCounter5 = 0;
	
		while($row = mysqli_fetch_array($resultForStats)) {
		
			$actualScore = $row['score'];
			$actualHand = $row['hand'];
			$actualLevel = $row['level'];
			
			if ($actualLevel == "Level 1") {
			if ($actualHand == "Right") {
				if ($actualScore > $maxScoreRight1) {
					$maxScoreRight1 = $actualScore;
				}
				
				$averageScoreRight1 = $averageScoreRight1 + $actualScore;
				$rightScoresCounter1++;
				
			} else {
			if ($actualScore > $maxScoreLeft1) {
					$maxScoreLeft1 = $actualScore;
				}	
				
				$averageScoreLeft1 = $averageScoreLeft1 + $actualScore;
				$leftScoresCounter1++;
					
			}
		
		
			if ($actualHand == "Right") {
				if ($actualScore < $minScoreRight1) {
					$minScoreRight1 = $actualScore;
				}
			} else {
			if ($actualScore < $minScoreLeft1) {
					$minScoreLeft1 = $actualScore;
				}	
			}
		} else if ($actualLevel == "Level 2") {
			if ($actualHand == "Right") {
				if ($actualScore > $maxScoreRight2) {
					$maxScoreRight2 = $actualScore;
				}
				
				$averageScoreRight2 = $averageScoreRight2 + $actualScore;
				$rightScoresCounter2++;
				
			} else {
			if ($actualScore > $maxScoreLeft2) {
					$maxScoreLeft2 = $actualScore;
				}	
				
				$averageScoreLeft2 = $averageScoreLeft2 + $actualScore;
				$leftScoresCounter2++;
					
			}
		
		
			if ($actualHand == "Right") {
				if ($actualScore < $minScoreRight2) {
					$minScoreRight2 = $actualScore;
				}
			} else {
			if ($actualScore < $minScoreLeft2) {
					$minScoreLeft2 = $actualScore;
				}	
			}
		} else if ($actualLevel == "Level 3") {
			if ($actualHand == "Right") {
				if ($actualScore > $maxScoreRight3) {
					$maxScoreRight3 = $actualScore;
				}
				
				$averageScoreRight3 = $averageScoreRight3 + $actualScore;
				$rightScoresCounter3++;
				
			} else {
			if ($actualScore > $maxScoreLeft3) {
					$maxScoreLeft3 = $actualScore;
				}	
				
				$averageScoreLeft3 = $averageScoreLeft3 + $actualScore;
				$leftScoresCounter3++;
					
			}
		
		
			if ($actualHand == "Right") {
				if ($actualScore < $minScoreRight3) {
					$minScoreRight3 = $actualScore;
				}
			} else {
			if ($actualScore < $minScoreLeft3) {
					$minScoreLeft3 = $actualScore;
				}	
			}
		} else if ($actualLevel == "Level 4") {
			if ($actualHand == "Right") {
				if ($actualScore > $maxScoreRight4) {
					$maxScoreRight4 = $actualScore;
				}
				
				$averageScoreRight4 = $averageScoreRight4 + $actualScore;
				$rightScoresCounter4++;
				
			} else {
			if ($actualScore > $maxScoreLeft4) {
					$maxScoreLeft4 = $actualScore;
				}	
				
				$averageScoreLeft4 = $averageScoreLeft4 + $actualScore;
				$leftScoresCounter4++;
					
			}
		
		
			if ($actualHand == "Right") {
				if ($actualScore < $minScoreRight4) {
					$minScoreRight4 = $actualScore;
				}
			} else {
			if ($actualScore < $minScoreLeft4) {
					$minScoreLeft4 = $actualScore;
				}	
			}
		} else if ($actualLevel == "Level 5") {
			if ($actualHand == "Right") {
				if ($actualScore > $maxScoreRight5) {
					$maxScoreRight5 = $actualScore;
				}
				
				$averageScoreRight5 = $averageScoreRight5 + $actualScore;
				$rightScoresCounter5++;
				
			} else {
			if ($actualScore > $maxScoreLeft5) {
					$maxScoreLeft5 = $actualScore;
				}	
				
				$averageScoreLeft5 = $averageScoreLeft5 + $actualScore;
				$leftScoresCounter5++;
					
			}
		
		
			if ($actualHand == "Right") {
				if ($actualScore < $minScoreRight5) {
					$minScoreRight5 = $actualScore;
				}
			} else {
			if ($actualScore < $minScoreLeft5) {
					$minScoreLeft5 = $actualScore;
				}	
			}
		}
			
			
			
			
			}


			$averageScoreRight1 = $averageScoreRight1 / $rightScoresCounter1;
				$averageScoreLeft1 = $averageScoreLeft1 / $leftScoresCounter1;
			
if ($minScoreRight1 == 5000) {
	$minScoreRight1 = 0;
}
	if ($minScoreLeft1 == 5000) {
	$minScoreLeft1 = 0;
}
		

			$averageScoreRight2 = $averageScoreRight2 / $rightScoresCounter2;
				$averageScoreLeft2 = $averageScoreLeft2 / $leftScoresCounter2;
			
if ($minScoreRight2 == 5000) {
	$minScoreRight2 = 0;
}
	if ($minScoreLeft2 == 5000) {
	$minScoreLeft2 = 0;
}



			$averageScoreRight3 = $averageScoreRight3 / $rightScoresCounter3;
				$averageScoreLeft3 = $averageScoreLeft3 / $leftScoresCounter3;
			
if ($minScoreRight3 == 5000) {
	$minScoreRight3 = 0;
}
	if ($minScoreLeft3 == 5000) {
	$minScoreLeft3 = 0;
}



			$averageScoreRight4 = $averageScoreRight4 / $rightScoresCounter4;
				$averageScoreLeft4 = $averageScoreLeft4 / $leftScoresCounter4;
			
if ($minScoreRight4 == 5000) {
	$minScoreRight4 = 0;
}
	if ($minScoreLeft4 == 5000) {
	$minScoreLeft4 = 0;
}




			$averageScoreRight5 = $averageScoreRight5 / $rightScoresCounter5;
				$averageScoreLeft5 = $averageScoreLeft5 / $leftScoresCounter5;
			
if ($minScoreRight5 == 5000) {
	$minScoreRight5 = 0;
}
	if ($minScoreLeft5 == 5000) {
	$minScoreLeft5 = 0;
}












	$maxScoreRightHealthy = 0;
	$maxScoreLeftHealthy = 0;
	$minScoreRightHealthy = 5000;
	$minScoreLeftHealthy = 5000;
	$averageScoreRightHealthy = 0;
	$averageScoreLeftHealthy = 0;
$rightScoresCounterHealthy = 0;
$leftScoresCounterHealthy = 0;
	
		while($row = mysqli_fetch_array($resultForHealthyStats)) {
		
			$actualScoreHealthy = $row['score'];
			$actualHandHealthy = $row['hand'];
			
			
			if ($actualHandHealthy == "Right") {
				if ($actualScoreHealthy > $maxScoreRightHealthy) {
					$maxScoreRightHealthy = $actualScoreHealthy;
				}
				
				$averageScoreRightHealthy = $averageScoreRightHealthy + $actualScoreHealthy;
				$rightScoresCounterHealthy++;
				
			} else {
			if ($actualScoreHealthy > $maxScoreLeftHealthy) {
					$maxScoreLeftHealthy = $actualScoreHealthy;
				}	
				
				$averageScoreLeftHealthy = $averageScoreLeftHealthy + $actualScoreHealthy;
				$leftScoresCounterHealthy++;
					
			}
		
		
			if ($actualHandHealthy == "Right") {
				if ($actualScoreHealthy < $minScoreRightHealthy) {
					$minScoreRightHealthy = $actualScoreHealthy;
				}
			} else {
			if ($actualScoreHealthy < $minScoreLeftHealthy) {
					$minScoreLeftHealthy = $actualScoreHealthy;
				}	
			}
		
		
		}
			
			$averageScoreRightHealthy = $averageScoreRightHealthy / $rightScoresCounterHealthy;
				$averageScoreLeftHealthy = $averageScoreLeftHealthy / $leftScoresCounterHealthy;
			
if ($minScoreRightHealthy == 5000) {
	$minScoreRightHealthy = 0;
}
	if ($minScoreLeftHealthy == 5000) {
	$minScoreLeftHealthy = 0;
}





?>

<html>
	<head>
		<meta charset="utf-8">
		  <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
		<title>Shapes and Colors - Hand Rehabilitation Platform</title>
	<link rel="icon" type="image/x-icon" href="/images/favicon.png">
		
	<link rel="stylesheet" href="/styles/main.css">
	</head>
	<body>
		
		<header>
			<img id="logo" src="/images/logo-hor.png" />
		

			
		</header>
		
		
		<h1 style="text-align: center; width: 100%;">Shapes and Colors</h1>
		
		<div class="row">
			<div class="column1">
				<h1 style="text-align: center;">Statistics</h1>
				
				<h3 style="text-align: center;">General / Level 1</h3>
				<?php if($count > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Max Score (Left)</th>
		<th>Min Score (Right)</th>
		<th>Min Score (Left)</th>
			<th>Average Score (Right)</th>
		<th>Average Score (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight1;
			
			echo "</td><td>";
			
			echo $maxScoreLeft1;
			
			echo "</td><td>";
			
			echo $minScoreRight1;
			
			echo "</td><td>";
			
			echo $minScoreLeft1;
			
			echo "</td><td>";
			
			echo $averageScoreRight1;
			
			echo "</td><td>";
			
			echo $averageScoreLeft1;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
				
				
				
				<h3 style="text-align: center;">General / Level 2</h3>
				<?php if($count > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Max Score (Left)</th>
		<th>Min Score (Right)</th>
		<th>Min Score (Left)</th>
			<th>Average Score (Right)</th>
		<th>Average Score (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight2;
			
			echo "</td><td>";
			
			echo $maxScoreLeft2;
			
			echo "</td><td>";
			
			echo $minScoreRight2;
			
			echo "</td><td>";
			
			echo $minScoreLeft2;
			
			echo "</td><td>";
			
			echo $averageScoreRight2;
			
			echo "</td><td>";
			
			echo $averageScoreLeft2;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
				
				
				
				<h3 style="text-align: center;">General / Level 3</h3>
				<?php if($count > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Max Score (Left)</th>
		<th>Min Score (Right)</th>
		<th>Min Score (Left)</th>
			<th>Average Score (Right)</th>
		<th>Average Score (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight3;
			
			echo "</td><td>";
			
			echo $maxScoreLeft3;
			
			echo "</td><td>";
			
			echo $minScoreRight3;
			
			echo "</td><td>";
			
			echo $minScoreLeft3;
			
			echo "</td><td>";
			
			echo $averageScoreRight3;
			
			echo "</td><td>";
			
			echo $averageScoreLeft3;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
				
				
				<h3 style="text-align: center;">General / Level 4</h3>
				<?php if($count > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Max Score (Left)</th>
		<th>Min Score (Right)</th>
		<th>Min Score (Left)</th>
			<th>Average Score (Right)</th>
		<th>Average Score (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight4;
			
			echo "</td><td>";
			
			echo $maxScoreLeft4;
			
			echo "</td><td>";
			
			echo $minScoreRight4;
			
			echo "</td><td>";
			
			echo $minScoreLeft4;
			
			echo "</td><td>";
			
			echo $averageScoreRight4;
			
			echo "</td><td>";
			
			echo $averageScoreLeft4;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
				
				
				
				<h3 style="text-align: center;">General / Level 5</h3>
				<?php if($count > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Max Score (Left)</th>
		<th>Min Score (Right)</th>
		<th>Min Score (Left)</th>
			<th>Average Score (Right)</th>
		<th>Average Score (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRight5;
			
			echo "</td><td>";
			
			echo $maxScoreLeft5;
			
			echo "</td><td>";
			
			echo $minScoreRight5;
			
			echo "</td><td>";
			
			echo $minScoreLeft5;
			
			echo "</td><td>";
			
			echo $averageScoreRight5;
			
			echo "</td><td>";
			
			echo $averageScoreLeft5;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
				
				
				
					<h3 style="text-align: center;">Healthy</h3>
				
				<?php if($countForHealthyStats > 0) {
		echo "<table>
					<tr>
						<th>Max Score (Right)</th>
		<th>Max Score (Left)</th>
		<th>Min Score (Right)</th>
		<th>Min Score (Left)</th>
			<th>Average Score (Right)</th>
		<th>Average Score (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $maxScoreRightHealthy;
			
			echo "</td><td>";
			
			echo $maxScoreLeftHealthy;
			
			echo "</td><td>";
			
			echo $minScoreRightHealthy;
			
			echo "</td><td>";
			
			echo $minScoreLeftHealthy;
			
			echo "</td><td>";
			
			echo $averageScoreRightHealthy;
			
			echo "</td><td>";
			
			echo $averageScoreLeftHealthy;
			
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
				<h1 style="text-align: center;">Users' Scores</h1>
				
					<?php if($count > 0) {
	
	echo "<table>
					<tr>
						<th>Score</th>
					<th>Exercise Hand</th>
					<th>Dominant Hand</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Status</th>
						<th>Date</th>
					</tr>";
		while($row = mysqli_fetch_array($result))
{
					echo "<tr><td>";
				echo $row['score'];
			echo "</td><td>";
				echo $row['hand'];
	echo "</td><td>";	
			
			$defineUser = $row['user'];
		 $sqlInLoop = "select * from users where email = '$defineUser'";  
        $resultInLoop = mysqli_query($con, $sqlInLoop);  
        $countInLoop = mysqli_num_rows($resultInLoop);	
			
				while($rowInLoop = mysqli_fetch_array($resultInLoop)) {
			echo $rowInLoop['hand'];
					echo "</td><td>";	
					echo $rowInLoop['age'];
					echo "</td><td>";	
					echo $rowInLoop['gender'];
					echo "</td><td>";	
					echo $rowInLoop['status'];
					echo "</td><td>";	
					
				}
			
$dateOfX=$row['reg_date'];
echo date('H:i / d-m-Y', strtotime($dateOfX));
			
	echo "</td></tr>";
				}
	echo "</table>";
	} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
			</div>
			
			
			
		
		</div>	
			
		
		
		
	</body>
</html>

<?php

mysqli_close($con);

?>