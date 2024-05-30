<?php
include("style.php");
include("config.php");
include("userheader.php");
error_reporting(0);
?>

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
<br>
<br>
<br>

<form action="" method="post" >
<center>

<h2>View Admission Fees Details</h2>
<br>

<br>
	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    <th bgcolor=white><font color=black size=2> ID</font></th>
			<th bgcolor=white><font color=black size=2> Name Of the Child</font></th>
			<th bgcolor=white><font color=black size=2> Email</font></th>

			<th bgcolor=white><font color=black size=2>Address</font></th>
				<th bgcolor=white><font color=black size=2> Mobile</font></th>

			<th bgcolor=white><font color=black size=2>Standard </font></th>
			<th bgcolor=white><font color=black size=2>Amount</font></th>
		
			
					


			  
	</tr>
	
	<?php
$query = "SELECT * FROM payment ";


	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       <td bgcolor=white><b><font color=black size=2><?php echo $row['pid']; ?></font><b></td>
		<td bgcolor=white><b><font color=black size=2><?php echo $row['cname']; ?></font><b></td>
		<td bgcolor=white><b><font color=black size=2><?php echo $row['email']; ?></font><b></td>
	
		<td bgcolor=white><b><font color=black size=2><?php echo $row['addr']; ?></font><b></td>
			<td bgcolor=white><b><font color=black size=2><?php echo $row['mob']; ?></font><b></td>
				<td bgcolor=white><b><font color=black size=2><?php echo $row['standard']; ?></font><b></td>
					<td bgcolor=white><b><font color=black size=2><?php echo $row['amount']; ?></font><b></td>
					
					

		
	</tr>
	<?php }  ?>
	
	</table>


</center>
</form>



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