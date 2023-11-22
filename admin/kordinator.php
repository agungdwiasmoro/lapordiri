<?php include '../config/koneksi.php';
include 'template.php' ;?>
<?php $no_ukg = $_SESSION['no_ukg']; ?>

<main class="content">
	<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Data Koordinator PPL Peserta PPG</h1>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            DATA KORDINATOR SEKOLAH PPL
          </div>
          <div class="card-body">
            <table class="table table-striped" id="tabel-data">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Data NPSN</th>
                  <th>Nama Koordinator</th>
                  <th>Aksi</th>
                  <th>Berkas</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $no = 1;
                $query = "SELECT * FROM kordinator_sekolah ORDER BY id_kordinator ";	
                $result = mysqli_query($koneksi,$query);
                if ($result->num_rows > 0) {
                    while($row = mysqli_fetch_assoc($result)){ 
              ?>
                <tr>
                  <td><?= $no++ ;?></td>
                  <td>
                    <?= $row['npsn'];?>
                  </td>
                  <td><?= $row['nama_kordinator'];?></td>
                  <td><a href="detail_kordinator.php?id=<?= $row['id_kordinator'];?>"><button class="btn btn-info">Lihat</button></a></td>
                  <td><a href="../assets/<?= $row['scan_rekening'];?>"><button class="btn btn-info">Lihat</button></a></td>
                  <td>
                    <?php
                    $npsn =  $row['npsn'];
                    $query1 = "SELECT * FROM user WHERE npsn_ppl ='$npsn'";	
                    $result1 = mysqli_query($koneksi,$query1);
                    if ($result1->num_rows > 0) {
                        while($data = mysqli_fetch_assoc($result1)){  ;?>
                        <?=$data['nama_lengkap'];?>,
                    <?php }
                    };?>
                  </td>
               
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