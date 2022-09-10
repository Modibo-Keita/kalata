@extends("layouts.navbar")

@section('content')
    <!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0">Administrateurs designés</h3>
        <div class="d-flex">

            <h2 class="accordion-header" id="headingOne">
                <button class="btn btn-sm ml-3 btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseImport" aria-expanded="true" aria-controls="collapseImport">
                <i class="mdi mdi-alert-circle-outline"></i> Note
                </button>
            </h2>

            <button type="button" class="btn btn-sm ml-3 btn-info" data-bs-toggle="modal" data-bs-target="#addAsso" > <i class="mdi mdi-plus"></i> Nouvel Administrateur </button>



        </div>
    </div>

    {{-- start accordeon --}}
    <div class="accordion mb-3">
        <div class="accordion-item">
            <div id="collapseImport" class="accordion-collapse collapse" aria-labelledby="headingOne">
                <div class="col-12">
                    <div class="card stretch-card">
                        <div class="card-body">
                            <p class="card-description"> Ici vous pouvez ajouter des nouveaux administrateurs qui vous aideront dans la gestion de votre election. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end accordeon --}}

    {{-- start modal --}}
    <div class="modal fade" id="addAsso" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addAssoLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addAssoLabel">Ajout d'un administrateur </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" method="POST" action="{{route('admin')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="logo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo de profil"/>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" />
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="prenom" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse" />
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="nom">Militant de l'association</label>
                                <select name="asso_id" id="asso_id" class="form-control">
                                    @foreach ($assos as $asso)
                                    {{-- <option value=""></option> --}}
                                    <option value="{{$asso->id}}">{{$asso->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <label for="email" class="col-form-label" >Adresse email</label>

                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" name="email" id="email" placeholder="Email" />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="form-group">

                            <label for="password" class="col-form-label" >Mot de passe</label>

                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password" placeholder="Mot de passe" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="col-form-label" >Confirmer mot de passe</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" placeholder="confirmer mot de passe" />
                        </div>
                        <div class="d-flex justify-content-around">
                            <button type="reset" class="btn btn-warning">Annuler</button>
                            <button type="submit" class="btn btn-primary"> Enregistrer </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
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

                    @if (session()->has("successDelete"))
                        <div class="alert alert-success">
                            <h3>{{session()->get('successDelete')}}</h3>
                        </div>
                    @endif

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
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td class="py-1"><img src="{{asset($admin->photo)}}" alt="image" /></td>
                                <td>{{$admin->nom}}</td>
                                <td>{{$admin->prenom}}</td>
                                <td>{{$admin->adresse}}</td>
                                <td>{{$admin->email}}</td>
                                <td>{{$admin->asso->nom}}</td>
                                <td>

                                    <a href="{{route('admin.edit', ['admin'=>$admin->id] )}}" class="btn btn-primary btn-sm" title="modifier"><i class="mdi mdi-file-edit"></i></a>

                                    <a href="#" title="supprimer" class="btn btn-danger btn-sm" onclick="if(confirm('Voulez-vous vraiment supprimer cet administrateur?')){document.getElementById('form-{{$admin->id}}').submit() }" ><i class="mdi mdi-delete"></i></a>

                                    <form id="form-{{$admin->id}}" action="{{route('admin.supprimer', ['admin'=>$admin->id])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
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
