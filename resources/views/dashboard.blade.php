@extends('layouts.navbar')

@section('content')
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Salut, Bienvenue ! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">C'est ici que tout se passera.</span>
              </h3>
              <div class="d-flex">
                <button type="button" class="btn btn-sm bg-white btn-icon-text border ml-3">
                  <i class="mdi mdi-printer btn-icon-prepend"></i> PDF </button>
              </div>
            </div>
            <!-- 1ere rangee -->
            <div class="row">
              <div class="col-xl-4 col-md-6 grid-margin stretch-card">
                <h2>  </h2>
              </div>
              <div class="col-xl-4 col-md-6 stretch-card grid-margin stretch-card">
                <h2>  </h2>
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
            <!-- end 1ere rangee -->

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
                    <h4 class="card-title">Bar chart</h4>
                    <canvas id="barChart" style="height: 230px;"></canvas>
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

            {{--  table navbar --}}
            <div class="page-header">
              <h3 class="page-title">Liste des electeurs</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Table</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Liste des electeurs </li>
                </ol>
              </nav>
            </div>
            {{-- start table --}}
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Liste des electeurs</h4>
                    <p class="card-description"> Cliquez sur le bouton ci-dessus pour ajouter de <code>.nouvelles eleteurs</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Profil</th>
                            <th>Nom</th>
                            <th>Progress</th>
                            <th>Prenom</th>
                            <th>Email</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="py-1">
                              <img src="{{asset('users/adja.jpg')}}" alt="image" />
                            </td>
                            <td>Djeneba</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>Coumare</td>
                            <td>dcoumare99@gmail.com</td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="{{asset('breezetheme/images/faces/face1.jpg')}}" alt="image" />
                            </td>
                            <td>Messsy Adam</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>$245.30</td>
                            <td>July 1, 2015</td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                            </td>
                            <td>John Richards</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>$138.00</td>
                            <td>Apr 12, 2015</td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                            </td>
                            <td>Peter Meggik</td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td>$ 77.99</td>
                            <td>May 15, 2015</td>
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
