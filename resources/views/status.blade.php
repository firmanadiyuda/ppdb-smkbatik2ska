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
  
  <div class="row text-center mx-auto mb-5" style="max-width: 900px; margin-top: -10px;">
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
    
    @if (count($errors) > 0)

    <div class="col-12">

      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>

@endif

    <div class="col-12 mb-2">

      <div class="card mb-2">
        <div class="card-header bg-light">Status Saat Ini</div>
          <div class="card-body">
          <br>
          <h2 class="text-primary"><b>{{ ucfirst($pendaftar->status) }}</b></h2>
          <br> <hr> <br>
          <div class="text-justify" style="font-size: 11pt;">

            @if($pendaftar->status == 'Segera Melakukan Pembayaran')
              Hai <b>{{$pendaftar->nama_siswa}}</b>! Kamu baru saja menyelesaikan tahap pertama pendaftaran
              online di SMK Batik 2 Surakarta. 
              <br> <br>
              Langkah selanjutnya silahkan lakukan pembayaran biaya pendaftaran sebesar <b>Rp50.000</b>. Setelah melakukan pembayaran, 
              lakukan konfirmasi pembayaran dengan cara mengunggah foto atau screenshot bukti pembayaran melalui tombol di bawah ini.
              <br> <br>
              Atau kamu bisa juga melakukan pembayaran langsung dengan cara datang ke SMK Batik 2 Surakarta dan menyerahkannya ke panitia.
            @endif

            @if($pendaftar->status == 'Menunggu Validasi Pembayaran')
              Hai <b>{{$pendaftar->nama_siswa}}</b>! Kamu baru saja mengunggah bukti biaya pendaftaran di SMK Batik 2 Surakarta. Silahkan tunggu 
              proses validasi bukti pembayaran oleh tim kami ya!
            @endif

            @if($pendaftar->status == 'Segera Melakukan Daftar Ulang')
              Hai <b>{{$pendaftar->nama_siswa}}</b>! Kamu baru saja menyelesaikan pembayaran biaya pendaftaran di SMK Batik 2 Surakarta. 
              <br> <br>
              Langkah selanjutnya silahkan <b>Cetak Formulir Pendaftaran</b> kamu di bawah. Kemudian lakukan daftar ulang dengan datang langsung ke SMK Batik 2 Surakarta dan melakukan interview dengan membawa berkas Formulir Pendaftaran yang sudah dicetak disertai lampiran berikut : <br><br>

              <b>
                <ol>
                  <li>Fotocopy STTB SMP/MTs yang telah disahkan oleh Kepala Sekolah</li>
                  <li>STK/DANEM Asli/Fotocopy yang telah disahkan oleh Kepala Sekolah</li>
                  <li>Pas Photo 3x4cm = 5 lembar</li>
                  <li>Bagi siswa yang belum keluar Ijazah dan DANEM nya supaya mengumpulkan Fotocopy Raport dari Semester 1 s/d 5 dan dilegalisir Kepala Sekolah</li>
                </ol>
              </b>
            @endif

            @if($pendaftar->status == 'Pengumuman')
              Hai <b>{{$pendaftar->nama_siswa}}</b>! Kamu baru saja menyelesaikan Daftar Ulang dan Interview di SMK Batik 2 Surakarta. 
              <br> <br>
              Langkah selanjutnya silahkan menunggu pengumuman hasil pendaftaran. Pengumuman akan ditampilkan di sini. Kamu bisa mengecek secara berkala ya.
            @endif

            @if($pendaftar->status == 'Diterima')
              Selamat <b>{{$pendaftar->nama_siswa}}</b>! Kamu <b>DITERIMA</b> sebagai siswa SMK Batik 2 Surakarta. <br>
              Silahkan ambil surat rekomendasi di bagian Admin.
            @endif

            @if($pendaftar->status == 'Tidak Diterima')
              Hai <b>{{$pendaftar->nama_siswa}}</b>! Maaf, kamu <b>TIDAK DITERIMA</b> sebagai siswa SMK Batik 2 Surakarta. Tetap Semangat dan Jangan Putus Asa yaaa ^_^
            @endif

            <br> <br> <br>
            Oh iya, simpan dan ingat baik-baik <b>kode login</b> kamu ya!
            <br> <br> <hr>

            <div class="w-100 text-center">
              @if($pendaftar->status == 'Segera Melakukan Pembayaran')
                {{-- <a href="/cetak/{{$kode}}" class="btn btn-primary mb-2" target="_blank">
                  <i class="fas fa-upload"></i>
                  Upload Bukti Pembayaran
                </a> --}}
                <button type="button" class="btn btn-primary mb-2"  data-toggle="modal" data-target="#detail-modal">
                  <span class="text-light">
                  <i class="fas fa-upload"></i> &nbsp;
                </span> Upload Bukti Pembayaran
                </button>

            <!-- Modal -->
            <div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Upload bukti pembayaran </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="/uploadbuktipembayaran" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="custom-file mb-3 text-left">
                        <input type="file" class="custom-file-input" id="bukti_pembayaran" name="bukti_pembayaran" onchange="FileSelected()" required>
                        <input type="text" class="form-control" name="id" hidden value="{{ $pendaftar->id }}">
                        <label class="custom-file-label" id="nama_file" for="customFile">Pilih file...</label>
                        <br> <br>
                        File yang diupload harus berformat <b> jpeg,png,jpg </b> dan harus berukuran tidak lebih dari <b>2048</b>Kb.
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                      <button type="submit" class="btn btn-primary">Upload</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

              @endif
              <a href="/cetak/{{$kode}}" class="btn btn-success mb-2" target="_blank">
                <i class="fas fa-download"></i> &nbsp;
                Cetak Formulir
              </a>
            </div>
            
            <hr> <br>
            <div class="text-center">
              Kode Login :
              <br>
              <div style="font-size: 30pt;">
                <b>{{Hashids::encode($pendaftar->id)}}</b>
              </div>
            </div>
          </div>
          
        </div>
        <div class="card-footer bg-dark">
          <span style="font-weight: 300;" class="badge badge-success mb-2">Pengisian Form Online</span>
          

          {{-- Badge Segera Melakukan Pembayaran Start --}}
          <span style="font-weight: 300;" class="mb-2 badge
          @if($pendaftar->status == 'Segera Melakukan Pembayaran')
          badge-primary animate__animated animate__flash animate__infinite animate__slower

          @elseif($pendaftar->status == 'Menunggu Validasi Pembayaran')
          badge-success

          @elseif($pendaftar->status == 'Segera Melakukan Daftar Ulang')
          badge-success

          @elseif($pendaftar->status == 'Pengumuman')
          badge-success
          
          @else
          badge-success
          
          @endif">Segera Melakukan Pembayaran</span>
          {{-- Badge Segera Melakukan Pembayaran End --}}
          

          {{-- Badge Menunggu Validasi Pembayaran Start --}}
          <span style="font-weight: 300;" class="mb-2 badge
          @if($pendaftar->status == 'Segera Melakukan Pembayaran')
          badge-secondary

          @elseif($pendaftar->status == 'Menunggu Validasi Pembayaran') 
          badge-primary animate__animated animate__flash animate__infinite animate__slower

          @elseif($pendaftar->status == 'Segera Melakukan Daftar Ulang')
          badge-success

          @elseif($pendaftar->status == 'Pengumuman')
          badge-success

          @else
          badge-success
          
          @endif">Menunggu Validasi Pembayaran</span>
          {{-- Badge Menunggu Validasi Pembayaran End --}}


          {{-- Badge Segera Melakukan Daftar Ulang Start --}}
          <span style="font-weight: 300;" class="mb-2 badge 
          @if($pendaftar->status == 'Segera Melakukan Pembayaran')
          badge-secondary

          @elseif($pendaftar->status == 'Menunggu Validasi Pembayaran') 
          badge-secondary
          
          @elseif($pendaftar->status == 'Segera Melakukan Daftar Ulang')
          badge-primary animate__animated animate__flash animate__infinite animate__slower

          @elseif($pendaftar->status == 'Pengumuman')
          badge-success

          @else
          badge-success

          @endif">Segera Melakukan Daftar Ulang</span>
          {{-- Badge Segera Melakukan Daftar Ulang End --}}


          {{-- Badge Pengumuman Start --}}
          <span style="font-weight: 300;" class="mb-2 badge 
          @if($pendaftar->status == 'Segera Melakukan Pembayaran')
          badge-secondary

          @elseif($pendaftar->status == 'Menunggu Validasi Pembayaran') 
          badge-secondary
          
          @elseif($pendaftar->status == 'Segera Melakukan Daftar Ulang')
          badge-secondary
          
          @elseif($pendaftar->status == 'Pengumuman')
          badge-primary animate__animated animate__flash animate__infinite animate__slower

          @else
          badge-success

          @endif">Pengumuman</span>
          {{-- Badge Pengumuman End --}}


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

<script>
  $(document).ready(function(){
  });
    function FileSelected(e)
    {
        file = document.getElementById('bukti_pembayaran').files[document.getElementById('bukti_pembayaran').files.length - 1];
        document.getElementById('nama_file').innerText = file.name;
    }
</script>

</body>
</html>