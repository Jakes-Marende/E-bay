<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input{
			width: 25%;
			background-color: white;
			color: black;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type=submit]{
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 25%;
			opacity: 0.9;
		}
		/* Extra styles for the cancel button */
		/*.resetbtn{
			padding: 14px 20px;
			background-color: #f44336;
		}
		.resetbtn, .loginbtn{
			float: center;
			width: 25%;
		}*/
		legend{
			text-align: center;
			font-size: 2em;
		}
		fieldset{
			text-align: center;
			font-size: 2em;
		}
	</style>
</head>
<body>
	<form action="process_register.php" method="POST">
		<fieldset>
			<legend>Registration Details</legend>
			<label for="userName"><b>User_Name:</b></label><br>
			<input type="text" name="userName" id="userName" required><br>

			<label for="email"><b>Email Address:</b></label><br>
			<input type="email" name="email" id="email" required><br>

			<label for="password"><b>Password:</b></label><br>
			<input type="password" name="password" id="password" required><br>

			<b>Select User_Type:</b><br>
			<select name="role" required><br>
				<option value="buyer"><b>Buyer</b></option>
				<option value="seller"><b>Seller</b></option>
			</select><br>

			<label for="city"><b>Location:</b></label><br>
			<input type="text" name="city" id="city" required><br>

			<input type="submit" name="Register"><br>

			<p>Regular customer, login<a href="login.php"> here</a></p>
		</fieldset>	
	</form>

</body>
</html>