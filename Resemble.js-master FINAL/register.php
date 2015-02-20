<html>
<head>
<title>Register - Friend System</title>
<link rel='stylesheet' href='style.css' />
</head>
<body>

<?php include 'connect.php'; 
error_reporting(E_ALL ^ E_DEPRECATED);
?>

<div class='container'>
	<h3>Register a new account</h3>
	<form method='post'>
	<?php
		if(isset($_POST['submit'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			if(empty($username) or empty($password)){
				$message = "Fill up required fields";
			} else {
				mysql_query("INSERT INTO users VALUES('', '".$username."', '".md5($password)."')");
				$message = "Registration successful.";
			}
			
			
			echo "<div class='box'>$message</div>";
		}
	?>
	User Name: <br/>
	<input type='text' name='username' autocomplete='off'/>
	
	<br/><br/>
	Password : <br/>
	<input type='password' name='password' />
	<br/><br/>
	<input type='submit' name='submit' value='Register' />
	</form>
</div>

</body>
</html>
