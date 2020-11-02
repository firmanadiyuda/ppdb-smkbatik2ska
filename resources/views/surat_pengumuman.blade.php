<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"> --}}
    {{-- <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Krona+One&family=Syncopate:wght@400;700&display=swap" rel="stylesheet"> --}}

    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    {{-- <link rel="stylesheet" href="css/shards.min.css?v=3.0.0">
    <link rel="stylesheet" href="css/shards-demo.min.css?v=3.0.0"> --}}

    <title>Document</title>

</head>

<body style="color: #444444; font-family: 'Times New Roman', Times, serif">

  <table width=100% style="text-align: center;">
    <tr>
      <td>
        <img src="images/smkbatik2.jpg" alt="" width="75">
      </td>
      <td>
        <div style="font-size: 8pt;"> YAYASAN PENDIDIKAN BATIK SURAKARTA </div>
        <div style="font-size: 15pt; letter-spacing: 1px;"> <b> SMK BATIK 2 SURAKARTA </b></div>
        <div style="font-size: 10pt;"> TERAKREDITASI .A. ( Amat Baik ) </div>
        <div style="font-size: 8pt; margin-top: 5px;"> <b> BIDANG KEAHLIAN : </b> </div>
        <div style="font-size: 8pt;">BISNIS MANAJEMEN - TEKNOLOGI INFORMASI DAN KOMUNIKASI - PARIWISATA</div>
        <div style="font-size: 10pt;">Jl. Slamet Riyadi, Kleco, Surakarta. Telp/Fax : 0271-712810</div>
        <div style="font-size: 8pt;">Web : smkbatik2surakarta.sch.id, E-mail : smkbatik2ska@gmail.com </div>
      </td>
      <td>
        <img src="images/yayasanbatik.jpg" alt="" width="80">
      </td>
    </tr>
  </table>

  <hr style="border-width: 2px; margin-bottom: -5px;" color="grey">
  <hr style="border-width: 1px;" color="grey">

<div style="text-align: center">
    <br>
    PANITIA PENERIMAAN SISWA BARU <br>
    <b style="font-size: 15pt;">SMK BATIK 2 SURAKARTA</b> <br>
    TAHUN PELAJARAN 2020/2021 <br>
    <br>
    <h1 style="color: green;">SELAMAT</h1>
    <br>
    <div style="font-size: 15pt;"> Kepada, <b> {{$pendaftar->nama_siswa}} </div> <br>
    </b>. Anda Dinyatakan <b>DITERIMA SEBAGAI SISWA BARU SMK BATIK 2 SURAKARTA JURUSAN {{strtoupper($pendaftar->jurusan)}} TAHUN PELAJARAN 2020/2021 </b> <br>


</div>

<br> <br>

<table style="width: 100%; text-align: left; z-index: 2;">
    <tr>
        <td style="width: 65%;">

        </td>
        <td>
            Surakarta, {{date("d-m-Y")}} <br>
            Kepala Sekolah, <br>
            SMK BATIK 2 SURAKARTA
            <br>
            <br>
            <br>
            <br>
            <br>
            <b>Achyar Susanto, S.Pd, M.Si</b> <br>
            NIK. 176 195 796
        </td>
    </tr>
</table>

<div style="position: relative;">
    <img src="images/parafcap.jpg" style="position: absolute; z-index: -1; top: -150px; left: 400px;" width="250px;">
</div>

</body>

</html>
