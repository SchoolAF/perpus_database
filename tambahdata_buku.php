<?php
include "koneksi.php";
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
    $queryResult = $connect->query("INSERT INTO tbl_buku (nama_buku , pengarang , thn_terbit , jumlah)
    VALUES ('" . $nama_buku . "','" . $pengarang . "','" . $thn_terbit . "','" . $jumlah . "')");
    if ($queryResult) {
        $result['pesan'] = "Data Berhasil di tambahkan";
    } else {
        $result['pesan'] = "Data gagal di tambahkan";
    }
}
echo json_encode($result);
?>