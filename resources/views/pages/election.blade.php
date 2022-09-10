@extends("layouts.navbar")

@section('content')
<!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0">Election</h3>
        <div class="d-flex">
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"> <i class="mdi mdi-plus"></i> Programmer</button>
        </div>
    </div>

    {{-- start offcanvas --}}
    <div class="offcanvas offcanvas-end my-4"  data-bs-backdrop="static"  tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasTopLabel">Programmer une nouvelle election</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="forms-sample" method="POST" action="{{ route('election')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="libelle">Libelle</label>
                    <input type="text" class="form-control" name="libelle" id="libelle" placeholder="Libelle" />
                </div>
                <div class="form-group">
                    <label for="poste">Poste</label>
                    <input type="text" class="form-control" name="poste" id="poste" placeholder="Poste à pourvoir" />
                </div>
                <div class="form-group">
                    <label for="statut">Statut</label>
                    <select name="statut" id="statut">
                        <option value="fermer">Fermer</option>
                        <option value="ouverte">Ouverte</option>
                        <option value="en attente">En attente</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="debut">Debut</label>
                    <input type="datetime-local" class="form-control" name="debut" id="debut" placeholder="Date de demarrage" />
                </div>
                <div class="form-group">
                    <label for="fin">Fin</label>
                    <input type="datetime-local" class="form-control" name="fin" id="fin" placeholder="Date de fermeture" />
                </div>
                <button type="reset" class="btn btn-light me-3">Annuler</button>
                <button type="submit" class="btn btn-primary mr-2"> Enregistrer </button>
            </form>
        </div>
    </div>
    {{-- End offcanvas --}}

    @if (session()->has("success"))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert">x</button>
            <h5>{{session()->get('success')}}</h5>
        </div>
    @endif
    @if (session()->has("successDelete"))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert">x</button>
            <h6>{{session()->get('successDelete')}}</h6>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert">x</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
    @endif
    {{-- start table --}}
    @foreach ($elections as $election)
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"> {{$election->libelle}} </h4>
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
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td> {{$election->libelle}} </td>
                                <td>{{$election->poste}}</td>
                                <td>{{$election->debut}}</td>
                                <td>{{$election->fin}}</td>
                                <td>{{$election->statut}}</td>
                                <td>
                                    <a href="{{route('election.edit', ['election'=>$election->id] )}}" class="btn btn-primary btn-sm"><i class="mdi mdi-file-edit"></i></a>

                                    <a href="#" class="btn btn-danger btn-sm" onclick="if(confirm('Voulez-vous vraiment supprimer cette election?')){document.getElementById('form-{{$election->id}}').submit() }" ><i class="mdi mdi-delete"></i></a>

                                    <form id="form-{{$election->id}}" action="{{route('election.supprimer', ['election'=>$election->id])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    {{-- End table --}}

    <!-- end content -->
@endsection
