<?php include '../../../../games-head.php';?>
	
<title>Check the Drop - Left Hand</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		   
		   
var finalGoalAch = 0;
		   
var reachGoal1 = 0;
var reachGoal2 = 0;
var reachGoal3 = 0;
var reachGoal4 = 0;
var reachGoal2_1 = 0;
var reachGoal2_2 = 0;
var reachGoal2_3 = 0;
var reachGoal3_1 = 0;
var reachGoal3_2 = 0;
var reachGoal3_3 = 0;
var reachGoal3_4 = 0;
var reachGoal3_5 = 0;
var reachGoal3_6 = 0;
var reachGoal4_1 = 0;
var reachGoal4_2 = 0;
var reachGoal4_3 = 0;
var reachGoal4_4 = 0;
var reachGoal4_5 = 0;
var reachGoal4_6 = 0;
var reachGoal4_7 = 0;
var reachGoal4_8 = 0;
var reachGoal4_9 = 0;
var reachGoal4_10 = 0;
		   
var currentDrop = 1;
		   
var xTetr1 = 660;
var yTetr1 = 660;
var xKikl1 = 1160;
var yKikl1 = 760;
var goalColor1 = "#000";
		   
var xTetr2 = 660;
var yTetr2 = 660;
var xKikl2 = 1160;
var yKikl2 = 760;
var goalColor2_1 = "#000";
var goalColor2_2 = "#000";
var goalColor2_3 = "#000";
		   
		   
var xTetr3 = 580;
var yTetr3 = 810;
var xKikl3 = 960;
var yKikl3 = 910;
var xTria3 = 1240;
var yTria3 = 1010;
var goalColor3_1 = "#000";
var goalColor3_2 = "#000";
var goalColor3_3 = "#000";
var goalColor3_4 = "#000";
var goalColor3_5 = "#000";
var goalColor3_6 = "#000";
		   
		   
var xTetr4 = 580;
var yTetr4 = 810;
var xKikl4 = 960;
var yKikl4 = 910;
var xTria4 = 1240;
var yTria4 = 1010;
var goalColor4_1 = "#000";
var goalColor4_2 = "#000";
var goalColor4_3 = "#000";
var goalColor4_4 = "#000";
var goalColor4_5 = "#000";
var goalColor4_6 = "#000";
var goalColor4_7 = "#000";
var goalColor4_8 = "#000";
var goalColor4_9 = "#000";
var goalColor4_10 = "#000";
		   

function dropShapes(checkDrop) {
var h = -300;
if (checkDrop == 1) {
var dropFirstBatch = setInterval(function() {
ctx.clearRect(0, 0, 1920, 1080);
	
ctx.beginPath();	
ctx.rect(860, h + 200, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
h += 15;
	
if (h == 1080) {
clearInterval(dropFirstBatch);	
paintFirstRiddle(xTetr1, yTetr1, xKikl1, yKikl1, goalColor1);
	exerStarted = 1;
	timerStarted = true;
	countdown;
}
}, 10);
} else if (checkDrop == 2) {
var dropSecondBatch = setInterval(function() {
ctx.clearRect(0, 0, 1920, 1080);
	
ctx.beginPath();	
ctx.rect(860, h + 200, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
	
ctx.beginPath();	
ctx.rect(860, h - 550, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(960, h - 1200, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
h += 15;
	
if (h == 2385) {
clearInterval(dropSecondBatch);	
paintSecondRiddle(xTetr2, yTetr2, xKikl2, yKikl2, goalColor2_1, goalColor2_2, goalColor2_3, reachGoal2_1, reachGoal2_2, reachGoal2_3);
	exerStarted = 1;
	timerStarted = true;
}
}, 10);
} else if (checkDrop == 3) {
var dropThirdBatch = setInterval(function() {
ctx.clearRect(0, 0, 1920, 1080);
	
ctx.beginPath();	
ctx.rect(860, h + 200, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
	
ctx.beginPath();	
ctx.rect(860, h - 550, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(960, h - 1200, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
let triaheight = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(860, h - 1850);
ctx.lineTo(1060, h - 1850);
ctx.lineTo(960, h - 1850 - triaheight);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = "#00f";
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(960, h - 2700, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();	
ctx.rect(860, h - 3550, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
h += 15;
	
if (h == 4650) {
clearInterval(dropThirdBatch);	
paintThirdRiddle(xTetr3, yTetr3, xKikl3, yKikl3, xTria3, yTria3, goalColor3_1, goalColor3_2, goalColor3_3, goalColor3_4, goalColor3_5, goalColor3_6, reachGoal3_1, reachGoal3_2, reachGoal3_3, reachGoal3_4, reachGoal3_5, reachGoal3_6);
	exerStarted = 1;
	timerStarted = true;
}
}, 10);
} else if (checkDrop == 4) {
var dropFourthBatch = setInterval(function() {
ctx.clearRect(0, 0, 1920, 1080);
	
ctx.beginPath();	
ctx.rect(860, h + 200, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
	
ctx.beginPath();	
ctx.rect(860, h - 550, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(960, h - 1200, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
let triaheight = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(860, h - 1850);
ctx.lineTo(1060, h - 1850);
ctx.lineTo(960, h - 1850 - triaheight);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = "#00f";
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(960, h - 2700, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();	
ctx.rect(860, h - 3550, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(960, h - 4200, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
let triaheight2 = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(860, h - 4850);
ctx.lineTo(1060, h - 4850);
ctx.lineTo(960, h - 4850 - triaheight2);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = "#00f";
ctx.fill();
ctx.closePath();
	
ctx.beginPath();	
ctx.rect(860, h - 5800, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(960, h - 6450, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
h += 15;
	
if (h == 7650) {
clearInterval(dropFourthBatch);	
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
	exerStarted = 1;
	timerStarted = true;
}
}, 10);
}
}		 
		   
function paintFirstRiddle(xT1, yT1, xK1, yK1, gc) {
		
		ctx.beginPath();	
ctx.rect(xT1, yT1, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(xK1, yK1, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 240, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("1", 840 + 100, 240 - 30);
		ctx.closePath();	
}
		   
		   function paintSecondRiddle(xT1, yT1, xK1, yK1, gc1, gc2, gc3, rc1, rc2, rc3) {
			   		ctx.beginPath();	
ctx.rect(xT1, yT1, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(xK1, yK1, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   
			   
				ctx.beginPath();	
ctx.rect(560, 240, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc1;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("1", 560 + 100, 240 - 30);
		ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 240, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc2;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("2", 840 + 100, 240 - 30);
		ctx.closePath();
			   
			   
			   				ctx.beginPath();	
ctx.rect(1120, 240, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc3;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("3", 1120 + 100, 240 - 30);
		ctx.closePath();
			   
			   
			   if (rc1 == 1) {
				   	   		ctx.beginPath();	
ctx.rect(580, 260, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
			   
			   	   if (rc2 == 1) {
				   	   		ctx.beginPath();	
ctx.rect(860, 260, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
			   
			   	   if (rc3 == 1) {
ctx.beginPath();
ctx.arc(1240, 360, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
		   }
		   
		   
		    function paintThirdRiddle(xS1, yS1, xC1, yC1, xT1, yT1, gc1, gc2, gc3, gc4, gc5, gc6, rc1, rc2, rc3, rc4, rc5, rc6) {
				
				 		ctx.beginPath();	
ctx.rect(xS1, yS1, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(xC1, yC1, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				
let triaheight = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(xT1 - 100, yT1);
ctx.lineTo(xT1 + 100, yT1);
ctx.lineTo(xT1, yT1 - triaheight);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = "#00f";
ctx.fill();
ctx.closePath();
			   
			   
				ctx.beginPath();	
ctx.rect(560, 140, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc1;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("1", 560 + 100, 140 - 30);
		ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 140, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc2;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("2", 840 + 100, 140 - 30);
		ctx.closePath();
			   
			   
			   				ctx.beginPath();	
ctx.rect(1120, 140, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc3;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("3", 1120 + 100, 140 - 30);
		ctx.closePath();
			   
				
				
								ctx.beginPath();	
ctx.rect(560, 540, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc4;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("4", 560 + 100, 540 - 30);
		ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 540, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc5;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("5", 840 + 100, 540 - 30);
		ctx.closePath();
			   
			   
			   				ctx.beginPath();	
ctx.rect(1120, 540, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc6;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("6", 1120 + 100, 540 - 30);
		ctx.closePath();
				
			   
			   if (rc1 == 1) {
				   	   		ctx.beginPath();	
ctx.rect(580, 160, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
			   
			   	   if (rc2 == 1) {
				   	   		ctx.beginPath();	
ctx.rect(860, 160, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
			   
			   	   if (rc3 == 1) {
ctx.beginPath();
ctx.arc(1240, 260, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
				
				
					   if (rc4 == 1) {
let triaheightDone = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(680 - 100, 760);
ctx.lineTo(680 + 100, 760);
ctx.lineTo(680, 760 - triaheightDone);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = "#00f";
ctx.fill();
ctx.closePath();
			   }
			   
			   	   if (rc5 == 1) {   
					   ctx.beginPath();
ctx.arc(960, 660, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
			   
			   	   if (rc6 == 1) {
ctx.beginPath();	
ctx.rect(1140, 560, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
			}
		   
		   
		   
		   function paintFourthRiddle(xS1, yS1, xC1, yC1, xT1, yT1, gc1, gc2, gc3, gc4, gc5, gc6, gc7, gc8, gc9, gc10, rc1, rc2, rc3, rc4, rc5, rc6, rc7, rc8, rc9, rc10) {
		
ctx.beginPath();	
ctx.rect(xS1, yS1, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	
ctx.beginPath();
ctx.arc(xC1, yC1, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				
let triaheight = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(xT1 - 100, yT1);
ctx.lineTo(xT1 + 100, yT1);
ctx.lineTo(xT1, yT1 - triaheight);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = "#00f";
ctx.fill();
ctx.closePath();
			   
			   
			   
			ctx.beginPath();	
ctx.rect(280, 140, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc1;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("1", 280 + 100, 140 - 30);
		ctx.closePath();
			   
				ctx.beginPath();	
ctx.rect(560, 140, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc2;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("2", 560 + 100, 140 - 30);
		ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 140, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc3;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("3", 840 + 100, 140 - 30);
		ctx.closePath();
			   
			   
			   				ctx.beginPath();	
ctx.rect(1120, 140, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc4;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("4", 1120 + 100, 140 - 30);
		ctx.closePath();
			   
			   
			      				ctx.beginPath();	
ctx.rect(1400, 140, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc5;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("5", 1400 + 100, 140 - 30);
		ctx.closePath();
			   
				
						ctx.beginPath();	
ctx.rect(280, 540, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc6;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("6", 280 + 100, 540 - 30);
		ctx.closePath();
			   
								ctx.beginPath();	
ctx.rect(560, 540, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc7;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("7", 560 + 100, 540 - 30);
		ctx.closePath();
		
				ctx.beginPath();	
ctx.rect(840, 540, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc8;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("8", 840 + 100, 540 - 30);
		ctx.closePath();
			   
			   
			   				ctx.beginPath();	
ctx.rect(1120, 540, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc9;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("9", 1120 + 100, 540 - 30);
		ctx.closePath();
			   
			   
			   				ctx.beginPath();	
ctx.rect(1400, 540, 240, 240);
ctx.lineWidth = 10;
ctx.strokeStyle = gc10;
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
		
		ctx.beginPath();
ctx.fillStyle = "#000";
ctx.globalAlpha = 1;
ctx.font = "80px Arial";
ctx.fillText("10", 1400 + 75, 540 - 30);
		ctx.closePath();
				
			   
			   if (rc1 == 1) {
				   	   		ctx.beginPath();	
ctx.rect(300, 160, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   } 
			  
			   
			   	   if (rc2 == 1) {
				   	   		ctx.beginPath();	
ctx.rect(580, 160, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   } 
			  
			   
			   	   if (rc3 == 1) {
ctx.beginPath();
ctx.arc(960, 260, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
				
				
					   if (rc4 == 1) {
let triaheightDone = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(1240 - 100, 360);
ctx.lineTo(1240 + 100, 360);
ctx.lineTo(1240, 360 - triaheightDone);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = "#00f";
ctx.fill();
ctx.closePath();
			   }
			   
			   	   if (rc5 == 1) {   
					   ctx.beginPath();
ctx.arc(1520, 260, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
			   
			   
			   
			   	   if (rc6 == 1) {
ctx.beginPath();	
ctx.rect(300, 560, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
			   
			   
 if (rc7 == 1) {
ctx.beginPath();
ctx.arc(680, 660, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
			   
			   
 if (rc8 == 1) {
let triaheightDone2 = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(960 - 100, 760);
ctx.lineTo(960 + 100, 760);
ctx.lineTo(960, 760 - triaheightDone2);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = "#00f";
ctx.fill();
ctx.closePath();
			   }
			   
			   
 if (rc9 == 1) {
ctx.beginPath();	
ctx.rect(1140, 560, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = "#0f0";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }

	if (rc10 == 1) {
ctx.beginPath();
ctx.arc(1520, 660, 100, 0, 2 * Math.PI);
ctx.lineWidth = 10;
ctx.fillStyle = "#f00";
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
			   }
			   
		   }

		   
/* 3secs countdown START */	   

var countdownSeconds = 3;

function start3secs() {
var countdownSecs = setInterval(function() {
	document.getElementById("secondsCountdownArea").style.display = "block";
	document.getElementById("secondsCountdownArea").innerHTML = countdownSeconds;
	countdownSeconds--;
	if (countdownSeconds == -1) {
		document.getElementById("secondsCountdownArea").style.display = "none";
		countdownSeconds = 3;
		clearInterval(countdownSecs);
		dropShapes(currentDrop);
	}
}, 1000);
}
		   
/* 3secs countdown END */	 
		   
/* timer START */

var exerStarted = 0;
var timerStarted = false;
var seconds = 60;
var actualScore = 0;
	
var countdown = setInterval(function() {
	if (timerStarted == true) {
  if (seconds <= 0) {
	   clearInterval(countdown);
	  localStorage.setItem("checkTheDropLeftScore", actualScore);
	    exerStarted = 0;
  document.getElementById("timeLeft").innerHTML = "00:00";
	  
	  		        Swal.fire({
title: 'The time is up! \n Your score is: ' + actualScore,
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
  } else if (seconds < 10) {
	   document.getElementById("timeLeft").innerHTML = "00:0" + seconds;
  } else if (seconds < 60) {
	  	   document.getElementById("timeLeft").innerHTML = "00:" + seconds;
  } else {
	    document.getElementById("timeLeft").innerHTML = "01:00";
  }
	 seconds--;
}
}, 1000);
		   
/* timer END */	   

/*dim custom code 1 start*/
		   
var grabbing = false;
var hasLetGo = true;
var grabbingKikl1 = false;
var grabbingKikl2 = false;
var grabbingKikl3 = false;
var grabbingTria3 = false;
var grabbingKikl4 = false;
var grabbingTria4 = false;
		   
		   document.getElementById("startButton").addEventListener("click", startExercise);
		   
		   function startExercise() {

			   document.getElementById("introMessage").style.display = "none";
			   
			   document.getElementById("quitButton").style.display = "block";
		
			   start3secs();
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
		   
		   
		   
		   
		   		   function wrongAnswer() {
					     localStorage.setItem("checkTheDropLeftScore", actualScore);

			exerStarted = 0;
			 clearInterval(countdown);

			   		        Swal.fire({
title: 'Wrong Answer! Your score is: ' + actualScore,
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
	

		if (currentDrop == 1) {
			 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr1 && thesiAntiheiraX < xTetr1 + 200
		   && thesiAntiheiraY > yTetr1 && thesiAntiheiraY < yTetr1 + 200 && grabbing == false && grabbingKikl1 == false && reachGoal1 == 0) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr1 = thesiAntiheiraX - 100;
		yTetr1 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintFirstRiddle(xTetr1, yTetr1, xKikl1, yKikl1, goalColor1);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xKikl1 - 100 && thesiAntiheiraX < xKikl1 + 100 && thesiAntiheiraY > yKikl1 - 100 && thesiAntiheiraY < yKikl1 + 100 && grabbing == false && reachGoal1 == 0) {
			
			hasLetGo = false;
grabbingKikl1 = true;
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xKikl1 = thesiAntiheiraX;
		yKikl1 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintFirstRiddle(xTetr1, yTetr1, xKikl1, yKikl1, goalColor1);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingKikl1 = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingKikl1 = false;
	}
			
			
				if (xTetr1 > 820 && xTetr1 < 900 && yTetr1 > 220 & yTetr1 < 300) {
					goalColor1 = "#777";
			if (hasLetGo == true) {
		   reachGoal1 = 1;
				actualScore = 1;
				currentDrop = 2;
				timerStarted = false;
				exerStarted = 0;
				  start3secs();
			}
		} 
			
				if (xKikl1 > 920 && xKikl1 < 1000 && yKikl1 > 320 && yKikl1 < 400) {
					goalColor1 = "#777";
			if (hasLetGo == true) {
		   reachGoal1 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
			
			if (!(xTetr1 > 820 && xTetr1 < 900 && yTetr1 > 220 && yTetr1 < 300) && !(xKikl1 > 920 && xKikl1 < 1000 && yKikl1 > 320 && yKikl1 < 400)) {
			goalColor1 = "#000";
	 reachGoal1 = 0;
		}
			
		}
				
				
				
				// DROP 2
				
				else if (currentDrop == 2) {
				 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr2 && thesiAntiheiraX < xTetr2 + 200
		   && thesiAntiheiraY > yTetr2 && thesiAntiheiraY < yTetr2 + 200 && grabbing == false && grabbingKikl2 == false && reachGoal2 == 0) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr2 = thesiAntiheiraX - 100;
		yTetr2 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintSecondRiddle(xTetr2, yTetr2, xKikl2, yKikl2, goalColor2_1, goalColor2_2, goalColor2_3, reachGoal2_1, reachGoal2_2, reachGoal2_3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xKikl2 - 100 && thesiAntiheiraX < xKikl2 + 100 && thesiAntiheiraY > yKikl2 - 100 && thesiAntiheiraY < yKikl2 + 100 && grabbing == false && reachGoal2 == 0) {
			
			hasLetGo = false;
grabbingKikl2 = true;
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xKikl2 = thesiAntiheiraX;
		yKikl2 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintSecondRiddle(xTetr2, yTetr2, xKikl2, yKikl2, goalColor2_1, goalColor2_2, goalColor2_3, reachGoal2_1, reachGoal2_2, reachGoal2_3);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingKikl2 = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingKikl2 = false;
	}
			
			
				if (xTetr2 > 540 && xTetr2 < 620 && yTetr2 > 220 && yTetr2 < 300 && reachGoal2_1 != 1) {
					goalColor2_1 = "#777";
			if (hasLetGo == true) {
		   reachGoal2_1 = 1;
				actualScore++;
xTetr2 = 660;
 yTetr2 = 660;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintSecondRiddle(xTetr2, yTetr2, xKikl2, yKikl2, goalColor2_1, goalColor2_2, goalColor2_3, reachGoal2_1, reachGoal2_2, reachGoal2_3);
				
				if (reachGoal2_2 == 1 && reachGoal2_3 == 1) {
					   reachGoal2 = 1;
				currentDrop = 3;
				timerStarted = false;
				exerStarted = 0;
				  start3secs();
				}
			}
		} 
					
						if (xTetr2 > 820 && xTetr2 < 900 && yTetr2 > 220 && yTetr2 < 300 && reachGoal2_2 != 1) {
					goalColor2_2 = "#777";
			if (hasLetGo == true) {
		   reachGoal2_2 = 1;
				actualScore++;
xTetr2 = 660;
 yTetr2 = 660;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintSecondRiddle(xTetr2, yTetr2, xKikl2, yKikl2, goalColor2_1, goalColor2_2, goalColor2_3, reachGoal2_1, reachGoal2_2, reachGoal2_3);
				
				if (reachGoal2_1 == 1 && reachGoal2_3 == 1) {
					   reachGoal2 = 1;
				currentDrop = 3;
				timerStarted = false;
				exerStarted = 0;
				  start3secs();
				}
			}
		} 
					
								if (xKikl2 > 1200 && xKikl2 < 1280 && yKikl2 > 320 && yKikl2 < 400 && reachGoal2_3 != 1) {
					goalColor2_3 = "#777";
			if (hasLetGo == true) {
		   reachGoal2_3 = 1;
				actualScore++;
 xKikl2 = 1160;
 yKikl2 = 760;		
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintSecondRiddle(xTetr2, yTetr2, xKikl2, yKikl2, goalColor2_1, goalColor2_2, goalColor2_3, reachGoal2_1, reachGoal2_2, reachGoal2_3);
				
				if (reachGoal2_1 == 1 && reachGoal2_2 == 1) {
					   reachGoal2 = 1;
				currentDrop = 3;
				timerStarted = false;
				exerStarted = 0;
				  start3secs();
				}
			}
		} 
			
					
					// wrong answers 
					
				if (xKikl2 > 640 && xKikl2 < 720 && yKikl2 > 320 && yKikl2 < 400 && reachGoal2_1 != 1) {
					goalColor2_1 = "#777";
			if (hasLetGo == true) {
		   reachGoal2 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
					
					
					if (xKikl2 > 920 && xKikl2 < 1000 && yKikl2 > 320 && yKikl2 < 400 && reachGoal2_2 != 1) {
					goalColor2_2 = "#777";
			if (hasLetGo == true) {
		   reachGoal2 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
					
					
							if (xTetr2 > 1100 && xTetr2 < 1180 && yTetr2 > 220 && yTetr2 < 300 && reachGoal2_3 != 1) {
					goalColor2_3 = "#777";
			if (hasLetGo == true) {
		   reachGoal2 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
			
					// change color of goals when not currently in them 
					
			if (!(xTetr2 > 540 && xTetr2 < 620 && yTetr2 > 220 & yTetr2 < 300) && !(xKikl2 > 640 && xKikl2 < 720 && yKikl2 > 320 & yKikl2 < 400)) {
			goalColor2_1 = "#000";
		}
					
						if (!(xTetr2 > 820 && xTetr2 < 900 && yTetr2 > 220 & yTetr2 < 300) && !(xKikl2 > 920 && xKikl2 < 1000 && yKikl2 > 320 & yKikl2 < 400)) {
			goalColor2_2 = "#000";
		}
					
						if (!(xTetr2 > 1100 && xTetr2 < 1180 && yTetr2 > 220 & yTetr2 < 300) && !(xKikl2 > 1200 && xKikl2 < 1280 && yKikl2 > 320 & yKikl2 < 400)) {
			goalColor2_3 = "#000";
		}
		}
				
				
				
				
			// --------------------------------------------------DROP 3	
				
				
				
					else if (currentDrop == 3) {
				 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr3 && thesiAntiheiraX < xTetr3 + 200
		   && thesiAntiheiraY > yTetr3 && thesiAntiheiraY < yTetr3 + 200 && grabbing == false && grabbingKikl3 == false && grabbingTria3 == false && reachGoal3 == 0) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr3 = thesiAntiheiraX - 100;
		yTetr3 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintThirdRiddle(xTetr3, yTetr3, xKikl3, yKikl3, xTria3, yTria3, goalColor3_1, goalColor3_2, goalColor3_3, goalColor3_4, goalColor3_5, goalColor3_6, reachGoal3_1, reachGoal3_2, reachGoal3_3, reachGoal3_4, reachGoal3_5, reachGoal3_6);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xKikl3 - 100 && thesiAntiheiraX < xKikl3 + 100 && thesiAntiheiraY > yKikl3 - 100 && thesiAntiheiraY < yKikl3 + 100 && grabbing == false && grabbingTria3 == false && reachGoal3 == 0) {
			
			hasLetGo = false;
grabbingKikl3 = true;
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xKikl3 = thesiAntiheiraX;
		yKikl3 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintThirdRiddle(xTetr3, yTetr3, xKikl3, yKikl3, xTria3, yTria3, goalColor3_1, goalColor3_2, goalColor3_3, goalColor3_4, goalColor3_5, goalColor3_6, reachGoal3_1, reachGoal3_2, reachGoal3_3, reachGoal3_4, reachGoal3_5, reachGoal3_6);
		}  else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria3 - 100 && thesiAntiheiraX < xTria3 + 100 && thesiAntiheiraY > yTria3 - 200 && thesiAntiheiraY < yTria3 && grabbing == false && reachGoal3 == 0) {
			
			hasLetGo = false;
grabbingTria3 = true;
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria3 = thesiAntiheiraX;
		yTria3 = thesiAntiheiraY + 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintThirdRiddle(xTetr3, yTetr3, xKikl3, yKikl3, xTria3, yTria3, goalColor3_1, goalColor3_2, goalColor3_3, goalColor3_4, goalColor3_5, goalColor3_6, reachGoal3_1, reachGoal3_2, reachGoal3_3, reachGoal3_4, reachGoal3_5, reachGoal3_6);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingKikl3 = false;
			grabbingTria3 = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingKikl3 = false;
		  grabbingTria3 = false;
	}
			
			// check goal 1
						
				if (xTetr3 > 540 && xTetr3 < 620 && yTetr3 > 120 && yTetr3 < 200 && reachGoal3_1 != 1) {
					goalColor3_1 = "#777";
			if (hasLetGo == true) {
		   reachGoal3_1 = 1;
				actualScore++;
xTetr3 = 580;
 yTetr3 = 810;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintThirdRiddle(xTetr3, yTetr3, xKikl3, yKikl3, xTria3, yTria3, goalColor3_1, goalColor3_2, goalColor3_3, goalColor3_4, goalColor3_5, goalColor3_6, reachGoal3_1, reachGoal3_2, reachGoal3_3, reachGoal3_4, reachGoal3_5, reachGoal3_6);
				
				if (reachGoal3_2 == 1 && reachGoal3_3 == 1 && reachGoal3_4 == 1 && reachGoal3_5 == 1 && reachGoal3_6 == 1) {
					   reachGoal3 = 1;
				currentDrop = 4;
				timerStarted = false;
				exerStarted = 0;
				  start3secs();
				}
			}
		} 
					
				// check goal 2
						
				if (xTetr3 > 820 && xTetr3 < 900 && yTetr3 > 120 && yTetr3 < 200 && reachGoal3_2 != 1) {
					goalColor3_2 = "#777";
			if (hasLetGo == true) {
		   reachGoal3_2 = 1;
				actualScore++;
xTetr3 = 580;
 yTetr3 = 810;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintThirdRiddle(xTetr3, yTetr3, xKikl3, yKikl3, xTria3, yTria3, goalColor3_1, goalColor3_2, goalColor3_3, goalColor3_4, goalColor3_5, goalColor3_6, reachGoal3_1, reachGoal3_2, reachGoal3_3, reachGoal3_4, reachGoal3_5, reachGoal3_6);
				
				if (reachGoal3_1 == 1 && reachGoal3_3 == 1 && reachGoal3_4 == 1 && reachGoal3_5 == 1 && reachGoal3_6 == 1) {
					   reachGoal3 = 1;
				currentDrop = 4;
				timerStarted = false;
				exerStarted = 0;
				  start3secs();
				}
			}
		} 
						
						// check goal 3
					
								if (xKikl3 > 1200 && xKikl3 < 1280 && yKikl3 > 220 && yKikl3 < 300 && reachGoal3_3 != 1) {
					goalColor3_3 = "#777";
			if (hasLetGo == true) {
		   reachGoal3_3 = 1;
				actualScore++;
 xKikl3 = 960;
 yKikl3 = 910;		
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintThirdRiddle(xTetr3, yTetr3, xKikl3, yKikl3, xTria3, yTria3, goalColor3_1, goalColor3_2, goalColor3_3, goalColor3_4, goalColor3_5, goalColor3_6, reachGoal3_1, reachGoal3_2, reachGoal3_3, reachGoal3_4, reachGoal3_5, reachGoal3_6);
				
				if (reachGoal3_1 == 1 && reachGoal3_2 == 1 && reachGoal3_4 == 1 && reachGoal3_5 == 1 && reachGoal3_6 == 1) {
					   reachGoal3 = 1;
				currentDrop = 4;
				timerStarted = false;
				exerStarted = 0;
				  start3secs();
				}
			}
		} 
						
						
									// check goal 4
					
								if (xTria3 > 640 && xTria3 < 720 && yTria3 > 720 && yTria3 < 800 && reachGoal3_4 != 1) {
					goalColor3_4 = "#777";
			if (hasLetGo == true) {
		   reachGoal3_4 = 1;
				actualScore++;
 xTria3 = 1240;
 yTria3 = 1010;		
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintThirdRiddle(xTetr3, yTetr3, xKikl3, yKikl3, xTria3, yTria3, goalColor3_1, goalColor3_2, goalColor3_3, goalColor3_4, goalColor3_5, goalColor3_6, reachGoal3_1, reachGoal3_2, reachGoal3_3, reachGoal3_4, reachGoal3_5, reachGoal3_6);
				
				if (reachGoal3_1 == 1 && reachGoal3_2 == 1 && reachGoal3_3 == 1 && reachGoal3_5 == 1 && reachGoal3_6 == 1) {
					   reachGoal3 = 1;
				currentDrop = 4;
				timerStarted = false;
				exerStarted = 0;
				  start3secs();
				}
			}
		} 
						
						
						
								// check goal 5
					
								if (xKikl3 > 920 && xKikl3 < 1000 && yKikl3 > 620 && yKikl3 < 700 && reachGoal3_5 != 1) {
					goalColor3_5 = "#777";
			if (hasLetGo == true) {
		   reachGoal3_5 = 1;
				actualScore++;
 xKikl3 = 960;
 yKikl3 = 910;		
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintThirdRiddle(xTetr3, yTetr3, xKikl3, yKikl3, xTria3, yTria3, goalColor3_1, goalColor3_2, goalColor3_3, goalColor3_4, goalColor3_5, goalColor3_6, reachGoal3_1, reachGoal3_2, reachGoal3_3, reachGoal3_4, reachGoal3_5, reachGoal3_6);
				
				if (reachGoal3_1 == 1 && reachGoal3_2 == 1 && reachGoal3_3 == 1 && reachGoal3_4 == 1 && reachGoal3_6 == 1) {
					   reachGoal3 = 1;
				currentDrop = 4;
				timerStarted = false;
				exerStarted = 0;
				  start3secs();
				}
			}
		} 
						
						
							// check goal 6
						
				if (xTetr3 > 1100 && xTetr3 < 1180 && yTetr3 > 520 && yTetr3 < 600 && reachGoal3_6 != 1) {
					goalColor3_6 = "#777";
			if (hasLetGo == true) {
		   reachGoal3_6 = 1;
				actualScore++;
xTetr3 = 580;
 yTetr3 = 810;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintThirdRiddle(xTetr3, yTetr3, xKikl3, yKikl3, xTria3, yTria3, goalColor3_1, goalColor3_2, goalColor3_3, goalColor3_4, goalColor3_5, goalColor3_6, reachGoal3_1, reachGoal3_2, reachGoal3_3, reachGoal3_4, reachGoal3_5, reachGoal3_6);
				
				if (reachGoal3_1 == 1 && reachGoal3_2 == 1 && reachGoal3_3 == 1 && reachGoal3_4 == 1 && reachGoal3_5 == 1) {
					   reachGoal3 = 1;
				currentDrop = 4;
				timerStarted = false;
				exerStarted = 0;
				  start3secs();
				}
			}
		} 
			
					
					// wrong answers 
					
				if ((xKikl3 > 640 && xKikl3 < 720 && yKikl3 > 220 && yKikl3 < 300 && reachGoal3_1 != 1) || (xTria3 > 640 && xTria3 < 720 && yTria3 > 320 && yTria3 < 400 && reachGoal3_1 != 1)) {
					goalColor3_1 = "#777";
			if (hasLetGo == true) {
		   reachGoal3 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
					
					
					if ((xKikl3 > 920 && xKikl3 < 1000 && yKikl3 > 220 && yKikl3 < 300 && reachGoal3_2 != 1) || (xTria3 > 920 && xTria3 < 1000 && yTria3 > 320 && yTria3 < 400 && reachGoal3_2 != 1)) {
					goalColor3_2 = "#777";
			if (hasLetGo == true) {
		   reachGoal3 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
					
					
							if ((xTetr3 > 1100 && xTetr3 < 1180 && yTetr3 > 120 && yTetr3 < 200 && reachGoal3_3 != 1) || (xTria3 > 1200 && xTria3 < 1280 && yTria3 > 320 && yTria3 < 400 && reachGoal3_3 != 1)) {
					goalColor3_3 = "#777";
			if (hasLetGo == true) {
		   reachGoal3 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
						
						
						
						
							if ((xKikl3 > 640 && xKikl3 < 720 && yKikl3 > 620 && yKikl3 < 700 && reachGoal3_4 != 1) || (xTetr3 > 540 && xTetr3 < 620 && yTetr3 > 520 && yTetr3 < 600 && reachGoal3_4 != 1)) {
					goalColor3_4 = "#777";
			if (hasLetGo == true) {
		   reachGoal3 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
					
					
					if ((xTetr3 > 820 && xTetr3 < 900 && yTetr3 > 520 && yTetr3 < 600 && reachGoal3_5 != 1) || (xTria3 > 920 && xTria3 < 1000 && yTria3 > 720 && yTria3 < 800 && reachGoal3_5 != 1)) {
					goalColor3_5 = "#777";
			if (hasLetGo == true) {
		   reachGoal3 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
					
					
							if ((xKikl3 > 1200 && xKikl3 < 1280 && yKikl3 > 620 && yKikl3 < 700 && reachGoal3_6 != 1) || (xTria3 > 1200 && xTria3 < 1280 && yTria3 > 720 && yTria3 < 800 && reachGoal3_6 != 1)) {
					goalColor3_6 = "#777";
			if (hasLetGo == true) {
		   reachGoal3 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
			
					// change color of goals when not currently in them 
					
			if (!(xTetr3 > 540 && xTetr3 < 620 && yTetr3 > 120 & yTetr3 < 200) && !(xKikl3 > 640 && xKikl3 < 720 && yKikl3 > 220 & yKikl3 < 300) && !(xTria3 > 640 && xTria3 < 720 && yTria3 > 320 & yTria3 < 400)) {
			goalColor3_1 = "#000";
		}
					
						if (!(xTetr3 > 820 && xTetr3 < 900 && yTetr3 > 120 & yTetr3 < 200) && !(xKikl3 > 920 && xKikl3 < 1000 && yKikl3 > 220 & yKikl3 < 300) && !(xTria3 > 920 && xTria3 < 1000 && yTria3 > 320 & yTria3 < 400)) {
			goalColor3_2 = "#000";
		}
					
						if (!(xTetr3 > 1100 && xTetr3 < 1180 && yTetr3 > 120 & yTetr3 < 200) && !(xKikl3 > 1200 && xKikl3 < 1280 && yKikl3 > 220 & yKikl3 < 300) && !(xTria3 > 1200 && xTria3 < 1280 && yTria3 > 320 & yTria3 < 400)) {
			goalColor3_3 = "#000";
		}
						
			if (!(xTetr3 > 540 && xTetr3 < 620 && yTetr3 > 520 & yTetr3 < 600) && !(xKikl3 > 640 && xKikl3 < 720 && yKikl3 > 620 & yKikl3 < 700) && !(xTria3 > 640 && xTria3 < 720 && yTria3 > 720 & yTria3 < 800)) {
			goalColor3_4 = "#000";
		}
					
						if (!(xTetr3 > 820 && xTetr3 < 900 && yTetr3 > 520 & yTetr3 < 600) && !(xKikl3 > 920 && xKikl3 < 1000 && yKikl3 > 620 & yKikl3 < 700) && !(xTria3 > 920 && xTria3 < 1000 && yTria3 > 720 & yTria3 < 800)) {
			goalColor3_5 = "#000";
		}
					
						if (!(xTetr3 > 1100 && xTetr3 < 1180 && yTetr3 > 520 & yTetr3 < 600) && !(xKikl3 > 1200 && xKikl3 < 1280 && yKikl3 > 620 & yKikl3 < 700) && !(xTria3 > 1200 && xTria3 < 1280 && yTria3 > 720 & yTria3 < 800)) {
			goalColor3_6 = "#000";
		}				
		}
				
				
				
		// --------------------------------------------------DROP 4		
				
				
				
else if (currentDrop == 4) {
				 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr4 && thesiAntiheiraX < xTetr4 + 200
		   && thesiAntiheiraY > yTetr4 && thesiAntiheiraY < yTetr4 + 200 && grabbing == false && grabbingKikl4 == false && grabbingTria4 == false && reachGoal4 == 0) {
			
			hasLetGo = false;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr4 = thesiAntiheiraX - 100;
		yTetr4 = thesiAntiheiraY - 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xKikl4 - 100 && thesiAntiheiraX < xKikl4 + 100 && thesiAntiheiraY > yKikl4 - 100 && thesiAntiheiraY < yKikl4 + 100 && grabbing == false && grabbingTria4 == false && reachGoal4 == 0) {
			
			hasLetGo = false;
grabbingKikl4 = true;
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xKikl4 = thesiAntiheiraX;
		yKikl4 = thesiAntiheiraY;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
		}  else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria4 - 100 && thesiAntiheiraX < xTria4 + 100 && thesiAntiheiraY > yTria4 - 200 && thesiAntiheiraY < yTria4 && grabbing == false && reachGoal4 == 0) {
			
			hasLetGo = false;
grabbingTria4 = true;
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria4 = thesiAntiheiraX;
		yTria4 = thesiAntiheiraY + 100;
		
  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingKikl4 = false;
			grabbingTria4 = false;
			}
		
	  else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingKikl4 = false;
		  grabbingTria4 = false;
	}
			
	

	
			// check goal 1
						
				if (xTetr4 > 260 && xTetr4 < 340 && yTetr4 > 120 && yTetr4 < 200 && reachGoal4_1 != 1) {
					goalColor4_1 = "#777";
			if (hasLetGo == true) {
		   reachGoal4_1 = 1;
				actualScore++;
xTetr4 = 580;
 yTetr4 = 810;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
				
				if (reachGoal4_2 == 1 && reachGoal4_3 == 1 && reachGoal4_4 == 1 && reachGoal4_5 == 1 && reachGoal4_6 == 1 && reachGoal4_7 == 1 && reachGoal4_8 == 1 && reachGoal4_9 == 1 && reachGoal4_10 == 1) {
					   reachGoal4 = 1;
				timerStarted = false;
				exerStarted = 0;
				finalGoalAch = 1;
				}
			}
		} 
					
				// check goal 2
	
		
	
						
				if (xTetr4 > 540 && xTetr4 < 620 && yTetr4 > 120 && yTetr4 < 200 && reachGoal4_2 != 1) {
					goalColor4_2 = "#777";
			if (hasLetGo == true) {
		   reachGoal4_2 = 1;
				actualScore++;
xTetr4 = 580;
 yTetr4 = 810;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
				
				if (reachGoal4_1 == 1 && reachGoal4_3 == 1 && reachGoal4_4 == 1 && reachGoal4_5 == 1 && reachGoal4_6 == 1 && reachGoal4_7 == 1 && reachGoal4_8 == 1 && reachGoal4_9 == 1 && reachGoal4_10 == 1) {
					   reachGoal4 = 1;
				timerStarted = false;
				exerStarted = 0;
				finalGoalAch = 1;
				}
			}
		} 
						
						// check goal 3
	
	
					
								if (xKikl4 > 920 && xKikl4 < 1000 && yKikl4 > 220 && yKikl4 < 300 && reachGoal4_3 != 1) {
					goalColor4_3 = "#777";
			if (hasLetGo == true) {
		   reachGoal4_3 = 1;
				actualScore++;
 xKikl4 = 960;
 yKikl4 = 910;		
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
				
				if (reachGoal4_2 == 1 && reachGoal4_1 == 1 && reachGoal4_4 == 1 && reachGoal4_5 == 1 && reachGoal4_6 == 1 && reachGoal4_7 == 1 && reachGoal4_8 == 1 && reachGoal4_9 == 1 && reachGoal4_10 == 1) {
					   reachGoal4 = 1;
				timerStarted = false;
				exerStarted = 0;
				finalGoalAch = 1;
				}
			}
		} 
						
						
									// check goal 4
	

					
								if (xTria4 > 1200 && xTria4 < 1280 && yTria4 > 320 && yTria4 < 400 && reachGoal4_4 != 1) {
					goalColor4_4 = "#777";
			if (hasLetGo == true) {
		   reachGoal4_4 = 1;
				actualScore++;
 xTria4 = 1240;
 yTria4 = 1010;		
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
				
				if (reachGoal4_2 == 1 && reachGoal4_3 == 1 && reachGoal4_1 == 1 && reachGoal4_5 == 1 && reachGoal4_6 == 1 && reachGoal4_7 == 1 && reachGoal4_8 == 1 && reachGoal4_9 == 1 && reachGoal4_10 == 1) {
					   reachGoal4 = 1;
				timerStarted = false;
				exerStarted = 0;
				finalGoalAch = 1;
				}
			}
		} 
						
						
						
								// check goal 5
	
	
					
								if (xKikl4 > 1480 && xKikl4 < 1560 && yKikl4 > 220 && yKikl4 < 300 && reachGoal4_5 != 1) {
					goalColor4_5 = "#777";
			if (hasLetGo == true) {
		   reachGoal4_5 = 1;
				actualScore++;
 xKikl4 = 960;
 yKikl4 = 910;		
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
				
				if (reachGoal4_2 == 1 && reachGoal4_3 == 1 && reachGoal4_4 == 1 && reachGoal4_1 == 1 && reachGoal4_6 == 1 && reachGoal4_7 == 1 && reachGoal4_8 == 1 && reachGoal4_9 == 1 && reachGoal4_10 == 1) {
					   reachGoal4 = 1;
				timerStarted = false;
				exerStarted = 0;
				finalGoalAch = 1;
				}
			}
		} 
						
						
							// check goal 6
	
	
	
						
				if (xTetr4 > 260 && xTetr4 < 340 && yTetr4 > 520 && yTetr4 < 600 && reachGoal4_6 != 1) {
					goalColor4_6 = "#777";
			if (hasLetGo == true) {
		   reachGoal4_6 = 1;
				actualScore++;
xTetr4 = 580;
 yTetr4 = 810;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
				
				if (reachGoal4_2 == 1 && reachGoal4_3 == 1 && reachGoal4_4 == 1 && reachGoal4_5 == 1 && reachGoal4_1 == 1 && reachGoal4_7 == 1 && reachGoal4_8 == 1 && reachGoal4_9 == 1 && reachGoal4_10 == 1) {
					   reachGoal4 = 1;
				timerStarted = false;
				exerStarted = 0;
				finalGoalAch = 1;
				}
			}
		} 
	
	
	
	
						// check goal 7
			
				if (xKikl4 > 640 && xKikl4 < 720 && yKikl4 > 620 && yKikl4 < 700 && reachGoal4_7 != 1) {
					goalColor4_7 = "#777";
			if (hasLetGo == true) {
		   reachGoal4_7 = 1;
				actualScore++;
xKikl4 = 960;
 yKikl4 = 910;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
				
				if (reachGoal4_2 == 1 && reachGoal4_3 == 1 && reachGoal4_4 == 1 && reachGoal4_5 == 1 && reachGoal4_6 == 1 && reachGoal4_1 == 1 && reachGoal4_8 == 1 && reachGoal4_9 == 1 && reachGoal4_10 == 1) {
					   reachGoal4 = 1;
				timerStarted = false;
				exerStarted = 0;
				finalGoalAch = 1;
				}
			}
		} 
	
	
	
	
	
						// check goal 8
	
	

						
				if (xTria4 > 920 && xTria4 < 1000 && yTria4 > 720 && yTria4 < 800 && reachGoal4_8 != 1) {
					goalColor4_8 = "#777";
			if (hasLetGo == true) {
		   reachGoal4_8 = 1;
				actualScore++;
 xTria4 = 1240;
 yTria4 = 1010;	
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
				
				if (reachGoal4_2 == 1 && reachGoal4_3 == 1 && reachGoal4_4 == 1 && reachGoal4_5 == 1 && reachGoal4_6 == 1 && reachGoal4_7 == 1 && reachGoal4_1 == 1 && reachGoal4_9 == 1 && reachGoal4_10 == 1) {
					   reachGoal4 = 1;
				timerStarted = false;
				exerStarted = 0;
				finalGoalAch = 1;
				}
			}
		} 
	
	
	
	
						// check goal 9
	
			
	
						
				if (xTetr4 > 1100 && xTetr4 < 1180 && yTetr4 > 520 && yTetr4 < 600 && reachGoal4_9 != 1) {
					goalColor4_9 = "#777";
			if (hasLetGo == true) {
		   reachGoal4_9 = 1;
				actualScore++;
xTetr4 = 580;
 yTetr4 = 810;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
				
				if (reachGoal4_2 == 1 && reachGoal4_3 == 1 && reachGoal4_4 == 1 && reachGoal4_5 == 1 && reachGoal4_6 == 1 && reachGoal4_7 == 1 && reachGoal4_8 == 1 && reachGoal4_1 == 1 && reachGoal4_10 == 1) {
					   reachGoal4 = 1;
				timerStarted = false;
				exerStarted = 0;
				finalGoalAch = 1;
				}
			}
		} 
	
	
	
	
						// check goal 10
	

	
						
				if (xKikl4 > 1480 && xKikl4 < 1560 && yKikl4 > 620 && yKikl4 < 700 && reachGoal4_10 != 1) {
					goalColor4_10 = "#777";
			if (hasLetGo == true) {
		   reachGoal4_10 = 1;
				actualScore++;
xKikl4 = 960;
 yKikl4 = 910;
				
				  	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintFourthRiddle(xTetr4, yTetr4, xKikl4, yKikl4, xTria4, yTria4, goalColor4_1, goalColor4_2, goalColor4_3, goalColor4_4, goalColor4_5, goalColor4_6, goalColor4_7, goalColor4_8, goalColor4_9, goalColor4_10, reachGoal4_1, reachGoal4_2, reachGoal4_3, reachGoal4_4, reachGoal4_5, reachGoal4_6, reachGoal4_7, reachGoal4_8, reachGoal4_9, reachGoal4_10);
				
				if (reachGoal4_2 == 1 && reachGoal4_3 == 1 && reachGoal4_4 == 1 && reachGoal4_5 == 1 && reachGoal4_6 == 1 && reachGoal4_7 == 1 && reachGoal4_8 == 1 && reachGoal4_9 == 1 && reachGoal4_1 == 1) {
					   reachGoal4 = 1;
				timerStarted = false;
				exerStarted = 0;
				finalGoalAch = 1;
				}
			}
		} 
			
					
					// wrong answers 
	
	
					
				if ((xKikl4 > 360 && xKikl4 < 440 && yKikl4 > 220 && yKikl4 < 300 && reachGoal4_1 != 1) || (xTria4 > 360 && xTria4 < 440 && yTria4 > 320 && yTria4 < 400 && reachGoal4_1 != 1)) {
					goalColor4_1 = "#777";
			if (hasLetGo == true) {
		   reachGoal4 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
					
					
					if ((xKikl4 > 640 && xKikl4 < 720 && yKikl4 > 220 && yKikl4 < 300 && reachGoal4_2 != 1) || (xTria4 > 640 && xTria4 < 720 && yTria4 > 320 && yTria4 < 400 && reachGoal4_2 != 1)) {
					goalColor4_2 = "#777";
			if (hasLetGo == true) {
		   reachGoal4 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
	
		
					
					
							if ((xTetr4 > 820 && xTetr4 < 900 && yTetr4 > 120 && yTetr4 < 200 && reachGoal4_3 != 1) || (xTria4 > 920 && xTria4 < 1000 && yTria4 > 320 && yTria4 < 400 && reachGoal4_3 != 1)) {
					goalColor4_3 = "#777";
			if (hasLetGo == true) {
		   reachGoal4 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
						
						
			
						
							if ((xKikl4 > 1220 && xKikl4 < 1300 && yKikl4 > 220 && yKikl4 < 300 && reachGoal4_4 != 1) || (xTetr4 > 1120 && xTetr4 < 1200 && yTetr4 > 120 && yTetr4 < 200 && reachGoal4_4 != 1)) {
					goalColor4_4 = "#777";
			if (hasLetGo == true) {
		   reachGoal4 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
					
	
			
					
					if ((xTetr4 > 1380 && xTetr4 < 1460 && yTetr4 > 120 && yTetr4 < 200 && reachGoal4_5 != 1) || (xTria4 > 1480 && xTria4 < 1560 && yTria4 > 320 && yTria4 < 400 && reachGoal4_5 != 1)) {
					goalColor4_5 = "#777";
			if (hasLetGo == true) {
		   reachGoal4 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
					
	
	
					
							if ((xKikl4 > 360 && xKikl4 < 440 && yKikl4 > 620 && yKikl4 < 700 && reachGoal4_6 != 1) || (xTria4 > 360 && xTria4 < 440 && yTria4 > 720 && yTria4 < 800 && reachGoal4_6 != 1)) {
					goalColor4_6 = "#777";
			if (hasLetGo == true) {
		   reachGoal4 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
	
	
			   
			   
			   
			   		if ((xTetr4 > 540 && xTetr4 < 620 && yTetr4 > 520 && yTetr4 < 600 && reachGoal4_7 != 1) || (xTria4 > 640 && xTria4 < 720 && yTria4 > 720 && yTria4 < 800 && reachGoal4_7 != 1)) {
					goalColor4_7 = "#777";
			if (hasLetGo == true) {
		   reachGoal4 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
	
		
			
					
							if ((xTetr4 > 820 && xTetr4 < 900 && yTetr4 > 520 && yTetr4 < 600 && reachGoal4_8 != 1) || (xKikl4 > 920 && xKikl4 < 1000 && yKikl4 > 620 && yKikl4 < 700 && reachGoal4_8 != 1)) {
					goalColor4_8 = "#777";
			if (hasLetGo == true) {
		   reachGoal4 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
						
						
			
						
							if ((xKikl4 > 1220 && xKikl4 < 1300 && yKikl4 > 620 && yKikl4 < 700 && reachGoal4_9 != 1) || (xTria4 > 1220 && xTria4 < 1300 && yTria4 > 720 && yTria4 < 800 && reachGoal4_9 != 1)) {
					goalColor4_9 = "#777";
			if (hasLetGo == true) {
		   reachGoal4 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
					
	
				
			
					
					if ((xTetr4 > 1380 && xTetr4 < 1460 && yTetr4 > 520 && yTetr4 < 600 && reachGoal4_10 != 1) || (xTria4 > 1480 && xTria4 < 1560 && yTria4 > 720 && yTria4 < 800 && reachGoal4_10 != 1)) {
					goalColor4_10 = "#777";
			if (hasLetGo == true) {
		   reachGoal4 = 2;
				timerStarted = false;
				exerStarted = 0;
				wrongAnswer();
			}
		} 
			
					// change color of goals when not currently in them 
	

			   
		
			   
			   	if (!(xTetr4 > 260 && xTetr4 < 340 && yTetr4 > 120 & yTetr4 < 200) && !(xKikl4 > 360 && xKikl4 < 440 && yKikl4 > 220 & yKikl4 < 300) && !(xTria4 > 360 && xTria4 < 440 && yTria4 > 320 & yTria4 < 400)) {
			goalColor4_1 = "#000";
		}
					
			if (!(xTetr4 > 540 && xTetr4 < 620 && yTetr4 > 120 & yTetr4 < 200) && !(xKikl4 > 640 && xKikl4 < 720 && yKikl4 > 220 & yKikl4 < 300) && !(xTria4 > 640 && xTria4 < 720 && yTria4 > 320 & yTria4 < 400)) {
			goalColor4_2 = "#000";
		}
					
						if (!(xTetr4 > 820 && xTetr4 < 900 && yTetr4 > 120 & yTetr4 < 200) && !(xKikl4 > 920 && xKikl4 < 1000 && yKikl4 > 220 & yKikl4 < 300) && !(xTria4 > 920 && xTria4 < 1000 && yTria4 > 320 & yTria4 < 400)) {
			goalColor4_3 = "#000";
		}
					
						if (!(xTetr4 > 1100 && xTetr4 < 1180 && yTetr4 > 120 & yTetr4 < 200) && !(xKikl4 > 1200 && xKikl4 < 1280 && yKikl4 > 220 & yKikl4 < 300) && !(xTria4 > 1200 && xTria4 < 1280 && yTria4 > 320 & yTria4 < 400)) {
			goalColor4_4 = "#000";
		}
	
	   	if (!(xTetr4 > 1380 && xTetr4 < 1460 && yTetr4 > 120 & yTetr4 < 200) && !(xKikl4 > 1480 && xKikl4 < 1560 && yKikl4 > 220 & yKikl4 < 300) && !(xTria4 > 1480 && xTria4 < 1560 && yTria4 > 320 & yTria4 < 400)) {
			goalColor4_5 = "#000";
		}
	
	

			   
			   	   	if (!(xTetr4 > 260 && xTetr4 < 340 && yTetr4 > 520 & yTetr4 < 600) && !(xKikl4 > 360 && xKikl4 < 440 && yKikl4 > 620 & yKikl4 < 700) && !(xTria4 > 360 && xTria4 < 440 && yTria4 > 720 & yTria4 < 800)) {
			goalColor4_6 = "#000";
		}
	
	
			if (!(xTetr4 > 540 && xTetr4 < 620 && yTetr4 > 520 & yTetr4 < 600) && !(xKikl4 > 640 && xKikl4 < 720 && yKikl4 > 620 & yKikl4 < 700) && !(xTria4 > 640 && xTria4 < 720 && yTria4 > 720 & yTria4 < 800)) {
			goalColor4_7 = "#000";
		}
					
						if (!(xTetr4 > 820 && xTetr4 < 900 && yTetr4 > 520 & yTetr4 < 600) && !(xKikl4 > 920 && xKikl4 < 1000 && yKikl4 > 620 & yKikl4 < 700) && !(xTria4 > 920 && xTria4 < 1000 && yTria4 > 720 & yTria4 < 800)) {
			goalColor4_8 = "#000";
		}
					
						if (!(xTetr4 > 1100 && xTetr4 < 1180 && yTetr4 > 520 & yTetr4 < 600) && !(xKikl4 > 1200 && xKikl4 < 1280 && yKikl4 > 620 & yKikl4 < 700) && !(xTria4 > 1200 && xTria4 < 1280 && yTria4 > 720 & yTria4 < 800)) {
			goalColor4_9 = "#000";
		}
	
	 	if (!(xTetr4 > 1380 && xTetr4 < 1460 && yTetr4 > 520 & yTetr4 < 600) && !(xKikl4 > 1480 && xKikl4 < 1560 && yKikl4 > 620 & yKikl4 < 700) && !(xTria4 > 1480 && xTria4 < 1560 && yTria4 > 720 & yTria4 < 800)) {
			goalColor4_10 = "#000";
		} 
	
		}
				

		
	
	
		
				
				
				
				
				
				
				
				
				
		// CHECK IF FINISHED
		
		if (finalGoalAch > 0) {
		
  localStorage.setItem("checkTheDropLeftScore", actualScore);
			
					exerStarted = 0;
			 clearInterval(countdown);

			   		        Swal.fire({
title: 'Congratulations! You completed the exercise! \n Your score is: ' + actualScore,
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

	   <div id="timeArea">Time: <div id="timeLeft">01:00</div></div>
	  
	  <div id="introMessage">
		  <h1>Are you ready?</h1>
		  <button id="startButton">Start</button>
	  </div>  

		  <button id="quitButton">Quit</button>
	  
	    <div id="secondsCountdownArea">3</div> 
	  
  </body>
</html>