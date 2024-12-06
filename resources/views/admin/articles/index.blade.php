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

                <tbody>
                    @foreach($articles as $key => $article)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->user_id}}</td>
                        <td>categories/{{$article->category_id}}</td>
                        <td>{{$article->tag_id}}</td>
                        <td>{{$article->status}}</td>
                        <td>
                            <!-- <button id="{{$article->id}}" type="button" style="width: 25px; height:34px; padding: 9px 23px 9px 12px;"
                                class="btn btn-primary btn-square editButton"
                                data-toggle="modal" data-target="#editModal">
                                <i class="icon-edit"></i>
                            </button>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="width: 25px; height:34px; padding: 9px 23px 9px 12px;">
                                    <i class="icon-trash"></i>
                                </button>
                            </form> -->
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
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