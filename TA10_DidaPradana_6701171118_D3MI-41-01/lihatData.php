<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>
<body>
	<br>
	<a href="dashboard.php"><button type="button" class="btn btn-success">HOME</button></a>
	<br>
	<br>
	 <table border="1" width="40%" class="table table-hover">
	 	
	 	<tr class="table-primary">
	 		<th>Username</th>
	 		<th>Password</th>
	 		<th>Action</th>
	 	</tr>

	 	<?php
			require_once ("class.php");
			$result = $proses->viewprofile();
	 		if (mysqli_num_rows($result)>0) {
	 			while ($row = mysqli_fetch_assoc($result)) {
	 				?>
	 				<tr>
	 				<td><?php echo $row['username']?></td>
	 				<td><?php echo $row['password']?></td>
	 				<td><a href="editp.php?editp=<?php echo $row['username']; ?>"> Edit Password</a>
	 				</tr>
	 				<?php
	 			}
	 		}else{
	 			echo "0 results";
	 		}
	 		
	 	?>
	 </table>

</body>
</html>