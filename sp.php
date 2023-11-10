<?php include 'config/koneksi.php';
include 'template.php' ;?>
<?php $no_ukg = $_SESSION['no_ukg']; ?>

<main class="content">
	<div class="container-fluid p-0">

		<h1 class="h3 mb-3">Berkas Lapor Diri</h1>
		<?php 
			$query = "SELECT * FROM user WHERE no_ukg='$no_ukg' ORDER BY id_user";	
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
          <form action="" method="post" enctype="multipart/form-data" target="_self">
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label fw-bold">SURAT PERNYATAAN IZIN KEPALA SEKOLAH<span class="text-danger">*</span></label>
                <input type="file" name="file" class="form-control">
                <input type="hidden" name="id" value="<?=$row['id_user'];?>">
              </div>
              <div class="mb-3">
                <button class="btn btn-primary form-control" type="submit">Upload</button>
              </div>
            </div>
          </form>
          <?php
					if($_SERVER['REQUEST_METHOD'] == "POST"){
						require_once('config/koneksi.php');
						$id = $_POST['id'];
            $rand = rand();
            $ekstensi =  array('png','jpg','jpeg','gif','pdf');
            $filename = $_FILES['file']['name'];
            $ukuran = $_FILES['file']['size'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if(!in_array($ext,$ekstensi) ) {
                echo "<script>alert ('Format Tidak Didukung'); document.location='sp.php' </script>"; 
            }else{
              if($ukuran < 1044070){		
                $file = $rand.'_'.$filename;
                move_uploaded_file($_FILES['file']['tmp_name'], 'assets/'.$rand.'_'.$filename);
                mysqli_query($koneksi, "UPDATE user SET  surat_izin='$file' WHERE id_user='$id'");
                    echo "<script>alert ('Data berhasil ditambahkan'); document.location='berkas.php' </script>"; 
              }else{
                    echo "<script>alert ('Data gagal ditambahkan'); document.location='sp.php' </script>"; 
              }
            }
          }
            
				?>
        </div>
      </div>
    </div>
    <?php }
      } ?>
	</div>
</main>

<?php include 'footer.php' ;?>