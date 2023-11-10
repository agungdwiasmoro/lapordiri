<?php include 'config/koneksi.php';
include 'template.php' ;?>
<?php $no_ukg = $_SESSION['no_ukg']; ?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Berkas Lapor Diri Peserta PPG</h1>
		<?php 
			$query = "SELECT * FROM user WHERE no_ukg = $no_ukg ORDER BY id_user";
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
								<a href="a1.php"><button class="btn btn-primary form-control">Upload Form A1</button></a>
              <?php } else { ?>
              <button class="btn btn-success form-control">Upload Form A1</button>
              <?php };?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">PAKTA INTEGRITAS<span class="text-danger">*</span></label>
							<?php if ($row['pakta_integritas'] == "") {;?>
								<a href="epakta.php"><button class="btn btn-primary form-control">Upload Pakta Integritas</button></a>
              <?php } else { ?>
								<a href="epakta.php"><button class="btn btn-success form-control">Upload Pakta Integritas</button></a>
              <?php };?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">BIODATA MAHASISWA<span class="text-danger">*</span></label>
							<?php if($row['bio'] == "") {;?>
								<a href="bio.php"><button class="btn btn-primary form-control">Upload Biodata Mahasiswa</button></a>
							<?php } else { ?>
								<a href="bio.php"><button class="btn btn-success form-control">Upload Biodata Mahasiswa</button></a>
							<?php } ;?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">IJASAH S1<span class="text-danger">*</span></label>
							<?php if($row['ijasah'] == "") {;?>
							<a href="ijasah.php"><button class="btn btn-primary form-control">Upload Ijasah S1</button></a>
							<?php } else { ;?>
								<a href="ijasah.php"><button class="btn btn-success form-control">Upload Ijasah S1</button></a>
							<?php };?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">TRANSKIP NILAI S1<span class="text-danger">*</span></label>
							<?php if ($row['transkip'] == "") {;?>
							<a href="transkip.php"><button class="btn btn-primary form-control">Upload Transkip Nilai S1</button></a>
							<?php } else { ;?>
								<a href="transkip.php"><button class="btn btn-success form-control">Upload Transkip Nilai S1</button></a>
							<?php } ;?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SURAT KETERANGAN SEHAT<span class="text-danger">*</span></label>
							<?php if($row['surat_sehat'] == "") {;?>
							<a href="sks.php"><button class="btn btn-primary form-control">Upload Surat Keterangan Sehat</button></a>
							<?php } else {;?>
								<a href="sks.php"><button class="btn btn-success form-control">Upload Surat Keterangan Sehat</button></a>
							<?php } ;?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SURAT PERNYATAAN IZIN KEPALA SEKOLAH<span class="text-danger">*</span></label>
							<?php if($row['surat_izin'] == "")  {;?>
							<a href="sp.php"><button class="btn btn-primary form-control">Upload Surat Pernyataan</button></a>
							<?php } else {;?>
								<a href="sp.php"><button class="btn btn-success form-control">Upload Surat Pernyataan</button></a>
							<?php };?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">PAS FOTO TERBARU<span class="text-danger"> Latar Belakang Merah</span></label>
							<?php if ($row['pas_foto'] == "") {;?>
							<a href="foto.php"><button class="btn btn-primary form-control">Upload Pas Foto</button></a>
							<?php } else {;?>
								<a href="foto.php"><button class="btn btn-success form-control">Upload Pas Foto</button></a>
								<?php };?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SURAT KETERANGAN CATATAN KEPOLISIAN<span class="text-danger">*</span></label>
							<?php if($row['skck'] == "" ) {;?>
							<a href="skck.php"><button class="btn btn-primary form-control">Upload SKCK</button></a>
							<?php } else {;?>
								<a href="skck.php"><button class="btn btn-success form-control">Upload SKCK</button></a>
							<?php };?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SURAT BEBAS NAPZA<span class="text-danger">*</span></label>
							<?php if ($row['surat_napsa'] == "") {;?>
							<a href="napza.php"><button class="btn btn-primary form-control">Upload Surat Bebas NAPZA</button></a>
							<?php } else {;?>
								<a href="napza.php"><button class="btn btn-success form-control">Upload Surat Bebas NAPZA</button></a>
							<?php };?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SCAN NPWP<span class="text-danger">*</span></label>
							<?php if ($row['scan_npwp'] == "") {;?>
							<a href="npwp.php"><button class="btn btn-primary form-control">Upload NPWP</button></a>
							<?php } else {;?>
								<a href="npwp.php"><button class="btn btn-success form-control">Upload NPWP</button></a>
							<?php } ;?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SCAN KTP<span class="text-danger">*</span></label>
							<?php if ($row['scan_ktp'] == "") {;?>
							<a href="ktp.php"><button class="btn btn-primary form-control">Upload KTP</button></a>
							<?php } else {;?>
								<a href="ktp.php"><button class="btn btn-success form-control">Upload KTP</button></a>
							<?php } ;?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SK PEMBAGIAN TUGAS<span class="text-danger"> (2 Tahun Terakhir)</span></label>
							<?php if($row['sk_tugas'] == "") {;?>
							<a href="sk_tugas.php"><button class="btn btn-primary form-control">Upload SK Pembagian Tugas</button></a>
							<?php } else {;?>
								<a href="sk_tugas.php"><button class="btn btn-success form-control">Upload SK Pembagian Tugas</button></a>
								<?php } ;?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">SK PENGANGKATAN/KENAIKAN PANGKAT<span class="text-danger"> (2 Tahun terkahir)</span></label>
							<?php if($row['sk_pangkat'] == "") {;?>
							<a href="sk_pangkat.php"><button class="btn btn-primary form-control">Upload SK </button></a>
							<?php } else {;?>
								<a href="sk_pangkat.php"><button class="btn btn-success form-control">Upload SK </button></a>
								<?php } ;?>
						</div>
            <div class="mb-3">
							<label class="form-label fw-bold">BUKTI REGISTRASI PMB<span class="text-danger">*</span></label>
							<?php if($row['bukti_pmb'] == "") {;?>
							<a href="pmb.php"><button class="btn btn-primary form-control">Upload Bukti Registrasi PMB</button></a>
							<?php } else {;?>
								<a href="pmb.php"><button class="btn btn-success form-control">Upload Bukti Registrasi PMB</button></a>
								<?php } ;?>
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