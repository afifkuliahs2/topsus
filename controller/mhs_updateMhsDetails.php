<?php
include '../config/DbConnect.php' ;

$id_mhs = $_POST['id_mhs'];
$nrp = $_POST['nrp'];
$nama_mhs = $_POST['nama_mhs'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['datepicker'];
$tgl_lahir = date('Y-m-d', strtotime($tgl_lahir));
$alamat = $_POST['alamat'];
$dosen_wali = $_POST['dosen_wali'];
$spp = $_POST['spp'];

$data = array(
  'nrp' => $nrp,
  'nama_mhs' => $nama_mhs,
  'tempat_lahir' => $tempat_lahir,
  'tgl_lahir' => $tgl_lahir,
  'alamat' => $alamat,
  'dosen_wali' => $dosen_wali,
  'spp' => $spp,
  'is_edit' => '0'
);
$mhs = $db->frs_mahasiswa->where("id_mhs", "".$id_mhs."");
if($mhs->fetch()){
  $result = $mhs->update($data);
}
?>
