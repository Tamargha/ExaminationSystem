<?php
session_start();

if(!isset($_SESSION['uid']))
{
	header("location:login.php");
}
?>


<html>
	<head>

	</head>
	<body>
		<center>
			<table width="100%">
				<tr>
					<td valign="top"><?php include './header1.php';?></td>
				</tr>
				<tr><td><a href='upload.php'>CLICK HERE TO UPLOAD A FILE</a></td></tr>
				<tr>

					<td valign="top" height="450px">

						<?php
							$link=mysql_connect("localhost","root","");
							mysql_select_db("student");
							$res=mysql_query("select * from stu_info where stu_id = $_SESSION[uid]");
							if(mysql_affected_rows()>0)
							{
								echo "<table width='90%' border='2'>";
								echo "<tr><th>Name</th><th>Gender</th><th>Email</th><th>DOB</th><th>State</th><th>Phone no</th><th>Propic</th></tr><tr></tr><tr></tr>";

								while($r=mysql_fetch_array($res))
								{
									echo "<tr>";
									echo "<td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[5]</td><td>$r[7]</td><td>$r[9]</td><td>$r[10]</td><td><a href='delete.php?id=$r[0]'>Delete</a></td>
									<td><a href='moredetails.php'>More Details</a></td>";
									echo "</tr>";
								}
								echo "</table>";
								mysql_close($link);
							}
							else
							{
								echo "NO RECORD FOUND";
							}
						?>
					</td>
				</tr>
				<tr>
					<td align="top"><?php include './footer1.php'; ?>

					</td>
				</tr>
			</table>
		</center>
	</body>
</html>
