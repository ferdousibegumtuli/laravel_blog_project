<html lang="en" class=" js flexbox flexboxlegacy canvas canvastext 
    webgl no-touch geolocation postmessage no-websqldatabase indexeddb 
    hashchange history draganddrop websockets rgba hsla multiplebgs 
    backgroundsize borderimage borderradius boxshadow textshadow opacity 
    cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d 
    csstransitions fontface generatedcontent video audio localstorage sessionstorage 
    webworkers no-applicationcache svg inlinesvg smil svgclippaths">

<head>
    <title>Blog Project</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <link rel="icon" href="css/deshboard/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/deshboard/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/deshboard/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="css/deshboard/icofont.css">
    <link rel="stylesheet" type="text/css" href="css/deshboard/style.css">
    <link rel="stylesheet" type="text/css" href="css/deshboard/jquery.mCustomScrollbar.css">
</head>


<body class="fix-menu">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<script type="text/javascript" src="js/deshboard/jquery.min.js"></script>
<script type="text/javascript" src="js/deshboard/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/deshboard/popper.min.js"></script>
<script type="text/javascript" src="js/deshboard/bootstrap.min.js"></script>
<script type="text/javascript" src="js/deshboard/jquery.slimscroll.js"></script>
<script type="text/javascript" src="js/deshboard/modernizr.js"></script>
<script src="js/deshboard/amcharts.min.js"></script>
<script src="js/deshboard/serial.min.js"></script>
<script type="text/javascript " src="js/deshboard/todo.js "></script>
<script type="text/javascript" src="js/deshboard/custom-dashboard.js"></script>
<script type="text/javascript" src="js/deshboard/script.js"></script>
<script type="text/javascript " src="js/deshboard/SmoothScroll.js"></script>
<script src="js/deshboard/pcoded.min.js"></script>
<script src="js/deshboard/demo-12.js"></script>
<script src="js/deshboard/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
    var $window = $(window);
    var nav = $('.fixed-button');
    $window.scroll(function() {
        if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        } else {
            nav.removeClass('active');
        }
    });
</script>
</body>
</html>





