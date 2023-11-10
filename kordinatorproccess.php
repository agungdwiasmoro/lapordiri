<?php include 'config/koneksi.php' ;?>
<?php
// get elemen dari form
$id = $_POST['id'];
$nama_sekolah = $_POST['sekolah'];
$nama_kordinator = $_POST['nama'];
$kontak = $_POST['kontak'];
$nip = $_POST['nip'];
$nik = $_POST['nik'];
$golongan = $_POST['golongan'];
$jabatan = $_POST['jabatan'];
$npwp = $_POST['npwp'];
$nama_penerima = $_POST['nama_penerima'];
$kontak_penerima = $_POST['kontak_penerima'];
$provinsi = $_POST['provinsi'];
$kabupaten = $_POST['kabupaten'];
$kecamatan = $_POST['kecamatan'];
$pos = $_POST['kode_pos'];
$alamat = $_POST['alamat_lengkap'];
$bank = $_POST['bank'];
$no_rekening = $_POST['rekening'];
$atas_nama = $_POST['atas_nama'];
$cabang = $_POST['cabang'];


// query yang akan dijalankan
$query = "UPDATE kordinator_sekolah SET nama_sekolah='$nama_sekolah', nama_kordinator='$nama_kordinator', kontak='$kontak', nip='$nip', nik='$nik', golongan='$golongan', pangkat='$jabatan', npwp='$npwp', nama_penerima='$nama_penerima', kontak_pengiriman='$kontak_penerima', provinsi_pengiriman='$provinsi', kabupaten_pengiriman='$kabupaten', kecamatan_pengiriman='$kecamatan', kp_pengiriman='$pos', alamat_pengiriman='$alamat', nama_bank='$bank', no_rekening='$no_rekening', cabang='$cabang', nama_rekening='$atas_nama' WHERE id_kordinator = '$id'";

$result = mysqli_query($koneksi, $query);
if ($result) {
  echo "<script>alert ('Data berhasil ditambahkan'); document.location='koordinator.php' </script>"; 
} else {
  die('invalid Query : ' . mysqli_error($koneksi));
}