@extends('layouts.app')
@section('content')
<div class="card" style="margin-top: 20;margin-left: 20;margin-right:400px">
    <div class="card-block">
        <h4 class="sub-title">Create Article</h4>


        <form action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" placeholder="Type your title in Placeholder">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select name="categori" class="form-control">
                        <option value="opt1">---Select Category---</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tag</label>
                <div class="col-sm-10">
                    <select name="tag" class="form-control">
                        <option value="">---Select Tag---</option>
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->tag}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Article</label>
                <div class="col-sm-10">
                    <textarea rows="5" cols="5" class="form-control" name="description" placeholder="Wright your article....."></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input name="image" type="file" class="form-control">
                    <!-- @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror -->
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="status" class="form-control">
                        <option value="">--Select Status--</option>
                        <option value="1">Published</option>
                        <option value="0">Draft</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 text-right">
                    <button style="background: darkturquoise; color:black" type="submit" class="btn hor-grd btn-grd-info">Create Article</button>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection