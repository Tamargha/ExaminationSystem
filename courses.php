<html>
	<head>

	</head>
	<body>
		<center>
			<table width="80%">
				<tr>
					<td align="top"><?php include './header1.php';?>

					</td>
				</tr>
				<tr>
					<td align="top" height="450px">
						<?php
							include './logic1.php';
							$res=ExecuteQuery("select * from cor_info");
							echo "<table width='100%'>";
							$i=0;
							while($r=mysql_fetch_assoc($res))
							{
								if($i==0)
									echo "<tr>";
									echo "<td width='33%'>";
									echo "<table width='100%'>";
									echo "<tr><td valign='top' colspan=2><a href='gre.php?pid=$r[cor_id]'><img src='$r[cor_image]' width='200' height='200'></a></td></tr>";
									echo "<tr><td>Name</td><td>$r[cor_name]</td></tr>";
									echo "<tr><td>Price</td><td>$r[cor_price]</td></tr>";
									echo "</table>";
									echo "</td>";
									$i++;
								if($i==3)
								{
									echo "</tr>";
									$i=0;
								}
							}
							echo "</table>";
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
