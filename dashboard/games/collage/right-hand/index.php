<?php include '../../../../games-head.php';?>
	
<title>Collage - Right Hand</title>
<link rel="stylesheet" href="dim-custom.css">

       <script type="module">
	
var c = document.getElementById("videoCanvas");
var ctx = c.getContext("2d");
		   
		   // about puzzle 1
		   
	var xTetr1_1 = 860;
	var yTetr1_1 = 140;		   
	var xTetr1_2 = 860;
	var yTetr1_2 = 740;	   
	var cTetr1_1 = "#f00";
	var cTetr1_2 = "#f00";	  
	var firstGoalAch = false;
	var firstGoalAch1 = false;
    var firstGoalAch2 = false;
	var heightPuzzle1 = 0;

   function paintFirstPuzzle(xS1, yS1, cS1, xS2, yS2, cS2, h) {
		
ctx.beginPath();	
ctx.rect(xS1, yS1 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = cS1;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	   
ctx.beginPath();	
ctx.rect(xS2, yS2 + h, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = cS2;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	   
ctx.beginPath();	
ctx.rect(755, 435 + h, 410, 210);
ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();

   }
		   
   paintFirstPuzzle(xTetr1_1, yTetr1_1, cTetr1_1, xTetr1_2, yTetr1_2, cTetr1_2, heightPuzzle1);	   
		   
		    // about puzzle 2
		   
	var xTetr2_1 = 380;
	var yTetr2_1 = 440;		   
	var xTria2_1 = 1440;
	var yTria2_1 = 370;	   
	var xTria2_2 = 1440;
	var yTria2_2 = 710;
		   
	var cTetr2_1 = "#f00";
	var cTria2_1 = "#f00";	
	var cTria2_2 = "#f00";
	var secondGoalAch = false;
	var secondGoalAch1 = false;
    var secondGoalAch2 = false;
	var secondGoalAch3 = false;
	var heightPuzzle2 = 0;

   function paintSecondPuzzle(xS1, yS1, cS1, xT1, yT1, cT1, xT2, yT2, cT2, h) {
		
ctx.beginPath();	
ctx.rect(xS1, yS1 + h - 1080, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = cS1;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
	   
let triaheight1 = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(xT1 - 100, yT1 + h - 1080);
ctx.lineTo(xT1 + 100, yT1 + h - 1080);
ctx.lineTo(xT1, yT1 + h - 1080 - triaheight1);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = cT1;
ctx.fill();
ctx.closePath();
	   
let triaheight2 = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(xT2 - 100, yT2 + h - 1080);
ctx.lineTo(xT2 + 100, yT2 + h - 1080);
ctx.lineTo(xT2, yT2 + h - 1080 + triaheight2);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = cT2;
ctx.fill();
ctx.closePath();	   
	   
 ctx.beginPath();
    ctx.moveTo(855, 440 + h - 1080);
    ctx.lineTo(855, 640 + h - 1080);
    ctx.lineTo(960, 845 + h - 1080);
	ctx.lineTo(1065, 640 + h - 1080);
	ctx.lineTo(1065, 440 + h - 1080);
	ctx.lineTo(960, 235 + h - 1080);
	ctx.lineTo(855, 440 + h - 1080);
    ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();

   }
		 
		    // about puzzle 3
		   
	var xTetr3_1 = 290;
	var yTetr3_1 = 170;		   
	var xTetr3_2 = 1555;
	var yTetr3_2 = 540;	   
	var xTria3_1 = 365;
	var yTria3_1 = 910; 

	var cTetr3_1 = "#f00";
	var cTetr3_2 = "#f00";	
	var cTria3_1 = "#f00";
	var thirdGoalAch = false;
	var thirdGoalAch1 = false;
    var thirdGoalAch2 = false;
	var thirdGoalAch3 = false;
	var heightPuzzle3 = 0;		   
		   
		     function paintThirdPuzzle(xS1, yS1, cS1, xS2, yS2, cS2, xT1, yT1, cT1, h) {
				 
				 ctx.beginPath();	
ctx.rect(xS1, yS1 + h - 1080, 150, 300);
ctx.lineWidth = 10;
ctx.fillStyle = cS1;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				 
				 
 ctx.beginPath();
    ctx.moveTo(xS2 - 225, yS2 - 200 + h - 1080);
    ctx.lineTo(xS2 - 225, yS2 + 200 + h - 1080);
    ctx.lineTo(xS2 - 75, yS2 + 200 + h - 1080);
	ctx.lineTo(xS2 - 75, yS2 - 100 + h - 1080);
	ctx.lineTo(xS2 + 75, yS2 - 100 + h - 1080);
	ctx.lineTo(xS2 + 75, yS2 + 200 + h - 1080);
	ctx.lineTo(xS2 + 225, yS2 + 200 + h - 1080);
	ctx.lineTo(xS2 + 225, yS2 - 200 + h - 1080);
	ctx.lineTo(xS2 - 225, yS2 - 200 + h - 1080);
    ctx.lineWidth = 10;
ctx.fillStyle = cS2;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				 
				 
let triaheight1 = 230 * Math.cos(Math.PI / 6);
ctx.beginPath();
ctx.moveTo(xT1 - 225, yT1 + h - 1080);
ctx.lineTo(xT1 + 225, yT1 + h - 1080);
ctx.lineTo(xT1, yT1 + h - 1080 - triaheight1);
ctx.lineWidth = 10;
ctx.globalAlpha = 0.5;
ctx.fillStyle = cT1;
ctx.fill();
ctx.closePath();
				 
 ctx.beginPath();
    ctx.moveTo(730, 435 + h - 1080);
	ctx.lineTo(730, 845 + h - 1080);			 
	ctx.lineTo(1190, 845 + h - 1080);			 
    ctx.lineTo(1190, 435 + h - 1080);
    ctx.lineTo(960, 235 + h - 1080);
	ctx.lineTo(730, 435 + h - 1080);
    ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
				 
			 }
		   
		   
		   	    // about puzzle 4
		   
	var xTetr4_1 = 1490;
	var yTetr4_1 = 490;		   
	var xTetr4_2 = 330;
	var yTetr4_2 = 270; 
	var xTetr4_3 = 330;
	var yTetr4_3 = 810;

	var cTetr4_1 = "#f00";
	var cTetr4_2 = "#f00";	
	var cTetr4_3 = "#f00";
	var fourthGoalAch = false;
	var fourthGoalAch1 = false;
    var fourthGoalAch2 = false;
	var fourthGoalAch3 = false;
	var heightPuzzle4 = 0;	
		   
		   	     function paintFourthPuzzle(xS1, yS1, cS1, xS2, yS2, cS2, xS3, yS3, cS3, h) {
				 
				 ctx.beginPath();	
ctx.rect(xS1, yS1 + h - 1080, 200, 100);
ctx.lineWidth = 10;
ctx.fillStyle = cS1;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				 
				 
 ctx.beginPath();
    ctx.moveTo(xS2 - 200, yS2 - 150 + h - 1080);
    ctx.lineTo(xS2 - 200, yS2 + 150 + h - 1080);
    ctx.lineTo(xS2, yS2 + 150 + h - 1080);
	ctx.lineTo(xS2, yS2 - 50 + h - 1080);
	ctx.lineTo(xS2 + 200, yS2 - 50 + h - 1080);
	ctx.lineTo(xS2 + 200, yS2 - 150 + h - 1080);
	ctx.lineTo(xS2 - 200, yS2 - 150 + h - 1080);
    ctx.lineWidth = 10;
ctx.fillStyle = cS2;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				 

		 ctx.beginPath();
    ctx.moveTo(xS3 - 200, yS3 + 150 + h - 1080);
    ctx.lineTo(xS3 - 200, yS3 + 50 + h - 1080);
    ctx.lineTo(xS3, yS3 + 50 + h - 1080);
	ctx.lineTo(xS3, yS3 - 150 + h - 1080);
	ctx.lineTo(xS3 + 200, yS3 - 150 + h - 1080);
	ctx.lineTo(xS3 + 200, yS3 + 150 + h - 1080);
	ctx.lineTo(xS3 - 200, yS3 + 150 + h - 1080);
    ctx.lineWidth = 10;
ctx.fillStyle = cS3;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();

				 
 ctx.beginPath();
    ctx.moveTo(660, 390 + h - 1080);
	ctx.lineTo(660, 690 + h - 1080);			 
	ctx.lineTo(1260, 690 + h - 1080);			 
    ctx.lineTo(1260, 390 + h - 1080);
    ctx.lineTo(660, 390 + h - 1080);
    ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
				 
			 }
		   
		   
		   
		     // about puzzle 5
		
	var xTetr5_1 = 1527.5;
	var yTetr5_1 = 240;
	var xTetr5_2 = 267.5;
	var yTetr5_2 = 170;		   
	var xTetr5_3 = 267.5;
	var yTetr5_3 = 710; 

	var cTetr5_1 = "#f00";
	var cTetr5_2 = "#f00";	
	var cTetr5_3 = "#f00";
	var fifthGoalAch = false;
	var fifthGoalAch1 = false;
    var fifthGoalAch2 = false;
	var fifthGoalAch3 = false;
	var heightPuzzle5 = 0;	
		   
		   	     function paintFifthPuzzle(xS1, yS1, cS1, xS2, yS2, cS2, xS3, yS3, cS3, h) {
				 
	 ctx.beginPath();	
ctx.rect(xS1, yS1 + h - 1080, 50, 600);
ctx.lineWidth = 10;
ctx.fillStyle = cS1;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				 
				 
	 ctx.beginPath();	
ctx.rect(xS2, yS2 + h - 1080, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = cS2;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
					 
	ctx.beginPath();	
ctx.rect(xS3, yS3 + h - 1080, 200, 200);
ctx.lineWidth = 10;
ctx.fillStyle = cS3;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();

				 
 ctx.beginPath();
    ctx.moveTo(935, 240 + h - 1080);
	ctx.lineTo(935, 640 + h - 1080);			 
	ctx.lineTo(735, 640 + h - 1080);			 
    ctx.lineTo(735, 840 + h - 1080);
    ctx.lineTo(985, 840 + h - 1080);
	ctx.lineTo(985, 440 + h - 1080);
	ctx.lineTo(1185, 440 + h - 1080);
	ctx.lineTo(1185, 240 + h - 1080);
	ctx.lineTo(930, 240 + h - 1080);
    ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
				 
			 }
		   
		   		     // about puzzle 6
		
	var xTria6_1 = 360;
	var yTria6_1 = 540;
	var xTetr6_2 = 1560;
	var yTetr6_2 = 270;		   
	var xTetr6_3 = 1560;
	var yTetr6_3 = 810; 

	var cTria6_1 = "#f00";
	var cTetr6_2 = "#f00";	
	var cTetr6_3 = "#f00";
	var sixthGoalAch = false;
	var sixthGoalAch1 = false;
    var sixthGoalAch2 = false;
	var sixthGoalAch3 = false;
	var heightPuzzle6 = 0;	
		   
		   	     function paintSixthPuzzle(xT1, yT1, cT1, xS2, yS2, cS2, xS3, yS3, cS3, h) {
				 
	 ctx.beginPath();	
    ctx.moveTo(xT1, yT1 + 100 + h - 1080);
	ctx.lineTo(xT1 + 100, yT1 + 100 + h - 1080);
	ctx.lineTo(xT1, yT1 - 100 + h - 1080);
	ctx.lineTo(xT1 - 100, yT1 + 100 + h - 1080);
	ctx.lineTo(xT1, yT1 + 100 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cT1;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				 
 ctx.beginPath();	
    ctx.moveTo(xS2 + 20, yS2 + 140 + h - 1080);
	ctx.lineTo(xS2 + 120, yS2 - 60 + h - 1080);
	ctx.lineTo(xS2 - 20, yS2 - 140 + h - 1080);
	ctx.lineTo(xS2 - 120, yS2 + 60 + h - 1080);
	ctx.lineTo(xS2 + 20, yS2 + 140 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS2;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();	
					 
 ctx.beginPath();	
    ctx.moveTo(xS3 - 20, yS3 + 140 + h - 1080);
	ctx.lineTo(xS3 - 120, yS3 - 60 + h - 1080);
	ctx.lineTo(xS3 + 20, yS3 - 140 + h - 1080);
	ctx.lineTo(xS3 + 120, yS3 + 60 + h - 1080);
	ctx.lineTo(xS3 - 20, yS3 + 140 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS3;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();

				 
 ctx.beginPath();
    ctx.moveTo(960, 440 + h - 1080);
	ctx.lineTo(820, 360 + h - 1080);			 
	ctx.lineTo(720, 560 + h - 1080);			 
    ctx.lineTo(860, 640 + h - 1080);
    ctx.lineTo(1060, 640 + h - 1080);
	ctx.lineTo(1200, 560 + h - 1080);
	ctx.lineTo(1100, 360 + h - 1080);
	ctx.lineTo(955, 440 + h - 1080);
    ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
				 
			 }
		   
		    // about puzzle 7
		
	var xTetr7_1 = 390;
	var yTetr7_1 = 450;
	var xTetr7_2 = 1530;
	var yTetr7_2 = 450;		   
	var xTetr7_3 = 390;
	var yTetr7_3 = 790;
	var xTetr7_4 = 1530;
	var yTetr7_4 = 790;

	var cTetr7_1 = "#f00";
	var cTetr7_2 = "#f00";	
	var cTetr7_3 = "#f00";
	var cTetr7_4 = "#f00";
	var seventhGoalAch = false;
	var seventhGoalAch1 = false;
    var seventhGoalAch2 = false;
	var seventhGoalAch3 = false;
	var seventhGoalAch4 = false;
	var heightPuzzle7 = 0;	
		   
		   	     function paintSeventhPuzzle(xS1, yS1, cS1, xS2, yS2, cS2, xS3, yS3, cS3, xS4, yS4, cS4, h) {
				 
	 ctx.beginPath();	
    ctx.moveTo(xS1 - 40, yS1 + h - 1080);
	ctx.lineTo(xS1 - 40, yS1 + 250 + h - 1080);
	ctx.lineTo(xS1 + 40, yS1 + 250 + h - 1080);
	ctx.lineTo(xS1 + 40, yS1 - 250 + h - 1080);
	ctx.lineTo(xS1 - 40, yS1 - 250 + h - 1080);
		ctx.lineTo(xS1 - 40, yS1 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS1;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				 
	 ctx.beginPath();	
    ctx.moveTo(xS2 - 40, yS2 + h - 1080);
	ctx.lineTo(xS2 - 40, yS2 + 250 + h - 1080);
	ctx.lineTo(xS2 + 40, yS2 + 250 + h - 1080);
	ctx.lineTo(xS2 + 40, yS2 - 250 + h - 1080);
	ctx.lineTo(xS2 - 40, yS2 - 250 + h - 1080);
		ctx.lineTo(xS2 - 40, yS2 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS2;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();	
					 
 ctx.beginPath();	
    ctx.moveTo(xS3 - 100, yS3 + h - 1080);
	ctx.lineTo(xS3 - 100, yS3 + 40 + h - 1080);
	ctx.lineTo(xS3 + 100, yS3 + 40 + h - 1080);
	ctx.lineTo(xS3 + 100, yS3 - 40 + h - 1080);
	ctx.lineTo(xS3 - 100, yS3 - 40 + h - 1080);
	ctx.lineTo(xS3 - 100, yS3 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS3;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
					 
 ctx.beginPath();	
    ctx.moveTo(xS4 - 100, yS4 + h - 1080);
	ctx.lineTo(xS4 - 100, yS4 + 40 + h - 1080);
	ctx.lineTo(xS4 + 100, yS4 + 40 + h - 1080);
	ctx.lineTo(xS4 + 100, yS4 - 40 + h - 1080);
	ctx.lineTo(xS4 - 100, yS4 - 40 + h - 1080);
	ctx.lineTo(xS4 - 100, yS4 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS4;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();

				 
 ctx.beginPath();
    ctx.moveTo(780, 290 + h - 1080);
	ctx.lineTo(780, 790 + h - 1080);			 
	ctx.lineTo(860, 790 + h - 1080);			 
    ctx.lineTo(860, 670 + h - 1080);
    ctx.lineTo(1060, 670 + h - 1080);
	ctx.lineTo(1060, 790 + h - 1080);
	ctx.lineTo(1140, 790 + h - 1080);
	ctx.lineTo(1140, 290 + h - 1080);
	ctx.lineTo(1060, 290 + h - 1080);
	ctx.lineTo(1060, 410 + h - 1080);
	ctx.lineTo(860, 410 + h - 1080);
	ctx.lineTo(860, 290 + h - 1080);
	ctx.lineTo(775, 290 + h - 1080);
    ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
					 
 ctx.beginPath();
    ctx.moveTo(860, 490 + h - 1080);
	ctx.lineTo(860, 590 + h - 1080);			 
	ctx.lineTo(1060, 590 + h - 1080);			 
    ctx.lineTo(1060, 490 + h - 1080);
    ctx.lineTo(855, 490 + h - 1080);
    ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
				 
			 }
		   
		   
		      // about puzzle 8
		
	var xTria8_1 = 660;
	var yTria8_1 = 860;
	var xTria8_2 = 1260;
	var yTria8_2 = 860;		   
	var xTria8_3 = 960;
	var yTria8_3 = 220;

	var cTria8_1 = "#f00";
	var cTria8_2 = "#f00";	
	var cTria8_3 = "#f00";
	var eighthGoalAch = false;
	var eighthGoalAch1 = false;
    var eighthGoalAch2 = false;
	var eighthGoalAch3 = false;
	var heightPuzzle8 = 0;	
		   
		   	     function paintEighthPuzzle(xT1, yT1, cT1, xT2, yT2, cT2, xT3, yT3, cT3, h) {
				 
	 ctx.beginPath();	
    ctx.moveTo(xT1 - 100, yT1 + 100 + h - 1080);
	ctx.lineTo(xT1 + 100, yT1 + 100 + h - 1080);
	ctx.lineTo(xT1, yT1 - 100 + h - 1080);
	ctx.lineTo(xT1 - 100, yT1 + 100 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cT1;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				 
	 ctx.beginPath();	
    ctx.moveTo(xT2 - 100, yT2 + 100 + h - 1080);
	ctx.lineTo(xT2 + 100, yT2 + 100 + h - 1080);
	ctx.lineTo(xT2, yT2 - 100 + h - 1080);
	ctx.lineTo(xT2 - 100, yT2 + 100 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cT2;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();

	 ctx.beginPath();	
    ctx.moveTo(xT3 - 100, yT3 - 100 + h - 1080);
	ctx.lineTo(xT3 + 100, yT3 - 100 + h - 1080);
	ctx.lineTo(xT3, yT3 + 100 + h - 1080);
	ctx.lineTo(xT3 - 100, yT3 - 100 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cT3;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
					 
 ctx.beginPath();
    ctx.moveTo(855, 440 + h - 1080);
	ctx.lineTo(1060, 440 + h - 1080);			 
	ctx.lineTo(1160, 640 + h - 1080);			 
    ctx.lineTo(760, 640 + h - 1080);
    ctx.lineTo(860, 440 + h - 1080);
    ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
				 
			 }
		   
		   
		    // about puzzle 9
		
	var xTetr9_1 = 1160;
	var yTetr9_1 = 170;
	var xTetr9_2 = 760;
	var yTetr9_2 = 170;		   
	var xTria9_3 = 960;
	var yTria9_3 = 910;

	var cTetr9_1 = "#f00";
	var cTetr9_2 = "#f00";	
	var cTria9_3 = "#f00";
	var ninthGoalAch = false;
	var ninthGoalAch1 = false;
    var ninthGoalAch2 = false;
	var ninthGoalAch3 = false;
	var heightPuzzle9 = 0;	
		   
		   	     function paintNinthPuzzle(xS1, yS1, cS1, xS2, yS2, cS2, xT3, yT3, cT3, h) {
				 
	 ctx.beginPath();	
    ctx.moveTo(xS1, yS1 + 100 + h - 1080);
	ctx.lineTo(xS1 - 100, yS1 - 100 + h - 1080);
	ctx.lineTo(xS1 + 100, yS1 - 100 + h - 1080);
	ctx.lineTo(xS1 + 100, yS1 + 100 + h - 1080);
	ctx.lineTo(xS1, yS1 + 100 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS1;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				 
	 ctx.beginPath();	
    ctx.moveTo(xS2, yS2 + 100 + h - 1080);
	ctx.lineTo(xS2 + 100, yS2 - 100 + h - 1080);
	ctx.lineTo(xS2 - 100, yS2 - 100 + h - 1080);
	ctx.lineTo(xS2 +- 100, yS2 + 100 + h - 1080);
	ctx.lineTo(xS2, yS2 + 100 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS2;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();	

	 ctx.beginPath();	
    ctx.moveTo(xT3 + 100, yT3 + 100 + h - 1080);
	ctx.lineTo(xT3 + 100, yT3 - 100 + h - 1080);
	ctx.lineTo(xT3 - 100, yT3 + 100 + h - 1080);
	ctx.lineTo(xT3 + 100, yT3 + 100 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cT3;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
					 
 ctx.beginPath();
    ctx.moveTo(960, 740 + h - 1080);
	ctx.lineTo(860, 740 + h - 1080);			 
	ctx.lineTo(760, 540 + h - 1080);			 
    ctx.lineTo(960, 340 + h - 1080);
    ctx.lineTo(960, 540 + h - 1080);
	ctx.lineTo(1160, 540 + h - 1080);
	ctx.lineTo(1060, 740 + h - 1080);
	ctx.lineTo(960, 740 + h - 1080);
    ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
				 
			 } 
		   
		  	    // about puzzle 10
		
	var xTetr10_1 = 355;
	var yTetr10_1 = 270;
	var xTetr10_2 = 355;
	var yTetr10_2 = 810;		   
	var xTetr10_3 = 1565;
	var yTetr10_3 = 540;

	var cTetr10_1 = "#f00";
	var cTetr10_2 = "#f00";	
	var cTetr10_3 = "#f00";
	var tenthGoalAch = false;
	var tenthGoalAch1 = false;
    var tenthGoalAch2 = false;
	var tenthGoalAch3 = false;
	var heightPuzzle10 = 0;	
		   
		   	     function paintTenthPuzzle(xS1, yS1, cS1, xS2, yS2, cS2, xS3, yS3, cS3, h) {
				 
	 ctx.beginPath();	
    ctx.moveTo(xS1 - 100, yS1 + h - 1080);
	ctx.lineTo(xS1 - 100, yS1 + 100 + h - 1080);
	ctx.lineTo(xS1, yS1 + 100 + h - 1080);
	ctx.lineTo(xS1, yS1 + h - 1080);
	ctx.lineTo(xS1 + 100, yS1 + h - 1080);
	ctx.lineTo(xS1 + 100, yS1 - 100 + h - 1080);
	ctx.lineTo(xS1 - 100, yS1 - 100 + h - 1080);
	ctx.lineTo(xS1 - 100, yS1 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS1;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
				 
	 ctx.beginPath();	
    ctx.moveTo(xS2 + 100, yS2 + h - 1080);
	ctx.lineTo(xS2 + 100, yS2 - 100 + h - 1080);
	ctx.lineTo(xS2, yS2 - 100 + h - 1080);
	ctx.lineTo(xS2, yS2 + h - 1080);
	ctx.lineTo(xS2 - 100, yS2 + h - 1080);
	ctx.lineTo(xS2 - 100, yS2 + 100 + h - 1080);
	ctx.lineTo(xS2 + 100, yS2 + 100 + h - 1080);
	ctx.lineTo(xS2 + 100, yS2 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS2;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();	

	 ctx.beginPath();	
    ctx.moveTo(xS3 - 50, yS3 + h - 1080);
	ctx.lineTo(xS3 - 50, yS3 + 150 + h - 1080);
	ctx.lineTo(xS3 + 50, yS3 + 150 + h - 1080);
	ctx.lineTo(xS3 + 50, yS3 - 150 + h - 1080);
	ctx.lineTo(xS3 - 50, yS3 - 150 + h - 1080);
	ctx.lineTo(xS3 - 50, yS3 + h - 1080);
ctx.lineWidth = 10;
ctx.fillStyle = cS3;
ctx.globalAlpha = 0.5;
ctx.fill();
ctx.closePath();
					 
 ctx.beginPath();
    ctx.moveTo(960, 390 + h - 1080);
	ctx.lineTo(910, 390 + h - 1080);			 
    ctx.lineTo(910, 440 + h - 1080);
	ctx.lineTo(710, 440 + h - 1080);
	ctx.lineTo(710, 640 + h - 1080);
	ctx.lineTo(810, 640 + h - 1080);
	ctx.lineTo(810, 540 + h - 1080);
	ctx.lineTo(910, 540 + h - 1080);
	ctx.lineTo(910, 690 + h - 1080);
	ctx.lineTo(1010, 690 + h - 1080);
	ctx.lineTo(1010, 640 + h - 1080);
	ctx.lineTo(1210, 640 + h - 1080);
	ctx.lineTo(1210, 440 + h - 1080);
	ctx.lineTo(1110, 440 + h - 1080);
	ctx.lineTo(1110, 540 + h - 1080);
	ctx.lineTo(1010, 540 + h - 1080);
	ctx.lineTo(1010, 390 + h - 1080);
	ctx.lineTo(960, 390 + h - 1080);
    ctx.lineWidth = 10;
ctx.strokeStyle = "#000";
ctx.globalAlpha = 1;
ctx.stroke();
ctx.closePath();
				 
			 } 
		   

		   
/* timer START */

var exerStarted = 0;
var timerStarted = false;
var seconds = 60;
var score = 0;
	
var countdown = setInterval(function() {
	if (timerStarted == true) {
  if (seconds <= 0) {
	   clearInterval(countdown);
	  localStorage.setItem("collageRightScore", score);
	    exerStarted = 0;
  document.getElementById("timeLeft").innerHTML = "00:00";
	  
	  		        Swal.fire({
title: 'The time is up! \n Your score is: ' + score,
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
var grabbingTetr1_2 = false;
var grabbingTria2_1 = false;
var grabbingTria2_2 = false;
var grabbingTetr3_2 = false;
var grabbingTria3_1 = false;
var grabbingTetr4_2 = false;
var grabbingTetr4_3 = false;
var grabbingTetr5_2 = false;
var grabbingTetr5_3 = false;
var grabbingTetr6_2 = false;
var grabbingTetr6_3 = false;
var grabbingTetr7_2 = false;
var grabbingTetr7_3 = false;
var grabbingTetr7_4 = false;
var grabbingTria8_2 = false;
var grabbingTria8_3 = false;
var grabbingTetr9_2 = false;
var grabbingTria9_3 = false;
var grabbingTetr10_2 = false;
var grabbingTetr10_3 = false;
		   
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
				
	// first puzzle
				
if (firstGoalAch == false) {
	 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr1_1 && thesiAntiheiraX < xTetr1_1 + 200
		   && thesiAntiheiraY > yTetr1_1 && thesiAntiheiraY < yTetr1_1 + 200 && grabbing == false && grabbingTetr1_2 == false && firstGoalAch1 == false) {
			
			hasLetGo = false; 

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr1_1 = thesiAntiheiraX - 100;
		yTetr1_1 = thesiAntiheiraY - 100;
		
		} else  if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr1_2 && thesiAntiheiraX < xTetr1_2 + 200 && thesiAntiheiraY > yTetr1_2 && thesiAntiheiraY < yTetr1_2 + 200 && grabbing == false && firstGoalAch2 == false) {
			
			hasLetGo = false; 
grabbingTetr1_2 == true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr1_2 = thesiAntiheiraX - 100;
		yTetr1_2 = thesiAntiheiraY - 100;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr1_2 = false;
			} else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingTetr1_2 = false;			
	}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	 paintFirstPuzzle(xTetr1_1, yTetr1_1, cTetr1_1, xTetr1_2, yTetr1_2, cTetr1_2, heightPuzzle1);
	
	// check if goal 1 achieved
	
		if ((((xTetr1_1 > 735 && xTetr1_1 < 775 && yTetr1_1 > 415 && yTetr1_1 < 455) && !(xTetr1_2 > 735 && xTetr1_2 < 775 && yTetr1_2 > 415 && yTetr1_2 < 455)) ||
((xTetr1_1 > 935 && xTetr1_1 < 975 && yTetr1_1 > 415 && yTetr1_1 < 455) && !(xTetr1_2 > 935 && xTetr1_2 < 975 && yTetr1_2 > 415 && yTetr1_2 < 455))) && firstGoalAch1 == false) {
					cTetr1_1 = "#0f0";
			if (hasLetGo == true) {
				firstGoalAch1 = true;
				
					if (xTetr1_1 < 855) {
					xTetr1_1 = 760;
                    yTetr1_1 = 440;
					} else {
					xTetr1_1 = 960;
                    yTetr1_1 = 440;	
					}
				
				if (firstGoalAch2 == true) {
					firstGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToSecondPuzzle();
				}
			} 
		} else if (((!(xTetr1_1 > 735 && xTetr1_1 < 775 && yTetr1_1 > 415 && yTetr1_1 < 455) && (xTetr1_2 > 735 && xTetr1_2 < 775 && yTetr1_2 > 415 && yTetr1_2 < 455)) ||
(!(xTetr1_1 > 935 && xTetr1_1 < 975 && yTetr1_1 > 415 && yTetr1_1 < 455) && (xTetr1_2 > 935 && xTetr1_2 < 975 && yTetr1_2 > 415 && yTetr1_2 < 455))) && firstGoalAch2 == false) {
					cTetr1_2 = "#0f0";
			if (hasLetGo == true) {
				firstGoalAch2 = true;
				
					if (xTetr1_2 < 855) {
					xTetr1_2 = 760;
                    yTetr1_2 = 440;
					} else {
					xTetr1_2 = 960;
                    yTetr1_2 = 440;	
					}
				
				if (firstGoalAch1 == true) {
					firstGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToSecondPuzzle();
				}
			} 
		} else if (firstGoalAch1 == false || firstGoalAch2 == false) {
				 if (firstGoalAch1 == false) {
				cTetr1_1 = "#f00";
			} 
		 if (firstGoalAch2 == false) {
				cTetr1_2 = "#f00";
			} 
			}  
	
}
	// second puzzle	
			
				else if (secondGoalAch == false) {
					
					
					
					
					 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr2_1 && thesiAntiheiraX < xTetr2_1 + 200 && thesiAntiheiraY > yTetr2_1 && thesiAntiheiraY < yTetr2_1 + 200 && grabbing == false && grabbingTria2_1 == false && grabbingTria2_2 == false && secondGoalAch1 == false) {
			
			hasLetGo = false; 

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr2_1 = thesiAntiheiraX - 100;
		yTetr2_1 = thesiAntiheiraY - 100;
		
		} else  if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria2_1 - 100 && thesiAntiheiraX < xTria2_1 + 100 && thesiAntiheiraY > yTria2_1 - 200 && thesiAntiheiraY < yTria2_1 && grabbing == false && grabbingTria2_2 == false && secondGoalAch2 == false) {
			
			hasLetGo = false; 
grabbingTria2_1 == true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria2_1 = thesiAntiheiraX;
		yTria2_1 = thesiAntiheiraY + 100;
		
		} else  if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria2_2 - 100 && thesiAntiheiraX < xTria2_2 + 100 && thesiAntiheiraY > yTria2_2 && thesiAntiheiraY < yTria2_2 + 200 && grabbing == false && secondGoalAch3 == false) {
			
			hasLetGo = false; 
grabbingTria2_2 == true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria2_2 = thesiAntiheiraX;
		yTria2_2 = thesiAntiheiraY - 100;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTria2_1 = false;
			grabbingTria2_2 = false;
			} else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingTria2_1 = false;
			grabbingTria2_2 = false;		
	}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintSecondPuzzle(xTetr2_1, yTetr2_1, cTetr2_1, xTria2_1, yTria2_1, cTria2_1, xTria2_2, yTria2_2, cTria2_2, heightPuzzle2);
	
	// check if goal 2 achieved
	
					
		if ((xTetr2_1 > 825 && xTetr2_1 < 885 && yTetr2_1 > 410 && yTetr2_1 < 470) && secondGoalAch1 == false) {
					cTetr2_1 = "#0f0";
			if (hasLetGo == true) {
				secondGoalAch1 = true;
				
					xTetr2_1 = 860;
                    yTetr2_1 = 440;
					
				if (secondGoalAch2 == true && secondGoalAch3 == true) {
					secondGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToThirdPuzzle();
				}
			} 
		} else if ((xTria2_1 > 930 && xTria2_1 < 990 && yTria2_1 > 410 && yTria2_1 < 470) && secondGoalAch2 == false) {
					cTria2_1 = "#0f0";
			if (hasLetGo == true) {
				secondGoalAch2 = true;
				
					xTria2_1 = 960;
                    yTria2_1 = 440;	
				
				if (secondGoalAch1 == true && secondGoalAch3 == true) {
					secondGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToThirdPuzzle();
				}
			} 
		} else if ((xTria2_2 > 930 && xTria2_2 < 990 && yTria2_2 > 610 && yTria2_2 < 670) && secondGoalAch3 == false) {
					cTria2_2 = "#0f0";
			if (hasLetGo == true) {
				secondGoalAch3 = true;
				
					xTria2_2 = 960;
                    yTria2_2 = 640;	
				
				if (secondGoalAch1 == true && secondGoalAch2 == true) {
					secondGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToThirdPuzzle();
				}
			} 
		}  else if (secondGoalAch1 == false || secondGoalAch2 == false || secondGoalAch3 == false) {
				 if (secondGoalAch1 == false) {
				cTetr2_1 = "#f00";
			} 
		  if (secondGoalAch2 == false) {
				cTria2_1 = "#f00";
			} 
			 if (secondGoalAch3 == false) {
				cTria2_2 = "#f00";
			} 
			}  
					
		}
				
				// third puzzle
				
				else if (thirdGoalAch == false) {
					
							 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr3_1 && thesiAntiheiraX < xTetr3_1 + 200 && thesiAntiheiraY > yTetr3_1 && thesiAntiheiraY < yTetr3_1 + 200 && grabbing == false && grabbingTetr3_2 == false && grabbingTria3_1 == false && thirdGoalAch1 == false) {
			
			hasLetGo = false; 

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr3_1 = thesiAntiheiraX - 100;
		yTetr3_1 = thesiAntiheiraY - 100;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr3_2 - 225 && thesiAntiheiraX < xTetr3_2 + 225 && thesiAntiheiraY > yTetr3_2 - 200 && thesiAntiheiraY < yTetr3_2 + 200 && grabbing == false && grabbingTria3_1 == false && thirdGoalAch2 == false) {
			
			hasLetGo = false; 
			grabbingTetr3_2 == true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr3_2 = thesiAntiheiraX;
		yTetr3_2 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria3_1 - 100 && thesiAntiheiraX < xTria3_1 + 100 && thesiAntiheiraY > yTria3_1 - 200 && thesiAntiheiraY < yTria3_1 && grabbing == false && thirdGoalAch3 == false) {
			
			hasLetGo = false; 
grabbingTria3_1 == true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria3_1 = thesiAntiheiraX;
		yTria3_1 = thesiAntiheiraY + 100;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTria3_1 = false;
			grabbingTetr3_2 = false;
			} else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingTria3_1 = false;
			grabbingTetr3_2 = false;		
	}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintThirdPuzzle(xTetr3_1, yTetr3_1, cTetr3_1, xTetr3_2, yTetr3_2, cTetr3_2, xTria3_1, yTria3_1, cTria3_1, heightPuzzle3);
	
	// check if goal 3 achieved
	
					
		if ((xTetr3_1 > 855 && xTetr3_1 < 915 && yTetr3_1 > 510 && yTetr3_1 < 570) && thirdGoalAch1 == false) {
					cTetr3_1 = "#0f0";
			if (hasLetGo == true) {
				thirdGoalAch1 = true;
				
					xTetr3_1 = 885;
                    yTetr3_1 = 540;
					
				if (thirdGoalAch2 == true && thirdGoalAch3 == true) {
					thirdGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToFourthPuzzle();
				}
			} 
		} else if ((xTetr3_2 > 930 && xTetr3_2 < 990 && yTetr3_2 > 610 && yTetr3_2 < 670) && thirdGoalAch2 == false) {
					cTetr3_2 = "#0f0";
			if (hasLetGo == true) {
				thirdGoalAch2 = true;
				
					xTetr3_2 = 960;
                    yTetr3_2 = 640;	
				
				if (thirdGoalAch1 == true && thirdGoalAch3 == true) {
					thirdGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToFourthPuzzle();
				}
			} 
		} else if ((xTria3_1 > 930 && xTria3_1 < 990 && yTria3_1 > 410 && yTria3_1 < 470) && thirdGoalAch3 == false) {
					cTria3_1 = "#0f0";
			if (hasLetGo == true) {
				thirdGoalAch3 = true;
				
					xTria3_1 = 960;
                    yTria3_1 = 440;	
				
				if (thirdGoalAch1 == true && thirdGoalAch2 == true) {
					thirdGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToFourthPuzzle();
				}
			} 
		}  else if (thirdGoalAch1 == false || thirdGoalAch2 == false || thirdGoalAch3 == false) {
				 if (thirdGoalAch1 == false) {
				cTetr3_1 = "#f00";
			} 
		  if (thirdGoalAch2 == false) {
				cTetr3_2 = "#f00";
			} 
			 if (thirdGoalAch3 == false) {
				cTria3_1 = "#f00";
			} 
			}  
				}
				
				// fourth puzzle
				
					else if (fourthGoalAch == false) {
					
							 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr4_1 && thesiAntiheiraX < xTetr4_1 + 200 && thesiAntiheiraY > yTetr4_1 && thesiAntiheiraY < yTetr4_1 + 100 && grabbing == false && grabbingTetr4_2 == false && grabbingTetr4_3 == false && fourthGoalAch1 == false) {
			
			hasLetGo = false; 

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr4_1 = thesiAntiheiraX - 100;
		yTetr4_1 = thesiAntiheiraY - 50;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr4_2 - 200 && thesiAntiheiraX < xTetr4_2 + 200 && thesiAntiheiraY > yTetr4_2 - 150 && thesiAntiheiraY < yTetr4_2 + 150 && grabbing == false && grabbingTetr4_3 == false && fourthGoalAch2 == false) {
			
			hasLetGo = false; 
			grabbingTetr4_2 == true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr4_2 = thesiAntiheiraX;
		yTetr4_2 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr4_3 - 200 && thesiAntiheiraX < xTetr4_3 + 200 && thesiAntiheiraY > yTetr4_3 - 150 && thesiAntiheiraY < yTetr4_3 + 150 && grabbing == false && fourthGoalAch3 == false) {
			
			hasLetGo = false; 
			grabbingTetr4_3 == true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr4_3 = thesiAntiheiraX;
		yTetr4_3 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr4_2 = false;
			grabbingTetr4_3 = false;
			} else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingTetr4_2 = false;
			grabbingTetr4_3 = false;		
	}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintFourthPuzzle(xTetr4_1, yTetr4_1, cTetr4_1, xTetr4_2, yTetr4_2, cTetr4_2, xTetr4_3, yTetr4_3, cTetr4_3, heightPuzzle4);
	
	// check if goal 4 achieved
						
		if ((xTetr4_1 > 830 && xTetr4_1 < 890 && yTetr4_1 > 460 && yTetr4_1 < 520) && fourthGoalAch1 == false) {
					cTetr4_1 = "#0f0";
			if (hasLetGo == true) {
				fourthGoalAch1 = true;
				
					xTetr4_1 = 860;
                    yTetr4_1 = 490;
					
				if (fourthGoalAch2 == true && fourthGoalAch3 == true) {
					fourthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToFifthPuzzle();
				}
			} 
		} else if ((xTetr4_2 > 830 && xTetr4_2 < 890 && yTetr4_2 > 510 && yTetr4_2 < 570) && fourthGoalAch2 == false) {
					cTetr4_2 = "#0f0";
			if (hasLetGo == true) {
				fourthGoalAch2 = true;
				
					xTetr4_2 = 860;
                    yTetr4_2 = 540;
					
				if (fourthGoalAch1 == true && fourthGoalAch3 == true) {
					fourthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToFifthPuzzle();
				}
			} 
		} else if ((xTetr4_3 > 1030 && xTetr4_3 < 1090 && yTetr4_3 > 510 && yTetr4_3 < 570) && fourthGoalAch3 == false) {
					cTetr4_3 = "#0f0";
			if (hasLetGo == true) {
				fourthGoalAch3 = true;
				
					xTetr4_3 = 1060;
                    yTetr4_3 = 540;
					
				if (fourthGoalAch1 == true && fourthGoalAch2 == true) {
					fourthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToFifthPuzzle();
				}
			} 
		}  else if (fourthGoalAch1 == false || fourthGoalAch2 == false || fourthGoalAch3 == false) {
				 if (fourthGoalAch1 == false) {
				cTetr4_1 = "#f00";
			} 
		  if (fourthGoalAch2 == false) {
				cTetr4_2 = "#f00";
			} 
			 if (fourthGoalAch3 == false) {
				cTetr4_3 = "#f00";
			} 
			}  
					}
				
				// fifth puzzle
				
					else if (fifthGoalAch == false) {
						 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr5_1 && thesiAntiheiraX < xTetr5_1 + 50 && thesiAntiheiraY > yTetr5_1 && thesiAntiheiraY < yTetr5_1 + 600 && grabbing == false && grabbingTetr5_2 == false && grabbingTetr5_3 == false && fifthGoalAch1 == false) {
			
			hasLetGo = false; 

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr5_1 = thesiAntiheiraX - 25;
		yTetr5_1 = thesiAntiheiraY - 300;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr5_2 && thesiAntiheiraX < xTetr5_2 + 200 && thesiAntiheiraY > yTetr5_2 && thesiAntiheiraY < yTetr5_2 + 200 && grabbing == false && grabbingTetr5_3 == false && fifthGoalAch2 == false) {
			
			hasLetGo = false; 
			grabbingTetr5_2 == true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr5_2 = thesiAntiheiraX - 100;
		yTetr5_2 = thesiAntiheiraY - 100;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr5_3 && thesiAntiheiraX < xTetr5_3 + 200 && thesiAntiheiraY > yTetr5_3 && thesiAntiheiraY < yTetr5_3 + 200 && grabbing == false && fifthGoalAch3 == false) {
			
			hasLetGo = false; 
			grabbingTetr5_3 == true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr5_3 = thesiAntiheiraX - 100;
		yTetr5_3 = thesiAntiheiraY - 100;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr5_2 = false;
			grabbingTetr5_3 = false;
			} else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingTetr5_2 = false;
			grabbingTetr5_3 = false;		
	}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintFifthPuzzle(xTetr5_1, yTetr5_1, cTetr5_1, xTetr5_2, yTetr5_2, cTetr5_2, xTetr5_3, yTetr5_3, cTetr5_3, heightPuzzle5);
	
	// check if goal 5 achieved
						
		if ((xTetr5_1 > 905 && xTetr5_1 < 965 && yTetr5_1 > 210 && yTetr5_1 < 270) && fifthGoalAch1 == false) {
					cTetr5_1 = "#0f0";
			if (hasLetGo == true) {
				fifthGoalAch1 = true;
				
					xTetr5_1 = 935;
                    yTetr5_1 = 240;
					
				if (fifthGoalAch2 == true && fifthGoalAch3 == true) {
					fifthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToSixthPuzzle();
				}
			} 
		} else if ((((xTetr5_2 > 705 && xTetr5_2 < 765 && yTetr5_2 > 610 && yTetr5_2 < 670) && !(xTetr5_3 > 705 && xTetr5_3 < 765 && yTetr5_3 > 610 && yTetr5_3 < 670)) || ((xTetr5_2 > 955 && xTetr5_2 < 1015 && yTetr5_2 > 210 && yTetr5_2 < 270) && !(xTetr5_3 > 955 && xTetr5_3 < 1015 && yTetr5_3 > 210 && yTetr5_3 < 270))) && fifthGoalAch2 == false) {
					cTetr5_2 = "#0f0";
			if (hasLetGo == true) {
				fifthGoalAch2 = true;
				
				if (xTetr5_2 > 705 && xTetr5_2 < 765) {
					xTetr5_2 = 735;
                    yTetr5_2 = 640;
				} else {
				xTetr5_2 = 985;
                yTetr5_2 = 240;
				}
					
				if (fifthGoalAch1 == true && fifthGoalAch3 == true) {
					fifthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToSixthPuzzle();
				}
			} 
		} else if ((((xTetr5_3 > 705 && xTetr5_3 < 765 && yTetr5_3 > 610 && yTetr5_3 < 670) && !(xTetr5_2 > 705 && xTetr5_2 < 765 && yTetr5_2 > 610 && yTetr5_2 < 670)) || ((xTetr5_3 > 955 && xTetr5_3 < 1015 && yTetr5_3 > 210 && yTetr5_3 < 270) && !(xTetr5_2 > 955 && xTetr5_2 < 1015 && yTetr5_2 > 210 && yTetr5_2 < 270))) && fifthGoalAch3 == false) {
					cTetr5_3 = "#0f0";
			if (hasLetGo == true) {
				fifthGoalAch3 = true;
				
				if (xTetr5_3 > 705 && xTetr5_3 < 765) {
					xTetr5_3 = 735;
                    yTetr5_3 = 640;
				} else {
				xTetr5_3 = 985;
                yTetr5_3 = 240;
				}
					
				if (fifthGoalAch1 == true && fifthGoalAch2 == true) {
					fifthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToSixthPuzzle();
				}
			} 
		}  else if (fifthGoalAch1 == false || fifthGoalAch2 == false || fifthGoalAch3 == false) {
				 if (fifthGoalAch1 == false) {
				cTetr5_1 = "#f00";
			} 
		  if (fifthGoalAch2 == false) {
				cTetr5_2 = "#f00";
			} 
			 if (fifthGoalAch3 == false) {
				cTetr5_3 = "#f00";
			} 
			}  
					}
				
				// sixth puzzle
				
					else if (sixthGoalAch == false) {
										 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria6_1 - 100 && thesiAntiheiraX < xTria6_1 + 100 && thesiAntiheiraY > yTria6_1 - 100 && thesiAntiheiraY < yTria6_1 + 100 && grabbing == false && grabbingTetr6_2 == false && grabbingTetr6_3 == false && sixthGoalAch1 == false) {
			
			hasLetGo = false; 

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria6_1 = thesiAntiheiraX;
		yTria6_1 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr6_2 - 120 && thesiAntiheiraX < xTetr6_2 + 120 && thesiAntiheiraY > yTetr6_2 - 140 && thesiAntiheiraY < yTetr6_2 + 140 && grabbing == false && grabbingTetr6_3 == false && sixthGoalAch2 == false) {
			
			hasLetGo = false; 
			grabbingTetr6_2 == true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr6_2 = thesiAntiheiraX;
		yTetr6_2 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr6_3 - 120 && thesiAntiheiraX < xTetr6_3 + 120 && thesiAntiheiraY > yTetr6_3 - 140 && thesiAntiheiraY < yTetr6_3 + 140 && grabbing == false && sixthGoalAch3 == false) {
			
			hasLetGo = false; 
			grabbingTetr6_3 == true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr6_3 = thesiAntiheiraX;
		yTetr6_3 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr6_2 = false;
			grabbingTetr6_3 = false;
			} else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingTetr6_2 = false;
			grabbingTetr6_3 = false;		
	}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintSixthPuzzle(xTria6_1, yTria6_1, cTria6_1, xTetr6_2, yTetr6_2, cTetr6_2, xTetr6_3, yTetr6_3, cTetr6_3, heightPuzzle6);
	
	// check if goal 6 achieved
						
		if ((xTria6_1 > 930 && xTria6_1 < 990 && yTria6_1 > 510 && yTria6_1 < 570) && sixthGoalAch1 == false) {
					cTria6_1 = "#0f0";
			if (hasLetGo == true) {
				sixthGoalAch1 = true;
				
					xTria6_1 = 960;
                    yTria6_1 = 540;
					
				if (sixthGoalAch2 == true && sixthGoalAch3 == true) {
					sixthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToSeventhPuzzle();
				}
			} 
		} else 	if ((xTetr6_2 > 810 && xTetr6_2 < 870 && yTetr6_2 > 470 && yTetr6_2 < 530) && sixthGoalAch2 == false) {
					cTetr6_2 = "#0f0";
			if (hasLetGo == true) {
				sixthGoalAch2 = true;
				
					xTetr6_2 = 840;
                    yTetr6_2 = 500;
					
				if (sixthGoalAch1 == true && sixthGoalAch3 == true) {
					sixthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToSeventhPuzzle();
				}
			} 
		} else 	if ((xTetr6_3 > 1050 && xTetr6_3 < 1110 && yTetr6_3 > 470 && yTetr6_3 < 530) && sixthGoalAch3 == false) {
					cTetr6_3 = "#0f0";
			if (hasLetGo == true) {
				sixthGoalAch3 = true;
				
					xTetr6_3 = 1080;
                    yTetr6_3 = 500;
					
				if (sixthGoalAch1 == true && sixthGoalAch2 == true) {
					sixthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
					goToSeventhPuzzle();
				}
			} 
		}  else if (sixthGoalAch1 == false || sixthGoalAch2 == false || sixthGoalAch3 == false) {
				 if (sixthGoalAch1 == false) {
				cTria6_1 = "#f00";
			} 
		  if (sixthGoalAch2 == false) {
				cTetr6_2 = "#f00";
			} 
			 if (sixthGoalAch3 == false) {
				cTetr6_3 = "#f00";
			} 
			}  
					}
				
	// seventh puzzle
				else if (seventhGoalAch == false) {
							 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr7_1 - 40 && thesiAntiheiraX < xTetr7_1 + 40 && thesiAntiheiraY > yTetr7_1 - 250 && thesiAntiheiraY < yTetr7_1 + 250 && grabbing == false && grabbingTetr7_2 == false && grabbingTetr7_3 == false  && grabbingTetr7_4 == false && seventhGoalAch1 == false) {
			
			hasLetGo = false; 

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr7_1 = thesiAntiheiraX;
		yTetr7_1 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr7_2 - 40 && thesiAntiheiraX < xTetr7_2 + 40 && thesiAntiheiraY > yTetr7_2 - 250 && thesiAntiheiraY < yTetr7_2 + 250 && grabbing == false && grabbingTetr7_3 == false  && grabbingTetr7_4 == false && seventhGoalAch2 == false) {
			
			hasLetGo = false; 
grabbingTetr7_2 == true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr7_2 = thesiAntiheiraX;
		yTetr7_2 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr7_3 - 100 && thesiAntiheiraX < xTetr7_3 + 100 && thesiAntiheiraY > yTetr7_3 - 40 && thesiAntiheiraY < yTetr7_3 + 40 && grabbing == false && grabbingTetr7_4 == false && seventhGoalAch3 == false) {
			
			hasLetGo = false; 
grabbingTetr7_3 == true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr7_3 = thesiAntiheiraX;
		yTetr7_3 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr7_4 - 100 && thesiAntiheiraX < xTetr7_4 + 100 && thesiAntiheiraY > yTetr7_4 - 40 && thesiAntiheiraY < yTetr7_4 + 40 && grabbing == false && seventhGoalAch4 == false) {
			
			hasLetGo = false; 
grabbingTetr7_4 == true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr7_4 = thesiAntiheiraX;
		yTetr7_4 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr7_2 = false;
			grabbingTetr7_3 = false;
			grabbingTetr7_4 = false;
			} else {
			grabbing = false;
		  hasLetGo = true;
		  	grabbingTetr7_2 = false;
			grabbingTetr7_3 = false;
			grabbingTetr7_4 = false;		
	}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintSeventhPuzzle(xTetr7_1, yTetr7_1, cTetr7_1, xTetr7_2, yTetr7_2, cTetr7_2, xTetr7_3, yTetr7_3, cTetr7_3, xTetr7_4, yTetr7_4, cTetr7_4, heightPuzzle7);
	
	// check if goal 7 achieved
						
		if ((((xTetr7_1 > 790 && xTetr7_1 < 850 && yTetr7_1 > 510 && yTetr7_1 < 570) && !(xTetr7_2 > 790 && xTetr7_2 < 850 && yTetr7_2 > 510 && yTetr7_2 < 570)) || ((xTetr7_1 > 1070 && xTetr7_1 < 1130 && yTetr7_1 > 510 && yTetr7_1 < 570) && !(xTetr7_2 > 1070 && xTetr7_2 < 1130 && yTetr7_2 > 510 && yTetr7_2 < 570))) && seventhGoalAch1 == false) {
					cTetr7_1 = "#0f0";
			if (hasLetGo == true) {
				seventhGoalAch1 = true;
			
				if (xTetr7_1 > 790 && xTetr7_1 < 850) {
					xTetr7_1 = 820;
				} else {
					xTetr7_1 = 1100;
				}
                    yTetr7_1 = 540;
					
				if (seventhGoalAch2 == true && seventhGoalAch3 == true && seventhGoalAch4 == true) {
					seventhGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToEighthPuzzle();
				}
			} 
		} else	if ((((xTetr7_2 > 790 && xTetr7_2 < 850 && yTetr7_2 > 510 && yTetr7_2 < 570) && !(xTetr7_1 > 790 && xTetr7_1 < 850 && yTetr7_1 > 510 && yTetr7_1 < 570)) || ((xTetr7_2 > 1070 && xTetr7_2 < 1130 && yTetr7_2 > 510 && yTetr7_2 < 570) && !(xTetr7_1 > 1070 && xTetr7_1 < 1130 && yTetr7_1 > 510 && yTetr7_1 < 570))) && seventhGoalAch2 == false) {
					cTetr7_2 = "#0f0";
			if (hasLetGo == true) {
				seventhGoalAch2 = true;
			
				if (xTetr7_2 > 790 && xTetr7_2 < 850) {
					xTetr7_2 = 820;
				} else {
					xTetr7_2 = 1100;
				}
                    yTetr7_2 = 540;
					
				if (seventhGoalAch1 == true && seventhGoalAch3 == true && seventhGoalAch4 == true) {
					seventhGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToEighthPuzzle();
				}
			} 
		} else if ((((xTetr7_3 > 930 && xTetr7_3 < 990 && yTetr7_3 > 420 && yTetr7_3 < 480) && !(xTetr7_4 > 930 && xTetr7_4 < 990 && yTetr7_4 > 420 && yTetr7_4 < 480)) || ((xTetr7_3 > 930 && xTetr7_3 < 990 && yTetr7_3 > 600 && yTetr7_3 < 660) && !(xTetr7_4 > 930 && xTetr7_4 < 990 && yTetr7_4 > 600 && yTetr7_4 < 660))) && seventhGoalAch3 == false) {
					cTetr7_3 = "#0f0";
			if (hasLetGo == true) {
				seventhGoalAch3 = true;
			
				if (yTetr7_3 > 420 && yTetr7_3 < 480) {
					yTetr7_3 = 450;
				} else {
					yTetr7_3 = 630;
				}
                  xTetr7_3 = 960;
					
				if (seventhGoalAch1 == true && seventhGoalAch2 == true && seventhGoalAch4 == true) {
					seventhGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToEighthPuzzle();
				}
			} 
		}   else if ((((xTetr7_4 > 930 && xTetr7_4 < 990 && yTetr7_4 > 420 && yTetr7_4 < 480) && !(xTetr7_3 > 930 && xTetr7_3 < 990 && yTetr7_3 > 420 && yTetr7_3 < 480)) || ((xTetr7_4 > 930 && xTetr7_4 < 990 && yTetr7_4 > 600 && yTetr7_4 < 660) && !(xTetr7_3 > 930 && xTetr7_3 < 990 && yTetr7_3 > 600 && yTetr7_3 < 660))) && seventhGoalAch4 == false) {
					cTetr7_4 = "#0f0";
			if (hasLetGo == true) {
				seventhGoalAch4 = true;
			
				if (yTetr7_4 > 420 && yTetr7_4 < 480) {
					yTetr7_4 = 450;
				} else {
					yTetr7_4 = 630;
				}
                  xTetr7_4 = 960;
					
				if (seventhGoalAch1 == true && seventhGoalAch2 == true && seventhGoalAch3 == true) {
					seventhGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToEighthPuzzle();
				}
			} 
		} else if (seventhGoalAch1 == false || seventhGoalAch2 == false || seventhGoalAch3 == false || seventhGoalAch4 == false) {
				 if (seventhGoalAch1 == false) {
				cTetr7_1 = "#f00";
			} 
		  if (seventhGoalAch2 == false) {
				cTetr7_2 = "#f00";
			} 
			 if (seventhGoalAch3 == false) {
				cTetr7_3 = "#f00";
			} 
			 if (seventhGoalAch4 == false) {
				cTetr7_4 = "#f00";
			} 
			} 
				}
				
				// eighth puzzle
				else if (eighthGoalAch == false) {
										 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria8_1 - 100 && thesiAntiheiraX < xTria8_1 + 100 && thesiAntiheiraY > yTria8_1 - 100 && thesiAntiheiraY < yTria8_1 + 100 && grabbing == false && grabbingTria8_2 == false && grabbingTria8_3 == false && eighthGoalAch1 == false) {
			
			hasLetGo = false; 

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria8_1 = thesiAntiheiraX;
		yTria8_1 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria8_2 - 100 && thesiAntiheiraX < xTria8_2 + 100 && thesiAntiheiraY > yTria8_2 - 100 && thesiAntiheiraY < yTria8_2 + 100 && grabbing == false && grabbingTria8_3 == false && eighthGoalAch2 == false) {
			
			hasLetGo = false; 
			grabbingTria8_2 = true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria8_2 = thesiAntiheiraX;
		yTria8_2 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria8_3 - 100 && thesiAntiheiraX < xTria8_3 + 100 && thesiAntiheiraY > yTria8_3 - 100 && thesiAntiheiraY < yTria8_3 + 100 && grabbing == false && eighthGoalAch3 == false) {
			
			hasLetGo = false; 
			grabbingTria8_3 = true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria8_3 = thesiAntiheiraX;
		yTria8_3 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTria8_2 = false;
			grabbingTria8_3 = false;
			} else {
			grabbing = false;
		  hasLetGo = true;
			grabbingTria8_2 = false;
			grabbingTria8_3 = false;		
	}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintEighthPuzzle(xTria8_1, yTria8_1, cTria8_1, xTria8_2, yTria8_2, cTria8_2, xTria8_3, yTria8_3, cTria8_3, heightPuzzle8);
	
	// check if goal 8 achieved
						
		if ((((xTria8_1 > 830 && xTria8_1 < 890 && yTria8_1 > 510 && yTria8_1 < 570) && !(xTria8_2 > 830 && xTria8_2 < 890 && yTria8_2 > 510 && yTria8_2 < 570)) || ((xTria8_1 > 1030 && xTria8_1 < 1090 && yTria8_1 > 510 && yTria8_1 < 570) && !(xTria8_2 > 1030 && xTria8_2 < 1090 && yTria8_2 > 510 && yTria8_2 < 570))) && eighthGoalAch1 == false) {
					cTria8_1 = "#0f0";
			if (hasLetGo == true) {
				eighthGoalAch1 = true;
			
				if (xTria8_1 > 830 && xTria8_1 < 890) {
					xTria8_1 = 860;
				} else {
					xTria8_1 = 1060;
				}
                    yTria8_1 = 540;
					
				if (eighthGoalAch2 == true && eighthGoalAch3 == true) {
					eighthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToNinthPuzzle();
				}
			} 
		} else	if ((((xTria8_2 > 830 && xTria8_2 < 890 && yTria8_2 > 510 && yTria8_2 < 570) && !(xTria8_1 > 830 && xTria8_1 < 890 && yTria8_1 > 510 && yTria8_1 < 570)) || ((xTria8_2 > 1030 && xTria8_2 < 1090 && yTria8_2 > 510 && yTria8_2 < 570) && !(xTria8_1 > 1030 && xTria8_1 < 1090 && yTria8_1 > 510 && yTria8_1 < 570))) && eighthGoalAch2 == false) {
					cTria8_2 = "#0f0";
			if (hasLetGo == true) {
				eighthGoalAch2 = true;
			
				if (xTria8_2 > 830 && xTria8_2 < 890) {
					xTria8_2 = 860;
				} else {
					xTria8_2 = 1060;
				}
                    yTria8_2 = 540;
					
				if (eighthGoalAch1 == true && eighthGoalAch3 == true) {
					eighthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToNinthPuzzle();
				}
			} 
		} 	else if (xTria8_3 > 930 && xTria8_1 < 990 && yTria8_3 > 510 && yTria8_3 < 570 && eighthGoalAch3 == false) {
					cTria8_3 = "#0f0";
			if (hasLetGo == true) {
				eighthGoalAch3 = true;

					xTria8_3 = 960;
                    yTria8_3 = 540;
					
				if (eighthGoalAch1 == true && eighthGoalAch2 == true) {
					eighthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToNinthPuzzle();
				}
			} 
		} else if (eighthGoalAch1 == false || eighthGoalAch2 == false || eighthGoalAch3 == false) {
				 if (eighthGoalAch1 == false) {
				cTria8_1 = "#f00";
			} 
		  if (eighthGoalAch2 == false) {
				cTria8_2 = "#f00";
			} 
			 if (eighthGoalAch3 == false) {
				cTria8_3 = "#f00";
			} 
			} 
				}
				
					// ninth puzzle
				else if (ninthGoalAch == false) {
									 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr9_1 - 100 && thesiAntiheiraX < xTetr9_1 + 100 && thesiAntiheiraY > yTetr9_1 - 100 && thesiAntiheiraY < yTetr9_1 + 100 && grabbing == false && grabbingTetr9_2 == false && grabbingTria9_3 == false && ninthGoalAch1 == false) {
			
			hasLetGo = false; 

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr9_1 = thesiAntiheiraX;
		yTetr9_1 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr9_2 - 100 && thesiAntiheiraX < xTetr9_2 + 100 && thesiAntiheiraY > yTetr9_2 - 100 && thesiAntiheiraY < yTetr9_2 + 100 && grabbing == false && grabbingTria9_3 == false && ninthGoalAch2 == false) {
			
			hasLetGo = false; 
			grabbingTetr9_2 = true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr9_2 = thesiAntiheiraX;
		yTetr9_2 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTria9_3 - 100 && thesiAntiheiraX < xTria9_3 + 100 && thesiAntiheiraY > yTria9_3 - 100 && thesiAntiheiraY < yTria9_3 + 100 && grabbing == false && ninthGoalAch3 == false) {
			
			hasLetGo = false; 
			grabbingTria9_3 = true;

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTria9_3 = thesiAntiheiraX;
		yTria9_3 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr9_2 = false;
			grabbingTria9_3 = false;
			} else {
			grabbing = false;
		  hasLetGo = true;
			grabbingTetr9_2 = false;
			grabbingTria9_3 = false;		
	}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
paintNinthPuzzle(xTetr9_1, yTetr9_1, cTetr9_1, xTetr9_2, yTetr9_2, cTetr9_2, xTria9_3, yTria9_3, cTria9_3, heightPuzzle9);
	
	// check if goal 9 achieved
						
		if (xTetr9_1 > 830 && xTetr9_1 < 890 && yTetr9_1 > 610 && yTetr9_1 < 670 && ninthGoalAch1 == false) {
					cTetr9_1 = "#0f0";
			if (hasLetGo == true) {
				ninthGoalAch1 = true;
			
					xTetr9_1 = 860;
                    yTetr9_1 = 640;
					
				if (ninthGoalAch2 == true && ninthGoalAch3 == true) {
					ninthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToTenthPuzzle();
				}
			} 
		} else if (xTetr9_2 > 1030 && xTetr9_2 < 1090 && yTetr9_2 > 610 && yTetr9_2 < 670 && ninthGoalAch2 == false) {
					cTetr9_2 = "#0f0";
			if (hasLetGo == true) {
				ninthGoalAch2 = true;
			
					xTetr9_2 = 1060;
                    yTetr9_2 = 640;
					
				if (ninthGoalAch1 == true && ninthGoalAch3 == true) {
					ninthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToTenthPuzzle();
				}
			} 
		}	else if (xTria9_3 > 830 && xTria9_3 < 890 && yTria9_3 > 410 && yTria9_3 < 470 && ninthGoalAch3 == false) {
					cTria9_3 = "#0f0";
			if (hasLetGo == true) {
				ninthGoalAch3 = true;
			
					xTria9_3 = 860;
                    yTria9_3 = 440;
					
				if (ninthGoalAch1 == true && ninthGoalAch2 == true) {
					ninthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				goToTenthPuzzle();
				}
			} 
		} else if (ninthGoalAch1 == false || ninthGoalAch2 == false || ninthGoalAch3 == false) {
				 if (ninthGoalAch1 == false) {
				cTetr9_1 = "#f00";
			} 
		  if (ninthGoalAch2 == false) {
				cTetr9_2 = "#f00";
			} 
			 if (ninthGoalAch3 == false) {
				cTria9_3 = "#f00";
			} 
			} 
				}
				
					// tenth puzzle
				else if (tenthGoalAch == false) {
					
			 if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr10_1 - 100 && thesiAntiheiraX < xTetr10_1 + 100 && thesiAntiheiraY > yTetr10_1 - 100 && thesiAntiheiraY < yTetr10_1 + 100 && grabbing == false && grabbingTetr10_2 == false && grabbingTetr10_3 == false && tenthGoalAch1 == false) {
			
			hasLetGo = false; 

				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr10_1 = thesiAntiheiraX;
		yTetr10_1 = thesiAntiheiraY;
		
		} else  if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr10_2 - 100 && thesiAntiheiraX < xTetr10_2 + 100 && thesiAntiheiraY > yTetr10_2 - 100 && thesiAntiheiraY < yTetr10_2 + 100 && grabbing == false && grabbingTetr10_3 == false && tenthGoalAch2 == false) {
			
			hasLetGo = false; 
grabbingTetr10_2 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr10_2 = thesiAntiheiraX;
		yTetr10_2 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05 && thesiAntiheiraX > xTetr10_3 - 50 && thesiAntiheiraX < xTetr10_3 + 50 && thesiAntiheiraY > yTetr10_3 - 150 && thesiAntiheiraY < yTetr10_3 + 150 && grabbing == false && tenthGoalAch3 == false) {
			
			hasLetGo = false; 
grabbingTetr10_3 = true;
			
				 drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#00ff00', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#00ff00', lineWidth: 1});
			
        xTetr10_3 = thesiAntiheiraX;
		yTetr10_3 = thesiAntiheiraY;
		
		} else if (difAntiheirasDiktis < 0.05 && difAntiheirasMesos < 0.05) {
				  drawConnectors(canvasCtx, landmarks, HAND_CONNECTIONS, {color: '#ffffff', lineWidth: 1});
			 drawLandmarks(canvasCtx, landmarks, {color: '#ffffff', lineWidth: 1});	
				grabbing = true;
			hasLetGo = false;
			grabbingTetr10_2 = false;
			grabbingTetr10_3 = false;
			} else {
			grabbing = false;
		  hasLetGo = true;
			grabbingTetr10_2 = false;
			grabbingTetr10_3 = false;		
	}
	
		/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintTenthPuzzle(xTetr10_1, yTetr10_1, cTetr10_1, xTetr10_2, yTetr10_2, cTetr10_2, xTetr10_3, yTetr10_3, cTetr10_3, heightPuzzle10);
	
	// check if goal 10 achieved
					
						/* GOAL COORDINATES
    var xTetr10_1 = 810;
	var yTetr10_1 = 540;
	var xTetr10_2 = 1110;
	var yTetr10_2 = 540;		   
	var xTetr10_3 = 960;
	var yTetr10_3 = 540;
		   */
						
		if (xTetr10_1 > 780 && xTetr10_1 < 840 && yTetr10_1 > 510 && yTetr10_1 < 570 && tenthGoalAch1 == false) {
					cTetr10_1 = "#0f0";
			if (hasLetGo == true) {
				tenthGoalAch1 = true;
			
					xTetr10_1 = 810;
                    yTetr10_1 = 540;
					
				if (tenthGoalAch2 == true && tenthGoalAch3 == true) {
					tenthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				finishAllPuzzles();
				}
			} 
		} else if (xTetr10_2 > 1080 && xTetr10_2 < 1140 && yTetr10_2 > 510 && yTetr10_2 < 570 && tenthGoalAch2 == false) {
					cTetr10_2 = "#0f0";
			if (hasLetGo == true) {
				tenthGoalAch2 = true;
			
					xTetr10_2 = 1110;
                    yTetr10_2 = 540;
					
				if (tenthGoalAch1 == true && tenthGoalAch3 == true) {
					tenthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				finishAllPuzzles();
				}
			} 
		}	else if (xTetr10_3 > 930 && xTetr10_3 < 990 && yTetr10_3 > 510 && yTetr10_3 < 570 && tenthGoalAch3 == false) {
					cTetr10_3 = "#0f0";
			if (hasLetGo == true) {
				tenthGoalAch3 = true;
			
					xTetr10_3 = 960;
                    yTetr10_3 = 540;
					
				if (tenthGoalAch1 == true && tenthGoalAch2 == true) {
					tenthGoalAch = true;
					score++;
					exerStarted = 0;
					timerStarted = false;
				finishAllPuzzles();
				}
			} 
		} else if (tenthGoalAch1 == false || tenthGoalAch2 == false || tenthGoalAch3 == false) {
				 if (tenthGoalAch1 == false) {
				cTetr10_1 = "#f00";
			} 
		  if (tenthGoalAch2 == false) {
				cTetr10_2 = "#f00";
			} 
			 if (tenthGoalAch3 == false) {
				cTetr10_3 = "#f00";
			} 
			} 
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
		   
		   
		   
		   
		   
		   
		   
		   
		   function goToSecondPuzzle() {
		   const myInterval1 = setInterval(function () {
				if (heightPuzzle2 != 1080) {
					heightPuzzle1 += 10;
					heightPuzzle2 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
				paintFirstPuzzle(xTetr1_1, yTetr1_1, cTetr1_1, xTetr1_2, yTetr1_2, cTetr1_2, heightPuzzle1);
		paintSecondPuzzle(xTetr2_1, yTetr2_1, cTetr2_1, xTria2_1, yTria2_1, cTria2_1, xTria2_2, yTria2_2, cTria2_2, heightPuzzle2);
				} else {
					clearInterval(myInterval1); 
					  exerStarted = 1;
						timerStarted = true;
				}
			   }, 10); 
		   }
		   
		   
		   function goToThirdPuzzle() {
			   const myInterval2 = setInterval(function () {
				if (heightPuzzle3 != 1080) {
					heightPuzzle2 += 10;
					heightPuzzle3 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
		paintSecondPuzzle(xTetr2_1, yTetr2_1, cTetr2_1, xTria2_1, yTria2_1, cTria2_1, xTria2_2, yTria2_2, cTria2_2, heightPuzzle2);
					paintThirdPuzzle(xTetr3_1, yTetr3_1, cTetr3_1, xTetr3_2, yTetr3_2, cTetr3_2, xTria3_1, yTria3_1, cTria3_1, heightPuzzle3);
				} else {
					clearInterval(myInterval2); 
					  exerStarted = 1;
						timerStarted = true;
				}
			   }, 10);   
		   }
		   
		  function goToFourthPuzzle() {
					   const myInterval3 = setInterval(function () {
				if (heightPuzzle4 != 1080) {
					heightPuzzle3 += 10;
					heightPuzzle4 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
					paintThirdPuzzle(xTetr3_1, yTetr3_1, cTetr3_1, xTetr3_2, yTetr3_2, cTetr3_2, xTria3_1, yTria3_1, cTria3_1, heightPuzzle3);
					paintFourthPuzzle(xTetr4_1, yTetr4_1, cTetr4_1, xTetr4_2, yTetr4_2, cTetr4_2, xTetr4_3, yTetr4_3, cTetr4_3, heightPuzzle4);
				} else {
					clearInterval(myInterval3); 
					  exerStarted = 1;
						timerStarted = true;
				}
			   }, 10);  
		   }
		   
		   function goToFifthPuzzle() {
								   const myInterval4 = setInterval(function () {
				if (heightPuzzle5 != 1080) {
					heightPuzzle4 += 10;
					heightPuzzle5 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
					paintFourthPuzzle(xTetr4_1, yTetr4_1, cTetr4_1, xTetr4_2, yTetr4_2, cTetr4_2, xTetr4_3, yTetr4_3, cTetr4_3, heightPuzzle4);
						paintFifthPuzzle(xTetr5_1, yTetr5_1, cTetr5_1, xTetr5_2, yTetr5_2, cTetr5_2, xTetr5_3, yTetr5_3, cTetr5_3, heightPuzzle5);
				} else {
					clearInterval(myInterval4); 
					  exerStarted = 1;
						timerStarted = true;
				}
			   }, 10);    
		   }
		   
		   		   function goToSixthPuzzle() {
								   const myInterval5 = setInterval(function () {
				if (heightPuzzle6 != 1080) {
					heightPuzzle5 += 10;
					heightPuzzle6 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
	paintFifthPuzzle(xTetr5_1, yTetr5_1, cTetr5_1, xTetr5_2, yTetr5_2, cTetr5_2, xTetr5_3, yTetr5_3, cTetr5_3, heightPuzzle5);
	paintSixthPuzzle(xTria6_1, yTria6_1, cTria6_1, xTetr6_2, yTetr6_2, cTetr6_2, xTetr6_3, yTetr6_3, cTetr6_3, heightPuzzle6);
				} else {
					clearInterval(myInterval5); 
					  exerStarted = 1;
						timerStarted = true;
				}
			   }, 10); 
		   }
		   
		   function goToSeventhPuzzle() {
			  						   const myInterval6 = setInterval(function () {
				if (heightPuzzle7 != 1080) {
					heightPuzzle6 += 10;
					heightPuzzle7 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
	paintSixthPuzzle(xTria6_1, yTria6_1, cTria6_1, xTetr6_2, yTetr6_2, cTetr6_2, xTetr6_3, yTetr6_3, cTetr6_3, heightPuzzle6);
	paintSeventhPuzzle(xTetr7_1, yTetr7_1, cTetr7_1, xTetr7_2, yTetr7_2, cTetr7_2, xTetr7_3, yTetr7_3, cTetr7_3, xTetr7_4, yTetr7_4, cTetr7_4, heightPuzzle7);
				} else {
					clearInterval(myInterval6); 
					  exerStarted = 1;
						timerStarted = true;
				}
			   }, 10); 
		   }
		   
		   		   function goToEighthPuzzle() {
	  						   const myInterval7 = setInterval(function () {
				if (heightPuzzle8 != 1080) {
					heightPuzzle7 += 10;
					heightPuzzle8 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
	paintSeventhPuzzle(xTetr7_1, yTetr7_1, cTetr7_1, xTetr7_2, yTetr7_2, cTetr7_2, xTetr7_3, yTetr7_3, cTetr7_3, xTetr7_4, yTetr7_4, cTetr7_4, heightPuzzle7);
		paintEighthPuzzle(xTria8_1, yTria8_1, cTria8_1, xTria8_2, yTria8_2, cTria8_2, xTria8_3, yTria8_3, cTria8_3, heightPuzzle8);
				} else {
					clearInterval(myInterval7); 
					  exerStarted = 1;
						timerStarted = true;
				}
			   }, 10); 
		   }
		   
		   function goToNinthPuzzle() {
									   const myInterval8 = setInterval(function () {
				if (heightPuzzle9 != 1080) {
					heightPuzzle8 += 10;
					heightPuzzle9 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
		paintEighthPuzzle(xTria8_1, yTria8_1, cTria8_1, xTria8_2, yTria8_2, cTria8_2, xTria8_3, yTria8_3, cTria8_3, heightPuzzle8);
					paintNinthPuzzle(xTetr9_1, yTetr9_1, cTetr9_1, xTetr9_2, yTetr9_2, cTetr9_2, xTria9_3, yTria9_3, cTria9_3, heightPuzzle9);
				} else {
					clearInterval(myInterval8); 
					  exerStarted = 1;
						timerStarted = true;
				}
			   }, 10); 
		   }
		   
		   function goToTenthPuzzle() {
									   const myInterval9 = setInterval(function () {
				if (heightPuzzle10 != 1080) {
					heightPuzzle9 += 10;
					heightPuzzle10 += 10;
					    ctx.clearRect(0, 0, 1920, 1080);
					paintNinthPuzzle(xTetr9_1, yTetr9_1, cTetr9_1, xTetr9_2, yTetr9_2, cTetr9_2, xTria9_3, yTria9_3, cTria9_3, heightPuzzle9);
					paintTenthPuzzle(xTetr10_1, yTetr10_1, cTetr10_1, xTetr10_2, yTetr10_2, cTetr10_2, xTetr10_3, yTetr10_3, cTetr10_3, heightPuzzle10);
				} else {
					clearInterval(myInterval9); 
					  exerStarted = 1;
						timerStarted = true;
				}
			   }, 10);  
		   }
		   
		   
		   
		   	   function finishAllPuzzles() {
				   
				   	/*clearing anything drawn on canvas */
    ctx.clearRect(0, 0, 1920, 1080);
  
  	//Drawing rectangle at new position
	paintTenthPuzzle(xTetr10_1, yTetr10_1, cTetr10_1, xTetr10_2, yTetr10_2, cTetr10_2, xTetr10_3, yTetr10_3, cTetr10_3, heightPuzzle10);
				   
		  clearInterval(countdown);
	  localStorage.setItem("collageRightScore", score);
	    exerStarted = 0;
	  
	  		        Swal.fire({
title: 'You completed all the puzzles! \n Your score is: ' + score,
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
	  
	 
	  
  </body>
</html>