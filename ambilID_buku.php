<?php
include 'koneksi.php';
$kd_buku = $_POST['kd_buku'];
$result = array ();
$queryResult = $connect->query ("SELECT * FROM tbl_buku WHERE kd_buku=".$ld_buku."");
$fetchData = $queryResult->fetch_assoc();
$result = $fetchData;
echo json_encode ($result);
?>