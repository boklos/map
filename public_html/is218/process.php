<html>
	<head>
		<title>
			form processing
		</title>
	</head>
	<body>
		<?php
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		echo "{$username} : {$password} : {$email}";
		
		if (!($username == "" || $password == "")){
			session_start();
			header("Location: transactions.php");
		}else{
		header("Location: index.php");
		}
		
		//set the session
		$_SESSION['firstname'] = $username;
		$_SESSION['email'] = $email;
	
		
		
		//get the session value
		$name = $_SESSION['firstname'] . " " . $_SESSION['email'];
		echo $name;
		
		?>
		
	</body>
</html>
