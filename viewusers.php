<?php
include('adminheader.php');
include('style.php');
include('config.php');
error_reporting(0);
session_start();
?>

 <style>
        body {
            background-image: url('ad.jpg');
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

<form method="post">

    <div>

        <br>
        <br>
        <br>
        <br>

        <br>

        <h2 align="center">User Details</h2>

        <table border="2" cellspacing="6" class="displaycontent" width="1000" height="120" style="border:4px solid lightblue;" align="center">
            <tr>

                <th bgcolor=white><font color=black size=2>id</font></th>
                <th bgcolor=white><font color=black size=2>Name</font></th>
                 	<th bgcolor=white><font color=black size=2>Email</font></th>
                <th bgcolor=white><font color=black size=2>Password</font></th>
			  <th bgcolor=white><font color=black size=2>Mobile</font></th>
                <th bgcolor=white><font color=black size=2>Address</font></th>
			
                <th bgcolor=white><font color=black size=2>DOB </font></th>
				  <th bgcolor=white><font color=black size=2>Update</font></th>
			
                <th bgcolor=white><font color=black size=2>Delete </font></th>
			
			

         

            </tr>
            <br><br>
            <br>
            <br>

            <br>
            <?php

            $query = "SELECT * FROM user ";
            $result = mysql_query($query) or die(mysql_error());
            while ($row = mysql_fetch_assoc($result)) {
            ?>
                <tr>

                    <td bgcolor=white><font color=black size=2><?php echo $row['id']; ?></font></td>
                    <td bgcolor=white><font color=black size=2><?php echo $row['name']; ?></font></td>
				   <td bgcolor=white><font color=black size=2><?php echo $row['email']; ?></font></td>
					 <td bgcolor=white><font color=black size=2><?php echo $row['password']; ?></font></td>
             	 <td bgcolor=white><font color=black size=2><?php echo $row['mobile']; ?></font></td>
                    <td bgcolor=white><font color=black size=2><?php echo $row['address']; ?></font></td>
              <td bgcolor=white><font color=black size=2><?php echo $row['dat']; ?></font></td>
				 <td  bgcolor=white><font color=black size=2 ><a href="update.php?select=<?php echo $row['id'];?>">Update</a></font></td>
		<td  bgcolor=white><font color=black size=2><a href="?delete=<?php echo $row['id'];?>">Delete</a></font></td>

                </tr>
            <?php }  ?>

        </table>
    </div>

</form>


<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from user where id='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:viewusers.php");
	exit;
	}
?>
<br><br>
<br>
<br>
<br>
<br>
<br>

<?php
include('footer.php');
?>
