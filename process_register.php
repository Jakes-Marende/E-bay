<?php
require_once("DBconnect.php");

if(isset($_POST["Register"]))
{
	$userName=$_POST["userName"];
	$email=$_POST["email"];
	$password=$_POST["password"];
	$role=$_POST["role"];
	$city=$_POST["city"];


	$hashedPassword = password_hash($password, 
                            PASSWORD_DEFAULT); 

	$sql="INSERT INTO users(userName,email,password,role,city)VALUES('$userName','$email','$password','$role','$city')";

	if(mysqli_query($conn,$sql))
	{
		echo "Record added successfully to the database";
		echo "<script>window.location='login.php'</script>";
	}
	else
	{
		echo "Error, record not added to the database".mysqli_error($conn);
	}


}

// Store the string into variable 
//$password = 'Password'; 
  
// Use password_hash() function to 
// create a password hash 

  
//$hash_variable_salt = password_hash($password, 
       // PASSWORD_DEFAULT, array('cost' => 9)); 
  
// Use password_verify() function to 
// verify the password matches 
/*echo password_verify('Password', 
            $hash_default_salt ) . "<br>"; 
  
echo password_verify('Password', 
            $hash_variable_salt ) . "<br>"; 
  
echo password_verify('Password123', 
            $hash_default_salt ); */







?>