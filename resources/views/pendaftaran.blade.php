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

	<div class="w-100 bg-primary text-center pt-5 pb-5 mb-5">
		<h1 class=" text-light" style="font-weight: 100;">PPDB ONLINE</h1>
		<a href="/">
			<h2 class=" text-white" style="font-weight: 600; font-size:20pt;">SMK Batik 2 Surakarta</h2>
		</a>
	</div>

	<div class="container pt-3 pb-5 mb-5">
	<form action="/proses" method="POST">
		@csrf

		<div class="card mb-5">
			<div class="card-header bg-light text-center"><b>Identitas Diri</b></div>
			<div class="card-body">

				<div class="row">
					<div class="col-12">
						<div class="form-group">
							<b><div style="font-size: 10pt;" class="text-primary">Nama Lengkap <span class="text-danger">*</span></div></b>
							<input type="text" class="form-control" name="nama_siswa" required>							
						</div>

						<div class="form-group">
							<b><div style="font-size: 10pt;" class="text-primary">NISN </div></b>
							<input type="number" class="form-control" name="nisn">							
						</div>

						<div class="form-group">
							<b><div style="font-size: 10pt;" class="text-primary">Jenis Kelamin <span class="text-danger">*</span></div></b>
							<select class="custom-select" name="jenis_kelamin">
								<option value="Laki - Laki">Laki - Laki</option>
								<option value="Perempuan">Perempuan</option>
							</select>
						</div>

						<div class="form-group">
							<b><div style="font-size: 10pt;" class="text-primary">Tempat & Tanggal Lahir <span class="text-danger">*</span></div></b>
							<div class="row">
								<div class="col-6">
									<input type="text" class="form-control" name="tempat_lahir" required>
								</div>
								<div class="col-6">
									<input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="YYYY/MM/DD" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<b><div style="font-size: 10pt;" class="text-primary">Agama <span class="text-danger">*</span></div></b>
							<input type="text" class="form-control" name="agama" required>
						</div>

						<div class="form-group">
							<b><div style="font-size: 10pt;" class="text-primary">Alamat Lengkap <span class="text-danger">*</span></div></b>
							<textarea class="form-control" name="alamat_siswa" rows="4" maxlength="255" required></textarea>
						</div>

						<div class="form-group">
							<b><div style="font-size: 10pt;" class="text-primary">Telp/HP <span class="text-danger">*</span></div></b>
							<input type="number" class="form-control" name="telp_hp_siswa" required>
						</div>

				</div>
			</div>

		</div>
	</div>


	<div class="card mb-5">
		<div class="card-header bg-light text-center"><b>Identitas Orang Tua</b></div>
		<div class="card-body">

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Nama Orang Tua <span class="text-danger">*</span></div></b>
						<input type="text" class="form-control" name="nama_ortu" required>							
					</div>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Pekerjaan Orang Tua<span class="text-danger">*</span></div></b>
						<input type="text" class="form-control" name="pekerjaan_ortu" required>							
					</div>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Alamat Lengkap Orang Tua<span class="text-danger">*</span></div></b>
						<textarea class="form-control" name="alamat_ortu" rows="4" maxlength="120" required></textarea>
					</div>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Telp/HP Orang Tua<span class="text-danger">*</span></div></b>
						<input type="number" class="form-control" name="telp_hp_ortu" required>
					</div>

					<br>
					<hr>
					<br>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Nama Wali</div></b>
						<input type="text" class="form-control" name="nama_wali">							
					</div>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Pekerjaan Wali</div></b>
						<input type="text" class="form-control" name="pekerjaan_wali">							
					</div>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Alamat Lengkap Wali</div></b>
						<textarea class="form-control" name="alamat_wali" rows="4" maxlength="120"></textarea>
					</div>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Telp/HP Wali</div></b>
						<input type="number" class="form-control" name="telp_hp_wali">
					</div>
				</div>
			</div>

		</div>
	</div>



	<div class="card mb-5">
		<div class="card-header bg-light text-center"><b>Asal Sekolah</b></div>

		<div class="card-body">

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">SLTP/MTs <span class="text-danger">*</span></div></b>
						<input type="text" class="form-control" name="asal_sekolah" required>							
					</div>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Nilai Ujian Akhir Nasional</div></b>
						<input type="number" class="form-control" name="nilai_uan">							
					</div>

					<hr>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Nilai Bahasa Indonesia</div></b>
						<input type="number" class="form-control" name="nilai_bahasa_indonesia">							
					</div>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Nilai Matematika</div></b>
						<input type="number" class="form-control" name="nilai_matematika">							
					</div>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Nilai Bahasa Inggris</div></b>
						<input type="number" class="form-control" name="nilai_bahasa_inggris">							
					</div>

					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Nilai IPA</div></b>
						<input type="number" class="form-control" name="nilai_ipa">							
					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="card">
		<div class="card-header bg-light text-center"><b>Jurusan</b></div>

		<div class="card-body">

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<b><div style="font-size: 10pt;" class="text-primary">Jurusan yang dipilih <span class="text-danger">*</span></div></b>
						<select class="custom-select" name="jurusan">
							<option value="Otomatisasi Tata Kelola Perkantoran">Otomatisasi Tata Kelola Perkantoran</option>
							<option value="Multimedia">Multimedia</option>
							<option value="Tata Kelola Kecantikan Kulit dan Rambut">Tata Kelola Kecantikan Kulit dan Rambut</option>
							<option value="Keperawatan">Keperawatan</option>
						</select>
					</div>
				</div>
			</div>

		</div>
	</div>


	<button type="button" class="btn btn-primary btn-lg mt-4 w-100" data-toggle="modal" data-target="#konfirmasi">
		DAFTAR
	</button>

	<!-- Modal -->
	<div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			Pastikan data yang anda masukkan sudah benar dan sesuai. Data yang sudah dimasukkan tidak dapat dirubah lagi.
			<br> <br>
			Jika sudah yakin, klik <b>"Saya bukan robot"</b> atau <b>"I'm not robot"</b> dibawah ini kemudian klik Lanjut Mendaftar
			<br> <br>

			<div class="form-group">
				{!! NoCaptcha::renderJs() !!}
				{!! NoCaptcha::display() !!}
				<span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
			</div>
		</div>


		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Nanti dulu</button>
			{{-- <button type="button" class="btn btn-primary">Yep</button> --}}
			<input type="submit" class="btn btn-primary" value="Lanjut Mendaftar">
		</div>
		</div>
	</div>
	</div>



	</form>
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