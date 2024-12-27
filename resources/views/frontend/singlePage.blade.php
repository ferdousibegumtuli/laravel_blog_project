@extends('frontend.layouts.app')
@section('content')
<div class="row">
  <div class="col-lg-8 ">
    <div class="breadcrumbs mb-4"> <a href="/">Home</a>
      <span class="mx-1">/</span> <a href="">Article</a>
    </div>
  </div>
  <div class="col-lg-8 mx-auto mb-5 mb-lg-0">

    @if(!empty($articles[0][0]['image']))
    <img loading="lazy" decoding="async" src="{{asset($articles[0][0]['image'])}}" class="img-fluid w-100 mb-4" alt="Author Image">
    @else
    <img loading="lazy" decoding="async" src="{{ asset('articles_images/defaultPic.jpg') }}" class="img-fluid w-100 mb-4" alt="Author Image">
    @endif

    <h1 class="mb-4">{{($articles[0][0]['title'])}}</h1>
    <div class="content">
      <p>{{substr(($articles[0][0]['description']), 0, 300)."..."}}</p>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="widget-blocks">
      <div class="row">
        <div class="col-lg-12 col-md-6">
          <div class="widget">
            <h2 class="section-title mb-3">Recommended</h2>
            <div class="widget-body">
              <div class="widget-list">
                <article class="card mb-4">
                  <div class="card-image">
                    <img loading="lazy" decoding="async" src="{{asset($articles[2]['image'])}}" alt="Post Thumbnail" class="w-100">
                  </div>
                  <div class="card-body px-0 pb-1">
                    <h3><a class="post-title post-title-sm" href="/{{$articles[2]['id']}}/article">
                        {{$articles[2]['title']}}
                      </a></h3>
                    <p class="card-text">{{substr($articles[2]['description'],0 ,150)."..."}}</p>
                    <div class="content"> <a class="read-more-btn" href="/{{$articles[2]['id']}}/article">Read Full Article</a>
                    </div>
                  </div>
                </article>

                @foreach($articles[1] as $article)
                <a class="media align-items-center" href="/{{$article['id']}}/article">
                  <img loading="lazy" decoding="async" src="{{asset($article['image'])}}" alt="Post Thumbnail" class="w-100">
                  <div class="media-body ml-3">
                    <h3 style="margin-top:-5px">{{$article['title']}}</h3>
                    <p class="mb-0 small">{{substr($article['description'],0 ,150)."..."}}</p>
                  </div>
                </a>
                @endforeach

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="widget">
            <h2 class="section-title mb-3">Categories</h2>
            <div class="widget-body">
              <ul class="widget-list">
                @foreach($categories as $category)
                <li>
                  <a href="/{{$category['id']}}/category">{{$category['category']}}</a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="widget">
            <h2 class="section-title mb-3">Tags</h2>
            <div class="widget-body">
              <ul class="widget-list">
                @foreach($tags as $tag)
                <li><a href="/{{$tag['id']}}/tag">{{$tag['tag']}}</a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection