<?php include 'config/koneksi.php';
include 'template.php' ;?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Data Koordinator Sekolah</h1>
    <div class="row">
			<div class="col-12">
				<!-- Data Diri -->
				<div class="card">
					<div class="card-header">
						<h5 class="card-title mb-0">Informasi Sekolah</h5>
					</div>
          <?php 
            $query = "SELECT * FROM user ORDER BY no_ukg";	
            $result = mysqli_query($koneksi,$query);
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)){ 
          ?>
					<div class="card-body">
            <div class="mb-3">
							<label class="form-label fw-bold">NPSN<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['npsn_sekolah'];?>" disabled>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NAMA SEKOLAH<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['instansi_asal'];?>" disabled>
						</div>
          </div>
          <?php }
          } ?>
           <?php 
            $query = "SELECT * FROM kordinator_sekolah ORDER BY npsn";	
            $result = mysqli_query($koneksi,$query);
            if ($result->num_rows > 0) {
                while($row = mysqli_fetch_assoc($result)){ 
          ?>

          <!-- Informasi Data Diri -->
          <div class="card-header">
						<h5 class="card-title mb-0">Informasi Data Diri Koordinator</h5>
					</div>
					<div class="card-body">
            <div class="mb-3">
							<label class="form-label fw-bold">NAMA LENGKAP DENGAN GELAR<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['nama_kordinator'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NO TELEPON<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['kontak'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NIP<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['nip'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NIK<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['nik'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">Golongan<span class="text-danger">*</span></label>
							<select class="form-select mb-3">
                <option selected>-- Pilih Golongan --</option>
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
							<select class="form-select mb-3">
                <option selected>-- Pilih Golongan --</option>
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
							<input type="text" class="form-control" value="<?= $row['npwp'];?>">
						</div>
          </div>

          <!-- Informasi Pengiriman  -->
          <div class="card-header">
						<h5 class="card-title mb-0">Informasi Alamat Tujuan Pengiriman Surat</h5>
					</div>
					<div class="card-body">
            <div class="mb-3">
							<label class="form-label fw-bold">NAMA PENERIMA<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['nama_penerima'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NO TELEPON<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['kontak'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">PROVINSI<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['provinsi_pengiriman'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">KOTA/KABUPATEN<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['kabupaten_pengiriman'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">KECAMATAN<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['kecamatan_pengiriman'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">KODE POS<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['kp_pengiriman'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">ALAMAT LENGKAP<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['alamat_pengiriman'];?>">
						</div>
          </div>

          <!-- informasi rekening -->
          <div class="card-header">
						<h5 class="card-title mb-0">Informasi Rekening Koordinator</h5>
					</div>
					<div class="card-body">
            <div class="mb-3">
							<label class="form-label fw-bold">BANK<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['nama_bank'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">BANK CABANG<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['cabang'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">NO REKENING<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['no_rekening'];?>">
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">REKENING ATAS NAMA<span class="text-danger">*</span></label>
							<input type="text" class="form-control" value="<?= $row['nama_rekening'];?>">
						</div>
          </div>
          <?php }
            } ?>
        </div>
      </div>
    </div>
	</div>
</main>

<?php include 'footer.php' ;?>