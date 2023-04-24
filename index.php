<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<style>
		body{
			background: #edede9;
		}
		div{
			position: relative;
			top: 10%;
			margin: auto;
		}
		div img{
			position: relative;
			width: 10rem;
			top: 100px;
			left: 45%;
		}
		/* center the form */
		form {
			position: relative;
			top: 150px;
			margin: 0 auto;
			width: 300px;
			border: 1px solid #ccc;
			box-shadow: 10px 10px 10px 10px #888888;
			border-radius: 1.6rem;
			padding: 20px;
		}
		
		/* style the labels and inputs */
		label {
			display: block;
			margin-bottom: 10px;
		}
		
		input[type="text"],
		input[type="password"] {
			margin: auto;
			display: block;
			width: 100%;
			padding: 5px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-sizing: border-box;
		}
		
		input[type="submit"] {
			position: relative;
			margin-top: 20px;
			left: 100px;
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
	</style>
</head>
<body>
	<div>
		<img src="/images/lg.png">
	<form method="post" action="login.php">
	<h2 style="text-align:center;"><u> Login </u></h2>
		<label>Username:</label>
		<input type="text" name="username">
		<label>Password:</label>
		<input type="password" name="password">
		<input type="submit" value="Submit">
	</form>
	</div>
</body>
</html>
