<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title>Reporter - HTML Blog Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <link rel="shortcut icon" href="/images/frontend/favicon.png" type="image/x-icon">
  <link rel="icon" href="/images/frontend/favicon.png" type="image/x-icon">
  <meta name="theme-name" content="reporter">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Neuton:wght@700&amp;family=Work+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/frontend/bootstrap.min.css">
  <link rel="stylesheet" href="/css/frontend/style.css">
</head>

<body>
  <header class="navigation">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light px-0">
        <a class="navbar-brand order-1 py-0" href="index.html">
          <img loading="prelaod" decoding="async" class="img-fluid" src="/images/frontend/logo.png" alt="Reporter Hugo">
        </a>
        <div class="navbar-actions order-3 ml-0 ml-md-4">
          <button aria-label="navbar toggler" class="navbar-toggler border-0" type="button" data-toggle="collapse"
            data-target="#navigation"> <span class="navbar-toggler-icon"></span>
          </button>
        </div>

        <form action="#!" class="search order-lg-3 order-md-2 order-3 ml-auto">
          <input id="search-query" name="s" type="search" placeholder="Search..." autocomplete="off">
        </form>

        <div class="collapse navbar-collapse text-center order-lg-2 order-4" id="navigation">
          <ul class="navbar-nav mx-auto mt-3 mt-lg-0">
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
              </a>
              <div class="dropdown-menu">
                @foreach($articles[0] as $categories)
                <a class="dropdown-item" href="{{ route('showCategory', $categories['id']) }}">{{$categories['category']}}</a>
                @endforeach
              </div>
            </li>
            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tag
              </a>
              <div class="dropdown-menu">
                @foreach($articles[1] as $tags)
                <a class="dropdown-item" href="{{ route('showTag', $tags['id']) }}">{{$tags['tag']}}</a>
                @endforeach
              </div>
            </li>
            @if (Route::has('login'))
            <li class="nav-item">
              <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/deshboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Deshboard</a>
            </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Sign In</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            </li>

            @endif
            @endauth
        </div>
        @endif
        </ul>

    </div>
    </nav>
    </div>
  </header>

  <main>
    <section class="section">
      <div class="container">