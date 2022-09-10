@extends("layouts.navbar")

@section('content')
    <!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0">Modification: Association </h3>
        <div class="d-flex">
            <a href="{{route('asso')}}" type="button" class="btn btn-sm ml-3 btn-success" > <i class="mdi mdi-eye"></i> Liste des Associations </a>
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

                    <form class="forms-sample" method="POST" action="{{route('asso.update', ['asso'=>$asso->id] )}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="_method" value="put">

                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <input type="file" class="form-control" name="logo" id="logo" placeholder="Logo"/>
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom Association</label>
                            <input type="text" class="form-control" name="nom" id="nom" required value="{{$asso->nom}}" placeholder="Nom de l'association" />
                        </div>
                        <div class="form-group">
                            <label for="leader">Leader</label>
                            <input type="text" class="form-control" name="leader" id="leader" required value="{{$asso->leader}}" placeholder="Nom du leader" />
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control" name="adresse" id="adresse" required value="{{$asso->adresse}}" placeholder="Adresse" />
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
