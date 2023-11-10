<?php include 'config/koneksi.php' ;?>
<?php 
$id = $_POST['id'];
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif','pdf');
$filename = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$ekstensi) ) {
    echo "<script>alert ('Format Tidak Didukung'); document.location='koordinator.php' </script>"; 
}else{
	if($ukuran < 1044070){		
		$file = $rand.'_'.$filename;
		move_uploaded_file($_FILES['file']['tmp_name'], 'assets/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "UPDATE kordinator_sekolah SET  scan_rekening='$file' WHERE id_kordinator='$id'");
        echo "<script>alert ('Data berhasil ditambahkan'); document.location='koordinator.php' </script>"; 
	}else{
        echo "<script>alert ('Data gagal ditambahkan'); document.location='koordinator.php' </script>"; 
	}
}