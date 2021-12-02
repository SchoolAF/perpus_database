<?php
include "koneksi.php";
?>
<html>

<head>
    <title>Arcadia Library - Home</title>
    <script type="text/javascript" src="js/jquery.js">
    </script>
    <!-- Import Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- Import Local CSS -->
    <link rel="stylesheet" href="style.css" />
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
              <a class="nav-link link-light active" aria-current="page" href="login/login.php">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
    <center>
    <br>   
    <br>
    <h1>Arcadia Library SMK N 1 Bukttinggi</h1>
    <br>
    <span>  Sebuah perpustakaan berbasis digital dengan data buku terlengkap. Merupakan sebuah project dari Siswa SMN 1 Bukttinggi untuk Siswa Siswa SMN 1 Bukttinggi</span>
    <br>
    <br>
    <a class="btn btn-outline-light" href="buku.php">Data Buku</a>
    <br>
    </center>
  </div>
  </body>

</html>