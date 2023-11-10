<?php include 'config/koneksi.php';

$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_ukg = $_POST['no_ukg'];
$nik = $_POST['nik'];
$nip = $_POST['nip'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$nuptk = $_POST['nuptk'];
$telepon = $_POST['telepon'];
$kontak_darurat = $_POST['kontak_darurat'];
$no_darurat = $_POST['no_darurat'];
$sekolah = $_POST['sekolah'];
$npsn = $_POST['npsn'];
$jenjang = $_POST['jenjang'];
$jabatan = $_POST['jabatan'];
$lptk = "Universitas Muhammadiyah Purworejo";
$bidang_studi = $_POST['bidang_studi'];
$nama_kelas = $_POST['kelas'];
$sumber_pembiayaan = $_POST['sumber_pembiayaan'];
$provinsi_rumah = $_POST['provinsi_rumah'];
$kabupaten_rumah = $_POST['kabupaten_rumah'];
$kecamatan_rumah = $_POST['kecamatan_rumah'];
$kp_rumah = $_POST['kp_rumah'];
$alamat_rumah = $_POST['alamat_rumah'];
$nama_penerima = $_POST['nama_penerima'];
$kontak_penerima = $_POST['kontak_penerima'];
$provinsi_pengiriman = $_POST['provinsi_pengiriman'];
$kabupaten_pengiriman = $_POST['kabupaten_pengiriman'];
$kecamatan_pengiriman= $_POST['kecamatan_pengiriman'];
$kp_pengiriman = $_POST['kp_pengiriman'];
$alamat_pengiriman = $_POST['alamat_pengiriman'];
$instansi_asal = $_POST['instansi_asal'];
$alamat_instansi  = $_POST['alamat_instansi'];
$provinsi_instansi = $_POST['provinsi_instansi'];
$kabupaten_instansi = $_POST['kabupaten_instansi'];
$kp_instansi = $_POST['kp_instansi'];
$nama_rekening = $_POST['nama_rekening'];
$npwp = $_POST['npwp'];
$nama_bank = $_POST['nama_bank'];
$cabang_bank = $_POST['nama_bank'];
$no_rekening = $_POST['no_rekening'];
$operator = $_POST['operator'];
$no_data = $_POST['no_data'];
$status = "Lapor Diri";

$query = "UPDATE user SET nama_lengkap='$nama_lengkap', no_ukg='$no_ukg', nik='$nik', nip='$nip', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', gender='$gender', nuptk='$nuptk', telepon='$telepon', kontak_darurat='$kontak_darurat', no_darurat='$no_darurat', sekolah='$sekolah', npsn_sekolah='$npsn', jenjang='$jenjang', jabatan='$jabatan', lptk='$lptk', bidang_studi='$bidang_studi', nama_kelas='$nama_kelas', provinsi_rumah='$provinsi_rumah', kabupaten_rumah='$kabupaten_rumah', kecamatan_rumah='$kecamatan_rumah', kp_rumah='$kp_rumah', alamat_rumah='$alamat_rumah', nama_penerima='$nama_penerima', kontak_penerima='$kontak_penerima', provinsi_pengiriman='$provinsi_pengiriman', kabupaten_pengiriman='$kabupaten_pengiriman', kecamatan_pengiriman='$kecamatan_pengiriman', kp_pengiriman='$kp_pengiriman', alamat_pengiriman='$alamat_pengiriman', instansi_asal='$instansi_asal', alamat_instansi_asal='$alamat_instansi', provinsi_instansi_asal='$provinsi_instansi', kabupaten_instansi_asal='$kabupaten_instansi', kp_instansi_asal='$kp_instansi', nama_rekening='$nama_rekening', npwp='$npwp', nama_bank='$nama_bank', cabang_bank='$cabang_bank', no_rekening='$no_rekening', operator='$operator', no_data='$no_data', status='$status' WHERE id_user='$id'";

$result = mysqli_query($koneksi, $query);
if ($result) {
  echo "<script>alert ('Data berhasil disimpan'); document.location='berkas.php' </script>"; 
} else {
  die('invalid Query : ' . mysqli_error($koneksi));
}