<?php 
	include_once("config.php");
	include_once("style.php");
	include_once("adminheader.php");
	error_reporting(0);

?>	
<?php 
if(isset($_GET['select'])){
$query2 = "select * from admission_inquiries where aid='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
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

  <!-- Carousel Start -->
  
                       <div class="container">




<form action="" method="post" enctype="multipart/form-data" name="addroom">
<center>

 <style>
  body {
            background-image: url('ad.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        
</style>
<br>
<br>
<br>
<br>
<center><font color="black" size="8">Status For  User Details </font></center>
</br>

<b> Id</b><br />
 <input name="aid" type="text" value="<?php  echo $row['aid']; ?>" readonly />
 <br />

<b> Name</b><br />
 <input name="name" type="text"  value="<?php  echo $row['name']; ?>"readonly />
 <br /> 
 <b>EmailId </b><br />
 <input name="email" type="text" value="<?php  echo $row['email']; ?>" readonly />
 <br />

 
<b>Mobile </b><br />
 <input name="phone" type="text" value="<?php  echo $row['phone']; ?>" readonly />
 <br />

 <b>  Standard</b><br />
 <input name="standard" type="text" value="<?php  echo $row['standard']; ?>" readonly />
 <br />

<b>Fees_details </b><br />
 <input name="fees_details" type="text" value="<?php  echo $row['fees_details']; ?>" required /> 
 <br />
 <b>Message </b><br />
 <input name="message" type="text" value="<?php  echo $row['message']; ?>" readonly /> 
 <br />
  <b>Response </b><br />
 <input name="response" type="text" value="" required /> 
 <br />

  <input type="submit" name="submit" value="update" id="button1" />
  <br>


 </center>
 </form>

</div>


<?php
 
 
if(isset($_POST['submit'])){
$query = "update admission_inquiries set action='".$_POST['response']."'  where aid= '".$_GET['select']."'";
	echo $query;
      
      
	   
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';

	}
	else{
		echo 'NOT UPDATE';
	}
	header("location:viewenquiry.php");
	exit;
//}
 }

 
?>

<br>
<br>
<br>
<br>
<br>

<?php 
	include_once("footer.php");
	?>