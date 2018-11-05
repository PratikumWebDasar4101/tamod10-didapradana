<?php 
session_start();
if($_SESSION['sukses'] == NULL) {
        ?>
        <script>
            alert("Acces Denied");
            location = "login.php";
        </script>
        <?php
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row w-50 m-auto">
			<div class="col pt-3">
				<h1 class="text-center">Tambah Data</h1>
				<hr>
				<form action="class.php?tambah=input" method="POST">
					<div class="form-group">
						<label for="inputNIM">NIM : </label>
						<input type="text" id="inputNIM" class="form-control" name="nim">
					</div>
					<div class="form-group">
						<label for="inputNama">Nama :</label>
						<input type="text" id="inputNama" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label for="inputTGL">Tanggl Lahir :</label>
						<input type="date" id="inputTGL" class="form-control" name="tgl_lahir">
					</div>
					<div class="form-group">
						<label for="inputEmail">Email :</label>
						<input type="email" id="inputEmail" class="form-control" name="email">
					</div>
					<div class="form-group">
						<label for="inputKelas">Kelas :</label>
						<input type="text" id="inputKelas" class="form-control" name="kelas">
					</div>
					<div class="form-group row">
						<label class="pl-3">Hobi : </label>
						<div class="form-check">
							<input type="checkbox" name="hobi[]" id="cekMakan" value="Makan">
							<label for="cekMakan">Makan</label>
						</div>
						<div class="form-check">
							<input type="checkbox" name="hobi[]" id="cekMinum" value="Minum">
							<label for="cekMinum">Minum</label>
						</div>
						<div class="form-check">
							<input type="checkbox" name="hobi[]" id="cekTidur" value="Tidur">
							<label for="cekTidur">Tidur</label>
						</div>
					</div>
			 		<div class="form-group row">
						<label class="pl-3">Genre : </label>
						<div class="form-check">
							<input type="checkbox" name="genre[]" id="cekHorror" value="Horror">
							<label for="cekHorror">Horror</label>
						</div>
						<div class="form-check">
							<input type="checkbox" name="genre[]" id="cekAction" value="Action">
							<label for="cekAction">Action</label>
						</div>
						<div class="form-check">
							<input type="checkbox" name="genre[]" id="cekIsekai" value="Isekai">
							<label for="cekIsekai">Isekai</label>
						</div>
					</div>	

					<div class="form-group row">
						<label class="pl-3">Tempat Wisata : </label>
						<div class="form-check">
							<input type="checkbox" name="wisata[]" id="cekJogjakarta" value="Jogjakarta">
							<label for="cekJogjakarta">Jogjakarta</label>
						</div>
						<div class="form-check">
							<input type="checkbox" name="wisata[]" id="cekSamarinda" value="Samarinda">
							<label for="cekSamarinda">Samarinda</label>
						</div>
						<div class="form-check">
							<input type="checkbox" name="wisata[]" id="cekPalembang" value="Palembang">
							<label for="cekPalembang">Palembang</label>
						</div>
					</div>
					<center><input type="submit" class="btn btn-primary" value="Kirim"> <input type="reset" class="btn btn-danger" value="Reset"></center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php 

?>
