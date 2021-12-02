<?php
include "koneksi.php";
$kd_buku = $_POST['kd_buku']
$nama_buku = $_POST['nama_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$jumlah = $_POST['jumlah'];
$result['pesan'] = "";
if ($nama_buku == "") {
    $result['pesan'] = "Nama Buku harus di isi";
} else if ($pengarang == "") {
    $result['pesan'] = "Pengarang harus di isi";
} else if ($thn_terbit == "") {
    $result['pesan'] = "Tahun terbit harus di isi";
} else if ($jumlah == "") {
    $result['pesan'] = "Jumlah tidak boleh kosong";
} else {
    $queryResult = $connect->query ("UPDATE tbl_buku SET nama_buku = '".$nama_buku."' , pengarang = '".$pengarang."' , thn_terbit = '".$thn_terbit."' , jumlah = '".$jumlah."'
    WHERE kd_buku = '".$kd_buku."'");
    if ($queryResult) {
        $result['pesan'] = "Data Berhasil di update";
    } else {
        $result['pesan'] = "Data gagal di update";
    }
}
echo json_encode($result);
?>