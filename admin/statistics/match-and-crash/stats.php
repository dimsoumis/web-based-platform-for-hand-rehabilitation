 <?php

$servername = "localhost";
$username = "mani_hab_space";
$password = "eqi9_Y619";
$dbname = "mani_hab_space";
          
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  



 $sql = "select * from match_crash_scores";  
        $result = mysqli_query($con,  $sql);  
        $count = mysqli_num_rows($result);

 $sqlUsers = "select * from users";  
        $resultUsers = mysqli_query($con, $sqlUsers);  
        $countUsers = mysqli_num_rows($resultUsers);

 $sqlForStats = "select * from match_crash_scores";  
        $resultForStats = mysqli_query($con, $sqlForStats);  
        $countForStats = mysqli_num_rows($resultForStats);


$sqlForHealthyStats = "SELECT * FROM match_crash_scores WHERE user IN (SELECT email FROM users WHERE status = 'healthy')";
$resultForHealthyStats = mysqli_query($con, $sqlForHealthyStats);  
$countForHealthyStats = mysqli_num_rows($resultForHealthyStats);

$sqlForPatientsStats = "SELECT * FROM match_crash_scores WHERE user IN (SELECT email FROM users WHERE status = 'patient')";
$resultForPatientsStats = mysqli_query($con, $sqlForPatientsStats);  
$countForPatientsStats = mysqli_num_rows($resultForPatientsStats);


 $sqlForStatsLevel1 = "select * from match_crash_scores WHERE level='Level 1'";  
        $resultForStatsLevel1 = mysqli_query($con, $sqlForStatsLevel1);  
        $countForStatsLevel1 = mysqli_num_rows($resultForStatsLevel1);

$sqlForHealthyStatsLevel1 = "SELECT * FROM match_crash_scores WHERE level='Level 1' AND user IN (SELECT email FROM users WHERE status = 'healthy')";
$resultForHealthyStatsLevel1 = mysqli_query($con, $sqlForHealthyStatsLevel1);  
$countForHealthyStatsLevel1 = mysqli_num_rows($resultForHealthyStatsLevel1);

$sqlForPatientsStatsLevel1 = "SELECT * FROM match_crash_scores WHERE level='Level 1' AND user IN (SELECT email FROM users WHERE status = 'patient')";
$resultForPatientsStatsLevel1 = mysqli_query($con, $sqlForPatientsStatsLevel1);  
$countForPatientsStatsLevel1 = mysqli_num_rows($resultForPatientsStatsLevel1);




 $sqlForStatsLevel2 = "select * from match_crash_scores WHERE level='Level 2'";  
        $resultForStatsLevel2 = mysqli_query($con, $sqlForStatsLevel2);  
        $countForStatsLevel2 = mysqli_num_rows($resultForStatsLevel2);

$sqlForHealthyStatsLevel2 = "SELECT * FROM match_crash_scores WHERE level='Level 2' AND user IN (SELECT email FROM users WHERE status = 'healthy')";
$resultForHealthyStatsLevel2 = mysqli_query($con, $sqlForHealthyStatsLevel2);  
$countForHealthyStatsLevel2 = mysqli_num_rows($resultForHealthyStatsLevel2);

$sqlForPatientsStatsLevel2 = "SELECT * FROM match_crash_scores WHERE level='Level 2' AND user IN (SELECT email FROM users WHERE status = 'patient')";
$resultForPatientsStatsLevel2 = mysqli_query($con, $sqlForPatientsStatsLevel2);  
$countForPatientsStatsLevel2 = mysqli_num_rows($resultForPatientsStatsLevel2);










 $sqlForStatsLevel3 = "select * from match_crash_scores WHERE level='Level 3'";  
        $resultForStatsLevel3 = mysqli_query($con, $sqlForStatsLevel3);  
        $countForStatsLevel3 = mysqli_num_rows($resultForStatsLevel3);

$sqlForHealthyStatsLevel3 = "SELECT * FROM match_crash_scores WHERE level='Level 3' AND user IN (SELECT email FROM users WHERE status = 'healthy')";
$resultForHealthyStatsLevel3 = mysqli_query($con, $sqlForHealthyStatsLevel3);  
$countForHealthyStatsLevel3 = mysqli_num_rows($resultForHealthyStatsLevel3);

$sqlForPatientsStatsLevel3 = "SELECT * FROM match_crash_scores WHERE level='Level 3' AND user IN (SELECT email FROM users WHERE status = 'patient')";
$resultForPatientsStatsLevel3 = mysqli_query($con, $sqlForPatientsStatsLevel3);  
$countForPatientsStatsLevel3 = mysqli_num_rows($resultForPatientsStatsLevel3);







 $sqlForStatsLevel4 = "select * from match_crash_scores WHERE level='Level 4'";  
        $resultForStatsLevel4 = mysqli_query($con, $sqlForStatsLevel4);  
        $countForStatsLevel4 = mysqli_num_rows($resultForStatsLevel4);

$sqlForHealthyStatsLevel4 = "SELECT * FROM match_crash_scores WHERE level='Level 4' AND user IN (SELECT email FROM users WHERE status = 'healthy')";
$resultForHealthyStatsLevel4 = mysqli_query($con, $sqlForHealthyStatsLevel4);  
$countForHealthyStatsLevel4 = mysqli_num_rows($resultForHealthyStatsLevel4);

$sqlForPatientsStatsLevel4 = "SELECT * FROM match_crash_scores WHERE level='Level 4' AND user IN (SELECT email FROM users WHERE status = 'patient')";
$resultForPatientsStatsLevel4 = mysqli_query($con, $sqlForPatientsStatsLevel4);  
$countForPatientsStatsLevel4 = mysqli_num_rows($resultForPatientsStatsLevel4);

















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





// LEVEL 1 SPECIFIC





$maxScoreRight1Level1 = 0;
	$maxScoreLeft1Level1 = 0;
	$minScoreRight1Level1 = 5000;
	$minScoreLeft1Level1 = 5000;
	$averageScoreRight1Level1 = 0;
	$averageScoreLeft1Level1 = 0;
$rightScoresCounter1Level1 = 0;
$leftScoresCounter1Level1 = 0;

		while($row = mysqli_fetch_array($resultForStatsLevel1)) {
		
			$actualScoreLevel1 = $row['score'];
			$actualHandLevel1 = $row['hand'];
			
		
			if ($actualHandLevel1 == "Right") {
				if ($actualScoreLevel1 > $maxScoreRight1Level1) {
					$maxScoreRight1Level1 = $actualScoreLevel1;
				}
				
				$averageScoreRight1Level1 = $averageScoreRight1Level1 + $actualScoreLevel1;
				$rightScoresCounter1Level1++;
				
			} else {
			if ($actualScoreLevel1 > $maxScoreLeft1Level1) {
					$maxScoreLeft1Level1 = $actualScoreLevel1;
				}	
				
				$averageScoreLeft1Level1 = $averageScoreLeft1Level1 + $actualScoreLevel1;
				$leftScoresCounter1Level1++;
					
			}
		
		
			if ($actualHandLevel1 == "Right") {
				if ($actualScoreLevel1 < $minScoreRight1Level1) {
					$minScoreRight1Level1 = $actualScoreLevel1;
				}
			} else {
			if ($actualScoreLevel1 < $minScoreLeft1Level1) {
					$minScoreLeft1Level1 = $actualScoreLevel1;
				}	
			} 
			
		
			}


			$averageScoreRight1Level1 = $averageScoreRight1Level1 / $rightScoresCounter1Level1;
				$averageScoreLeft1Level1 = $averageScoreLeft1Level1 / $leftScoresCounter1Level1;
			
if ($minScoreRight1Level1 == 5000) {
	$minScoreRight1Level1 = 0;
}
	if ($minScoreLeft1Level1 == 5000) {
	$minScoreLeft1Level1 = 0;
}
		


		











	$maxScoreRightHealthyLevel1 = 0;
	$maxScoreLeftHealthyLevel1 = 0;
	$minScoreRightHealthyLevel1 = 5000;
	$minScoreLeftHealthyLevel1 = 5000;
	$averageScoreRightHealthyLevel1 = 0;
	$averageScoreLeftHealthyLevel1 = 0;
$rightScoresCounterHealthyLevel1 = 0;
$leftScoresCounterHealthyLevel1 = 0;
	
		while($row = mysqli_fetch_array($resultForHealthyStatsLevel1)) {
		
			$actualScoreHealthyLevel1 = $row['score'];
			$actualHandHealthyLevel1 = $row['hand'];
			
			
			if ($actualHandHealthyLevel1 == "Right") {
				if ($actualScoreHealthyLevel1 > $maxScoreRightHealthyLevel1) {
					$maxScoreRightHealthyLevel1 = $actualScoreHealthyLevel1;
				}
				
				$averageScoreRightHealthyLevel1 = $averageScoreRightHealthyLevel1 + $actualScoreHealthyLevel1;
				$rightScoresCounterHealthyLevel1++;
				
			} else {
			if ($actualScoreHealthyLevel1 > $maxScoreLeftHealthyLevel1) {
					$maxScoreLeftHealthyLevel1 = $actualScoreHealthyLevel1;
				}	
				
				$averageScoreLeftHealthyLevel1 = $averageScoreLeftHealthyLevel1 + $actualScoreHealthyLevel1;
				$leftScoresCounterHealthyLevel1++;
					
			}
		
		
			if ($actualHandHealthyLevel1 == "Right") {
				if ($actualScoreHealthyLevel1 < $minScoreRightHealthyLevel1) {
					$minScoreRightHealthyLevel1 = $actualScoreHealthyLevel1;
				}
			} else {
			if ($actualScoreHealthyLevel1 < $minScoreLeftHealthyLevel1) {
					$minScoreLeftHealthyLevel1 = $actualScoreHealthyLevel1;
				}	
			}
		
		
		}
			
			$averageScoreRightHealthyLevel1 = $averageScoreRightHealthyLevel1 / $rightScoresCounterHealthyLevel1;
				$averageScoreLeftHealthyLevel1 = $averageScoreLeftHealthyLevel1 / $leftScoresCounterHealthyLevel1;
			
if ($minScoreRightHealthyLevel1 == 5000) {
	$minScoreRightHealthyLevel1 = 0;
}
	if ($minScoreLeftHealthyLevel1 == 5000) {
	$minScoreLeftHealthyLevel1 = 0;
}













$maxScoreRightPatientsLevel1 = 0;
	$maxScoreLeftPatientsLevel1 = 0;
	$minScoreRightPatientsLevel1 = 5000;
	$minScoreLeftPatientsLevel1 = 5000;
	$averageScoreRightPatientsLevel1 = 0;
	$averageScoreLeftPatientsLevel1 = 0;
$rightScoresCounterPatientsLevel1 = 0;
$leftScoresCounterPatientsLevel1 = 0;
	
		while($row = mysqli_fetch_array($resultForPatientsStatsLevel1)) {
		
			$actualScorePatientsLevel1 = $row['score'];
			$actualHandPatientsLevel1 = $row['hand'];
			
			
			if ($actualHandPatientsLevel1 == "Right") {
				if ($actualScorePatientsLevel1 > $maxScoreRightPatientsLevel1) {
					$maxScoreRightPatientsLevel1 = $actualScorePatientsLevel1;
				}
				
				$averageScoreRightPatientsLevel1 = $averageScoreRightPatientsLevel1 + $actualScorePatientsLevel1;
				$rightScoresCounterPatientsLevel1++;
				
			} else {
			if ($actualScorePatientsLevel1 > $maxScoreLeftPatientsLevel1) {
					$maxScoreLeftPatientsLevel1 = $actualScorePatientsLevel1;
				}	
				
				$averageScoreLeftPatientsLevel1 = $averageScoreLeftPatientsLevel1 + $actualScorePatientsLevel1;
				$leftScoresCounterPatientsLevel1++;
					
			}
		
		
			if ($actualHandPatientsLevel1 == "Right") {
				if ($actualScorePatientsLevel1 < $minScoreRightPatientsLevel1) {
					$minScoreRightPatientsLevel1 = $actualScorePatientsLevel1;
				}
			} else {
			if ($actualScorePatientsLevel1 < $minScoreLeftPatientsLevel1) {
					$minScoreLeftPatientsLevel1 = $actualScorePatientsLevel1;
				}	
			}
		
		
		}
			
			$averageScoreRightPatientsLevel1 = $averageScoreRightPatientsLevel1 / $rightScoresCounterPatientsLevel1;
				$averageScoreLeftPatientsLevel1 = $averageScoreLeftPatientsLevel1 / $leftScoresCounterPatientsLevel1;
			
if ($minScoreRightPatientsLevel1 == 5000) {
	$minScoreRightPatientsLevel1 = 0;
}
	if ($minScoreLeftPatientsLevel1 == 5000) {
	$minScoreLeftPatientsLevel1 = 0;
}








// LEVEL 2 SPECIFIC





$maxScoreRight1Level2 = 0;
	$maxScoreLeft1Level2 = 0;
	$minScoreRight1Level2 = 5000;
	$minScoreLeft1Level2 = 5000;
	$averageScoreRight1Level2 = 0;
	$averageScoreLeft1Level2 = 0;
$rightScoresCounter1Level2 = 0;
$leftScoresCounter1Level2 = 0;

		while($row = mysqli_fetch_array($resultForStatsLevel2)) {
		
			$actualScoreLevel2 = $row['score'];
			$actualHandLevel2 = $row['hand'];
			
		
			if ($actualHandLevel2 == "Right") {
				if ($actualScoreLevel2 > $maxScoreRight1Level2) {
					$maxScoreRight1Level2 = $actualScoreLevel2;
				}
				
				$averageScoreRight1Level2 = $averageScoreRight1Level2 + $actualScoreLevel2;
				$rightScoresCounter1Level2++;
				
			} else {
			if ($actualScoreLevel2 > $maxScoreLeft1Level2) {
					$maxScoreLeft1Level2 = $actualScoreLevel2;
				}	
				
				$averageScoreLeft1Level2 = $averageScoreLeft1Level2 + $actualScoreLevel2;
				$leftScoresCounter1Level2++;
					
			}
		
		
			if ($actualHandLevel2 == "Right") {
				if ($actualScoreLevel2 < $minScoreRight1Level2) {
					$minScoreRight1Level2 = $actualScoreLevel2;
				}
			} else {
			if ($actualScoreLevel2 < $minScoreLeft1Level2) {
					$minScoreLeft1Level2 = $actualScoreLevel2;
				}	
			} 
			
		
			}


			$averageScoreRight1Level2 = $averageScoreRight1Level2 / $rightScoresCounter1Level2;
				$averageScoreLeft1Level2 = $averageScoreLeft1Level2 / $leftScoresCounter1Level2;
			
if ($minScoreRight1Level2 == 5000) {
	$minScoreRight1Level2 = 0;
}
	if ($minScoreLeft1Level2 == 5000) {
	$minScoreLeft1Level2 = 0;
}
		


		











	$maxScoreRightHealthyLevel2 = 0;
	$maxScoreLeftHealthyLevel2 = 0;
	$minScoreRightHealthyLevel2 = 5000;
	$minScoreLeftHealthyLevel2 = 5000;
	$averageScoreRightHealthyLevel2 = 0;
	$averageScoreLeftHealthyLevel2 = 0;
$rightScoresCounterHealthyLevel2 = 0;
$leftScoresCounterHealthyLevel2 = 0;
	
		while($row = mysqli_fetch_array($resultForHealthyStatsLevel2)) {
		
			$actualScoreHealthyLevel2 = $row['score'];
			$actualHandHealthyLevel2 = $row['hand'];
			
			
			if ($actualHandHealthyLevel2 == "Right") {
				if ($actualScoreHealthyLevel2 > $maxScoreRightHealthyLevel2) {
					$maxScoreRightHealthyLevel2 = $actualScoreHealthyLevel2;
				}
				
				$averageScoreRightHealthyLevel2 = $averageScoreRightHealthyLevel2 + $actualScoreHealthyLevel2;
				$rightScoresCounterHealthyLevel2++;
				
			} else {
			if ($actualScoreHealthyLevel2 > $maxScoreLeftHealthyLevel2) {
					$maxScoreLeftHealthyLevel2 = $actualScoreHealthyLevel2;
				}	
				
				$averageScoreLeftHealthyLevel2 = $averageScoreLeftHealthyLevel2 + $actualScoreHealthyLevel2;
				$leftScoresCounterHealthyLevel2++;
					
			}
		
		
			if ($actualHandHealthyLevel2 == "Right") {
				if ($actualScoreHealthyLevel2 < $minScoreRightHealthyLevel2) {
					$minScoreRightHealthyLevel2 = $actualScoreHealthyLevel2;
				}
			} else {
			if ($actualScoreHealthyLevel2 < $minScoreLeftHealthyLevel2) {
					$minScoreLeftHealthyLevel2 = $actualScoreHealthyLevel2;
				}	
			}
		
		
		}
			
			$averageScoreRightHealthyLevel2 = $averageScoreRightHealthyLevel2 / $rightScoresCounterHealthyLevel2;
				$averageScoreLeftHealthyLevel2 = $averageScoreLeftHealthyLevel2 / $leftScoresCounterHealthyLevel2;
			
if ($minScoreRightHealthyLevel2 == 5000) {
	$minScoreRightHealthyLevel2 = 0;
}
	if ($minScoreLeftHealthyLevel2 == 5000) {
	$minScoreLeftHealthyLevel2 = 0;
}













$maxScoreRightPatientsLevel2 = 0;
	$maxScoreLeftPatientsLevel2 = 0;
	$minScoreRightPatientsLevel2 = 5000;
	$minScoreLeftPatientsLevel2 = 5000;
	$averageScoreRightPatientsLevel2 = 0;
	$averageScoreLeftPatientsLevel2 = 0;
$rightScoresCounterPatientsLevel2 = 0;
$leftScoresCounterPatientsLevel2 = 0;
	
		while($row = mysqli_fetch_array($resultForPatientsStatsLevel2)) {
		
			$actualScorePatientsLevel2 = $row['score'];
			$actualHandPatientsLevel2 = $row['hand'];
			
			
			if ($actualHandPatientsLevel2 == "Right") {
				if ($actualScorePatientsLevel2 > $maxScoreRightPatientsLevel2) {
					$maxScoreRightPatientsLevel2 = $actualScorePatientsLevel2;
				}
				
				$averageScoreRightPatientsLevel2 = $averageScoreRightPatientsLevel2 + $actualScorePatientsLevel2;
				$rightScoresCounterPatientsLevel2++;
				
			} else {
			if ($actualScorePatientsLevel2 > $maxScoreLeftPatientsLevel2) {
					$maxScoreLeftPatientsLevel2 = $actualScorePatientsLevel2;
				}	
				
				$averageScoreLeftPatientsLevel2 = $averageScoreLeftPatientsLevel2 + $actualScorePatientsLevel2;
				$leftScoresCounterPatientsLevel2++;
					
			}
		
		
			if ($actualHandPatientsLevel2 == "Right") {
				if ($actualScorePatientsLevel2 < $minScoreRightPatientsLevel2) {
					$minScoreRightPatientsLevel2 = $actualScorePatientsLevel2;
				}
			} else {
			if ($actualScorePatientsLevel2 < $minScoreLeftPatientsLevel2) {
					$minScoreLeftPatientsLevel2 = $actualScorePatientsLevel2;
				}	
			}
		
		
		}
			
			$averageScoreRightPatientsLevel2 = $averageScoreRightPatientsLevel2 / $rightScoresCounterPatientsLevel2;
				$averageScoreLeftPatientsLevel2 = $averageScoreLeftPatientsLevel2 / $leftScoresCounterPatientsLevel2;
			
if ($minScoreRightPatientsLevel2 == 5000) {
	$minScoreRightPatientsLevel2 = 0;
}
	if ($minScoreLeftPatientsLevel2 == 5000) {
	$minScoreLeftPatientsLevel2 = 0;
}








// LEVEL 3 SPECIFIC





$maxScoreRight1Level3 = 0;
	$maxScoreLeft1Level3 = 0;
	$minScoreRight1Level3 = 5000;
	$minScoreLeft1Level3 = 5000;
	$averageScoreRight1Level3 = 0;
	$averageScoreLeft1Level3 = 0;
$rightScoresCounter1Level3 = 0;
$leftScoresCounter1Level3 = 0;

		while($row = mysqli_fetch_array($resultForStatsLevel3)) {
		
			$actualScoreLevel3 = $row['score'];
			$actualHandLevel3 = $row['hand'];
			
		
			if ($actualHandLevel3 == "Right") {
				if ($actualScoreLevel3 > $maxScoreRight1Level3) {
					$maxScoreRight1Level3 = $actualScoreLevel3;
				}
				
				$averageScoreRight1Level3 = $averageScoreRight1Level3 + $actualScoreLevel3;
				$rightScoresCounter1Level3++;
				
			} else {
			if ($actualScoreLevel3 > $maxScoreLeft1Level3) {
					$maxScoreLeft1Level3 = $actualScoreLevel3;
				}	
				
				$averageScoreLeft1Level3 = $averageScoreLeft1Level3 + $actualScoreLevel3;
				$leftScoresCounter1Level3++;
					
			}
		
		
			if ($actualHandLevel3 == "Right") {
				if ($actualScoreLevel3 < $minScoreRight1Level3) {
					$minScoreRight1Level3 = $actualScoreLevel3;
				}
			} else {
			if ($actualScoreLevel3 < $minScoreLeft1Level3) {
					$minScoreLeft1Level3 = $actualScoreLevel3;
				}	
			} 
			
		
			}


			$averageScoreRight1Level3 = $averageScoreRight1Level3 / $rightScoresCounter1Level3;
				$averageScoreLeft1Level3 = $averageScoreLeft1Level3 / $leftScoresCounter1Level3;
			
if ($minScoreRight1Level3 == 5000) {
	$minScoreRight1Level3 = 0;
}
	if ($minScoreLeft1Level3 == 5000) {
	$minScoreLeft1Level3 = 0;
}
		


		











	$maxScoreRightHealthyLevel3 = 0;
	$maxScoreLeftHealthyLevel3 = 0;
	$minScoreRightHealthyLevel3 = 5000;
	$minScoreLeftHealthyLevel3 = 5000;
	$averageScoreRightHealthyLevel3 = 0;
	$averageScoreLeftHealthyLevel3 = 0;
$rightScoresCounterHealthyLevel3 = 0;
$leftScoresCounterHealthyLevel3 = 0;
	
		while($row = mysqli_fetch_array($resultForHealthyStatsLevel3)) {
		
			$actualScoreHealthyLevel3 = $row['score'];
			$actualHandHealthyLevel3 = $row['hand'];
			
			
			if ($actualHandHealthyLevel3 == "Right") {
				if ($actualScoreHealthyLevel3 > $maxScoreRightHealthyLevel3) {
					$maxScoreRightHealthyLevel3 = $actualScoreHealthyLevel3;
				}
				
				$averageScoreRightHealthyLevel3 = $averageScoreRightHealthyLevel3 + $actualScoreHealthyLevel3;
				$rightScoresCounterHealthyLevel3++;
				
			} else {
			if ($actualScoreHealthyLevel3 > $maxScoreLeftHealthyLevel3) {
					$maxScoreLeftHealthyLevel3 = $actualScoreHealthyLevel3;
				}	
				
				$averageScoreLeftHealthyLevel3 = $averageScoreLeftHealthyLevel3 + $actualScoreHealthyLevel3;
				$leftScoresCounterHealthyLevel3++;
					
			}
		
		
			if ($actualHandHealthyLevel3 == "Right") {
				if ($actualScoreHealthyLevel3 < $minScoreRightHealthyLevel3) {
					$minScoreRightHealthyLevel3 = $actualScoreHealthyLevel3;
				}
			} else {
			if ($actualScoreHealthyLevel3 < $minScoreLeftHealthyLevel3) {
					$minScoreLeftHealthyLevel3 = $actualScoreHealthyLevel3;
				}	
			}
		
		
		}
			
			$averageScoreRightHealthyLevel3 = $averageScoreRightHealthyLevel3 / $rightScoresCounterHealthyLevel3;
				$averageScoreLeftHealthyLevel3 = $averageScoreLeftHealthyLevel3 / $leftScoresCounterHealthyLevel3;
			
if ($minScoreRightHealthyLevel3 == 5000) {
	$minScoreRightHealthyLevel3 = 0;
}
	if ($minScoreLeftHealthyLevel3 == 5000) {
	$minScoreLeftHealthyLevel3 = 0;
}













$maxScoreRightPatientsLevel3 = 0;
	$maxScoreLeftPatientsLevel3 = 0;
	$minScoreRightPatientsLevel3 = 5000;
	$minScoreLeftPatientsLevel3 = 5000;
	$averageScoreRightPatientsLevel3 = 0;
	$averageScoreLeftPatientsLevel3 = 0;
$rightScoresCounterPatientsLevel3 = 0;
$leftScoresCounterPatientsLevel3 = 0;
	
		while($row = mysqli_fetch_array($resultForPatientsStatsLevel3)) {
		
			$actualScorePatientsLevel3 = $row['score'];
			$actualHandPatientsLevel3 = $row['hand'];
			
			
			if ($actualHandPatientsLevel3 == "Right") {
				if ($actualScorePatientsLevel3 > $maxScoreRightPatientsLevel3) {
					$maxScoreRightPatientsLevel3 = $actualScorePatientsLevel3;
				}
				
				$averageScoreRightPatientsLevel3 = $averageScoreRightPatientsLevel3 + $actualScorePatientsLevel3;
				$rightScoresCounterPatientsLevel3++;
				
			} else {
			if ($actualScorePatientsLevel3 > $maxScoreLeftPatientsLevel3) {
					$maxScoreLeftPatientsLevel3 = $actualScorePatientsLevel3;
				}	
				
				$averageScoreLeftPatientsLevel3 = $averageScoreLeftPatientsLevel3 + $actualScorePatientsLevel3;
				$leftScoresCounterPatientsLevel3++;
					
			}
		
		
			if ($actualHandPatientsLevel3 == "Right") {
				if ($actualScorePatientsLevel3 < $minScoreRightPatientsLevel3) {
					$minScoreRightPatientsLevel3 = $actualScorePatientsLevel3;
				}
			} else {
			if ($actualScorePatientsLevel3 < $minScoreLeftPatientsLevel3) {
					$minScoreLeftPatientsLevel3 = $actualScorePatientsLevel3;
				}	
			}
		
		
		}
			
			$averageScoreRightPatientsLevel3 = $averageScoreRightPatientsLevel3 / $rightScoresCounterPatientsLevel3;
				$averageScoreLeftPatientsLevel3 = $averageScoreLeftPatientsLevel3 / $leftScoresCounterPatientsLevel3;
			
if ($minScoreRightPatientsLevel3 == 5000) {
	$minScoreRightPatientsLevel3 = 0;
}
	if ($minScoreLeftPatientsLevel3 == 5000) {
	$minScoreLeftPatientsLevel3 = 0;
}










// LEVEL 4 SPECIFIC





$maxScoreRight1Level4 = 0;
	$maxScoreLeft1Level4 = 0;
	$minScoreRight1Level4 = 5000;
	$minScoreLeft1Level4 = 5000;
	$averageScoreRight1Level4 = 0;
	$averageScoreLeft1Level4 = 0;
$rightScoresCounter1Level4 = 0;
$leftScoresCounter1Level4 = 0;

		while($row = mysqli_fetch_array($resultForStatsLevel4)) {
		
			$actualScoreLevel4 = $row['score'];
			$actualHandLevel4 = $row['hand'];
			
		
			if ($actualHandLevel4 == "Right") {
				if ($actualScoreLevel4 > $maxScoreRight1Level4) {
					$maxScoreRight1Level4 = $actualScoreLevel4;
				}
				
				$averageScoreRight1Level4 = $averageScoreRight1Level4 + $actualScoreLevel4;
				$rightScoresCounter1Level4++;
				
			} else {
			if ($actualScoreLevel4 > $maxScoreLeft1Level4) {
					$maxScoreLeft1Level4 = $actualScoreLevel4;
				}	
				
				$averageScoreLeft1Level4 = $averageScoreLeft1Level4 + $actualScoreLevel4;
				$leftScoresCounter1Level4++;
					
			}
		
		
			if ($actualHandLevel4 == "Right") {
				if ($actualScoreLevel4 < $minScoreRight1Level4) {
					$minScoreRight1Level4 = $actualScoreLevel4;
				}
			} else {
			if ($actualScoreLevel4 < $minScoreLeft1Level4) {
					$minScoreLeft1Level4 = $actualScoreLevel4;
				}	
			} 
			
		
			}


			$averageScoreRight1Level4 = $averageScoreRight1Level4 / $rightScoresCounter1Level4;
				$averageScoreLeft1Level4 = $averageScoreLeft1Level4 / $leftScoresCounter1Level4;
			
if ($minScoreRight1Level4 == 5000) {
	$minScoreRight1Level4 = 0;
}
	if ($minScoreLeft1Level4 == 5000) {
	$minScoreLeft1Level4 = 0;
}
		


		











	$maxScoreRightHealthyLevel4 = 0;
	$maxScoreLeftHealthyLevel4 = 0;
	$minScoreRightHealthyLevel4 = 5000;
	$minScoreLeftHealthyLevel4 = 5000;
	$averageScoreRightHealthyLevel4 = 0;
	$averageScoreLeftHealthyLevel4 = 0;
$rightScoresCounterHealthyLevel4 = 0;
$leftScoresCounterHealthyLevel4 = 0;
	
		while($row = mysqli_fetch_array($resultForHealthyStatsLevel4)) {
		
			$actualScoreHealthyLevel4 = $row['score'];
			$actualHandHealthyLevel4 = $row['hand'];
			
			
			if ($actualHandHealthyLevel4 == "Right") {
				if ($actualScoreHealthyLevel4 > $maxScoreRightHealthyLevel4) {
					$maxScoreRightHealthyLevel4 = $actualScoreHealthyLevel4;
				}
				
				$averageScoreRightHealthyLevel4 = $averageScoreRightHealthyLevel4 + $actualScoreHealthyLevel4;
				$rightScoresCounterHealthyLevel4++;
				
			} else {
			if ($actualScoreHealthyLevel4 > $maxScoreLeftHealthyLevel4) {
					$maxScoreLeftHealthyLevel4 = $actualScoreHealthyLevel4;
				}	
				
				$averageScoreLeftHealthyLevel4 = $averageScoreLeftHealthyLevel4 + $actualScoreHealthyLevel4;
				$leftScoresCounterHealthyLevel4++;
					
			}
		
		
			if ($actualHandHealthyLevel4 == "Right") {
				if ($actualScoreHealthyLevel4 < $minScoreRightHealthyLevel4) {
					$minScoreRightHealthyLevel4 = $actualScoreHealthyLevel4;
				}
			} else {
			if ($actualScoreHealthyLevel4 < $minScoreLeftHealthyLevel4) {
					$minScoreLeftHealthyLevel4 = $actualScoreHealthyLevel4;
				}	
			}
		
		
		}
			
			$averageScoreRightHealthyLevel4 = $averageScoreRightHealthyLevel4 / $rightScoresCounterHealthyLevel4;
				$averageScoreLeftHealthyLevel4 = $averageScoreLeftHealthyLevel4 / $leftScoresCounterHealthyLevel4;
			
if ($minScoreRightHealthyLevel4 == 5000) {
	$minScoreRightHealthyLevel4 = 0;
}
	if ($minScoreLeftHealthyLevel4 == 5000) {
	$minScoreLeftHealthyLevel4 = 0;
}













$maxScoreRightPatientsLevel4 = 0;
	$maxScoreLeftPatientsLevel4 = 0;
	$minScoreRightPatientsLevel4 = 5000;
	$minScoreLeftPatientsLevel4 = 5000;
	$averageScoreRightPatientsLevel4 = 0;
	$averageScoreLeftPatientsLevel4 = 0;
$rightScoresCounterPatientsLevel4 = 0;
$leftScoresCounterPatientsLevel4 = 0;
	
		while($row = mysqli_fetch_array($resultForPatientsStatsLevel4)) {
		
			$actualScorePatientsLevel4 = $row['score'];
			$actualHandPatientsLevel4 = $row['hand'];
			
			
			if ($actualHandPatientsLevel4 == "Right") {
				if ($actualScorePatientsLevel4 > $maxScoreRightPatientsLevel4) {
					$maxScoreRightPatientsLevel4 = $actualScorePatientsLevel4;
				}
				
				$averageScoreRightPatientsLevel4 = $averageScoreRightPatientsLevel4 + $actualScorePatientsLevel4;
				$rightScoresCounterPatientsLevel4++;
				
			} else {
			if ($actualScorePatientsLevel4 > $maxScoreLeftPatientsLevel4) {
					$maxScoreLeftPatientsLevel4 = $actualScorePatientsLevel4;
				}	
				
				$averageScoreLeftPatientsLevel4 = $averageScoreLeftPatientsLevel4 + $actualScorePatientsLevel4;
				$leftScoresCounterPatientsLevel4++;
					
			}
		
		
			if ($actualHandPatientsLevel4 == "Right") {
				if ($actualScorePatientsLevel4 < $minScoreRightPatientsLevel4) {
					$minScoreRightPatientsLevel4 = $actualScorePatientsLevel4;
				}
			} else {
			if ($actualScorePatientsLevel4 < $minScoreLeftPatientsLevel4) {
					$minScoreLeftPatientsLevel4 = $actualScorePatientsLevel4;
				}	
			}
		
		
		}
			
			$averageScoreRightPatientsLevel4 = $averageScoreRightPatientsLevel4 / $rightScoresCounterPatientsLevel4;
				$averageScoreLeftPatientsLevel4 = $averageScoreLeftPatientsLevel4 / $leftScoresCounterPatientsLevel4;
			
if ($minScoreRightPatientsLevel4 == 5000) {
	$minScoreRightPatientsLevel4 = 0;
}
	if ($minScoreLeftPatientsLevel4 == 5000) {
	$minScoreLeftPatientsLevel4 = 0;
}






?>

<?php include '../admin-head.php';?>
		
		<main>
		<h1 id="pageTitle">Match & Crash</h1>
		
		<div class="row">
			<div class="column1">
				<h1 style="text-align: center;">Statistics</h1>
				
				<h3 style="text-align: center;">General (Any/All Levels)</h3>
				<?php if($count > 0) {
		echo "<table>
					<tr>
					<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $minScoreRight1;
			
			echo "</td><td>";
			
			echo $minScoreLeft1;
			
			echo "</td><td>";
			
			echo $maxScoreRight1;
			
			echo "</td><td>";
			
			echo $maxScoreLeft1;
			
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
				
				
				
				
				
					
				<h3 style="text-align: center;">General (Level 1)</h3>
				<?php if($countForStatsLevel1 > 0) {
		echo "<table>
					<tr>
					<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $minScoreRight1Level1;
			
			echo "</td><td>";
			
			echo $minScoreLeft1Level1;
			
			echo "</td><td>";
			
			echo $maxScoreRight1Level1;
			
			echo "</td><td>";
			
			echo $maxScoreLeft1Level1;
			
			echo "</td><td>";
			
			echo $averageScoreRight1Level1;
			
			echo "</td><td>";
			
			echo $averageScoreLeft1Level1;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
				
				
								<h3 style="text-align: center;">General (Level 2)</h3>
				<?php if($countForStatsLevel2 > 0) {
		echo "<table>
					<tr>
					<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $minScoreRight1Level2;
			
			echo "</td><td>";
			
			echo $minScoreLeft1Level2;
			
			echo "</td><td>";
			
			echo $maxScoreRight1Level2;
			
			echo "</td><td>";
			
			echo $maxScoreLeft1Level2;
			
			echo "</td><td>";
			
			echo $averageScoreRight1Level2;
			
			echo "</td><td>";
			
			echo $averageScoreLeft1Level2;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
				
				
										<h3 style="text-align: center;">General (Level 3)</h3>
				<?php if($countForStatsLevel3 > 0) {
		echo "<table>
					<tr>
					<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $minScoreRight1Level3;
			
			echo "</td><td>";
			
			echo $minScoreLeft1Level3;
			
			echo "</td><td>";
			
			echo $maxScoreRight1Level3;
			
			echo "</td><td>";
			
			echo $maxScoreLeft1Level3;
			
			echo "</td><td>";
			
			echo $averageScoreRight1Level3;
			
			echo "</td><td>";
			
			echo $averageScoreLeft1Level3;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
												<h3 style="text-align: center;">General (Level 4)</h3>
				<?php if($countForStatsLevel4 > 0) {
		echo "<table>
					<tr>
					<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $minScoreRight1Level4;
			
			echo "</td><td>";
			
			echo $minScoreLeft1Level4;
			
			echo "</td><td>";
			
			echo $maxScoreRight1Level4;
			
			echo "</td><td>";
			
			echo $maxScoreLeft1Level4;
			
			echo "</td><td>";
			
			echo $averageScoreRight1Level4;
			
			echo "</td><td>";
			
			echo $averageScoreLeft1Level4;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
				
				
		
				
	
					<hr style="background: #fff;
  color: #fff;
  margin: 40px 0px;
  width: 100%;
  height: 2px;">
				
				
					<h3 style="text-align: center;">Healthy (Any/All Levels)</h3>
				
				<?php if($countForHealthyStats > 0) {
		echo "<table>
					<tr>
						<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $minScoreRightHealthy;
			
			echo "</td><td>";
			
			echo $minScoreLeftHealthy;
			
			echo "</td><td>";
			
			echo $maxScoreRightHealthy;
			
			echo "</td><td>";
			
			echo $maxScoreLeftHealthy;
			
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
				
	

				
								<h3 style="text-align: center;">Healthy (Level 1)</h3>
				
				<?php if($countForHealthyStatsLevel1 > 0) {
		echo "<table>
					<tr>
						<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $minScoreRightHealthyLevel1;
			
			echo "</td><td>";
			
			echo $minScoreLeftHealthyLevel1;
			
			echo "</td><td>";
			
			echo $maxScoreRightHealthyLevel1;
			
			echo "</td><td>";
			
			echo $maxScoreLeftHealthyLevel1;
			
			echo "</td><td>";
			
			echo $averageScoreRightHealthyLevel1;
			
			echo "</td><td>";
			
			echo $averageScoreLeftHealthyLevel1;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
				
				
					<h3 style="text-align: center;">Healthy (Level 2)</h3>
				
				<?php if($countForHealthyStatsLevel2 > 0) {
		echo "<table>
					<tr>
						<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $minScoreRightHealthyLevel2;
			
			echo "</td><td>";
			
			echo $minScoreLeftHealthyLevel2;
			
			echo "</td><td>";
			
			echo $maxScoreRightHealthyLevel2;
			
			echo "</td><td>";
			
			echo $maxScoreLeftHealthyLevel2;
			
			echo "</td><td>";
			
			echo $averageScoreRightHealthyLevel2;
			
			echo "</td><td>";
			
			echo $averageScoreLeftHealthyLevel2;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
				
				
					<h3 style="text-align: center;">Healthy (Level 3)</h3>
				
				<?php if($countForHealthyStatsLevel3 > 0) {
		echo "<table>
					<tr>
						<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $minScoreRightHealthyLevel3;
			
			echo "</td><td>";
			
			echo $minScoreLeftHealthyLevel3;
			
			echo "</td><td>";
			
			echo $maxScoreRightHealthyLevel3;
			
			echo "</td><td>";
			
			echo $maxScoreLeftHealthyLevel3;
			
			echo "</td><td>";
			
			echo $averageScoreRightHealthyLevel3;
			
			echo "</td><td>";
			
			echo $averageScoreLeftHealthyLevel3;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
					<h3 style="text-align: center;">Healthy (Level 4)</h3>
				
				<?php if($countForHealthyStatsLevel4 > 0) {
		echo "<table>
					<tr>
						<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
			echo $minScoreRightHealthyLevel4;
			
			echo "</td><td>";
			
			echo $minScoreLeftHealthyLevel4;
			
			echo "</td><td>";
			
			echo $maxScoreRightHealthyLevel4;
			
			echo "</td><td>";
			
			echo $maxScoreLeftHealthyLevel4;
			
			echo "</td><td>";
			
			echo $averageScoreRightHealthyLevel4;
			
			echo "</td><td>";
			
			echo $averageScoreLeftHealthyLevel4;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
						
					
				
				
				<hr style="background: #fff;
  color: #fff;
  margin: 40px 0px;
  width: 100%;
  height: 2px;">
				
				
				<h3 style="text-align: center;">Patients (Any/All Levels)</h3>
				
				<?php if($countForPatientsStats > 0) {
		echo "<table>
					<tr>
						<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
				echo $minScoreRightPatients;
			
			echo "</td><td>";
			
	echo $minScoreLeftPatients;		
			
			echo "</td><td>";
			
		echo $maxScoreRightPatients;
			
			echo "</td><td>";
			
			echo $maxScoreLeftPatients;
			
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
				
	
				
				<h3 style="text-align: center;">Patients (Level 1)</h3>
				
				<?php if($countForPatientsStatsLevel1 > 0) {
		echo "<table>
					<tr>
						<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
				echo $minScoreRightPatientsLevel1;
			
			echo "</td><td>";
			
	echo $minScoreLeftPatientsLevel1;		
			
			echo "</td><td>";
			
		echo $maxScoreRightPatientsLevel1;
			
			echo "</td><td>";
			
			echo $maxScoreLeftPatientsLevel1;
			
			echo "</td><td>";
			
			echo $averageScoreRightPatientsLevel1;
			
			echo "</td><td>";
			
			echo $averageScoreLeftPatientsLevel1;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
				
				
				
					<h3 style="text-align: center;">Patients (Level 2)</h3>
				
				<?php if($countForPatientsStatsLevel2 > 0) {
		echo "<table>
					<tr>
						<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
				echo $minScoreRightPatientsLevel2;
			
			echo "</td><td>";
			
	echo $minScoreLeftPatientsLevel2;		
			
			echo "</td><td>";
			
		echo $maxScoreRightPatientsLevel2;
			
			echo "</td><td>";
			
			echo $maxScoreLeftPatientsLevel2;
			
			echo "</td><td>";
			
			echo $averageScoreRightPatientsLevel2;
			
			echo "</td><td>";
			
			echo $averageScoreLeftPatientsLevel2;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
				



				



				


<h3 style="text-align: center;">Patients (Level 3)</h3>
				
				<?php if($countForPatientsStatsLevel3 > 0) {
		echo "<table>
					<tr>
						<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
				echo $minScoreRightPatientsLevel3;
			
			echo "</td><td>";
			
	echo $minScoreLeftPatientsLevel3;		
			
			echo "</td><td>";
			
		echo $maxScoreRightPatientsLevel3;
			
			echo "</td><td>";
			
			echo $maxScoreLeftPatientsLevel3;
			
			echo "</td><td>";
			
			echo $averageScoreRightPatientsLevel3;
			
			echo "</td><td>";
			
			echo $averageScoreLeftPatientsLevel3;
			
			echo "</td></tr>";
	echo "</table>";
		} else {
		echo "<p style='text-align: center;'>There are no scores saved yet.</p>";		
}
				?>
				
				



				


				
<h3 style="text-align: center;">Patients (Level 4)</h3>
				
				<?php if($countForPatientsStatsLevel4 > 0) {
		echo "<table>
					<tr>
						<th>Quickest Time (Right)</th>
		<th>Quickest Time (Left)</th>
		<th>Slowest Time (Right)</th>
		<th>Slowest Time (Left)</th>
			<th>Average Time (Right)</th>
		<th>Average Time (Left)</th>
					</tr>";
	

			
			
			echo "<tr><td>";
			
				echo $minScoreRightPatientsLevel4;
			
			echo "</td><td>";
			
	echo $minScoreLeftPatientsLevel4;		
			
			echo "</td><td>";
			
		echo $maxScoreRightPatientsLevel4;
			
			echo "</td><td>";
			
			echo $maxScoreLeftPatientsLevel4;
			
			echo "</td><td>";
			
			echo $averageScoreRightPatientsLevel4;
			
			echo "</td><td>";
			
			echo $averageScoreLeftPatientsLevel4;
			
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