@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="breadcrumbs mb-4"> <a href="/">Home</a>
            <span class="mx-1">/</span> Articles
            <span class="mx-1">/</span> <a href="">{{$articles[5]['tag']}}</a>
        </div>
        <h1 class="mb-4 border-bottom border-primary d-inline-block">{{$articles[5]['tag']}}</h1>
    </div>
    <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="row">
            @foreach($articles[2] as $article)
            <div class="col-md-6 mb-4">
                <article class="card article-card article-card-sm h-100">
                    <a href="/{{$article['id']}}/article">
                        <div class="card-image">
                            <div class="post-info"> <span class="text-uppercase">{{$article['created_at']}}</span>
                            </div>
                            @if(!empty($article['image']))
                            <img loading="lazy" decoding="async" src="{{asset($article['image']) }}" alt="Post Thumbnail"
                                class="w-100" style="height: 300px;">
                            @else
                            <img loading="lazy" decoding="async" src="{{ asset('articles_images/defaultPic.jpg') }}"
                                alt="Default Thumbnail" class="w-100" style="height: 300px;">
                            @endif
                        </div>
                    </a>
                    <div class="card-body px-0 pb-0">
                        <ul class="post-meta mb-2">
                            <li>
                                 <a href="/{{$article['category']['id']}}/category">{{$article['category']['category']}}</a>
                            </li>
                        </ul>
                        <h2><a class="post-title" href="/{{$article['id']}}/article">{{($article['title']) }}</a></h2>
                        <p class="card-text">{{substr($article['description'],0 ,150)."..."}}</p>
                        <div class="content"> <a class="read-more-btn" href="/{{$article['id']}}/article">Read Full Article</a>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-lg-4">
        <div class="widget-blocks">
            <div class="row">
            <div class="col-lg-12">
                    <div class="widget">
                        <div class="widget-body">
                            <img loading="lazy" decoding="async" src="/images/frontend/tag.jpg" alt="About Me" class="w-100 author-thumb-sm d-block">
                            <h2 class="widget-title my-3">Fresh Insights</h2>
                            <p class="mb-3 pb-2">
                            <h4 style="display: inline;"> Welcome! </h4> This blog is where you'll find fresh ideas, tips, and stories to inspire you.
                            Whether you're looking for travel ideas or just something new to think about,
                            you’ve come to the right place. Let’s explore together!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="widget">
                        <h2 class="section-title mb-3">Recommended</h2>
                        <div class="widget-body">
                            <div class="widget-list">
                                <article class="card mb-4">
                                    <div class="card-image">
                                        <img loading="lazy" decoding="async" src="{{asset($articles[4]['image'])}}" alt="Post Thumbnail" class="w-100"
                                        style="height: 300px;">
                                    </div>
                                    <div class="card-body px-0 pb-1">
                                        <h3><a class="post-title post-title-sm" href="/{{$articles[4]['id']}}/article">{{$articles[4]['title']}}</a></h3>
                                        <p class="card-text">{{substr($articles[4]['description'],0 ,150)."..."}}</p>
                                        <div class="content"> <a class="read-more-btn" href="/{{$articles[4]['id']}}/article">Read Full Article</a>
                                        </div>
                                    </div>
                                </article>
                                @foreach($articles[3] as $article)
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
                        <h2 class="section-title mb-3">Tags</h2>
                        <div class="widget-body">
                            <ul class="widget-list">
                            @foreach($articles[1] as $tag)
                                <li><a href="/{{$tag['id']}}/article">{{$tag['tag']}}</a>
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