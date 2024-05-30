
<?php
include('userheader.php');
include('style.php');
include('config.php');
error_reporting(0);
?>


<?php

if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `admission_inquiries` VALUES (null,'".$_POST['name']."','".$_POST['email']."',  '".$_POST['phone']."' , '".$_POST['standard']."' , '".$_POST['fees_details']."','".$_POST['message']."' ,'Requested')";

	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:enquiry.php");
//	exit;
 
 }

?>



<?php




$query2 = "select * from user where id='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}

?> 


<style>
    body {
        background-image: url('us.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
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

    label {
        display: inline-block;
        margin-bottom: 10px;
        width: 120px;
        text-align: right;
        margin-right: 10px;
    }

    /* Style for small input boxes */
    input[type="text"].small-input,
    input[type="email"].small-input,
    input[type="tel"].small-input {
        width: 150px;
    }

    /* Style for the "Name" field */
    #name {
        border-color: #ff0000; /* Example border color */
        border-width: 2px; /* Example border width */
    }
</style>

<br>
<br>
<br>
<br><br>
<br>
<br>
<br>
<div class="container">
    <h2>Admission Enquiry Form</h2>
    <form method="post" action="">
	<table>
            <tr>
                <td><b>Name</b></td>
                <td><input type="text" name="name" value="<?php echo $_SESSION['login_user']; ?>" readonly /></td>
            </tr>
			 <tr>
                <td><b>Email</b></td>
                <td><input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly /></td>
            </tr>
            
            <tr>
                <td><b>Mobile</b></td>
                <td><input type="text" name="phone" value="<?php echo $_SESSION['mobile']; ?>" readonly /></td>
            </tr>
			 <tr>
                <td><b>Standard</b></td>
                <td><input type="text" name="standard" value="" required /></td>
            </tr>
            
            <tr>
                <td><b>Fees Details</b></td>
                <td><input type="text" name="fees_details" value="" required /></td>
            </tr>

 <tr>
                <td><b>Message</b></td>
                <td><input type="text" name="message" value="" required /></td>
            </tr>
            
          </table>

		    <br>

        <input type="submit" name="register" value="Register" style="color: #000000" />
        <br>
		  </form>
</div>
<?php include('footer.php'); ?>
