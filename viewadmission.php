<?php
include("style.php");
include("config.php");
include("adminheader.php");
error_reporting(0);

$query = "SELECT * FROM admission_form where status='waiting'";
$result = mysql_query($query) or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Admission</title>
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
</head>
<body>
<br><br><br><br><br><br><br><br>



<h2>View Admission</h2>

<table border="2" cellspacing="6" class="displaycontent" width="1000" height="120" style="border:4px solid lightblue;" align="center">
    <tr>
        <th bgcolor="white"><font color="black" size="2">ID</font></th>
        <th bgcolor="white"><font color="black" size="2">Name OF the Child</font></th>
        <th bgcolor="white"><font color="black" size="2">NickName</font></th>
        <th bgcolor="white"><font color="black" size="2">Sex</font></th>
        <th bgcolor="white"><font color="black" size="2">DOB</font></th>
        <th bgcolor="white"><font color="black" size="2">Email</font></th>
        <th bgcolor="white"><font color="black" size="2">Home Address</font></th>
        <th bgcolor="white"><font color="black" size="2">State </font></th>
        <th bgcolor="white"><font color="black" size="2">Pin Code</font></th>
        <th bgcolor="white"><font color="black" size="2">Father Name</font></th>
        <th bgcolor="white"><font color="black" size="2">Occupation</font></th>
        <th bgcolor="white"><font color="black" size="2">Mobile </font></th>  
		<th bgcolor="white"><font color="black" size="2">MotherName</font></th>
        <th bgcolor="white"><font color="black" size="2">Occupation </font></th> 
		<th bgcolor="white"><font color="black" size="2">Father Edu.Qln</font></th>
        <th bgcolor="white"><font color="black" size="2">Mother Edu.Ql </font></th> 
		<th bgcolor="white"><font color="black" size="2">Mother Tongue</font></th>
        <th bgcolor="white"><font color="black" size="2">Standard </font></th>
		 <th bgcolor="white"><font color="black" size="2">Child Profile </font></th>
		  <th bgcolor="white"><font color="black" size="2">Response </font></th>
    </tr>

    <?php
    while ($row = mysql_fetch_assoc($result)) {
    ?>
        <tr>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['fid']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['cname']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['gname']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['sex']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['dob']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['email']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['addr']; ?></font></td>
           
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['state']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['pincode']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['fname']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['focc']; ?></font></td>
			 <td bgcolor="white"><font color="black" size="2"><?php echo $row['mob']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['mname']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['mocc']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['qualification']; ?></font></td>
			  <td bgcolor="white"><font color="black" size="2"><?php echo $row['mqualification']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['mtougue']; ?></font></td>
            <td bgcolor="white"><font color="black" size="2"><?php echo $row['standard']; ?></font></td>


			 <td bgcolor="white"><font color="black" size="2"><img src="<?php echo $row['uimg']; ?>" width="80" height="70"></font></td>
			 	 <td  bgcolor=white><font color=black size=2 ><a href="admiss.php?select=<?php echo $row['fid'];?>">Admission</a></font></td>
        </tr>
    <?php } ?>

</table>

</body>
</html>

<br><br><br><br><br><br><br><br>

<?php
include("footer.php");
?>
