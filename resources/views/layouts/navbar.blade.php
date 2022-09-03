<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title> Admin Dashboard </title>
    <link rel="stylesheet" href="{{ asset('breezetheme/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('breezetheme/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('breezetheme/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ asset('breezetheme/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('breezetheme/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    {{-- bootstrap --}}
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.2/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('breezetheme/css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('KALATA-Logo-Officiel.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">

        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">

          <a class="sidebar-brand brand-logo" href="{{ route('dashboard') }}"><img src="{{ asset('KALATA-Logo-Officiel.png') }}" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini pl-4 pt-3" href="{{ route('dashboard') }}"><img src="{{ asset('KALATA-Logo-Officiel.png') }}" alt="logo-mini" /></a>
        </div>
        {{-- divider --}}
        <div><hr class="sidebar-divider mt-4"></div>
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
          <li class="nav-item">
            <a class="nav-link" href="{{ route('election') }}">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Elections</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('candidat') }}">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Candidats</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('electeur') }}">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Electeurs</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('asso') }}">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Associations</span>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Historique</span>
            </a>
          </li> --}}
          <li class="nav-item sidebar-actions">
            <div class="nav-link" >
                <div class="mt-4" >
                    <ul class="mt-4 pl-0" >
                        <li>
                            <a class="nav-link" href="{{ route('voter') }}">
                            <i class="mdi mdi-table-large menu-icon"></i>
                            <span class="menu-title">Voter</span></a>
                        </li>
                    </ul>
                </div>
            </div>
          </li>
          {{-- <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <ul class="mt-4 pl-0">
                  <li>Parametres</li>
                </ul>
              </div>
            </div>
          </li> --}}
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        {{-- <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div> --}}
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="assets/Img/KALATA-Logo-Officiel.png" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav">
              {{-- <li class="nav-item dropdown">
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
              </li> --}}
              {{-- <li class="nav-item dropdown d-none d-sm-flex">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-email-outline"></i>
                  <span class="count count-varient2">25</span>
                </a>
                <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list" aria-labelledby="messageDropdown">
                  <h6 class="p-3 mb-0">Messages</h6>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-success">Request</span>
                      <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-warning">Invoices</span>
                      <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <a class="dropdown-item preview-item">
                    <div class="preview-item-content flex-grow">
                      <span class="badge badge-pill badge-danger">Projects</span>
                      <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
                    </div>
                    <p class="text-small text-muted align-self-start"> 4:10 PM </p>
                  </a>
                  <h6 class="p-3 mb-0">See all activity</h6>
                </div>
              </li> --}}
              <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex" ><a href="{{ route('voter') }}" class="nav-link" >Aller sur la page de vote</a></li>
              {{-- <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
                <form class="nav-link form-inline mt-2 mt-md-0">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" />
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-magnify"></i>
                      </span>
                    </div>
                  </div>
                </form>
              </li> --}}
            </ul>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              {{-- <li class="nav-item dropdown d-none d-xl-flex border-0">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-earth"></i> Français </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                  <a class="dropdown-item" href="#"> French </a>
                  <a class="dropdown-item" href="#"> Anglais </a>
                </div>
              </li> --}}
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
                  <span class="profile-name">Adja Coumare</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Mon Profil </a>
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Deconnexion </a>
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
          <!-- plage d'insertion -->
          <div class="content-wrapper pb-0">
            <main class="py-4">
                @yield('content')
            </main>
          </div>
          <!-- end insertion -->
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
    <script src="{{ asset('breezetheme/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('breezetheme/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('breezetheme/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('breezetheme/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('breezetheme/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('breezetheme/vendors/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('breezetheme/vendors/flot/jquery.flot.pie.js') }}"></script>
    <!-- End plugin js for this page -->
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
