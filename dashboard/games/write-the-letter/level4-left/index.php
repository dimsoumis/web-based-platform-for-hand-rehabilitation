<?php include '../../../../games-head.php';?>
	
<title>Write the Letter - Level 4</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		   
var arcStartAngle = 0; // min 0 | max 6.3
var arcEndAngle = 0; // min 0 | max 6.3
var drawClockwise = true;
		   
var arcGoalAch = 0;

		   
document.getElementById("clockwiseButton").addEventListener("click", choseClockwise);
function choseClockwise() {
	drawClockwise = true;
	document.getElementById("clockwiseButton").style.opacity = "1";
	document.getElementById("counterclockwiseButton").style.opacity = "0.5";
}
		   
document.getElementById("counterclockwiseButton").addEventListener("click", choseCounterclockwise);
function choseCounterclockwise() {
	drawClockwise = false;
	document.getElementById("clockwiseButton").style.opacity = "0.5";
	document.getElementById("counterclockwiseButton").style.opacity = "1";
}		   
		   
		   
ctx.beginPath();
ctx.arc(960, 540, 120, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.arc(960, 540, 220, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.arc(960, 540, 170, arcStartAngle, arcEndAngle, drawClockwise);
ctx.lineWidth = 100;
ctx.strokeStyle = "#333";
ctx.globalAlpha = 0.5;
ctx.stroke();
ctx.closePath();
		   
		   
	
	function drawArc(start, end, fora) {
ctx.beginPath();
ctx.arc(960, 540, 120, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.arc(960, 540, 220, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();

ctx.beginPath();
ctx.arc(960, 540, 170, start, end, fora);
ctx.lineWidth = 100;
ctx.strokeStyle = "#333";
ctx.globalAlpha = 0.5;
ctx.stroke();
ctx.closePath();
}
		   

		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
/* timer START */

var exerStarted = 0;
var timerStarted = false;
var seconds = 0;
	
var countdown = setInterval(function() {
	if (timerStarted == true) {
  if (seconds >= 600) {
	   clearInterval(countdown);
	  localStorage.setItem("writeTheLetterLevel4LeftScore", seconds);
	    exerStarted = 0;
  document.getElementById("timeLeft").innerHTML = "10:00";
	  
	  		        Swal.fire({
title: 'Maximum time reached! \n The exercise is not completed.',
showDenyButton: true,
showCancelButton: true,
  confirmButtonText: `Play Again`,
  denyButtonText: `Go Back`,
  cancelButtonText: `Save Score`,
}).then((result) => {
  if (result.isConfirmed) {
   location.reload()
  } else if (result.isDenied) {
   window.location.href = "../index.php";
  } else {
window.location.href = "save-score.php";
  }
});
	  
  } else if (seconds >= 550) {
  document.getElementById("timeLeft").innerHTML = "09:" + (seconds - 540);
  } else if (seconds >= 540) {
  document.getElementById("timeLeft").innerHTML = "09:0" + (seconds - 540);
  } else if (seconds >= 490) {
  document.getElementById("timeLeft").innerHTML = "08:" + (seconds - 480);
  } else if (seconds >= 480) {
  document.getElementById("timeLeft").innerHTML = "08:0" + (seconds - 480);
  } else if (seconds >= 430) {
  document.getElementById("timeLeft").innerHTML = "07:" + (seconds - 420);
  } else if (seconds >= 420) {
  document.getElementById("timeLeft").innerHTML = "07:0" + (seconds - 420);
  } else if (seconds >= 370) {
  document.getElementById("timeLeft").innerHTML = "06:" + (seconds - 360);
  } else if (seconds >= 360) {
  document.getElementById("timeLeft").innerHTML = "06:0" + (seconds - 360);
  } else if (seconds >= 310) {
  document.getElementById("timeLeft").innerHTML = "05:" + (seconds - 300);
  } else if (seconds >= 300) {
  document.getElementById("timeLeft").innerHTML = "05:0" + (seconds - 300);
  } else if (seconds >= 250) {
  document.getElementById("timeLeft").innerHTML = "04:" + (seconds - 240);
  } else if (seconds >= 240) {
  document.getElementById("timeLeft").innerHTML = "04:0" + (seconds - 240);
  } else if (seconds >= 190) {
  document.getElementById("timeLeft").innerHTML = "03:" + (seconds - 180);
  } else if (seconds >= 180) {
  document.getElementById("timeLeft").innerHTML = "03:0" + (seconds - 180);
  } else if (seconds >= 130) {
  document.getElementById("timeLeft").innerHTML = "02:" + (seconds - 120);
  } else if (seconds >= 120) {
  document.getElementById("timeLeft").innerHTML = "02:0" + (seconds - 120);
  } else if (seconds >= 70) {
  document.getElementById("timeLeft").innerHTML = "01:" + (seconds - 60);
  } else if (seconds >= 60) {
  document.getElementById("timeLeft").innerHTML = "01:0" + (seconds - 60);
  } else if (seconds >= 10 && seconds < 60) {
  document.getElementById("timeLeft").innerHTML = "00:" + seconds;
  } else {
	   document.getElementById("timeLeft").innerHTML = "00:0" + seconds;
  }
	 seconds++;
}
}, 1000);
		   
/* timer END */	   

/*dim custom code 1 start*/
		   
var grabbing = false;
	var positionSaved = false;
		
		   
		   document.getElementById("startButton").addEventListener("click", startExercise);
		   
		   function startExercise() {
			exerStarted = 1;
			   document.getElementById("introMessage").style.display = "none";
			   
			   document.getElementById("quitButton").style.display = "block";
			   
			   timerStarted = true;
			   countdown;
		   }
		   
		   
		     document.getElementById("quitButton").addEventListener("click", quitExercise);
		   
		   function quitExercise() {
			exerStarted = 0;
			 clearInterval(countdown);

			   		        Swal.fire({
title: 'Excersice was stopped.',
showDenyButton: true,
showCancelButton: false,
  confirmButtonText: `Play Again`,
  denyButtonText: `Go Back`,
  cancelButtonText: `Save Score`,
}).then((result) => {
  if (result.isConfirmed) {
   location.reload()
  } else if (result.isDenied) {
   window.location.href = "../index.php";
  } else {
 location.reload()
  }
});
		   }

 /*dim custom code 1 end*/
 
const videoElement = document.getElementsByClassName('input_video')[0];
const canvasElement = document.getElementsByClassName('output_canvas')[0];
const canvasCtx = canvasElement.getContext('2d');

function onResults(results) {
  canvasCtx.save();
  canvasCtx.clearRect(0, 0, canvasElement.width, canvasElement.height);
	
  canvasCtx.drawImage(
      results.image, 0, 0, canvasElement.width, canvasElement.height);	
	
  if (results.multiHandLandmarks) {
    for (const landmarks of results.multiHandLandmarks) {
      drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS,
                     {color: '#000000', lineWidth: 1});
      drawLandmarks(canvasCtx, landmarks, {color: '#000000', lineWidth: 1});
    

/*dim custom code 2 start*/
		
	

		const hand = results.multiHandLandmarks[0];
    
  const xAntiheiras = hand[4].x; 
  const yAntiheiras = hand[4].y;
  const zAntiheiras = hand[4].z;
  
  const xDiktis = hand[8].x; 
  const yDiktis = hand[8].y;
  const zDiktis = hand[8].z;
  
  const xMesos = hand[12].x; 
  const yMesos = hand[12].y;
  const zMesos = hand[12].z;
  
   var difxAntiheirasDiktis = xAntiheiras - xDiktis;
  var difyAntiheirasDiktis = yAntiheiras - yDiktis;
   var difxAntiheirasMesos = xAntiheiras - xMesos;
  var difyAntiheirasMesos = yAntiheiras - yMesos;
  
  var difAntiheirasDiktis = Math.sqrt(difxAntiheirasDiktis * difxAntiheirasDiktis + difyAntiheirasDiktis * difyAntiheirasDiktis);
   var difAntiheirasMesos = Math.sqrt(difxAntiheirasMesos * difxAntiheirasMesos + difyAntiheirasMesos * difyAntiheirasMesos);
		
		
		const thesiAntiheiraX = xAntiheiras * 1920;
		const thesiAntiheiraY = yAntiheiras * 1080;
		
		var apostasiAntiheiraApoKentro = Math.sqrt((thesiAntiheiraX - 960) * (thesiAntiheiraX - 960) + (thesiAntiheiraY - 540) * (thesiAntiheiraY - 540));
		
		
			if (exerStarted > 0) {
				
				if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && positionSaved == false) {
				localStorage.setItem("previousPositionX", thesiAntiheiraX);
					localStorage.setItem("previousPositionY", thesiAntiheiraY);
					positionSaved = true;
				} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
					positionSaved = true;
				} else {
					positionSaved = false;
				}
		
				
		if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && apostasiAntiheiraApoKentro > 120 && apostasiAntiheiraApoKentro < 220 && grabbing == false) {
			


				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
					if (arcStartAngle == 0 && thesiAntiheiraY > 540) {
     	arcStartAngle = (1180 - thesiAntiheiraX) * (3.15/440);
			} else if (arcStartAngle == 0 && thesiAntiheiraY < 540) {
     	arcStartAngle = (thesiAntiheiraX - 740) * (3.15/440) + 3.15;
			}
			
			if (drawClockwise == true) {
			if (thesiAntiheiraY >= 540) {
     	arcEndAngle = (1180 - thesiAntiheiraX) * (3.15/440) - 0.4;
			} else if (thesiAntiheiraY < 540) {
     	arcEndAngle = (thesiAntiheiraX - 740) * (3.15/440) + 3.15 - 0.4;
			}
			
			} else if (drawClockwise == false) {
			if (thesiAntiheiraY >= 540) {
     	arcEndAngle = (1180 - thesiAntiheiraX) * (3.15/440) + 0.4;
			} else if (thesiAntiheiraY < 540) {
     	arcEndAngle = (thesiAntiheiraX - 740) * (3.15/440) + 3.15 + 0.4;
			}
			
			}
			
			
			if (thesiAntiheiraY > 540 && drawClockwise == true && localStorage.getItem("previousPositionY") < 540) {
				if (thesiAntiheiraX < 960) {
	localStorage.setItem("previousPositionX", 1920);
				} else if (localStorage.getItem("previousPositionX") != 1920) {
					alert("You are going backwards!");
						arcEndAngle = arcStartAngle - 0.4;
				}
			} else if (thesiAntiheiraY < 540 && drawClockwise == true && localStorage.getItem("previousPositionY") > 540) {
		if (thesiAntiheiraX > 960) {
	localStorage.setItem("previousPositionX", 0);
				}
				else if (localStorage.getItem("previousPositionX") != 0) {
					 alert("You are going backwards!");
						arcEndAngle = arcStartAngle - 0.4;
				}
			} else if (thesiAntiheiraY > 540 && drawClockwise == true && localStorage.getItem("previousPositionY") > 540) {
		if (localStorage.getItem("previousPositionX") > thesiAntiheiraX) { 
		arcEndAngle = arcStartAngle - 0.4;
			}
				} else if (thesiAntiheiraY < 540 && drawClockwise == true && localStorage.getItem("previousPositionY") < 540) {
				if (localStorage.getItem("previousPositionX") < thesiAntiheiraX) {
		arcEndAngle = arcStartAngle - 0.4;
			}
				}
			
			
			
			
			
			
			
			
			
			
						if (thesiAntiheiraY > 540 && drawClockwise == false && localStorage.getItem("previousPositionY") < 540) {
				if (thesiAntiheiraX > 960) {
	localStorage.setItem("previousPositionX", 0);
				} else if (localStorage.getItem("previousPositionX") != 0) {
					alert("You are going backwards!");
						arcEndAngle = arcStartAngle + 0.4;
				}
			} else if (thesiAntiheiraY < 540 && drawClockwise == false && localStorage.getItem("previousPositionY") > 540) {
		if (thesiAntiheiraX < 960) {
	localStorage.setItem("previousPositionX", 1920);
				}
				else if (localStorage.getItem("previousPositionX") != 1920) {
					 alert("You are going backwards!");
						arcEndAngle = arcStartAngle + 0.4;
				}
			} else if (thesiAntiheiraY > 540 && drawClockwise == false && localStorage.getItem("previousPositionY") > 540) {
		if (localStorage.getItem("previousPositionX") < thesiAntiheiraX) { 
		arcEndAngle = arcStartAngle + 0.4;
			}
				} else if (thesiAntiheiraY < 540 && drawClockwise == false && localStorage.getItem("previousPositionY") < 540) {
				if (localStorage.getItem("previousPositionX") > thesiAntiheiraX) {
		arcEndAngle = arcStartAngle + 0.4;
			}
				}

			
			
			
			
		
			
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawArc(arcStartAngle, arcEndAngle, drawClockwise);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			} else {
			grabbing = false;
		arcStartAngle = 0;
		arcEndAngle = 0;
			//drawClockwise = true;
				
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawArc(arcStartAngle, arcEndAngle, drawClockwise);
	}
				
			
		
		
		
	
		
		
		if ((arcStartAngle - arcEndAngle > -0.1 && arcStartAngle < arcEndAngle && drawClockwise == true) || (arcStartAngle - arcEndAngle < 0.1 && arcStartAngle > arcEndAngle && drawClockwise == false)) {
		   arcGoalAch = 1;
		}
		
		
		
		if (arcGoalAch > 0) {
		
  localStorage.setItem("writeTheLetterLevel4LeftScore", seconds);
			
					exerStarted = 0;
			 clearInterval(countdown);

			   		        Swal.fire({
title: 'Congratulations! You completed the exercise! \n Your score is ' + seconds + ' seconds.',
showDenyButton: true,
showCancelButton: true,
  confirmButtonText: `Play Again`,
  denyButtonText: `Go Back`,
  cancelButtonText: `Save Score`,
}).then((result) => {
  if (result.isConfirmed) {
   location.reload()
  } else if (result.isDenied) {
   window.location.href = "../index.php";
  } else {
   window.location.href = "save-score.php";
  }
});
			
		}

				
					}
		
 /*dim custom code 2 end*/
 
}
  }
  canvasCtx.restore();
}

const hands = new Hands({locateFile: (file) => {
  return `https://cdn.jsdelivr.net/npm/@mediapipe/hands/${file}`;
}});
hands.setOptions({
	maxNumHands: 1,
	modelComplexity: 0,
  minDetectionConfidence: 0.5,
  minTrackingConfidence: 0.5
});
hands.onResults(onResults);

const camera = new Camera(videoElement, {
  onFrame: async () => {
    await hands.send({image: videoElement});
  },
	  width: 480,
  height: 270
});
camera.start();
  </script>

  </head>
  
  <body style="margin: 0px;">
  
    <div class="container" style="position: absolute; left: 0; top: 0; z-index: 9999 !important;">
   <video style="display: none;" class="input_video"></video>
    <canvas class="output_canvas" style="max-width: 100%;
  max-height: 100vh;
  top: 50%;
  position: fixed;
  transform: translate(-50%, -50%) rotateY(180deg);
  left: 50%;" width="1920px" height="1080px"></canvas>
  
	  
	  
	      <canvas id="videoCanvas" style="max-width: 100%;
  max-height: 100vh;
  top: 50%;
  position: fixed;
  transform: translate(-50%, -50%) rotateY(180deg);
  left: 50%;" width="1920px" height="1080px"></canvas>
	  
	  </div>

	   <div id="timeArea">Time: <div id="timeLeft">00:00</div></div>
	  
	  <div id="introMessage">
		    <h1>Choose:</h1>
		  <button id="clockwiseButton">Clockwise</button>
		    <button id="counterclockwiseButton">Counter-Clockwise</button>
		  <h1>Are you ready?</h1>
		  <button id="startButton">Start</button>
	  </div>  

		  <button id="quitButton">Quit</button>
	  
  </body>
</html>