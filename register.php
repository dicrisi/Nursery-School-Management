<?php
include('header.php');
include('style.php');
include('config.php');

?>

<?php

if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `user` VALUES (null,'".$_POST['name']."','".$_POST['email']."', '".$_POST['password']."', '".$_POST['mobile']."' ,'".$_POST['address']."' ,'".$_POST['dat']."')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:userlogin.php");
//	exit;
 
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User  Registration</title>

   
   <style>
        body {
            background-image: url('reg.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
			color:white;
        }

        h2 {
            text-align: center;
        }

        form {
            text-align: center;
            margin-top: 50px;
        }

        table {
            margin: 0 auto;
        }

        label, input {
            display: inline-block;
            margin-bottom: 10px;
        }

        label {
            width: 120px; 
            text-align: right;
            margin-right: 10px;
        }
    </style>
</head>

<body>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

    <h2>User Registration</h2>

    <form method="post" action="">
        <table>
            <tr>
                <td><b>Name</b></td>
                <td><input type="text" name="name" required></td>
            </tr>
			 <tr>
                <td><b>Email</b></td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td><b>Password</b></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><b>Mobile</b></td>
                <td><input type="text" name="mobile" required></td>
            </tr>
            <tr>
                <td><b>Address</b></td>
                <td><input type="text" name="address" required></td>
            </tr>
            <tr>
                <td><b>DOB</b></td>
                <td><input type="date" name="dat" required></td>
            </tr>
           
        </table>

        <br>

        <input type="submit" name="register" value="Register" style="color: #000000" />
        <br>
        <a href="index.php" style="color: black;">Back </a>
    </form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

    <?php
   include('footer.php');
    ?>

</body>

</html>
