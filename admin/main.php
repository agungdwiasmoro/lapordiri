<?php include '../config/koneksi.php';
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
							<h1 class="h3 mb-3">Link Grup WhatsApp</h1>
							<?php
								$query = "SELECT * FROM layout ORDER BY id_layout";
								$result = mysqli_query($koneksi, $query);
								if ($result->num_rows > 0) {
									while ($data = mysqli_fetch_assoc($result)) {
								?>
									 <form action="" method="post" enctype="multipart/form-data" target="_self">
										<div class="mb-3">
											<input type="text" name="link" class="form-control" value="<?= $data['link'];?>">
											<input type="hidden" name="id" value="<?=$data['id_layout'];?>">
										</div>
										<div class="mb-3">
											<button class="btn btn-primary form-control" type="submit">Upload</button>
										</div>
									</form>
									<?php
										if($_SERVER['REQUEST_METHOD'] == "POST"){
											require_once('../config/koneksi.php');
											$id = $_POST['id'];
											$link = $_POST['link'];

											$query = "UPDATE layout SET link='$link' WHERE id_layout='$id'";
											$result = mysqli_query($koneksi, $query);
											if ($result) {
												echo "<script>alert ('Data berhasil disimpan'); document.location='main.php' </script>"; 
											} else {
												die('invalid Query : ' . mysqli_error($koneksi));
											}
										}
									?>
								<?php }
								};?>
            </div>
          </div>
        </div>
			</div>
		
	</div>
</main>

<?php include 'footer.php' ;?>