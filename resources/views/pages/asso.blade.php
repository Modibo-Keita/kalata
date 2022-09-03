@extends("layouts.navbar")

@section('content')
    <!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0"> Gestion des associations </h3>
        <div class="d-flex">
            {{-- <button type="button" class="btn btn-sm ml-3 btn-info" data-bs-toggle="modal" data-bs-target="#modaltest" > Importer </button> --}}
            <h2 class="accordion-header" id="headingOne">
                <button class="btn btn-sm ml-3 btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseImport" aria-expanded="true" aria-controls="collapseImport">
                    Importer
                </button>
            </h2>
            <button type="button" class="btn btn-sm ml-3 btn-success" data-bs-toggle="modal" data-bs-target="#addAsso" > Ajouter une association </button>
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
            <form class="forms-sample">
                <div class="form-group">
                <label for="logo">Logo</label>
                <input type="file" class="form-control" id="logo" placeholder="Logo"/>
                </div>
                <div class="form-group">
                <label for="nom">Nom Association</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom de l'asso." />
                </div>
                <div class="form-group">
                <label for="leader">Leader</label>
                <input type="text" class="form-control" id="leader" placeholder="Nom du leader" />
                </div>
                <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" placeholder="Adresse" />
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
                            <p class="card-description"> Selectionner le fichier à importer </p>
                            <form class="form-inline">
                            <label class="sr-only" for="inlineImport">Fichier</label>
                            <div class="input-group mb-2">
                                <input type="file" class="form-control" id="inlineImport" placeholder="" />
                            </div>
                            <button type="submit" class="btn btn-primary mb-1"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end accordeon --}}

    {{-- start table --}}
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
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
                        <th>Adresse</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="py-1"><img src="{{asset('KALATA-Logo-Officiel.png')}}" alt="image" /></td>
                            <td>ANBIKO</td>
                            <td>Batouly</td>
                            <td>Lafiabougou</td>
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

    <!-- end content -->
@endsection


