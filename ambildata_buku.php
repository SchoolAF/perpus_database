<?php
    include "koneksi.php";
    $no=1;
    $ambildata = mysqli_query($connect,"SELECT*FROM tbl_buku");

    while($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
        <td>$no</td>
        <td>$tampil[nama_buku]</td>
        <td>$tampil[pengarang]</td>
        <td>$tampil[thn_terbit]</td>
        <td>$tampil[jumlah]</td>
        </tr>";
        $no++;
    }
    ?>