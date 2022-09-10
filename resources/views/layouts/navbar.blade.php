<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('breezetheme/vendors/mdi/css/materialdesignicons.min.css') }}" />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('breezetheme/vendors/flag-icon-css/css/flag-icon.min.css') }}" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('breezetheme/vendors/css/vendor.bundle.base.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('breezetheme/vendors/font-awesome/css/font-awesome.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('breezetheme/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" /> --}}
    {{-- bootstrap --}}

    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.2/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('breezetheme/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('KALATA-Logo-Officiel.png')}}" />
    {{-- chart js --}}
    {{-- <link rel="stylesheet" href="path-to/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" /> --}}
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">

        <div class="text-center sidebar-brand-wrapper d-flex justify-content-center">

          <a class="sidebar-brand brand-logo align-self-center" href="{{ route('dashboard') }}"><img src="{{ asset('KALATA-Logo-Officiel.png') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="{{ route('dashboard') }}"><img src="{{ asset('KALATA-Logo-Officiel.png') }}" alt="logo-mini" /></a>
        </div>
        {{-- divider --}}
        <hr>
        {{-- divider --}}
        <ul class="nav mt-3">
          {{-- <li class="nav-item  ">
            <hr>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard') }}">
              <i class="mdi mdi-home menu-icon"></i>
              {{-- <img src="{{ asset('icones/home.png')}}" width="30px" height="20px" alt=""> --}}
              <span class="menu-title">Accueil</span>
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('election') }}">
              <i class="mdi mdi-ballot menu-icon"></i>
              <span class="menu-title">Elections</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('candidat') }}">
              <i class="mdi mdi-account-box menu-icon"></i>
              <span class="menu-title">Candidats</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('electeur') }}">
              <i class="mdi mdi-account-multiple-plus menu-icon"></i>
              <span class="menu-title">Electeurs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('asso') }}">
              <i class="mdi mdi-vector-union menu-icon"></i>
              <span class="menu-title">Associations</span>
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin') }}">
              <i class="mdi mdi-account-key menu-icon"></i>
              <span class="menu-title">Gestion des admins</span>
            </a>
          </li>
          <hr>
          <li class="nav-item sidebar-actions">
            <div class="nav-link" >
                <div>
                    <ul class="mt-4 pl-0" >
                        <li>
                            <a class="nav-link" href="{{ route('voter') }}">
                            <i class="mdi mdi-vote menu-icon"></i>
                            <span class="menu-title">Voter</span></a>
                        </li>
                    </ul>
                </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="{{asset('KALATA-Logo-Officiel.png')}}" height="35px" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              <li class="nav-item border-0" ><a href="{{ route('dashboard') }}" class="nav-link" >
               {{ config('app.name', 'Laravel') }}</a></li>
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Rechercher" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell-outline"></i>
                  <span class="count count-varient1">10</span>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face4.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face3.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                      </p>
                    </div>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <img src="assets/images/faces/face2.jpg" alt="" class="profile-pic" />
                    </div>
                    <div class="preview-item-content">
                      <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                      </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0">View all activities</p>
                </div>
              </li>
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="{{ asset('users/adja.jpg') }}" />
                  <span>{{ Auth::user()->nom }}</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Mon Profil </a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                  ><i class="mdi mdi-logout mr-2 text-primary"></i> Deconnexion </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <!-- start main panel -->
        <div class="main-panel">
          <!-- content start -->
          <div class="content-wrapper pb-0">
            <main class="py-4">
                @yield('content')
            </main>
          </div>
          <!-- end content -->

          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright &copy; kalata.com 2022</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Developped by Modibo keita </span>
            </div>
          </footer>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('breezetheme/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('breezetheme/vendors/chart.js/Chart.min.js') }}"></script>
    <!-- inject:js -->
    <script src="breezetheme/js/off-canvas.js"></script>
    <script src="breezetheme/js/hoverable-collapse.js"></script>
    <script src="breezetheme/js/misc.js"></script>
    <!-- endinject -->
    <!-- container-scroller -->
    <script src="{{ asset('breezetheme/js/chart.js') }}"></script>
    <!-- Custom js for this page -->
    <script src="{{ asset('breezetheme/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->

    {{-- bootstrap link --}}
    <script src="{{ asset('assets/bootstrap-5.2/js/bootstrap.bundle.min.js') }}"></script>

  </body>
</html>
