<?php include 'config/koneksi.php';
include 'template.php' ;?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Data Sekolah</h1>
		<?php 
			$query = "SELECT * FROM user ORDER BY no_ukg";	
			$result = mysqli_query($koneksi,$query);
			if ($result->num_rows > 0) {
					while($row = mysqli_fetch_assoc($result)){ 
		?>
    <div class="row">
			<div class="col-12">
				<!-- Data Diri -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">Informasi Sekolah</h5>
					</div>
					<div class="card-body">
            <div class="mb-3">
							<label class="form-label fw-bold">NPSN<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['npsn_sekolah'];?>" disabled>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NAMA SEKOLAH<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['instansi_asal'];?>" disabled>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">ALAMAT<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['alamat_instansi_asal'];?>" disabled>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">KECAMATAN<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['kecamatan_instansi_asal'];?>" disabled>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">KOTA/KABUPATEN<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['kabupaten_instansi_asal'];?>" disabled>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">PROVINSI<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['provinsi_instansi_asal'];?>" disabled>
						</div>
          
          </div>
        </div>
      </div>
    </div>
    <?php }
      } ?>
	</div>
</main>

<?php include 'footer.php' ;?>