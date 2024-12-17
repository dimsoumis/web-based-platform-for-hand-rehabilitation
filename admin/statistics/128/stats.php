 <?php

$servername = "localhost";
$username = "mani_hab_space";
$password = "eqi9_Y619";
$dbname = "mani_hab_space";
          
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  



 $sql = "select * from ekatoneikosiokto";  
        $result = mysqli_query($con,  $sql);  
        $count = mysqli_num_rows($result);

 $sqlUsers = "select * from users";  
        $resultUsers = mysqli_query($con, $sqlUsers);  
        $countUsers = mysqli_num_rows($resultUsers);

 $sqlForStats = "select * from ekatoneikosiokto";  
        $resultForStats = mysqli_query($con, $sqlForStats);  
        $countForStats = mysqli_num_rows($resultForStats);


$sqlForHealthyStats = "SELECT * FROM ekatoneikosiokto WHERE user IN (SELECT email FROM users WHERE status = 'healthy')";
$resultForHealthyStats = mysqli_query($con, $sqlForHealthyStats);  
$countForHealthyStats = mysqli_num_rows($resultForHealthyStats);

$sqlForPatientsStats = "SELECT * FROM ekatoneikosiokto WHERE user IN (SELECT email FROM users WHERE status = 'patient')";
$resultForPatientsStats = mysqli_query($con, $sqlForPatientsStats);  
$countForPatientsStats = mysqli_num_rows($resultForPatientsStats);












$maxScoreRight1 = 0;
$maxScoreRight1time = 0;
	$maxScoreLeft1 = 0;
$maxScoreLeft1time = 0;
	$minScoreRight1 = 5000;
$minScoreRight1time = 0;
	$minScoreLeft1 = 5000;
$minScoreLeft1time = 0;
	$averageScoreRight1 = 0;
$averageScoreRight1time = 0;
	$averageScoreLeft1 = 0;
$averageScoreLeft1time = 0;
$rightScoresCounter1 = 0;
$leftScoresCounter1 = 0;

		while($row = mysqli_fetch_array($resultForStats)) {
		
			$actualScore = $row['score'];
			$actualHand = $row['hand'];
			$actualTime = $row['time'];
			
		
			if ($actualHand == "Right") {
				if ($actualScore > $maxScoreRight1) {
					$maxScoreRight1 = $actualScore;
					$maxScoreRight1time = $actualTime;
				} else if ($actualScore == $maxScoreRight1 && $actualTime < $maxScoreRight1time) {
					$maxScoreRight1time = $actualTime;
				}
				
				$averageScoreRight1 = $averageScoreRight1 + $actualScore;
				$averageScoreRight1time = $averageScoreRight1time + $actualTime;
				$rightScoresCounter1++;
				
			} else {
			if ($actualScore > $maxScoreLeft1) {
					$maxScoreLeft1 = $actualScore;
				$maxScoreLeft1time = $actualTime;
				} else if ($actualScore == $maxScoreLeft1 && $actualTime < $maxScoreLeft1time) {
						$maxScoreLeft1time = $actualTime;
				}	
				
				$averageScoreLeft1 = $averageScoreLeft1 + $actualScore;
				$averageScoreLeft1time = $averageScoreLeft1time + $actualTime;
				$leftScoresCounter1++;
					
			}
		
		
			if ($actualHand == "Right") {
				if ($actualScore < $minScoreRight1) {
					$minScoreRight1 = $actualScore;
					$minScoreRight1time = $actualTime;
				} else if ($actualScore == $minScoreRight1 && $actualTime > $minScoreRight1time) {
				$minScoreRight1time = $actualTime;
				}
			} else {
			if ($actualScore < $minScoreLeft1) {
					$minScoreLeft1 = $actualScore;
				$minScoreLeft1time = $actualTime;
				}	else if ($actualScore == $minScoreLeft1 && $actualTime > $minScoreLeft1time) {
				$minScoreLeft1time = $actualTime;
				}
			} 
			
		
			}


			$averageScoreRight1 = $averageScoreRight1 / $rightScoresCounter1;
				$averageScoreLeft1 = $averageScoreLeft1 / $leftScoresCounter1;

$averageScoreRight1time = $averageScoreRight1time / $rightScoresCounter1;
				$averageScoreLeft1time = $averageScoreLeft1time / $leftScoresCounter1;
			
if ($minScoreRight1 == 5000) {
	$minScoreRight1 = 0;
}
	if ($minScoreLeft1 == 5000) {
	$minScoreLeft1 = 0;
}
		


		








$maxScoreRightHealthy = 0;
$maxScoreRightHealthytime = 0;
	$maxScoreLeftHealthy = 0;
$maxScoreLeftHealthytime = 0;
	$minScoreRightHealthy = 5000;
$minScoreRightHealthytime = 0;
	$minScoreLeftHealthy = 5000;
$minScoreLeftHealthytime = 0;
	$averageScoreRightHealthy = 0;
$averageScoreRightHealthytime = 0;
	$averageScoreLeftHealthy = 0;
$averageScoreLeftHealthytime = 0;
$rightScoresCounterHealthy = 0;
$leftScoresCounterHealthy = 0;


		while($row = mysqli_fetch_array($resultForHealthyStats)) {
		
			$actualScoreHealthy = $row['score'];
			$actualHandHealthy = $row['hand'];
			$actualTimeHealthy = $row['time'];
			
		
			if ($actualHandHealthy == "Right") {
				if ($actualScoreHealthy > $maxScoreRightHealthy) {
					$maxScoreRightHealthy = $actualScoreHealthy;
					$maxScoreRightHealthytime = $actualTimeHealthy;
				} else if ($actualScoreHealthy == $maxScoreRightHealthy && $actualTimeHealthy < $maxScoreRightHealthytime) {
					$maxScoreRightHealthytime = $actualTimeHealthy;
				}
				
				$averageScoreRightHealthy = $averageScoreRightHealthy + $actualScoreHealthy;
				$averageScoreRightHealthytime = $averageScoreRightHealthytime + $actualTimeHealthy;
				$rightScoresCounterHealthy++;
				
			} else {
			if ($actualScoreHealthy > $maxScoreLeftHealthy) {
					$maxScoreLeftHealthy = $actualScoreHealthy;
				$maxScoreLeftHealthytime = $actualTimeHealthy;
				} else if ($actualScoreHealthy == $maxScoreLeftHealthy && $actualTimeHealthy < $maxScoreLeftHealthytime) {
						$maxScoreLeftHealthytime = $actualTimeHealthy;
				}	
				
				$averageScoreLeftHealthy = $averageScoreLeftHealthy + $actualScoreHealthy;
				$averageScoreLeftHealthytime = $averageScoreLeftHealthytime + $actualTimeHealthy;
				$leftScoresCounterHealthy++;
					
			}
		
		
			if ($actualHandHealthy == "Right") {
				if ($actualScoreHealthy < $minScoreRightHealthy) {
					$minScoreRightHealthy = $actualScoreHealthy;
					$minScoreRightHealthytime = $actualTimeHealthy;
				} else if ($actualScoreHealthy == $minScoreRightHealthy && $actualTimeHealthy > $minScoreRightHealthytime) {
				$minScoreRightHealthytime = $actualTimeHealthy;
				}
			} else {
			if ($actualScoreHealthy < $minScoreLeftHealthy) {
					$minScoreLeftHealthy = $actualScoreHealthy;
				$minScoreLeftHealthytime = $actualTimeHealthy;
				}	else if ($actualScoreHealthy == $minScoreLeftHealthy && $actualTimeHealthy > $minScoreLeftHealthytime) {
				$minScoreLeftHealthytime = $actualTimeHealthy;
				}
			} 
			
		
			}


			$averageScoreRightHealthy = $averageScoreRightHealthy / $rightScoresCounterHealthy;
				$averageScoreLeftHealthy = $averageScoreLeftHealthy / $leftScoresCounterHealthy;

$averageScoreRightHealthytime = $averageScoreRightHealthytime / $rightScoresCounterHealthy;
				$averageScoreLeftHealthytime = $averageScoreLeftHealthytime / $leftScoresCounterHealthy;
			
if ($minScoreRightHealthy == 5000) {
	$minScoreRightHealthy = 0;
}
	if ($minScoreLeftHealthy == 5000) {
	$minScoreLeftHealthy = 0;
}
		












$maxScoreRightPatients = 0;
$maxScoreRightPatientstime = 0;
	$maxScoreLeftPatients = 0;
$maxScoreLeftPatientstime = 0;
	$minScoreRightPatients = 5000;
$minScoreRightPatientstime = 0;
	$minScoreLeftPatients = 5000;
$minScoreLeftPatientstime = 0;
	$averageScoreRightPatients = 0;
$averageScoreRightPatientstime = 0;
	$averageScoreLeftPatients = 0;
$averageScoreLeftPatientstime = 0;
$rightScoresCounterPatients = 0;
$leftScoresCounterPatients = 0;


		while($row = mysqli_fetch_array($resultForPatientsStats)) {
		
			$actualScorePatients = $row['score'];
			$actualHandPatients = $row['hand'];
			$actualTimePatients = $row['time'];
			
		
			if ($actualHandPatients == "Right") {
				if ($actualScorePatients > $maxScoreRightPatients) {
					$maxScoreRightPatients = $actualScorePatients;
					$maxScoreRightPatientstime = $actualTimePatients;
				} else if ($actualScorePatients == $maxScoreRightPatients && $actualTimePatients < $maxScoreRightPatientstime) {
					$maxScoreRightPatientstime = $actualTimePatients;
				}
				
				$averageScoreRightPatients = $averageScoreRightPatients + $actualScorePatients;
				$averageScoreRightPatientstime = $averageScoreRightPatientstime + $actualTimePatients;
				$rightScoresCounterPatients++;
				
			} else {
			if ($actualScorePatients > $maxScoreLeftPatients) {
					$maxScoreLeftPatients = $actualScorePatients;
				$maxScoreLeftPatientstime = $actualTimePatients;
				} else if ($actualScorePatients == $maxScoreLeftPatients && $actualTimePatients < $maxScoreLeftPatientstime) {
						$maxScoreLeftPatientstime = $actualTimePatients;
				}	
				
				$averageScoreLeftPatients = $averageScoreLeftPatients + $actualScorePatients;
				$averageScoreLeftPatientstime = $averageScoreLeftPatientstime + $actualTimePatients;
				$leftScoresCounterPatients++;
					
			}
		
		
			if ($actualHandPatients == "Right") {
				if ($actualScorePatients < $minScoreRightPatients) {
					$minScoreRightPatients = $actualScorePatients;
					$minScoreRightPatientstime = $actualTimePatients;
				} else if ($actualScorePatients == $minScoreRightPatients && $actualTimePatients > $minScoreRightPatientstime) {
				$minScoreRightPatientstime = $actualTimePatients;
				}
			} else {
			if ($actualScorePatients < $minScoreLeftPatients) {
					$minScoreLeftPatients = $actualScorePatients;
				$minScoreLeftPatientstime = $actualTimePatients;
				}	else if ($actualScorePatients == $minScoreLeftPatients && $actualTimePatients > $minScoreLeftPatientstime) {
				$minScoreLeftPatientstime = $actualTimePatients;
				}
			} 
			
		
			}


			$averageScoreRightPatients = $averageScoreRightPatients / $rightScoresCounterPatients;
				$averageScoreLeftPatients = $averageScoreLeftPatients / $leftScoresCounterPatients;

$averageScoreRightPatientstime = $averageScoreRightPatientstime / $rightScoresCounterPatients;
				$averageScoreLeftPatientstime = $averageScoreLeftPatientstime / $leftScoresCounterPatients;
			
if ($minScoreRightPatients == 5000) {
	$minScoreRightPatients = 0;
}
	if ($minScoreLeftPatients == 5000) {
	$minScoreLeftPatients = 0;
}
		


?>

<?php include '../admin-head.php';?>
		
		<main>
		<h1 id="pageTitle">128</h1>
		
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
	echo " (";
			echo $maxScoreRight1time;
	echo "secs)";
			echo "</td><td>";
			
			echo $maxScoreLeft1;
			echo " (";
			echo $maxScoreLeft1time;
	echo "secs)";
			echo "</td><td>";
			
			echo $minScoreRight1;
			echo " (";
			echo $minScoreRight1time;
	echo "secs)";
			echo "</td><td>";
			
			echo $minScoreLeft1;
			echo " (";
			echo $minScoreLeft1time;
	echo "secs)";
			echo "</td><td>";
			
			echo $averageScoreRight1;
			echo " (";
			echo $averageScoreRight1time;
	echo "secs)";
			echo "</td><td>";
			
			echo $averageScoreLeft1;
			echo " (";
			echo $averageScoreLeft1time;
	echo "secs)";
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
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
	echo " (";
			echo $maxScoreRightHealthytime;
	echo "secs)";
			echo "</td><td>";
			
			echo $maxScoreLeftHealthy;
			echo " (";
			echo $maxScoreLeftHealthytime;
	echo "secs)";
			echo "</td><td>";
			
			echo $minScoreRightHealthy;
			echo " (";
			echo $minScoreRightHealthytime;
	echo "secs)";
			echo "</td><td>";
			
			echo $minScoreLeftHealthy;
			echo " (";
			echo $minScoreLeftHealthytime;
	echo "secs)";
			echo "</td><td>";
			
			echo $averageScoreRightHealthy;
			echo " (";
			echo $averageScoreRightHealthytime;
	echo "secs)";
			echo "</td><td>";
			
			echo $averageScoreLeftHealthy;
			echo " (";
			echo $averageScoreLeftHealthytime;
	echo "secs)";
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
	echo " (";
			echo $maxScoreRightPatientstime;
	echo "secs)";
			echo "</td><td>";
			
			echo $maxScoreLeftPatients;
			echo " (";
			echo $maxScoreLeftPatientstime;
	echo "secs)";
			echo "</td><td>";
			
			echo $minScoreRightPatients;
			echo " (";
			echo $minScoreRightPatientstime;
	echo "secs)";
			echo "</td><td>";
			
			echo $minScoreLeftPatients;
			echo " (";
			echo $minScoreLeftPatientstime;
	echo "secs)";
			echo "</td><td>";
			
			echo $averageScoreRightPatients;
			echo " (";
			echo $averageScoreRightPatientstime;
	echo "secs)";
			echo "</td><td>";
			
			echo $averageScoreLeftPatients;
			echo " (";
			echo $averageScoreLeftPatientstime;
	echo "secs)";
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