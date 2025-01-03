<html>
<head>
	<meta charset="utf-8">
		  <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
<title>128</title>
<link rel="icon" type="image/png" href="/images/favicon.png"/>
	
	<link rel="stylesheet" href="/styles/main.css">
	<link rel="stylesheet" href="/styles/responsive.css">
  </head>
  
  <body class="saveScorePage" style="display: flex;
  justify-content: center;">
	  <main>
	  <h1 style="text-align: center; margin-top: 50px;">Are you sure you want to save your score?</h1>
	  
	    <div class="row" style="font-size: 25px;">
			 <div class="column1"><strong>Score</strong>: <div id="scoreAchieved" style="display: inline;"></div></div>
			<div class="column1"><strong>Time</strong>: <div id="timeAchieved" style="display: inline;"></div></div>
			 <div class="column1"><strong>Hand Used</strong>: Right</div>
	  </div>
	  
	  <div class="row">
		  
		  
		  <div class="column1">
		  <form action="submit-score.php" method="POST">
			  <input id="score" name="score" type="number" style="display: none;" /><br/><br/>
<input id="time" name="time" type="number" style="display: none;" /><br/><br/>
		  <input id="submitScore" type="submit" value="Yes">
	  </form>
	  </div>
		  </div>
	  
	  <hr style="color: #fff;
height: 5px;
background: #fff;
margin: 40px 0px;">
	  
	   <div class="row">
		  <div class="column2">
	  <a href="index.php"><button>Play Again</button></a> 
			   </div>
		   	  <div class="column2">
	  <a href="../index.php"><button>Go Back</button></a> 
		   </div>
		  </div>
	  
	  </main>
		  <script type="text/javascript"> 
			  var userScore =   localStorage.getItem("ekatoneikosioktoRightScore");
			  document.getElementById("scoreAchieved").innerHTML = userScore;
  document.getElementById("score").setAttribute('value', userScore);
			  
			   var userTime =   localStorage.getItem("ekatoneikosioktoRightTime");
			  document.getElementById("timeAchieved").innerHTML = userTime;
  document.getElementById("time").setAttribute('value', userTime);
	  </script>
  </body>
</html>

