<!DOCTYPE html>
<html>
<head>
	<title></title>
	    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'>
	<link rel="stylesheet" type="bootstrap.css">
	<style>
	 .signup{
        height: px;
        width:50%;
        position: ;
        background-color:pink;
        text-align: center;
        top:px;
        left:px;
        border-radius: 24px;
        padding-bottom: 20px;
       
    }
    button{
    	border-radius: 24px;
    	 margin-bottom: 20px;

    }
    input{
    	border-radius: 24px;
    	 margin-bottom: 20px;
    }
    .error{
    	color: red;
    }
</style>
</head>
<body>
	<?php
	$nameerr=$emailerr= $passworderr=$gendererr="";
	$name=$email=$gender= $password="";

	if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$name=$_POST["fname"];
	if(empty($name))
	{
		$nameerr="name is required";
	}
	else {
	$name=test_input($_POST["fname"]);
	}
	if(!preg_match("/^[a-zA-Z]*$/", $name)){
		$nameerr="only letter and whitespace allowed";
	}	
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
	}
}	
function test_input ($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
	

	
	<div class="signup">
		 <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h3>Create Account</h3>
                <div class="social media">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div> <br>
               Name: <input type="text" placeholder="Name" value="" name="fname"> <span class="error">* <?php echo $nameerr ?></span><br><br>
               email: <input type="email" placeholder="Email" name="email"><span class="error">*<?php echo $emailerr ?></span><br><br>
                password:<input type="password" placeholder="Password" name="password"><span class="error">* <?php echo $passworderr ?></span><br><br>
                <input type="radio" name="gender" value="male"> <label>male</label>
                 <input type="radio" name="gender" value="female"> <label>female</label>
                  <input type="radio" name="gender" value="other"> <label>other</label><br>
                <span>or use your email for registration</span><br><br>
               <button>Sign up</button><br>
<label>Comment</label>
<textarea placeholder="write some comment" rows="5" cols="30"></textarea>
            </form>
</div>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $gender;
?>

            

</body>
</html>