<?php include 'config/koneksi.php';
include 'template.php' ;?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Berkas Lapor Diri Peserta PPG</h1>
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
						<h5 class="card-title mb-0">Upload Dokumen Pendukung</h5>
					</div>
					<div class="card-body">
            <div class="mb-3">
							<label class="form-label fw-bold">FORM A1<span class="text-danger">*</span></label>
              <?php if ($row['form_a1'] == "") {;?>
							<button class="btn btn-primary form-control">Upload Form A1</button>
              <?php } else { ?>
              <button class="btn btn-success form-control">Upload Form A1</button>
              <?php };?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">PAKTA INTEGRITAS<span class="text-danger">*</span></label>
							<button class="btn btn-primary form-control">Upload Pakta Integritas</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">BIODATA MAHASISWA<span class="text-danger">*</span></label>
							<button class="btn btn-primary form-control">Upload Biodata Mahasiswa</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">IJASAH S1<span class="text-danger">*</span></label>
							<button class="btn btn-primary form-control">Upload Ijasah S1</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">TRANSKIP NILAI S1<span class="text-danger">*</span></label>
							<button class="btn btn-primary form-control">Upload Transkip Nilai S1</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SURAT KETERANGAN SEHAT<span class="text-danger">*</span></label>
							<button class="btn btn-primary form-control">Upload Surat Keterangan Sehat</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SURAT PERNYATAAN IZIN KEPALA SEKOLAH<span class="text-danger">*</span></label>
							<button class="btn btn-primary form-control">Upload Surat Pernyataan</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">PAS FOTO TERBARU<span class="text-danger"> Latar Belakang Merah</span></label>
							<button class="btn btn-primary form-control">Upload Pas Foto</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SURAT KETERANGAN CATATAN KEPOLISIAN<span class="text-danger">*</span></label>
							<button class="btn btn-primary form-control">Upload SKCK</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SURAT BEBAS NAPZA<span class="text-danger">*</span></label>
							<button class="btn btn-primary form-control">Upload Surat Bebas NAPZA</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SCAN NPWP<span class="text-danger">*</span></label>
							<button class="btn btn-primary form-control">Upload NPWP</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SK PEMBAGIAN TUGAS<span class="text-danger"> (2 Tahun Terakhir)</span></label>
							<button class="btn btn-primary form-control">Upload SK Pembagian Tugas</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SK PENGANGKATAN/KENAIKAN PANGKAT<span class="text-danger"> (2 Tahun terkahir)</span></label>
							<button class="btn btn-primary form-control">Upload NPWP</button>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">BUKTI REGISTRASI PMB<span class="text-danger">*</span></label>
							<button class="btn btn-primary form-control">Upload Bukti Registrasi PMB</button>
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