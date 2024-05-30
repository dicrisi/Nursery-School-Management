<?php 
include_once("config.php");
include_once("style.php");
include_once("adminheader.php");
error_reporting(0);

if(isset($_GET['select'])){
    $query2 = "SELECT * FROM admission_form WHERE fid='".$_GET['select']."'";
    $result = mysql_query($query2);
    if(mysql_num_rows($result)){
        $row = mysql_fetch_assoc($result);
    }
}

if(isset($_POST['submit'])) {
    $id = $_POST['pid'];
    $cname = $_POST['cname'];
    $email = $_POST['email'];
    $addr = $_POST['addr'];
    $mob = $_POST['mob'];
    $standard = $_POST['standard'];
    $amount = $_POST['amount'];

    // Insertion query for the payment table
    $insert_query = "INSERT INTO payment (pid, cname, email, addr, mob, standard, amount) 
                     VALUES ('$pid', '$cname', '$email', '$addr', '$mob', '$standard', '$amount')";
    
    if(mysql_query($insert_query)) {
        // Update status in admission_form table
        $update_query = "UPDATE admission_form SET status = 'updated' WHERE fid = '$id'";
        mysql_query($update_query);

        echo '<script> alert("Payment details added successfully!");</script>';
    } else {
        echo '<script> alert("Failed to add payment details!");</script>';
    }
}

?>

<style>
h2 {
    color: white;
    font-family: verdana;
    font-size: 240%;
}

p  {
    color: white;
    font-family: Georgia, serif;
    font-size: 100%;
    font-weight: bold;
}
</style>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data" name="addroom">
        <center>
            <style>
                body {
                    background-image: url('ad.jpg');
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: 100% 100%;
                }
            </style>
            <br>
            <br>
            <br>
            <br>
            <center><font color="black" size="8">Admission Fees Details</font></center>
            </br>

            <b>ID</b><br />
            <input name="pid" type="text" value="<?php echo $row['fid']; ?>" readonly /><br />

            <b>Name of the child</b><br />
            <input name="cname" type="text" value="<?php echo $row['cname']; ?>" readonly /><br /> 

            <b>EmailId </b><br />
            <input name="email" type="text" value="<?php echo $row['email']; ?>" readonly /><br />

            <b>Address</b><br />
            <input name="addr" type="text" value="<?php echo $row['addr']; ?>" readonly /><br />
 
            <b>Mobile </b><br />
            <input name="mob" type="text" value="<?php echo $row['mob']; ?>" readonly /><br />

            <b>Standard</b><br />
            <input name="standard" type="text" value="<?php echo $row['standard']; ?>" readonly /><br />

            <b>Amount</b><br />
            <input name="amount" type="text" value="" required /><br />

            <input type="submit" name="submit" value="Update" id="button1" /><br>
        </center>
    </form>
</div>

<?php 
include_once("footer.php");
?>
