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
                <h4 class="card-title">Congres du 10 Juin 2020 </h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>N°</th>
                        <th>Libelle</th>
                        <th>Poste</th>
                        <th>Debut</th>
                        <th>Fin</th>
                        <th>Etat</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Election 2 </td>
                            <td>President</td>
                            <td>Aujourd'hui</td>
                            <td>Demain</td>
                            <td>Non active</td>
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

    {{-- start 2e table --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Congres du 20 Aout 2019 </h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>N°</th>
                        <th>Libelle</th>
                        <th>Poste</th>
                        <th>Debut</th>
                        <th>Fin</th>
                        <th>Etat</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Election de 2022</td>
                            <td>President</td>
                            <td>Aujourd'hui</td>
                            <td>Demain</td>
                            <td>Non active</td>
                            <td><span class="btn ">...</span></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End 2e table --}}

    <!-- end content -->
@endsection
