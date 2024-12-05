@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <div class="card-header">
                    <h4>Tag table</h4>
                    <div style="text-align:right;">
                        <button type="button" style="background: darkgreen; " class="btn btn-mat btn-info"
                            data-toggle="modal" data-target="#addModal">Add</button>
                    </div>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tag</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $key => $tag)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$tag->tag}}</td>
                        <td>
                            <button id="{{$tag->id}}" type="button" style="width: 25px; height:34px; padding: 9px 23px 9px 12px;"
                                class="btn btn-primary btn-square editButton"
                                data-toggle="modal" data-target="#editModal">
                                <i class="icon-edit"></i>
                            </button>
                            <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="width: 25px; height:34px; padding: 9px 23px 9px 12px;">
                                    <i class="icon-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New tag</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form action="{{ route('tags.store') }}" method="POST" id="tagForm">
                        @csrf
                        <div class="form-group row">
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

<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit tag</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form method="POST" id="tagEditForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="tag" name="tag" class="form-control form-control-normal">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" style="background: darkturquoise;" form="tagEditForm">Save Change</button>
            </div>
        </div>
    </div>
</div>
</div>

@if(session('success'))
<script>
    Swal.fire({
        title: 'Success!',
        text: "{{ session('success') }}",
        icon: 'success',
        confirmButtonText: 'OK'
    });
</script>
@endif

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