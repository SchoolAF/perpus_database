<?php
$connect = new mysqli("localhost", "root", "", "php_perpus");
if (!$connect) {
    echo "koneksi gagal";
    exit();
}
?>