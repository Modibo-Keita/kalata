@extends("layouts.navbar")

@section('content')
    <!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0">Modification: Candidats </h3>
        <div class="d-flex">
            <button type="button" class="btn btn-sm ml-3 btn-success" data-bs-toggle="modal" data-bs-target="#addAsso" > <i class="mdi mdi-eye"></i> Liste des Candidats </button>
        </div>
    </div>


    {{-- start edit form --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
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

                    <form class="forms-sample" method="POST" action="{{ route('candidat.update', ['candidat'=>$candidat->id] )}}" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label for="logo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo" placeholder="Photo de profil"/>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="nom">Nom</label>
                                <input type="text" value="{{$candidat->nom}}" required class="form-control" id="nom" name="nom" placeholder="nom" />
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="prenom">Prenom</label>
                                <input type="text" value="{{$candidat->prenom}}" class="form-control" required id="prenom" name="prenom" placeholder="prenom" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" value="{{$candidat->nom}}" class="form-control" required id="adresse" name="adresse" placeholder="Adresse" />
                        </div>
                        <div class="form-group">
                            <label for="nom">Association</label>
                            <select name="asso_id" id="asso_id" class="form-control">
                                @foreach ($assos as $asso)
                                @if($asso->id == $candidat->asso_id)
                                <option value="{{$asso->id}}" selected>{{$asso->nom}}</option>
                                @else
                                <option value="{{$asso->id}}">{{$asso->nom}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="slogan">Slogan</label>
                            <textarea class="form-control" name="slogan" value="{{$candidat->slogan}}" placeholder="Slogan" id="slogan" cols="10" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-danger me-4">Annuler</button>
                            <button type="submit" class="btn btn-primary me-4"> Enregistrer </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- End edit form --}}

    <!-- end content -->
@endsection
