@extends('layouts.navbar')

@section('content')
            <div class="page-header flex-wrap">
              <h3 class="mb-0">Election select
                {{-- <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">C'est ici que tout se passera.</span> --}}
              </h3>
              <div class="d-flex">
                <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                  <i class="mdi mdi-printer btn-icon-prepend"></i> PDF </button>
              </div>
            </div>
            {{-- les cards --}}
            <div class="row">
                <!-- Candidats inscris -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Candidats inscris</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- electeurs inscris -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Electeurs Inscris</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">215 000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Votes exprimes -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Votes exprimes</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">164 120</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Abstentions -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Abstentions</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">78</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- cards end --}}

            <!-- 2ere rangee -->
            <div class="page-header">
              <h3 class="page-title">Chart-js</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Charts</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Chart-js </li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Vainqueur</h4>
                    <img src="{{asset('users/photo_cv.png')}}" alt="vainqueur">
                  </div>
                </div>
              </div>

              <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pie chart</h4>
                    <canvas id="pieChart" style="height: 250px;"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <!-- end 2ere rangee -->

            <!-- milieu rangee -->
            <div class="row">
              <div class="col-xl-8 col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">2eme Bar chart</h4>
                    <canvas id="barChart" style="height: 230px;"></canvas>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 grid-margin stretch-card">
                <!--datepicker-->
                <div class="card">
                  <div class="card-body">
                    <div id="inline-datepicker" class="datepicker table-responsive"></div>
                  </div>
                </div>
                <!--datepicker ends-->
              </div>
            </div>
            <!-- end milieu rangee -->

            {{--  table entete --}}
            <div class="page-header">
              <h3 class="page-title">Resultats de l'election du president 2022</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Table</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Resultats </li>
                </ol>
              </nav>
            </div>
            {{-- start table --}}
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    {{-- <h4 class="card-title">Liste des electeurs</h4> --}}
                    <p class="card-description"> liste des candidats par ordre de voix obtenues </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Profil</th>
                            <th>Association</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Nombre</th>
                            <th>% des voix</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="py-1">
                              <img src="{{asset('users/adja.jpg')}}" alt="image" />
                            </td>
                            <td>AN-BIKO</td>
                            <td>Coumare</td>
                            <td>Djeneba</td>
                            <td>98 125</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td class="py-1">
                              <img src="{{asset('users/adja.jpg')}}" alt="image" />
                            </td>
                            <td>Soninkara</td>
                            <td>Sissoko</td>
                            <td>Amara</td>
                            <td>12 100</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            {{-- End table --}}

          <!-- end content -->
@endsection
