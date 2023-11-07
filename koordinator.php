<?php include 'config/koneksi.php';
include 'template.php' ;?>
<?php $no_ukg = $_SESSION['no_ukg'] ;?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Data Koordinator Sekolah</h1>
    <div class="row">
			<div class="col-12">
				<!-- Data Diri -->
				<div class="card">
				<?php 
					$query = "SELECT * FROM user WHERE no_ukg = $no_ukg ORDER BY id_user";	
					$result = mysqli_query($koneksi,$query);
					if ($result->num_rows > 0) {
							while($data = mysqli_fetch_assoc($result)){ 
				?>
					<div class="card-header">
						<h5 class="card-title mb-0">Informasi Sekolah</h5>
					</div>
					<div class="card-body">
            <div class="mb-3">
							<label class="form-label fw-bold">NPSN<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $data['npsn_sekolah'];?>" disabled>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NAMA SEKOLAH<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $data['instansi_asal'];?>" disabled>
						</div>
          </div>
           <?php 
					 	$npsn = $data['npsn_sekolah'];
            $query = "SELECT * FROM kordinator_sekolah WHERE npsn = $npsn ORDER BY id_kordinator";	
            $result = mysqli_query($koneksi,$query);
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)){ 
          ?>

          <!-- Informasi Data Diri -->
          <div class="card-header">
						<h5 class="card-title mb-0">Informasi Data Diri Koordinator</h5>
					</div>
					<form action="kordinatorproccess.php" method="post" enctype="multipart/form-data" target="_self">
					<div class="card-body">
            <div class="mb-3">
							<label class="form-label fw-bold">NAMA LENGKAP DENGAN GELAR<span class="text-danger">*</span></label>
							<input type="hidden" name="id" value="<?= $row['id_kordinator'];?>">
							<input type="text" name="nama" class="form-control" value="<?= $row['nama_kordinator'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NO TELEPON<span class="text-danger">*</span></label>
							<input type="text" name="kontak" class="form-control" value="<?= $row['kontak'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NIP<span class="text-danger">*</span></label>
							<input type="text" name="nip" class="form-control" value="<?= $row['nip'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NIK<span class="text-danger">*</span></label>
							<input type="text" name="nik" class="form-control" value="<?= $row['nik'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">Golongan<span class="text-danger">*</span></label>
							<select class="form-select mb-3" name="golongan">
                <option value="<?= $row['golongan'];?>" selected><?= $row['golongan'];?></option>
                <option value="Non-PNS">Non PNS</option>
                <option value="III/a">III/a</option>
                <option value="III/b">III/b</option>
                <option value="III/c">III/c</option>
                <option value="III/d">III/d</option>
                <option value="IV/a">IV/a</option>
                <option value="IV/b">IV/b</option>
                <option value="IV/c">IV/c</option>
                <option value="IV/d">IV/d</option>
                <option value="IV/e">IV/e</option>
              </select>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">JAB FUNGSIONAL<span class="text-danger">*</span></label>
							<select class="form-select mb-3" name="jabatan">
								<option value="<?= $row['pangkat'];?>" selected><?= $row['pangkat'];?></option>
                <option value="Non-PNS">Non PNS</option>
                <option value="Penata Muda">Penata Muda</option>
                <option value="Penata Muda Tingkat 1">Penata Muda Tingkat 1</option>
                <option value="Penata">Penata</option>
                <option value="Penata Tingkat 1">Penata Tingkat 1</option>
                <option value="Pembina">Pembina</option>
                <option value="Pembina Tingkat 1">Pembina Tingkat 1</option>
                <option value="Pemuda Utama Muda">Pemuda Utama Muda</option>
                <option value="Pembina Utama Madya">Pembina Utama Madya</option>
                <option value="Pembina Utama">Pembina Utama</option>
              </select>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NPWP<span class="text-danger">*</span></label>
							<input type="text" name="npwp" class="form-control" value="<?= $row['npwp'];?>">
						</div>
          </div>

          <!-- Informasi Pengiriman  -->
          <div class="card-header">
						<h5 class="card-title mb-0">Informasi Alamat Tujuan Pengiriman Surat</h5>
					</div>
					<div class="card-body">
            <div class="mb-3">
							<label class="form-label fw-bold">NAMA PENERIMA<span class="text-danger">*</span></label>
							<input type="text" name="nama_penerima" class="form-control" value="<?= $row['nama_penerima'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NO TELEPON<span class="text-danger">*</span></label>
							<input type="text" name="kontak_penerima" class="form-control" value="<?= $row['kontak'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">PROVINSI<span class="text-danger">*</span></label>
							<input type="text" name="provinsi" class="form-control" value="<?= $row['provinsi_pengiriman'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">KOTA/KABUPATEN<span class="text-danger">*</span></label>
							<input type="text" name="kabupaten" class="form-control" value="<?= $row['kabupaten_pengiriman'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">KECAMATAN<span class="text-danger">*</span></label>
							<input type="text" name="kecamatan" class="form-control" value="<?= $row['kecamatan_pengiriman'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">KODE POS<span class="text-danger">*</span></label>
							<input type="text" name="kode_pos" class="form-control" value="<?= $row['kp_pengiriman'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">ALAMAT LENGKAP<span class="text-danger">*</span></label>
							<textarea type="text" name="alamat_lengkap" class="form-control" ><?= $row['alamat_pengiriman'];?></textarea>
						</div>
          </div>

          <!-- informasi rekening -->
          <div class="card-header">
						<h5 class="card-title mb-0">Informasi Rekening Koordinator</h5>
					</div>
					<div class="card-body">
            <div class="mb-3">
							<label class="form-label fw-bold">BANK<span class="text-danger">*</span></label>
							<input type="text" name="bank" class="form-control" value="<?= $row['nama_bank'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">BANK CABANG<span class="text-danger">*</span></label>
							<input type="text" name="cabang" class="form-control" value="<?= $row['cabang'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NO REKENING<span class="text-danger">*</span></label>
							<input type="text" name="rekening" class="form-control" value="<?= $row['no_rekening'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">REKENING ATAS NAMA<span class="text-danger">*</span></label>
							<input type="text" name="atas_nama" class="form-control" value="<?= $row['nama_rekening'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SCAN BUKU TABUNGAN<span class="text-danger">*</span></label>
							<input type="file" name="scan" class="form-control">
						</div>
            <div class="mb-3">
							<button class="btn btn-primary form-control" type="submit">Simpan</button>
          	</div>
						</form>
          <?php }
            } ?>
        </div>
			<?php }
				} ?>
      </div>
    </div>
	</div>
</main>

<?php include 'footer.php' ;?>