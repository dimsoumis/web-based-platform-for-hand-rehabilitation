<?php include '../../../../games-head.php';?>
	
<title>Shapes & Colors - Level 4</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		   
 var xCirc1 = 320;
	var yCirc1 = 860;
		   
    var xCirc2 = 640;
	var yCirc2 = 860;
		   
 var xCirc3 = 960;
	var yCirc3 = 860;
		   
		    var xCirc4 = 1280;
	var yCirc4 = 860;
		   
		    var xCirc5 = 1600;
	var yCirc5 = 860;
		   
		   var circ1GoalAch = 0;
		   var circ2GoalAch = 0;
		   var circ3GoalAch = 0;
		   var circ4GoalAch = 0;
		   var circ5GoalAch = 0;

ctx.beginPath();
ctx.arc(xCirc1, yCirc1, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
		   
		   
ctx.beginPath();
ctx.arc(960, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#f00";
ctx.globalAlpha = 1;
ctx.stroke();
		   
		   
		   
ctx.beginPath();
ctx.arc(xCirc2, yCirc2, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
		   
		   
ctx.beginPath();
ctx.arc(1290, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#0f0";
ctx.globalAlpha = 1;
ctx.stroke();
		   

		   
ctx.beginPath();
ctx.arc(xCirc3, yCirc3, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
		   
		   
ctx.beginPath();
ctx.arc(1620, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#00f";
ctx.globalAlpha = 1;
ctx.stroke();	
		   
		   
		   
		   
ctx.beginPath();
ctx.arc(xCirc4, yCirc4, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#ff0";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
		   
		   
ctx.beginPath();
ctx.arc(300, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#ff0";
ctx.globalAlpha = 1;
ctx.stroke();	
		   
		   
		   
		   
		   
ctx.beginPath();
ctx.arc(xCirc5, yCirc5, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#f0f";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
		   
		   
ctx.beginPath();
ctx.arc(630, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#f0f";
ctx.globalAlpha = 1;
ctx.stroke();
	

		   
		   
		   	function drawCirc1(x, y) {
		ctx.beginPath();
ctx.arc(x, y, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
				ctx.closePath(); // Line to bottom-left corner
				
				
ctx.beginPath();
ctx.arc(960, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#f00";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
}
		   
		   
		   
		   
		   	   	function drawCirc2(x, y) {
		ctx.beginPath();
ctx.arc(x, y, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
				ctx.closePath(); // Line to bottom-left corner
				
				
ctx.beginPath();
ctx.arc(1290, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#0f0";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
}
		   
		   
		   
		   
		   
		   
		   	   	function drawCirc3(x, y) {
		ctx.beginPath();
ctx.arc(x, y, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
				ctx.closePath(); // Line to bottom-left corner
				
				
ctx.beginPath();
ctx.arc(1620, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#00f";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
}
		   
		   
		   
		   	   	function drawCirc4(x, y) {
		ctx.beginPath();
ctx.arc(x, y, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#ff0";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
				ctx.closePath(); // Line to bottom-left corner
				
				
ctx.beginPath();
ctx.arc(300, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#ff0";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
}
		   
		   
		   
		   
		   	   	function drawCirc5(x, y) {
		ctx.beginPath();
ctx.arc(x, y, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#f0f";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
				ctx.closePath(); // Line to bottom-left corner
				
				
ctx.beginPath();
ctx.arc(630, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = "#f0f";
ctx.globalAlpha = 1;
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
	  localStorage.setItem("shapesLevel4LeftScore", seconds);
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
		
		
			if (exerStarted > 0) {
				
	if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc1 - 100 && thesiAntiheiraX < xCirc1 + 100 && thesiAntiheiraY > yCirc1 - 100 && thesiAntiheiraY < yCirc1 + 100 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xCirc1 = thesiAntiheiraX;
		yCirc1 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
drawCirc1(xCirc1, yCirc1);
drawCirc2(xCirc2, yCirc2);
			drawCirc3(xCirc3, yCirc3);
			drawCirc4(xCirc4, yCirc4);
			drawCirc5(xCirc5, yCirc5);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc2 - 100 && thesiAntiheiraX < xCirc2 + 100 && thesiAntiheiraY > yCirc2 - 100 && thesiAntiheiraY < yCirc2 + 100 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xCirc2 = thesiAntiheiraX;
		yCirc2 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
drawCirc1(xCirc1, yCirc1);
drawCirc2(xCirc2, yCirc2);
			drawCirc3(xCirc3, yCirc3);
			drawCirc4(xCirc4, yCirc4);
			drawCirc5(xCirc5, yCirc5);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc3 - 100 && thesiAntiheiraX < xCirc3 + 100 && thesiAntiheiraY > yCirc3 - 100 && thesiAntiheiraY < yCirc3 + 100 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xCirc3 = thesiAntiheiraX;
		yCirc3 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
drawCirc1(xCirc1, yCirc1);
drawCirc2(xCirc2, yCirc2);
			drawCirc3(xCirc3, yCirc3);
			drawCirc4(xCirc4, yCirc4);
			drawCirc5(xCirc5, yCirc5);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc4 - 100 && thesiAntiheiraX < xCirc4 + 100 && thesiAntiheiraY > yCirc4 - 100 && thesiAntiheiraY < yCirc4 + 100 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xCirc4 = thesiAntiheiraX;
		yCirc4 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
drawCirc1(xCirc1, yCirc1);
drawCirc2(xCirc2, yCirc2);
			drawCirc3(xCirc3, yCirc3);
			drawCirc4(xCirc4, yCirc4);
			drawCirc5(xCirc5, yCirc5);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc5 - 100 && thesiAntiheiraX < xCirc5 + 100 && thesiAntiheiraY > yCirc5 - 100 && thesiAntiheiraY < yCirc5 + 100 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xCirc5 = thesiAntiheiraX;
		yCirc5 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
drawCirc1(xCirc1, yCirc1);
drawCirc2(xCirc2, yCirc2);
			drawCirc3(xCirc3, yCirc3);
			drawCirc4(xCirc4, yCirc4);
			drawCirc5(xCirc5, yCirc5);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
	}
				
			
		
		
		
		
		
	
		   


				
				
		
			if (xCirc1 > 920 && xCirc1 < 1000 && yCirc1  > 205 & yCirc1  < 285) {
					if (hasLetGo == true) {
		   circ1GoalAch = 1;
		}
					} else {
		   circ1GoalAch = 0;
		}
				
				
							if (xCirc2 > 1250 && xCirc2 < 1330 && yCirc2  > 205 & yCirc2  < 285) {
					if (hasLetGo == true) {
		   circ2GoalAch = 1;
		}
					} else {
		   circ2GoalAch = 0;
		}
				
				
							if (xCirc3 > 1580 && xCirc3 < 1660 && yCirc3 > 205 & yCirc3 < 285) {
					if (hasLetGo == true) {
		   circ3GoalAch = 1;
		}
					} else {
		   circ3GoalAch = 0;
		}
				
							if (xCirc4 > 260 && xCirc4 < 340 && yCirc4  > 205 & yCirc4  < 285) {
					if (hasLetGo == true) {
		   circ4GoalAch = 1;
		}
					} else {
		   circ4GoalAch = 0;
		}
				
				
							if (xCirc5 > 590 && xCirc5 < 670 && yCirc5  > 205 & yCirc5  < 285) {
					if (hasLetGo == true) {
		   circ5GoalAch = 1;
		}
					} else {
		   circ5GoalAch = 0;
		}
		
		
		
		
		
		
		if (circ1GoalAch > 0 && circ2GoalAch > 0 && circ3GoalAch > 0 && circ4GoalAch > 0 && circ5GoalAch > 0) {
		
  localStorage.setItem("shapesLevel4LeftScore", seconds);
			
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
		  <h1>Are you ready?</h1>
		  <button id="startButton">Start</button>
	  </div>  

		  <button id="quitButton">Quit</button>
	  
  </body>
</html>