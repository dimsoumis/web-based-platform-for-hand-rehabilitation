<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
	<title>Mani-Hab - Hand Rehabilitation Platform</title>
	<link rel="icon" type="image/x-icon" href="/images/favicon.png">
	<link rel="stylesheet" href="/styles/main.css">
	<link rel="stylesheet" href="/styles/responsive.css">
	
		<script src="/scripts/main.js" type="text/javascript"></script> 
</head>
	<body>
		
		<header>
	<div id="logo"><img src="/images/logo-hor.png" /></div>
</header>

<main id="loginPage">
<h1 id="pageTitle">Admin Login</h1>
	<div class="row">
		<div class="column1">
			 <form id="formaEisodou" action="login-process.php" onsubmit="return validation()" method="POST">
			<input id="usernameLogin" name="usernameLogin" type="text" placeholder="Username">
<input id="passwordLogin" name="passwordLogin" type="password" placeholder="Password">
			<input id="sendButton" type="submit" value="Submit">
			 </form>
</div> 
	</div>
	

	
</main>

		 <script>  
            function validation()  
            {  
                var userName=document.getElementById("usernameLogin").value;  
                var passWord=document.getElementById("passwordLogin").value;  
                if(userName.length == "" && passWord.length == "") {  
                    alert("Username and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(userName.length == "") {  
                        alert("Username field is empty");  
                        return false;  
                    }   
                    if (passWord.length == "") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

<?php include '../main-footer.php';?>
