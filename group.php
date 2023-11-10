<?php include 'config/koneksi.php';
include 'template.php' ;?>
<?php $no_ukg = $_SESSION['no_ukg']; ?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Link Grup WhatsApp</h1>
		<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title mb-0">Grup WhatsApp</h5>
            </div>
            <div class="card-body">
            <?php
              $query = "SELECT * FROM layout WHERE id_layout = '1'";
              $result = mysqli_query($koneksi, $query);
              if ($result->num_rows > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
              ?>
              <h3><a href="<?= $data['link'];?>"><?= $data['link'];?></a></h3>
              <?php }
              };?>
            </div>
          </div>
        </div>
      </div>
	</div>
</main>

<?php include 'footer.php' ;?>