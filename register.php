
	<?php include 'main-head.php';?>
<?php include 'main-header.php';?>

<main id="registerPage">
<h1 id="pageTitle">Register</h1>
	<div class="row">
		<div class="column1">
			 <form id="formaEggrafis" name="formaEggrafis" action="register-process.php"  method="POST">
		<input id="firstNameRegister" name="firstNameRegister" type="text" placeholder="First Name">
				  <input id="lastNameRegister" name="lastNameRegister" type="text" placeholder="Last Name">
			 <input id="emailRegister" name="emailRegister" type="email" placeholder="Email">
  <input id="passwordRegister" name="passwordRegister" type="password" placeholder="Password">
				 <input id="ageRegister" name="ageRegister" type="number" placeholder="Age">
				 <select id="genderRegister" name="genderRegister">
<option value="" disabled selected>Select Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
				 <select id="dominantHandRegister" name="dominantHandRegister">
<option value="" disabled selected>Select Dominant Hand</option>
  <option value="right">Right</option>
  <option value="left">Left</option>
</select>
				 <select id="statusRegister" name="statusRegister">
<option value="" disabled selected>Select Status</option>
  <option value="healthy">Healthy</option>
  <option value="patient">Patient</option>
</select>
			   <input id="sendButton" type="submit" value="Submit">
			 </form>
</div> 
	</div>
	
		<div class="row">
		<div class="column1">
<p style="text-align: center;">Already have an account?<br>
	<a href="/login.php">Login</a></p>
</div> 
	</div>
	
</main>

		

<?php include 'main-footer.php';?>
