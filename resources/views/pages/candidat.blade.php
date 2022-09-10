@extends("layouts.navbar")

@section('content')
<!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0">Election active
        </h3>
        <div class="d-flex">
            <h2 class="accordion-header" id="headingOne">
                <button class="btn btn-sm ml-3 btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseImport" aria-expanded="true" aria-controls="collapseImport">
                <i class="mdi mdi-alert-circle-outline"></i> Note
                </button>
            </h2>

            <button type="button" class="btn btn-sm ml-3 btn-success" data-bs-toggle="modal" data-bs-target="#addAsso" > <i class="mdi mdi-plus btn-icon-prepend"></i> Inscrire un Candidat </button>
        </div>
    </div>

    {{-- start accordeon --}}
    <div class="accordion mb-3">
        <div class="accordion-item">
            <div id="collapseImport" class="accordion-collapse collapse" aria-labelledby="headingOne">
                <div class="col-12 grid-margin stretch-card mt-3 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-description"> Vous pouvez ajouter un candidat à votre election en appuyant le bouton à drote, le modifier ou le supprimer definitivement </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end accordeon --}}

    {{-- start modal --}}
    <div class="modal fade" id="addAsso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addAssoLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-2 border-dark">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white fw-bold" id="addAssoLabel">Inscription d'un Candidat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-body">
                    <form class="forms-sample" method="POST" action="{{ route('candidat')}}" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="logo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo de profil"/>
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" required class="form-control" id="nom" name="nom" placeholder="nom" />
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prenom</label>
                            <input type="text" class="form-control" required id="prenom" name="prenom" placeholder="prenom" />
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control" required id="adresse" name="adresse" placeholder="Adresse" />
                        </div>
                        <div class="form-group">
                            <label for="nom">Association</label>
                            <select name="asso_id" id="asso_id" class="form-control bg-indigo-600">
                                @foreach ($assos as $asso)
                                <option value=""></option>
                                <option value="{{$asso->id}}">{{$asso->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="slogan">Slogan</label>
                            <textarea class="form-control" name="slogan" placeholder="Slogan" id="slogan" cols="10" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="reset" class="btn btn-danger">Annuler</button>
                            <button type="submit" class="btn btn-primary"> Enregistrer </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer bg-primary">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal --}}

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
        <div class="alert alert-danger alert-dismissible">
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
                <p class="card-description">Liste des candidats inscris</p>
                <div class="table-responsive">
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th>N°</th>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Asso</th>
                        <th>Slogan</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($candidats as $candidat)

                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td class="py-1"><img src="{{asset('users/photo_cv.png')}}" alt="image" /></td>
                            <td>{{$candidat->nom}}</td>
                            <td>{{$candidat->prenom}}</td>
                            <td>{{$candidat->adresse}}</td>
                            <td>{{$candidat->asso->nom}}</td>
                            <td>{{$candidat->slogan}}</td>
                            <td>
                                <a href="{{route('candidat.edit', ['candidat'=>$candidat->id] )}}" class="btn btn-primary btn-sm"><i class="mdi mdi-file-edit"></i></a>

                                <a href="#" class="btn btn-danger btn-sm" onclick="if(confirm('Voulez-vous vraiment supprimer ce candidat?')){document.getElementById('form-{{$candidat->id}}').submit() }" ><i class="mdi mdi-delete"></i></a>

                                <form id="form-{{$candidat->id}}" action="{{route('candidat.supprimer', ['candidat'=>$candidat->id])}}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        {{$candidats->links()}}
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
