<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/14a8fd6b3b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/shards.min.css?v=3.0.0">
		<link rel="stylesheet" href="/css/shards-demo.min.css?v=3.0.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
		<title>PPDB SMK Batik 2 Surakarta</title>
</head>
<body class="bg-primary" style="font-family: Poppins;">
  
  <div class="row text-center mx-auto mb-5" style="max-width: 700px; margin-top: -10px;">
    <div class="col-12">
      <div class="card mb-5 text-black pt-2" style="background: #FFB400;">
        <div class="card-body pt-3 pb-3">
          <div class="row">
            <div class="col-2">
              <a href="/">
                <i class="fas fa-arrow-left text-danger"></i>
              </a>
            </div>
            <div class="col-8">
              Hai, <b>{{ $pendaftar->nama_siswa }}</b>!
            </div>
            <div class="col-2">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 mb-5">

      <div class="card mb-2">
        <div class="card-header bg-light">Status Saat Ini</div>
          <div class="card-body">
          <br>
          <h2 class="text-primary"><b>{{ ucfirst($pendaftar->status) }}</b></h2>
          <br> <hr>
          <div class="text-justify" style="font-size: 11pt;">

            @if($pendaftar->status == 'pembayaran')
              Selamat <b>{{$pendaftar->nama_siswa}}</b>! Kamu baru saja menyelesaikan tahap pertama pendaftaran
              online di SMK Batik 2 Surakarta. 
              <br> <br>
              Langkah selanjutnya silahkan cetak formulir pendaftaran di bawah,
              kemudian lakukan pembayaran biaya pendaftaran.
            @endif

            @if($pendaftar->status == 'daftar ulang')
              Selamat <b>{{$pendaftar->nama_siswa}}</b>! Kamu baru saja menyelesaikan tahap kedua pendaftaran
              online di SMK Batik 2 Surakarta. 
              <br> <br>
              Langkah selanjutnya silahkan lakukan daftar ulang di SMK Batik 2 Surakarta dengan membawa berkas
              Formulir Pendaftaran yang sudah dicetak.
            @endif

            @if($pendaftar->status == 'pengumuman')
              Selamat <b>{{$pendaftar->nama_siswa}}</b>! Kamu baru saja menyelesaikan tahap ketiga pendaftaran
              online di SMK Batik 2 Surakarta. 
              <br> <br>
              Langkah selanjutnya silahkan menunggu pengumuman hasil pendaftaran di SMK Batik 2 Surakarta.
            @endif

            @if($pendaftar->status == 'lulus')
              Selamat <b>{{$pendaftar->nama_siswa}}</b>! Kamu <b>LULUS</b> dan diterima sebagai siswa SMK Batik 2 Surakarta.
            @endif

            @if($pendaftar->status == 'tidak lulus')
              Maaf <b>{{$pendaftar->nama_siswa}}</b>, Kamu <b>TIDAK LULUS</b> dan belum diterima sebagai siswa SMK Batik 2 Surakarta.
            @endif

            <br> <br>
            Simpan dan ingat baik-baik kode pendaftaran kamu ya!
            <br> <hr> <br>
            <div class="text-center">
              Kode Pendaftaran :
              <br>
              <div style="font-size: 30pt;">
                <b>{{Hashids::encode($pendaftar->id)}}</b>
              </div>
            </div>
          </div>
          
        </div>
        <div class="card-footer bg-dark">
          <span style="font-weight: 300;" class="badge badge-success mb-2">Pengisian Form Online</span>
          <span style="font-weight: 300;" class="badge 
          @if($pendaftar->status == 'pembayaran') 
          badge-primary animate__animated animate__flash animate__infinite animate__slower
          @elseif($pendaftar->status == 'daftar ulang')
          badge-success
          @elseif($pendaftar->status == 'pengumuman')
          badge-success
          @else
          badge-success
          @endif">Pembayaran</span>

          <span style="font-weight: 300;" class="badge 
          @if($pendaftar->status == 'pembayaran') 
          badge-secondary
          @elseif($pendaftar->status == 'daftar ulang')
          badge-primary animate__animated animate__flash animate__infinite animate__slower
          @elseif($pendaftar->status == 'pengumuman')
          badge-success
          @else
          badge-success
          @endif">Daftar Ulang</span>

          <span style="font-weight: 300;" class="badge 
          @if($pendaftar->status == 'pembayaran') 
          badge-secondary
          @elseif($pendaftar->status == 'daftar ulang')
          badge-secondary
          @elseif($pendaftar->status == 'pengumuman')
          badge-primary animate__animated animate__flash animate__infinite animate__slower
          @else
          badge-success
          @endif">Pengumuman</span>
        </div>
      </div>
    </div>

    <div class="col-12">
      <div class="card">
        <div class="card-header bg-dark text-light">Cetak Formulir</div>
        <div class="card-body">
        <a href="/cetak/{{$kode}}" class="btn btn-primary" target="_blank">
            <i class="fas fa-download"></i>
            Download
          </a>
        </div>
      </div>
    </div>
  </div>

<script async defer src="https://buttons.github.io/buttons.js"></script>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="/js/shards.min.js"></script>
<script src="/js/demo.min.js"></script>


</body>
</html>