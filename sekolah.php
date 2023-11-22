<?php include 'config/koneksi.php';
include 'template.php' ;?>
<?php $no_ukg = $_SESSION['no_ukg']; ?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Data Sekolah PPL</h1>
		<?php 
			$query = "SELECT * FROM user WHERE no_ukg='$no_ukg' ORDER BY id_user";	
			$result = mysqli_query($koneksi,$query);
			if ($result->num_rows > 0) {
					while($row = mysqli_fetch_assoc($result)){ 
		?>
    <div class="row">
			<div class="col-12">
				<!-- Data Diri -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">Informasi Sekolah PPL</h5>
					</div>
					<div class="card-body">
						<form action="" method="post" enctype="multipart/form-data" target="_self">
							<div class="mb-3">
								<label class="form-label fw-bold">NPSN<span class="text-danger">*</span></label>
								<input type="text" name="npsn_ppl" class="form-control" value="<?= $row['npsn_ppl'];?>">
								<input type="hidden" name="id" id="" value="<?= $row['id_user'];?>">
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">NAMA SEKOLAH<span class="text-danger">*</span></label>
								<input type="text" name="sekolah_ppl" class="form-control" value="<?= $row['sekolah_ppl'];?>">
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">KECAMATAN<span class="text-danger">*</span></label>
								<input type="text" name="kecamatan_ppl" class="form-control" value="<?= $row['kecamatan_ppl'];?>">
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">KOTA/KABUPATEN<span class="text-danger">*</span></label>
								<input type="text" name="kabupaten_ppl" class="form-control" value="<?= $row['kabupaten_ppl'];?>">
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">PROVINSI<span class="text-danger">*</span></label>
								<input type="text" name="provinsi_ppl" class="form-control" value="<?= $row['provinsi_ppl'];?>">
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">ALAMAT<span class="text-danger">*</span></label>
								<textarea name="alamat_ppl" id="" class="form-control"><?= $row['alamat_ppl'];?></textarea>
							</div>
							<div class="mb-3">
								<button class="btn btn-primary form-control" type="submit">Simpan</button>
							</div>
						</form>
						<?php
							if($_SERVER['REQUEST_METHOD'] == "POST"){
								require_once('config/koneksi.php');
								$id = $_POST['id'];
								$npsn_ppl = $_POST['npsn_ppl'];
								$sekolah_ppl = $_POST['sekolah_ppl'];
								$kecamatan_ppl = $_POST['kecamatan_ppl'];
								$kabupaten_ppl = $_POST['kabupaten_ppl'];
								$provinsi_ppl = $_POST['provinsi_ppl'];
								$alamat_ppl = $_POST['alamat_ppl'];

								$query = "UPDATE user SET npsn_ppl ='$npsn_ppl', sekolah_ppl='$sekolah_ppl', provinsi_ppl='$provinsi_ppl', kabupaten_ppl='$kabupaten_ppl', kecamatan_ppl='$kecamatan_ppl', alamat_ppl='$alamat_ppl' WHERE id_user = '$id'";
								$result = mysqli_query($koneksi, $query);
								if ($result) {
									echo "<script>alert ('Data berhasil diupdate'); document.location='sekolah.php' </script>"; 
								} else {
									echo "<script>alert ('Data Gagal'); document.location='sekolah.php' </script>"; 
								}
									}
								
						?>
          </div>
        </div>
      </div>
    </div>
    <?php }
      } ?>
	</div>
</main>

<?php include 'footer.php' ;?>