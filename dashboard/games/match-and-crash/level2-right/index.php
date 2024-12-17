<?php include '../../../../games-head.php';?>
	
<title>Match & Crash - Level 2</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");

var xTetr1 = 1280;
var yTetr1 = 680;
var xHexa1 = 1660;
var yHexa1 = 780;

var xTetr2 = 1000;
var yTetr2 = 200;
var xKikl1 = 820;
var yKikl1 = 300;
		   
var xHexa2 = 260;
var yHexa2 = 780;
var xKikl2 = 540;
var yKikl2 = 780;
		   
var rect1GoalAch = 0;
var circ1GoalAch = 0; 
var hexa1GoalAch = 0; 
var rect2GoalAch = 0;
var circ2GoalAch = 0; 
var hexa2GoalAch = 0; 
		   
	function drawShapes(xT1, yT1, xH1, yH1, xT2, yT2, xK1, yK1, xH2, yH2, xK2, yK2) {
		
					//  tetragono1
		ctx.beginPath();	
ctx.rect(xT1, yT1, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1560, 200, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();	
		
				ctx.beginPath();	
ctx.rect(1560, 440, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();
		
		// hexagon 1
var numberOfSides1 = 6
var hexSize1 = 100;
ctx.beginPath();
ctx.moveTo(xH1 +  hexSize1 * Math.cos(0), yH1 +  hexSize1 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides1; i += 1) {
  ctx.lineTo(xH1 + hexSize1 * Math.cos(i * 2 * Math.PI / numberOfSides1), yH1 + hexSize1 * Math.sin(i * 2 * Math.PI / numberOfSides1));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
		

ctx.beginPath();
ctx.moveTo(1380 +  hexSize1 * Math.cos(0), 300 +  hexSize1 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides1; i += 1) {
  ctx.lineTo(1380 + hexSize1 * Math.cos(i * 2 * Math.PI / numberOfSides1), 300 + hexSize1 * Math.sin(i * 2 * Math.PI / numberOfSides1));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
		

ctx.beginPath();
ctx.moveTo(1380 +  hexSize1 * Math.cos(0), 540 +  hexSize1 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides1; i += 1) {
  ctx.lineTo(1380 + hexSize1 * Math.cos(i * 2 * Math.PI / numberOfSides1), 540 + hexSize1 * Math.sin(i * 2 * Math.PI / numberOfSides1));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
		
		//  tetragono2
		ctx.beginPath();	
ctx.rect(xT2, yT2, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(720, 440, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();	
		
				ctx.beginPath();	
ctx.rect(720, 680, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();	
		
		// kiklos1
		
ctx.beginPath();
ctx.arc(xK1, yK1, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
		ctx.closePath();
		
ctx.beginPath();
ctx.arc(1100, 540, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.arc(1100, 780, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();		
		ctx.closePath();
		
		
		
		
		
			// hexagon 2
ctx.beginPath();
ctx.moveTo(xH2 +  hexSize1 * Math.cos(0), yH2 +  hexSize1 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides1; i += 1) {
  ctx.lineTo(xH2 + hexSize1 * Math.cos(i * 2 * Math.PI / numberOfSides1), yH2 + hexSize1 * Math.sin(i * 2 * Math.PI / numberOfSides1));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
		
		
		ctx.beginPath();
ctx.moveTo(540 +  hexSize1 * Math.cos(0), 300 +  hexSize1 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides1; i += 1) {
  ctx.lineTo(540 + hexSize1 * Math.cos(i * 2 * Math.PI / numberOfSides1), 300 + hexSize1 * Math.sin(i * 2 * Math.PI / numberOfSides1));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
		

ctx.beginPath();
ctx.moveTo(540 +  hexSize1 * Math.cos(0), 540 +  hexSize1 *  Math.sin(0));          
for (var i = 1; i <= numberOfSides1; i += 1) {
  ctx.lineTo(540 + hexSize1 * Math.cos(i * 2 * Math.PI / numberOfSides1), 540 + hexSize1 * Math.sin(i * 2 * Math.PI / numberOfSides1));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
		
				// kiklos2
		
ctx.beginPath();
ctx.arc(xK2, yK2, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
		ctx.closePath();
		
ctx.beginPath();
ctx.arc(260, 300, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.arc(260, 540, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();		
		ctx.closePath();
		
}
		   
		   
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);

		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
/* timer START */

var exerStarted = 0;
var timerStarted = false;
var seconds = 0;
	
var countdown = setInterval(function() {
	if (timerStarted == true) {
  if (seconds >= 600) {
	   clearInterval(countdown);
	  localStorage.setItem("matchCrashLevel2RightScore", seconds);
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
var grabbingTetra = false;
var grabbingKiklo = false;
var grabbingHexa = false;
		   
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
			
	if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xHexa1 - 100 && thesiAntiheiraX < xHexa1 + 100
		   && thesiAntiheiraY > yHexa1 - 100 && thesiAntiheiraY < yHexa1 + 100 && grabbing == false && thesiAntiheiraX < 1780 && thesiAntiheiraX > 1260 && thesiAntiheiraY > 660 && thesiAntiheiraY < 900 && grabbingTetra == false && hexa1GoalAch != 1) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
				if (thesiAntiheiraX <= 1660 && thesiAntiheiraX >= 1380) {
       xHexa1 = thesiAntiheiraX;
			}
			
			if (thesiAntiheiraX <= 1480) {
				xTetr1 = 1560;
			}
			
				if (thesiAntiheiraX <= 1420) {
				xHexa1 = 1380;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		}  else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr1 && thesiAntiheiraX < xTetr1 + 200 && thesiAntiheiraY > yTetr1 && thesiAntiheiraY < yTetr1 + 200 && grabbing == false && thesiAntiheiraX < 1780 && thesiAntiheiraX > 1260 && thesiAntiheiraY > 660 && thesiAntiheiraY < 900 && rect1GoalAch != 1) {
			
			grabbingTetra = true;
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
	
 
				if (thesiAntiheiraX <= 1660 && thesiAntiheiraX >= 1380) {
        xTetr1 = thesiAntiheiraX - 100;
			}
			
			if (thesiAntiheiraX >= 1560) {
				xHexa1 = 1380;
			}
			
				if (thesiAntiheiraX >= 1590) {
				xTetr1 = 1560;
				}
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		} 
		else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr2 && thesiAntiheiraX < xTetr2 + 200
		   && thesiAntiheiraY > yTetr2 && thesiAntiheiraY < yTetr2 + 200 && grabbing == false && thesiAntiheiraX < 1220 && thesiAntiheiraX > 700 && thesiAntiheiraY > 180 && thesiAntiheiraY < 420 && grabbingKiklo == false && rect2GoalAch != 1) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
			if (thesiAntiheiraX <= 1100 && thesiAntiheiraX >= 820) {
        xTetr2 = thesiAntiheiraX - 100;
			}
			
			if (thesiAntiheiraX <= 920) {
				xKikl1 = 1100;
			}
			
				if (thesiAntiheiraX <= 890) {
				xTetr2 = 720;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xKikl1 - 100 && thesiAntiheiraX < xKikl1 + 100 && thesiAntiheiraY > yKikl1 - 100 && thesiAntiheiraY < yKikl1 + 100 && grabbing == false && thesiAntiheiraX < 1220 && thesiAntiheiraX > 700 && thesiAntiheiraY > 180 && thesiAntiheiraY < 420 && circ1GoalAch != 1) {
			
			grabbingKiklo = true;
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
 
				if (thesiAntiheiraX <= 1100 && thesiAntiheiraX >= 820) {
       xKikl1 = thesiAntiheiraX;
			}
			
			if (thesiAntiheiraX >= 990) {
				xTetr2 = 720;
			}
			
				if (thesiAntiheiraX >= 1030) {
				xKikl1 = 1100;
				}
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xKikl2 - 100 && thesiAntiheiraX < xKikl2 + 100 && thesiAntiheiraY > yKikl2 - 100 && thesiAntiheiraY < yKikl2 + 100 && grabbing == false && thesiAntiheiraX < 660 && thesiAntiheiraX > 140 && thesiAntiheiraY > 680 && thesiAntiheiraY < 880 && grabbingHexa == false && circ2GoalAch != 1) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
 
				if (thesiAntiheiraX <= 540 && thesiAntiheiraX >= 260) {
       xKikl2 = thesiAntiheiraX;
			}
			
			if (thesiAntiheiraX <= 360) {
				xHexa2 = 540;
			}
			
				if (thesiAntiheiraX <= 300) {
				xKikl2 = 260;
				}
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		} 	 else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xHexa2 - 100 && thesiAntiheiraX < xHexa2 + 100 && thesiAntiheiraY > yHexa2 - 100 && thesiAntiheiraY < yHexa2 + 100 && grabbing == false && thesiAntiheiraX < 660 && thesiAntiheiraX > 140 && thesiAntiheiraY > 680 && thesiAntiheiraY < 880 && hexa2GoalAch != 1) {
			
			grabbingHexa = true;
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
 
				if (thesiAntiheiraX <= 540 && thesiAntiheiraX >= 260) {
       xHexa2 = thesiAntiheiraX;
			}
			
			if (thesiAntiheiraX >= 440) {
				xKikl2 = 260;
			}
			
				if (thesiAntiheiraX >= 500) {
				xHexa2 = 540;
				}
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		} 	else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetra = false;
			grabbingKiklo = false;
			grabbingHexa = false;
			
			    if (rect1GoalAch != 1) {
		  		xTetr1 = 1280;
			xHexa1 = 1660;
			  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		  }
				  if (rect2GoalAch != 1) {
		  		xTetr2 = 1000;
			xKikl1 = 820;
			  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		  }
			
				  if (circ2GoalAch != 1) {
		  		xKikl2 = 540;
			xHexa2 = 260;
					  
			  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		  }
			
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  grabbingTetra = false;
		  grabbingKiklo = false;
		  grabbingHexa = false;
		    if (xTetr1 != 1560 || xHexa1 != 1380) {
		  		xTetr1 = 1280;
			xHexa1 = 1660;
			  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		  }
		  if (xTetr2 != 720 || xKikl1 != 1100) {
		  		xTetr2 = 1000;
			xKikl1 = 820;
			  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		  }
		  
		  
		    if (xKikl2 != 260 || xHexa2 != 540) {
		  		xKikl2 = 540;
			xHexa2 = 260;
					  
			  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
   drawShapes(xTetr1, yTetr1, xHexa1, yHexa1, xTetr2, yTetr2, xKikl1, yKikl1, xHexa2, yHexa2, xKikl2, yKikl2);
		  }
	}
				
			
		
		
		
		

					
					
				if (xTetr1 == 1560) {
			if (hasLetGo == true) {
		   rect1GoalAch = 1;
			}
		} else {
		   rect1GoalAch = 0;
		}
		
					
						if (xHexa1 == 1380) {
			if (hasLetGo == true) {
		   hexa1GoalAch = 1;
			}
		} else {
		   hexa1GoalAch = 0;
		}
		
		
		
		if (xTetr2 == 720) {
			if (hasLetGo == true) {
		   rect2GoalAch = 1;
			}
		} else {
		   rect2GoalAch = 0;
		}
		
		
			if (xKikl1 == 1100) {
				if (hasLetGo == true) {
		   circ1GoalAch = 1;
		} 
				} else {
		   circ1GoalAch = 0;
		}
		
				
			if (xHexa2 == 540) {
			if (hasLetGo == true) {
		   hexa2GoalAch = 1;
			}
		} else {
		   hexa2GoalAch = 0;
		}
		

			if (xKikl2 == 260) {
				if (hasLetGo == true) {
		   circ2GoalAch = 1;
		} 
				} else {
		   circ2GoalAch = 0;
		}
	
		
		
		
		
		if (rect1GoalAch > 0 && circ1GoalAch > 0 && hexa1GoalAch > 0 && rect2GoalAch > 0 && circ2GoalAch > 0 && hexa2GoalAch > 0) {
		
  localStorage.setItem("matchCrashLevel2RightScore", seconds);
			
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