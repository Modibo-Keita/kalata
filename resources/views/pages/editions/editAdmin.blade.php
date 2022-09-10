@extends("layouts.navbar")

@section('content')
    <!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0">Modification: Administrateur</h3>
        <div class="d-flex">
            <a href="{{route('admin')}}" class="btn btn-sm ml-3 btn-success" data-bs-target="#addAsso" > <i class="mdi mdi-eye"></i> Liste Admins </a>
        </div>
    </div>



    {{-- start edit form --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    @if (session()->has("success"))
                        <div class="alert alert-success">
                            <h3>{{session()->get('success')}}</h3>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif

                    <form class="forms-sample" method="POST" action="{{route('admin.update', ['admin'=>$admin->id] )}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="put">
                        
                        <div class="form-group">
                            <label for="logo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo de profil"/>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" value="{{$admin->nom}}" placeholder="nom" />
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" name="prenom" id="prenom" value="{{$admin->prenom}}" placeholder="prenom" />
                            </div>
                        </div>

                        <div class="form-group">

                            <label for="email" class="col-form-label" >Adresse email</label>

                            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" name="email" id="email" value="{{$admin->email}}" placeholder="Email" />

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="nom">Militant de l'association</label>
                                <select name="asso_id" id="asso_id" class="form-control ">

                                    @foreach ($assos as $asso)
                                    @if($asso->id == $admin->asso_id)
                                    <option value="{{$asso->id}}" selected>{{$asso->nom}}</option>
                                    @else
                                    <option value="{{$asso->id}}">{{$asso->nom}}</option>
                                    @endif
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" name="adresse" id="adresse" value="{{$admin->adresse}}" placeholder="Adresse" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">

                                <label for="password" class="col-form-label" >Mot de passe</label>

                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="password" placeholder="Mot de passe" />

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                            <label for="password_confirmation" class="col-form-label" >Confirmer mot de passe</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" placeholder="confirmer mot de passe" />
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-warning me-3">Annuler</button>
                            <button type="submit" class="btn btn-primary me-3"> Enregistrer </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- End edit form --}}

    <!-- end content -->
@endsection
