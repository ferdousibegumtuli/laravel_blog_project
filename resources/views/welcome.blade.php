@extends('frontend.layouts.app')
@section('content')
<div class="row no-gutters-lg">

  <div class="col-12">
    <h2 class="section-title">Latest Articles</h2>
  </div>
  <div class="col-lg-8 mb-5 mb-lg-0">
    <div class="row">

      <div class="col-12 mb-4">
        <article class="card article-card">
          <a href="article.html">
            <div class="card-image">
              <div class="post-info"> <span class="text-uppercase">{{$articles[4]['created_at']}}</span>
                <span class="text-uppercase">3 minutes read</span>
              </div>
              <img loading="lazy" decoding="async" src="{{$articles[4]['image']}}" alt="Post Thumbnail" class="w-100" style="height: 500px;">
            </div>
          </a>
          <div class="card-body px-0 pb-1">
            <ul class="post-meta mb-2">
              <li> <a href="#!">{{$articles[4]['category']['category']}}</a>
                <a href="#!">{{$articles[4]['tag']['tag']}}</a>
              </li>
            </ul>
            <h2 class="h1"><a class="post-title" href="article.html">
                {{$articles[4]['title']}}</a></h2>
            <p class="card-text">{{substr($articles[4]['description'],0 ,250)."..."}}</p>
            <div class="content"> <a class="read-more-btn" href="article.html">Read Full Article</a>
            </div>
          </div>
        </article>
      </div>
      @foreach($articles[3] as $article)
      <div class="col-md-6 mb-4">
        <article class="card article-card article-card-sm h-100">
          <a href="article.html">
            <div class="card-image">
              <div class="post-info">
                <span class="text-uppercase">{{$article['created_at']}}</span>
              </div>
              @if(!empty($article['image']))
              <img loading="lazy" decoding="async" src="{{($article['image']) }}" alt="Post Thumbnail" class="w-100" style="height: 300px;">
              @else
              <img loading="lazy" decoding="async" src="{{ asset('articles_images/defaultPic.jpg') }}"
                alt="Default Thumbnail" class="w-100" style="height: 300px;">
              @endif
            </div>
          </a>
          <div class="card-body px-0 pb-0">
            <ul class="post-meta mb-2">
              <li> <a href="#!">{{$article['category']['category']}}</a>
              </li>
            </ul>
            <h2><a class="post-title" href="article.html">
                {{$article['title']}} </a></h2>
            <p class="card-text">{{substr($article['description'],0 ,150)."..."}}</p>
            <div class="content"> <a class="read-more-btn" href="article.html">Read Full Article</a>
            </div>
          </div>
        </article>
      </div>
      @endforeach


      <div class="col-12">
        <div class="row">
          <div class="col-12">
            <nav class="mt-4">
              <!-- pagination -->
              <nav class="mb-md-50">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" href="#!" aria-label="Pagination Arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
                      </svg>
                    </a>
                  </li>
                  <li class="page-item active "> <a href="index.html" class="page-link">
                      1
                    </a>
                  </li>
                  <li class="page-item"> <a href="#!" class="page-link">
                      2
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#!" aria-label="Pagination Arrow">
                      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                      </svg>
                    </a>
                  </li>
                </ul>
              </nav>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="widget-blocks">
      <div class="row">
        <div class="col-lg-12">
          <div class="widget">
            <div class="widget-body">
              <img loading="lazy" decoding="async" src="images/frontend/article.jpeg" alt="About Me" style= "width: 350; height: 230"; 
              class="author-thumb-sm d-block">
              <h2 class="widget-title my-3"> Stories To Spark Your Mind</h2>
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
                    <img loading="lazy" decoding="async" src="{{$articles[5]['image']}}" alt="Post Thumbnail" class="w-100">
                  </div>
                  <div class="card-body px-0 pb-1">
                    <h3><a class="post-title post-title-sm" href="article.html">
                        {{$articles[5]['title']}}
                      </a></h3>
                    <p class="card-text">{{substr($articles[5]['description'],0 ,150)."..."}}</p>
                    <div class="content"> <a class="read-more-btn" href="article.html">Read Full Article</a>
                    </div>
                  </div>
                </article>

                @foreach($articles[2] as $article)
                <a class="media align-items-center" href="article.html">
                  <img loading="lazy" decoding="async" src="{{$article['image']}}" alt="Post Thumbnail" class="w-100">
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
              @foreach($articles[0] as $categories)
                <li><a href="#!">{{$categories['category']}}</a>
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