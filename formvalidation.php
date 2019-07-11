<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css'>
	<style>
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
	
	<form action="secondpage.php" method="post">
 <div class="signin">
             <form>
                 <div class="socialmedia">
                    <h1>SIGN IN</h1><br>

                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> <br><br>
                    </div>
                            <input type="email" placeholder="Email"><br>
                            <input type="password" placeholder="Password"><br>
                            <span>Forgot your password?</span><br><br>
                            <button>Sign In</button><br>
                    </form>
        </div>

</body>
</html>