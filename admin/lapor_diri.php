<?php include '../config/koneksi.php';
include 'template.php' ;?>
<?php $no_ukg = $_SESSION['no_ukg']; ?>

<main class="content">
	<div class="container-fluid p-0">
    <h1 class="h3 mb-3">Data Lapor Diri Peserta PPG</h1>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            DATA PESERTA
          </div>
          <div class="card-body">
            <table class="table table-striped" id="tabel-data">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Data Lapor Diri</th>
                  <th>Status Data</th>
                  <th>Aksi</th>
                  <th>Status Berkas</th>
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
                    <table>
                      <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $row['nama_lengkap'];?></td>
                      </tr>
                      <tr>
                        <td>No. UKG</td>
                        <td>:</td>
                        <td><?= $row['no_ukg'];?></td>
                      </tr>
                      <tr>
                        <td>Bidang Studi</td>
                        <td>:</td>
                        <td><?= $row['bidang_studi'];?></td>
                      </tr>
                      <tr>
                        <td>Kelas</td>
                        <td>:</td>
                        <td><?= $row['nama_kelas'];?></td>
                      </tr>
                      <tr>
                        <td>Tahun/Periode</td>
                        <td>:</td>
                        <td><?= $row['tahun'].'/'.$row['angkatan'];?></td>
                      </tr>
                      <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><?= $row['sekolah'];?></td>
                      </tr>
                      <tr>
                        <td>Sekolah PPL</td>
                        <td>:</td>
                        <td><?= $row['sekolah_ppl'];?></td>
                      </tr>
                    </table>
                  </td>
                  <td>
                    <?php if($row['status'] == "Lapor Diri") {?>
                      <button class="btn btn-primary"><?= $row['status'];?></button>
                    <?php } else if ($row['status'] == "Perlu Perbaikan") {?>
                      <button class="btn btn-warning"><?= $row['status'];?></button>
                    <?php } else if ($row['status'] == "Terverifikasi") {?>
                      <button class="btn btn-success"><?= $row['status'];?></button>
                    <?php } else if ($row['status'] == "Undur Diri") {?>
                      <button class="btn btn-danger"><?= $row['status'];?></button>
                    <?php } else {?>
                      <button class="btn btn-info">Menunggu</button>
                    <?php };?>
                  </td>
                  <td><a href="detail.php?id=<?= $row['id_user'];?>"><button class="btn btn-primary">Lihat</button></a></td>
                  <td>
                  <?php if ($row['status_berkas'] == "Perlu Perbaikan") {?>
                      <button class="btn btn-warning"><?= $row['status_berkas'];?></button>
                    <?php } else if ($row['status_berkas'] == "Terverifikasi") {?>
                      <button class="btn btn-success"><?= $row['status_berkas'];?></button>
                    <?php } else {?>
                      <button class="btn btn-info">Menunggu</button>
                    <?php };?>
                  </td>
                  <td><a href="berkas.php?id=<?= $row['id_user'];?>"><button class="btn btn-primary">Lihat</button></a></td>
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