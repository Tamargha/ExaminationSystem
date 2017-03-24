<?php
	$msg5="";
	if(isset($_REQUEST['btn_reg']))
{
	$link=mysql_connect("localhost","root","");
	mysql_select_db("student");
	$qry="insert into stu_info
			(stu_name,stu_gender,stu_email,stu_pwd,stu_dob,stu_address,stu_country,stu_state,stu_phoneno,stu_course)values
			('$_REQUEST[txt_name]','$_REQUEST[gender]','$_REQUEST[txt_email]','$_REQUEST[txt_pwd]','$_REQUEST[txt_dob]','$_REQUEST[txt_address]','$_REQUEST[state]','$_REQUEST[country]','$_REQUEST[phoneno]','$_REQUEST[COURSE_NAME]')";

	mysql_query($qry);
	if(mysql_affected_rows()>0)
	{
		$msg5="<font color='green'>RECORD INSERTED</font>";
	}
	else
	{
		$msg5="<font color='red'>Error in inserting record</font>".mysql_error();
	}
	mysql_close();
}
?>
<html>
	<head>
		<style type="text/css">
			input[type=text],[type=email],[type=password],[type=date],select{
			width:250px;
			border-color:pink;
			border-radius:10px;
			height=30px;
			}
			input:hover{
			border-color:blue;
			background-color:maroon;
			}

		</style>
	</head>

	<body background="bck.jpg"><center>
			<table width="80%">
				<tr>
					<td align="top"><?php include './header1.php'; ?>

					</td>
				</tr>
				<tr>
					<td align="top" height="450px">
		<div align=center>
		<p> <font color="Green" face="Arial" size="40"><B></B></font> </p></div>
		<form method="get">
			<fieldset>
				<legend>Registration Form</legend>
				<table align="center" width 100%>
				<tr>
					<td width="25%"><label>Name</label></td><td><input type="text" name="txt_name" value=""/></td>
				<tr>
				<tr>
					<td><label>Gender</label></td><td>Male<input type="radio" name="gender" value="Male"/>Female<input type="radio" name="gender" value="Female"/></td>
				</tr>
				<tr>
					<td><label>E-mail</label></td><td><input type="email" name="txt_email" value=""/></td>
				</tr>
				<tr>
					<td><label>Password</label></td><td><input type="password" name="txt_pwd" value=""/></td>
				</tr>
				<tr>
					<td><label>Date of Birth</label></td><td><input type="date" name="txt_dob" value=""/></td>
				</tr>
				<tr>
					<td><label>Address</label></td><td><textarea name="txt_address"></textarea></td>
				</tr>
				<tr>
					<td><label>State</label></td>
					<td><select name="state">
						<option value="Kolkata">Kolkata</option>
						<option value="Bemgaluru">Bengaluru</option>
						<option value="Chennai">Chennai</opytion>
						<option value="others">Others</option></select>
					</td>
				</tr>
				<tr>
					<td><label>Country</label></td><td><select name="country"><option value="India">India</option>
										                           <option value="USA">USA</option>
													   <option value="UK">UK</option></select></td>

				</tr>
				<tr>
					<td><label>Phone No.</label></td><td><input type="number" name="phoneno" value=""/></td>
				<tr>
				<tr>
					<td><label>COURSE NAME</label></td><td><select name="COURSE NAME"><option value="CAT"/>CAT</option>
					<option value="GRE"/>GRE</option><option value="GATE"/>GATE</option></td>
				<tr>
				<br>
				<tr>
				<td><td>
				<input type="submit" name = "btn_reg" value = "Click here to register" style="width: 140px; height: 33px"/></td>
				</td>
				</tr>
				<tr>
					<td><?php echo $msg5; ?></td>
				<tr>
				</fieldset>
			</table>
		</td>
				</tr>
				<tr>
					<td align="top"><?php include './footer1.php'; ?>

					</td>
				</tr>
					</form>
			</table>

		</center>
	</body>
</html>
