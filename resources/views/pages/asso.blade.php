@extends("layouts.navbar")

@section('content')
    <!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0"> Gestion des associations </h3>
        <div class="d-flex">
            <h2 class="accordion-header" id="headingOne">
                <button class="btn btn-sm ml-3 btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseImport" aria-expanded="true" aria-controls="collapseImport">
                    <i class="mdi mdi-alert-circle-outline"></i> Note
                </button>
            </h2>
            <button type="button" class="btn btn-sm ml-3 btn-success" data-bs-toggle="modal" data-bs-target="#addAsso" > <i class="mdi mdi-plus"></i> Ajouter une association </button>
        </div>
    </div>

    {{-- start modal --}}
    <div class="modal fade" id="addAsso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addAssoLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addAssoLabel">Ajout d'une association</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form class="forms-sample" method="POST" action="{{ route('asso')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" class="form-control" name="logo" id="logo" placeholder="Logo"/>
                </div>
                <div class="form-group">
                <label for="nom">Nom Association</label>
                <input type="text" class="form-control" name="nom" id="nom" required placeholder="Nom de l'asso." />
                </div>
                <div class="form-group">
                <label for="leader">Leader</label>
                <input type="text" class="form-control" name="leader" id="leader" required placeholder="Nom du leader" />
                </div>
                <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" name="adresse" id="adresse" required placeholder="Adresse" />
                </div>
                <button type="reset" class="btn btn-light">Annuler</button>
                <button type="submit" class="btn btn-primary mr-2"> Enregistrer </button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        </div>
    </div>
    </div>
    </div>
    {{-- end modal --}}

    {{-- start accordeon --}}
    <div class="accordion mb-3">
        <div class="accordion-item">
            <div id="collapseImport" class="accordion-collapse collapse" aria-labelledby="headingOne">
                <div class="col-12 grid-margin stretch-card mt-3 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-description"> Ajouter les associations reconnues par le CNJ </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end accordeon --}}

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
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">
                <h4 class="card-title">Liste des associations</h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>N°</th>
                        <th>Logo</th>
                        <th>Nom</th>
                        <th>Leader</th>
                        <th>Siege</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($assos as $asso)

                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td class="py-1"><img src="{{asset('KALATA-Logo-Officiel.png')}}" alt="image" /></td>
                            <td>{{$asso->nom}}</td>
                            <td>{{$asso->leader}}</td>
                            <td>{{$asso->adresse}}</td>
                            <td>
                                <a href="{{route('asso.edit', ['asso'=>$asso->id] )}}" class="btn btn-primary btn-sm"><i class="mdi mdi-file-edit"></i></a>

                                <a href="#" class="btn btn-danger btn-sm" onclick="if(confirm('Voulez-vous vraiment supprimer cette association ?')){document.getElementById('form-{{$asso->id}}').submit() }" ><i class="mdi mdi-delete"></i></a>

                                <form id="form-{{$asso->id}}" action="{{route('asso.supprimer', ['asso'=>$asso->id])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>
                        </tr>

                        @endforeach
                        {{$assos->links()}}
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


