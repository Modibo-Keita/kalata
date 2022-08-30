@extends("layouts.navbar")

@section('content')
<!-- content -->
    <div class="page-header flex-wrap">
        <h3 class="mb-0"> Page de gestion des elections </h3>
        <div class="d-flex">
            <button type="button" class="btn btn-sm ml-3 btn-success" data-bs-toggle="modal" data-bs-target="#modaltest" > Ajouter une election </button>
        </div>
    </div>
    {{-- modal start --}}
    <div class="modal fade" id="modaltest" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><b>Add New Voter</b></h4>
                    </div>
                    <div class="modal-body">
                    <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="firstname" class="col-sm-3 control-label">Firstname</label>

                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-sm-3 control-label">Lastname</label>

                            <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="col-sm-3 control-label">Password</label>

                            <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="photo" class="col-sm-3 control-label">Photo</label>

                            <div class="col-sm-9">
                            <input type="file" id="photo" name="photo">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                    <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
                    </form>
                    </div>
                </div>
        </div>
    </div>
    {{-- modal end --}}
<!-- end content -->
@endsection
