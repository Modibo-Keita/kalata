@extends("layouts.navbar")

@section('content')
    <!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0"> Page de gestion des electeurs</h3>
        <div class="d-flex">
            <button type="button" class="btn btn-sm ml-3 btn-success" data-bs-toggle="modal" data-bs-target="#modaltest" > Ajouter un electeur </button>
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
                        <th>Prenom</th>
                        <th>Organisation</th>
                        <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-1">
                                <img src="{{asset('users/adja.jpg')}}" alt="image" />
                            </td>
                            <td>Coumare</td>
                            <td>Djeneba</td>
                            <td>Simplon</td>
                            <td>dcoumare99@gmail.com</td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <img src="{{asset('users/adja.jpg')}}" alt="image" />
                            </td>
                            <td>Coumare</td>
                            <td>Djeneba</td>
                            <td>Simplon</td>
                            <td>dcoumare99@gmail.com</td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <img src="{{asset('users/adja.jpg')}}" alt="image" />
                            </td>
                            <td>Coumare</td>
                            <td>Djeneba</td>
                            <td>Simplon</td>
                            <td>dcoumare99@gmail.com</td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <img src="{{asset('users/adja.jpg')}}" alt="image" />
                            </td>
                            <td>Coumare</td>
                            <td>Djeneba</td>
                            <td>Simplon</td>
                            <td>dcoumare99@gmail.com</td>
                        </tr>
                        <tr>
                            <td class="py-1">
                                <img src="{{asset('users/adja.jpg')}}" alt="image" />
                            </td>
                            <td>Coumare</td>
                            <td>Djeneba</td>
                            <td>Simplon</td>
                            <td>dcoumare99@gmail.com</td>
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
