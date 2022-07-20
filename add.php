<?php 
	include("connect.php");
	if(isset($_POST['btninsert']))
	{
		$id=$_POST['txtid'];
		$name=$_POST['txtname'];
		$email=$_POST['txtemail'];
		$mobile=$_POST['txtmobile'];
		$password=$_POST['txtpass'];

		$sql="INSERT INTO crud (name, email, mob_no, password) VALUES ('$name','$email','$mobile','$password')";
		$result=mysqli_query($conn,$sql);
	}
	if(isset($_POST['btninsert']))
	{
		header("location:display.php");
	}
?>
<center>
<!DOCTYPE html>
<html>
<head>
	<title>Page</title>
</head>
<body>
	<br>
	<h1>CRUD Opreation</h1>
<form method="POST">
	<table>

		<tr>
			<td>
				Id
			</td>
			<td>
				<input type="text" name="txtid">
			</td>
		</tr>
		
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="txtname">
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="email" name="txtemail">
			</td>
		</tr>
		<tr>
			<td>
				Mobile No.
			</td>
			<td>
				<input type="text" name="txtmobile">
			</td>
		</tr>
		<tr>
			<td>
				password
			</td>
			<td>
				<input type="password" name="txtpass">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btninsert" value="Insert">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
</center>