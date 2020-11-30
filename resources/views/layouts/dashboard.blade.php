<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <title>iTalent | Dashboard</title>
</head>
<style>
    .header,body{
        overflow-x: hidden !important;
    }
</style>
<body>
    <div>


    <div class="header row">
        <div class="col-12">
            <h1>Friends Adda</h1>
            @if(Session::get('user'))
            <h3 class="name"><b style="color: rgb(95, 93, 93)">WelCome </b> {{Session::get('user')['name']}}</h3>
            @endif
        </div>

       <div class="logout rounded-pill" style="position: absolute;right:4vw;top:4vh;outline:none">
       <a href="{{url('/logout')}}" style="outline:none !important" class="btn btn-lg text-white">
          <span style="outline:none !important" class="glyphicon glyphicon-log-out"></span> Log out
        </a></div>
    </div>

    @yield('content')
<script src="https://code.jquery.com/jquery-3.1.1.min.js">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 @stack('scripts')
</body>
</html>
