<?php include '../../../../games-head.php';?>
	
<title>Shapes & Colors - Level 5</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		   
	var xRect1 = 1520;
	var yRect1 = 760;   
    var xCirc1 = 1300;
	var yCirc1 = 860;
	var xTria1 = 960;
	var yTria1 = 960;
var xHexa1 = 620;
var yHexa1 = 860;

		   
	var xRect2 = 180;
	var yRect2 = 760;
    var xCirc2 = 1620;
	var yCirc2 = 1360;
	var xTria2 = 1300;
	var yTria2 = 1460;
var xHexa2 = 960;
var yHexa2 = 1360;

		   	var xRect3 = 520;
	var yRect3 = 1260;
    var xCirc3 = 280;
	var yCirc3 = 1360;
		   
		   
	var xRect1goal = 1175;
	var yRect1goal = 95;   
    var xCirc1goal = 960;
	var yCirc1goal = 220;
	var xTria1goal = 620;
	var yTria1goal = 320;
var xHexa1goal = 280;
var yHexa1goal = 220;

		   
	var xRect2goal = 1495;
	var yRect2goal = 95;
    var xCirc2goal = 280;
	var yCirc2goal = -280;
	var xTria2goal = 960;
	var yTria2goal = -180;
var xHexa2goal = 1300;
var yHexa2goal = -280;
		   
		   	var xRect3goal = 495;
	var yRect3goal = -405;
    var xCirc3goal = 1620;
	var yCirc3goal = -280;

		   
		   var rect1Color = "#f00";
		   var circ1Color = "#0f0";
		   var tria1Color = "#00f";
		   var hexa1Color = "#f0f";
		   
		   var rect2Color = "#ff0";
		   var circ2Color = "#f00";
		   var tria2Color = "#ff0";
		   var hexa2Color = "#00f";
		   
		   var rect3Color = "#0f0";
		   var circ3Color = "#f0f";
		   
		   var rect1GoalAch = 0;
		   var circ1GoalAch = 0;
		   var tria1GoalAch = 0;
		   var hexa1GoalAch = 0;
		   
		   var rect2GoalAch = 0;
		   var circ2GoalAch = 0;
		   var tria2GoalAch = 0;
		   var hexa2GoalAch = 0;
		   
		   var rect3GoalAch = 0;
		   var circ3GoalAch = 0;
		   
		   // squares
		   
		   ctx.beginPath();	
ctx.rect(xRect1, yRect1, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = rect1Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();	
ctx.rect(xRect1goal, yRect1goal, 250, 250);
ctx.lineWidth = 10;
ctx.strokeStyle = rect1Color;
ctx.globalAlpha = 1;
ctx.stroke();
		   
		   
		   
		   
		   		   ctx.beginPath();	
ctx.rect(xRect2, yRect2, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = rect2Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();	
ctx.rect(xRect2goal, yRect2goal, 250, 250);
ctx.lineWidth = 10;
ctx.strokeStyle = rect2Color;
ctx.globalAlpha = 1;
ctx.stroke();
		   
		   
		   
		   
		   		   		   ctx.beginPath();	
ctx.rect(xRect3, yRect3, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = rect3Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();	
ctx.rect(xRect3goal, yRect3goal, 250, 250);
ctx.lineWidth = 10;
ctx.strokeStyle = rect3Color;
ctx.globalAlpha = 1;
ctx.stroke();
		   
		   
		   // circles

ctx.beginPath();
ctx.arc(xCirc1, yCirc1, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = circ1Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
		   
ctx.beginPath();
ctx.arc(xCirc1goal, yCirc1goal, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = circ1Color;
ctx.globalAlpha = 1;
ctx.stroke();
		   
	
ctx.beginPath();
ctx.arc(xCirc2, yCirc2, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = circ2Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
		   
ctx.beginPath();
ctx.arc(xCirc2goal, yCirc2goal, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = circ2Color;
ctx.globalAlpha = 1;
ctx.stroke();
		   
		   
		   ctx.beginPath();
ctx.arc(xCirc3, yCirc3, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = circ3Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
		   
ctx.beginPath();
ctx.arc(xCirc3goal, yCirc3goal, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = circ3Color;
ctx.globalAlpha = 1;
ctx.stroke();
		   
		   
		   // triangles
		   

let height1 = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(xTria1 - 100, yTria1);
ctx.lineTo(xTria1 + 100, yTria1);
ctx.lineTo(xTria1, yTria1 - height1);
ctx.lineWidth = 10;
ctx.fillStyle = tria1Color;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   
let height1_2 = 280 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(xTria1goal - 125, yTria1goal);
ctx.lineTo(xTria1goal + 125, yTria1goal);
ctx.lineTo(xTria1goal, yTria1goal - height1_2);
ctx.closePath();
ctx.lineWidth = 10;
ctx.globalAlpha = 1;
ctx.strokeStyle = tria1Color;
ctx.stroke();
		   
		   
		   
		   let height2 = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(xTria2 - 100, yTria2);
ctx.lineTo(xTria2 + 100, yTria2);
ctx.lineTo(xTria2, yTria2 - height2);
ctx.lineWidth = 10;
ctx.fillStyle = tria2Color;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   
let height2_2 = 280 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(xTria2goal - 125, yTria2goal);
ctx.lineTo(xTria2goal + 125, yTria2goal);
ctx.lineTo(xTria2goal, yTria2goal - height2_2);
ctx.closePath();
ctx.lineWidth = 10;
ctx.globalAlpha = 1;
ctx.strokeStyle = tria2Color;
ctx.stroke();
		   
		 
// hexagon
var numberOfSides1 = 6
var hexSize1 = 100;
ctx.beginPath();
ctx.moveTo(xHexa1 +  hexSize1 * Math.cos(0), yHexa1 +  hexSize1 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides1; i += 1) {
  ctx.lineTo(xHexa1 + hexSize1 * Math.cos(i * 2 * Math.PI / numberOfSides1), yHexa1 + hexSize1 * Math.sin(i * 2 * Math.PI / numberOfSides1));
}
ctx.lineWidth = 10;
ctx.fillStyle = hexa1Color;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   
var numberOfSides1_2 = 6
var hexSize1_2 = 125;
ctx.beginPath();
ctx.moveTo(xHexa1goal +  hexSize1_2 * Math.cos(0), yHexa1goal +  hexSize1_2 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides1_2; i += 1) {
  ctx.lineTo(xHexa1goal + hexSize1_2 * Math.cos(i * 2 * Math.PI / numberOfSides1_2), yHexa1goal + hexSize1_2 * Math.sin(i * 2 * Math.PI / numberOfSides1_2));
}
ctx.lineWidth = 10;
ctx.strokeStyle = hexa1Color;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		   
		   
		   
var numberOfSides2 = 6
var hexSize2 = 100;
ctx.beginPath();
ctx.moveTo(xHexa2 +  hexSize2 * Math.cos(0), yHexa2 +  hexSize2 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides2; i += 1) {
  ctx.lineTo(xHexa2 + hexSize2 * Math.cos(i * 2 * Math.PI / numberOfSides2), yHexa2 + hexSize2 * Math.sin(i * 2 * Math.PI / numberOfSides2));
}
ctx.lineWidth = 10;
ctx.fillStyle = hexa2Color;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   
var numberOfSides2_2 = 6
var hexSize2_2 = 125;
ctx.beginPath();
ctx.moveTo(xHexa2goal +  hexSize2_2 * Math.cos(0), yHexa2goal +  hexSize2_2 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides2_2; i += 1) {
  ctx.lineTo(xHexa2goal + hexSize2_2 * Math.cos(i * 2 * Math.PI / numberOfSides2_2), yHexa2goal + hexSize2_2 * Math.sin(i * 2 * Math.PI / numberOfSides2_2));
}
ctx.lineWidth = 10;
ctx.strokeStyle = hexa2Color;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();

		   
		   
	
	function drawRect1(x, y) {
		   ctx.beginPath();	
ctx.rect(x, y, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = rect1Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();	
ctx.rect(xRect1goal, yRect1goal, 250, 250);
ctx.lineWidth = 10;
ctx.strokeStyle = rect1Color;
ctx.globalAlpha = 1;
ctx.stroke();
}
		   
		   
		   
	function drawRect2(x, y) {
		   ctx.beginPath();	
ctx.rect(x, y, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = rect2Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();	
ctx.rect(xRect2goal, yRect2goal, 250, 250);
ctx.lineWidth = 10;
ctx.strokeStyle = rect2Color;
ctx.globalAlpha = 1;
ctx.stroke();
}
		   
		   
		   
		   	function drawRect3(x, y) {
		   ctx.beginPath();	
ctx.rect(x, y, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = rect3Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();	
ctx.rect(xRect3goal, yRect3goal, 250, 250);
ctx.lineWidth = 10;
ctx.strokeStyle = rect3Color;
ctx.globalAlpha = 1;
ctx.stroke();
}
		   
		   
		   	function drawCirc1(x, y) {
ctx.beginPath();
ctx.arc(x, y, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = circ1Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
		   
ctx.beginPath();
ctx.arc(xCirc1goal, yCirc1goal, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = circ1Color;
ctx.globalAlpha = 1;
ctx.stroke();
}
		   
		   
		   		   	function drawCirc2(x, y) {
ctx.beginPath();
ctx.arc(x, y, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = circ2Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
		   
ctx.beginPath();
ctx.arc(xCirc2goal, yCirc2goal, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = circ2Color;
ctx.globalAlpha = 1;
ctx.stroke();
}
		   
		   
		   
		   
		   		   	function drawCirc3(x, y) {
ctx.beginPath();
ctx.arc(x, y, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = circ3Color;
ctx.globalAlpha = 0.5;
ctx.fill();
		   
		   
ctx.beginPath();
ctx.arc(xCirc3goal, yCirc3goal, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = circ3Color;
ctx.globalAlpha = 1;
ctx.stroke();
}
		   
		   
		   		   	function drawTria1(x, y) {
ctx.beginPath();
ctx.moveTo(x - 100, y);
ctx.lineTo(x + 100, y);
ctx.lineTo(x, y - height1);
ctx.lineWidth = 10;
ctx.fillStyle = tria1Color;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		 
ctx.beginPath();
ctx.moveTo(xTria1goal - 125, yTria1goal);
ctx.lineTo(xTria1goal + 125, yTria1goal);
ctx.lineTo(xTria1goal, yTria1goal - height1_2);
ctx.closePath();
ctx.lineWidth = 10;
ctx.globalAlpha = 1;
ctx.strokeStyle = tria1Color;
ctx.stroke();
}
		   
		   
		   
		   	   		   	function drawTria2(x, y) {
ctx.beginPath();
ctx.moveTo(x - 100, y);
ctx.lineTo(x + 100, y);
ctx.lineTo(x, y - height2);
ctx.lineWidth = 10;
ctx.fillStyle = tria2Color;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		 
ctx.beginPath();
ctx.moveTo(xTria2goal - 125, yTria2goal);
ctx.lineTo(xTria2goal + 125, yTria2goal);
ctx.lineTo(xTria2goal, yTria2goal - height2_2);
ctx.closePath();
ctx.lineWidth = 10;
ctx.globalAlpha = 1;
ctx.strokeStyle = tria2Color;
ctx.stroke();
}
		   
		   
		   
		   
		   
	function drawHexa1(x, y) {
ctx.beginPath();
ctx.moveTo(x +  hexSize1 * Math.cos(0), y +  hexSize1 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides1; i += 1) {
  ctx.lineTo(x + hexSize1 * Math.cos(i * 2 * Math.PI / numberOfSides1), y + hexSize1 * Math.sin(i * 2 * Math.PI / numberOfSides1));
}
ctx.lineWidth = 10;
ctx.fillStyle = hexa1Color;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   
ctx.beginPath();
ctx.moveTo(xHexa1goal +  hexSize1_2 * Math.cos(0), yHexa1goal +  hexSize1_2 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides1_2; i += 1) {
  ctx.lineTo(xHexa1goal + hexSize1_2 * Math.cos(i * 2 * Math.PI / numberOfSides1_2), yHexa1goal + hexSize1_2 * Math.sin(i * 2 * Math.PI / numberOfSides1_2));
}
ctx.lineWidth = 10;
ctx.strokeStyle = hexa1Color;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();	
	}
		   
		
		   
		   	function drawHexa2(x, y) {
ctx.beginPath();
ctx.moveTo(x +  hexSize1 * Math.cos(0), y +  hexSize2 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides2; i += 1) {
  ctx.lineTo(x + hexSize2 * Math.cos(i * 2 * Math.PI / numberOfSides2), y + hexSize2 * Math.sin(i * 2 * Math.PI / numberOfSides2));
}
ctx.lineWidth = 10;
ctx.fillStyle = hexa2Color;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   
ctx.beginPath();
ctx.moveTo(xHexa2goal +  hexSize2_2 * Math.cos(0), yHexa2goal +  hexSize2_2 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides2_2; i += 1) {
  ctx.lineTo(xHexa2goal + hexSize2_2 * Math.cos(i * 2 * Math.PI / numberOfSides2_2), yHexa2goal + hexSize2_2 * Math.sin(i * 2 * Math.PI / numberOfSides2_2));
}
ctx.lineWidth = 10;
ctx.strokeStyle = hexa2Color;
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
	  localStorage.setItem("shapesLevel5LeftScore", seconds);
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
var canBeMoved1 = true;
var canBeMoved2 = true;
var canBeMoved3 = true;
var canBeMoved4 = true;
var canBeMoved5 = true;
		   
		   
		   
		   
		   
		   
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
				
		if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xRect1 && thesiAntiheiraX < xRect1 + 200
		   && thesiAntiheiraY > yRect1 && thesiAntiheiraY < yRect1 + 200 && grabbing == false && canBeMoved1 == true) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xRect1 = thesiAntiheiraX - 100;
		yRect1 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xRect2 && thesiAntiheiraX < xRect2 + 200 && thesiAntiheiraY > yRect2 && thesiAntiheiraY < yRect2 + 200 && grabbing == false && canBeMoved2 == true) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xRect2 = thesiAntiheiraX - 100;
		yRect2 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xRect3 && thesiAntiheiraX < xRect3 + 200 && thesiAntiheiraY > yRect3 && thesiAntiheiraY < yRect3 + 200 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xRect3 = thesiAntiheiraX - 100;
		yRect3 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc1 - 100 && thesiAntiheiraX < xCirc1 + 100 && thesiAntiheiraY > yCirc1 - 100 && thesiAntiheiraY < yCirc1 + 100 && grabbing == false && canBeMoved3 == true) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xCirc1 = thesiAntiheiraX;
		yCirc1 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc2 - 100 && thesiAntiheiraX < xCirc2 + 100 && thesiAntiheiraY > yCirc2 - 100 && thesiAntiheiraY < yCirc2 + 100 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xCirc2 = thesiAntiheiraX;
		yCirc2 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc3 - 100 && thesiAntiheiraX < xCirc3 + 100 && thesiAntiheiraY > yCirc3 - 100 && thesiAntiheiraY < yCirc3 + 100 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xCirc3 = thesiAntiheiraX;
		yCirc3 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria1 - 100 && thesiAntiheiraX < xTria1 + 100 && thesiAntiheiraY > yTria1 - 200 && thesiAntiheiraY < yTria1 && grabbing == false && canBeMoved4 == true) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria1 = thesiAntiheiraX;
		yTria1 = thesiAntiheiraY + 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria2 - 100 && thesiAntiheiraX < xTria2 + 100 && thesiAntiheiraY > yTria2 - 200 && thesiAntiheiraY < yTria2 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria2 = thesiAntiheiraX;
		yTria2 = thesiAntiheiraY + 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xHexa1 - 100 && thesiAntiheiraX < xHexa1 + 100 && thesiAntiheiraY > yHexa1 - 100 && thesiAntiheiraY < yHexa1 + 100 && grabbing == false && canBeMoved5 == true) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xHexa1 = thesiAntiheiraX;
		yHexa1 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
 drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xHexa2 - 100 && thesiAntiheiraX < xHexa2 + 100 && thesiAntiheiraY > yHexa2 - 100 && thesiAntiheiraY < yHexa2 + 100 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xHexa2 = thesiAntiheiraX;
		yHexa2 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
 drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
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
				
			
		
		
		
		
		
	
		   


				
	 


		
				
		if (xRect1 > 1160 && xRect1 < 1240 && yRect1 > 80 & yRect1 < 160) {
			if (hasLetGo == true) {
		   rect1GoalAch = 1;
				canBeMoved1 = false;
				changeRect1();
			}
		} 
					
				
					if (xRect2 > 1480 && xRect2 < 1560 && yRect2 > 80 & yRect2 < 160) {
			if (hasLetGo == true) {
		   rect2GoalAch = 1;
				canBeMoved2 = false;
				changeRect2();
			}
		} 
				
				
				
						if (xRect3 > 480 && xRect3 < 560 && yRect3 > 80 & yRect3 < 160) {
			if (hasLetGo == true) {
		   rect3GoalAch = 1;
			}

		} else {
		      rect3GoalAch = 0;
		} 		
			
				
				
				
				
					if (xCirc1 > 920 && xCirc1 < 1000 && yCirc1 > 180 & yCirc1 < 260) {
				if (hasLetGo == true) {
		   circ1GoalAch = 1;
						canBeMoved3 = false;
				changeCirc1();
		} 
				} 
				
				
				
				
				
						if (xCirc2 > 240 && xCirc2 < 320 && yCirc2 > 180 & yCirc2 < 260) {
				if (hasLetGo == true) {
		   circ2GoalAch = 1;
		} 

				} else {
		      circ2GoalAch = 0;
		} 		
				
				
																						
					if (xCirc3 > 1580 && xCirc3 < 1660 && yCirc3 > 180 & yCirc3 < 260) {
				if (hasLetGo == true) {
		   circ3GoalAch = 1;
		} 
				} else {
		      circ3GoalAch = 0;
		} 																			
																						
				
																						
																						
		if (xTria1 > 580 && xTria1 < 660 && yTria1 > 255 & yTria1 < 335) {

					if (hasLetGo == true) {
		   tria1GoalAch = 1;
						canBeMoved4 = false;
				changeTria1();
		}
					} 
				
				
																		
																		
																		
				
					if (xTria2 > 920 && xTria2 < 1000 && yTria2 > 255 & yTria2 < 335) {
					if (hasLetGo == true) {
		   tria2GoalAch = 1;
		} 
					}  else {
		    tria2GoalAch = 0;
		}
		
	
							if (xHexa1 > 240 && xHexa1 < 320 && yHexa1  > 180 & yHexa1  < 260) {
					if (hasLetGo == true) {
		   hexa1GoalAch = 1;
						canBeMoved5 = false;
				changeHexa1();
		}
					}
				
		
		if (xHexa2 > 1260 && xHexa2 < 1340 && yHexa2  > 180 & yHexa2  < 260) {
					if (hasLetGo == true) {
		   hexa2GoalAch = 1;
		} 
					} else {
		   hexa2GoalAch = 0;
		}
		
		
		
		
		if (rect1GoalAch > 0 && circ1GoalAch > 0 && tria1GoalAch > 0 &&  hexa1GoalAch > 0 && rect2GoalAch > 0 && circ2GoalAch > 0 && tria2GoalAch > 0 &&  hexa2GoalAch > 0 && rect3GoalAch > 0 && circ3GoalAch > 0) {
		
  localStorage.setItem("shapesLevel5LeftScore", seconds);
			
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
		   
		   


		   



		   




		   



		   



		   


	function changeRect1() {
		
		
var changeInterval1 = setInterval(function () {
					yRect1--;
					yRect1goal--;
					yHexa2goal++;
	yCirc2--;
					/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
	if (yRect1goal < -405 && yHexa2goal > 220 && yCirc2 < 860) {
		yRect1goal = -405;
		yHexa2goal = 220;
		yCirc2 = 860;
						/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
    clearInterval(changeInterval1);
	}
}, 100);			
			
	}
		   
		   
															  
															  
															  
		   
															  
															  
		   
															  
		function changeRect2() {
		
		
var changeInterval2 = setInterval(function () {
					yRect2--;
					yRect2goal--;
					yCirc3goal++;
	yCirc3--;
					/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
	if (yRect2goal < -405 && yCirc3goal > 220 && yCirc3 < 860) {
		yRect2goal = -405;
		yCirc3goal = 220;
		yCirc3 = 860;
						/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
    clearInterval(changeInterval2);
	}
}, 100);			
			
	}
		   
		   
															  
															  
															  
		   
															  
															  
															  
		   
															  
															  
															  
		   
		function changeCirc1() {
		
		
var changeInterval3 = setInterval(function () {
					yCirc1--;
					yCirc1goal--;
					yTria2goal++;
	yTria2--;
					/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
	if (yCirc1goal < -280 && yTria2goal > 320 && yTria2 < 960) {
		yCirc1goal = -280;
		yTria2goal = 320;
		yTria2 = 960;
						/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
    clearInterval(changeInterval3);
	}
}, 100);			
			
	}
		   
		   
															  
															  
		   
															  
															  
															  
		   
															  
															  
	function changeTria1() {
		
		
var changeInterval4 = setInterval(function () {
					yTria1--;
					yTria1goal--;
					yRect3goal++;
	yHexa2--;
					/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
	if (yTria1goal < -180 && yRect3goal > 95 && yHexa2 < 860) {
		yTria1goal = -180;
		yRect3goal = 95;
		yHexa2 = 860;
						/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
    clearInterval(changeInterval4);
	}
}, 100);			
			
	}
		   
		   
		   
															 
															 
		   
															 
															 
		   
															 
															 
															 
		   	function changeHexa1() {
		
		
var changeInterval5 = setInterval(function () {
					yHexa1--;
					yHexa1goal--;
					yCirc2goal++;
	yRect3--;
					/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
	if (yHexa1goal < -280 && yCirc2goal > 220 && yRect3 < 760) {
		yHexa1goal = -280;
		yCirc2goal = 220;
		yRect3 = 760;
						/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
  drawRect1(xRect1, yRect1);
drawCirc1(xCirc1, yCirc1);
drawTria1(xTria1, yTria1);
			drawHexa1(xHexa1, yHexa1);
			   drawRect2(xRect2, yRect2);
drawCirc2(xCirc2, yCirc2);
drawTria2(xTria2, yTria2);
			drawHexa2(xHexa2, yHexa2);
			  drawRect3(xRect3, yRect3);
drawCirc3(xCirc3, yCirc3);
    clearInterval(changeInterval5);
	}
}, 100);			
			
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