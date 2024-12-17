<?php include '../../../../games-head.php';?>
	
<title>Numbers Sortage - Level 3</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		   

var xTetr3 = 260;
var yTetr3 = 320;
var xTetr5 = 560;
var yTetr5 = 320;
var xTetr8 = 860;
var yTetr8 = 320;
var xTetr9 = 1160;
var yTetr9 = 320;
var xTetr6 = 1460;
var yTetr6 = 320;
		   
var xTetr1 = 260;
var yTetr1 = 600;
var xTetr10 = 560;
var yTetr10 = 600;
var xTetr2 = 860;
var yTetr2 = 600;
var xTetr4 = 1160;
var yTetr4 = 600;
var xTetr7 = 1460;
var yTetr7 = 600;
	
var rect1GoalColor = "#000"; 
var rect2GoalColor = "#000";
var rect3GoalColor = "#000"; 
var rect4GoalColor = "#000";
var rect5GoalColor = "#000";
var rect6GoalColor = "#000"; 
var rect7GoalColor = "#000";
var rect8GoalColor = "#000"; 
var rect9GoalColor = "#000";
var rect10GoalColor = "#000";
		   
var rect1GoalAch = 0;
var rect2GoalAch = 0;
var rect3GoalAch = 0;
var rect4GoalAch = 0;
var rect5GoalAch = 0;
var rect6GoalAch = 0;
var rect7GoalAch = 0;
var rect8GoalAch = 0;
var rect9GoalAch = 0;
var rect10GoalAch = 0;
	
	function drawShapes(xT1, yT1, cT1, xT2, yT2, cT2, xT3, yT3, cT3, xT4, yT4, cT4, xT5, yT5, cT5, xT6, yT6, cT6, xT7, yT7, cT7, xT8, yT8, cT8, xT9, yT9, cT9, xT10, yT10, cT10) {
		
		// square 1
		
				ctx.beginPath();	
ctx.rect(xT1, yT1, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(240, 300, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT1;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("1", xT1 + 75, yT1 + 130);
		ctx.closePath();
		
			// square 2
		
		ctx.beginPath();	
ctx.rect(xT2, yT2, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(540, 300, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT2;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("2", xT2 + 75, yT2 + 130);
		ctx.closePath();
		
		
			// square 3
		
			ctx.beginPath();	
ctx.rect(xT3, yT3, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 300, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT3;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("3", xT3 + 75, yT3 + 130);
		ctx.closePath();
		
			// square 4
		
				ctx.beginPath();	
ctx.rect(xT4, yT4, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1140, 300, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT4;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("4", xT4 + 75, yT4 + 130);
		ctx.closePath();
		
		
			// square 5
		
				ctx.beginPath();	
ctx.rect(xT5, yT5, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1440, 300, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT5;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("5", xT5 + 75, yT5 + 130);
		ctx.closePath();
		
			// square 6
		
				ctx.beginPath();	
ctx.rect(xT6, yT6, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(240, 580, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT6;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("6", xT6 + 75, yT6 + 130);
		ctx.closePath();
		
			// square 7
		
		ctx.beginPath();	
ctx.rect(xT7, yT7, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(540, 580, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT7;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("7", xT7 + 75, yT7 + 130);
		ctx.closePath();
		
		
			// square 8
		
			ctx.beginPath();	
ctx.rect(xT8, yT8, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 580, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT8;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("8", xT8 + 75, yT8 + 130);
		ctx.closePath();
		
			// square 4
		
				ctx.beginPath();	
ctx.rect(xT9, yT9, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1140, 580, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT9;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("9", xT9 + 75, yT9 + 130);
		ctx.closePath();
		
		
			// square 10
		
				ctx.beginPath();	
ctx.rect(xT10, yT10, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1440, 580, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = cT10;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "100px Arial";
ctx.fillText("10", xT10 + 50, yT10 + 130);
		ctx.closePath();
		
}
		   
		   
   drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);

		   
		   
		   
	   
		   
		   
		   
/* timer START */

var exerStarted = 0;
var timerStarted = false;
var seconds = 0;
	
var countdown = setInterval(function() {
	if (timerStarted == true) {
  if (seconds >= 600) {
	   clearInterval(countdown);
	  localStorage.setItem("numbersSortageLevel3RightScore", seconds);
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
var grabbingTetr3 = false;
var grabbingTetr4 = false;
var grabbingTetr5 = false;
var grabbingTetr6 = false;
var grabbingTetr7 = false;
var grabbingTetr8 = false;
var grabbingTetr9 = false;
var grabbingTetr10 = false;
		   
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
		   && thesiAntiheiraY > yTetr1 && thesiAntiheiraY < yTetr1 + 200 && grabbing == false && grabbingTetr2 == false && grabbingTetr3 == false && grabbingTetr4 == false && grabbingTetr5 == false && grabbingTetr6 == false && grabbingTetr7 == false && grabbingTetr8 == false && grabbingTetr9 == false && grabbingTetr10 == false && rect1GoalAch != 1) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr1 = thesiAntiheiraX - 100;
		yTetr1 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr2 && thesiAntiheiraX < xTetr2 + 200
		   && thesiAntiheiraY > yTetr2 && thesiAntiheiraY < yTetr2 + 200 && grabbing == false && grabbingTetr3 == false && grabbingTetr4 == false && grabbingTetr5 == false && grabbingTetr6 == false && grabbingTetr7 == false && grabbingTetr8 == false && grabbingTetr9 == false && grabbingTetr10 == false && rect2GoalAch != 1) {
			
			hasLetGo = false;
grabbingTetr2 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr2 = thesiAntiheiraX - 100;
		yTetr2 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	    drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr3 && thesiAntiheiraX < xTetr3 + 200
		   && thesiAntiheiraY > yTetr3 && thesiAntiheiraY < yTetr3 + 200 && grabbing == false && grabbingTetr4 == false && grabbingTetr5 == false && grabbingTetr6 == false && grabbingTetr7 == false && grabbingTetr8 == false && grabbingTetr9 == false && grabbingTetr10 == false && rect3GoalAch != 1) {
			
			hasLetGo = false;
grabbingTetr3 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr3 = thesiAntiheiraX - 100;
		yTetr3 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	  drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr4 && thesiAntiheiraX < xTetr4 + 200
		   && thesiAntiheiraY > yTetr4 && thesiAntiheiraY < yTetr4 + 200 && grabbing == false && grabbingTetr5 == false && grabbingTetr6 == false && grabbingTetr7 == false && grabbingTetr8 == false && grabbingTetr9 == false && grabbingTetr10 == false && rect4GoalAch != 1) {
			
			hasLetGo = false;
grabbingTetr4 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr4 = thesiAntiheiraX - 100;
		yTetr4 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	  drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr5 && thesiAntiheiraX < xTetr5 + 200
		   && thesiAntiheiraY > yTetr5 && thesiAntiheiraY < yTetr5 + 200 && grabbing == false && grabbingTetr6 == false && grabbingTetr7 == false && grabbingTetr8 == false && grabbingTetr9 == false && grabbingTetr10 == false && rect5GoalAch != 1) {
			
			hasLetGo = false;
grabbingTetr5 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr5 = thesiAntiheiraX - 100;
		yTetr5 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	  drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);
		}  else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr6 && thesiAntiheiraX < xTetr6 + 200
		   && thesiAntiheiraY > yTetr6 && thesiAntiheiraY < yTetr6 + 200 && grabbing == false && grabbingTetr7 == false && grabbingTetr8 == false && grabbingTetr9 == false && grabbingTetr10 == false && rect6GoalAch != 1) {
			
			hasLetGo = false;
grabbingTetr6 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr6 = thesiAntiheiraX - 100;
		yTetr6 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	  drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr7 && thesiAntiheiraX < xTetr7 + 200
		   && thesiAntiheiraY > yTetr7 && thesiAntiheiraY < yTetr7 + 200 && grabbing == false && grabbingTetr8 == false && grabbingTetr9 == false && grabbingTetr10 == false && rect7GoalAch != 1) {
			
			hasLetGo = false;
grabbingTetr7 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr7 = thesiAntiheiraX - 100;
		yTetr7 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	    drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr8 && thesiAntiheiraX < xTetr8 + 200
		   && thesiAntiheiraY > yTetr8 && thesiAntiheiraY < yTetr8 + 200 && grabbing == false && grabbingTetr9 == false && grabbingTetr10 == false && rect8GoalAch != 1) {
			
			hasLetGo = false;
grabbingTetr8 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr8 = thesiAntiheiraX - 100;
		yTetr8 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	     drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr9 && thesiAntiheiraX < xTetr9 + 200
		   && thesiAntiheiraY > yTetr9 && thesiAntiheiraY < yTetr9 + 200 && grabbing == false && grabbingTetr10 == false && rect9GoalAch != 1) {
			
			hasLetGo = false;
grabbingTetr9 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr9 = thesiAntiheiraX - 100;
		yTetr9 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	    drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr10 && thesiAntiheiraX < xTetr10 + 200
		   && thesiAntiheiraY > yTetr10 && thesiAntiheiraY < yTetr10 + 200 && grabbing == false && rect10GoalAch != 1) {
			
			hasLetGo = false;
grabbingTetr10 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr10 = thesiAntiheiraX - 100;
		yTetr10 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	   drawShapes(xTetr1, yTetr1, rect1GoalColor, xTetr2, yTetr2, rect2GoalColor, xTetr3, yTetr3, rect3GoalColor, xTetr4, yTetr4, rect4GoalColor, xTetr5, yTetr5, rect5GoalColor, xTetr6, yTetr6, rect6GoalColor, xTetr7, yTetr7, rect7GoalColor, xTetr8, yTetr8, rect8GoalColor, xTetr9, yTetr9, rect9GoalColor, xTetr10, yTetr10, rect10GoalColor);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr2 = false;
			grabbingTetr3 = false;
			grabbingTetr4 = false;
			grabbingTetr5 = false;
			grabbingTetr6 = false;
			grabbingTetr7 = false;
			grabbingTetr8 = false;
			grabbingTetr9 = false;
			grabbingTetr10 = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  grabbingTetr2 = false;
		  grabbingTetr3 = false;
			grabbingTetr4 = false;
			grabbingTetr5 = false;
		  	grabbingTetr6 = false;
			grabbingTetr7 = false;
			grabbingTetr8 = false;
			grabbingTetr9 = false;
			grabbingTetr10 = false;
	}
		

		

				
		if (xTetr1 > 220 && xTetr1 < 300 && yTetr1 > 280 & yTetr1 < 360) {
			rect1GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect1GoalAch = 1;
			}
		} else {
			rect1GoalColor = "#000";
		   rect1GoalAch = 0;
		}
				
				if (xTetr2 > 520 && xTetr2 < 600 && yTetr2 > 280 & yTetr2 < 360) {
			rect2GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect2GoalAch = 1;
			}
		} else {
			rect2GoalColor = "#000";
		   rect2GoalAch = 0;
		}
		
				
	if (xTetr3 > 820 && xTetr3 < 900 && yTetr3 > 280 & yTetr3 < 360) {
			rect3GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect3GoalAch = 1;
			}
		} else {
			rect3GoalColor = "#000";
		   rect3GoalAch = 0;
		}
				
					if (xTetr4 > 1120 && xTetr4 < 1200 && yTetr4 > 280 & yTetr4 < 360) {
			rect4GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect4GoalAch = 1;
			}
		} else {
			rect4GoalColor = "#000";
		   rect4GoalAch = 0;
		}
				
				
					if (xTetr5 > 1420 && xTetr5 < 1500 && yTetr5 > 280 & yTetr5 < 360) {
			rect5GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect5GoalAch = 1;
			}
		} else {
			rect5GoalColor = "#000";
		   rect5GoalAch = 0;
		}
		
				
				
						if (xTetr6 > 220 && xTetr6 < 300 && yTetr6 > 560 & yTetr6 < 640) {
			rect6GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect6GoalAch = 1;
			}
		} else {
			rect6GoalColor = "#000";
		   rect6GoalAch = 0;
		}
				
				if (xTetr7 > 520 && xTetr7 < 600 && yTetr7 > 560 & yTetr7 < 640) {
			rect7GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect7GoalAch = 1;
			}
		} else {
			rect7GoalColor = "#000";
		   rect7GoalAch = 0;
		}
		
				
	if (xTetr8 > 820 && xTetr8 < 900 && yTetr8 > 560 & yTetr8 < 640) {
			rect8GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect8GoalAch = 1;
			}
		} else {
			rect8GoalColor = "#000";
		   rect8GoalAch = 0;
		}
				
					if (xTetr9 > 1120 && xTetr9 < 1200 && yTetr9 > 560 & yTetr9 < 640) {
			rect9GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect9GoalAch = 1;
			}
		} else {
			rect9GoalColor = "#000";
		   rect9GoalAch = 0;
		}
				
				
					if (xTetr10 > 1420 && xTetr10 < 1500 && yTetr10 > 560 & yTetr10 < 640) {
			rect10GoalColor = "#0f0";
			if (hasLetGo == true) {
		   rect10GoalAch = 1;
			}
		} else {
			rect10GoalColor = "#000";
		   rect10GoalAch = 0;
		}
				
				
		
		if (rect1GoalAch > 0 && rect2GoalAch > 0 && rect3GoalAch > 0 && rect4GoalAch > 0 && rect5GoalAch > 0 && rect6GoalAch > 0 && rect7GoalAch > 0 && rect8GoalAch > 0 && rect9GoalAch > 0 && rect10GoalAch > 0) {
		
  localStorage.setItem("numbersSortageLevel3RightScore", seconds);
			
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