@extends("layouts.navbar")

@section('content')
<!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0"> Vous etes sur la page de gestion des Candidats</h3>
        <div class="d-flex">
            <button type="button" class="btn btn-sm ml-3 btn-success" data-bs-toggle="modal" data-bs-target="#modaltest" > Enregistrer un Candidat </button>
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
    </div>
<!-- end content -->
@endsection
