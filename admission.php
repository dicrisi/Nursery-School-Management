<?php
include("style.php");
include("config.php");
include("userheader.php");
error_reporting(0);

if(isset($_POST['register'])) {
    $cname = $_POST['cname'];
    $gname = $_POST['gname'];
    $sex = $_POST['sex'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $addr = $_POST['addr'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $fname = $_POST['fname'];
    $focc = $_POST['focc'];
    $mob = $_POST['mob'];
    $mname = $_POST['mname'];
    $mocc = $_POST['mocc'];
	$qualification = $_POST['qualification'];
    $mqualification = $_POST['mqualification'];
    $mtougue = $_POST['mtougue'];
    $que = $_POST['standard'];
    $uimg = $_POST['uimg'];

    $query = "INSERT INTO `admission_form` VALUES (null,'$cname','$gname','$sex','$dob','$email','$addr','$state','$pincode','$fname','$focc','$mob','$mname','$mocc','$qualification','$mqualification','$mtougue','$standard','$uimg' ,'waiting')";

    if(mysql_query($query)) {
        echo 'SUCCESSFULLY';
        echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
    } else {
        echo 'NOT REGISTERED';
    }
    header("location: admission.php");
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

<!DOCTYPE html>
<html>
<head>
    <title>Admission Form</title>
</head>
<body>

<style>
    body {
        background-image: url('us.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        color: white;
    }

    h2 {
        text-align: center;
    }

    table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
        border: 2px solid lightblue;
    }

    th, td {
        border: 1px solid white;
        padding: 8px;
        text-align: center;
        font-size: 16px;
    }

    th {
        background-color: brown;
        color: black;
    }

    tr:nth-child(even) {
        background-color: #444;
    }

    tr:nth-child(odd) {
        background-color: #222;
    }

    tr:hover {
        background-color: #666;
    }

    a {
        color: lightblue;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
</style>

<br>
<br>
<br>
<br>
<br>
<br>


<h2>Student Admission Form</h2>

<form method="post" action="">
    <table>
        <tr>
            <td><b>Name OF the Child</b></td>
            <td><input type="text" name="cname" value="" required /></td>
        </tr>
        <tr>
            <td><b>NickName(if any)</b></td>
            <td><input type="text" name="gname" value="" required /></td>
        </tr>
        <tr>
            <td><b>Sex</b></td>
            <td>
                <select name="sex" required>
                    <option value="">Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><b>DOB</b></td>
            <td><input type="date" name="dob" value="" required /></td>
        </tr>
        <tr>
            <td><b>Email</b></td>
            <td><input type="email" name="email" value="<?php echo $_SESSION['email']; ?>" readonly /></td>

        </tr> 
        <tr>
            <td><b>Home Address</b></td>
            <td><input type="text" name="addr" value="" required /></td>
        </tr>
        <tr>
            <td><b>State</b></td>
            <td><input type="text" name="state" value="" required /></td>
        </tr>
        <tr>
            <td><b>Pin Code</b></td>
            <td><input type="text" name="pincode" value="" required /></td>
        </tr>
        <tr>
            <td><b>Father Name</b></td>
            <td><input type="text" name="fname" value="" required /></td>
        </tr>
        <tr>
            <td><b>Occupation</b></td>
            <td><input type="text" name="focc" value="" required /></td>
        </tr>
        <tr>
            <td><b> Mobile</b></td>
            <td><input type="text" name="mob" value="" required /></td>
        </tr>
        <tr>
            <td><b>MotherName</b></td>
            <td><input type="text" name="mname" value="" required /></td>
        </tr>
        <tr>
            <td><b>Occupation</b></td>
            <td><input type="text" name="mocc" value="" required /></td>
        </tr>
        <tr>
            <td><b>Father Edu.Qln</b></td>
            <td><input type="text" name="qualification" value="" required /></td>
        </tr>
        <tr>
            <td><b>Mother Edu.Qln</b></td>
            <td><input type="text" name="mqualification" value="" required /></td>
        </tr>
        <tr>
            <td><b>Mother Tongue</b></td>
            <td><input type="text" name="mtougue" value="" required /></td>
        </tr>
        <tr>
            <td><b>Standard</b></td>
            <td><input type="text" name="standard" value="" required /></td>
        </tr>
        <tr>
            <td><b>Child Profile</b></td>
            <td><input type="file" name="uimg" required></td>
        </tr>
    </table>
    <br>
    <center><input type="submit" name="register" value="Register" style="color: #000000" /></center>
    <br>
</form>

</body>
</html>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
include("footer.php");
?>
