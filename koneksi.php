<?php
$connect = new mysqli("localhost", "root", "", "perpus_smk");
if (!$connect) {
    echo "koneksi gagal";
    exit();
}
?>