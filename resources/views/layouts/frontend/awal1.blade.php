
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $app_name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/main/app.css" />
    <link
      rel="shortcut icon"
      href="{{ asset('mazer') }}/assets/images/logo/favicon.svg"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="{{ asset('mazer') }}/assets/images/logo/favicon.png"
      type="image/png"
    />

    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/shared/iconly.css" />
    <style>
      .header-top {
          background-color: #F2F7FF !important;
      }

      @media (max-width: 768px) {
          /* Mengatur logo */
          .logo {
              position: absolute;
              top: 40px;
              left: 30px;
          }

          .logo img {
              width: 50px !important;
              display: block !important; /* Pastikan logo tampil */
              visibility: visible !important; /* Pastikan logo tidak tersembunyi */
              z-index: 1100; /* Pastikan logo berada di atas elemen lainnya */
              position: relative;
          }

          /* Mengatur navbar agar tetap di atas layar */
          .navbar {
              background-color: #ffffff;
              z-index: 1000;
              position: fixed;
              top: 0;
              left: 0;
              right: 0;
              width: 100%;
              border-bottom: 1px solid #ddd;
              padding-top: 10px;
              padding-bottom: 10px;
          }

          /* Jarak antara navbar dan konten di bawahnya */
          body {
              padding-top: 80px; /* Sesuaikan dengan tinggi navbar + logo */
          }

          /* Warna teks di navbar */
          .navbar .nav-link,
          .navbar-brand {
            margin-left: auto; /* Memindahkan elemen ke kanan */
            padding-right: 20px; /* Jarak dari tepi kanan */
              color: #333333 !important;
          }
          .nav-item{
            margin-left: auto; /* Memindahkan elemen ke kanan */
            padding-right: 55px;
          }
      }
  </style>
  
  </head>

  <body>
    <div id="app">
      <div id="main" class="layout-horizontal">
        <header class="mb-5">
          <div class="header-top">
            <div class="container">
              <div class="logo">
                <a href="{{ route('index') }}"><img src="{{ asset('mazer') }}/assets/images/logo/smk.png" alt="Logo" style="width: 80px; height: auto; position: absolute; top: 6%; left: 9%; transform: translate(-50%, -50%);"></a>
              </div>
              <nav class="navbar navbar-expand-lg bg-body-transparent">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route('index') }}">BERANDA</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('kandidatv') }}">voting</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          SOAL-SOAL
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('siaga') }}">SIAGA</a></li>
                          <li><a class="dropdown-item" href="{{ route('penggalang') }}">PENGGALANG</a></li>
                          <li><a class="dropdown-item" href="{{ route('penegak') }}">PENEGAK</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          HASIL NILAI
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="{{ route('pu') }}">PENGETAHUAN UMUM</a></li>
                          <li><a class="dropdown-item" href="{{ route('pk') }}">PENGETAHUAN KEPERAMUKAAN</a></li>
                          <li><a class="dropdown-item" href="{{ route('pa') }}">PENGETAHUAN AGAMA</a></li>
                          <li><a class="dropdown-item" href="{{ route('ppgd') }}">PPGD</a></li>
                          <li><a class="dropdown-item" href="{{ route('bank') }}">BANK SOAL</a></li>
                          <li><a class="dropdown-item" href="{{ route('isyarat') }}">ISYARAT</a></li>
                          <li><a class="dropdown-item" href="{{ route('sandi') }}">SANDI</a></li>
                          <li><a class="dropdown-item" href="{{ route('semboyan') }}">SEMBOYAN</a></li>
                          <li><a class="dropdown-item" href="{{ route('yel2') }}">YEK-YEL</a></li>
                          <li><a class="dropdown-item" href="{{ route('joko') }}">JOGED KOMANDO</a></li>
                          <li><a class="dropdown-item" href="{{ route('lkbb') }}">PBB</a></li>
                        </ul>
                      </li>
                       <li class="nav-item">
                        <a class="nav-link" href="{{ route('juara') }}">JUARA UMUM</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
    
        </header>

        <div class="content-wrapper container">
          <div class="page-content">
            @yield('content')
          </div>
        </div>

        <footer>
          <div class="container">
            <div class="footer clearfix mb-0 text-muted">
              <div class="float-start">
                <p>2023 &copy; PRAMSAKA</p>
              </div>
              <div class="float-end">
                <p> Develop Apps by Nijūnana</a></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    {{-- <script src="{{ asset('mazer') }}/assets/js/bootstrap.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('mazer') }}/assets/js/app.js"></script>
    <script src="{{ asset('mazer') }}/assets/extensions/jquery/jquery.min.js"></script>
    <script src="{{ asset('mazer') }}/assets/js/pages/horizontal-layout.js"></script>
    <script src="{{ asset('mazer') }}/assets/extensions/apexcharts/apexcharts.min.js"></script>
 
    @stack('js')
  </body>
</html>
