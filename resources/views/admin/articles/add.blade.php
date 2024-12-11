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
                    <input type="text" name="title" placeholder="Type your title in Placeholder"
                    class="form-control @error('title') is-invalid @enderror">
                    @if($errors->has('title'))
                    <div class="error text-danger">{{ $errors->first('title') }}</div>
                    @endif
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Category</label>
                <div class="col-sm-10">
                    <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">---Select Category---</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('title'))
                    <div class="error text-danger">{{ $errors->first('title') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tag</label>
                <div class="col-sm-10">
                    <select name="tag_id" class="form-control @error('tag_id') is-invalid @enderror">
                        <option value="">---Select Tag---</option>
                        @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->tag}}</option>
                        @endforeach
                    </select>
                    @if($errors->has('tag_id'))
                    <div class="error text-danger">{{ $errors->first('tag_id') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Article</label>
                <div class="col-sm-10">
                    <textarea rows="5" cols="5" name="description" placeholder="Wright your article....."
                    class="form-control @error('description') is-invalid @enderror"></textarea>
                    @if($errors->has('description'))
                    <div class="error text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input name="image" type="file" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="">--Select Status--</option>
                        <option value="1">Published</option>
                        <option value="0">Draft</option>
                    </select>
                    @if($errors->has('status'))
                    <div class="error text-danger">{{ $errors->first('status') }}</div>
                    @endif
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