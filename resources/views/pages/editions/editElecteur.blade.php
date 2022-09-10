@extends("layouts.navbar")

@section('content')
    <!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0">Modification: Electeur </h3>
        <div class="d-flex">
            <a type="button" href="{{route('electeur')}}" class="btn btn-sm ml-3 btn-success"> <i class="mdi mdi-eye"></i> Liste des Electeurs </a>
        </div>
    </div>


    {{-- start edit form --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card shadow">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif

                    <form class="forms-sample" method="POST" action="{{route('electeur.update', ['utilisateur'=>$utilisateur->id] )}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label for="logo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo de profil"/>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="nom">Nom</label>
                                <input type="text" value="{{$utilisateur->nom}}" class="form-control" id="nom" name="nom" placeholder="nom" />
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="prenom">Prenom</label>
                                <input type="text" value="{{$utilisateur->prenom}}" class="form-control" name="prenom" id="prenom" placeholder="prenom" />
                            </div>
                        </div>

                        <div class="form-group">

                            <label for="email" class="col-form-label" >Email</label>

                            <input type="email" value="{{$utilisateur->email}}" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" name="email" id="email" placeholder="Email" />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="adresse">Adresse</label>
                                <input type="text" value="{{$utilisateur->adresse}}" class="form-control" name="adresse" id="adresse" placeholder="Adresse" />
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="nom">Nom Association</label>
                                <select name="asso_id" id="asso_id" class="form-control">
                                    @foreach ($assos as $asso)
                                    {{-- <option value=""></option> --}}
                                    <option value="{{$asso->id}}">{{$asso->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <label for="password" class="col-form-label" >Mot de passe</label>

                            <input type="password" value="{{$utilisateur->password}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password" placeholder="Mot de passe" />

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <label for="password_confirmation" class="col-form-label" >Confirmer mot de passe</label>
                            <input type="password" value="{{$utilisateur->password}}" class="form-control" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" placeholder="confirmer mot de passe" />
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-warning me-5">Annuler</button>
                            <button type="submit" class="btn btn-primary me-5"> Enregistrer </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- End edit form --}}

    <!-- end content -->
@endsection
