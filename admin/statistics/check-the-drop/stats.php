 <?php

$servername = "localhost";
$username = "mani_hab_space";
$password = "eqi9_Y619";
$dbname = "mani_hab_space";
          
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  



 $sql = "select * from check_the_drop";  
        $result = mysqli_query($con,  $sql);  
        $count = mysqli_num_rows($result);

 $sqlUsers = "select * from users";  
        $resultUsers = mysqli_query($con, $sqlUsers);  
        $countUsers = mysqli_num_rows($resultUsers);

 $sqlForStats = "select * from check_the_drop";  
        $resultForStats = mysqli_query($con, $sqlForStats);  
        $countForStats = mysqli_num_rows($resultForStats);


$sqlForHealthyStats = "SELECT * FROM check_the_drop WHERE user IN (SELECT email FROM users WHERE status = 'healthy')";
$resultForHealthyStats = mysqli_query($con, $sqlForHealthyStats);  
$countForHealthyStats = mysqli_num_rows($resultForHealthyStats);

$sqlForPatientsStats = "SELECT * FROM check_the_drop WHERE user IN (SELECT email FROM users WHERE status = 'patient')";
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

		while($row = mysqli_fetch_array($resultForStats)) {
		
			$actualScore = $row['score'];
			$actualHand = $row['hand'];
			
		
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
			
		
			}


			$averageScoreRight1 = $averageScoreRight1 / $rightScoresCounter1;
				$averageScoreLeft1 = $averageScoreLeft1 / $leftScoresCounter1;
			
if ($minScoreRight1 == 5000) {
	$minScoreRight1 = 0;
}
	if ($minScoreLeft1 == 5000) {
	$minScoreLeft1 = 0;
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













$maxScoreRightPatients = 0;
	$maxScoreLeftPatients = 0;
	$minScoreRightPatients = 5000;
	$minScoreLeftPatients = 5000;
	$averageScoreRightPatients = 0;
	$averageScoreLeftPatients = 0;
$rightScoresCounterPatients = 0;
$leftScoresCounterPatients = 0;
	
		while($row = mysqli_fetch_array($resultForPatientsStats)) {
		
			$actualScorePatients = $row['score'];
			$actualHandPatients = $row['hand'];
			
			
			if ($actualHandPatients == "Right") {
				if ($actualScorePatients > $maxScoreRightPatients) {
					$maxScoreRightPatients = $actualScorePatients;
				}
				
				$averageScoreRightPatients = $averageScoreRightPatients + $actualScorePatients;
				$rightScoresCounterPatients++;
				
			} else {
			if ($actualScorePatients > $maxScoreLeftPatients) {
					$maxScoreLeftPatients = $actualScorePatients;
				}	
				
				$averageScoreLeftPatients = $averageScoreLeftPatients + $actualScorePatients;
				$leftScoresCounterPatients++;
					
			}
		
		
			if ($actualHandPatients == "Right") {
				if ($actualScorePatients < $minScoreRightPatients) {
					$minScoreRightPatients = $actualScorePatients;
				}
			} else {
			if ($actualScorePatients < $minScoreLeftPatients) {
					$minScoreLeftPatients = $actualScorePatients;
				}	
			}
		
		
		}
			
			$averageScoreRightPatients = $averageScoreRightPatients / $rightScoresCounterPatients;
				$averageScoreLeftPatients = $averageScoreLeftPatients / $leftScoresCounterPatients;
			
if ($minScoreRightPatients == 5000) {
	$minScoreRightPatients = 0;
}
	if ($minScoreLeftPatients == 5000) {
	$minScoreLeftPatients = 0;
}



?>

<?php include '../admin-head.php';?>
		
		<main>
		<h1 id="pageTitle">Check the Drop</h1>
		
		<div class="row">
			<div class="column1">
				<h1 style="text-align: center;">Statistics</h1>
				
				<h3 style="text-align: center;">General</h3>
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
				
	

				
				
				
				
				<h3 style="text-align: center;">Patients</h3>
				
				<?php if($countForPatientsStats > 0) {
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
			
			echo $maxScoreRightPatients;
			
			echo "</td><td>";
			
			echo $maxScoreLeftPatients;
			
			echo "</td><td>";
			
			echo $minScoreRightPatients;
			
			echo "</td><td>";
			
			echo $minScoreLeftPatients;
			
			echo "</td><td>";
			
			echo $averageScoreRightPatients;
			
			echo "</td><td>";
			
			echo $averageScoreLeftPatients;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
	
				
				
			</div>
		</div>
	
			<p style="text-align: center; margin-top: 50px;">
<a href="index.php"><button>Go Back</button></a>
</p>
	
		</main>
		
		<?php include '../../../main-footer.php';?>

<?php

mysqli_close($con);

?>