<?php
	if(isset($_POST['Add']))
	{
		header("location:add.php");
	}
?>
<?php
	if(isset($_POST['btnupdate']))
	{
		header("location:update.php");
	}
?>
<?php
	if(isset($_POST['btndelete']))
	{
		header("location:delete.php");
	}
?>
<center>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<input type="submit" name="Add" value="Add More">
</form>
<br>

<form method="POST">
	<table>
		<tr>
			<td>
				<input type="text" name="txtserch" placeholder="Serch by Name or id">
			</td>
			<td>
				<input type="submit" name="btnserch" value="Serch">
			</td>
		</tr>
	</table>
</form>

</table>
	<table border="1">
		<tr>
			<th>
				ID
			</th>
			<th>
				Name
			</th>
			<th>
				Email
			</th>
			<th>
				Mobile No.
			</th>
			<th>
				Password
			</th>
			<th>
				Opration
			</th>
			<th>
				Opration
			</th>
		</tr>
<?php
include("connect.php");
if(isset($_POST['btnserch']))
{
	$search = $_POST['txtserch'];
	$sql="SELECT * FROM crud order by id";
	$sql1="SELECT * FROM crud WHERE id='$search' or name LIKE '%$search%'";	
	if(!$search){
		$result=mysqli_query($conn,$sql);
	}
	else{
		$result=mysqli_query($conn,$sql1);
	}
if(mysqli_num_rows($result)>0)
{
	while ($row=mysqli_fetch_assoc($result)) 
{
?>
		<tr>
			<td><center><?php echo $row['id'];?></center></td>
			<td><center><?php echo $row['name'];?></center></td>
			<td><center><?php echo $row['email'];?></center></td>
			<td><center><?php echo $row['mob_no'];?></center></td>
			<td><center><?php echo $row['password'];?></center></td>
			<td>
				<button><a href="update.php?id=<?php echo $row['id'];?>">Update</a> </button>
			</td>
			<td>
				<button><a href="delete.php?id=<?php echo $row['id'];?>">Delete</a> </button>
			</td>
		</tr>
<?php
}
}
?>
</table>
<?php
}
?>
</body>
</html>
</center>