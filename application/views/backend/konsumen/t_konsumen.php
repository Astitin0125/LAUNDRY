
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="container-fluid">
		<h1 class="h3 mb-2 text-garay-800"><?= $judul;?></h1>
		<div class="card shadow mb-4">
			<div class="card body">
				<form method="post" action="<?= base_url()?>konsumen/simpan"?>

				<div class="form-group">
						<input type="text" name="kode_konsumen" value="<?= $kode_konsumen;?>"  class="form-control" readonly>
					</div> 

					<div class="form-group">
						<input type="text" name="nama_konsumen" class="form-control" placeholder="Input Nama Kosumen" required>
					</div>
					<div class="form-group">
						<textarea name="alamat_konsumen" cols="30" rows="5" class="form-control" placeholder="Input Nama Almat" required></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="no_telp" class="form-control" placeholder="Input No Telpon" required>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<button type="reset" class="btn btn-danger">Reset</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
