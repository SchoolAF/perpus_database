<?php
include "koneksi.php";
?>
<html>

<head>
    <title>Data Buku</title>
    <script type="text/javascript" src="js/jquery.js">
    </script>
    <!-- Import Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- Import Local CSS -->
    <link rel="stylesheet" href="style.css" />
    <!-- Import icon CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="buxx_container">
    <h1>Data Buku</h1>
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
    <table>
    <br>
        <tr>
            <label for="kd_buku">Kode Buku</label>
            <input id="kd_buku" style="width: 25%;" type="text" class="form-control" name="kd_buku">
        </tr>
        <br>
        <tr>
            <label for="nama_buku">Judul Buku</label>
            <input id="nama_buku" type="text" style="width: 25%;" class="form-control" name="nama_buku">
        </tr>
        <br>
        <tr>
            <label for="pengarang">Pengarang Buku</label>
            <input id="pengarang" type="text" style="width: 25%;" class="form-control" name="pengarang">
        </tr>
        <br>
        <tr>
            <label for="thn_terbit">Tahun Terbit Buku</label>
            <input id="thn_terbit" type="text" style="width: 25%;" class="form-control" name="thn_terbit">
        </tr>
        <br>
        <tr>
            <label for="jumlah">Jumlah Buku</label>
            <input id="jumlah" type="text" style="width: 25%;" class="form-control" name="jumlah">
        </tr>
        <tr>
            <br>
            <button class="btn btn-outline-light" id="tombolTambah" onclick="tambahdata()">Submit Data</button>
            <!-- <button class="btn btn-outline-light" id="tombolUpdate" onclick="updatedata()">Update Data</button> -->
        </tr>
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
</body>

</html>