@extends('layouts.app')
@section('content')

<div class="page-wrapper">
    <div class="page-body">
        <div class="row">
            <!-- card1 start -->
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <span class="bg-c-blue card1-icon"><i class="icon-foursquare"></i></span>
                        <span class="text-c-blue f-w-600">Total Cetegory</span>
                        <h4>{{$article[0][0]->totalCategory}}</h4>
                        <div>
                            <span class="f-left m-t-10 text-muted">
                                <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Just Update
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <span class="bg-c-pink card1-icon"><i class="icon-tags"></i></span>
                        <span class="text-c-pink f-w-600">Total Tag</span>
                        <h4>{{$article[0][0]->totalTag}}</h4>
                        <div>
                            <span class="f-left m-t-10 text-muted">
                                <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <span class="bg-c-green card1-icon"><i class="icon-book"></i></span>
                        <span class="text-c-green f-w-600">Published Article</span>
                        <h4>{{$article[0][0]->publishedArticle}}</h4>
                        <div>
                            <span class="f-left m-t-10 text-muted">
                                <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Tracked via microsoft
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3">
                <div class="card widget-card-1">
                    <div class="card-block-small">
                        <span class="bg-c-yellow card1-icon"><i class="icon-pencil"></i></span>
                        <span class="text-c-yellow f-w-600">Draft Article</span>
                        <h4>{{$article[0][0]->draftArticle}}</h4>
                        <div>
                            <span class="f-left m-t-10 text-muted">
                                <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Just update
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Statestics</h5>
                    </div>
                    <div class="card-block">
                        <canvas id="myChart" height="165px"></canvas>
                    </div>
                </div>
            </div>



            <div class="col-md-12 col-xl-4">
                <div class="card fb-card">
                    <div class="card-header">
                        <i class="icofont icofont-social-facebook"></i>
                        <div class="d-inline-block">
                            <h5>Article</h5>
                            <span>Total blog</span>
                        </div>
                    </div>
                    <div class="card-block text-center">
                        <div class="row">
                            <div class="col-6 b-r-default">
                                <h2>{{$article[0][0]->publishedArticle}}</h2>
                                <p class="text-muted">Published</p>
                            </div>
                            <div class="col-6">
                                <h2>{{$article[0][0]->draftArticle}}</h2>
                                <p class="text-muted">Draft</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card dribble-card">
                    <div class="card-header">
                        <i class="icofont icofont-social-dribbble"></i>
                        <div class="d-inline-block">
                            <h5>Category</h5>
                            <span>Total Category</span>
                        </div>
                    </div>
                    <div class="card-block text-center">
                        <div class="row">
                            <div class="col-6 ">
                                <h2>{{$article[0][0]->totalCategory}}</h2>
                                <p class="text-muted">Active</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card twitter-card">
                    <div class="card-header">
                        <i class="icofont icofont-social-twitter"></i>
                        <div class="d-inline-block">
                            <h5>Tag</h5>
                            <span>Current total tag</span>
                        </div>
                    </div>
                    <div class="card-block text-center">
                        <div class="row">
                            <div class="col-6 ">
                                <h2>{{$article[0][0]->totalTag}}</h2>
                                <p class="text-muted">Active</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-12">
                <table class="table table-hover">
                    <div class="card-header">
                        <h4>Articles table</h4>
                    </div>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Writer Name</th>
                            <th>Category</th>
                            <th>Tag</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($article[1] as $key => $article)
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div id="styleSelector">
</div>

<script type="text/javascript">

var labels =  {{ Js::from($labels) }};

var users =  {{ Js::from($data) }};
    
    const data = {
        labels: labels,
        datasets: [{
            label: 'My First dataset',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: users,
        }]
    };

    const config = {
        type: 'line',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
@endsection