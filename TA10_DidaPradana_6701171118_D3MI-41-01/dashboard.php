<?php
require_once ("class.php");
if(@$_SESSION['sukses'] == NULL) {
        ?>
        <script>
            alert("Acces Denied");
            location = "login.php";
        </script>
        <?php
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href="lihatData.php">Lihat Data <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="newData.php">Tambah Data</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="login.php?logout=exit">Log Out</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<table width="70%">
		<form action="dashboard.php" method="POST">
			<tr>
				<th>Search</th>
			</tr>
			<tr>
				<td><input type="text" name="search" placeholder="Nama"></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim"></td>
			</tr>
		</form>
	</table>
	<br>
	<br>
	<table border="1" align="center" width="70%" class="table table-dark">
		<tr>
			<thead>
				<th>Nim</th>
				<th>Nama</th>
				<th>Tanggal Lahir</th>
				<th>Email</th>
				<th>Kelas</th>
				<th>Hobi</th>
				<th>Genre Film</th>
				<th>Tempat Wisata</th>
				<th>Action</th>
			</thead>
		</tr>
		<?php 
			@$search = $_POST['search'];
			$result = $proses->view();
				
			if (mysqli_num_rows($result)>0) {
				while ($row = mysqli_fetch_assoc($result)) {
				?>
				<tr>
					<td><?php echo $row['nim']?></td>
					<td><?php echo $row['nama']?></td>
					<td><?php echo $row['tgl_lahir']?></td>
					<td><?php echo $row['email']?></td>
					<td><?php echo $row['kelas']?></td>
					<td><?php echo $row['hobi']?></td>
					<td><?php echo $row['genre']?></td>
					<td><?php echo $row['wisata']?></td>
					<td><a href="class.php?delete=<?php echo $row['nim']; ?>"> Hapus</a> | <a href="edit.php?nim=<?php echo $row['nim']; ?>"> Edit</a></td>
				</tr>
				<?php
				}
			} else{
				echo "0 results";
			}
	 	?>
	 </table>
</body>
</html>