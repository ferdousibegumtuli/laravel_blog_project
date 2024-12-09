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
                        <td> Published </td>
                        }@else{
                        <td> Draft </td>
                        }
                        @endif
                        <td>
                            <a href="{{ route('articles.edit', $article->id) }}" type="button"
                                style="width: 25px; height:34px; padding: 9px 23px 9px 12px;"
                                class="btn btn-primary btn-square">
                                <i class="icon-edit"></i>
                            </a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger deleteButton" style="width: 25px; height:34px; padding: 9px 23px 9px 12px;">
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