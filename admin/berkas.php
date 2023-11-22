<?php include '../config/koneksi.php';
include 'template.php' ;?>
<?php $no_ukg = $_SESSION['no_ukg']; ?>

<main class="content">
	<div class="container-fluid p-0">
  <h1 class="h3 mb-3">Data Berkas Persyaratan</h1>

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">DATA BERKAS MAHASISWA</h5>
        </div>
        <div class="card-body">
        <?php 
        $id = $_GET['id'];
          $query = "SELECT * FROM user where id_user = $id";	
          $result = mysqli_query($koneksi,$query) or die(mysqli_error());
          if ($result->num_rows > 0) {
              while($row = mysqli_fetch_assoc($result)){ 
        ?>
          <table class="table">
            <tr>
              <td>Form A1</td>
              <td>
                <?php if ($row['form_a1'] !== "") {;?>
                  <a href="../assets/<?=$row['form_a1'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Pakta Integritas</td>
              <td>
                <?php if ($row['pakta_integritas'] !== "") {;?>
                  <a href="../assets/<?=$row['pakta_integritas'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Biodata Mahasiswa</td>
              <td>
                <?php if ($row['bio'] !== "") {;?>
                  <a href="../assets/<?=$row['bio'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Ijasah S1</td>
              <td>
                <?php if ($row['ijasah'] !== "") {;?>
                  <a href="../assets/<?=$row['ijasah'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Transkip Nilai S1</td>
              <td>
                <?php if ($row['transkip'] !== "") {;?>
                  <a href="../assets/<?=$row['transkip'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Surat Keterangan Sehat</td>
              <td>
                <?php if ($row['surat_sehat'] !== "") {;?>
                  <a href="../assets/<?=$row['surat_sehat'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Surat Pernyataan Izin Kepala Sekolah</td>
              <td>
                <?php if ($row['surat_izin'] !== "") {;?>
                  <a href="../assets/<?=$row['surat_izin'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Pas Foto</td>
              <td>
                <?php if ($row['pas_foto'] !== "") {;?>
                  <a href="../assets/<?=$row['pas_foto'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Surat Keterangan Catatan Kepolisian</td>
              <td>
                <?php if ($row['skck'] !== "") {;?>
                  <a href="../assets/<?=$row['skck'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Surat Bebas NAPZA</td>
              <td>
                <?php if ($row['surat_napsa'] !== "") {;?>
                  <a href="../assets/<?=$row['surat_napsa'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Scan NPWP</td>
              <td>
                <?php if ($row['scan_npwp'] !== "") {;?>
                  <a href="../assets/<?=$row['scan_npwp'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Scan KTP</td>
              <td>
                <?php if ($row['scan_ktp'] !== "") {;?>
                  <a href="../assets/<?=$row['scan_ktp'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>SK Pembagian Tugas</td>
              <td>
                <?php if ($row['sk_tugas'] !== "") {;?>
                  <a href="../assets/<?=$row['sk_tugas'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>SK Pengangkatan/Kenaikan Pangkat</td>
              <td>
                <?php if ($row['sk_pangkat'] !== "") {;?>
                  <a href="../assets/<?=$row['sk_pangkat'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
            <tr>
              <td>Bukti Registrasi PMB</td>
              <td>
                <?php if ($row['bukti_pmb'] !== "") {;?>
                  <a href="../assets/<?=$row['bukti_pmb'];?>"><span class="text-primary fw-bold">Lihat</span></a>
                <?php } else { ?>
                <span class="text-danger">Kosong</span>
                <?php }?>
              </td>
            </tr>
          </table>
          <form action="" method="post" enctype="multipart/form-data" target="_self">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title mb-0">AKSI</h5>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label fw-bold">Catatan</label>
                  <input type="hidden" name="id" value="<?= $row['id_user'];?>">
                  <textarea name="note" id="" class="form-control"><?=$row['note_berkas'];?></textarea>
                </div>
                <div class="mb-3">
                  <label class="form-label fw-bold">Status<span class="text-danger">*</span></label>
                  <select class="form-select mb-3" name="status">
                    <option value="<?= $row['status_berkas']; ?>" selected><?= $row['status_berkas']; ?></option>
                    <option value="Perlu Perbaikan">Perlu Perbaikan</option>
                    <option value="Terverifikasi">Terverifikasi</option>
                  </select>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary form-control" type="submit">UPDATE</button>
                </div>
              </div>
            </div>
          </form>
          <?php
					if($_SERVER['REQUEST_METHOD'] == "POST"){
						require_once('../config/koneksi.php');
						$id = $_POST['id'];
            $status = $_POST['status'];
            $note = $_POST['note'];

            $query = "UPDATE user SET status_berkas= '$status', note_berkas='$note' WHERE id_user = '$id'";
            $result = mysqli_query($koneksi, $query);
            if ($result) {
              echo "<script>alert ('Data berhasil diupdate'); document.location='lapor_diri.php' </script>"; 
            } else {
              die('invalid Query : ' . mysqli_error($koneksi));
            }
          }
            
				?>
        <?php }
          }?>
        </div>
      </div>
    </div>
  </div>
		
	</div>
</main>

<?php include 'footer.php' ;?>