<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        Session::flush();
        return view('login');

    }
    public function yash(Request $request)
    {
        echo "yash";

    }
    public function login(Request $request){
        echo "yash";
    //         $this->validate($request,[
    //         'email'=>'required',
    //         'password' => 'required |min : 8'
    //     ]);
    //       $email=strtolower($request->email);
    //    echo $check=User::where(['email'=>$email,'password'=>$request->password])->first();
    //      if($check !=""){

    //           Session::put("user",$check);
    //         return redirect('/home')->with("success",'Logged In Successfully . ');
    //     }else{

    //         return redirect('/')->with("Err",'Invalid Credentials');
    //     }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'name'=> "required",
            'email'=>'required',
            'password' => 'required | confirmed |min : 8'
        ]);
            $email=strtolower($request->email);
        $create= User::create([
        'name' => $request->name,
        'email'=>$email,
        'password'=>$request->password
        ]);
        if($create){
            return redirect('/')->with("success",'Employee Registered Successfully . ');
        }else{
            return redirect('/register')->with("Err",'Unable To Register Employee . ');
        }
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

    }
    public function logout()
    {
        Session::flush();
        // Session::destroy();
        return redirect("/");
    }
}
