<?php
$msg2="";
session_start();
include './logic.php';
if (isset($_REQUEST['Login'])) {
$res = ExecuteQuery("select * from stu_info where stu_email='$_REQUEST[txt_name]' and stu_pwd='$_REQUEST[txt_pwd]'");
if(mysql_affected_rows()>0)
{
	if(isset($_REQUEST['rem']))
	{
		setcookie("mycookie",$_REQUEST['txt_name'],time()+60);
		setcookie("mycookie1",$_REQUEST['txt_pwd'],time()+60);
	}
	$r= mysql_fetch_array($res);
	$_SESSION['uid']=$r[0];
$_SESSION['Name']=$r[1];
//echo $_SESSION['uid'];
$_SESSION['img']=$r[10];
	header("location:detail.php");
}
else {
	$msg2="Invalid username and password";
}
}
 ?>

<html>
	<head>
	<script>
		function Validate()
		{
			flag=true;
			if(document.getElementById("txt1").value=="")
			{
				flag=false;
				document.getElementById("txt1").style="border-color:red";
			}
			else
			{
				document.getElementById("txt1").style="";
			}
			if(document.getElementById("txt2").value=="")
			{
				flag=false;
				document.getElementById("txt2").style="border-color:red";
			}
			else
			{
				document.getElementById("txt2").style="";
			}
			return flag;
		}
	</script>
	</head>
	<body background="bck.jpg">
		<form method="get" onsubmit="return Validate()">
		<center>
			<table width="80%">
				<tr>
					<td align="top"><?php include './header1.php';  ?>

					</td>
				</tr>
				<tr>
					<td align="top" height="450px"><fieldset>
						<legend><B>LOGIN</B></legend>
							<table align="center" width 80%>
								<tr> <td></td></tr>
								<tr>
									<td width="50%">
									<label>Username</label>
									</td>
									<td><input type="Username" id="txt1" name="txt_name" value="<?php if(isset($_COOKIE['mycookie'])) echo $_COOKIE['mycookie']; ?>"/>
									</td>
								</tr>
								<tr>
									<td width="50%">
										<label>Password</label>
									</td>
									<td><input type="Password" id="txt2" name="txt_pwd" value="<?php if(isset($_COOKIE['mycookie1'])) echo $_COOKIE['mycookie1']; ?>"/>
									</td>
								</tr>
								<tr><td>
            <td colspan="2"><input type="checkbox" name="rem" /> Remember me.</td></td>
        </tr>
								<tr>
									<td><td>
										<input type="submit" name = "Login" value = "Login"/>
									</td><?php echo $msg2; ?></td>

								</tr>
								<tr>

								<td width="50%"><a href="registration.php" style="color: #CC0000"><b>If not registered?</b></a></td>
								<td width="50%"><a href="forgot.php" style="color: #CC0000"><b>Forgot Password</b></a></td>

								</tr>
							</table>
						</fieldset>
					</td>
				</tr>
				<tr>
					<td align="top"><?php include './footer1.php'; ?>

					</td>
				</tr>
			</table>
		</center>
	</form>
	</body>
</html>
