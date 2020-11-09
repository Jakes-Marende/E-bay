<?php
require_once("DBconnect.php");
session_start();

if(isset($_POST["Login"]))
{
	$email=$_POST["email"];
	$password=$_POST["password"];
	$role=$_POST["role"];
	


	$query="SELECT * FROM users WHERE email='$email' AND password = '$password' AND role='$role'";

	$result=mysqli_query($conn,$query);

	if(!$result)
	{
		die("Query failed:".mysqli_error());
	}
	else
	{
		$row=mysqli_fetch_array($result);
		if ($role=="buyer")
		{	
			
			if ($email==$row['email'] && $password==$row['password']) 
			{
				setcookie('email', $email, time()+60*60+7 );
				$_SESSION['email'] = $row['email'];
				echo "<script>alert('Login successful!')</script>";
				echo "<script>window.location='buyer.php'</script>";

				
			}	
			else
			{
				echo "<script>alert('Invalid email or password')</script>";
				echo "<script>window.location='login.php'</script>";

			}
		}	
		if ($role=="seller")
		{
			if ($email==$row['email'] && $password==$row['password']) 
			{
				setcookie('email', $email, time()+60*60+7 );
				$_SESSION['email'] = $row['email'];
				echo "<script>alert('Login successful!')</script>";
				echo "<script>window.location='seller.php'</script>";
			}	
			else
			{
				echo "<script>alert('Invalid email or password')</script>";
				echo "<script>window.location='login.php'</script>";
			}
			
		}	

		
	}
}
/*
<?php
$uname=$_POST['name'];
$pass=$_POST['pass'];
if($uname=='' || $pass=='')
{
        header("Location:login.php?id=Some fields are empty");
}

$qry=mysql_query("SELECT * FROM login WHERE user='$uname'", $con);
if(!$qry)
{
die("Query Failed: ". mysql_error());
}
else
{
   $row=mysql_fetch_array($qry);
if($uname==$row['user'])
{
    else if($uname==$row['user'] && $pass==$row['password'])
    {
            header("Location: welcome.php?id=$uname");    
    }
    else
    {
                header("Location:login.php?id=username already taken or your password is incorrect. Please try again");
        }
    }
else
{   mysql_query("alter table login auto_increment = 1;");
    $qry_name=mysql_query("INSERT INTO login(user,password) VALUES('$uname','$pass')");
    header("Location: welcome.php?id=$uname");
    }    
  }
  ?>
*/


?>