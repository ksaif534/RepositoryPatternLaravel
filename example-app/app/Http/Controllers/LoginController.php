<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $login      = $request->get('login');
        $password   = $request->get('password');
        $query      = User::where('name',$login)
                        ->orWhere('email',$login)
                        ->first();
        $col_name   = '';
        $col_value  = '';
        if($query){
            if(filter_var($login, FILTER_VALIDATE_EMAIL)){
                $col_name   = 'email';
                $col_value  = $query->email;
            }elseif(preg_match("/[a-zA-Z0-9]/",$login)){
                $col_name   = 'name';
                $col_value  = $query->name;
            }else{
                
            }
            $remember       = $request->has('remember') && $request->remember ? $request->remember : false;
            $credentials    = [
                $col_name   => $col_value,
                'password'  => $password
            ]; 
            if (Auth::attempt($credentials,$remember)) {
                return redirect()->route('repository-pattern.index');
            }else{
                return back();
            }
        }else{
            return back();
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

    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');
    }
}
