@extends("layouts.dashboard")
@section('content')
             @if(Session::get('success'))
            <div class="alert alert-success animate__animated  animate__backInUp opacity-80 p-2 " style="z-index: 111;">{{Session::get('success')}}</div>
            @endif
    <div class="buttons row  col-md-12 col-sm-12 d-flex justify-content-center" style="margin-top: 20vh">
        <a class="col-md-3 col-sm-7 btn btn-outline-light p-4 w-25 m-4" href="{{url('/add-order')}}">Add Order</a>
        <a class="col-md-3 col-sm-7 btn btn-outline-light p-4 w-25 m-4" href="{{url('/view-report')}}">View Report</a>
    </div>
     </div>
@endsection
