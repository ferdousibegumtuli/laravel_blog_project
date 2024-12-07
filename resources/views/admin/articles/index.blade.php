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

                <tbody>
                    @foreach($articles as $key => $article)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->user->name}}</td>
                        <td>{{$article->category->category}}</td>
                        <td>{{$article->tag->tag}}</td>
                        @if($article->status == 1){
                        <td> Published</td>
                        }@else{
                        <td> Draft</td>
                        }
                        @endif
                        <td>
                            <button id="{{$article->id}}" type="button" style="width: 25px; height:34px; padding: 9px 23px 9px 12px;"
                                class="btn btn-primary btn-square editButton">
                                <i class="icon-edit"></i>
                            </button>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;">
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
        
        console.log(this);
        $.ajax({
            type: "GET",
            url: "/articles/" + id + "/edit",
            success: function(response) {
                console.log(response);
                
                // $('#tag').val(response.tag);
                $('#tagEditForm').attr('action', '/articles/' + id);
            }
        });
    });
});

</script>
@endsection