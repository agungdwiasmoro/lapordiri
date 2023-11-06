<?php include 'config/koneksi.php' ;?>
<?php include 'template.php' ;?>
<?php $no_ukg = $_SESSION['no_ukg'] ;?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Lapor Diri Peserta PPG</h1>
		<?php 
			$query = "SELECT * FROM user where no_ukg = $no_ukg ORDER BY id_user ";	
			$result = mysqli_query($koneksi,$query);
			if ($result->num_rows > 0) {
					while($row = mysqli_fetch_assoc($result)){ 
		?>
		<div class="row">
			<div class="col-12">
				<!-- Data Diri -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">INFORMASI DATA DIRI</h5>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<label class="form-label fw-bold">Nama Lengkap</label>
							<input type="text" class="form-control" value="<?= $row['nama_lengkap'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">No UKG</label>
							<input type="text" class="form-control" value="<?= $row['no_ukg'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">NIM</label>
							<input type="text" class="form-control" value="0" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">NIK</label>
							<input type="text" class="form-control" value="<?= $row['nik'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">NIP</label>
							<input type="text" class="form-control" value="<?= $row['nip'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Tempat Lahir</label>
							<input type="text" class="form-control" value="<?= $row['tempat_lahir'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Tanggal Lahir</label>
							<input type="date" class="form-control" value="<?= $row['tgl_lahir'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Jenis Kelamin</label>
							<input type="text" class="form-control" value="<?= $row['gender'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">NUPTK</label>
							<input type="text" class="form-control" value="<?= $row['nuptk'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">No Telepon (WA)</label>
							<input type="text" class="form-control" value="<?= $row['telepon'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Nama Kontak Darurat</label>
							<input type="text" class="form-control" value="<?= $row['kontak_darurat'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Nomor Kontak Darurat (WA)</label>
							<input type="text" class="form-control" value="<?= $row['no_darurat'];?>" disabled>
						</div>
						
					</div>
				</div>
				<!-- Data Sekolah -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">INFORMASI SEKOLAH</h5>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<label class="form-label fw-bold">Nama Sekolah</label>
							<input type="text" class="form-control" value="<?= $row['sekolah'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">NPSN Sekolah</label>
							<input type="text" class="form-control" value="<?= $row['npsn_sekolah'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Jenjang Sekolah</label>
							<input type="text" class="form-control" value="<?= $row['jenjang'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Jabatan Fungsional</label>
							<input type="text" class="form-control" value="<?= $row['jabatan'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">LPTK</label>
							<input type="text" class="form-control" value="<?= $row['lptk'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Bidang Studi PPG</label>
							<input type="text" class="form-control" value="<?= $row['bidang_studi'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Nama Kelas</label>
							<input type="text" class="form-control" value="<?= $row['nama_kelas'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Sumber Pembiayaan</label>
							<input type="text" class="form-control" value="" disabled>
						</div>
					</div>
				</div>
				<!-- Data Instansi Asal -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">INFORMASI ALAMAT RUMAH</h5>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<label class="form-label fw-bold">Provinsi</label>
							<input type="text" class="form-control" value="<?= $row['provinsi_rumah'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Kota/Kabupaten</label>
							<input type="text" class="form-control" value="<?= $row['kabupaten_rumah'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Kecamatan</label>
							<input type="text" class="form-control" value="<?= $row['kecamatan_rumah'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Kode Pos</label>
							<input type="text" class="form-control" value="<?= $row['kp_rumah'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Alamat Lengkap</label>
							<input type="text" class="form-control" value="<?= $row['alamat_rumah'];?>" disabled>
						</div>
					</div>
				</div>
				<!-- Alamat Sertifikat -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">INFORMASI ALAMAT TUJUAN PENGIRIMAN SERTIFIKAT PPG</h5>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<label class="form-label fw-bold">Nama Penerima</label>
							<input type="text" class="form-control" value="<?= $row['nama_penerima'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Kontak Penerima</label>
							<input type="text" class="form-control" value="<?= $row['kontak_penerima'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Provinsi</label>
							<input type="text" class="form-control" value="<?= $row['provinsi_pengiriman'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Kota/Kabupaten</label>
							<input type="text" class="form-control" value="<?= $row['kabupaten_pengiriman'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Kecamatan</label>
							<input type="text" class="form-control" value="<?= $row['kecamatan_pengiriman'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Kode Pos</label>
							<input type="text" class="form-control" value="<?= $row['kp_pengiriman'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Alamat Lengkap</label>
							<input type="text" class="form-control" value="<?= $row['alamat_pengiriman'];?>" disabled>
						</div>
					</div>
				</div>
				<!-- Alamat Instansi -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">INFORMASI ALAMAT ALAMAT INSTANSI ASAL</h5>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<label class="form-label fw-bold">Instansi Asal</label>
							<input type="text" class="form-control" value="<?= $row['instansi_asal'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Alamat</label>
							<input type="text" class="form-control" value="<?= $row['alamat_instansi_asal'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Provinsi</label>
							<input type="text" class="form-control" value="<?= $row['provinsi_instansi_asal'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Kota/Kabupaten</label>
							<input type="text" class="form-control" value="<?= $row['kabupaten_instansi_asal'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Kode Pos</label>
							<input type="text" class="form-control" value="<?= $row['kp_instansi_asal'];?>" disabled>
						</div>
					</div>
				</div>
				<!-- Informasi Rekening -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">INFORMASI REKENING</h5>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<label class="form-label fw-bold">Nama Sesuai Rekening</label>
							<input type="text" class="form-control" value="<?= $row['nama_rekening'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">NPWP</label>
							<input type="text" class="form-control" value="<?= $row['npwp'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Nama Bank</label>
							<input type="text" class="form-control" value="<?= $row['nama_bank'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Bank Cabang</label>
							<input type="text" class="form-control" value="<?= $row['cabang_bank'];?>" disabled>
						</div>
						<div class="mb-3">
							<label class="form-label fw-bold">Nomor Rekening</label>
							<input type="text" class="form-control" value="<?= $row['no_rekening'];?>" disabled>
						</div>
					</div>
				</div>
				<!-- Informasi Paket Data -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">INFORMASI PENGIRIMAN PAKET DATA</h5>
					</div>
					<div class="card-body">
						<div class="mb-3">
							<label class="form-label fw-bold">No. Hp</label>
							<input type="text" class="form-control" value="" disabled>
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