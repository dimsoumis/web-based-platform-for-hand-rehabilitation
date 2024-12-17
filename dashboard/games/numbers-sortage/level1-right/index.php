<?php include '../../../../games-head.php';?>
	
<title>Numbers Sortage - Level 1</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		   

var xTetr1 = 1400;
var yTetr1 = 100;
var xTetr2 = 150;
var yTetr2 = 800;
	
var rect1GoalColor = "#000"; 
var rect2GoalColor = "#000";
		   
var rect1GoalAch = 0;
var rect2GoalAch = 0;
	
	function drawShapes(xT1, yT1, cT1, xT2, yT2, cT2) {
		
		// square 1
		
				ctx.beginPath();	
ctx.rect(260, 460, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(240, 440, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("1", 260 + 75, 460 + 130);
		ctx.closePath();
		
			// square 2
		
		ctx.beginPath();	
ctx.rect(xT1, yT1, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(540, 440, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT1;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("2", xT1 + 75, yT1 + 130);
		ctx.closePath();
		
		
			// square 3
		
			ctx.beginPath();	
ctx.rect(xT2, yT2, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 440, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT2;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("3", xT2 + 75, yT2 + 130);
		ctx.closePath();
		
			// square 4
		
				ctx.beginPath();	
ctx.rect(1160, 460, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1140, 440, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("4", 1160 + 75, 460 + 130);
		ctx.closePath();
		
		
			// square 5
		
				ctx.beginPath();	
ctx.rect(1460, 460, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1440, 440, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("5", 1460 + 75, 460 + 130);
		ctx.closePath();
		
	
}
		   
		   
   drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor);

		   
		   
		   
	   
		   
		   
		   
/* timer START */

var exerStarted = 0;
var timerStarted = false;
var seconds = 0;
	
var countdown = setInterval(function() {
	if (timerStarted == true) {
  if (seconds >= 600) {
	   clearInterval(countdown);
	  localStorage.setItem("numbersSortageLevel1RightScore", seconds);
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
var hasLetGo = true;
var grabbingTetr2 = false;
		   
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
		
		
		var thesiAntiheiraX = xAntiheiras * 1920;
		var thesiAntiheiraY = yAntiheiras * 1080;
		thesiAntiheiraX = -1 * (thesiAntiheiraX - 1920);
		
			if (exerStarted > 0) {
	
 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr1 && thesiAntiheiraX < xTetr1 + 200
		   && thesiAntiheiraY > yTetr1 && thesiAntiheiraY < yTetr1 + 200 && grabbing == false && grabbingTetr2 == false && rect1GoalAch != 1) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr1 = thesiAntiheiraX - 100;
		yTetr1 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	  drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr2 && thesiAntiheiraX < xTetr2 + 200
		   && thesiAntiheiraY > yTetr2 && thesiAntiheiraY < yTetr2 + 200 && grabbing == false && rect2GoalAch != 1) {
			
			hasLetGo = false;
grabbingTetr2 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr2 = thesiAntiheiraX - 100;
		yTetr2 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	  drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr2 = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  grabbingTetr2 = false;
	}
		

		
	
	if (xTetr1 > 520 && xTetr1 < 600 && yTetr1 > 420 & yTetr1 < 500) {
			rect1GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect1GoalAch = 1;
			}
		} else {
			rect1GoalColor = "#000";
		   rect1GoalAch = 0;
		}
		
				
	if (xTetr2 > 820 && xTetr2 < 900 && yTetr2 > 420 & yTetr2 < 500) {
			rect2GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect2GoalAch = 1;
			}
		} else {
			rect2GoalColor = "#000";
		   rect2GoalAch = 0;
		}
		
		
		if (rect1GoalAch > 0 && rect2GoalAch > 0) {
		
  localStorage.setItem("numbersSortageLevel1RightScore", seconds);
			
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
  transform: translate(-50%, -50%);
  left: 50%;" width="1920px" height="1080px"></canvas>
	  
	  </div>

	   <div id="timeArea">Time: <div id="timeLeft">00:00</div></div>
	  
	  <div id="introMessage">
		  <h1>Are you ready?</h1>
		  <button id="startButton">Start</button>
	  </div>  

		  <button id="quitButton">Quit</button>
	  
  </body>
</html>