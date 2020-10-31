<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">

    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
          <div class="main-navbar">
            <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
              <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                <div class="d-table m-auto">
                  <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="/images/smkbatik2.png" alt="Shards Dashboard">
                  <span class="d-none d-md-inline ml-1">Dashboard</span>
                </div>
              </a>
              <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                <i class="material-icons">&#xE5C4;</i>
              </a>
            </nav>
          </div>
          <div class="nav-wrapper">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="/dashboard">
                  <i class="material-icons">edit</i>
                  <span>Dashboard</span>
                </a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link " href="components-blog-posts.html">
                  <i class="material-icons">vertical_split</i>
                  <span>Blog Posts</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="add-new-post.html">
                  <i class="material-icons">note_add</i>
                  <span>Add New Post</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="form-components.html">
                  <i class="material-icons">view_module</i>
                  <span>Forms &amp; Components</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="tables.html">
                  <i class="material-icons">table_chart</i>
                  <span>Tables</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="user-profile-lite.html">
                  <i class="material-icons">person</i>
                  <span>User Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="errors.html">
                  <i class="material-icons">error</i>
                  <span>Errors</span>
                </a>
              </li> --}}
            </ul>
          </div>
        </aside>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            <nav class="navbar align-items-stretch navbar-light flex-md-nowrap p-0">
   
                <div style="width:100%;">

                </div>
              <ul class="navbar-nav border-left flex-row ">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-nowrap px-3" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle mr-2" src="/images/smkbatik2.png" alt="User Avatar">
                    <span class="d-none d-md-inline-block">Administrator</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-small">
                    {{-- <a class="dropdown-item" href="user-profile-lite.html">
                      <i class="material-icons">&#xE7FD;</i> Profile</a>
                    <a class="dropdown-item" href="components-blog-posts.html">
                      <i class="material-icons">vertical_split</i> Blog Posts</a>
                    <a class="dropdown-item" href="add-new-post.html">
                      <i class="material-icons">note_add</i> Add New Post</a> --}}
                    {{-- <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      <i class="material-icons text-danger">&#xE879;</i> {{ __('Logout') }}
                    </a>

                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                       @csrf
                   </form>


                  </div>
                </li>
              </ul>
              <nav class="nav">
                <a href="#" class="nav-link nav-link-icon toggle-sidebar d-md-inline d-lg-none text-center border-left" data-toggle="collapse" data-target=".header-navbar" aria-expanded="false" aria-controls="header-navbar">
                  <i class="material-icons">&#xE5D2;</i>
                </a>
              </nav>
            </nav>
          </div>
          <!-- / .main-navbar -->

          @if (session('status'))
          <div class="alert {{session('alert')}} alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              {{ session('status') }}
            </div>
            <input type="text" class="form-control" name="data" id="data" value="{{session('status')}}" hidden>							
          @endif

          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Dashboard</span>
                <h3 class="page-title">PPDB Online</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
            <div class="row">
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small badge-outline-primary">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase text-primary">Total Pendaftar</span>
                      <h6 class="stats-small__value count my-3 text-primary">{{ $totalPendaftar }}</h6>
                      </div>
                      <div class="stats-small__data">
                        {{-- <span class="stats-small__percentage stats-small__percentage--increase">4.7%</span> --}}
                      </div>
                    </div>
                    {{-- <canvas height="120" class="blog-overview-stats-small-1"></canvas> --}}
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-6 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small badge-outline-warning">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase text-warning">Sudah membayar</span>
                        <h6 class="stats-small__value count my-3 text-warning">{{$totalPembayaran}}</h6>
                      </div>
                      {{-- <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                      </div> --}}
                    </div>
                    {{-- <canvas height="120" class="blog-overview-stats-small-2"></canvas> --}}
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small badge-outline-info">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase text-info">Sudah Daftar Ulang</span>
                        <h6 class="stats-small__value count my-3 text-info">{{$totalDaftarUlang}}</h6>
                      </div>
                      {{-- <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--decrease">3.8%</span>
                      </div> --}}
                    </div>
                    {{-- <canvas height="120" class="blog-overview-stats-small-3"></canvas> --}}
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-6 mb-4">
                <div class="stats-small stats-small--1 card card-small badge-outline-success">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase text-success">Lulus</span>
                        <h6 class="stats-small__value count my-3 text-success">{{$totalLulus}}</h6>
                      </div>
                      {{-- <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                      </div> --}}
                    </div>
                    {{-- <canvas height="120" class="blog-overview-stats-small-4"></canvas> --}}
                  </div>
                </div>
              </div>
              <div class="col-lg col-md-4 col-sm-12 mb-4">
                <div class="stats-small stats-small--1 card card-small badge-outline-danger">
                  <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                      <div class="stats-small__data text-center">
                        <span class="stats-small__label text-uppercase text-danger">Tidak lulus</span>
                        <h6 class="stats-small__value count my-3 text-danger">{{$totalTidakLulus}}</h6>
                      </div>
                      {{-- <div class="stats-small__data">
                        <span class="stats-small__percentage stats-small__percentage--decrease">2.4%</span>
                      </div> --}}
                    </div>
                    {{-- <canvas height="120" class="blog-overview-stats-small-5"></canvas> --}}
                  </div>
                </div>
              </div>
            </div>
            <!-- End Small Stats Blocks -->
            <div class="row">

              <!-- Top Referrals Component -->
              <div class="col-lg-12 col-md-12 col-sm-12 mb-4">

                <div class="card card-small">
                  <div class="card-header border-bottom">
                      <div class="row">
                        <div class="col-lg-8 col-sm-12">
                            <h6 class="m-0">Data Pendaftar</h6>
                        </div>
                        <div class="col-lg-4 col-sm-12 text-right">
                            <form action="/cari" method="GET">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="search" placeholder="Masukkan kode pendaftaran" aria-label="Username" aria-describedby="basic-addon1">							
                                    </div>
                                </div>
                            </form>
                        </div>
                      </div>
                  </div>
                  <div class="card-body p-0">
                    <ul class="list-group list-group-small list-group-flush">
                        @foreach ($pendaftar as $p)
                        <li class="list-group-item d-flex px-3">
                            {{-- <span class="text-semibold text-fiord-blue my-auto" style="font-weight: 600">[ {{ Hashids::encode($p->id) }} ] &nbsp; </span> --}}
                            <span class="text-semibold text-fiord-blue my-auto"> {{ $p->nama_siswa }} </span> &nbsp;
                            @if ($p->status == 'pembayaran')                            
                                <span class="badge badge-outline-primary my-auto" style="font-size:8pt; max-height: 23px;">Pembayaran</span>
                            @elseif ($p->status == 'daftar ulang')
                                <span class="badge badge-outline-primary my-auto" style="font-size:8pt; max-height: 23px;">Daftar Ulang</span>
                            @elseif ($p->status == 'pengumuman')
                                <span class="badge badge-outline-primary my-auto" style="font-size:8pt; max-height: 23px;">Pengumuman</span>
                            @endif

                            <div class="ml-auto text-right">
                                <div class="btn-group btn-group-sm">
                                    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#detail-modal-{{$p->id}}">
                                      <span class="text-light">
                                        <i class="material-icons text-white">more_vert</i>
                                      </span> Detail </button>
                                  </div>
                              </div>
                          </li>
            <!-- Modal -->
            <div class="modal fade" id="detail-modal-{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ $p->nama_siswa }} | {{ Hashids::encode($p->id) }} </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="/updatestatus" method="post">
                            @csrf
                            {{-- <div class="form-group"> --}}
                            <input type="text" class="form-control" name="id" hidden value="{{ $p->id }}">							
                            {{-- </div> --}}

                            <div class="form-group">
                                <b><div style="font-size: 10pt;" class="text-primary">Ubah status <span class="text-danger">*</span></div></b>
                                <select class="custom-select" name="status">
                                    <option value="pembayaran" @if($p->status == 'pembayaran') selected @endif>Pembayaran</option>
                                    <option value="daftar ulang" @if($p->status == 'daftar ulang') selected @endif>Daftar Ulang</option>
                                    <option value="pengumuman" @if($p->status == 'pengumuman') selected @endif>Pengumuman</option>
                                    <option value="lulus" @if($p->status == 'lulus') selected @endif>Lulus</option>
                                    <option value="tidak lulus" @if($p->status == 'tidak lulus') selected @endif>Tidak Lulus</option>
                                </select>
                            </div>
                            
                            <hr>
                            
                            <a href="/cetak/{{ Hashids::encode($p->id) }}" class="btn btn-primary" target="_blank">
                                <i class="fas fa-download"></i>
                                &nbsp; Lihat Formulir
                            </a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
              
                        @endforeach
                    </ul>
                  </div>
                  <div class="card-footer border-top">
                  </div>                  
                </div>
                
                
            </div>
            <!-- End Top Referrals Component -->
        </div>    


        {{ $pendaftar->links('vendor.pagination.bootstrap-4') }}

          </div>
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              {{-- <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li> --}}
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © 2020
              <a href="https://instagram.com/firmanadiyuda" rel="nofollow">Firman Adiyuda</a>
            </span>
          </footer>
        </main>
      </div>
    </div>


    @if(session('pendaftar'))

            <!-- Modal -->
            <div class="modal fade" id="detail-modal-cari" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">{{ session('pendaftar')['nama_siswa'] }} | {{ Hashids::encode(session('pendaftar')['id']) }} </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <form action="/updatestatus" method="post">
                            @csrf
                            {{-- <div class="form-group"> --}}
                            <input type="text" class="form-control" name="id" hidden value="{{ session('pendaftar')['id'] }}">							
                            {{-- </div> --}}

                            <div class="form-group">
                                <b><div style="font-size: 10pt;" class="text-primary">Ubah status <span class="text-danger">*</span></div></b>
                                <select class="custom-select" name="status">
                                    <option value="pembayaran" @if(session('pendaftar')['status'] == 'pembayaran') selected @endif>Pembayaran</option>
                                    <option value="daftar ulang" @if(session('pendaftar')['status'] == 'daftar ulang') selected @endif>Daftar Ulang</option>
                                    <option value="pengumuman" @if(session('pendaftar')['status'] == 'pengumuman') selected @endif>Pengumuman</option>
                                    <option value="lulus" @if(session('pendaftar')['status'] == 'lulus') selected @endif>Lulus</option>
                                    <option value="tidak lulus" @if(session('pendaftar')['status'] == 'tidak lulus') selected @endif>Tidak Lulus</option>
                                </select>
                            </div>
                            
                            <hr>
                            
                            <a href="/cetak/{{ Hashids::encode(session('pendaftar')['id']) }}" class="btn btn-primary" target="_blank">
                                <i class="fas fa-download"></i>
                                &nbsp; Lihat Formulir
                            </a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>

              {{-- @endforeach --}}
              @endif


    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="scripts/extras.1.1.0.min.js"></script>
    <script src="scripts/shards-dashboards.1.1.0.min.js"></script>
    <script src="scripts/app/app-blog-overview.1.1.0.js"></script>

    <script>

        $(document).ready(function(){

        var alertss = document.getElementById("data").value;

        console.log(alertss);

        if (alertss === "Data ditemukan!"){
            $('#detail-modal-cari').modal('show');
        } else {

        }
    });

    </script>

  </body>
</html>