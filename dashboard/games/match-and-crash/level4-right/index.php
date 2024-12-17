<?php include '../../../../games-head.php';?>
	
<title>Match & Crash - Level 4</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		   
		   /* MESI APOSTASI METAKSI SHIMATON 80px */
		   
		   // first class
		   
var yCirc1 = 400;	// ipsos kiklou stin othoni   
var xCirc1 = 1100;		   
var yHexa1 = 680;   // ipsos eksagonou stin othoni
var xHexa1 = 1100;
var ySqua1 = 300;	 // ipsos tetragonou stin othoni
var xSqua1 = 720;
var yTria1 = 780;   // ipsos trigonou stin othoni
var xTria1 = 820;
		   
var sCirc1 = 100;   // megethos kiklou stin othoni
var sHexa1 = 1;   // megethos eksagonou stin othoni
var sSqua1 = 200;   // megethos tetragonou stin othoni
var sTria1 = 1;    // megethos trigonou stin othoni
	
var gComb1_1 = 0;
var gComb1_2 = 0;
var gComb1 = 0;

function shapes1(yC1, yH1, yS1, yT1, sC1, sH1, sS1, sT1) {
	
		// kiklos
		
ctx.beginPath();
ctx.arc(1100, yC1, sC1, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
		ctx.closePath();
		
ctx.beginPath();
ctx.arc(1340, 680, sC1, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.arc(1580, 680, sC1, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();		
		ctx.closePath();
	
			// hexagon
	
var numberOfSides = 6
var hexSize = 100;
ctx.beginPath();
ctx.moveTo(1100 +  (hexSize * sH1) * Math.cos(0), yH1 + (hexSize * sH1) *  Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(1100 + (hexSize * sH1) * Math.cos(i * 2 * Math.PI / numberOfSides), yH1 + (hexSize * sH1) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.moveTo(1340 + (hexSize * sH1) * Math.cos(0), 400 + (hexSize * sH1) * Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(1340 + (hexSize * sH1) * Math.cos(i * 2 * Math.PI / numberOfSides), 400 + (hexSize * sH1) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.moveTo(1580 + (hexSize * sH1) * Math.cos(0), 400 + (hexSize * sH1) *  Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(1580 + (hexSize * sH1) * Math.cos(i * 2 * Math.PI / numberOfSides), 400 + (hexSize * sH1) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
			// tetragono
		
		ctx.beginPath();	
ctx.rect(720, yS1, sS1, sS1);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(480, 580, sS1, sS1);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();	
		
				ctx.beginPath();	
ctx.rect(240, 580, sS1, sS1);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();
	
				// trigono
	
let heightTria = 230 * Math.cos(Math.PI / 6) * sT1;
ctx.beginPath();
ctx.moveTo(820 - 100, yT1);
ctx.lineTo(820 + 100, yT1);
ctx.lineTo(820, yT1 - heightTria);
ctx.lineWidth = 10;
ctx.fillStyle = "#ff0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
	ctx.beginPath();
ctx.moveTo(580 - 100, 500);
ctx.lineTo(580 + 100, 500);
ctx.lineTo(580, 500 - heightTria);
ctx.lineWidth = 10;
ctx.fillStyle = "#ff0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
	ctx.beginPath();
ctx.moveTo(340 - 100, 500);
ctx.lineTo(340 + 100, 500);
ctx.lineTo(340, 500 - heightTria);
ctx.lineWidth = 10;
ctx.fillStyle = "#ff0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
}
		
		   
shapes1(yCirc1, yHexa1, ySqua1, yTria1, sCirc1, sHexa1, sSqua1, sTria1);
		   
		   
		   // second class
		   
var xCirc2_1 = 1340;	// orizontia topothetisi kiklou stin othoni  
var yCirc2_1 = 300;
var xHexa2_1 = 1580;   // orizontia topothetisi eksagonou stin othoni
var yHexa2_1 = 300;  	   
var xSqua2_1 = 720;	 // orizontia topothetisi tetragonou stin othoni
var ySqua2_1 = 680;		   
var xCirc2_2 = 1100;	// orizontia topothetisi kiklou stin othoni 
var yCirc2_2 = 780;	
var xHexa2_2 = 340;   // orizontia topothetisi eksagonou stin othoni
var yHexa2_2 = 300;  	   
var xSqua2_2 = 480;	 // orizontia topothetisi tetragonou stin othoni
var ySqua2_2 = 200;	 
		   
var sCirc2_1 = 100;   // megethos kiklou stin othoni
var sHexa2_1 = 1;   // megethos eksagonou stin othoni
var sSqua2_1 = 200;   // megethos tetragonou stin othoni
var sCirc2_2 = 100;   // megethos kiklou stin othoni
var sHexa2_2 = 1;   // megethos eksagonou stin othoni
var sSqua2_2 = 200;   // megethos tetragonou stin othoni
		   
var gComb2_1 = 0;
var gComb2_2 = 0;
var gComb2_3 = 0;
var gComb2 = 0;
	
var ipsos_col2 = -1000; // goal 0
	      
function shapes2(xC1, xH1, xS1, xC2, xH2, xS2, sC1, sH1, sS1, sC2, sH2, sS2, ipsos) {		   
			
	// kiklos1
		
ctx.beginPath();
ctx.arc(xC1, 300 + ipsos, sC1, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
		ctx.closePath();
		
ctx.beginPath();
ctx.arc(1580, 540 + ipsos, sC1, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.arc(1580, 780 + ipsos, sC1, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();		
		ctx.closePath();	
	
	
				// hexagon 1
	
var numberOfSides = 6
var hexSize = 100;
ctx.beginPath();
ctx.moveTo(xH1 + (hexSize * sH1) * Math.cos(0), 300 + ipsos + (hexSize * sH1) *  Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(xH1 + (hexSize * sH1) * Math.cos(i * 2 * Math.PI / numberOfSides), 300 + ipsos + (hexSize * sH1) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.moveTo(1340 + (hexSize * sH1) * Math.cos(0), 540 + ipsos + (hexSize * sH1) * Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(1340 + (hexSize * sH1) * Math.cos(i * 2 * Math.PI / numberOfSides), 540 + ipsos + (hexSize * sH1) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.moveTo(1340 + (hexSize * sH1) * Math.cos(0), 780 + ipsos + (hexSize * sH1) *  Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(1340 + (hexSize * sH1) * Math.cos(i * 2 * Math.PI / numberOfSides), 780 + ipsos + (hexSize * sH1) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
// tetragono 1
		
		ctx.beginPath();	
ctx.rect(xS1, 680 + ipsos, sS1, sS1);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1000, 200 + ipsos, sS1, sS1);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();	
		
				ctx.beginPath();	
ctx.rect(1000, 440 + ipsos, sS1, sS1);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();
	
	
		// kiklos2
		
ctx.beginPath();
ctx.arc(xC2, 780 + ipsos, sC2, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
		ctx.closePath();
		
ctx.beginPath();
ctx.arc(820, 300 + ipsos, sC2, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.arc(820, 540 + ipsos, sC2, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();		
		ctx.closePath();
	
				// hexagon 2
	
ctx.beginPath();
ctx.moveTo(xH2 + (hexSize * sH2) * Math.cos(0), 300 + ipsos + (hexSize * sH2) *  Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(xH2 + (hexSize * sH2) * Math.cos(i * 2 * Math.PI / numberOfSides), 300 + ipsos + (hexSize * sH2) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.moveTo(580 + (hexSize * sH2) * Math.cos(0), 540 + ipsos + (hexSize * sH2) * Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(580 + (hexSize * sH2) * Math.cos(i * 2 * Math.PI / numberOfSides), 540 + ipsos + (hexSize * sH2) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.moveTo(580 + (hexSize * sH2) * Math.cos(0), 780 + ipsos + (hexSize * sH2) *  Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(580 + (hexSize * sH2) * Math.cos(i * 2 * Math.PI / numberOfSides), 780 + ipsos + (hexSize * sH2) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
	// tetragono 2
		
		ctx.beginPath();	
ctx.rect(xS2, 200 + ipsos, sS2, sS2);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(240, 440 + ipsos, sS2, sS2);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();	
		
				ctx.beginPath();	
ctx.rect(240, 680 + ipsos, sS2, sS2);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();
	
}		   
		   
		   
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);		   
		   
		   
		    // third class
		   
var yCirc3 = 400;	// ipsos kiklou stin othoni   
var xCirc3 = 340;
var yHexa3 = 680;   // ipsos eksagonou stin othoni
var xHexa3 = 340;
var ySqua3 = 300;	 // ipsos tetragonou stin othoni
var xSqua3 = 1480;	
var yTria3 = 780;   // ipsos trigonou stin othoni
var xTria3 = 1580;  
		   
var sCirc3 = 100;   // megethos kiklou stin othoni
var sHexa3 = 1;   // megethos eksagonou stin othoni
var sSqua3 = 200;   // megethos tetragonou stin othoni
var sTria3 = 1;    // megethos trigonou stin othoni
	
var gComb3_1 = 0;
var gComb3_2 = 0;
var gComb3 = 0;
		   
var ipsos_col3 = -1000; // goal 0

function shapes3(yC1, yH1, yS1, yT1, sC1, sH1, sS1, sT1, ipsos) {
	
		// kiklos
		
ctx.beginPath();
ctx.arc(340, yC1 + ipsos, sC1, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
		ctx.closePath();
		
ctx.beginPath();
ctx.arc(580, 680 + ipsos, sC1, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.arc(820, 680 + ipsos, sC1, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();		
		ctx.closePath();
	
			// hexagon
	
var numberOfSides = 6
var hexSize = 100;
ctx.beginPath();
ctx.moveTo(340 +  (hexSize * sH1) * Math.cos(0), yH1 + ipsos + (hexSize * sH1) *  Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(340 + (hexSize * sH1) * Math.cos(i * 2 * Math.PI / numberOfSides), yH1 + ipsos + (hexSize * sH1) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.moveTo(580 + (hexSize * sH1) * Math.cos(0), 400 + ipsos + (hexSize * sH1) * Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(580 + (hexSize * sH1) * Math.cos(i * 2 * Math.PI / numberOfSides), 400 + ipsos + (hexSize * sH1) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
ctx.beginPath();
ctx.moveTo(820 + (hexSize * sH1) * Math.cos(0), 400 + ipsos + (hexSize * sH1) *  Math.sin(0));          
for (var i = 1; i <= numberOfSides; i += 1) {
  ctx.lineTo(820 + (hexSize * sH1) * Math.cos(i * 2 * Math.PI / numberOfSides), 400 + ipsos + (hexSize * sH1) * Math.sin(i * 2 * Math.PI / numberOfSides));
}
ctx.lineWidth = 10;
ctx.fillStyle = "#00f";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
			// tetragono
		
		ctx.beginPath();	
ctx.rect(1480, yS1 + ipsos, sS1, sS1);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(1240, 580 + ipsos, sS1, sS1);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();	
		
				ctx.beginPath();	
ctx.rect(1000, 580 + ipsos, sS1, sS1);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
	ctx.closePath();
	
				// trigono
	
let heightTria = 230 * Math.cos(Math.PI / 6) * sT1;
ctx.beginPath();
ctx.moveTo(1580 - 100, yT1 + ipsos);
ctx.lineTo(1580 + 100, yT1 + ipsos);
ctx.lineTo(1580, yT1 + ipsos - heightTria);
ctx.lineWidth = 10;
ctx.fillStyle = "#ff0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
	ctx.beginPath();
ctx.moveTo(1340 - 100, 500 + ipsos);
ctx.lineTo(1340 + 100, 500 + ipsos);
ctx.lineTo(1340, 500 + ipsos - heightTria);
ctx.lineWidth = 10;
ctx.fillStyle = "#ff0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
	ctx.beginPath();
ctx.moveTo(1100 - 100, 500 + ipsos);
ctx.lineTo(1100 + 100, 500 + ipsos);
ctx.lineTo(1100, 500 + ipsos - heightTria);
ctx.lineWidth = 10;
ctx.fillStyle = "#ff0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
}
		
		   
shapes3(yCirc3, yHexa3, ySqua3, yTria3, sCirc3, sHexa3, sSqua3, sTria3, ipsos_col3);
		   
		   
		   
/* timer START */

var exerStarted = 0;
var timerStarted = false;
var seconds = 0;
	
var countdown = setInterval(function() {
	if (timerStarted == true) {
  if (seconds >= 600) {
	   clearInterval(countdown);
	  localStorage.setItem("matchCrashLevel4RightScore", seconds);
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
var grabbingHexa1 = false;
var grabbingTria1 = false;
var grabbingHexa2_1 = false;
var grabbingCirc2_2 = false;
var grabbingSqua2_2 = false;
var grabbingHexa3 = false;
var grabbingTria3 = false;
		   
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
			
				// first class 
				
		if (gComb1 != 1) {
			
if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc1 - 100 && thesiAntiheiraX < xCirc1 + 100
		   && thesiAntiheiraY > yCirc1 - 100 && thesiAntiheiraY < yCirc1 + 100 && grabbing == false && thesiAntiheiraX < 1200 && thesiAntiheiraX > 1000 && thesiAntiheiraY > 280 && thesiAntiheiraY < 800 && grabbingHexa1 == false && gComb1_1 != 1) {
		
		hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
				if (thesiAntiheiraY <= 680 && thesiAntiheiraY >= 400) {
       yCirc1 = thesiAntiheiraY;
			}
			
			if (thesiAntiheiraY >= 580) {
				yHexa1 = 400;
			}
			
				if (thesiAntiheiraY >= 620) {
				yCirc1 = 680;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes1(yCirc1, yHexa1, ySqua1, yTria1, sCirc1, sHexa1, sSqua1, sTria1);
		
} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xHexa1 - 100 && thesiAntiheiraX < xHexa1 + 100
		   && thesiAntiheiraY > yHexa1 - 100 && thesiAntiheiraY < yHexa1 + 100 && grabbing == false && thesiAntiheiraX < 1200 && thesiAntiheiraX > 1000 && thesiAntiheiraY > 280 && thesiAntiheiraY < 800 && gComb1_1 != 1) {
		
			grabbingHexa1 = true;
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
	
 
			if (thesiAntiheiraY <= 680 && thesiAntiheiraY >= 400) {
       yHexa1 = thesiAntiheiraY;
			}
			
			if (thesiAntiheiraY <= 500) {
				yCirc1 = 680;
			}
			
				if (thesiAntiheiraY <= 460) {
				yHexa1 = 400;
				}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes1(yCirc1, yHexa1, ySqua1, yTria1, sCirc1, sHexa1, sSqua1, sTria1);
	
} 	else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xSqua1 && thesiAntiheiraX < xSqua1 + 200
		   && thesiAntiheiraY > ySqua1 && thesiAntiheiraY < ySqua1 + 200 && grabbing == false && thesiAntiheiraX < 920 && thesiAntiheiraX > 720 && thesiAntiheiraY > 280 && thesiAntiheiraY < 800 && grabbingTria1 == false && gComb1_2 != 1) {
		
		hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
				if (thesiAntiheiraY <= 680 && thesiAntiheiraY >= 400) {
       ySqua1 = thesiAntiheiraY - 100;
			}
			
			if (thesiAntiheiraY >= 580) {
				yTria1 = 500;
			}
			
				if (thesiAntiheiraY >= 620) {
				ySqua1 = 580;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes1(yCirc1, yHexa1, ySqua1, yTria1, sCirc1, sHexa1, sSqua1, sTria1);
		
} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria1 - 100 && thesiAntiheiraX < xTria1 + 100
		   && thesiAntiheiraY > yTria1 - 200 && thesiAntiheiraY < yTria1 && grabbing == false && thesiAntiheiraX < 920 && thesiAntiheiraX > 720 && thesiAntiheiraY > 280 && thesiAntiheiraY < 800 && gComb1_2 != 1) {
		
	grabbingTria1 = true;
	
		hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
				if (thesiAntiheiraY <= 680 && thesiAntiheiraY >= 400) {
       yTria1 = thesiAntiheiraY + 100;
			}
			
			if (thesiAntiheiraY <= 500) {
				ySqua1 = 580;
			}
			
				if (thesiAntiheiraY <= 460) {
				yTria1 = 500;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes1(yCirc1, yHexa1, ySqua1, yTria1, sCirc1, sHexa1, sSqua1, sTria1);
		
} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingHexa1 = false;
					grabbingTria1 = false;
	
			    if (gComb1_1 != 1) {
		  		yCirc1 = 400;
			yHexa1 = 680;
					
/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes1(yCirc1, yHexa1, ySqua1, yTria1, sCirc1, sHexa1, sSqua1, sTria1);
		  }
	
		    if (gComb1_2 != 1) {
		  		ySqua1 = 300;
			yTria1 = 780;
					
/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes1(yCirc1, yHexa1, ySqua1, yTria1, sCirc1, sHexa1, sSqua1, sTria1);
		  }		
		  }	
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  grabbingHexa1 = false;
grabbingTria1 = false;
		  
		    if (yCirc1 != 680 || yHexa1 != 400) {
		  		yCirc1 = 400;
			yHexa1 = 680;
	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes1(yCirc1, yHexa1, ySqua1, yTria1, sCirc1, sHexa1, sSqua1, sTria1);
		  }
		  
		  
		  	    if (ySqua1 != 580 || yTria1 != 500) {
		  		ySqua1 = 300;
			yTria1 = 780;
	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes1(yCirc1, yHexa1, ySqua1, yTria1, sCirc1, sHexa1, sSqua1, sTria1);
		  }
		  	
	}
			}
				
			
				
				// second class
		
					else if (gComb2 != 1) {
			
if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc2_1 - 100 && thesiAntiheiraX < xCirc2_1 + 100
		   && thesiAntiheiraY > yCirc2_1 - 100 && thesiAntiheiraY < yCirc2_1 + 100 && grabbing == false && thesiAntiheiraX < 1680 && thesiAntiheiraX > 1240 && thesiAntiheiraY > 180 && thesiAntiheiraY < 420 && grabbingHexa2_1 == false && gComb2_1 != 1) {
		
		hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
				if (thesiAntiheiraX <= 1580 && thesiAntiheiraX >= 1340) {
       xCirc2_1 = thesiAntiheiraX;
			}
			
			if (thesiAntiheiraX >= 1480) {
				xHexa2_1 = 1340;
			}
			
				if (thesiAntiheiraX >= 1530) {
				xCirc2_1 = 1580;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
		
} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xHexa2_1 - 100 && thesiAntiheiraX < xHexa2_1 + 100
		   && thesiAntiheiraY > yHexa2_1 - 100 && thesiAntiheiraY < yHexa2_1 + 100 && grabbing == false && thesiAntiheiraX < 1680 && thesiAntiheiraX > 1240 && thesiAntiheiraY > 180 && thesiAntiheiraY < 420 && gComb2_1 != 1) {
		
			grabbingHexa2_1 = true;
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
	
 
			if (thesiAntiheiraX <= 1580 && thesiAntiheiraX >= 1340) {
       xHexa2_1 = thesiAntiheiraX;
			}
			
			if (thesiAntiheiraX <= 1440) {
				xCirc2_1 = 1580;
			}
			
				if (thesiAntiheiraX <= 1390) {
				xHexa2_1 = 1340;
				}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
	
} 
						
	else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xSqua2_1 && thesiAntiheiraX < xSqua2_1 + 200
		   && thesiAntiheiraY > ySqua2_1 && thesiAntiheiraY < ySqua2_1 + 200 && grabbing == false && thesiAntiheiraX < 1200 && thesiAntiheiraX > 720 && thesiAntiheiraY > 660 && thesiAntiheiraY < 900 && grabbingCirc2_2 == false && gComb2_2 != 1) {
		
		hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
				if (thesiAntiheiraX <= 1100 && thesiAntiheiraX >= 820) {
       xSqua2_1 = thesiAntiheiraX - 100;
			}
			
			if (thesiAntiheiraX >= 1000) {
				xCirc2_2 = 820;
			}
			
				if (thesiAntiheiraX >= 1050) {
				xSqua2_1 = 1000;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
		
}	 else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc2_2 - 100 && thesiAntiheiraX < xCirc2_2 + 100
		   && thesiAntiheiraY > yCirc2_2 - 100 && thesiAntiheiraY < yCirc2_2 + 100 && grabbing == false && thesiAntiheiraX < 1200 && thesiAntiheiraX > 720 && thesiAntiheiraY > 660 && thesiAntiheiraY < 900 && gComb2_2 != 1) {
		
			grabbingCirc2_2 = true;
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
	
 
			if (thesiAntiheiraX <= 1100 && thesiAntiheiraX >= 820) {
       xCirc2_2 = thesiAntiheiraX;
			}
			
			if (thesiAntiheiraX <= 920) {
				xSqua2_1 = 1000;
			}
			
				if (thesiAntiheiraX <= 870) {
				xCirc2_2 = 820;
				}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
	
}
						
 else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xHexa2_2 - 100 && thesiAntiheiraX < xHexa2_2 + 100
		   && thesiAntiheiraY > yHexa2_2 - 100 && thesiAntiheiraY < yHexa2_2 + 100 && grabbing == false && thesiAntiheiraX < 680 && thesiAntiheiraX > 240 && thesiAntiheiraY > 180 && thesiAntiheiraY < 420 && grabbingSqua2_2 == false && gComb2_3 != 1) {
		
		hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
				if (thesiAntiheiraX <= 580 && thesiAntiheiraX >= 340) {
       xHexa2_2 = thesiAntiheiraX;
			}
			
			if (thesiAntiheiraX >= 480) {
				xSqua2_2 = 240;
			}
			
				if (thesiAntiheiraX >= 530) {
				xHexa2_2 = 580;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
		
} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xSqua2_2 && thesiAntiheiraX < xSqua2_2 + 200
		   && thesiAntiheiraY > ySqua2_2 && thesiAntiheiraY < ySqua2_2 + 200 && grabbing == false && thesiAntiheiraX < 680 && thesiAntiheiraX > 240 && thesiAntiheiraY > 180 && thesiAntiheiraY < 420 && gComb2_3 != 1) {
		
			grabbingSqua2_2 = true;
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
	
 
			if (thesiAntiheiraX <= 580 && thesiAntiheiraX >= 340) {
       xSqua2_2 = thesiAntiheiraX - 100;
			}
			
			if (thesiAntiheiraX <= 440) {
				xHexa2_2 = 580;
			}
			
				if (thesiAntiheiraX <= 390) {
				xSqua2_2 = 240;
				}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
	
} 
else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingHexa2_1 = false;
	grabbingCirc2_2 = false;
			grabbingSqua2_2 = false;				
							
			    if (gComb2_1 != 1) {
		  		xCirc2_1 = 1340;
			xHexa2_1 = 1580;
					
/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
		  }
							
		 if (gComb2_2 != 1) {
		  		xCirc2_2 = 1100;
			xSqua2_1 = 720;
					
/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
		  }
	

		 if (gComb2_3 != 1) {
		  		xHexa2_2 = 340;
			xSqua2_2 = 480;
					
/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
		  }
		
		  }							

		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  grabbingHexa2_1 = false;
grabbingCirc2_2 = false;
		  grabbingSqua2_2 = false;
		  
		    if (xCirc2_1 != 1580 || xHexa2_1 != 1340) {
		  		xCirc2_1 = 1340;
			xHexa2_1 = 1580;
	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
		  }
		  
		  	    if (xSqua2_1 != 1000 || xCirc2_2 != 820) {
		  		xCirc2_2 = 1100;
			xSqua2_1 = 720;
	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
		  }
		  
		  
		  	  	    if (xSqua2_2 != 240 || xHexa2_2 != 580) {
		  		xSqua2_2 = 480;
			xHexa2_2 = 340;
	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
		  }
	
		  	
	}
			}
				
				// third class
				
				

				
				
				else if (gComb3 != 1) {
			
if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xCirc3 - 100 && thesiAntiheiraX < xCirc3 + 100
		   && thesiAntiheiraY > yCirc3 - 100 && thesiAntiheiraY < yCirc3 + 100 && grabbing == false && thesiAntiheiraX < 440 && thesiAntiheiraX > 240 && thesiAntiheiraY > 280 && thesiAntiheiraY < 800 && grabbingHexa3 == false && gComb3_1 != 1) {
		
		hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
				if (thesiAntiheiraY <= 680 && thesiAntiheiraY >= 400) {
       yCirc3 = thesiAntiheiraY;
			}
			
			if (thesiAntiheiraY >= 580) {
				yHexa3 = 400;
			}
			
				if (thesiAntiheiraY >= 620) {
				yCirc3 = 680;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes3(yCirc3, yHexa3, ySqua3, yTria3, sCirc3, sHexa3, sSqua3, sTria3, ipsos_col3);
		
} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xHexa3 - 100 && thesiAntiheiraX < xHexa3 + 100
		   && thesiAntiheiraY > yHexa3 - 100 && thesiAntiheiraY < yHexa3 + 100 && grabbing == false && thesiAntiheiraX < 440 && thesiAntiheiraX > 240 && thesiAntiheiraY > 280 && thesiAntiheiraY < 800 && gComb3_1 != 1) {
		
			grabbingHexa3 = true;
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
	
 
			if (thesiAntiheiraY <= 680 && thesiAntiheiraY >= 400) {
       yHexa3 = thesiAntiheiraY;
			}
			
			if (thesiAntiheiraY <= 500) {
				yCirc3 = 680;
			}
			
				if (thesiAntiheiraY <= 460) {
				yHexa3 = 400;
				}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes3(yCirc3, yHexa3, ySqua3, yTria3, sCirc3, sHexa3, sSqua3, sTria3, ipsos_col3);
	
}
					 
					
					else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xSqua3 && thesiAntiheiraX < xSqua3 + 200
		   && thesiAntiheiraY > ySqua3 && thesiAntiheiraY < ySqua3 + 200 && grabbing == false && thesiAntiheiraX < 1680 && thesiAntiheiraX > 1480 && thesiAntiheiraY > 280 && thesiAntiheiraY < 800 && grabbingTria3 == false && gComb3_2 != 1) {
		
		hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
				if (thesiAntiheiraY <= 680 && thesiAntiheiraY >= 400) {
       ySqua3 = thesiAntiheiraY - 100;
			}
			
			if (thesiAntiheiraY >= 580) {
				yTria3 = 500;
			}
			
				if (thesiAntiheiraY >= 620) {
				ySqua3 = 580;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes3(yCirc3, yHexa3, ySqua3, yTria3, sCirc3, sHexa3, sSqua3, sTria3, ipsos_col3);
		
} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria3 - 100 && thesiAntiheiraX < xTria3 + 100
		   && thesiAntiheiraY > yTria3 - 200 && thesiAntiheiraY < yTria3 && grabbing == false && thesiAntiheiraX < 1680 && thesiAntiheiraX > 1480 && thesiAntiheiraY > 280 && thesiAntiheiraY < 800 && gComb3_2 != 1) {
		
	grabbingTria3 = true;
	
		hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
				if (thesiAntiheiraY <= 680 && thesiAntiheiraY >= 400) {
       yTria3 = thesiAntiheiraY + 100;
			}
			
			if (thesiAntiheiraY <= 500) {
				ySqua3 = 580;
			}
			
				if (thesiAntiheiraY <= 460) {
				yTria3 = 500;
				}
			
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes3(yCirc3, yHexa3, ySqua3, yTria3, sCirc3, sHexa3, sSqua3, sTria3, ipsos_col3);
		
}
					

					
 else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingHexa3 = false;
	grabbingTria3 = false;
	 
			    if (gComb3_1 != 1) {
		  		yCirc3 = 400;
			yHexa3 = 680;
					
/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes3(yCirc3, yHexa3, ySqua3, yTria3, sCirc3, sHexa3, sSqua3, sTria3, ipsos_col3);
		  }
	 
	     if (gComb3_2 != 1) {
		  		ySqua3 = 300;
			yTria3 = 780;
					
/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes3(yCirc3, yHexa3, ySqua3, yTria3, sCirc3, sHexa3, sSqua3, sTria3, ipsos_col3);
		  }
	
		
		  }	
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  grabbingHexa3 = false;
		  grabbingTria3 = false;
		  
		    if (yCirc3 != 680 || yHexa3 != 400) {
		  		yCirc3 = 400;
			yHexa3 = 680;
	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes3(yCirc3, yHexa3, ySqua3, yTria3, sCirc3, sHexa3, sSqua3, sTria3, ipsos_col3);
		  }
		  
		  	  
		  	    if (ySqua3 != 580 || yTria3 != 500) {
		  		ySqua3 = 300;
			yTria3 = 780;
	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes3(yCirc3, yHexa3, ySqua3, yTria3, sCirc3, sHexa3, sSqua3, sTria3, ipsos_col3);
		  }
		  
		  

		  	
	}
			}
	
				// check if done
		
		if (yCirc1 == 680 && yHexa1 == 400) {
			if (hasLetGo == true && gComb1_1 != 1) {
		   gComb1_1 = 1;
				if (gComb1_2 == 1) {
				getNewCol1();
						exerStarted = 0;
				}
			}
		} else {
		   gComb1_1 = 0;
		}
				
			
				if (ySqua1 == 580 && yTria1 == 500) {
			if (hasLetGo == true && gComb1_2 != 1) {
		   gComb1_2 = 1;
				if (gComb1_1 == 1) {
				getNewCol1();
						exerStarted = 0;
				}
			}
		} else {
		   gComb1_2 = 0;
		}	
				
				
				
				
				
				
					if (xCirc2_1 == 1580 && xHexa2_1 == 1340) {
			if (hasLetGo == true && gComb2_1 != 1) {
		   gComb2_1 = 1;
				if (gComb2_2 == 1 && gComb2_3 == 1) {
				getNewCol2();
						exerStarted = 0;
				}
			}
		} else {
		   gComb2_1 = 0;
		}	
	
				
					if (xCirc2_2 == 820 && xSqua2_1 == 1000) {
			if (hasLetGo == true && gComb2_2 != 1) {
		   gComb2_2 = 1;
				if (gComb2_1 == 1 && gComb2_3 == 1) {
				getNewCol2();
						exerStarted = 0;
				}
			}
		} else {
		   gComb2_2 = 0;
		}	
				
				
				
				
						if (xHexa2_2 == 580 && xSqua2_2 == 240) {
			if (hasLetGo == true && gComb2_3 != 1) {
		   gComb2_3 = 1;
				if (gComb2_1 == 1 && gComb2_2 == 1) {
				getNewCol2();
						exerStarted = 0;
				}
			}
		} else {
		   gComb2_3 = 0;
		}	
				
				
				
					
		if (yCirc3 == 680 && yHexa3 == 400) {
			if (hasLetGo == true && gComb3_1 != 1) {
		   gComb3_1 = 1;
				if (gComb3_2 == 1) {
				gComb3 = 1;
				}
			}
		} else {
		   gComb3_1 = 0;
		}
				

				
					if (ySqua3 == 580 && yTria3 == 500) {
			if (hasLetGo == true && gComb3_2 != 1) {
		   gComb3_2 = 1;
				if (gComb3_1 == 1) {
				gComb3 = 1;
				}
			}
		} else {
		   gComb3_2 = 0;
		}
				

		
		if (gComb1 > 0 && gComb2 > 0 && gComb3 > 0) {
		
  localStorage.setItem("matchCrashLevel4RightScore", seconds);
			
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
		   
		   
		     
		   
		   function getNewCol1() {
			   	sCirc1 = 0;
                sHexa1 = 0;
			     sSqua1 = 0;
                sTria1 = 0;
			   gComb1 = 1;
					var changeInterval1 = setInterval(function () {
						
						if (ipsos_col2 < 0) {
					ipsos_col2 += 10;
							
/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes1(yCirc1, yHexa1, ySqua1, yTria1, sCirc1, sHexa1, sSqua1, sTria1);
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
				} else {
clearInterval(changeInterval1);
						exerStarted = 1;
				}
}, 10);
		   }
		   
		
		   
		   	   function getNewCol2() {
			   	sCirc2_1 = 0;
                sHexa2_1 = 0;
			     sSqua2_1 = 0;
                  	sCirc2_2 = 0;
                sHexa2_2 = 0;
			     sSqua2_2 = 0;
			   gComb2 = 1;
					var changeInterval2 = setInterval(function () {
						
						if (ipsos_col3 < 0) {
					ipsos_col3 += 10;
							
/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
shapes2(xCirc2_1, xHexa2_1, xSqua2_1, xCirc2_2, xHexa2_2, xSqua2_2, sCirc2_1, sHexa2_1, sSqua2_1, sCirc2_2, sHexa2_2, sSqua2_2, ipsos_col2);
shapes3(yCirc3, yHexa3, ySqua3, yTria3, sCirc3, sHexa3, sSqua3, sTria3, ipsos_col3);
				} else {
clearInterval(changeInterval2);
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