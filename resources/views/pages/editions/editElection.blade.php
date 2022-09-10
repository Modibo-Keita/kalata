@extends("layouts.navbar")

@section('content')
    <!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0">Modification: Election </h3>
        <div class="d-flex">
            <a href="{{ route('election')}}" type="button" class="btn btn-sm ml-3 btn-success" > <i class="mdi mdi-eye"></i> Liste des Elections </a>
        </div>
    </div>


    {{-- start edit form --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    @if (session()->has("success"))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="btn-close" data-bs-dismiss="alert">x</button>
                            <h6>{{session()->get('success')}}</h6>
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

                    <form class="forms-sample" method="POST" action="{{route('election.update', ['election'=>$election->id] )}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label for="libelle">Libelle</label>
                            <input type="text" class="form-control" name="libelle" id="libelle" value="{{$election->libelle}}" placeholder="Libelle" />
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="poste">Poste</label>
                                <input type="text" class="form-control" name="poste" id="poste" value="{{$election->poste}}" placeholder="Poste à pourvoir" />
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="statut">Statut</label>
                                <select name="statut" id="statut" class="form-control ">
                                    <option value="fermer">Fermer</option>
                                    <option value="ouverte">Ouverte</option>
                                    <option value="en attente">En attente</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="debut">Debut</label>
                                <input type="datetime-local" class="form-control" name="debut" id="debut" placeholder="Date de demarrage" value="{{$election->debut}}" />
                            </div>
                            <div class="form-group col-sm-12 col-md-6">
                                <label for="fin">Fin</label>
                                <input type="datetime-local" class="form-control" name="fin" id="fin" placeholder="Date de fermeture" value="{{$election->fin}}" />
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-danger me-3">Annuler</button>
                            <button type="submit" class="btn btn-primary ms-2 me-5"> Enregistrer </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- End edit form --}}

    <!-- end content -->
@endsection
