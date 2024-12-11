@extends('layouts.app')
@section('content')
dd({{$article}});

<div id="styleSelector">
</div>
<script type="text/javascript">
    // var labels = {
    //     {
    //         Js::from($labels)
    //     }
    // };

    // var users = {
    //     {
    //         Js::from($data)
    //     }
    // };

    const data = {

        labels: labels,

        datasets: [{

            label: 'My First dataset',

            backgroundColor: 'rgb(255, 99, 132)',

            borderColor: 'rgb(255, 99, 132)',

            data: articles,

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