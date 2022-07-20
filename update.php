<?php 
    include("connect.php");
	if(isset($_POST['btnupdate']))
	{
		$id=$_POST['txtid'];
		$name=$_POST['txtname'];
		$email=$_POST['txtemail'];
		$mobile=$_POST['txtmobile'];
		$password=$_POST['txtpass'];

		$update="UPDATE crud SET id='$id' , name='$name' , email='$email' , mob_no='$mobile' ,password='$password' where id='$id'";
		mysqli_query($conn,$update);
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
    <?php
        $id=$_GET['id'];
        $sql="SELECT * FROM crud where  id='$id'";
        $result=mysqli_query($conn,$sql);
        while ($row=mysqli_fetch_assoc($result)) 
{
    ?>
	<table>

		<tr>
			<td>
				Id
			</td>
			<td>
				<input type="text" name="txtid" value="<?php echo $row['id'];?>">
			</td>
		</tr>
		
		<tr>
			<td>
				Name
			</td>
			<td>
				<input type="text" name="txtname" value="<?php echo $row['name'];?>">
			</td>
		</tr>
		<tr>
			<td>
				Email
			</td>
			<td>
				<input type="email" name="txtemail" value="<?php echo $row['email'];?>">
			</td>
		</tr>
		<tr>
			<td>
				Mobile No.
			</td>
			<td>
				<input type="text" name="txtmobile" value="<?php echo $row['mob_no'];?>">
			</td>
		</tr>
		<tr>
			<td>
				password
			</td>
			<td>
				<input type="password" name="txtpass" value="<?php echo $row['password'];?>">
			</td>
		</tr>
        <?php
            }
        ?>   
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnupdate" value="Update">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
</center>