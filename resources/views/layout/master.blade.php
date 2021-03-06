<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>{{env('APP_NAME','Djv')}}</title>
    <link rel="stylesheet" href="{{asset('sass/app.scss')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
</head>
<body>
        @include('includes.navbar')
    <div class="container">

        @yield('content')
    </div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
