<?php
include "koneksi.php";

  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.login.php");
  }
?>
<html>

<head>
    <title>Arcadia Library - Books Data</title>
    <script type="text/javascript" src="js/jquery.js">
    </script>
    <!-- Import Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- Import Local CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Import icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand navbar-dark bg-black">
      <div class="container">
      <a class="navbar-brand" href="index.php">
          <span><b>ArcadiaLibrary</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link link-light active" aria-current="page" href="login/logout.php">Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container" id="particles-js">
    <h1><b><i>databuku!</i></b></h1>
    <span>Data buku pinjaman di Arcadia Linrary</span>
    <table border="1" class="table table-dark">
    <tr>
        <th>NO</th>
        <th>NAMA BUKU</th>
        <th>PENGARANG</th>
        <th>TAHUN TERBIT</th>
        <th>JUMLAH</th>
    </tr>
    <?php
    include "ambildata_buku.php";
    ?>
    <tbody id="barisData">
    </tbody>
    </table>

    <p id="pesan"></p>
    <center>
        <br>
        <table>
            <div class="container">
                <div class="input-field col s6">
                    <input style="color:white;" id="kd_buku" style="width: 7%;" type="text" class="validate" name="kd_buku">
                    <label for="kd_buku">Kode Buku</label>
                </div>
                <div class="input-field col s6">
                    <input style="color:white;" id="nama_buku" style="width: 7%;" type="text" class="validate" name="nama_buku">
                    <label for="nama_buku">Judul Buku</label>
                </div>
                <div class="input-field col s6">
                    <input style="color:white;" id="pengarang" style="width: 7%;" type="text" class="validate" name="pengarang">
                    <label for="pengarang">Pengarang Buku</label>
                </div>
                <div class="input-field col s6">
                    <input style="color:white;" id="thn_terbit" style="width: 7%;" type="text" class="validate" name="thn_terbit">
                    <label for="thn_terbit">Tahun Terbit</label>
                </div>
                <div class="input-field col s6">
                    <input style="color:white;" id="jumlah" style="width: 7%;" type="text" class="validate" name="jumlah">
                    <label for="jumlah">Jumlah Buku</label>
                </div>
                <button id="tombolTambah" onclick="window.location.reload();tambahdata()" class="btn waves-effect waves" type="submit" name="action">Submit</button>
              </div>
              <br>
              <br>
        </table>
    </center>

    <script type="text/javascript">
    onload();

    function tambahdata() {
    var kd_buku = $("[name='kd_buku']").val();
    var nama_buku = $("[name='nama_buku']").val();
    var pengarang = $("[name='pengarang']").val();
    var thn_terbit = $("[name='thn_terbit']").val();
    var jumlah = $("[name='jumlah']").val();

    $.ajax({
        type: "POST",
        data: "kd_buku=" + kd_buku + "nama_buku=" + nama_buku + "&pengarang=" + pengarang + "&thn_terbit=" + thn_terbit + "&jumlah=" + jumlah,
        url: 'updatedata_buku.php',
        success: function(result) {
            var objResult = JSON.parse(result);
            $("#pesan").html(objResult.pesan);

            onload();
        }
    })
}
        onload();

        function tambahdata() {
            var nama_buku = $("[name='nama_buku']").val();
            var pengarang = $("[name='pengarang']").val();
            var thn_terbit = $("[name='thn_terbit']").val();
            var jumlah = $("[name='jumlah']").val();

            $.ajax({
                type: "POST",
                data: "nama_buku=" + nama_buku + "&pengarang=" + pengarang + "&thn_terbit=" + thn_terbit + "&jumlah=" + jumlah,
                url: 'tambahdata_buku.php',
                success: function(result) {
                    var objResult = JSON.parse(result);
                    $("#pesan").html(objResult.pesan);

                    onload();
                }
            })
        }

            function pilihData(kd_bukux){
                var kd_buku=kd_bukux;
                $.ajax({
                    type:"POST",
                    data:"kd_buku="+kd_buku,
                    url:"ambilID_buku.php",
                    success:function(result){
                        var objResult=JSON.parse(result);
                            $("[name='nama_buku']").val(objResult.nama_buku);
                            $("[name='kd_buku']").val(objResult.kd_buku);
                            $("[name='pengarang']").val(objResult.pengarang);
                            $("[name='thn_terbit']").val(objResult.thn_terbit);
                            $("[name='jumlah']").val(objResult.jumlah);
                            $("#tombolTambah").hide();
                            $("#tombolUpdate").show();
                    }
                })
            }
        

        function onload() {
            var dataHandler = $("#barisData");
            dataHandler.html("");
            $.ajax({
                type: "GET",
                data: "",
                url: 'ambildata_buku.php',
                success: function(result) {
                    var objResult = JSON.parse(result);
                    var nomor = 1;
                    $.each(objResult, function(key, val) {
                        var barisBaru = $("<tr>");
                        barisBaru.html("<td>" + nomor + "</td><td>" + val.nama_buku + "</td><td>" + val.pengarang + "</td><td>" +
                            val.thn_terbit + "</td><td>" + val.jumlah + "</td><td><button onclick='pilihData("+val.kd_buku+")'>Select</button></td>");
                        dataHandler.append(barisBaru);
                        nomor++;
                        $("#tombolUpdate").hide();
                        $("#tombolTambah").show();
                    })
                }
            })
        }
    </script>
    <div>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
</body>
</html>