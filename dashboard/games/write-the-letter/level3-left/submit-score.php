    <?php      

 session_start();

$servername = "localhost";
$username = "mani_hab_space";
$password = "eqi9_Y619";
$dbname = "mani_hab_space";
          
        $con = mysqli_connect($servername, $username, $password, $dbname);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  




$user = $_SESSION['userEmail'];  
$score = $_POST['score'];  
      
        //to prevent from mysqli injection   
        $user = stripcslashes($user);    
        $user = mysqli_real_escape_string($con, $user);  
          
   
			
			$sql = "INSERT INTO write_the_letter (id, user, level, score, hand)
VALUES ('0', '$user', 'Level 3', '$score', 'Left')";
			
			
			
if ($con->query($sql) === TRUE) {	
   echo ("<script LANGUAGE='JavaScript'>
    window.alert('Your Score has been saved!');
    window.location.href='https://mani-hab.space/dashboard/games/write-the-letter/index.php';
    </script>");  
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}     
       


    ?>  




