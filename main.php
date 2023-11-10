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
				<form action="lapordiri.php" method="post" enctype="multipart/form-data" target="_self">
					<!-- Data Diri -->
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0">INFORMASI DATA DIRI</h5>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<label class="form-label fw-bold">Nama Lengkap</label>
								<input type="text" name="nama_lengkap" class="form-control" value="<?= $row['nama_lengkap'];?>">
								<input type="hidden" name="id" id="" value="<?= $row['id_user'];?>">
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">No UKG</label>
								<input type="text" name="no_ukg" class="form-control" value="<?= $row['no_ukg'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">NIM</label>
								<input type="text" name="nim" class="form-control" value="0" disabled>
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">NIK</label>
								<input type="text" name="nik" class="form-control" value="<?= $row['nik'];?>">
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">NIP</label>
								<input type="text" name="nip" class="form-control" value="<?= $row['nip'];?>">
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Tempat Lahir</label>
								<input type="text" name="tempat_lahir" class="form-control" value="<?= $row['tempat_lahir'];?>">
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Tanggal Lahir</label>
								<input type="date" name="tgl_lahir" class="form-control" value="<?= $row['tgl_lahir'];?>">
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Jenis Kelamin</label>
								<select name="gender" id="gender" class="form-control">
									<option value="<?= $row['gender'];?>"><?= $row['gender'];?></option>
									<option value="Laki Laki">Laki Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">NUPTK</label>
								<input type="text" name="nuptk" class="form-control" value="<?= $row['nuptk'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">No Telepon (WA)</label>
								<input type="text" name="telepon" class="form-control" value="<?= $row['telepon'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Nama Kontak Darurat</label>
								<input type="text" name="kontak_darurat" class="form-control" value="<?= $row['kontak_darurat'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Nomor Kontak Darurat (WA)</label>
								<input type="text" name="no_darurat" class="form-control" value="<?= $row['no_darurat'];?>" >
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
								<input type="text" name="sekolah" class="form-control" value="<?= $row['sekolah'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">NPSN Sekolah</label>
								<input type="text" name="npsn" class="form-control" value="<?= $row['npsn_sekolah'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Jenjang Sekolah</label>
								<input type="text" name="jenjang" class="form-control" value="<?= $row['jenjang'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Jabatan Fungsional</label>
								<input type="text" name="jabatan" class="form-control" value="<?= $row['jabatan'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">LPTK</label>
								<input type="text" name="lptk" class="form-control" value="Universitas Muhammadiyah Purworejo" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Bidang Studi PPG</label>
								<input type="text" name="bidang_studi" class="form-control" value="<?= $row['bidang_studi'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Nama Kelas</label>
								<input type="text" name="kelas" class="form-control" value="<?= $row['nama_kelas'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Sumber Pembiayaan</label>
								<input type="text" name="sumber_pembiayaan" class="form-control" value="APBN - Pusat" >
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
								<input type="text" name="provinsi_rumah" class="form-control" value="<?= $row['provinsi_rumah'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Kota/Kabupaten</label>
								<input type="text" name="kabupaten_rumah" class="form-control" value="<?= $row['kabupaten_rumah'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Kecamatan</label>
								<input type="text" name="kecamatan_rumah" class="form-control" value="<?= $row['kecamatan_rumah'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Kode Pos</label>
								<input type="text" name="kp_rumah" class="form-control" value="<?= $row['kp_rumah'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Alamat Lengkap</label>
								<textarea name="alamat_rumah" id="alamat_rumah" class="form-control" ><?= $row['alamat_rumah'];?></textarea>
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
								<input type="text" name="nama_penerima" class="form-control" value="<?= $row['nama_penerima'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Kontak Penerima</label>
								<input type="text" name="kontak_penerima" class="form-control" value="<?= $row['kontak_penerima'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Provinsi</label>
								<input type="text" name="provinsi_pengiriman" class="form-control" value="<?= $row['provinsi_pengiriman'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Kota/Kabupaten</label>
								<input type="text" name="kabupaten_pengiriman" class="form-control" value="<?= $row['kabupaten_pengiriman'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Kecamatan</label>
								<input type="text" name="kecamatan_pengiriman" class="form-control" value="<?= $row['kecamatan_pengiriman'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Kode Pos</label>
								<input type="text" name="kp_pengiriman" class="form-control" value="<?= $row['kp_pengiriman'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Alamat Lengkap</label>
								<textarea name="alamat_pengiriman" id="" class="form-control"><?= $row['alamat_pengiriman'];?></textarea>
							</div>
						</div>
					</div>
					<!-- Alamat Instansi -->
					<div class="card">
						<div class="card-header">
							<h5 class="card-title mb-0">INFORMASI ALAMAT INSTANSI ASAL</h5>
						</div>
						<div class="card-body">
							<div class="mb-3">
								<label class="form-label fw-bold">Instansi Asal</label>
								<input type="text" name="instansi_asal" class="form-control" value="<?= $row['instansi_asal'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Alamat</label>
								<input type="text" name="alamat_instansi" class="form-control" value="<?= $row['alamat_instansi_asal'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Provinsi</label>
								<input type="text" name="provinsi_instansi" class="form-control" value="<?= $row['provinsi_instansi_asal'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Kota/Kabupaten</label>
								<input type="text" name="kabupaten_instansi" class="form-control" value="<?= $row['kabupaten_instansi_asal'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Kode Pos</label>
								<input type="text" name="kp_instansi" class="form-control" value="<?= $row['kp_instansi_asal'];?>" >
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
								<input type="text" name="nama_rekening" class="form-control" value="<?= $row['nama_rekening'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">NPWP</label>
								<input type="text" name="npwp" class="form-control" value="<?= $row['npwp'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Nama Bank</label>
								<input type="text" name="nama_bank" class="form-control" value="<?= $row['nama_bank'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Bank Cabang</label>
								<input type="text" name="cabang_bank" class="form-control" value="<?= $row['cabang_bank'];?>" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">Nomor Rekening</label>
								<input type="text" name="no_rekening" class="form-control" value="<?= $row['no_rekening'];?>" >
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
								<label class="form-label fw-bold">Nama Operator</label>
								<input type="text" name="operator" class="form-control" value="" >
							</div>
							<div class="mb-3">
								<label class="form-label fw-bold">No. Hp</label>
								<input type="text" name="no_data" class="form-control" value="" >
							</div>
						</div>
					</div>
					<?php if($row['status'] == "") {?>
					<div class="card">
						<div class="card-body">
							<div class="mb-3">
								<button class="btn btn-primary form-control" type="submit">Simpan</button>
							</div>
						</div>
					</div>
					<?php } else {};?>
				</form>
			</div>
		</div>
		<?php }
		} ?>
	</div>
</main>

<?php include 'footer.php' ;?>