<?php include '../../../../games-head.php';?>
	
<title>Do the Math - Level 3</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		   

var xTetr1_1 = 1300;
var yTetr1_1 = 800;
	
var rect1_1GoalColor = "#000"; 
		   
var rect1_1GoalAch = 0;
		   
		   
var xTetr1_2 = 600;
var yTetr1_2 = 140;
	
var rect1_2GoalColor = "#000"; 
		   
var rect1_2GoalAch = 0;
		   
var heightOfBlocks1 = 0;
		   
var rect1GoalAch = 0;
	
	function drawShapes1(xT1, yT1, cT1, xT2, yT2, cT2, h) {
		
			// square 1
		
	ctx.beginPath();	
ctx.rect(260, 460 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(240, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("4", 260 + 75, 460 + 130 + h);
		ctx.closePath();
		
			// square 2
		
		ctx.beginPath();	
ctx.rect(xT1, yT1 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT1;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("5", xT1 + 75, yT1 + 130 + h);
		ctx.closePath();
		
		
		
			// square 3
		
				ctx.beginPath();	
ctx.rect(xT2, yT2 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1440, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT2;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("9", xT2 + 75, yT2 + 130 + h);
		ctx.closePath();
		
			// plus sign
		
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("+", 560 + 75, 460 + 130 + h);
		ctx.closePath();
		
			// equality sign
		
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("=", 1160 + 75, 460 + 130 + h);
		ctx.closePath();
		
	
}
		   
		   
   drawShapes1(xTetr1_1, yTetr1_1, rect1_1GoalColor, xTetr1_2, yTetr1_2, rect1_2GoalColor, heightOfBlocks1);

		   
		   
		   
	   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   var xTetr2_1 = 333;
var yTetr2_1 = 110;
	
var rect2_1GoalColor = "#000"; 
		   
var rect2_1GoalAch = 0;
		   
		   
var xTetr2_2 = 1300;
var yTetr2_2 = 820;
	
var rect2_2GoalColor = "#000"; 
		   
var rect2_2GoalAch = 0;
		   
var heightOfBlocks2 = -1080;
		   
var rect2GoalAch = 0;
	
	function drawShapes2(xT1, yT1, cT1, xT2, yT2, cT2, h) {
		
			// square 1
		
		ctx.beginPath();	
ctx.rect(xT1, yT1 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(240, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT1;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("15", xT1 + 40, yT1 + 130 + h);
		ctx.closePath();
		
				// square 2
		
				ctx.beginPath();	
ctx.rect(xT2, yT2 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT2;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("6", xT2 + 75, yT2 + 130 + h);
		ctx.closePath();
		
			// square 3
		
	ctx.beginPath();	
ctx.rect(1460, 460 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1440, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("9", 1460 + 75, 460 + 130 + h);
		ctx.closePath();
		
	
		
			// minus sign
		
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("-", 560 + 75, 460 + 130 + h);
		ctx.closePath();
		
			// equality sign
		
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("=", 1160 + 75, 460 + 130 + h);
		ctx.closePath();
		
	
}
		   
		   
   drawShapes2(xTetr2_1, yTetr2_1, rect2_1GoalColor, xTetr2_2, yTetr2_2, rect2_2GoalColor, heightOfBlocks2);
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   var xTetr3_1 = 1000;
var yTetr3_1 = 760;
	
var rect3_1GoalColor = "#000"; 
		   
var rect3_1GoalAch = 0;
		   
		   
var xTetr3_2 = 1600;
var yTetr3_2 = 100;
	
var rect3_2GoalColor = "#000"; 
		   
var rect3_2GoalAch = 0;
		   
var heightOfBlocks3 = -1080;
		   
var rect3GoalAch = 0;
	
	function drawShapes3(xT1, yT1, cT1, xT2, yT2, cT2, h) {
		
			// square 1
		
		ctx.beginPath();	
ctx.rect(xT1, yT1 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(240, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT1;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("3", xT1 + 75, yT1 + 130 + h);
		ctx.closePath();
		
			// square 2
		
	ctx.beginPath();	
ctx.rect(860, 460 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("6", 860 + 75, 460 + 130 + h);
		ctx.closePath();
		
			// square 3
		
				ctx.beginPath();	
ctx.rect(xT2, yT2 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1440, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT2;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("18", xT2 + 40, yT2 + 130 + h);
		ctx.closePath();
		
			// plus sign
		
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("*", 560 + 75, 460 + 130 + h);
		ctx.closePath();
		
			// equality sign
		
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("=", 1160 + 75, 460 + 130 + h);
		ctx.closePath();
		
	
}
		   
		   
   drawShapes3(xTetr3_1, yTetr3_1, rect3_1GoalColor, xTetr3_2, yTetr3_2, rect3_2GoalColor, heightOfBlocks3);
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   var xTetr4_1 = 1635;
var yTetr4_1 = 772;
	
var rect4_1GoalColor = "#000"; 
		   
var rect4_1GoalAch = 0;
		   
		   
var xTetr4_2 = 222;
var yTetr4_2 = 690;
	
var rect4_2GoalColor = "#000"; 
		   
var rect4_2GoalAch = 0;
		   
var heightOfBlocks4 = -1080;
		   
var rect4GoalAch = 0;
	
	function drawShapes4(xT1, yT1, cT1, xT2, yT2, cT2, h) {
		
			// square 1
		
		ctx.beginPath();	
ctx.rect(xT1, yT1 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(240, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT1;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("16", xT1 + 40, yT1 + 130 + h);
		ctx.closePath();
		
			// square 2
		
	ctx.beginPath();	
ctx.rect(860, 460 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("4", 860 + 75, 460 + 130 + h);
		ctx.closePath();
		
			// square 3
		
				ctx.beginPath();	
ctx.rect(xT2, yT2 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1440, 440 + h, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT2;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("4", xT2 + 75, yT2 + 130 + h);
		ctx.closePath();
		
			// plus sign
		
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("/", 560 + 75, 460 + 130 + h);
		ctx.closePath();
		
			// equality sign
		
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("=", 1160 + 75, 460 + 130 + h);
		ctx.closePath();
		
	
}
		   
		   
   drawShapes4(xTetr4_1, yTetr4_1, rect4_1GoalColor, xTetr4_2, yTetr4_2, rect4_2GoalColor, heightOfBlocks4);
		   
		   
/* timer START */

var exerStarted = 0;
var timerStarted = false;
var seconds = 0;
	
var countdown = setInterval(function() {
	if (timerStarted == true) {
  if (seconds >= 600) {
	   clearInterval(countdown);
	  localStorage.setItem("doTheMathLevel3LeftScore", seconds);
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
var grabbingTetr1_2 = false;
var grabbingTetr2_2 = false;
var grabbingTetr3_2 = false;
var grabbingTetr4_2 = false;
		   
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
				
				
				if (rect1GoalAch != 1) {
	
 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr1_1 && thesiAntiheiraX < xTetr1_1 + 200
		   && thesiAntiheiraY > yTetr1_1 && thesiAntiheiraY < yTetr1_1 + 200 && grabbing == false && grabbingTetr1_2 == false && rect1_1GoalAch != 1) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr1_1 = thesiAntiheiraX - 100;
		yTetr1_1 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes1(xTetr1_1, yTetr1_1, rect1_1GoalColor, xTetr1_2, yTetr1_2, rect1_2GoalColor, heightOfBlocks1);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr1_2 && thesiAntiheiraX < xTetr1_2 + 200
		   && thesiAntiheiraY > yTetr1_2 && thesiAntiheiraY < yTetr1_2 + 200 && grabbing == false && rect1_2GoalAch != 1) {
			
			hasLetGo = false;
			grabbingTetr1_2 = true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr1_2 = thesiAntiheiraX - 100;
		yTetr1_2 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes1(xTetr1_1, yTetr1_1, rect1_1GoalColor, xTetr1_2, yTetr1_2, rect1_2GoalColor, heightOfBlocks1);
		}  else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr1_2 = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  grabbingTetr1_2 = false;
	}
		
				} else if (rect2GoalAch != 1) {
	
 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr2_1 && thesiAntiheiraX < xTetr2_1 + 200
		   && thesiAntiheiraY > yTetr2_1 && thesiAntiheiraY < yTetr2_1 + 200 && grabbing == false && grabbingTetr2_2 == false && rect2_1GoalAch != 1) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr2_1 = thesiAntiheiraX - 100;
		yTetr2_1 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes2(xTetr2_1, yTetr2_1, rect2_1GoalColor, xTetr2_2, yTetr2_2, rect2_2GoalColor, heightOfBlocks2);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr2_2 && thesiAntiheiraX < xTetr2_2 + 200
		   && thesiAntiheiraY > yTetr2_2 && thesiAntiheiraY < yTetr2_2 + 200 && grabbing == false && rect2_2GoalAch != 1) {
			
			hasLetGo = false;
			grabbingTetr2_2 = true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr2_2 = thesiAntiheiraX - 100;
		yTetr2_2 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes2(xTetr2_1, yTetr2_1, rect2_1GoalColor, xTetr2_2, yTetr2_2, rect2_2GoalColor, heightOfBlocks2);
		}  else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr2_2 = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  grabbingTetr2_2 = false;
	}
		
				}  else if (rect3GoalAch != 1) {
	
 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr3_1 && thesiAntiheiraX < xTetr3_1 + 200
		   && thesiAntiheiraY > yTetr3_1 && thesiAntiheiraY < yTetr3_1 + 200 && grabbing == false && grabbingTetr3_2 == false && rect3_1GoalAch != 1) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr3_1 = thesiAntiheiraX - 100;
		yTetr3_1 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes3(xTetr3_1, yTetr3_1, rect3_1GoalColor, xTetr3_2, yTetr3_2, rect3_2GoalColor, heightOfBlocks3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr3_2 && thesiAntiheiraX < xTetr3_2 + 200
		   && thesiAntiheiraY > yTetr3_2 && thesiAntiheiraY < yTetr3_2 + 200 && grabbing == false && rect3_2GoalAch != 1) {
			
			hasLetGo = false;
			grabbingTetr3_2 = true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr3_2 = thesiAntiheiraX - 100;
		yTetr3_2 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
 drawShapes3(xTetr3_1, yTetr3_1, rect3_1GoalColor, xTetr3_2, yTetr3_2, rect3_2GoalColor, heightOfBlocks3);
		}  else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr3_2 = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  grabbingTetr3_2 = false;
	}
		
				} else if (rect4GoalAch != 1) {
	
 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr4_1 && thesiAntiheiraX < xTetr4_1 + 200
		   && thesiAntiheiraY > yTetr4_1 && thesiAntiheiraY < yTetr4_1 + 200 && grabbing == false && grabbingTetr4_2 == false && rect4_1GoalAch != 1) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr4_1 = thesiAntiheiraX - 100;
		yTetr4_1 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
 drawShapes4(xTetr4_1, yTetr4_1, rect4_1GoalColor, xTetr4_2, yTetr4_2, rect4_2GoalColor, heightOfBlocks4);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr4_2 && thesiAntiheiraX < xTetr4_2 + 200
		   && thesiAntiheiraY > yTetr4_2 && thesiAntiheiraY < yTetr4_2 + 200 && grabbing == false && rect4_2GoalAch != 1) {
			
			hasLetGo = false;
			grabbingTetr4_2 = true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr4_2 = thesiAntiheiraX - 100;
		yTetr4_2 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
 drawShapes4(xTetr4_1, yTetr4_1, rect4_1GoalColor, xTetr4_2, yTetr4_2, rect4_2GoalColor, heightOfBlocks4);
		}  else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr4_2 = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  grabbingTetr4_2 = false;
	}
		
				}
		
		
				
				
				// check results
	
				
				if (rect1GoalAch != 1) {
	if (xTetr1_1 > 820 && xTetr1_1 < 900 && yTetr1_1 > 420 & yTetr1_1 < 500) {
			rect1_1GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect1_1GoalAch = 1;
				if (rect1_2GoalAch == 1) {
				goToLevel2();
					rect1GoalAch = 1;
				}
			}
		} else {
			rect1_1GoalColor = "#000";
		   rect1_1GoalAch = 0;
		}
		
				
					if (xTetr1_2 > 1420 && xTetr1_2 < 1500 && yTetr1_2 > 420 & yTetr1_2 < 500) {
			rect1_2GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect1_2GoalAch = 1;
				if (rect1_1GoalAch == 1) {
				goToLevel2();
					rect1GoalAch = 1;
				}
			}
		} else {
			rect1_2GoalColor = "#000";
		   rect1_2GoalAch = 0;
		}
				}
				
				
					if (rect2GoalAch != 1) {
					if (xTetr2_1 > 220 && xTetr2_1 < 300 && yTetr2_1 > 420 & yTetr2_1 < 500) {
			rect2_1GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect2_1GoalAch = 1;
				if (rect2_2GoalAch == 1) {
				goToLevel3();
					rect2GoalAch = 1;
				}
			}
		} else {
			rect2_1GoalColor = "#000";
		   rect2_1GoalAch = 0;
		}
		
				
					if (xTetr2_2 > 820 && xTetr2_2 < 900 && yTetr2_2 > 420 & yTetr2_2 < 500) {
			rect2_2GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect2_2GoalAch = 1;
				if (rect2_1GoalAch == 1) {
				goToLevel3();
					rect2GoalAch = 1;
				}
			}
		} else {
			rect2_2GoalColor = "#000";
		   rect2_2GoalAch = 0;
		}
					}
				
				
				
					if (rect3GoalAch != 1) {
								if (xTetr3_1 > 220 && xTetr3_1 < 300 && yTetr3_1 > 420 & yTetr3_1 < 500) {
			rect3_1GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect3_1GoalAch = 1;
				if (rect3_2GoalAch == 1) {
				goToLevel4();
					rect3GoalAch = 1;
				}
			}
		} else {
			rect3_1GoalColor = "#000";
		   rect3_1GoalAch = 0;
		}
		
				
					if (xTetr3_2 > 1420 && xTetr3_2 < 1500 && yTetr3_2 > 420 & yTetr3_2 < 500) {
			rect3_2GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect3_2GoalAch = 1;
				if (rect3_1GoalAch == 1) {
				goToLevel4();
					rect3GoalAch = 1;
				}
			}
		} else {
			rect3_2GoalColor = "#000";
		   rect3_2GoalAch = 0;
		}
				
					}
																							  
																							  
				
																							  
																							  
																							  
																							  
				
																							  
								if (rect4GoalAch != 1) {																  
			if (xTetr4_1 > 220 && xTetr4_1 < 300 && yTetr4_1 > 420 & yTetr4_1 < 500) {
			rect4_1GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect4_1GoalAch = 1;
				if (rect4_2GoalAch == 1) {
					rect4GoalAch = 1;
				}
			}
		} else {
			rect4_1GoalColor = "#000";
		   rect4_1GoalAch = 0;
		}
		
				
					if (xTetr4_2 > 1420 && xTetr4_2 < 1500 && yTetr4_2 > 420 & yTetr4_2 < 500) {
			rect4_2GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect4_2GoalAch = 1;
				if (rect4_1GoalAch == 1) {
					rect4GoalAch = 1;
				}
			}
		} else {
			rect4_2GoalColor = "#000";
		   rect4_2GoalAch = 0;
		}
								}
			
				
		
		
		if (rect1GoalAch > 0 && rect2GoalAch > 0 && rect3GoalAch > 0 && rect4GoalAch > 0) {
		
  localStorage.setItem("doTheMathLevel3LeftScore", seconds);
			
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
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   function goToLevel2() {
			   exerStarted = 0;
			   const myInterval1 = setInterval(function () {
				if (heightOfBlocks1 != 1080) {
					heightOfBlocks1 += 10;
					heightOfBlocks2 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
					drawShapes1(xTetr1_1, yTetr1_1, rect1_1GoalColor, xTetr1_2, yTetr1_2, rect1_2GoalColor, heightOfBlocks1);
					drawShapes2(xTetr2_1, yTetr2_1, rect2_1GoalColor, xTetr2_2, yTetr2_2, rect2_2GoalColor, heightOfBlocks2);
				} else {
					clearInterval(myInterval1); 
					  exerStarted = 1;
				}
			   }, 10);
		   }
		   
		   
		   
		   
		   
		   
		      function goToLevel3() {
			   exerStarted = 0;
			   const myInterval2 = setInterval(function () {
				if (heightOfBlocks2 != 1080) {
					heightOfBlocks2 += 10;
					heightOfBlocks3 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
					drawShapes2(xTetr2_1, yTetr2_1, rect2_1GoalColor, xTetr2_2, yTetr2_2, rect2_2GoalColor, heightOfBlocks2);
					drawShapes3(xTetr3_1, yTetr3_1, rect3_1GoalColor, xTetr3_2, yTetr3_2, rect3_2GoalColor, heightOfBlocks3);
				} else {
					clearInterval(myInterval2); 
					  exerStarted = 1;
				}
			   }, 10);
		   }
		   
		   



		   



		   

	      function goToLevel4() {
			   exerStarted = 0;
			   const myInterval3 = setInterval(function () {
				if (heightOfBlocks3 != 1080) {
					heightOfBlocks3 += 10;
					heightOfBlocks4 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
					drawShapes3(xTetr3_1, yTetr3_1, rect3_1GoalColor, xTetr3_2, yTetr3_2, rect3_2GoalColor, heightOfBlocks3);
					drawShapes4(xTetr4_1, yTetr4_1, rect4_1GoalColor, xTetr4_2, yTetr4_2, rect4_2GoalColor, heightOfBlocks4);
				} else {
					clearInterval(myInterval3); 
					  exerStarted = 1;
				}
			   }, 10);
		   }
		   
		   
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