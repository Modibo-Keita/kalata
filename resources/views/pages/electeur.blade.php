@extends("layouts.navbar")

@section('content')
    <!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0">Election active
        {{-- <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">C'est ici que tout se passera.</span> --}}
        </h3>
        <div class="d-flex">
        <button type="button" class="btn btn-sm bg-success btn-icon-text border ml-3 ">
            <i class="mdi mdi-printer btn-icon-prepend"></i> Ajouter </button>
        </div>
    </div>
    {{-- start table --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Liste des electeurs</h4>
                <p class="card-description"> Cliquez sur le bouton ci-dessus pour ajouter de nouvelles eleteurs</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>N°</th>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Asso</th>
                        <th>MDP</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="py-1"><img src="{{asset('users/adja.jpg')}}" alt="image" /></td>
                            <td>Coumare</td>
                            <td>Djeneba</td>
                            <td>Ouenzzin</td>
                            <td>dcoumare99@gmail.com</td>
                            <td>INTEC</td>
                            <td>password</td>
                            <td><span class="btn ">...</span></td>
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
