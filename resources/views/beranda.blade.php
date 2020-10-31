<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/shards.min.css?v=3.0.0">
    <link rel="stylesheet" href="/css/shards-demo.min.css?v=3.0.0">

    <title>PPDB SMK Batik 2 Surakarta</title>
</head>
<body style="background-color: #E9ECEF; font-family: Poppins;">

  <div class="w-100 bg-primary text-center pt-5 pb-5">
    <h1 class=" text-warning" style="font-weight: 100;">PPDB ONLINE</h1>
    <h2 class=" text-white" style="font-weight: 600; font-size:20pt;">SMK Batik 2 Surakarta</h2>
  </div>

  <div class="container pt-3 pb-5 mt-5 ">
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-5">
          <div class="card-header bg-light text-center"><b>Pendaftaran Calon Siswa Baru</b></div>
          <div class="card-body">
            Klik tombol dibawah ini untuk melakukan pendaftaran calon siswa baru
            <br>
            <br>
            <a href="/pendaftaran" class="btn btn-primary btn-lg w-100">Pendaftaran Baru</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-5">
          <div class="card-header bg-light text-center"><b>Cek Status Pendaftaran</b></div>
          <div class="card-body">
            <form action="/cekstatus" method="GET">
              <div class="form-group">
                <b><div style="font-size: 10pt;" class="text-primary">KODE PENDAFTARAN</div></b>
                <input type="text" class="form-control" name="kode" required>							
              </div>
								<input type="submit" class="btn btn-primary btn-lg w-100" value="Cek Status">
            </form>
          </div>
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
      <script src="js/shards.min.js"></script>
      <script src="js/demo.min.js"></script>
      <script>
        $('#tanggal_lahir').datepicker({
          format: 'yyyy/mm/dd',
        });
    </script>

</body>
</html>