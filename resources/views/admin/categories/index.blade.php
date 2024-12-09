@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <div class="card-header">
                    <h4>Category table</h4>
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
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key => $category)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$category->category}}</td>
                        <td>
                            <button id="{{$category->id}}" type="button" style="width: 25px; height:34px; padding: 9px 23px 9px 12px;"
                                class="btn btn-primary btn-square editButton"
                                data-toggle="modal" data-target="#editModal">
                                <i class="icon-edit"></i>
                            </button>



                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger deleteButton"
                                    style="width: 25px; height:34px; padding: 9px 23px 9px 12px;">
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
                <h4 class="modal-title">New category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form action="{{ route('categories.store') }}" method="POST" id="categoryForm">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="category" class="form-control form-control-normal" placeholder="Enter categories name">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" style="background: darkturquoise;" form="categoryForm">Add Category</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit category</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form method="POST" id="categoryEditForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="category" name="category" class="form-control form-control-normal">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" style="background: darkturquoise;" form="categoryEditForm">Save Change</button>
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

@if(session('delete'))
<script>
    Swal.fire({
        title: "Deleted!",
        text: "{{ session('delete') }}",
        icon: "success",
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
                url: "/categories/" + id + "/edit",
                success: function(response) {
                    console.log(response);
                    $('#category').val(response.category);
                    $('#categoryEditForm').attr('action', '/categories/' + id);
                }
            });
        });

        $('.deleteButton').click(function(e) {
            e.preventDefault();

            var form = $(this).closest('form');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>
@endsection