
<?php include '../../loggedin-head.php';?>

<main>
	
	<h1 id="pageTitle">Collage</h1>
	
<p style="text-align: center;">Choose the hand you want to excersice with, see instructions about how to perform the exercise or see previous scores.</p>
	
	<div class="row" style="justify-content: space-around;">
		<div class="column2">
			<a href="left-hand/index.php"><img id="level1img" style="width: 200px;" src="/images/collage.png" /></a>
			<a href="left-hand/index.php"><h3 id="level1txt" style="text-align: center;">Left Handed</h3></a>
	</div>
		<div class="column2">
			<a href="right-hand/index.php"><img id="level2img" style="width: 200px;" src="/images/collage.png" /></a>
				<a href="right-hand/index.php"><h3 id="level2txt" style="text-align: center;">Right Handed</h3></a>
	</div>
		
	
		

	</div>
	
	
	
	

<p style="text-align: center;">
<a href="instructions.php"><button>Instructions</button></a>
</p>
<p style="text-align: center;">
<a href="previous-scores.php"><button>Previous Scores</button></a>
</p>


	
</main>



<?php include '../../../main-footer.php';?>
