@extends("layouts.dashboard")
@push('scripts')
    <script src="{{asset('js/calculate.js')}}"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
@endpush
@section('content')
 <div class="container d-flex justify-content-center" style="flex-direction: column">
     <div class="buttons row  col-md-12 col-sm-12 d-flex justify-content-center">
        <a class="col-md-3 col-sm-7 btn btn-outline-light p-4 w-25 m-4" href="{{url('/add-order')}}">Add Order</a>
        <a class="col-md-3 col-sm-7 btn btn-outline-light p-4 w-25 m-4" href="{{url('/view-report')}}">View Report</a>
    </div>
    <br><br><br>
 <form id="add_order_form" method="POST" action="{{url('/add/order')}}" class="add-order col-lg-5" style="margin:auto;padding:0;">
    @csrf
    <div class="card-header" style="background: rgba(0,0,0,0.4);">
        <h1 class="text-white d-flex justify-content-center p-3" style="font-size: 32px">Add Order</h1>
    </div>
	<div class="card-body ">
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

        <div id="err"></div>
        <div class="row  ">
            <div class="form-group col-lg-12">
                <label>Date :</label>
                <input type="date" id="date" name="date" data-date-format="DD MMMM YYYY" class="form-control" required/>
                <div style="color: red">{{ $errors->first('date') }}</div>

            </div>
            <div class="form-group col-lg-8">
				<label>Item :</label>
                @if (Session::has("list"))
					<select id="item" class="form-control" name="item" style="font-size:16px" required>
                            <option value="">--Select item--</option>
                            @foreach (Session::get("list") as $item)
                                <option value="{{$item->item_name}}" data-rate="{{$item->rate}}">{{$item->item_name}}</option>
                            @endforeach
                        </select>
                          <div>{{ $errors->first('item') }}</div>

                        @endif
			</div>
		    <div class="form-group col-lg-4">
                <label>Quantity</label>
                <div class="input-group">
                    {{-- <div class="input-group-prepend"><span class="input-group-text" >$</span></div> --}}
                    <input type="number" id="quantity" name="quantity" class="form-control" placeholder="0"/>
                      <div class="form-text text-danger">{{ $errors->first('quantity') }}</div>
                </div>
            </div>
            <div class="form-group col-lg-12">
                <label class="text-white">Total Amount :</label>
                <div class="input-group">
                    {{-- <div class="input-group-prepend"><span class="input-group-text" >$</span></div> --}}
                    <input type="text" id="amount" name="amount" readonly aria-selected="false" class="form-control" placeholder="--"/>
                 <div class="form-text text-danger">{{ $errors->first('amount') }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer col-lg-12" style="background: rgba(0,0,0,0.4);">
        <input type="submit" class="btn btn-success p-3  m-3 w-25" style="font-size: 15px" value="Add Order">
		{{-- <button type="reset" class="btn btn-success mr-2">Submit</button> --}}
		<button type="reset" class="btn btn-secondary p-3 m-3 w-25" style="font-size: 15px">Cancel</button>
	</div>
</form>
 </div>
@endsection
