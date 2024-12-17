
<?php include '../../loggedin-head.php';?>

<main>
	
	<h1 id="pageTitle">Write the Letter</h1>
	
<p style="text-align: center;">Choose the level you want to exercise at, see instructions about how to perform the exercise or see previous scores.</p>
	
	<div class="row" style="justify-content: space-around;">
		<div class="column2">
			<img id="level1img" style="width: 200px;" src="/images/write-the-letter.png" />
			<h3 id="level1txt" style="text-align: center;">Level 1<br>(write the letter "I")</h3>
	</div>
		<div class="column2">
			<img id="level2img" style="width: 200px;" src="/images/write-the-letter.png" />
				<h3 id="level2txt" style="text-align: center;">Level 2<br>(write the letter "L")</h3>
	</div>

	
		

	</div>
	
	
		<div class="row" style="justify-content: space-around;">
			
				<div class="column3">
			<img id="level3img" style="width: 200px;" src="/images/write-the-letter.png" />
				<h3 id="level3txt" style="text-align: center;">Level 3<br>(write the letter "A")</h3>
	</div>
			
	<div class="column3">
			<img id="level4img" style="width: 200px;" src="/images/write-the-letter.png" />
				<h3 id="level4txt" style="text-align: center;">Level 4<br>(write the letter "O")</h3>
	</div>


		<div class="column3">
			<img id="level5img" style="width: 200px;" src="/images/write-the-letter.png" />
				<h3 id="level5txt" style="text-align: center;">Level 5<br>(write the word "HAT")</h3>
	</div>
	</div>
	

<p style="text-align: center;">
<a href="instructions.php"><button>Instructions</button></a>
</p>
<p style="text-align: center;">
<a href="previous-scores.php"><button>Previous Scores</button></a>
</p>


	
</main>

<script>
	
	document.getElementById("level1img").addEventListener("click", chooseHand1);
		document.getElementById("level1txt").addEventListener("click", chooseHand1); 
	
	function chooseHand1() {
				   		        Swal.fire({
title: 'Which hand do you want to exercise?',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Left`,
  denyButtonText: `Right`,
  cancelButtonText: ``,
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href = "level1-left/index.php";
  } else if (result.isDenied) {
   window.location.href = "level1-right/index.php";
  } 
});	
	}
	
	
	
	
	
	
	
		document.getElementById("level2img").addEventListener("click", chooseHand2);
		document.getElementById("level2txt").addEventListener("click", chooseHand2); 
	
	function chooseHand2() {
				   		        Swal.fire({
title: 'Which hand do you want to exercise?',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Left`,
  denyButtonText: `Right`,
  cancelButtonText: ``,
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href = "level2-left/index.php";
  } else if (result.isDenied) {
   window.location.href = "level2-right/index.php";
  } 
});	
	}
	
	
	
	
	
	
			document.getElementById("level3img").addEventListener("click", chooseHand3);
		document.getElementById("level3txt").addEventListener("click", chooseHand3); 
	
	function chooseHand3() {
				   		        Swal.fire({
title: 'Which hand do you want to exercise?',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Left`,
  denyButtonText: `Right`,
  cancelButtonText: ``,
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href = "level3-left/index.php";
  } else if (result.isDenied) {
   window.location.href = "level3-right/index.php";
  } 
});	
	}
	
	
	
	
	
	
				document.getElementById("level4img").addEventListener("click", chooseHand4);
		document.getElementById("level4txt").addEventListener("click", chooseHand4); 
	
	function chooseHand4() {
				   		        Swal.fire({
title: 'Which hand do you want to exercise?',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Left`,
  denyButtonText: `Right`,
  cancelButtonText: ``,
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href = "level4-left/index.php";
  } else if (result.isDenied) {
   window.location.href = "level4-right/index.php";
  } 
});	
	}
	
	
	
	
	
	
	
	
	
	
					document.getElementById("level5img").addEventListener("click", chooseHand5);
		document.getElementById("level5txt").addEventListener("click", chooseHand5); 
	
	function chooseHand5() {
				   		        Swal.fire({
title: 'Which hand do you want to exercise?',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Left`,
  denyButtonText: `Right`,
  cancelButtonText: ``,
}).then((result) => {
  if (result.isConfirmed) {
   window.location.href = "level5-left/index.php";
  } else if (result.isDenied) {
   window.location.href = "level5-right/index.php";
  } 
});	
	}
</script>

<?php include '../../../main-footer.php';?>
