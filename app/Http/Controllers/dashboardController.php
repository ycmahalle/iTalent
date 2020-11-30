<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemList;
use App\Models\Order;
use Charts;
use Session;
use DB;
class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "yash Logged in";

        return view('home');
    }
    public function getData()
    {

        return $data = Order::where(['employee_name'=>'Ram'])->get();

    }
      public function showOrder()
    {
        $data = ItemList::all();

        Session::put("list",$data);
        return view('addOrder');
    }
    public function getRate(Request $request)
    {
        $data = $request->item;
        $rate=ItemList::where('item_name',$data)->get("rate");
        return $rate;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showReport()
    {
// ========================
          $data = DB::table('orders')->where('employee_name','Ram')
       ->select(
        DB::raw('item as item'),
        DB::raw('count(*) as quantity'))
       ->groupBy('item')
       ->get();
     $array[] = ['item', 'quantity'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->item, $value->quantity];
     }
     return view('reports')->with('item', json_encode($array));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'date'=>'required',
            'item' => 'required',
            'quantity'=>'required',

        ]);
        if(Session::get("user")){
            $name=Session::get("user")['name'];
            $date=date("d-m-Y");
            $time =date('h : i: s A');
             $data=Order::create([
                'employee_name' => $name,
                'order_date'=>$request->date,
                'order_time'=>$time,
                'item'=>$request->item,
                'quantity'=>$request->quantity,
                'total_amount'=>$request->amount
        ]);
            if($data){
                return redirect('/add-order')->with('success',"Order Added Successfully .");
            }else{
                return redirect('/add-order')->with('Err',"00ps ! something went wrong .");
            }
        }else{
            return redirect('/')->with('Err',"session expired");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
