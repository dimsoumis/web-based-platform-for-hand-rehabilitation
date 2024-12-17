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


$userUsername = $_POST['usernameLogin'];  
$userPassword = $_POST['passwordLogin'];  
      
        //to prevent from mysqli injection  
        $userUsername = stripcslashes($userUsername);  
        $userPassword = stripcslashes($userPassword);  
        $userUsername = mysqli_real_escape_string($con, $userUsername);  
        $userPassword = mysqli_real_escape_string($con, $userPassword);  
      
        $sql = "select * from admins where username = '$userUsername' and password = '$userPassword'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
               $_SESSION['adminUsername'] = $userUsername;
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login Successful!');
    window.location.href='https://mani-hab.space/admin/statistics/index.php';
    </script>");  
        }  
        else{  
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login failed. Invalid Username or Password. Please try again.');
    window.history.back();
    </script>");  
        }     
    ?>  


