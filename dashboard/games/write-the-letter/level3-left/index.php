<?php include '../../../../games-head.php';?>
	
<title>Write the Letter - Level 3</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		
		   var rect1GoalAch = 0;
	var rect2GoalAch = 0;
	var rect3GoalAch = 0;
		   
		   
		   

		   var rect1perc = 0; // min 0 | max 100
		   
		   
    var rect1Width1 = (1225 - (rect1perc * 2.65) + 100) * 0.97;   
		   if (rect1Width1 <= 1060) {
			   rect1Width1 = 960;
		   }
		    var rect1Width2 = (1225 - (rect1perc * 2.65) - 100) * 1.04;   
		   if (rect1Width2 <= 960) {
			   rect1Width2 = 960;
		   }
	var rect1Height1 = 820 - (rect1perc * 4.8); 
		   if (rect1Height1 <= 440) {
			   rect1Height1 = 240;
			    rect1Width1 = 960;
			    rect1Width2 = 960;
		   }
		   var rect1Height2 = 820 - (rect1perc * 4.8); 
		   if (rect1Height2 <= 440) {
			   rect1Height2 = 440;
		   }
		   
	
		   
		   	   var rect2perc = 0; // min 0 | max 100
		   
    var rect2Width1 = (960 - (rect2perc * 2.65) - 75);   
		
		    var rect2Width2 = (960 - (rect2perc * 2.65) + 75);   
		  
	var rect2Height1 = 340 + (rect2perc * 4.8); 
		   if (rect2Height1 <= 440) {
			   rect2Height1 = 440;
			   rect2Width1 = 835;
				   rect2Width2 = 960;
		   }
		   var rect2Height2 = 340 + (rect2perc * 4.8); 
		   if (rect2Height2 <= 440) {
			   rect2Height2 = 440;
		   }
		   
		   if (rect2perc == 0) {
			  rect2Width1 = 960;
			   rect2Width2 = 960;
		   }
		   
		    var rect3perc = 0; // min 0 | max 100

	var rect3Width1 = 1031 - (rect3perc * 1.41);
	var rect3Width2 = 1079 - (rect3perc * 2.38);
		  
		   
	   
ctx.beginPath();
ctx.moveTo(1150, 820);
ctx.lineTo(1300, 820);		  		  
ctx.lineTo(rect1Width1, rect1Height1);
ctx.lineTo(rect1Width2, rect1Height2);
ctx.lineTo(1150, 820);	   
ctx.lineWidth = 10;
ctx.fillStyle = "#333";
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();	  		  
ctx.moveTo(960, 240);
ctx.lineTo(rect2Width1, rect2Height1);
ctx.lineTo(rect2Width2, rect2Height2);
ctx.lineTo(960, 440);
ctx.lineTo(960, 240);	   
ctx.lineWidth = 10;
ctx.fillStyle = "#333";
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();
ctx.moveTo(1031, 582.5);
ctx.lineTo(rect3Width1, 582.5);        
ctx.lineTo(rect3Width2, 677.5);		  
ctx.lineTo(1079, 677.5);
ctx.lineTo(1031, 582.5);
ctx.lineWidth = 10;
ctx.fillStyle = "#333";
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();
ctx.moveTo(1150, 820);
ctx.lineTo(1300, 820);		  
ctx.lineTo(960, 240);
ctx.lineTo(620, 820);
ctx.lineTo(770, 820);
ctx.lineTo(960, 440);
ctx.lineTo(1153, 820);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
		   
ctx.beginPath();
ctx.moveTo(1031, 582.5);
ctx.lineTo(889, 582.5);
ctx.moveTo(841, 677.5);		  
ctx.lineTo(1079, 677.5);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();

		
		
	
	function drawRect(x, y, z) {
		
		  rect1Width1 = (1225 - (x * 2.65) + 100) * 0.97;   
		   if (rect1Width1 <= 1060) {
			   rect1Width1 = 960;
		   }
		  rect1Width2 = (1225 - (x * 2.65) - 100) * 1.04;   
		   if (rect1Width2 <= 960) {
			   rect1Width2 = 960;
		   }
	rect1Height1 = 820 - (x * 4.8); 
		   if (rect1Height1 <= 440) {
			   rect1Height1 = 240;
			    rect1Width1 = 960;
			    rect1Width2 = 960;
		   }
		 rect1Height2 = 820 - (x * 4.8); 
		   if (rect1Height2 <= 440) {
			   rect1Height2 = 440;
		   }
		
		
		
     rect2Width1 = (960 - (y * 2.65) - 75);   
		     rect2Width2 = (960 - (y * 2.65) + 75);   
	 rect2Height1 = 340 + (y * 4.8); 
		   if (rect2Height1 <= 440) {
			   rect2Height1 = 440;
			   rect2Width1 = 835;
				   rect2Width2 = 960;
		   }
		    rect2Height2 = 340 + (y * 4.8); 
		   if (rect2Height2 <= 440) {
			   rect2Height2 = 440;
		   }
		if (y == 0) {
			  rect2Width1 = 960;
			   rect2Width2 = 960;
		   }
		
	rect3Width1 = 1031 - (z * 1.41);
	rect3Width2 = 1079 - (z * 2.38);
		
		ctx.beginPath();
ctx.moveTo(1150, 820);
ctx.lineTo(1300, 820);		  		  
ctx.lineTo(rect1Width1, rect1Height1);
ctx.lineTo(rect1Width2, rect1Height2);
ctx.lineTo(1150, 820);	   
ctx.lineWidth = 10;
ctx.fillStyle = "#333";
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();	  		  
ctx.moveTo(960, 240);
ctx.lineTo(rect2Width1, rect2Height1);
ctx.lineTo(rect2Width2, rect2Height2);
ctx.lineTo(960, 440);
ctx.lineTo(960, 240);	   
ctx.lineWidth = 10;
ctx.fillStyle = "#333";
ctx.globalAlpha = 0.5;
ctx.fill();
		   
ctx.beginPath();
ctx.moveTo(1031, 582.5);
ctx.lineTo(rect3Width1, 582.5);        
ctx.lineTo(rect3Width2, 677.5);		  
ctx.lineTo(1079, 677.5);
ctx.lineTo(1031, 582.5);
ctx.lineWidth = 10;
ctx.fillStyle = "#333";
ctx.globalAlpha = 0.5;
ctx.fill();
		
		
		
		
		
		
		
ctx.beginPath();
ctx.moveTo(1150, 820);
ctx.lineTo(1300, 820);		  
ctx.lineTo(960, 240);
ctx.lineTo(620, 820);
ctx.lineTo(770, 820);
ctx.lineTo(960, 440);
ctx.lineTo(1153, 820);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
		   
ctx.beginPath();
ctx.moveTo(1031, 582.5);
ctx.lineTo(889, 582.5);
ctx.moveTo(841, 677.5);		  
ctx.lineTo(1079, 677.5);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
}
		   

		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
/* timer START */

var exerStarted = 0;
var timerStarted = false;
var seconds = 0;
	
var countdown = setInterval(function() {
	if (timerStarted == true) {
  if (seconds >= 600) {
	   clearInterval(countdown);
	  localStorage.setItem("writeTheLetterLevel3LeftScore", seconds);
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
var getFromTop = false;
var getFromTop2 = false;
var firstLineDone = false;
var secondLineDone = false;
var Ldone = false;
		   
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
		
		var sidesBig = Math.sqrt((1300 - 960) * (1300 - 960) + (820 - 240) * (820 - 240));
		var bottomSideBig = 1300 - 620;
		var distFromBotLeftBig = Math.sqrt((1300 - thesiAntiheiraX) * (1300 - thesiAntiheiraX) + (820 - thesiAntiheiraY) * (820 - thesiAntiheiraY));
		var distFromBotRightBig = Math.sqrt((thesiAntiheiraX - 620) * (thesiAntiheiraX - 620) + (820 - thesiAntiheiraY) * (820 - thesiAntiheiraY));
	    var distFromTopBig = Math.sqrt((thesiAntiheiraX - 960) * (thesiAntiheiraX - 960) + (thesiAntiheiraY - 240) * (thesiAntiheiraY - 240));
	    var halfPerimeter1 = (distFromBotLeftBig + distFromTopBig + sidesBig) / 2;
		var halfPerimeter2 = (distFromBotRightBig + distFromTopBig + sidesBig) / 2;
		
		
		var areaOfOutTria = (bottomSideBig * (820 - 240)) / 2;
	var handInOutTria1 = (bottomSideBig * (820 - thesiAntiheiraY)) / 2;
		var handInOutTria2 = Math.sqrt(halfPerimeter1 * (halfPerimeter1 - distFromBotLeftBig) * (halfPerimeter1 - distFromTopBig) * (halfPerimeter1 - sidesBig));
		var handInOutTria3 = Math.sqrt(halfPerimeter2 * (halfPerimeter2 - distFromBotRightBig) * (halfPerimeter2 - distFromTopBig) * (halfPerimeter2 - sidesBig));
		
		
		
		
		
		
		
		
		
			var sidesSmall = Math.sqrt((1150 - 960) * (1150 - 960) + (820 - 440) * (820 - 440));
		var bottomSideSmall = 1150 - 770;
		var distFromBotLeftSmall = Math.sqrt((1150 - thesiAntiheiraX) * (1150 - thesiAntiheiraX) + (820 - thesiAntiheiraY) * (820 - thesiAntiheiraY));
		var distFromBotRightSmall = Math.sqrt((thesiAntiheiraX - 770) * (thesiAntiheiraX - 770) + (820 - thesiAntiheiraY) * (820 - thesiAntiheiraY));
	    var distFromTopSmall = Math.sqrt((thesiAntiheiraX - 960) * (thesiAntiheiraX - 960) + (thesiAntiheiraY - 440) * (thesiAntiheiraY - 440));
	    var halfPerimeter1small = (distFromBotLeftSmall + distFromTopSmall + sidesSmall) / 2;
		var halfPerimeter2small = (distFromBotRightSmall + distFromTopSmall + sidesSmall) / 2;
		
		
		var areaOfInTria = (bottomSideSmall * (820 - 440)) / 2;
	var handInInTria1 = (bottomSideSmall * (820 - thesiAntiheiraY)) / 2;
		var handInInTria2 = Math.sqrt(halfPerimeter1small * (halfPerimeter1small - distFromBotLeftSmall) * (halfPerimeter1small - distFromTopSmall) * (halfPerimeter1small - sidesSmall));
		var handInInTria3 = Math.sqrt(halfPerimeter2small * (halfPerimeter2small - distFromBotRightSmall) * (halfPerimeter2small - distFromTopSmall) * (halfPerimeter2small - sidesSmall));
		
		
		
		var handInsideOuterTriangle = (areaOfOutTria > handInOutTria1 + handInOutTria2 + handInOutTria3 - 1000 && areaOfOutTria < handInOutTria1 + handInOutTria2 + handInOutTria3 + 1000 && thesiAntiheiraX < 1300 && thesiAntiheiraX > 620 && thesiAntiheiraY > 240 && thesiAntiheiraY < 820);
		var handOutsideInnerTriangle = ((areaOfInTria > handInInTria1 + handInInTria2 + handInInTria3 + 500 || areaOfInTria < handInInTria1 + handInInTria2 + handInInTria3 - 500) && thesiAntiheiraX < 1150 && thesiAntiheiraX > 770 && thesiAntiheiraY > 440 && thesiAntiheiraY < 820) || thesiAntiheiraX >= 1150 || thesiAntiheiraX <= 770 || thesiAntiheiraY <= 440 || thesiAntiheiraY >= 820;
			
		
		
		
		
		
			if (exerStarted > 0) {
				
				if (thesiAntiheiraY > 780 && thesiAntiheiraY < 870 && thesiAntiheiraX > 1150 && thesiAntiheiraX < 1300) {
					getFromTop = true;
				}
				
					if (thesiAntiheiraY > 570 && thesiAntiheiraY < 690 && thesiAntiheiraX > 1000 && thesiAntiheiraX < 1100) {
					getFromTop2 = true;
				}
				
		if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && handInsideOuterTriangle && handOutsideInnerTriangle && grabbing == false && getFromTop == true && firstLineDone == false) {

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
      rect1perc = ((1225 - thesiAntiheiraX) / 265) * 100;
			
			if (thesiAntiheiraX < 1000) {
			rect1perc = 100;	
			}
			
			if (rect1perc == 100) {
				firstLineDone = true;
			}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect(rect1perc, 0, 0);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && handInsideOuterTriangle && handOutsideInnerTriangle && grabbing == false && getFromTop == true && firstLineDone == true && secondLineDone == false) {

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
      rect2perc = ((960 - thesiAntiheiraX) / 265) * 100;
			
			if (thesiAntiheiraX < 750) {
			rect2perc = 100;	
			}
			
			if (rect2perc == 100) {
				secondLineDone = true;
			}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect(rect1perc, rect2perc, 0);
		} else if (firstLineDone == true && secondLineDone == true && (difAntiheirasDiktis >= 0.05 || difAntiheirasMesos >= 0.05) && thesiAntiheiraX > 570 && thesiAntiheiraX < 820 && thesiAntiheiraY < 900 && thesiAntiheiraY > 750) {
			Ldone = true;
		} else if (Ldone == true && grabbing == false && getFromTop2 == true && difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX < 1100 && thesiAntiheiraX > 820 && thesiAntiheiraY < 690 && thesiAntiheiraY > 570) {
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
      rect3perc = ((1079 - thesiAntiheiraX) / 239) * 100;
			
			if (thesiAntiheiraX < 870) {
			rect3perc = 100;	
			}		
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect(rect1perc, rect2perc, rect3perc);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && Ldone == true && !handInsideOuterTriangle) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			Ldone = false;
				getFromTop = false;
				firstLineDone = false;
				secondLineDone = false;
				     rect1perc = 0;
		rect2perc = 0;
			rect3perc = 0;	
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect(0, 0, 0);
			} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			} else {
			grabbing = false;
				getFromTop = false;
				getFromTop2 = false;
				rect3perc = 0;	
				if (Ldone == false) {
				firstLineDone = false;
				secondLineDone = false;
				     rect1perc = 0;
		rect2perc = 0;
				}
				 	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
    drawRect(rect1perc, rect2perc, rect3perc);
	}
				
			
		
		
		

		
		if (rect1perc == 100) {
		   rect1GoalAch = 1;
		}	
		if (rect2perc == 100) {
		   rect2GoalAch = 1;
		}
			if (rect3perc == 100) {
		   rect3GoalAch = 1;
		}
	
	
		
		if (rect1GoalAch > 0 && rect2GoalAch > 0 && rect3GoalAch > 0) {
		
  localStorage.setItem("writeTheLetterLevel3LeftScore", seconds);
			
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