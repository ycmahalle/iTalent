<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"  crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/><title>iTalent</title>
</head>
<style>
    .main {
        background-attachment: fixed;
        background-position: center;
        background-image:url('img/call-to-action-bg.jpg');
        min-height: 100vh;
    }

    form {
        transform: scale(1.1);
    }

    .inn {
        background: rgba(255, 255, 255, 0.5);
        border: none;
        margin-bottom: 5%;
        padding: 8px 4px;
    }

    .inn:focus {
        background: rgba(255, 255, 255, 0.6);

    }
</style>

<body>
    <div class="container main d-flex justify-content-center align-items-center col-md-12">

        <form class="form-container col-lg-4 col-md-5 col-sm-7" method="post" action="/yash">
            @csrf
            <h1 class="text-white" style="text-align: center;font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;  font-size:3rem"> Login
            </h1>
            @if ($errors->any())
                <div class="alert alert-danger animate__animated  animate__backInUp opacity-80">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(Session::get('success'))
            <div class="alert alert-success animate__animated  animate__backInUp opacity-80 p-2 ">{{Session::get('success')}}</div>
            @endif
              @if(Session::get('Err'))
            <div class="alert bg-danger animate__animated  animate__backInUp opacity-80 p-2 ">{{Session::get('Err')}}</div>
            @endif

            <div class="form-group" style="">
                <input type="email" class="form-control inn rounded-pill  px-4" name="email" placeholder="Enter  Email Address">
            </div>
            <div class="form-group">
                <input type="password" class="form-control inn rounded-pill   px-4" name="password" placeholder="**********" >
            </div>
           <div class="form-group text-center"> New Employee ?<a href="/register" class="text-white">Register here</a></div>
            <div class="form-group text-center">
                <input type="submit" style="border:2px solid" class="form-control btn btn-pill rounded-pill btn-outline-dark opacity-90 w-50" name="Login" value="Login">
            </div>
        </form>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>

