<!DOCTYPE html>
<html>
<head>
	<title>Edit Password</title>
</head>
<body>
	<?php 
	require_once ('class.php');
    $username     = $_GET['editp'];
    $sql = $proses -> select_datap($username);
    $row    = mysqli_fetch_assoc($sql);

	 ?>
	<form method="post" action="class.php?editp=<?php echo $row['username']; ?>">
		<table>
			<tr>
				<td>Username baru</td>
				<td> : </td>
				<td> <input type="text" name="username" value="<?php echo $row['username'] ?>"> </td>
			</tr>
			<tr>
				<td>Password baru</td>
				<td> : </td>
				<td> <input type="password" name="password"> </td>
			</tr>
			<tr>
				<td>Masukan Ulang Password</td>
				<td> : </td>
				<td> <input type="password" name="passwordre"> </td>
			</tr>
			<tr>
				<td> <input type="submit" name="kirim" value="Edit"> </td>
			</tr>
		</table>
	</form>
</body>
</html>