<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'>
	<style>
		 .error{
    	color: red;
    }
		.signin
		{
			height: 400px;
			width: 30%;
			background-color:pink;
			text-align: center;
			border-radius: px;
			outline: ridge green 10px;

		}
		input{
		margin-bottom: 20px;
border-radius: 24px;
		}
		button{
			margin-bottom: 20px;
			border-radius: 24px;

		}
		  button:active{
        transform: scale(0.95);
    }
	</style>
</head>
<body>
		<?php
	$emailerr= $passworderr="";
	$email= $password="";

	if($_SERVER["REQUEST_METHOD"]=="POST")
{
	
	$email=$_POST["email"];
	if(empty($email))
	{
	$emailerr="email is required";
	}
	else {
		$email=test_input($_POST["email"]);
		 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
	
}
$password=$_POST["password"];
	if(empty($password))
	{
	$passworderr="password is required";
	}
	else {
	$password=test_input($_POST["password"]);
	if(!preg_match("/^[a-zA-Z]*$/", $password)){
		$passworderr="invalid password format";
	}

	}
}	
function test_input ($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
	
<!--<form action="secondpage.php" method="post">-->
 <div class="signin">
         
             	 <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                 <div class="socialmedia">
                    <h1>SIGN IN</h1><br>

                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> <br><br>
                    </div>
                              <input type="email" placeholder="Email" name="email"><span class="error">*<?php echo $emailerr ?></span><br><br>
                <input type="password" placeholder="Password" name="password"><span class="error">* <?php echo $passworderr ?></span><br><br>
                            <span>Forgot your password?</span><br><br>
                            <button>Sign In</button><br>
                    </form>
        </div>
        <?php
echo "<h2>Your Input:</h2>";

echo $email;
echo "<br>";
echo $password;

?>

</body>
</html>