<?php include '../../../../games-head.php';?>
	
<title>Shapes & Colors - Level 3</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		   
	var xRect = 1520;
	var yRect = 760;
		   
    var xCirc = 960;
	var yCirc = 860;
		   
	var xTria = 300;
	var yTria = 960;
		   
	var xHear = 1390;
	var yHear = 835;
	var xHear2 = 425;
	var yHear2 = 195;
		   
var xHexa = 630;
var yHexa = 860;
var xHexa2 = 1290;
var yHexa2 = 245;
		   
		   var rectGoalColor = "#000";
		   var circGoalColor = "#000";
		   var triaGoalColor = "#000";
		   var hearGoalColor = "#000";
		   var hexaGoalColor = "#000";
		   
		   var rectGoalAch = 0;
		   var circGoalAch = 0;
		   var triaGoalAch = 0;
		   var hearGoalAch = 0;
		   var hexaGoalAch = 0;

ctx.beginPath();
ctx.arc(xCirc, yCirc, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#f00";
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
		   
		   
ctx.beginPath();
ctx.arc(1620, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = circGoalColor;
ctx.globalAlpha = 1;
ctx.stroke();
		   
	
ctx.beginPath();	
ctx.rect(xRect, yRect, 200, 200);
ctx.lineWidth = 10;
//ctx.strokeStyle = "#0f0";
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
//ctx.stroke();
		   
ctx.beginPath();	
ctx.rect(505, 120, 250, 250);
ctx.lineWidth = 10;
ctx.strokeStyle = rectGoalColor;
ctx.globalAlpha = 1;
ctx.stroke();
		   

let height = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(xTria - 100, yTria);
ctx.lineTo(xTria + 100, yTria);
ctx.lineTo(xTria, yTria - height);
ctx.lineWidth = 10;
//ctx.strokeStyle = '#00f';
//ctx.stroke();
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   
let height2 = 280 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(835, 370);
ctx.lineTo(1085, 370);
ctx.lineTo(960, 370 - height2);
ctx.closePath();
ctx.lineWidth = 10;
ctx.globalAlpha = 1;
ctx.strokeStyle = triaGoalColor;
ctx.stroke();
		   

		   // heart
ctx.beginPath();
ctx.moveTo(xHear, yHear); 
ctx.bezierCurveTo(xHear, yHear - 75, xHear - 100, yHear - 75, xHear - 100, yHear);
ctx.bezierCurveTo(xHear - 100, yHear - 75, xHear - 200, yHear - 75, xHear - 200, yHear);
ctx.bezierCurveTo(xHear - 210, yHear + 20, xHear - 100, yHear + 145, xHear - 100, yHear + 125);
ctx.bezierCurveTo(xHear - 100, yHear + 145, xHear + 10, yHear + 20, xHear, yHear);
ctx.lineWidth = 10;
ctx.fillStyle = "#ff0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   
ctx.beginPath();
ctx.moveTo(xHear2, yHear2); 
ctx.bezierCurveTo(xHear2, yHear2 - 100, xHear2 - 125, yHear2 - 100, xHear2 - 125, yHear2);
ctx.bezierCurveTo(xHear2 - 125, yHear2 - 100, xHear2 - 250, yHear2 - 100, xHear2 - 250, yHear2);
ctx.bezierCurveTo(xHear2 - 260, yHear2 + 45, xHear2 - 125, yHear2 + 170, xHear2 - 125, yHear2 + 150);
ctx.bezierCurveTo(xHear2 - 125, yHear2 + 170, xHear2 + 15, yHear2 + 45, xHear2, yHear2);
ctx.lineWidth = 10;
ctx.strokeStyle = hearGoalColor;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		   
		 
// hexagon
var numberOfSides = 6
var hexSize = 100;
ctx.beginPath();
ctx.moveTo(xHexa +  hexSize * Math.cos(0), yHexa +  hexSize *  Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(xHexa + hexSize * Math.cos(i * 2 * Math.PI / numberOfSides), yHexa + hexSize * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#f0f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   
var numberOfSides2 = 6
var hexSize2 = 125;
ctx.beginPath();
ctx.moveTo(xHexa2 +  hexSize2 * Math.cos(0), yHexa2 +  hexSize2 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides2; i += 1) {
  ctx.lineTo(xHexa2 + hexSize2 * Math.cos(i * 2 * Math.PI / numberOfSides2), yHexa2 + hexSize2 * Math.sin(i * 2 * Math.PI / numberOfSides2));
}
ctx.lineWidth = 10;
ctx.strokeStyle = hexaGoalColor;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();

		   
		   
	
	function drawRect(x, y) {
ctx.beginPath();	
ctx.rect(x, y, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
		ctx.closePath();
		
ctx.beginPath();	
ctx.rect(505, 120, 250, 250);
ctx.lineWidth = 10;
ctx.strokeStyle = rectGoalColor;
ctx.globalAlpha = 1;
ctx.stroke();
		ctx.closePath();
}
		   
		   
		   	function drawCirc(x, y) {
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
ctx.arc(1620, 245, 125, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.strokeStyle = circGoalColor;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
}
		   
		   
		   
		   		   	function drawTria(x, y) {
		ctx.beginPath();
ctx.moveTo(x - 100, y);
ctx.lineTo(x + 100, y);
ctx.lineTo(x, y - height);
ctx.lineWidth = 10;
//ctx.strokeStyle = '#00f';
//ctx.stroke();
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
				ctx.closePath(); // Line to bottom-left corner
						
						
						
ctx.beginPath();
ctx.moveTo(835, 370);
ctx.lineTo(1085, 370);
ctx.lineTo(960, 370 - height2);
ctx.closePath();
ctx.lineWidth = 10;
ctx.globalAlpha = 1;
ctx.strokeStyle = triaGoalColor;
ctx.stroke();

}
		   
		   
		   
	function drawHear(x, y) {
			   // heart
ctx.beginPath();
ctx.moveTo(x, y); 
ctx.bezierCurveTo(x, y - 75, x - 100, y - 75, x - 100, y);
ctx.bezierCurveTo(x - 100, y - 75, x - 200, y - 75, x - 200, y);
ctx.bezierCurveTo(x - 210, y + 20, x - 100, y + 145, x - 100, y + 125);
ctx.bezierCurveTo(x - 100, y + 145, x + 10, y + 20, x, y);
ctx.lineWidth = 10;
ctx.fillStyle = "#ff0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   
ctx.beginPath();
ctx.moveTo(xHear2, yHear2); 
ctx.bezierCurveTo(xHear2, yHear2 - 100, xHear2 - 125, yHear2 - 100, xHear2 - 125, yHear2);
ctx.bezierCurveTo(xHear2 - 125, yHear2 - 100, xHear2 - 250, yHear2 - 100, xHear2 - 250, yHear2);
ctx.bezierCurveTo(xHear2 - 260, yHear2 + 45, xHear2 - 125, yHear2 + 170, xHear2 - 125, yHear2 + 150);
ctx.bezierCurveTo(xHear2 - 125, yHear2 + 170, xHear2 + 15, yHear2 + 45, xHear2, yHear2);
ctx.lineWidth = 10;
ctx.strokeStyle = hearGoalColor;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();	
	}
		   
		   
	function drawHexa(x, y) {
	// hexagon
ctx.beginPath();
ctx.moveTo(x +  hexSize * Math.cos(0), y +  hexSize *  Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(x + hexSize * Math.cos(i * 2 * Math.PI / numberOfSides), y + hexSize * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#f0f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		   
		   

ctx.beginPath();
ctx.moveTo(xHexa2 +  hexSize2 * Math.cos(0), yHexa2 +  hexSize2 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides2; i += 1) {
  ctx.lineTo(xHexa2 + hexSize2 * Math.cos(i * 2 * Math.PI / numberOfSides2), yHexa2 + hexSize2 * Math.sin(i * 2 * Math.PI / numberOfSides2));
}
ctx.lineWidth = 10;
ctx.strokeStyle = hexaGoalColor;
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
	  localStorage.setItem("shapesLevel3RightScore", seconds);
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
				
		if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xRect && thesiAntiheiraX < xRect + 200
		   && thesiAntiheiraY > yRect && thesiAntiheiraY < yRect + 200 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xRect = thesiAntiheiraX - 100;
		yRect = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect(xRect, yRect);
drawCirc(xCirc, yCirc);
drawTria(xTria, yTria);
			drawHear(xHear, yHear);
			drawHexa(xHexa, yHexa);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc - 100 && thesiAntiheiraX < xCirc + 100 && thesiAntiheiraY > yCirc - 100 && thesiAntiheiraY < yCirc + 100 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xCirc = thesiAntiheiraX;
		yCirc = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect(xRect, yRect);
drawCirc(xCirc, yCirc);
drawTria(xTria, yTria);
			drawHear(xHear, yHear);
			drawHexa(xHexa, yHexa);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria - 100 && thesiAntiheiraX < xTria + 100 && thesiAntiheiraY > yTria - 200 && thesiAntiheiraY < yTria && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria = thesiAntiheiraX;
		yTria = thesiAntiheiraY + 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect(xRect, yRect);
drawCirc(xCirc, yCirc);
drawTria(xTria, yTria);
			drawHear(xHear, yHear);
			drawHexa(xHexa, yHexa);
		}	 else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xHear - 200 && thesiAntiheiraX < xHear && thesiAntiheiraY > yHear - 75 && thesiAntiheiraY < yHear + 125 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xHear = thesiAntiheiraX + 100;
		yHear = thesiAntiheiraY - 25;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect(xRect, yRect);
drawCirc(xCirc, yCirc);
drawTria(xTria, yTria);
			drawHear(xHear, yHear);
			drawHexa(xHexa, yHexa);
		}  else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xHexa - 100 && thesiAntiheiraX < xHexa + 100 && thesiAntiheiraY > yHexa - 100 && thesiAntiheiraY < yHexa + 100 && grabbing == false) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xHexa = thesiAntiheiraX;
		yHexa = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect(xRect, yRect);
drawCirc(xCirc, yCirc);
drawTria(xTria, yTria);
			drawHear(xHear, yHear);
			drawHexa(xHexa, yHexa);
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
				
			
		
		
		
		
		
	
		   


				
				
		
		if (xRect > 485 && xRect < 575 && yRect > 100 & yRect < 190) {
			rectGoalColor = "#0f0";
			if (hasLetGo == true) {
		   rectGoalAch = 1;
			}
		} else {
			rectGoalColor = "#000";
		   rectGoalAch = 0;
		}
		
		
			if (xCirc > 1580 && xCirc < 1660 && yCirc > 205 & yCirc < 285) {
			circGoalColor = "#0f0";
				if (hasLetGo == true) {
		   circGoalAch = 1;
		} 
				} else {
			circGoalColor = "#000";
		   circGoalAch = 0;
		}
		
		
				if (xTria > 920 && xTria < 1000 && yTria > 305 & yTria < 385) {
			triaGoalColor = "#0f0";
					if (hasLetGo == true) {
		   triaGoalAch = 1;
		}
					} else {
			triaGoalColor = "#000";
		   triaGoalAch = 0;
		}
		
				

					if (xHear > 355 && xHear < 445 && yHear > 155 & yHear < 240) {
			hearGoalColor = "#0f0";
					if (hasLetGo == true) {
		   hearGoalAch = 1;
		}
					} else {
			hearGoalColor = "#000";
		   hearGoalAch = 0;
		}
				
				

				
							if (xHexa > 1250 && xHexa < 1330 && yHexa  > 205 & yHexa  < 285) {
			hexaGoalColor = "#0f0";
					if (hasLetGo == true) {
		   hexaGoalAch = 1;
		}
					} else {
			hexaGoalColor = "#000";
		   hexaGoalAch = 0;
		}
		
		
		
		
		
		
		if (rectGoalAch > 0 && circGoalAch > 0 && triaGoalAch > 0 && hearGoalAch > 0 && hexaGoalAch > 0) {
		
  localStorage.setItem("shapesLevel3RightScore", seconds);
			
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