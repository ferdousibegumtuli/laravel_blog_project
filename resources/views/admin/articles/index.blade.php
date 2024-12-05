@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <div class="card-header">
                    <h4>Articles table</h4>
                    <div style="text-align:right;">
                        <a href="articles/create " type="button" style="background: darkgreen; " class="btn btn-mat btn-info">Add</a>
                    </div>
                </div>

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Writer Name</th>
                        <th>Category</th>
                        <th>Tag</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New Article</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form action="{{ route('tags.store') }}" method="POST" id="tagForm">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="tag" class="form-control form-control-normal" placeholder="Enter tags name"><br>
                            </div>
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="tag" class="form-control form-control-normal" placeholder="Enter tags name"><br>
                            </div>
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="tag" class="form-control form-control-normal" placeholder="Enter tags name"><br>
                            </div>
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="tag" class="form-control form-control-normal" placeholder="Enter tags name"><br>
                            </div>
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="tag" class="form-control form-control-normal" placeholder="Enter tags name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" style="background: darkturquoise;" form="tagForm">Add tag</button>
            </div>
        </div>
    </div>
</div>
</div>
<script>

$(document).ready(function() {
    $('.editButton').click(function() {
        var id = this.id;
        
        $.ajax({
            type: "GET",
            url: "/tags/" + id + "/edit",
            success: function(response) {
                console.log(response);
                $('#tag').val(response.tag);
                $('#tagEditForm').attr('action', '/tags/' + id);
            }
        });
    });
});

</script>
@endsection