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

  <table width=100% style="text-align: center; margin-bottom:-10px;">
    <tr>
      <td width=20%></td>
      <td width=60%>
        <b>  
          <p style="font-size: 13px; line-height: 18px; margin-top: 0px;">
          FORMULIR PENDAFTARAN PESERTA DIDIK BARU (PPDB) <br>
          <font style="font-size: 20px;"> KELAS X </font> <br>
          SMK BATIK 2 SURAKARTA <br>
          TAHUN PELAJARAN 2020/2021</p>
        </b>
      </td>
      <td width=25%>
        <table border=1px width=100% height=100%>
          <tr style="text-align: center;">
            <td style="font-size: 12px; text-align: center;"><b>KODE PENDAFTARAN</b></td>
          </tr>
          <tr style="height: 100%; text-align: center;">
          <td style="font-size: 30px; background:#333333; color: white; text-align: center;"><b>{{$kode}}</b></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <hr style="border-width: 0.5px;" color="grey">

  {{-- <table width=100% style="margin-top: 20px;">
    <tr bgcolor=#333333 style="color: white;">
      <td style="padding:10px; text-align: center;"><b>IDENTITAS DIRI</b></td>
    </tr>
  </table> --}}


  <div style="font-size: 10pt">
  <div style="padding-left: 30px; padding-right: 30px;">
  <table style="">
    <tr style="vertical-align: top;">
      <td width=180px>
        <b>Nama Lengkap</b>
      </td>
      <td width=20px>
        :
      </td>
      <td>
        {{ $pendaftar['nama_siswa'] }}
      </td>
    </tr>

    <tr style="vertical-align: top;">
      <td width=180px>
        <b>NISN</b>
      </td>
      <td width=20px>
        :
      </td>
      <td>
        {{ $pendaftar['nisn'] }}
      </td>
    </tr>

    <tr style="vertical-align: top;">
      <td width=180px>
        <b>Jenis Kelamin</b>
      </td>
      <td width=20px>
        :
      </td>
      <td>
        @if($pendaftar['jenis_kelamin'] == 1)
          Laki - Laki
        @else
          Perempuan
        @endif
      </td>
    </tr>

    <tr style="vertical-align: top;">
      <td width=180px>
        <b>Tempat & Tanggal Lahir</b>
      </td>
      <td width=20px>
        :
      </td>
      <td>
        {{ $pendaftar['tempat_lahir'] }},
        {{ date("j F Y", strtotime($pendaftar['tanggal_lahir'])) }}
      </td>
    </tr>

    <tr style="vertical-align: top;">
      <td width=180px>
        <b>Agama</b>
      </td>
      <td width=20px>
        :
      </td>
      <td>
        {{ $pendaftar['agama'] }}
      </td>
    </tr>

    <tr style="vertical-align: top;">
      <td width=180px>
        <b>Alamat Lengkap</b>
      </td>
      <td width=20px>
        :
      </td>
      <td>
        {{ $pendaftar['alamat_siswa'] }}
      </td>
    </tr>

    <tr style="vertical-align: top;">
      <td width=180px>
        <b>Telp/HP</b>
      </td>
      <td width=20px>
        :
      </td>
      <td>
        {{ $pendaftar['telp_hp_siswa'] }}
      </td>
    </tr>

    <tr style="vertical-align: top;">
      <td width=180px>
        <b>Asal Sekolah</b>
      </td>
      <td width=20px>
        :
      </td>
      <td>{{ $pendaftar['asal_sekolah'] }}</td>
    </tr>

    <tr style="vertical-align: top;">
      <td width=180px>
        <b>Nilai Ujian Akhir Nasional</b>
      </td>
      <td width=20px>
        :
      </td>
      <td>{{ $pendaftar['nilai_uan'] }}</td>
    </tr>

    <table width=100% style="text-align: center; border: 1px solid black; border-collapse: collapse;">
      <tr>
        <td style="border: 1px solid black;">NO</td>
        <td style="border: 1px solid black;">MATA UJIAN</td>
        <td style="border: 1px solid black;">NILAI</td>
      </tr>
      
      <tr>
        <td style="border: 1px solid black;">1</td>
        <td style="text-align: left; border: 1px solid black;">Bahasa Indonesia</td>
        <td style="border: 1px solid black;">{{ $pendaftar['nilai_bahasa_indonesia'] }}</td>
      </tr>

      <tr>
        <td style="border: 1px solid black;">2</td>
        <td style="text-align: left; border: 1px solid black;">Matematika</td>
        <td style="border: 1px solid black;">{{ $pendaftar['nilai_matematika'] }}</td>
      </tr>

      <tr>
        <td style="border: 1px solid black;">3</td>
        <td style="text-align: left; border: 1px solid black;">Bahasa Inggris</td>
        <td style="border: 1px solid black;">{{ $pendaftar['nilai_bahasa_inggris'] }}</td>
      </tr>

      <tr>
        <td style="border: 1px solid black;">4</td>
        <td style="text-align: left; border: 1px solid black;">IPA</td>
        <td style="border: 1px solid black;">{{ $pendaftar['nilai_ipa'] }}</td>
      </tr>
    </table>
  </table>

</div>

{{-- <table width=100% style="margin-top: 20px;">
  <tr bgcolor=#333333 style="color: white;">
    <td style="padding:10px; text-align: center;"><b>IDENTITAS ORANG TUA</b></td>
  </tr>
</table> --}}


<div style="padding-left: 30px; padding-right: 30px;">
<table style="">
  <tr style="vertical-align: top;">
    <td width=180px>
      <b>Nama Orang Tua</b>
    </td>
    <td width=20px>
      :
    </td>
    <td>
      {{ $pendaftar['nama_ortu'] }}
    </td>
  </tr>

  <tr style="vertical-align: top;">
    <td width=180px>
      <b>Pekerjaan</b>
    </td>
    <td width=20px>
      :
    </td>
    <td>
      {{ $pendaftar['pekerjaan_ortu'] }}
    </td>
  </tr>

  <tr style="vertical-align: top;">
    <td width=180px>
      <b>Telp/HP</b>
    </td>
    <td width=20px>
      :
    </td>
    <td>
      {{ $pendaftar['telp_hp_ortu'] }}
    </td>
  </tr>

  <tr style="vertical-align: top;">
    <td width=180px>
      <b>Alamat Lengkap</b>
    </td>
    <td width=20px>
      :
    </td>
    <td>
      {{ $pendaftar['alamat_ortu'] }}
    </td>
  </tr>

  <tr style="vertical-align: top;">
    <td width=180px>
      <b>Nama Wali</b>
    </td>
    <td width=20px>
      :
    </td>
    <td>
      {{ $pendaftar['nama_wali'] }}
    </td>
  </tr>

  <tr style="vertical-align: top;">
    <td width=180px>
      <b>Pekerjaan Wali</b>
    </td>
    <td width=20px>
      :
    </td>
    <td>
      {{ $pendaftar['pekerjaan_wali'] }}
    </td>
  </tr>

  <tr style="vertical-align: top;">
    <td width=180px>
      <b>Telp/HP Wali</b>
    </td>
    <td width=20px>
      :
    </td>
    <td>
      {{ $pendaftar['telp_hp_wali'] }}
    </td>
  </tr>

  <tr style="vertical-align: top;">
    <td width=180px>
      <b>Alamat Lengkap Wali</b>
    </td>
    <td width=20px>
      :
    </td>
    <td>
      {{ $pendaftar['alamat_wali'] }}
    </td>
  </tr>

</table>

<table width=100% style="margin-top: 15px;">
  <tr style="vertical-align: top;">
    <td width=180px>
    </td>
    <td>
      <table style="margin-top: 10px; border-collapse: collapse; text-align: center; width: 75px; height: 110px;">
        <tr>
          <td>
            <div style="border: 1px solid black; height: 75px; margin-top: -20px;">
              <br>
            Pas photo <br>
            3x4
            </div>
          </td>
        </tr>
      </table>
    </td>
    <td style="text-align: center;">
      <b>
        Surakarta, {{date("d-m-Y")}} <br>
      </b>
      Calon Siswa Pendaftar, 
      <br>
      <br>
      <br>
      <br>
      {{ $pendaftar['nama_siswa'] }}
    </td>
  </tr>
</table>

<b><i><u>Catatan:</u></i></b> <br>
Formulir setelah diisi supaya dikembalikan kepada Panitia Peserta Didik Baru dan dilampiri :
<ol>
  <li>Fotocopy STTB SMP/MTs yang telah disahkan oleh Kepala Sekolah</li>
  <li>STK/DANEM Asli/Fotocopy yang telah disahkan oleh Kepala Sekolah</li>
  <li>Pas Photo 3x4cm = 5 lembar</li>
  <li>Bagi siswa yang belum keluar Ijazah dan DANEM nya supaya mengumpulkan Fotocopy Raport dari Sem 1 s/d 5 dan dilegalisir Kepala Sekolah.</li>
</ol>

</div>

</div>


</div>

</body>

</html>
