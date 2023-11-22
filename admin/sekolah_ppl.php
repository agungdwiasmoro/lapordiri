<?php include '../config/koneksi.php';
include 'template.php' ;?>
<?php $no_ukg = $_SESSION['no_ukg']; ?>

<main class="content">
	<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Data Sekolah PPL Peserta PPG</h1>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            DATA SEKOLAH PPL
          </div>
          <div class="card-body">
            <table class="table table-striped" id="tabel-data">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Data NPSN</th>
                  <th>Nama Sekolah</th>
                  <th>Nama Peserta</th>
                  <th>Note</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $no = 1;
                $query = "SELECT * FROM user WHERE level='peserta' ORDER BY id_user ";	
                $result = mysqli_query($koneksi,$query);
                if ($result->num_rows > 0) {
                    while($row = mysqli_fetch_assoc($result)){ 
              ?>
                <tr>
                  <td><?= $no++ ;?></td>
                  <td>
                    <?= $row['npsn_ppl'];?>
                  </td>
                  <td><?= $row['sekolah_ppl'];?></td>
                  <td><?= $row['nama_lengkap'];?></td>
                  <form action="" method="post"  enctype="multipart/form-data" target="_self">
                  <td><textarea name="note_ppl" class="form-control"><?= $row['note_ppl'];?></textarea></td>
                  <td>
                    <select class="form-select" name="status_ppl">
                      <option value="<?= $row['status_ppl']; ?>" selected><?= $row['status_ppl']; ?></option>
                      <option value="Verified">Verified</option>
                      <option value="Perlu Perbaikan">Perlu Perbaikan</option>
                    </select>
                  </td>
                  <td>
                    <input type="hidden" name="id" value="<?= $row['id_user'];?>">
                    <?php if($row['status_ppl'] == "Verified") {?>
                    <button class="btn btn-success">Verified</button>
                    <?php } else {?>
                      <button class="btn btn-primary" type="post">Submit</button>
                      <?php }?>
                  </td>
                  </form>
                  <?php
                  if($_SERVER['REQUEST_METHOD'] == "POST"){
                    $id = $_POST['id'];
                    $note_ppl = $_POST['note_ppl'];
                    $status_ppl = $_POST['status_ppl'];

                    $query = "UPDATE user SET note_ppl ='$note_ppl', status_ppl='$status_ppl' WHERE id_user = '$id'";
                    $result = mysqli_query($koneksi, $query);
                    if ($result) {
                      echo "<script>alert ('Data berhasil diupdate'); document.location='sekolah_ppl.php' </script>"; 
                    } else {
                      echo "<script>alert ('Data Gagal'); document.location='sekolah_ppl.php' </script>"; 
                    }
                      }
                    
                ?>
                </tr>
                <?php }
                };?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
	</div>
</main>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabel-data').DataTable();
    });
</script>

<?php include 'footer.php' ;?>