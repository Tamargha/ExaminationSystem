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

	<body text="white" background="bck.jpg"><center>
			<table width="80%">
				<tr>
					<td align="top"><?php include './header1.php'; ?>

					</td>
				</tr>
				<tr>
					<td align="top" height="450px">
		<div align=center>
		<p> <font color="Green" face="Arial" size="40"><B></B></font> </p></div>

			<?php


    $h=mysql_connect("localhost","root","");
    mysql_select_db("student");
    $res=mysql_query("select * from stu_info where stu_id=$_SESSION[uid]");
    if(mysql_affected_rows()>0)
    {

				echo "<table align='center' width='100%' border='2'>";
				$i=0;
				$r=mysql_fetch_array($res);

				echo "<tr>";
				echo "<td>Name</td>";
        echo "<td>$r[1]</td>";
        echo "</tr>";

				echo "<tr>";
				echo "<td>Gender</td>";
	      echo "<td>$r[2]</td>";
	      echo "</tr>";

				echo "<tr>";
				echo "<td>E-mail</td>";
	      echo "<td>$r[3]</td>";
	      echo "</tr>";

				echo "<tr>";
				echo "<td>Password</td>";
	      echo "<td>$r[4]</td>";
	      echo "</tr>";

				echo "<tr>";
				echo "<td>DOB</td>";
	      echo "<td>$r[5]</td>";
	      echo "</tr>";

				echo "<tr>";
				echo "<td>Address</td>";
	      echo "<td>$r[6]</td>";
	      echo "</tr>";

				echo "<tr>";
				echo "<td>State</td>";
	      echo "<td>$r[7]</td>";
	      echo "</tr>";

				echo "<tr>";
				echo "<td>Country</td>";
	      echo "<td>$r[8]</td>";
	      echo "</tr>";

				echo "<tr>";
				echo "<td>Phoneno</td>";
	      echo "<td>$r[9]</td>";
	      echo "</tr>";
				echo "</table>";
			}
			else {
				echo "no record";
			}
			mysql_close($h);


			?></table>
			<table>
				<td>
				<a href='detail.php'>Back to details</a>
				</td>
				<td><a href='edit2.php'>Update</a>
				</td>
				</tr>
			</table>

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
